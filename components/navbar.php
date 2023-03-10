<?php 

// require('classes/Auth.php');
// session_start();

require('includes/init.php')
?>

<nav class="navbar navbar-dark bg-primary">
    <div class="container">

    <?php if (!Auth::isLoggedIn()): ?>
        <a href="login.php"><button>Login</button></a>
        <?php endif ?>

        <?php if (!empty($_SESSION['username'])): ?>
            <p> Witaj
                <?= $_SESSION['username'] ?>
            </p>
        <?php endif ?>


        <?php if (Auth::isLoggedIn()): ?>
            <a href="logout.php"><button>Logout</button></a>
        <?php endif ?>
    </div>

</nav>

<!-- jeżeli jestem na stronie login musi to być niewidoczne -->