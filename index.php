<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Login Form</title>
        <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
        <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <style>
            body {
                background-image: url('images/library.jpg');
                background-size: cover;
                background-repeat: no-repeat;
                background-attachment:fixed ;
                height: 155vh;
                display: flex;
                justify-content: center;
                align-items: center;
                flex-direction: column;
            }

            .login-container {
                width: 80%;
                background: rgba(255, 255, 255, 0.8);
                border-radius: 10px;
                padding: 30px;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
            }

            .login-form-1, .login-form-3 {
                padding: 5%;
                border-radius: 10px;
            }

            .login-form-3 {
                background:#76c3e4
            }

            .login-form-1 {
                background:#76c3e4;
            }

            .login-form-1 h3, .login-form-3 h3 {
                text-align: center;
                color: #343a40;
            }

            .btnSubmit {
                font-weight: 600;
                color: #fff;
                background-color: #007bff;
                border: none;
                padding: 10px 20px;
                border-radius: 5px;
                cursor: pointer;
            }

            .btnSubmit:hover {
                background-color: #0056b3;
            }

            label {
                font-size: 14px;
                color: red;
            }

            h4 {
                text-align: center;
                margin-bottom: 20px;
                color: green;
            }
            .title {
                color: black;
                text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
                margin-bottom: 20px;
                font-size: 62px;
                font-weight: bold;
                text-align: center;
                background: white;
                box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);

            }
        </style>
    </head>
    <body>
    <div class="title">
    <h1>SEUSL Library Management System</h1></div>
       
        <?php
            $emailmsg = $pasdmsg = $msg = $ademailmsg = $adpasdmsg = "";

            if (!empty($_REQUEST['ademailmsg'])) {
                $ademailmsg = $_REQUEST['ademailmsg'];
            }

            if (!empty($_REQUEST['adpasdmsg'])) {
                $adpasdmsg = $_REQUEST['adpasdmsg'];
            }

            if (!empty($_REQUEST['emailmsg'])) {
                $emailmsg = $_REQUEST['emailmsg'];
            }

            if (!empty($_REQUEST['pasdmsg'])) {
                $pasdmsg = $_REQUEST['pasdmsg'];
            }

            if (!empty($_REQUEST['msg'])) {
                $msg = $_REQUEST['msg'];
            }
        ?>

        <div class="container login-container">
            <div class="row"><h4><?php echo $msg; ?></h4></div>
            <div class="row">
                <!-- Admin Login -->
                <div class="col-md-6 login-form-3">
                    <h3>Admin Login</h3>
                    <form action="loginadmin_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" required />
                        </div>
                        <label>*<?php echo $ademailmsg; ?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword" placeholder="Your Password *" required />
                        </div>
                        <label>*<?php echo $adpasdmsg; ?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>

                <!-- Student Login -->
                <div class="col-md-6 login-form-1">
                    <h3>Student Login</h3>
                    <form action="login_server_page.php" method="get">
                        <div class="form-group">
                            <input type="text" class="form-control" name="login_email" placeholder="Your Email *" required />
                        </div>
                        <label>*<?php echo $emailmsg; ?></label>
                        <div class="form-group">
                            <input type="password" class="form-control" name="login_pasword" placeholder="Your Password *" required />
                        </div>
                        <label>*<?php echo $pasdmsg; ?></label>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="container login-container">
        <h1>Welcome to SEUSL Library Management System</h1>
        <p>
            The SEUSL Library Management System is designed to streamline library operations and provide users with seamless access to resources. 
            Whether you're a student, faculty member, or librarian, this system ensures that books, research materials, and other resources are 
            easily accessible. With an intuitive interface and robust features, managing library operations has never been easier.
        </p>
        <h3>VISION:</h3>
        <ul>
            <li>Efficient book cataloging and inventory management</li>
            <li>Quick and easy book search</li>
            <li>Member registration and tracking</li>
            <li>Automated book issuing and return with fine calculations</li>
            <li>Detailed reports on library usage</li>
        </ul>
        </div>
    </body>
</html>
```