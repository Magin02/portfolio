<template>
    <section id="contact">
        <h3 class="text-center">Entre em contato</h3>
        <form class="form-contact" method="post" @submit.prevent="submit">
            <input v-model="contact.name" name="name" placeholder="Seu nome" type="text" tabindex="1" required>
            <input v-model="contact.email" name="email" placeholder="seu@email.com" type="email" tabindex="2" required>
            <input v-model="contact.subject" name="subject" placeholder="Assunto da mensagem" type="text" tabindex="4" required>
            <textarea v-model="contact.content" name="content" placeholder="Conteúdo da mensagem" rows="3" tabindex="5" required></textarea>
            <div class="form-group">
                <input type="submit" class="btn btn_primary button" value="Enviar">
            </div>
        </form>
    </section>
</template>


<script>
import axios from 'axios';

export default {
    name: 'ContactForm',
    props: {
        messageUrl: String,
    },
    data(){
        return {
            contact: {
                id: 0,
                name: '',
                email: '',
                subject: '',
                content: '',
            }
        }
    },
    methods: {
        submit(){
            axios.post(this.messageUrl, this.contact)
                .then(() => toastr.success("Assim que puder retornarei sua mensagem, obrigado pelo contato", "Mensagem enviada com sucesso!"))
                .catch(err => {
                    if (err.response.status === 422){
                        let errors = Object.values(err.response.data.errors);
                        errors.forEach(e => toastr.error(e));
                    }
                    if (err.response.status === 429) {
                        toastr.error('Mensagem já enviada, pode tentar mandar outra em poucos minutos.')
                    }
                });
        }
    }
}

</script>

