              <!--header start-->
  <header class="header white-bg">
    <div class="sidebar-toggle-box">
        <div data-original-title="Toggle Navigation" data-placement="right" class="icon-reorder tooltips"></div>
    </div>
    <!--logo start-->
    <a href="<?php echo SITE_URL; ?>" class="logo"><span><i class="icon-trash"></i></span> trash<span>kan</span>™</a>
    <!--logo end-->
            <div class="nav notify-row  pull-right" id="top_menu">
                <!--  notification start -->
                
                <!--  notification end -->
            </div>
    <div class="top-nav ">
                <!--search & user info start-->

                <ul class="nav pull-right top-menu">
                <li>
                    <input type="text" class="form-control search" placeholder="Search">
                </li>
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <i class=" icon-mobile-phone icon-2x"></i>
                        <span class="username"><?php echo account::getComDetail('email', hash::decode_data(session::_get('UNIQUE_ID_COMP'))); ?></span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout">
                        <div class="log-arrow-up"></div>
                        <!--<li><a href="#"><i class="icon-edit"></i>Edit Profile</a></li> -->
                        <!-- <li><a href="#"><i class="icon-cog"></i> Settings</a></li> -->
                        <!-- <li><a href="#"><i class="icon-bell-alt"></i> Notification</a></li> -->
                        <li><a href="?signout=1"><i class="icon-key"></i> Log Out</a></li>
                    </ul>
                </li>
                <!-- user login dropdown end -->
            </ul>
            <!--search & user info end-->
        </div>
            </div>
</header>
<!--header end-->



