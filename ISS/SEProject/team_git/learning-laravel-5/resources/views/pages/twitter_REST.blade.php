<!DOCTYPE html>
<html lang="en">
@extends('app')
<head>
    <meta charset="UTF-8">
    <title>twitter prototype</title>

</head>
<body>


@section('sidebar')
    @parent
    <p>This is appended to the master sidebar</p>
@stop
<?php
//
//
//$url = 'https://api.twitter.com/1.1/followers/ids.json';
//$url           = 'https://api.twitter.com/1.1/search/tweets.json';
//$getfield      = '?q=%23freebandnames';
//$getfield2     = '';
//$requestMethod = 'GET';
//
//$twitter = new TwitterAPIExchange($settings);
//echo $twitter->setGetfield($getfield)
//              ->buildOauth($url, $requestMethod)
//              ->performRequest();
//$string = json_decode($twitter->setGetfield($getfield)
//                        ->buildOauth($url, $requestMethod)
//                        ->performRequest(),$assoc = TRUE);
//    print_r($string)
//
//
//
//?>


@section('content')
<h1 class="page-header">
    Social
</h1>
<span id="stage" style="background-color:#cc0;">
         RESTFUL JSON WILL GET FROM HERE
</span>

<form>

    <div class="form-group">
        <div class="col-xs-6 col-md-4">
            <input type="text" class="form-control" id ="hash_text" placeholder="Set Hashtag like: #wedding">
        </div>
    </div>
</form>

<button id="protoType_btn" class="btn btn-default">submit</button>



<script src="{{URL::asset('js/custome_twitter_rest.js')}}"></script>

<?php



?>

<table id="table" data-toggle="table" data-toolbar="#toolbar" data-height="460">
    <thead>
    <tr>
        <th data-field="user_img">user_img</th>
        <th data-field="username">username</th>
        <th data-field="text">text</th>
    </tr>
    </thead>
</table>

@stop
@section('footer')
    @parent
    <p>This is appended to the master footer</p>
@stop

<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script>


</script>

</body>

</html>