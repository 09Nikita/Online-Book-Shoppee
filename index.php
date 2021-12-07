
<!DOCTYPE html>
<html>
    <head>
        <title>Student Result Management System</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <!-- Popper JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
        <script>
            function content1(){
                document.getElementById("div1").style.display="block";
                document.getElementById("div2").style.display="none";
            }
            function content2(){
                document.getElementById("div1").style.display="none";
                document.getElementById("div2").style.display="block";
            }
        </script>
    </head>
    <body class="bg-info">
        <section class="">
            <h2 class="text-center text-white pt-5 py-4 font-weight-bold">Student Result Management System</h2>
            <p class="text-center font-weight-bold text-white"></p>
            <div class="container bg-warning px-4 py-4" id="formsetting">
                <h3 class="text-black text-center py-3">Admin Login | Register Panel</h3>
                <div class="row">
                    <div class="col-md-7 col-sm-7 col-12">
                    <img src="image/img1.jpg" class="img-fluid">
                    </div>
                    <div class="col-md-5 col-sm-5 col-12">

                        <button class="btn btn-success px-5 " onclick="content1()">Register</button>
                        <button class="btn btn-success px-5 " onclick="content2()">Login</button>

                        <div id="div1" style="display: block;" class="mt-4">
                        <form method="POST" action="register.php">
                            <div class="form-group">
                                <label class="text-black">Full Name</label>
                                <input type="text" name="fname" placeholder="Enter Your Name" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label class="text-black">Email</label>
                                <span class="float-right text-white font-weight-bold"></span>
                                <input type="email" name="email" placeholder="Enter Your Email" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label class="text-black">Password </label>
                                <input type="password" name="password" placeholder="Enter Your Password" class="form-control" required="required">
                            </div>
                            <div class="form-group">
                                <label class="text-black">Confirm Password</label>
                                <span class="float-right text-white font-weight-bold"></span>
                                <input type="password" name="cpassword" placeholder="Re-enter Your Password" class="form-control" required="required">
                            </div>
                            <input type="submit" name="submit" value="Register" class="btn btn-success px-5">
                            <span class="float-right text-white font-weight-bold"></span>
                        </form>
                        </div>
                        <div id="div2" style="display: none;" class="mt-4">
                        <form method="POST" action="login.php">
                        <div class="form-group">
                                <label class="text-black">Email</label>
                                <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label class="text-black">Password </label>
                                <input type="password" name="password" placeholder="Enter Your Password" class="form-control">
                            </div>
                            <input type="submit" name="submit1" value="Login" class="btn btn-success px-5">
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
</html>

