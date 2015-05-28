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
    <script src="/js/html2canvas.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/game.css">
</head>
<body>
    <h2>Hello, World!</h2>
    <script>
    var save = function() {
        html2canvas(document.body, {
            onrendered: function(canvas) {
                document.body.appendChild(canvas);
            }
        });
    }
    </script>
    <div onclick="save()">Save</div>
    <div id="publisher"></div>

    <div id="subscribers"></div>
</body>
</html>
