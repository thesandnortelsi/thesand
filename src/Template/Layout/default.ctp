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

$cakeDescription = 'TheSand';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('plugins/font-awesome/css/font-awesome.css') ?>
    <?= $this->Html->css('plugins/gritter/css/jquery.gritter.css') ?>
    <?= $this->Html->css('plugins/bootstrap-datepicker/css/datepicker.css') ?>
    <?= $this->Html->css('plugins/jquery-ricksaw-chart/css/rickshaw.css') ?>
    <?= $this->Html->css('plugins/jquery-morris-chart/css/morris.css') ?>
    <?= $this->Html->css('plugins/bootstrap-select2/select2.css') ?>
    <?= $this->Html->css('plugins/jquery-jvectormap/css/jquery-jvectormap-1.2.2.css') ?>


    <?= $this->Html->css('plugins/pace/pace-theme-flash.css') ?>
    <?= $this->Html->css('plugins/bootstrapv3/css/bootstrap.min.css') ?>
    <?= $this->Html->css('plugins/bootstrapv3/css/bootstrap-theme.min.css') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <?= $this->Html->css('plugins/animate.min.css') ?>
    <?= $this->Html->css('plugins/jquery-scrollbar/jquery.scrollbar.css') ?>
    
    <?= $this->Html->css('webarch/css/webarch.css') ?>

</head>


    <?= $this->fetch('content') ?>




    <?= $this->Html->script('plugins/pace/pace.min.js') ?>

    <?= $this->Html->script('plugins/jquery/jquery-1.11.3.min.js') ?>
    <?= $this->Html->script('plugins/bootstrapv3/js/bootstrap.min.js') ?>
    <?= $this->Html->script('plugins/jquery-block-ui/jqueryblockui.min.js') ?>
    <?= $this->Html->script('plugins/jquery-unveil/jquery.unveil.min.js') ?>
    <?= $this->Html->script('plugins/jquery-scrollbar/jquery.scrollbar.min.js') ?>
    <?= $this->Html->script('plugins/jquery-numberAnimate/jquery.animateNumbers.js') ?>
    <?= $this->Html->script('plugins/jquery-validation/js/jquery.validate.min.js') ?>
    <?= $this->Html->script('plugins/bootstrap-select2/select2.min.js') ?>
    
    <?= $this->Html->script('webarch/js/webarch.js') ?>
    <?= $this->Html->script('js/chat.js') ?>

    <?= $this->Html->script('plugins/jquery-ui/jquery-ui-1.10.1.custom.min.js') ?>    
    <?= $this->Html->script('plugins/jquery-ricksaw-chart/js/raphael-min.js') ?>    
    <?= $this->Html->script('plugins/jquery-ricksaw-chart/js/d3.v2.js') ?>    
    <?= $this->Html->script('plugins/jquery-ricksaw-chart/js/rickshaw.min.js') ?>    
    <?= $this->Html->script('plugins/jquery-sparkline/jquery-sparkline.js') ?>    
    <?= $this->Html->script('plugins/skycons/skycons.js') ?>    
    <?= $this->Html->script('plugins/owl-carousel/owl.carousel.min.js') ?>    
    <?= $this->Html->script('plugins/jquery-gmap/gmaps.js') ?>
    <?= $this->Html->script('plugins/Mapplic/js/jquery.easing.js') ?>
    <?= $this->Html->script('plugins/Mapplic/js/jquery.mousewheel.js') ?>
    <?= $this->Html->script('plugins/Mapplic/js/hammer.js') ?>
    <?= $this->Html->script('plugins/Mapplic/mapplic/mapplic.js') ?>
    <?= $this->Html->script('plugins/jquery-flot/jquery.flot.js') ?>
    <?= $this->Html->script('plugins/jquery-metrojs/MetroJs.min.js') ?>
    
    <?= $this->Html->script('js/dashboard_v2.js') ?>

</body>
</html>
