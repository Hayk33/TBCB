<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/layout.css">
    <link rel="stylesheet" href="css/loader.css">
    <link rel="stylesheet" href="css/index.css">
    <title>Admin Panel</title>
</head>
<body>

    <?php
        session_start();
        if (isset($_SESSION["username"])) {
            header("location: ./home.php");
        }
    ?>
    
    <header>
        <div class="container">
            <div class="row">
                <form action="php/sign-in.php" method="post">
                    <center>
                        <h2>Admin Panel</h2>
                        <div class="input-group group-one mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-user"></i></span>
                            <input type="text" class="form-control" placeholder="Username" name="username">
                        </div>
                        <div class="input-group group-two mb-3">
                            <span class="input-group-text" id="basic-addon1"><i class="fa-solid fa-lock"></i></span>
                            <input type="password" class="form-control" placeholder="Password" name="password">
                        </div>
                        <div class="errors">
                            <?php
                                if (isset($_GET["error"])) {
                                    $error = $_GET["error"];
                            ?>
                                <p class="error-text"><?php echo $error ?></p>
                            <?php } ?>
                        </div>
                        <button type="submit"  name="submit" class="btn btn-primary">Sign in</button>
                    </center>
                </form>
            </div>
        </div>
    </header>

    <div class="loader-container">
        <div class="loader"></div>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/ba53ee2513.js" crossorigin="anonymous"></script>
    <script src="js/loader.js"></script>

</body>
</html>