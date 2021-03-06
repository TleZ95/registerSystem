<!doctype html>
<html>

<head>
    <title>Register System</title>
    <?php
    require("Factor/BootstrapCSSLink.php");
    ?>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
        }

        form {
            border: 3px solid #f1f1f1;
        }

        input[type=text],
        input[type=password] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }

        button {
            background-color: skyblue;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }

        button:hover {
            opacity: 0.8;
        }

        .cancelbtn {
            width: auto;
            padding: 10px 18px;
            background-color: #f44336;
        }

        .imgcontainer {
            text-align: center;
            margin: 24px 0 12px 0;
        }

        img.avatar {
            width: 40%;
            border-radius: 50%;
        }

        .container {
            padding: 16px;
        }

        span.psw {
            float: right;
            padding-top: 16px;
        }

        /* Change styles for span and cancel button on extra small screens */
        @media screen and (max-width: 300px) {
            span.psw {
                display: block;
                float: none;
            }

            .cancelbtn {
                width: 100%;
            }
        }
    </style>
</head>

<?php
require("Factor/NavBar.php");
?>

<body>
    <div class="container">
        <div class="card card-out">
            <div class="card-body card-body-in">
                <h4 align="center" style="margin: 0px"><B>สาขาวิศวกรรมซอฟต์แวร์ ยินดีต้อนรับ</B></h4>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="card card-out">
            <div class="card-body card-body-in">

                <h4 align="center"> <b>สมัครสมาชิก</b> </h4>

                <div class="dropdown-divider"></div>
                <form action="/action_page.php" method="post">


                    <div class="container">

                        <label for="psw"><b>Username</b></label>
                        <input type="password" placeholder="Enter Username" name="psw" required>

                        <label for="uname"><b>EMAIL</b></label>
                        <input type="text" placeholder="Enter Email" name="EMAIL" required>

                        <label for="psw"><b>Password</b></label>
                        <input type="password" placeholder="Enter Password" name="psw" required>

                        <label for="psw"><b>Name</b></label>
                        <input type="password" placeholder="Enter Name" name="psw" required>

                        <label for="psw"><b>TEL</b></label>
                        <input type="password" placeholder="Enter Tel" name="psw" required>

                        <button type="submit">Register</button>

                    </div>

                    <div class="container" style="background-color:#f1f1f1">
                        <button type="button" class="cancelbtn">Cancel</button>

                    </div>
                </form>

            </div>
        </div>
    </div>
</body>

</html>