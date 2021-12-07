
<!DOCTYPE html>
<html>
    <head>
        <title>Academic Details</title>

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
    <nav class="navbar navbar-expand-sm bg-info navbar-light">
  <!-- Brand -->
  <a class="navbar-brand logo" href="index.php"><img src="image/2.jpg" alt="logo" height=50px width=50px ></a>

  <!-- Links -->
  <ul class="navbar-nav font-weight-bold text-light">
    
    <li class="nav-item">
      <a class="nav-link" href="index.php">Home</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="menu.php">Dashboard</a>
    </li>
<br>
<br>
    <!-- Dropdown -->
    <li class="nav-item dropdown ">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
          <i class="fa fa-user"></i>
        Student
        
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="add_student.php">Add Student Personal Details</a>
        <a class="dropdown-item" href="view_student.php">Add Student Academic Details</a>
        <a class="dropdown-item" href="edit_student.php">Result</a>
      </div>
    </li>
    <li class="nav-item dropdown">
      <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
      <i class="fa fa-user"></i>
        Teacher
      </a>
      <div class="dropdown-menu">
        <a class="dropdown-item" href="add_teacher.php">Add Teacher</a>
        <a class="dropdown-item" href="view_teacher.php">View Teacher</a>
        <a class="dropdown-item" href="edit_teacher.php">Explore</a>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="edit_student.php">Result</a>
    </li>

    <li class="nav-item">
    
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>

     
        <section id="main-form" class="ml-5">
        
                    <h2 class="text-center text-danger pt-5 pb-5 ml-5 font-weight-bold">Student Result Management System</h2>
                    <div class="container bg-dark" id="formsetting">
                        <h3 class=" text-center text-white pb-4 pt-4 font-weight-bold">Update/Edit Student Academic Details</h3>
                        <form method="POST" action="av.php" enctype="multipart/form-data">
                            <div class="row">
                                <div class="col-md-6 col-sm-6 col-12 m-auto">
                                    <div class="form-group">
                                        <p class="text-white">
                                            Update details here...
                                        </p>
                                    
                                        <label class="text-white">PRN No</label>
                                        <input type="text" name="prn" placeholder="Enter Your PRN No" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Email</label>
                                        <input type="email" name="email" placeholder="Enter Your Email" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">College</label>
                                        <input type="text" name="college" placeholder="Enter Your college" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Year</label>
                                        <input type="radio" name="year" value="fe" class="form-check-input ml-2">
                                        <label class="form-check-label text-white pl-4">FE</label>
                                        <input type="radio" name="year" value="se" class="form-check-input ml-2">
                                        <label class="form-check-label text-white pl-4">SE</label>
                                        <input type="radio" name="year" value="te" class="form-check-input ml-2">
                                        <label class="form-check-label text-white pl-4">TE</label>
                                        <input type="radio" name="year" value="be" class="form-check-input ml-2">
                                        <label class="form-check-label text-white pl-4">BE</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Semester</label>
                                        <input type="radio" name="sem" value="sem1" class="form-check-input ml-2">
                                        <label class="form-check-label text-white pl-4">SemI</label>
                                        <input type="radio" name="sem" value="sem2" class="form-check-input ml-2">
                                        <label class="form-check-label text-white pl-4">SemII</label>
                                        <input type="radio" name="sem" value="sem3" class="form-check-input ml-2">
                                        <label class="form-check-label text-white pl-4">SemI & SemII</label>
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Marks</label>
                                        <input type="text" name="marks" placeholder="Enter Your Marks" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">OutOf</label>
                                        <input type="text" name="outof" placeholder="Enter Your OutOf" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-6 col-sm-6 col-12 m-auto">
                                    <div class="form-group">
                                        <br>
                                        
                                        <label class="text-white">Percentage</label>
                                        <input type="text" name="percentage" placeholder="Enter Your Percentage" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Grade</label>
                                        <input type="text" name="grade" placeholder="Enter Your Grade" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Result</label>
                                        <input type="text" name="result" placeholder="Enter Your Result" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Cleared Subjects</label>
                                        <input type="text" name="clear" placeholder="Enter No of Cleared subjects" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label class="text-white">Failed Subjects</label>
                                        <input type="text" name="fail" placeholder="Enter No of failed subjects" class="form-control">
                                    </div>
                                    
                                    <input type="submit" name="add" value="Update" class="btn btn-success px-5 mt-3 mb-3 align-center">
                                </div>
                            </div>
                        </form>
                    </div>
                </section>

    
    
            </body>
</html>