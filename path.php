<?php
//include app
require('core/app.php');
//check if user is logged in already
if (isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])) {
    header("Location: ./dashboard");
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <script src="https://unpkg.com/octavalidate@latest/native/validate.js"></script>
    <?php include('includes/head.php'); ?>
    <link rel="stylesheet" href="assets/css/auth.css">
    <title>Choose your path</title>
    <style>
    html,
    body {
        overflow-x: hidden;
        font-family: -apple-system, BlinkMacSystemFont, sans-serif;
        background: linear-gradient(315deg, rgba(101, 0, 94, 1) 3%, rgba(60, 132, 206, 1) 38%, rgba(48, 238, 226, 1) 68%, rgba(255, 25, 25, 1) 98%);
        animation: gradient 15s ease infinite;
        background-size: 400% 400%;
        background-attachment: fixed;
        color: #fff;
    }

    .navbar {
        box-shadow: 2px 2px 89px #6a6a6a;
    }

    .navbar a {
        color: #fff !important;
    }

    .navbar-toggler i {
        color: #fff;
    }

    .centered {
        transform: translate(-50%, 50%);
        left: 50%;
        position: relative;
        max-width: 600px;
    }

    .glass {
        /* From https://css.glass */
        background: rgba(255, 255, 255, 0.2);
        border-radius: 16px;
        box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        backdrop-filter: blur(5px);
        -webkit-backdrop-filter: blur(5px);
        border: 1px solid rgba(255, 255, 255, 0.3);
        border-radius: 10px;
    }

    @keyframes gradient {
        0% {
            background-position: 0% 0%;
        }

        50% {
            background-position: 100% 100%;
        }

        100% {
            background-position: 0% 0%;
        }
    }

    .wave {
        background: rgb(255 255 255 / 25%);
        border-radius: 1000% 1000% 0 0;
        position: fixed;
        width: 200%;
        height: 12em;
        animation: wave 10s -3s linear infinite;
        transform: translate3d(0, 0, 0);
        opacity: 0.8;
        bottom: 0;
        left: 0;
        z-index: -1;
    }

    .wave:nth-of-type(2) {
        bottom: -1.25em;
        animation: wave 18s linear reverse infinite;
        opacity: 0.8;
    }

    .wave:nth-of-type(3) {
        bottom: -2.5em;
        animation: wave 20s -1s reverse infinite;
        opacity: 0.9;
    }

    @keyframes wave {
        2% {
            transform: translateX(1);
        }

        25% {
            transform: translateX(-25%);
        }

        50% {
            transform: translateX(-50%);
        }

        75% {
            transform: translateX(-25%);
        }

        100% {
            transform: translateX(1);
        }
    }
    </style>
</head>

<body>
    <div>
        <div class="wave"></div>
        <div class="wave"></div>
        <div class="wave"></div>
    </div>
    <main>
        <?php include('includes/navbar.php'); ?>
        <div class="centered glass p-4">
            <section>
                <h3 class="text-center">Choose your path</h3>
                <h6 class="text-center">Choose a path that is right for you</h6>
                <article class="p-3">
                    <a href="mentee/register" class="btn btn-outline-light mb-2">I am a Mentee <i
                            class="fas fa-arrow-right"></i></a>
                    <a href="mentor/register" class="btn btn-danger">I am a Mentor <i
                            class="fas fa-arrow-right"></i></a>
                </article>
            </section>
            </form>
        </div>
    </main>
    <?php include 'includes/foot.php'; ?>
</body>

</html>