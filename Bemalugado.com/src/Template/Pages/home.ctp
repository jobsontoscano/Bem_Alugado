<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
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
                        <img src="/img/logo.png">
                    </div>
                    </div>
                <div class="col-md-offset-4 col-md-8 col-xs-8" >
                    <ul class="nav nav-tabs" style="margin: 20px 20px 0px 20px ; border-bottom: none;">
                        <li role="presentation" style="border-right: 2px solid white; color: white;" ><a href="home.ctp">Inicio</a></li>
                        <li role="presentation" style="border-right: 2px solid white; color: white;"><a href="busca.ctp">Busca</a></li>
                        <li role="presentation" style="border-right: 2px solid white; color: white;"><a href="sobre.ctp">Sobre</a></li>
                        <li role="presentation"><a href="contato.ctp">Contato</a></li>
                    </ul>
                </div>
            </div>
        </div>
        </div>
    </div>
    <div class="container" style="margin-top: 50px;">
        <div class="row">
            <div class="col-md-5 col-md-offset-2">
                <h4>Encontre seu Ponto Comercial</h4>
            </div>
            <div class="col-md-5">
                <div class="btn-group" role="group" aria-label="...">
                      <button type="button" class="btn btn-default">Igarassu</button>
                      <button type="button" class="btn btn-default">Abreu e Lima</button>
                      <button type="button" class="btn btn-default">Paulista</button>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-5 ">
                <img src="/img/oi.png" alt="">
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
</html>
