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
    <?= $this->Html->css('plugins/bootstrap-select2/select2.css') ?>
    <?= $this->Html->css('plugins/jquery-datatable/css/jquery.dataTables.css') ?>    
    <?= $this->Html->css('plugins/datatables-responsive/css/datatables.responsive.css') ?>


    <?= $this->Html->css('plugins/pace/pace-theme-flash.css') ?>
    <?= $this->Html->css('plugins/bootstrapv3/css/bootstrap.min.css') ?>
    <?= $this->Html->css('plugins/bootstrapv3/css/bootstrap-theme.min.css') ?>
    <?= $this->Html->css('https://fonts.googleapis.com/icon?family=Material+Icons') ?>
    <?= $this->Html->css('plugins/animate.min.css') ?>
    <?= $this->Html->css('plugins/jquery-scrollbar/jquery.scrollbar.css') ?>
    
    <?= $this->Html->css('webarch/css/webarch.css') ?>

</head>



<body class="">
    <!-- BEGIN HEADER -->
    <div class="header navbar navbar-inverse ">
      <!-- BEGIN TOP NAVIGATION BAR -->
      <div class="navbar-inner">
        <div class="header-seperation">
          <ul class="nav pull-left notifcation-center visible-xs visible-sm">
            <li class="dropdown">
              <a href="#main-menu" data-webarch="toggle-left-side">
                <i class="material-icons">menu</i>
              </a>
            </li>
          </ul>
          <!-- BEGIN LOGO -->
          <a href="#">
            <?= $this->Html->image("logo.png", [
                    "class" => "logo",
                    'width' => "106",
                    'height' => "21"
                ]);  ?>
          </a>
          <!-- END LOGO -->
          <ul class="nav pull-right notifcation-center">
            <li class="dropdown hidden-xs hidden-sm">
              <a href="index.html" class="dropdown-toggle active" data-toggle="">
                <i class="material-icons">home</i>
              </a>
            </li>
            <li class="dropdown hidden-xs hidden-sm">
              <a href="email.html" class="dropdown-toggle">
                <i class="material-icons">email</i><span class="badge bubble-only"></span>
              </a>
            </li>
            <li class="dropdown visible-xs visible-sm">
              <a href="#" data-webarch="toggle-right-side">
                <i class="material-icons">chat</i>
              </a>
            </li>
          </ul>
        </div>
        <!-- END RESPONSIVE MENU TOGGLER -->
        <div class="header-quick-nav">
          <!-- BEGIN TOP NAVIGATION MENU -->
          <div class="pull-left">
            <ul class="nav quick-section">
              <li class="quicklinks">
                <a href="#" class="" id="layout-condensed-toggle">
                  <i class="material-icons">menu</i>
                </a>
              </li>
            </ul>
            <ul class="nav quick-section">
              <li class="quicklinks  m-r-10">
                <a href="#" class="">
                  <i class="material-icons">refresh</i>
                </a>
              </li>
              <li class="quicklinks">
                <a href="#" class="">
                  <i class="material-icons">apps</i>
                </a>
              </li>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a href="#" class="" id="my-task-list" data-placement="bottom" data-content='' data-toggle="dropdown" data-original-title="Notifications">
                  <i class="material-icons">notifications_none</i>
                  <span class="badge badge-important bubble-only"></span>
                </a>
              </li>
              <li class="m-r-10 input-prepend inside search-form no-boarder">
                <span class="add-on"> <i class="material-icons">search</i></span>
                <input name="" type="text" class="no-boarder " placeholder="Search Dashboard" style="width:250px;">
              </li>
            </ul>
          </div>
          <div id="notification-list" style="display:none">
            <div style="width:300px">
              <div class="notification-messages info">
                <div class="user-profile">
                  <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    David Nester - Commented on your wall
                  </div>
                  <div class="description">
                    Meeting postponed to tomorrow
                  </div>
                  <div class="date pull-left">
                    A min ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="notification-messages danger">
                <div class="iconholder">
                  <i class="icon-warning-sign"></i>
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    Server load limited
                  </div>
                  <div class="description">
                    Database server has reached its daily capicity
                  </div>
                  <div class="date pull-left">
                    2 mins ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="notification-messages success">
                <div class="user-profile">
                  <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                </div>
                <div class="message-wrapper">
                  <div class="heading">
                    You haveve got 150 messages
                  </div>
                  <div class="description">
                    150 newly unread messages in your inbox
                  </div>
                  <div class="date pull-left">
                    An hour ago
                  </div>
                </div>
                <div class="clearfix"></div>
              </div>
            </div>
          </div>
          <!-- END TOP NAVIGATION MENU -->
          <!-- BEGIN CHAT TOGGLER -->
          <div class="pull-right">
            <div class="chat-toggler sm">
              <div class="profile-pic">
                <!-- <img src="assets/img/profiles/avatar_small.jpg" alt="" data-src="assets/img/profiles/avatar_small.jpg" data-src-retina="assets/img/profiles/avatar_small2x.jpg" width="35" height="35" /> -->
                <?= $this->Html->image("profiles/avatar_small.jpg", [
                    'width' => "35",
                    'height' => "35"
                ]);  ?>

                <div class="availability-bubble online"></div>
              </div>
            </div>
            <ul class="nav quick-section ">
              <li class="quicklinks">
                <a data-toggle="dropdown" class="dropdown-toggle  pull-right " href="#" id="user-options">
                  <i class="material-icons">tune</i>
                </a>
                <ul class="dropdown-menu  pull-right" role="menu" aria-labelledby="user-options">
                  <li>
                    <a href="user-profile.html"> My Account</a>
                  </li>
                  <li>
                    <a href="calender.html">My Calendar</a>
                  </li>
                  <li>
                    <a href="email.html"> My Inbox&nbsp;&nbsp;
                        <span class="badge badge-important animated bounceIn">2</span>
                    </a>
                  </li>
                  <li class="divider"></li>
                  <li>
                    <!-- <a href="login.html"><i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out</a> -->
                    <?= $this->Html->link('<i class="material-icons">power_settings_new</i>&nbsp;&nbsp;Log Out', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?>
                  </li>
                </ul>
              </li>
              <li class="quicklinks"> <span class="h-seperate"></span></li>
              <li class="quicklinks">
                <a href="#" class="chat-menu-toggle" data-webarch="toggle-right-side"><i class="material-icons">chat</i><span class="badge badge-important hide">1</span>
                </a>
                <div class="simple-chat-popup chat-menu-toggle hide">
                  <div class="simple-chat-popup-arrow"></div>
                  <div class="simple-chat-popup-inner">
                    <div style="width:100px">
                      <div class="semi-bold">David Nester</div>
                      <div class="message">Hey you there </div>
                    </div>
                  </div>
                </div>
              </li>
            </ul>
          </div>
          <!-- END CHAT TOGGLER -->
        </div>
        <!-- END TOP NAVIGATION MENU -->
      </div>
      <!-- END TOP NAVIGATION BAR -->
    </div>
    <!-- END HEADER -->
    <!-- BEGIN CONTAINER -->
    <div class="page-container row">
      


      <?=
          $this->Element('menu-planillas');
      ?>
      
    </div>
      <a href="#" class="scrollup">Scroll</a>
      <div class="footer-widget">
        <div class="progress transparent progress-small no-radius no-margin">
          <div class="progress-bar progress-bar-success animate-progress-bar" data-percentage="79%" style="width: 79%;"></div>
        </div>
        <div class="pull-right">
          <div class="details-status"> <span class="animate-number" data-value="86" data-animation-duration="560">86</span>% </div>
          <!-- <a href="lockscreen.html"> -->
            <?= $this->Html->link('<i class="material-icons">power_settings_new</i>', ['controller' => 'Users', 'action' => 'logout'], ['escape' => false]) ?>
            <!-- <i class="material-icons">power_settings_new</i></a> -->
          </div>
      </div>
      <!-- END SIDEBAR -->
      <!-- BEGIN PAGE CONTAINER-->
      <div class="page-content">
        <!-- BEGIN SAMPLE PORTLET CONFIGURATION MODAL FORM-->
        <div id="portlet-config" class="modal hide">
          <div class="modal-header">
            <button data-dismiss="modal" class="close" type="button"></button>
            <h3>Widget Settings</h3>
          </div>
          <div class="modal-body"> Widget settings form goes here </div>
        </div>
        <div class="clearfix"></div>
        <div class="content ">


             <?= $this->fetch('content') ?>

            
          <!-- END PAGE -->
        </div>
      </div>
      <!-- BEGIN CHAT -->
      <div class="chat-window-wrapper">
        <div id="main-chat-wrapper" class="inner-content">
          <div class="chat-window-wrapper scroller scrollbar-dynamic" id="chat-users">
            <div class="chat-header">
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark "></div>
                </a>
              </div>
            </div>
            <div class="side-widget">
              <div class="side-widget-title">group chats</div>
              <div class="side-widget-content">
                <div id="groups-list">
                  <ul class="groups">
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>Office work</a>
                    </li>
                    <li>
                      <a href="#">
                        <div class="status-icon green"></div>Personal vibes</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="side-widget fadeIn">
              <div class="side-widget-title">favourites</div>
              <div id="favourites-list">
                <div class="side-widget-content">
                  <div class="user-details-wrapper active" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                    <div class="user-profile">
                      <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                    </div>
                    <div class="user-details">
                      <div class="user-name">
                        Jane Smith
                      </div>
                      <div class="user-more">
                        Hello you there?
                      </div>
                    </div>
                    <div class="user-details-status-wrapper">
                      <span class="badge badge-important">3</span>
                    </div>
                    <div class="user-details-count-wrapper">
                      <div class="status-icon green"></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                  <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                    <div class="user-profile">
                      <img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                    </div>
                    <div class="user-details">
                      <div class="user-name">
                        David Nester
                      </div>
                      <div class="user-more">
                        Busy, Do not disturb
                      </div>
                    </div>
                    <div class="user-details-status-wrapper">
                      <div class="clearfix"></div>
                    </div>
                    <div class="user-details-count-wrapper">
                      <div class="status-icon red"></div>
                    </div>
                    <div class="clearfix"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="side-widget">
              <div class="side-widget-title">more friends</div>
              <div class="side-widget-content" id="friends-list">
                <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      Jane Smith
                    </div>
                    <div class="user-more">
                      Hello you there?
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon green"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                  <div class="user-profile">
                    <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      David Nester
                    </div>
                    <div class="user-more">
                      Busy, Do not disturb
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                    <div class="clearfix"></div>
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon red"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-wrapper" data-chat-status="online" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="Jane Smith">
                  <div class="user-profile">
                    <img src="assets/img/profiles/c.jpg" alt="" data-src="assets/img/profiles/c.jpg" data-src-retina="assets/img/profiles/c2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      Jane Smith
                    </div>
                    <div class="user-more">
                      Hello you there?
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon green"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
                <div class="user-details-wrapper" data-chat-status="busy" data-chat-user-pic="assets/img/profiles/d.jpg" data-chat-user-pic-retina="assets/img/profiles/d2x.jpg" data-user-name="David Nester">
                  <div class="user-profile">
                    <img src="assets/img/profiles/h.jpg" alt="" data-src="assets/img/profiles/h.jpg" data-src-retina="assets/img/profiles/h2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="user-name">
                      David Nester
                    </div>
                    <div class="user-more">
                      Busy, Do not disturb
                    </div>
                  </div>
                  <div class="user-details-status-wrapper">
                    <div class="clearfix"></div>
                  </div>
                  <div class="user-details-count-wrapper">
                    <div class="status-icon red"></div>
                  </div>
                  <div class="clearfix"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="chat-window-wrapper" id="messages-wrapper" style="display:none">
            <div class="chat-header">
              <div class="pull-left">
                <input type="text" placeholder="search">
              </div>
              <div class="pull-right">
                <a href="#" class="">
                  <div class="iconset top-settings-dark "></div>
                </a>
              </div>
            </div>
            <div class="clearfix"></div>
            <div class="chat-messages-header">
              <div class="status online"></div><span class="semi-bold">Jane Smith(Typing..)</span>
              <a href="#" class="chat-back"><i class="icon-custom-cross"></i></a>
            </div>
            <div class="chat-messages scrollbar-dynamic clearfix">
              <div class="inner-scroll-content clearfix">
                <div class="sent_time">Yesterday 11:25pm</div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="bubble">
                      Hello, You there?
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Yesterday 11:25pm</div>
                </div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="bubble">
                      How was the meeting?
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Yesterday 11:25pm</div>
                </div>
                <div class="user-details-wrapper ">
                  <div class="user-profile">
                    <img src="assets/img/profiles/d.jpg" alt="" data-src="assets/img/profiles/d.jpg" data-src-retina="assets/img/profiles/d2x.jpg" width="35" height="35">
                  </div>
                  <div class="user-details">
                    <div class="bubble">
                      Let me know when you free
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Yesterday 11:25pm</div>
                </div>
                <div class="sent_time ">Today 11:25pm</div>
                <div class="user-details-wrapper pull-right">
                  <div class="user-details">
                    <div class="bubble sender">
                      Let me know when you free
                    </div>
                  </div>
                  <div class="clearfix"></div>
                  <div class="sent_time off">Sent On Tue, 2:45pm</div>
                </div>
              </div>
            </div>
            <div class="chat-input-wrapper" style="display:none">
              <textarea id="chat-message-input" rows="1" placeholder="Type your message"></textarea>
            </div>
            <div class="clearfix"></div>
          </div>
        </div>
      </div>
      <!-- END CHAT -->
      <!-- END CONTAINER -->
    </div>
    

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

    <?= $this->Html->script('plugins/bootstrap-select2/select2.min.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/js/jquery.dataTables.min.js') ?>
    <?= $this->Html->script('plugins/jquery-datatable/extra/js/dataTables.tableTools.min.js') ?>
    <?= $this->Html->script('plugins/datatables-responsive/js/datatables.responsive.js') ?>
    <?= $this->Html->script('plugins/datatables-responsive/js/lodash.min.js') ?>

    <?= $this->Html->script('js/datatables.js') ?>

</body>
</html>
