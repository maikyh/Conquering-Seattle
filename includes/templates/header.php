<?php
    if (!isset($_SESSION)) {
        session_start();
    }

    $auth  = $_SESSION['login'] ?? false;
?>

<!DOCTYPE php>
<php lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Real Estate</title>
    <link rel="stylesheet" href="/build/css/app.css">
</head>
<body>
    <header class="header <?php echo $inicio ? 'start' : ''; ?>">
        <div class="container content-header">
            <div class="bar">
                <a href="/">
                <h1 class="titlee">Conquering <span class="bold">Seattle !</span></h1>
                </a>

                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="Menu Responsive Icon">
                </div>

                <img src="/build/img/dark-mode.svg" class="dark-mode-button">
                <div class="right">
                    <nav class="navegation top">
                        <a class="link__hover-effect link__hover-effect--white" href="us.php">About</a>
                        <a class="link__hover-effect link__hover-effect--white" href="advertisements.php">Advertisements</a>
                        <a class="link__hover-effect link__hover-effect--white" href="blog.php">Blog</a>
                        <a class="link__hover-effect link__hover-effect--white" href="contact.php">Contact</a>
                        <?php if($auth): ?>
                            <a class="link__hover-effect link__hover-effect--white" href="Sign-off.php">Sign Off</a>
                        <?php else: ?>
                            <a class="link__hover-effect link__hover-effect--white" href="login.php">Log In</a>
                        <?php endif; ?>
                    </nav>
                </div>

            </div> <!--.bar-->

            <?php
                if($inicio) {
                    // echo "<h1>Sale of Exclusive Luxury Houses and Apartments</h1>";
                }
            ?>
        </div>
    </header>