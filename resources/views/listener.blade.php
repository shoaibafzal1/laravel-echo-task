<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <div id="broadcast"></div>
    <script>
        window.laravel_echo_port='{{env("LARAVEL_ECHO_PORT")}}';
    </script>
    <script src="//{{ Request::getHost() }}:{{env('LARAVEL_ECHO_PORT')}}/socket.io/socket.io.js"></script>
    <script src="{{ url('/js/laravel-echo-setup.js') }}" type="text/javascript"></script>
      
    <script type="text/javascript">
        var i = 0;
        window.Echo.channel('user-channel')
        .listen('.UserEvent', (data) => {
            i++;
            $("#broadcast").append('<div class="alert alert-success">'+i+'.'+data.message+'</div>');
            console.log(data.message)
        });
    </script>
</body>
</html>