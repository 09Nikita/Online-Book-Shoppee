<!DOCTYPE html>
<html>
    <head>
        <title>Responsive Menu</title>

        <meta name="viewport" content="width-device-width, initial-scale-1">

        <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="style.css">
<script>
    jQuery(document).ready(function($){
        $('#toggler').click(function(event){
            {
                event.preventDefault();
                $('#wrap').toggleClass('toggled');
            }
        });
    });
</script>
    </head>
    <body>
     
       <div class="d-flex" id="wrap">
            <div class="sidebar bg-light border-light">
                <div class="sidebar-heading ">
                    <p class="text-center font-weight-bold color-white">Manage Students</p>
                    <button class="btn btn-outine-light bg-danger mt-3 float-right " id="toggler">
                    <i class="fa fa-bars"></i>
                </button>
                </div>
                <ul class="list-group list-group-flush">
                    <a href="index.php" class="list-group-item list-group-item-action">
                        <i class="fa fa-vcard-o"></i>Dashboard</a>
                    <a href="add_student.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-user"></i>Add Student</a>
                    <a href="student.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-eye"></i>Student Profile Details</a>
                    <a href="view_student.php#" class="list-group-item list-group-item-action">
                    <i class="fa fa-eye"></i>Student Academic Details</a>
                    <a href="edit_student.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-pencil"></i>Results Section</a>
            
                    <a href="add_teacher.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-user"></i>Add Teacher</a>
                    <a href="view_teacher.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-eye"></i>View Teacher</a>
                    <a href="edit_teacher.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-pencil"></i>Explore</a>
                    <a href="logout.php" class="list-group-item list-group-item-action">
                    <i class="fa fa-sign-out"></i>Logout</a>
                
                </ul>
            </div>
            
                    <div class="container bg-danger mt-3 pb-5" id="formsetting">
                        <h1 class="text-center text-white">Students Result Management System</h1>
                        <h3 class="text-center text-white pb-4 pt-4 font-weight-bold">Welcome To Dashboard</h3>
            <section id="main-form">
                
            <div id="demo" class="carousel slide" data-ride="carousel">
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>
    <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="image/Banner2.jpg" alt="Los Angeles" width="1100" height="500">
      <div class="carousel-caption">
    
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/Banner3.jpg" alt="Chicago" width="1100" height="500">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="carousel-item">
      <img src="image/Banner1.jpg" alt="New York" width="1100" height="500">
      <div class="carousel-caption">
          <!--can add caption here-->
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>
</div>
                        
                    </div>
                </section>
            
        </div>
       

    </body>
</html>