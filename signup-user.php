<?php require_once "controllerUserData.php";
 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Signup Form</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-4 offset-md-4 form">
                <form action="signup-user.php" method="POST" autocomplete="">
                    <h2 class="text-center">Signup Form</h2>
                    <p class="text-center">It's quick and easy.</p>
                    <?php
                    if(count($errors) == 1){
                        ?>
                    <div class="alert alert-danger text-center">
                        <?php
                            foreach($errors as $showerror){
                                echo $showerror;
                            }
                            ?>
                    </div>
                    <?php
                    }elseif(count($errors) > 1){
                        ?>
                    <div class="alert alert-danger">
                        <?php
                            foreach($errors as $showerror){
                                ?>
                        <li><?php echo $showerror; ?></li>
                        <?php
                            }
                            ?>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="form-group">
                        <input class="form-control" type="text" name="name" placeholder="Your Name"
                            value="<?php if(isset($name)){ echo $name; }?>" />
                        <span class="text-danger"><?php if(!empty($name_error)){ echo $name_error; } ?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control"
                            oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);"
                            type="number" maxlength="10" class="no-outline" name="mobile" placeholder="Mobile Number"
                            value="<?php if(isset($mobile)){ echo $mobile; }?>" />
                        <span class="text-danger"><?php if(!empty($mobile_error)){ echo $mobile_error; } ?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="email" name="email" placeholder="Email Address"
                            value="<?php if(isset($email)){ echo $email; }?>" />
                        <span class="text-danger"><?php if(!empty($email_error)){ echo $email_error; } ?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="password" placeholder="Password"
                            value="<?php if(isset($password)){ echo $password; }?>" />
                        <span class="text-danger"><?php if(!empty($password_error)){ echo $password_error; } ?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control" type="password" name="cpassword" placeholder="Confirm password"
                            value="<?php if(isset($cpassword)){ echo $cpassword; }?>" />
                        <span class="text-danger"><?php if(!empty($cpassword_error)){ echo $cpassword_error; } ?></span>
                    </div>
                    <div class="form-group">
                        <input class="form-control button" type="submit" name="signup" value="Signup">
                    </div>
                    <div class="link login-link text-center">Already a member? <a href="login-user.php">Login here</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>