<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <title>OpenTok Hello World</title>
    <script src="//static.opentok.com/webrtc/v2.2/js/TB.min.js"></script>
    <script type="text/javascript">
        var apiKey = '<?php echo $apiKey; ?>';
        var sessionId = '<?php echo $sessionId; ?>';
        var token = '<?php echo $token; ?>';
    </script>
    <script src="/js/helloworld.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/game.css">
</head>
<body>
    <h2>ROOM <?php echo $room; ?></h2>

    <div id="publisher"></div>

    <div id="subscribers"></div>
</body>
</html>
