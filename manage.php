<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="images/Favicon.ico">
    <link rel="icon" sizes="192x192" href="images/favicon.png">
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/signupstyle.css">
    <title>MANAGE</title>
</head>
<body onload="myfuction()">
    <div id="loading"></div>
    <?php include 'navbar.php'; ?>
    <div class="container c">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="regForm">
                    <div class="o">Manage Gatepass<div>

                        <button class="btn btn-primary btn-lg btn-block" onclick="window.location.href = 'update.php';" title="update gatepass">Update gatepass</button>
                        <button class="btn btn-primary btn-lg btn-block" onclick="window.location.href = 'update_material.php';" title="update material">Update Material</button>
                </div>
            </div>
        </div>
    </div>

   
    
<script src="./js/preloader.js"></script>
</body>
</html>