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

        <p><font  color ="">New Election Created </font><font  color ="green"> Successfully!!!!</font>

           

            

            </h2>


        <form action="/successElection" >
            <h6>Go back to your account</h6>
    <a href="/admin.ovs" class="btn btn-success " type="submit ">Go Back</a>
    </div>
    </body>
</html>



