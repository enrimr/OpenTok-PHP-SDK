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
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap-theme.min.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

    <script src="/js/helloworld.js"></script>
    <script src="/js/html2canvas.js"></script>
    <link rel="stylesheet" type="text/css" href="/css/game.css">

    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
</head>
<body>

    <script>
    var save = function() {
        html2canvas(document.body, {
            onrendered: function(canvas) {
                document.body.appendChild(canvas);
            }
        });
    }
    </script>
    <header class="navbar navbar-static-top bs-docs-nav" id="navbar-header" role="banner" style="margin-bottom:60px;">
        <div class="container">
        <div class="navbar-header" id="header-web-logo">
            <img src="https://static.opentok.com/img/img_www_nav_TBLogoReg.png">
        </div>
        <nav class="collapse navbar-collapse bs-navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active">
              <a id="hideHat" href="#" onclick="$('#hideHat').hide();$('#hat').hide();$('#showHat').show();" style="display:none;">Hide hat</a>
              <a id="showHat" href="#" onclick="$('#showHat').hide();$('#hat').show();$('#hideHat').show();">Show hat</a>
            </li>
            <li>
              <a id="hide" href="#" onclick="$('#hide').hide();$('#mask').hide();$('#show').show();">Hide mask</a>
              <a id="show" href="#" onclick="$('#show').hide();$('#mask').show();$('#hide').show();" style="display:none;">Show mask</a>
            </li>
          </ul>
          <div class="navbar-right">
             <span>Mix faces game :)</span>
          </div>
        </nav>
    </header>
    
        <div id="mask"><img src="/images/face-02-02.png" /></div>
        <div id="hat" style="display:none;"><img src="/images/giants_hat.png" /></div>
        <div></div>
        <div class="container">
            <div id="publisher"></div>
            <div id="subscribers"></div>
        </div>
    </div>
</body>
</html>
