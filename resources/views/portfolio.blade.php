<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <title>Gabriel Leal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel=" stylesheet " type="text/css " media="screen " href="/css/app.css" />
</head>

<body>
<div class="container"></div>
<header class="text-center ">

    <img src="/me.jpeg" id="profile-picture" />
    <div class="title ">
        <h1> Gabriel Leal</h1>
        <h3> Desenvolvedor back-end e estudante</h3>
        <nav>
            <a class="scroll" href="#">Sobre Mim</a>
            <a class="scroll" href="#skills ">Habilidades</a>
            <a class="scroll" href="#experiences">Experiências</a>
            <a class="scroll" href="#contact">Contato</a>
        </nav>
    </div>
</header>

<div class="container ">
    <div class="panel about-me row ">
        <i class="fa fa-user"></i>
        <h3>Sobre mim</h3>
        <p>
            Olá me chamo Gabriel Leal, tenho 18 anos. Comecei a programar há 3 anos quando tive que fazer um sistema para um curso técnico de informática, esse sistema abriu minha mente á programação e desde aquele trabalho venho me empenhando para aprender cada
            dia mais. Hoje faço o curso de Análise e desenvolvimento de Sistemas na Fatec prof. Waldemiro May - Cruzeiro/SP
        </p>

    </div>


    <section id="skills" class="row d-flex justify-content-center text-center">
        <div class="header-skills ">
            <h3 >Habilidades e tecnologias</h3>
            <p>Algumas das habilidades e tecnologias que tive experiência e estudei sobre.</p>
        </div>
        <div class="content-skills row ">
            <div class="skill ">
                <h4>Java</h4>
                <p class="text-center " style="font-size: 9pt; ">2 anos ~ <br> 3 anos
                </p>
                <hr class="underline-skill ">
            </div>
            <div class="skill ">
                <h4>Javafx</h4>
                <p class="text-center " style="font-size: 9pt; ">6 meses ~ <br> 1 ano
                </p>
                <hr class="underline-skill ">
            </div>
            <div class="skill ">
                <h4>Hibernate</h4>
                <p class="text-center " style="font-size: 9pt; ">6 meses ~ <br> 1 ano
                </p>
                <hr class="underline-skill ">
            </div>
            <div class="skill ">
                <h4>SQL</h4>
                <p class="text-center " style="font-size: 9pt; ">2 anos ~ <br> 3 anos
                </p>
                <hr class="underline-skill ">
            </div>
            <div class="skill ">
                <h4>MySQL</h4>
                <p class="text-center " style="font-size: 9pt; ">2 anos ~ <br> 3 anos
                </p>
                <hr class="underline-skill ">
            </div>
            <div class="skill ">
                <h4>Linux</h4>
                <p class="text-center " style="font-size: 9pt; ">1 ano ~ <br> 2 anos
                </p>
                <hr class="underline-skill ">
            </div>

            <div class="skill ">
                <h4>PHP</h4>
                <p class="text-center " style="font-size: 9pt; ">1 mês ~ <br> 6 meses
                </p>
                <hr class="underline-skill ">
            </div>
            <div class="skill ">
                <h4>Laravel</h4>
                <p class="text-center " style="font-size: 9pt; ">1 mês ~ <br> 6 meses
                </p>
                <hr class="underline-skill ">
            </div>

        </div>


    </section>

    <section id="experiences" class="text-center">
        <div class="experience-header">
            <h3>Experiências</h3>
        </div>

            <div class="panel ">
                <h3><a href="https://github.com/Magin02/ShagasSystem/"> Shagas System</a></h3>
                <p>
                    Shagas System é um projeto com intuito de auxiliar no dia-a-dia de casas de repouso para idosos. Por meio desse sistema é possivel agendar visitas, uma agenda e atividades para cada idoso.
                </p>

            </div>

            <div class="panel">
                <h3 data-toggle="tooltip" data-placement="top" title="Repositório privado">SFG</h3>
                <p>
                    SGF foi o meu TCC para o curso técnico de informática, ele tem a proposta de gerenciar todo o fluxo de um establecimento de vendas, ajudando no controle financeiro e de estoque, ele é dividido em 2 partes o sistema desktop e o mobile.
                </p>

            </div>

            <div class="panel ">
                <h3>
                    <a href="https://busque.dev "> BusqueDev</a></h3>
                <p>
                    Atualmente faço parte de um projeto em desenvolvimento chamado BusqueDev junto com a comunidade <a href="https://heartdevs.com/">He4rt Devs</a>, uma plataforma onde o desenvolvedor pode criar seu portfólio e disponibilizar para todos.

            </div>

            <div class="panel ">
                <h3>Monitoria</h3>
                <p>
                    Durante 1 ano letivo tive a oportunidade de dar monitoria na ETEC Prof. Marcos Uchoas Dos Santos Penchel no meu ultimo ano, nessa monitoria foi trabalhado principalmente a lógica de programação e o raciocínio envolvido.
                </p>
            </div>

    </section>


    <section id="contact">
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </ul>
            </div>
        @endif
            @if(\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{\Session::get('success')}}</p>
                </div>
            @endif
            <h3 class="text-center">Entre em contato</h3>
        <form method="post" action="{{url('message')}}">
            {{csrf_field()}}
            <input name="name" placeholder="Seu nome " type="text " tabindex="1 " required>
            <input name="email" placeholder="seu@email.com " type="email " tabindex="2 " required>
            <input name="subject" placeholder="Assunto da mensagem " type="text " tabindex="4 " required>
            <textarea name="content" placeholder="Conteúdo da mensagem " rows="3 " tabindex="5 " required></textarea>
            <div class="form-group">
                <input type="submit" class="btn btn_primary button" value="Enviar">
            </div>
        </form>

    </section>

</div>

<!-- Site footer -->
<footer class="site-footer ">
    <div class="container ">
        <div class="col-md-8 col-sm-6 col-xs-12 ">
            <p class="copyright-text ">Gabriel Leal &copy;<br>
                gabriel.britto@fatec.sp.gov.br
            </p>
        </div>

        <div class="col-md-4 col-sm-6 col-xs-12 ">
            <ul class="social-icons ">
                <li><a class="github " href="https://github.com/Magin02 "><i class="fa fa-github "></i></a></li>
                <li><a class="twitter " href="https://twitter.com/Magin02 "><i class="fa fa-twitter "></i></a></li>
                <li><a class="facebook " href="https://www.facebook.com/gabriel.leal.77985"><i class="fa fa-facebook "></i></a></li>
                <li><a class="linkedin " href="https://www.linkedin.com/in/gabriel-leal-2b6663195"><i class="fa fa-linkedin "></i></a></li>
                <li><a class="email " href="mailto:gabriel.britto@fatec.sp.gov.br"><i class="fa fa-envelope"></i></a></li>
            </ul>
        </div>
    </div>
</footer>


<script>
    $('.scroll').on('click', function(e) {
        e.preventDefault();
        var id = $(this).attr('href'),
            targetOffset = $(id).offset().top;

        $('html, body').animate({
            scrollTop: targetOffset - 100
        }, 500);
    });
</script>

</body>

</html>
