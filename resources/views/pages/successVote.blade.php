<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "{{asset('css/app.css')}}">
    <title>{{config('app.name','Online Voting System')}}</title>

        
        
        
    </head>
    <body>
    <div class="jumbotron text-center">
    <h2>

        <p><font  color ="">Your Vote has been submitted</font><font  color ="green"> Successfully!!!!</font>

            <font  color =""> <br>You have </font><font  color ="red"> 0 </font> 
            <font  color ="">Votes left for this Election. </font>

            

            </h2>


        <form action="/successVote" >
            <h6>Go back to your account</h6>
    <a href="/user.ovs" class="btn btn-success " type="submit ">Go Back</a>
    </div>
    </body>
</html>



