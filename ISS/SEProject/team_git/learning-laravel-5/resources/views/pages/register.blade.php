<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>twitter prototype</title>
    <link href="../bootstrap/css/font.css" rel="stylesheet" type="text/css"/>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-Process.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-checkBox.css" rel="stylesheet">
    <link href="../bootstrap/css/custome_register.css" rel="stylesheet">
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
<body>

<div class="container">


    <div class="row bs-wizard" style="border-bottom:0;">

        <div id="step1" class="col-xs-3 bs-wizard-step disabled">
            <div class="text-center bs-wizard-stepnum">Step 1</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a href="#" class="bs-wizard-dot"></a>

            <div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div>
        </div>

        <div id="step2" class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Step 2</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a href="#" class="bs-wizard-dot"></a>

            <div class="bs-wizard-info text-center">Nam mollis tristique erat vel tristique. Aliquam erat volutpat.
                Mauris et vestibulum nisi. Duis molestie nisl sed scelerisque vestibulum. Nam placerat tristique
                placerat
            </div>
        </div>

        <div id="step3" class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Step 3</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a href="#" class="bs-wizard-dot"></a>

            <div class="bs-wizard-info text-center">Integer semper dolor ac auctor rutrum. Duis porta ipsum vitae mi
                bibendum bibendum
            </div>
        </div>

        <div id="step4" class="col-xs-3 bs-wizard-step disabled"><!-- active -->
            <div class="text-center bs-wizard-stepnum">Step 4</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a href="#" class="bs-wizard-dot"></a>

            <div class="bs-wizard-info text-center"> Curabitur mollis magna at blandit vestibulum. Vestibulum ante ipsum
                primis in faucibus orci luctus et ultrices posuere cubilia Curae
            </div>
        </div>
    </div>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    Basic Info
                    <a id="custome_accordion_mark" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Plus
                    </a>

                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <div class="col-lg-12 well">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Your Big Day" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Choose password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Retype password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2">
                                            Send me love letter & other relevant Info
                                        </label>
                                    </div>
                                    <div id="step1_btn" class="span7 text-center">
                                        <button class="btn btn-large btn-block btn-primary" type="button">Next</button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    Choose URL
                    <a id="custome_accordion_mark" class="collapsed" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Plus
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">

                    <div class="col-lg-12 well">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Name" class="form-control">
                                        </div>
                                    </div>


                                    <div id="step2_btn" class="span7 text-center">
                                        <button class="btn btn-large btn-block btn-primary" type="button">Next</button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    Choose Template
                    <a id="custome_accordion_mark" class="collapsed" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                       aria-controls="collapseThree">
                        Plus
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="row">

                                        <div class="dropdown">
                                            <div class="col-lg-6">
                                                <div class="span7 text-center">
                                                    <button class="btn btn-default dropdown-toggle" type="button"
                                                            id="dropdownMenu1"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Choose Theme
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="span7 text-center">
                                                    <button class="btn btn-default dropdown-toggle" type="button"
                                                            id="dropdownMenu1"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Choose Culture
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row_margin_top">
                                        <div class="col-lg-12 well">

                                            <div class="col-lg-4">

                                                <div class="photo-wrapper">
                                                    <div class="photo">
                                                        <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img
                                                                    class="img-responsive" src="http://placehold.it/500x500"
                                                                    alt=""></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">

                                                <div class="photo-wrapper">
                                                    <div class="photo">
                                                        <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img
                                                                    class="img-responsive" src="http://placehold.it/500x500"
                                                                    alt=""></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">

                                                <div class="photo-wrapper">
                                                    <div class="photo">
                                                        <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img
                                                                    class="img-responsive" src="http://placehold.it/500x500"
                                                                    alt=""></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row_margin_top">
                                        <div id="step3_btn" class="span7 text-center">
                                            <button class="btn btn-large btn-block btn-primary" type="button">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
                Select Events
                <a id="custome_accordion_mark" class="collapsed" role="button" data-toggle="collapse"
                   data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Plus
                </a>

            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
                <div class="col-lg-12 well">
                    <div class="row">
                        <form>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <div class="span7 text-center">
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div id="step4_btn" class="span7 text-center">
                                    <button class="btn btn-large btn-block btn-primary" type="button">Finish</button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script>

    $('#headingOne').find('a').click(function () {
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');

    });

    $('#step1_btn').find('button').click(function(){

        $("#collapseOne").collapse('hide');
        $("#collapseTwo").collapse('show');
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');

    });

    $('#headingTwo').find('a').click(function () {
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');

    });

    $('#step2_btn').find('button').click(function(){

        $("#collapseTwo").collapse('hide');
        $("#collapseThree").collapse('show');
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');


    });


    $('#headingThree').find('a').click(function () {
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');

    });


    $('#step3_btn').find('button').click(function(){

        $("#collapseThree").collapse('hide');
        $("#collapseFour").collapse('show');
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');
    });

    $('#headingFour').find('a').click(function () {
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step active');

    });

    $('#step4_btn').find('button').click(function(){

        $("#collapseFour").collapse('hide');
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step active');


        alert("Registration Successfully!");
    });


