<?php
//include app
require('core/app.php');
//check if user is logged in already
if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
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
    <title>Login</title>
    <style>
        main{
            
    background-color: rgb(221, 221, 221);
        }
    </style>
</head>

<body>
    <main>
        <?php include('includes/navbar.php'); ?>
        <div class="whole">
            <h3 class="text-center">Welcome Back</h3>
            <form method="post" id="form_login">
                <div class="form-section">
                    <div class="form-group">
                        <label for="email">Email address</label>
                        <input octavalidate="R,EMAIL" type="email" name="email" id="inp_email"
                            placeholder="enter a valid email" class="input">
                    </div>
                    <div class="form-group">
                        <label for="password">Enter password</label>
                        <div id="merge">
                            <input octavalidate="R,PWD" type="password" name="pass" id="inp_pass" class="input"
                                placeholder="********">
                            <button class="show-pass" type="button">show</button>
                        </div>
                    </div>
                    <div class="form-group">
                        <button form="form_login" class="btn btn-app">Login</button>
                    </div>
                </div>
                <p class="m-0 text-center">Don't have an account? <a href="./register">Click here to register</a></p>
        </div>
        </form>
        </div>
    </main>
    <?php include 'includes/foot.php'; ?>
    <script>
    //hide or show password
    $('.show-pass').on('click', () => {
        if ($('#inp_pass').attr('type') == "password") {
            $('#inp_pass').attr('type', 'text');
        } else {
            $('#inp_pass').attr('type', 'password');
        }
    })
    document.addEventListener('DOMContentLoaded', () => {
        $('#form_login').on('submit', (e) => {
            e.preventDefault();
            const formData = new FormData(e.target);
            const btn = e.target.querySelector('button[form="form_login"');
            //add token
            formData.append('token', '');
            const myForm = new octaValidate('form_login', {
                errorElem: {
                    "inp_pass": "merge"
                }
            });
            if (myForm.validate()) {
                btn.setAttribute("disabled", "disabled");
                //send request
                fetch('api/login.php', {
                        mode: "cors",
                        method: "post",
                        body: formData
                    })
                    .then(res => res.json())
                    .then(res => {
                        if (res.success) {
                            toastr.success(res.data.message);
                            setTimeout(() => {
                                window.location.href = 'dashboard';
                            }, 5000)
                        } else {
                            toastr.error(res.data.message)
                        }
                        btn.removeAttribute("disabled");
                    })
                    .catch(err => {
                        console.log(err);
                        btn.removeAttribute("disabled");
                    })
            }
        })
    })
    </script>
</body>

</html>
