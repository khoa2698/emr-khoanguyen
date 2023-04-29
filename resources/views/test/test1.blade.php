<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Forever Alone</title>
 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <style type="text/css" media="screen">
      #messages{
        color: #1abc9c;
      }
      #messages li{
        max-width: 50%;
        margin-bottom:10px;
        border-color: #34495e;
      }
    </style>
</head>
<body>
    <div class="container">
      <div class="content">
        <h1>Laravel & Pusher: Laravel & Pusher: Tự kỉ mùa Sum Up =))</h1>
 
        <div>
          <h2 id="head">Chat box</h2>
          <ul id="messages" class="list-group"></ul>
        </div>
      </div>
    </div>
    <script src="/js/app.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://js.pusher.com/4.1/pusher.min.js"></script>
    <script>
        $(document).ready(function(){
            var pusher = new Pusher('2d72471eb8fc9bd91cc9', {
                cluster: 'ap1',
                useTLS: true
            });
            var channel = pusher.subscribe('channel-test-chat');
            channel.bind('App\\Events\\TestPusher', addMessageDemo);
        });

        function addMessageDemo(data) {
              var liTag = $("<li class='list-group-item'></li>");
              console.log(data.message, data.city)
              liTag.html(data.message + ' ' + data.city);
              $('#messages').append(liTag);
              $('#head').css('color', 'red')
        }
        // Echo.channel(`channel-test-chat`)
        // .listen('TestPusher', (e) => {
        //     console.log(e.message);
        // });
    </script>
</body>
</html>

