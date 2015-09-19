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
                <a class="navbar-brand" href="#" style="font-size: 44px;">බලය</a><a class="navbar-brand">Managemnet Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav navbar-right">
                    <!-- User -->
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle user" data-toggle="dropdown">
                            <img src="/kathanayake/dist/images/people/110/guy-5.jpg" alt="Bill" class="img-circle" width="40" /> Bill <span class="caret"></span>
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
    
    
    <nav class="navbar navbar-subnav navbar-static-top" role="navigation">
        <div class="container">

            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#subnav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="fa fa-ellipsis-h"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="subnav">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="<?php echo base_url('/staff/main/newPost'); ?>"><i class="fa fa-fw icon-ship-wheel"></i>New Post</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/staff/main/postQulityCheck'); ?>"><i class="fa fa-fw icon-user-1"></i>Post Qulity Check</a>
                    </li>
                    <!--<li>
                        <a href="user-private-users.html"><i class="fa fa-fw fa-cross"></i>Problem Verification</a>
                    </li>-->
                    <li>
                        <a href="<?php echo base_url('/staff/main/communityProjects'); ?>"><i class="fa fa-fw fa-group"></i>Community Projects</a>
                    </li>
                   	<li>
                        <a href="<?php echo base_url('/staff/main/politician'); ?>"><i class="fa fa-fw fa-group"></i>Politician Management</a>
                    </li>
                   	<li>
                        <a href="<?php echo base_url('/staff/main/politicianOverview'); ?>"><i class="fa fa-fw fa-group"></i>Politician Overview</a>
                    </li>
                </ul>
                <ul class="nav navbar-nav navbar-right hidden-xs">
                    <li><a href="<?php echo base_url('/staff/main/login'); ?>">Logout  <i class="fa fa-fw icon-unlock-fill"></i></a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
            </div>
    </nav>