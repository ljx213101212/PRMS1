<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        {{--<a class="navbar-brand" href="#">Start Bootstrap</a>--}}
    </div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-left">
            <li>
                <a href="#" role="button" aria-expanded="false"><i class="fa fa-facebook fa-lg"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-camera-retro fa-lg"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
            </li>
            <li>
                <a href="#"><i class="fa fa-pinterest fa-lg"></i></a>
            </li>
        </ul>

        <ul class="nav navbar-nav navbar-right">
            <li>
                <div class="searchdiv">
                    <form class="searchbox">
                        <input type="search" placeholder="Search......" name="search" class="searchbox-input"
                               onkeyup="buttonUp();" required>
                        <button type="submit" class="searchbox-submit">
                            <i class="fa fa-search fa-lg"></i>
                        </button>
                        <a class="searchbox-icon"><i class="fa fa-search fa-lg"></i></a>
                    </form>
                </div>

                <div class="searchdiv-small">
                    <form class="navbar-form" role="search">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="q">

                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit"><i
                                            class="glyphicon glyphicon-search"></i></button>
                            </div>
                        </div>
                    </form>
                </div>


            </li>

            <li class="sign_in"><a href="register.php">SignUp</a></li>
            <li class="login_in"><a href="login.php">LogIn</a></li>
            </li>
            <li>
        </ul>
    </div>
    <!-- /.navbar-collapse -->
</nav>



<div class="main-main-presentation-div">
    <ul class="nav nav-pills">
        <li role="presentation"><a href="home">HOME</a></li>
        <li role="presentation"><a href="about">ABOUT US</a></li>
        <li role="presentation"><a href="look">LOOK BOOK</a></li>
        <li class="main-main-presentation-div-middle" role="presentation"><a href="home">Our Wedding</a></li>
        <li role="presentation"><a href="features">FEATURES</a></li>
        <li role="presentation"><a href="pricing">PRICING</a></li>
        <li role="presentation"><a href="love">LOVE STORIES</a></li>
    </ul>
</div>

<div class="main-main-presentation-div-small">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-2" aria-expanded="true">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="main-main-presentation-div-middle" href="home">Our Wedding</a>
        </div>


        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="navbar-collapse collapse in" id="bs-example-navbar-collapse-2" aria-expanded="true">
            <ul class="nav navbar-nav">
                <li role="presentation"><a href="home">HOME</a></li>
                <li role="presentation"><a href="about">ABOUT US</a></li>
                <li role="presentation"><a href="look">LOOK BOOK</a></li>
                <li role="presentation"><a href="features">FEATURES</a></li>
                <li role="presentation"><a href="pricing">PRICING</a></li>
                <li role="presentation"><a href="love">LOVE STORIES</a></li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</div>