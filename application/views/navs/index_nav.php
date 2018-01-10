<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
<!--             <a class="navbar-brand" href="#" style="margin-left:5px;"><img src="assets/img/ptpc_logo.jpg" alt=""></a>
            <a class="navbar-brand" href="#" style="margin-left:5px;"><img src="assets/img/shrpe_logo3.png" alt=""></a> -->
        </div>
        <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right" id="navmain">
                <!--<li id="contactusTab"><a href="<?php echo site_url('Contact')?>">Contact us</a></li>-->
                <li class="<?php if($tab == 'registration') echo 'active'; ?>"><a href="<?php echo site_url('registration');?>">Register</a></li>
                <li class="<?php if($tab == 'login') echo 'active'; ?>"><a href="<?php echo site_url('login');?>">Login</a></li>
            </ul>
        </div>
    </div>
</nav>