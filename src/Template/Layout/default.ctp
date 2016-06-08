<?php
/**
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'OK Pionir';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?= $this->Html->charset() ?>
    <?php
    echo $this->Html->meta(array("name"=>"viewport", "content"=>"width=device-width,  initial-scale=1.0"));
    echo $this->Html->meta(array("name"=>"description", "content"=>$cakeDescription));
    echo $this->Html->meta(array("name"=>"author", "content"=>"zozo.co.nf - zozodeveloper"))
    ?>
 
    <title>
        <?= $cakeDescription ?>|
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <link href='https://fonts.googleapis.com/css?family=PT+Sans:700' rel='stylesheet' type='text/css'>
    <?= $this->Html->css('bootstrap.css') ?>
    <?= $this->Html->css('moj.css') ?>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css ">
     
    <?= $this->Html->css('carousel.css') ?>
    

    <?= $this->Html->script('bootstrap.js') ?>
    <?= $this->Html->script('bootstrap.min.js') ?>


    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>

    
    
 
</head>
<body>
    <div id="fb-root"></div>

    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/sr_RS/sdk.js#xfbml=1&version=v2.5";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>  
     
    <?= $this->Element('top_jumbotron'); ?>
    <?= $this->Element('top_menu'); ?>  
    
    <?= $this->Flash->render() ?>

    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>

    <?= $this->Element('footer'); ?>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/jquery.min.js"><\/script>')</script>
      <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
 