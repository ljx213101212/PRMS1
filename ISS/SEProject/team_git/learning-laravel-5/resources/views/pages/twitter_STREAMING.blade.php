
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>twitter prototype</title>
    <link href="../bootstrap/css/font.css" rel="stylesheet" type="text/css"/>
    <link href="../bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../bootstrap/css/bootstrap-table.css" rel="stylesheet">
    <script src="../bootstrap/jquery/jquery.min.js"></script>
    <script src="../bootstrap/js/bootstrap.min.js"></script>
    <script src="../bootstrap/js/custome_widget_1.js"></script>
    <script src="../bootstrap/js/bootstrap.js"></script>
    <script src="../bootstrap/js/bootstrap-table.js"></script>
</head>
<body>


<h1 class="page-header">
    Social
</h1>


<form>

    <div class="form-group">
        <div class="col-xs-6 col-md-4">
            <input type="text" class="form-control" id ="hash_text" placeholder="Set Hashtag like: #wedding">
        </div>
    </div>
</form>

<button id= "protoType_start" class="btn btn-default">Start</button>
<button id= "protoType_stop" class="btn btn-default">Stop</button>

<br><br><br>


<span id="stage" style="background-color:#cc0;">
         STREAMINg JSON WILL KEEP REFRESHING FROM HERE
</span>


<script>

    var json_data = Object();
    var switcher = true;
    //var interval_id = Array();
    $("#protoType_start").click(function(){


        var hash_text =  $("#hash_text").val();
//        $.get(
//            "twitter_json_STREAMING.php",
//            { hash_text: hash_text },
//            function(data) {
//                $('#stage').html(data);
//                json_data = JSON.parse(data);
//                //alert(data);
//                fill_table(json_data);
//            }
//        );
        //interval_id.push(setInterval(ajaxCall, 3000));
        ajaxCall();
        function ajaxCall() {
            $.ajax({
                url: 'twitter_json_STREAMING.php',
                data: {
                    hash_text: hash_text
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    if(textStatus==="timeout") {
                        //do something on timeout
                        $('#stage').html("Ajax timed out!");
                        if (switcher === true) {
                            ajaxCall();
                        }else{
                            $('#stage').html("Ajax request canceled");
                        }
                    }
                },
                contentType: 'application/json; charset=utf-8',
                success: function (data) {
                    $('#stage').html(data);
                    if (switcher === true) {
                        ajaxCall();
                    }else{
                        $('#stage').html("Ajax request canceled");
                    }
                },
                type: 'POST',
                timeout:20000

            });
        }

    });

    $("#protoType_stop").click(function(){


        switcher = false;
    })

</script>


<?php
/**
 * Created by PhpStorm.
 * User: jixiang
 * Date: 23/10/15
 * Time: 12:27 PM
 */

