<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo SITE_NAME; ?> | Login</title>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/login.css'>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/global_custom.css'>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/form-container.css'>
    <link rel='stylesheet' href='<?php echo URL_ROOT; ?>/public/assets/CSS/components/step.css'>
</head>
<body>
    <!-- Top step display section goes here -->
    <div class = "step">
        <h3 class="heading2B">Log in to your Account</h3>
        <ul class="stepNo">
            <li>1</li>
            <li class="active">2</li>
            <li>3</li> 
        </ul> 
    </div>

    <section>
        <div class="box">
            <div class="square" style="--i:0;">
                <img class ="b-img" src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/login2.jpg" alt="">
            </div>
            <div class="square" style="--i:1;">
                <img class ="b-img" src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/login1.jpg" alt="">
            </div>
            <div class="square" style="--i:2;">
                <img class ="b-img" src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/login3.jpg" alt="">
            </div>

            <div class="form-container"> 
                <div class="form"> 
                    <h2><?php echo $data['attentionMessage'] ?></h2>
                    <form action="<?php echo URL_ROOT; ?>/authentications/login" method="POST">
                        <div class="inputBx">
                            <input name="email" id="email" type="email" required="required">
                            <span>Email</span>
                            <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/uidicon.webp" alt="user">
                        </div>
                        <span class="invalidInput"><?php echo $data['emailError'] ?></span>

                        <div class="inputBx password">
                            <input name="password" id="password" type="password" required="required">
                            <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/lock.png" alt="lock">
                            <span>Password</span>
                            <a href="#" class="password-control" onclick="return show_hide_password(this);">
                                <img src="<?php echo URL_ROOT; ?>/public/assets/img/login_img/ShowPw.webp" alt="SPW"
                                        id="imgClickAndChange" onclick="changeImage(this);">
                            </a>
                        </div>
                        <span class="invalidInput"><?php echo $data['passwordError'] ?></span>

                        <!-- <label class="remember">
                            <input type="checkbox">
                            Remember me
                        </label> -->

                        <div class="inputBx LogIn">
                            <input id="submit" type="submit" value="Log in" > 
                        </div>
                    </form>
                    <p>Forgot password? <a href="<?php echo URL_ROOT; ?>/Authentications/verifyEmailMobile"> Reset Password</a></p>
                    <p>Don't have an account? <a href="<?php echo URL_ROOT; ?>/users/signup">Sign up</a></p>
                </div>
            </div>
        </div>
        <div>
            <a href="<?php echo URL_ROOT; ?>/pages/index">
                <button type="submit" class="btn-cancel">
                    Cancel
                </button>
            </a>
        </div>
    </section>
</body>
    <script type="text/javascript" src="<?php echo URL_ROOT; ?>/public/assets/js/login.js"></script>
</html>
