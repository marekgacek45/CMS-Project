<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GameSiteCMS</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <nav class="navbar navbar-dark bg-primary">
        <div class="container">

            <div>
                <?php if (Auth::isLoggedIn()): ?>
                    <a href="/CMS%20Project/logout.php"><button>Logout</button></a>
                    <a href="/CMS%20Project/admin/index.php"><button>Admin</button></a>
                    <a href="/CMS%20Project/index.php"><button>Home</button></a>
                </div>


            <?php else: ?>
                <a href="login.php"><button>Login</button></a>
            <?php endif ?>
        </div>

    </nav>