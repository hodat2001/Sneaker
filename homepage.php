<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./css/home.css" rel="stylesheet">
    <link rel="stylesheet" href="./css/responsive.css">
    <link href="./fontawesome-free-6.1.0-web/css/all.min.css" rel="stylesheet">
    <link rel="icon" href="./img/logo.png">
    <title>GIÀY HD | Shop giày thể thao số 1 Nghệ An</title> 
</head>
<body>
    <div class="container">
    <?php
           include("admin/config/config.php");
			session_start();
			
			include("./page/header.php");
			include("./page/main.php");
			include("./page/footer.php");
			
		?>
        
       
    </div>
</body>
</html>