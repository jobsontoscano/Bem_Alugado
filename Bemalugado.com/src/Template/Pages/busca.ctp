<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->script('jquery-3.2.1.min.js'); ?>
    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('fullscreenn.css') ?>
    <?= $this->Html->css('cake.css') ?>
    <?= $this->Html->css('home.css') ?>
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>
<body>
    <div class="row" style="background: #E95D0D">
      <div style="margin-top: 20px; margin-bottom: 20px; border-top: 4px solid white; border-bottom: 4px solid white;">
      <div style="margin-top:5px; margin-bottom: 5px; border-top: 2px solid white; border-bottom: 2px solid white;">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-4 col-xs-5">
                        <img src="/img/logo.png" alt="">
                    </div>
                    </div>
                <div class="col-md-offset-4 col-md-8 col-xs-8" >
                    <ul class="nav nav-tabs" style="margin: 20px 20px 0px 20px ; border-bottom: none;">
                        <li role="presentation" style="border-right: 2px solid white; color: white;" ><a href="home.php">Inicio</a></li>
                        <li role="presentation" style="border-right: 2px solid white; color: white;"><a href="busca.php">Busca</a></li>
                        <li role="presentation" style="border-right: 2px solid white; color: white;"><a href="sobre.php">Sobre</a></li>
                        <li role="presentation"><a href="contato.php">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container">
        <h3 style="font-weight: bold;">COMO BUSCAR O PONTO COMERCIAL ADEQUADO ?</h3>
        <hr>
        <div class="row">
            <div class="col-md-5" style="height: 800px; border: 8px solid #F25C00; margin-bottom: 20px ;">
                <div class="col-md-10">
                    <div class="row" style="margin-left: 10px; margin-top: 10px;">
                        <img src="/img/lapis.png" alt="">
                        PRIMEIRA BUSCA
                    </div>
                    <div class="row" style="margin-left: 10px; margin-top: 40px;">
                        <p>Esta procurando o local adequado para colocar seu negocio. Você esta no lugar certo, cadastre-se e deixe o resto com a gente.</p>
                    </div>
                    <div class="row"  style="margin-left: 10px; margin-top: 10px;">
                        <button type="button" class="btn btn-primary">Cadastro</button>
                    </div>
                    <div class="row"  style="margin-left: 10px; margin-top: 40px;">
                        <img src="/img/mensagem.png" alt="">
                        ENTRAR EM CONTATO
                    </div>
                    <div class="row"  style="margin-left: 10px; margin-top: 10px;">
                        <p>Quer contatar-nos para saber mais especificadamente sobre nosso meio de pesquisa, sobre como funciona nossa plataforma. Você esta no lugar certo. Contate-nos.</p>
                    </div>
                    <div class="row" style="margin-left: 10px; margin-top: 10px;">
                        <button type="button" class="btn btn-primary">Contato</button>
                    </div>

                    <div class="row" style="margin-left: 10px; margin-top: 40px;">
                        <img src="/img/marcador.png" alt="">
                        JÁ SOU CADASTRADO
                    </div>
                    <div class="row" style="margin-left: 10px; margin-top: 10px;">
                        <p>Já sou cadastrado e quero acompanhar o procedimento de busca para meu negocio. Faça o login e acompanhe nossos passos.</p>
                    </div>
                    <div class="row" style="margin-left: 10px; margin-top: 10px;">
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                </div>

            </div>
            <div class="col-md-5 col-md-offset-1" style=" margin-bottom: 20px ;">
                <div class="col-md-10">
                    <div class="row">
                            <h2 style="text-align: center;">Fazer Prévia de Pesquisa</h2>
                    </div>
                    <div class="row" style="margin-top: 10px;">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63239.307561031164!2d-34.92771503786925!3d-7.847173895396026!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7ab6ace8ae386b3%3A0xe4bf3f7928d2800b!2sIgarassu%2C+PE!5e0!3m2!1spt-BR!2sbr!4v1513308981217" width="600" height="200" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                    <div class="row" style="margin-top: 20px;">
                        <h4 style="text-align: center;">FORMULÁRIO DE PESQUISA</h4>
                        <p style="text-align: center;">Por favor preencha o formulário abaixo.</p>
                    </div>
                    <div class="row" style="margin-left: 20px;">
                        <input style="margin-bottom: 10px; border: 3px solid #F25C00; width: 100%; padding-left: 10px;" type="name" name="name" placeholder="*Empresa">
                        <input style="margin-bottom: 10px; border: 3px solid #F25C00; width: 100%; padding-left: 10px;" type="name" name="name" placeholder="*Email da Empresa">
                        <input style="margin-bottom: 10px; border: 3px solid #F25C00; width: 100%; padding-left: 10px;" type="name" name="name" placeholder="*Comentario">
                        <input style="border-radius: 5px; padding: 10px; background: #FF6100; color:white; width: 100%" type="submit" name="name" value="PESQUISAR">
                    </div>
                </div>
            </div>
        </div>
    </div>
 <footer class="footer">
            <div class="row" style="background: #003E09;">
                <div class="container" style="margin-top: 30px; margin-bottom: 30px;">
                    <div class="col-md-4">
                        <img src="/img/ci.png" alt="">
                    </div>
                    <div class="col-md-4">
                        <img src="/img/co.png" alt="">
                    </div>
                   <div class="col-md-4">
                        <img src="/img/cp.png" alt="">
                    </div>
                </div>
            </div>
    </footer>
</body>