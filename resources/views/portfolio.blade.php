<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Gabriel Leal</title>


    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/app.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>


</head>

<body>
<header class="text-center top-header">

    <img alt="me" src="/me.jpeg" id="profile-picture" />
    <div class="title ">
        <h1> Gabriel Leal</h1>
        <h3> Desenvolvedor back-end</h3>
        <nav>
            <a class="scroll" href="#">Sobre Mim</a>
            <a class="scroll" href="#skills ">Habilidades</a>
            <a class="scroll" href="#experiences">Experiências</a>
            <a class="scroll" href="#contact">Contato</a>
        </nav>
    </div>
</header>

<div class="container" id="app">
    <div class="panel about-me row">
        <i class="fa fa-user"></i>
        <h3>Sobre mim</h3>
        <p>
            Olá, sou um desenvolvedor Back-end com foco em Php, Laravel e caso necessário um pouco de NodeJs. Gosto de novos desafios e de aprender cada vez mais a ser um profissional melhor e uma pessoa melhor.
        </p>
    </div>

    <section id="skills" class="row d-flex justify-content-center text-center">
        <div class="header-skills">
            <h3 >Habilidades e tecnologias</h3>
            <p>Algumas das habilidades e tecnologias que tive experiência e estudei sobre.</p>
        </div>
        <div class="content-skills row">
            <skill skill="PHP" average-begun="2 anos" average-finished="3 anos" color="#003c8f"></skill>
            <skill skill="Laravel" average-begun="1 ano" average-finished="2 anos" color="#003c8f"></skill>
            <skill skill="Git" average-begun="1 ano" average-finished="2 anos" color="#003c8f"></skill>
            <skill skill="MySQL" average-begun="2 anos" average-finished="3 anos" color="#003c8f"></skill>
            <skill skill="Linux" average-begun="1 ano" average-finished="2 anos" color="#003c8f"></skill>
            <skill skill="Docker" average-begun="6 meses" average-finished="1 ano" color="#003c8f"></skill>
            <skill skill="RabbitMQ" average-begun="1 mês" average-finished="6 meses" color="#003c8f"></skill>
            <skill skill="Javascript" average-begun="6 meses" average-finished="1 ano" color="#003c8f"></skill>
        </div>
    </section>


    <section class="mt-2 justify-content-center">
        <div class="my-4">
            <h3 class="text-center"> Experiência profissional</h3>
        </div>

        <div class="mx-auto w-75">
            <experience company="Phooto" date="Ago/2020 a Mai/2021" position="Desenvolvedor back-end"   src="assets/experiences/phooto.png">
                Ao entrar na empresa, era responsável em criar novas funcionalidades, dar manutenção e corrigir problemas no sistema interno. Depois de alguns meses comecei a ser responsavel na criação de processos automatizados e fluxos para pedidos. Tive a oportunidade de aprender muito algumas tecnologias como Docker e RabbitMQ e me aperfeiçoar nas linguagens/tecnlogias que já tinha conhecimento.
            </experience>
        </div>
    </section>

    <section id="experiences" class="w-100">
        <h3 class="text-center"> Projetos</h3>
        <div>
            <project title='2º Lugar no HackaTrouble' href="https//www.hackatrouble.com.br/premiados#h.6828d6a3178848d_163">
                No mês de março de 2020 tive a portunidade de participar do HackaTrouble, um hackaton organizado pelo Centro Paula Souza com o objetivo
                de promover ideias para ajudar as pessoas nessa pandemia. Eu e minha equipe fomos premiados em 2º lugar com a ideia do SoSale, um sistema de filas para comércios a fim de evitar aglomerações.
            </project>
            <project title='Light framework' href="https://github.com/Magin02/light-framework">
                O Light framework é uma ferramenta que criei do zero com php 7 para estudo e facilitar na criação de novos projetos em php.
                Este framework utiliza o padrão MVC (model-view-controller) como design-pattern e twig para manipulação da view e templates.
            </project>
            <project title='Faire' href="http://faireapp.herokuapp.com/">
                O Faire é um web-aplicativo para criar lista de tarefas que foi feito para estudo e testar o Light Framework, um framework em PHP criado também para estudos.
            </project>
            <project title='Portfólio' href="https://github.com/Magin02/portfolio">
                Meu portfólio foi feito totalmente em Laravel e procurei fazer algo bem limpo para demonstrar minhas capacidades técnicas de forma melhor e prática com uma pagina simples e um sistema de mensagens.
            </project>
            <project title='Gym track' href="https://github.com/LucasHe4rt/gym-track">
                Gym track foi um projeto da faculdade para ajudar a gerir uma academia, onde trabalhei usando git flow em equipe sempre visando as boas práticas e usando swagger para documentar cada endpoint.
            </project>
            <project title='Monitoria'>
                Durante 1 ano letivo tive a oportunidade de dar monitoria na ETEC Prof. Marcos Uchoas Dos Santos Penchel no meu ultimo ano, nessa monitoria foi trabalhado principalmente a lógica de programação e o raciocínio envolvido.
            </project>
        </div>
    </section>




   <contact-form message-url="/message"></contact-form>

</div>

<!-- Site footer -->
<footer class="site-footer ">
    <div class="container ">
        <div class="col-md-8 col-sm-6 col-xs-12 ">
            <p class="copyright-text ">Gabriel Leal &copy;<br>
                gabriel@gabrielleal.dev
            </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 ">
            <ul class="social-icons">
                <li><a class="github " href="https://github.com/Magin02 "><i class="fa fa-github "></i></a></li>
                <li><a class="linkedin " href="https://www.linkedin.com/in/gabriel-leal-2b6663195"><i class="fa fa-linkedin "></i></a></li>
                <li><a class="email " href="mailto:gabriel@gabrielleal.dev"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>
    </div>
</footer>
<script src="js/app.js"> </script>


<script>
    $('.scroll').on('click', function(e) {
        e.preventDefault();
        let id = $(this).attr('href'),
            targetOffset = $(id).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset - 100
        }, 500);
    });

    $('.list-header').on('click', function() {
        var $J_li = $(this).parents('.J_list')
        $J_li.hasClass('open') ? $J_li.removeClass('open') : $J_li.addClass('open');
    })

</script>

</body>

</html>
