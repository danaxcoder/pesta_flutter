<?php
?>
<html>
    <head>
        <title>BNI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/common/css/global.css">
        <link rel="stylesheet" href="assets/common/css/splash.css">
        <link rel="stylesheet" href="assets/lib/ripple/dist/ripple.css">
        <script src="assets/common/js/jquery.js"></script>
        <script>
            const module = {};
        </script>
        <script type="module" src="assets/common/js/splash.js"></script>
    </head>
    <body>
        <div style="width: 100%; height: 100%;">
            <img src="assets/common/img/splash.png" width="100%" height="100%" style="object-fit: cover;">
            <div class="ripple" style="position: fixed; left: 0; top: 0; width: 100%; height: 100%;" onclick="module.enterHome()"></div>
        </div>
    </body>
</html>