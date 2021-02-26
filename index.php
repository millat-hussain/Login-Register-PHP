<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Login Register Form</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="./css/style.css">
        <style>
       
        </style>
    </head>
    <body class="bg-dark">
        <div class="container mt-4">
            <!-- Login From Here -->
            <div class="row">
                <div class="col-lg-4 offset-lg-4" id="alert">
                    <div class="alert alert-success">
                        <strong id="rasult">Hello World</strong>
                    </div>  
                </div>
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="login">
                    <h2 class="text-center">Login Form</h2>

                    <form action="" method="POST" id="login-frm" role="form" class="p-2" >
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" placeholder="User Name" required="1" minlength="3">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="pass" placeholder="Password" required="1" minlength="6">
                        </div>
                        <div class="form-group">
                        
                            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="rem" class="custom-control-input" id="check">
                <label for="check" class="custom-control-label">Remember Me !</label>
                <a href="#"  class="float-right" id="forgot"> Forgot Password </a>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" id="login-btn">Login</button>
                        </div>
                        <div class="form-group">
                            <p class="text-center">If You New Here ? <a href="#" id="Register">Register</a></p>
                        </div>
                        
                    </form> 
                </div>
            </div>
            <!-- Register From Here -->
              <div class="row">   
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="register">
                    <h2 class="text-center">Register Form</h2>
                    <form action="" method="POST" id="register-frm" role="form" class="p-2" >
                        <div class="form-group">
                            <input type="text" class="form-control" name="fname" placeholder="Full Name" required="1">
                        </div>

                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="User Name" required="1"  minlength="3">
                        </div>

                        <div class="form-group">
                            <input type="Email" class="form-control" name="emile" placeholder="Email Address" required="1">
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="pass1" name="pass1" placeholder="Password" required="1" minlength="6">
                            
                        </div>

                        <div class="form-group">
                            <input type="password" class="form-control" id="pass2" name="pass2" placeholder=" Confirm Password" required="1" minlength="6">

                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-checkbox">
                <input type="checkbox" name="rem" class="custom-control-input" id="turm">
                <label for="turm" class="custom-control-label"> I Aggre The <a href="">terms And Condition!</a></label>
                            </div>
                        </div>
                        <div class="form-group">
                            <button class="btn btn-primary btn-block" id="register-btn">Register</button>
                        </div>
                        <div class="form-group">
                            <p class="text-center">All Ready Ragister ? <a href="" id="login">Login</a></p>
                        </div>
                        
                    </form>
                </div>
            </div>
            <!-- End Register Form -->
            <!-- Forgot Pasword -->
              <div class="row">   
                <div class="col-lg-4 offset-lg-4 bg-light rounded" id="resetpass">
                    <h2 class="text-center">Reset Password </h2>
                    <form action="" method="POST" id="forgo-frm" role="form" class="p-2" >
                        <div class="form-group">
                            <small class="text-muted">
                                To Reset your password , enter the email address and we will send reset password inistaction on your email .
                            </small>
                        </div>
                        <div class="form-group">
                            <input class="form-control" name="text" placeholder="E-mail" type="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"/>
                        </div>

                        <div class="form-group">
                   
                            <input type="submit" id="forgot" class="btn btn-primary btn-block"  value="Forgot Password ">

                        </div>
                        <div class="form-group text-center">
                            <a href="" id="login">Back</a>
                        </div> 
                    </form> 
                </div>
            </div>
            <!-- Forgot passwrod -->
        </div>

       <script src="js/jquery-3.5.0.min.js"></script>
       <script src="js/bootstrap.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.2/jquery.validate.min.js" integrity="sha512-UdIMMlVx0HEynClOIFSyOrPggomfhBKJE28LKl8yR3ghkgugPnG6iLfRfHwushZl1MOPSY6TsuBDGPK2X4zYKg==" crossorigin="anonymous"></script>
       <script>
        
           $(document).ready(function() {

            $("#forgot").click(function() {

                $("#resetpass").show();
                $("#login").hide();
               
            });
 
          $("#Register").click(function() {

            $("#register").show();
            $("#login").hide();

           
            });
          // Jquery Validation


          $("#login-frm").validate();
          $("#register-frm").validate({
            rules:{
                pass2:{
                    equalTo:"#pass1",
                }
            }
          });
          $("#forgo-frm").validate();

          // Form Submit With out Page Refresh 


          $("#register-btn").click(function(e) {

            if (document.getElementById('register-frm').checkValidity()) {
                e.preventDefault();

                $.ajax({
                    url: 'action.php',
                    method: 'POST',
                    data:$("#register-frm").serialize()+"&action=register";
                    success:function (response){
                        console.log(response);
                    }
                });

             
            }



          });






          // Form Submit With out Page Refresh 


           });

       </script>
    </body>
</html>