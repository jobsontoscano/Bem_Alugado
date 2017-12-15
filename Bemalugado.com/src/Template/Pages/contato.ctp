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
        <div class="row" style="margin-left: 50px;">
            <h1 style="font-weight: bold;">CONTATO</h1>
        </div>
        <div class="row">
            <div class="col-md-5" style="height: 500px; margin-top: 20px; margin-bottom: 20px;">
                <div class="row" style="margin-left: 50px;">
                    <p>Nós estamos muito interessados no que você tem a dizer. Por isso, criamos este espaço especialmente para você fazer seus comentários, dar sugestões e esclarecer dúvidas. Escreva pra gente! É fácil, rápido e teremos o maior prazer em responder.</p>
                </div>
                <div class="row" style="margin-left: 50px; margin-top: 30px;">
                    <div class="col-md-10" style="border: 8px solid #F25C00; padding: 20px;">
                    <p><span style="color: #F25C00;">Email</span> - bemalugado.com@gmail.com</p>
                    <p><span style="color: #F25C00;">Telefone</span> - (81)997189464</p>
                    </div>
                </div>
            </div>
            <div class="col-md-5" style="height: 500px; margin-top: 20px; margin-bottom: 20px;">
                <input type="name" name="nome" placeholder="*Nome Completo">
                <input type="name" name="assunto" placeholder="*Assunto">
                <input type="name" name="email" placeholder="*Email">
                <input type="name" name="comentario" placeholder="*Comentario">
                <input type="submit" name="button" value="ENVIAR">
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