</script>
</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>twitter prototype</title>
    <link href="../bootstrap/css/font.css" rel="stylesheet" type="text/css"/>
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-Process.css" rel="stylesheet">
    <link href="../bootstrap/css/font-awesome.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-checkBox.css" rel="stylesheet">
    <link href="../bootstrap/css/custome_register.css" rel="stylesheet">
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
<body>

<div class="container">


    <div class="row bs-wizard" style="border-bottom:0;">

        <div id="step1" class="col-xs-3 bs-wizard-step disabled">
            <div class="text-center bs-wizard-stepnum">Step 1</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a href="#" class="bs-wizard-dot"></a>

            <div class="bs-wizard-info text-center">Lorem ipsum dolor sit amet.</div>
        </div>

        <div id="step2" class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Step 2</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a href="#" class="bs-wizard-dot"></a>

            <div class="bs-wizard-info text-center">Nam mollis tristique erat vel tristique. Aliquam erat volutpat.
                Mauris et vestibulum nisi. Duis molestie nisl sed scelerisque vestibulum. Nam placerat tristique
                placerat
            </div>
        </div>

        <div id="step3" class="col-xs-3 bs-wizard-step disabled"><!-- complete -->
            <div class="text-center bs-wizard-stepnum">Step 3</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a href="#" class="bs-wizard-dot"></a>

            <div class="bs-wizard-info text-center">Integer semper dolor ac auctor rutrum. Duis porta ipsum vitae mi
                bibendum bibendum
            </div>
        </div>

        <div id="step4" class="col-xs-3 bs-wizard-step disabled"><!-- active -->
            <div class="text-center bs-wizard-stepnum">Step 4</div>
            <div class="progress">
                <div class="progress-bar"></div>
            </div>
            <a href="#" class="bs-wizard-dot"></a>

            <div class="bs-wizard-info text-center"> Curabitur mollis magna at blandit vestibulum. Vestibulum ante ipsum
                primis in faucibus orci luctus et ultrices posuere cubilia Curae
            </div>
        </div>
    </div>

    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingOne">
                <h4 class="panel-title">
                    Basic Info
                    <a id="custome_accordion_mark" role="button" data-toggle="collapse" data-parent="#accordion"
                       href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Plus
                    </a>

                </h4>
            </div>
            <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                <div class="panel-body">
                    <div class="col-lg-12 well">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Your Big Day" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Choose password" class="form-control">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Retype password" class="form-control">
                                        </div>
                                    </div>

                                    <div class="checkbox checkbox-primary">
                                        <input id="checkbox2" type="checkbox">
                                        <label for="checkbox2">
                                            Send me love letter & other relevant Info
                                        </label>
                                    </div>
                                    <div id="step1_btn" class="span7 text-center">
                                        <button class="btn btn-large btn-block btn-primary" type="button">Next</button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingTwo">
                <h4 class="panel-title">
                    Choose URL
                    <a id="custome_accordion_mark" class="collapsed" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Plus
                    </a>
                </h4>
            </div>
            <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                <div class="panel-body">

                    <div class="col-lg-12 well">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="row">
                                        <div class="col-sm-6 form-group">
                                            <input type="text" placeholder="Name" class="form-control">
                                        </div>
                                    </div>


                                    <div id="step2_btn" class="span7 text-center">
                                        <button class="btn btn-large btn-block btn-primary" type="button">Next</button>
                                    </div>


                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading" role="tab" id="headingThree">
                <h4 class="panel-title">
                    Choose Template
                    <a id="custome_accordion_mark" class="collapsed" role="button" data-toggle="collapse"
                       data-parent="#accordion" href="#collapseThree" aria-expanded="false"
                       aria-controls="collapseThree">
                        Plus
                    </a>
                </h4>
            </div>
            <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                <div class="panel-body">
                    <div class="col-lg-12">
                        <div class="row">
                            <form>
                                <div class="col-sm-12">
                                    <div class="row">

                                        <div class="dropdown">
                                            <div class="col-lg-6">
                                                <div class="span7 text-center">
                                                    <button class="btn btn-default dropdown-toggle" type="button"
                                                            id="dropdownMenu1"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Choose Theme
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="span7 text-center">
                                                    <button class="btn btn-default dropdown-toggle" type="button"
                                                            id="dropdownMenu1"
                                                            data-toggle="dropdown" aria-haspopup="true"
                                                            aria-expanded="true">
                                                        Choose Culture
                                                        <span class="caret"></span>
                                                    </button>
                                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                                        <li><a href="#">Action</a></li>
                                                        <li><a href="#">Another action</a></li>
                                                        <li><a href="#">Something else here</a></li>
                                                        <li role="separator" class="divider"></li>
                                                        <li><a href="#">Separated link</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                    <div class="row_margin_top">
                                        <div class="col-lg-12 well">

                                            <div class="col-lg-4">

                                                <div class="photo-wrapper">
                                                    <div class="photo">
                                                        <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img
                                                                    class="img-responsive" src="http://placehold.it/500x500"
                                                                    alt=""></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">

                                                <div class="photo-wrapper">
                                                    <div class="photo">
                                                        <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img
                                                                    class="img-responsive" src="http://placehold.it/500x500"
                                                                    alt=""></a>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-4">

                                                <div class="photo-wrapper">
                                                    <div class="photo">
                                                        <a class="fancybox" href="assets/img/portfolio/port06.jpg"><img
                                                                    class="img-responsive" src="http://placehold.it/500x500"
                                                                    alt=""></a>
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row_margin_top">
                                        <div id="step3_btn" class="span7 text-center">
                                            <button class="btn btn-large btn-block btn-primary" type="button">
                                                Next
                                            </button>
                                        </div>
                                    </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="panel panel-default">
        <div class="panel-heading" role="tab" id="headingFour">
            <h4 class="panel-title">
                Select Events
                <a id="custome_accordion_mark" class="collapsed" role="button" data-toggle="collapse"
                   data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Plus
                </a>

            </h4>
        </div>
        <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
            <div class="panel-body">
                <div class="col-lg-12 well">
                    <div class="row">
                        <form>
                            <div class="col-sm-12">
                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <div class="span7 text-center">
                                            <select class="form-control">
                                                <option>1</option>
                                                <option>2</option>
                                                <option>3</option>
                                                <option>4</option>
                                                <option>5</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div id="step4_btn" class="span7 text-center">
                                    <button class="btn btn-large btn-block btn-primary" type="button">Finish</button>
                                </div>


                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<script>

    $('#headingOne').find('a').click(function () {
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');

    });

    $('#step1_btn').find('button').click(function(){

        $("#collapseOne").collapse('hide');
        $("#collapseTwo").collapse('show');
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');

    });

    $('#headingTwo').find('a').click(function () {
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');

    });

    $('#step2_btn').find('button').click(function(){

        $("#collapseTwo").collapse('hide');
        $("#collapseThree").collapse('show');
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step disabled');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');


    });


    $('#headingThree').find('a').click(function () {
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');

    });


    $('#step3_btn').find('button').click(function(){

        $("#collapseThree").collapse('hide');
        $("#collapseFour").collapse('show');
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step active');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step disabled');
    });

    $('#headingFour').find('a').click(function () {
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step active');

    });

    $('#step4_btn').find('button').click(function(){

        $("#collapseFour").collapse('hide');
        $("#step1").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step2").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step3").attr('class', 'col-xs-3 bs-wizard-step complete');
        $("#step4").attr('class', 'col-xs-3 bs-wizard-step active');


        alert("Registration Successfully!");
    });


</script>
</body>
</html>

