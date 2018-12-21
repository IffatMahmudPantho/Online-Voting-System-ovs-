<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel = "stylesheet" href = "{{asset('css/app.css')}}">
    <title>{{config('app.name','Online Voting System')}}</title>

        
        
        
    </head>
    <body>
        @include('inc.navbar2')
        <div class = " container">
             @yield('content')
            

             <h6 align ="right">
                
                    <script type="text/javascript">
                        function startTime()
                        {
                        var today=new Date();
                        var h=today.getHours();
                        var m=today.getMinutes();
                        var s=today.getSeconds();
                        
                        m=checkTime(m);
                        s=checkTime(s);
                        document.getElementById('txt').innerHTML="Current Server Time : "+h+":"+m+":"+s;
                        t=setTimeout('startTime()',500);
                        }
                        function checkTime(i)
                        {
                        if (i<10)
                        {
                        i="0" + i;
                        }
                        return i;
                        }
                        </script>
                        </head>
                        <body onload="startTime()">
                        <div id="txt"></div>
                        </h6>



    </body>
</html>
