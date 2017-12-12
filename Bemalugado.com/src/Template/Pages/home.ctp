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
<body class="home">
<?php $user = $this->request->session()->read('Auth.User'); ?>
<?php if(!$user): ?>
    <hr>
<div class="navbar-master">
    <div class="row navbar-home">
      <div class="offset-md-4 col-md-5">
        <button class="login-ajax">Login</button>
      </div>
      <div class="col-md-4">
          <img src="/img/logo.png">
      </div>
    </div>    
    
</div>
    <div id="myNav" class="login">
     <button class="closebtn">&times;</button>
         <div class="login-content">
        <?= $this->Flash->render('auth');?>
        <form action="/users/login" method="post" accept-charset="utf-8">
            <fieldset>
                <legend><?= (__("Por favor, entre com seu Email e Senha")) ?></legend>
                <?= $this->Form->control('username');?>
                <?= $this->Form->control('password');?>
            </fieldset>
        <?= $this->Form->button(__('Login'));?>
        <?= $this->Form->end();?>
        </div>
        </form>
        <div class="tutorial">
            <h3>O que é Bemalugado.com</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
    </div>
<?php else: ?>
<div class="nav-bar">
    <ul>
        <li><?=$this->Html->link(__($user['username']),['controller' => 'Users', 'action' => 'view', $user['id']])?></li>
        <li><?=$this->Html->link(__('Logout'),['controller' => 'Users', 'action' => 'logout'])?></li>
    </ul>
</div>
<?php endif; ?>

<script>
    $(document).ready(function(){
        $('.login-ajax').on('click', function(){
            $('#myNav').css('height','100%');
        });
        $('.closebtn').on('click', function(){
            $('#myNav').css('height', '0');
        });

    });
</script>

</body>
</html>
