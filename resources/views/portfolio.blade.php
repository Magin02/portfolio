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
            Olá me chamo Gabriel Leal, tenho. Comecei a programar há 3 anos pela linguagem Java, depois de 2 anos mudei para desenvolvimento Web focado na parte de back-end, desde essa mudança venho focando em aprender cada vez mais sobre. Hoje sou programador focado em PHP e Laravel emas com conhecimentos em outras linguagens Web como: Html/Css , Javascript e Vue.
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
                <h4>Git</h4>
                <p class="text-center " style="font-size: 9pt; ">6 meses ~ <br> 1 ano
                </p>
                <hr class="underline-skill ">
            </div>
            <div class="skill ">
                <h4>MySQL</h4>
                <p class="text-center " style="font-size: 9pt; ">1 anos ~ <br> 2 anos
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
                <h4>HTML/CSS</h4>
                <p class="text-center " style="font-size: 9pt; ">1 ano ~ <br> 2 anos
                </p>
                <hr class="underline-skill ">
            </div>
            <div class="skill ">
                <h4>Javascript</h4>
                <p class="text-center " style="font-size: 9pt; ">1 mes ~ <br> 6 meses
                </p>
                <hr class="underline-skill ">
            </div>

            <div class="skill ">
                <h4>PHP</h4>
                <p class="text-center " style="font-size: 9pt; ">6 meses ~ <br> 1 ano
                </p>
                <hr class="underline-skill ">
            </div>
            <div class="skill ">
                <h4>Laravel</h4>
                <p class="text-center " style="font-size: 9pt; ">6 meses ~ <br>  1 ano
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
                <h3><a href="https://github.com/Magin02/snippets-book-api"> Snippets book</a></h3>
                <p>
                    Snippets book  é uma rede social para desenvolvedores onde os posts serão snippets.
                    Nesse projeto pude aprender mais com laravel e seus recursos, utilizei o gitflow para organizar todo o back-end.
                    O front-end ainda está sendo feito em VueJs.
                </p>

            </div>

            <div class="panel">
                <h3><a href="https://github.com/Magin02/snippets-book-api">Portfolio</a></h3>
                <p>
                    Meu portfolio foi feito totalmente em Laravel e procurei fazer algo bem limpo para demonstrar minhas capacidades técnicas de forma melhor e prática com uma pagina simples e um sistema de mensagens.
                </p>

            </div>

            <div class="panel ">
                <h3>
                    <a href="https://github.com/Magin02/info-now"> InfoNow</a></h3>
                <p>
                InfoNow será uma plataforma de artigos com o foco de estudo, essa plataforma será feita em php com o objetivo de me aprofundar mais na linguagem sem frameworks.
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
