<!-- Fixed navbar -->
    <div class="navbar navbar-main navbar-primary navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a data-toggle="sidebar-chat" class="btn btn-link navbar-btn visible-xs"><i class="fa fa-comments"></i></a>
                 <img src="/kathanayake/dist/images/logo-square_50.png" class="img-circle" align="left">
                <a class="navbar-brand" href="index.html" style="font-size: 44px;" >බලය</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav">
                    <li><a href="<?php echo base_url('feeds'); ?>">Home</a>
                        
                         <li><a href="<?php echo base_url('main/fund_project'); ?>">Community funded projects </a>
                             
                             <li><a href="<?php echo base_url('user/profile'); ?>">My Profile </a>
                                 
                                  <li><a href="<?php echo base_url('main/map_feeds'); ?>"> Map View </a>
                    </li>
<!--                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                            <li class="dropdown-header">Public User Pages</li>
                            <li><a href="user-public-timeline.html">Timeline</a>
                            </li>
                            <li><a href="user-public-profile.html">About</a>
                            </li>
                            <li><a href="user-public-users.html">Friends</a>
                            </li>
                            <li class="dropdown-header">Private User Pages</li>
                            <li><a href="user-private-messages.html">Messages</a>
                            </li>
                            <li><a href="user-private-profile.html">Profile</a>
                            </li>
                            <li class="active"><a href="index.html">Timeline</a>
                            </li>
                            <li><a href="user-private-users.html">Friends</a>
                            </li>
                        </ul>
                    </li>-->
<!--                    <li class="dropdown">
                        <a href="buttons.html" class="dropdown-toggle" data-toggle="dropdown">UI Components <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="buttons.html"><i class="fa fa-th"></i> Buttons</a>
                            </li>
                            <li>
                                <a href="icons.html"><i class="fa fa-paint-brush"></i> Icons</a>
                            </li>
                            <li>
                                <a href="progress.html"><i class="fa fa-tasks"></i> Progress</a>
                            </li>
                            <li>
                                <a href="grid.html"><i class="fa fa-columns"></i> Grid</a>
                            </li>
                            <li>
                                <a href="forms.html"><i class="fa fa-sliders"></i> Forms</a>
                            </li>
                            <li>
                                <a href="tables.html"><i class="fa fa-table"></i> Tables</a>
                            </li>
                        </ul>
                    </li>-->
<!--                    <li data-toggle="tooltip" data-placement="bottom" title="A few Color Examples. Download includes CSS Files for all color examples & the tools to Generate any Color combination. This Color-Switcher is for previewing purposes only.">
                        <ul class="skins">
                            <li><span data-skin="default" style="background: #16ae9f "></span>
                            </li>
                            <li><span data-skin="orange" style="background: #e74c3c "></span>
                            </li>
                            <li><span data-skin="blue" style="background: #4687ce "></span>
                            </li>
                            <li><span data-skin="purple" style="background: #af86b9 "></span>
                            </li>
                            <li><span data-skin="brown" style="background: #c3a961 "></span>
                            </li>
                            <li><span data-skin="default-nav-inverse" style="background: #242424 "></span>
                            </li>
                        </ul>
                    </li>-->
                </ul>
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden-xs">
                        <a href="#" data-toggle="sidebar-chat">
                            <i class="fa fa-comments"></i>
                        </a>
                    </li>

                    <!-- User -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                            <img src="/kathanayake/dist/images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="40" /> Kalana <span class="caret"></span>
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a href="user-private-profile.html">Profile</a>
                            </li>
                            <li><a href="user-private-messages.html">Messages</a>
                            </li>
                            <li><a href="login.html">Logout</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
            </div>
    </div>
    
    
<!--    <nav class="navbar navbar-subnav navbar-static-top" role="navigation">
        <div class="container">

             Brand and toggle get grouped for better mobile display 
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-ellipsis-h"></span>
                </button>
            </div>

             Collect the nav links, forms, and other content for toggling 
            <div class="collapse navbar-collapse" id="subnav">
                <ul class="nav navbar-nav">
                    <li class="active">
                        <a href="index.html"><i class="fa fa-fw icon-ship-wheel"></i> My Timeline</a>
                    </li>
                    <li>
                        <a href="user-private-profile.html"><i class="fa fa-fw icon-user-1"></i> Edit Profile</a>
                    </li>
                    <li>
                        <a href="user-private-users.html"><i class="fa fa-fw fa-group"></i> Manage Friends</a>
                    </li>
                    <li>
                        <a href="user-private-messages.html"><i class="fa fa-fw icon-comment-fill-1"></i> Messages</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li><a href="login.html">Logout  <i class="fa fa-fw icon-unlock-fill"></i></a>
                    </li>
                </ul>
            </div>

             /.navbar-collapse 
            </div>
    </nav>-->