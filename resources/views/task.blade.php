<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <title>Task</title>
</head>
<body>
    <div id="msg"></div>
    <div id="wrapper">
        <form action="">
            <input type="text" id="message">
            <input type="submit" value="submit" id="btn-send">
        </form>
    </div>

    <script>
        jQuery(document).ready(function($){
            // CREATE
            $("#btn-send").click(function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                var formData = {
                    message: jQuery('#message').val()
                };
                var state = jQuery('#btn-send').val();
                var type = "POST";
                var ajaxurl = 'sendEvent';
                $.ajax({
                    type: type,
                    url: ajaxurl,
                    data: formData,
                    dataType: 'json',
                    success: function (data) {
                        // code here
                    },
                    error: function (data) {
                        console.log(data);
                    }
                });
            });
        });
     </script>
    
</body>
</html>