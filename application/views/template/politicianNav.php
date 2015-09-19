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
                <a class="navbar-brand" href="<?php echo base_url('/politician/main/'); ?>" style="font-size: 44px;" >බලය</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="main-nav">
                <ul class="nav navbar-nav">
               		<li>
                    	<a href="<?php echo base_url('/politician/main/newPost'); ?>">New Post</a>
                    </li>
                    <li>
                    	<a href="<?php echo base_url('/politician/main/viewProblems'); ?>">View Problems</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/politician/main/viewQandA'); ?>">Q and A</a>
                    </li>
                    <li>
                        <a href="<?php echo base_url('/politician/main/rankings'); ?>" >Rankings</a>
                    </li>
                </ul>
            </div>

            <!-- /.navbar-collapse -->
            </div>
    </div>