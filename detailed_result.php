
<!DOCTYPE html>
<html>
    <head>
        <title>Teacher Details</title>

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
    
      <a class="nav-link" href="logout.php">Logout</a>
    </li>
  </ul>
</nav>
  <div class="container">
      <h1 class="heading text-center mt-4 font-weight-bold">Academic Year 2021-2022</h1>
  </div>
      <div class="row justify-content-center table-responsive-sm"">
            <table class="styled-table table table-hover table-sm table-striped table-condensed table-bordered" >
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>PRN No</th>
                        <th>Class</th>
                        <th>Student Name</th>
                        <th>Exam</th>
                        <th>English</th>
                        <th>Maths</th>
                        <th>Physics</th>
                        <th>Chemistry</th>
                        <th>Biology</th>
                        <th>Social Studies</th>
                        <th>Total Marks</th>
                        <th>Percentage</th>
                        <th>Grade</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                  <?php 
                    $db = mysqli_connect('localhost', 'root','');
                    mysqli_select_db($db , 'userregistration');
                    $records = mysqli_query($db,"select * from students_data"); 
                    $sum = 0;
                    $index=0;
                    while($data = mysqli_fetch_assoc($records))
                    {
                      $sum = $data['Social']+$data['Biology']+$data['Chemistry']+$data['Physics']+$data['Mathematics']+$data['English'];
                      $index+=1;
                      if($data['Social']>40  &&  $data['Biology']>40 && $data['Chemistry']>40 && $data['Physics']>40 && $data['Mathematics']>40 && $data['English']>40)
                      {
                          $status = ($sum>=246) ? "Pass" : "Fail";
                      }
                      else{
                          $status = "Fail";
                      }
                      if($sum>=0 && $sum<=245)
                      {
                        $grade = "C";
                      }
                      else if($sum>=246 && $sum<=305)
                      {
                        $grade = "B";
                      }
                      else if($sum>=306 && $sum<=425)
                      {
                        $grade = "B+";
                      }
                      else if($sum>=426 && $sum<=546)
                      {
                        $grade = "A";
                      }
                      else if($sum >=546)
                      {
                        $grade = "A+";
                      }
                    ?>
                      <tr class="<?PHP echo ( $status == "Pass" )? 'green': 'red'; ?>">
                        <td><?php echo $index; ?>.</td>
                        <td><?php echo $data['prn']; ?></td>
                        <td><?php echo $data['class']; ?></td>
                        <td><?php echo $data['name']; ?></td>
                        <td><?php echo $data['exam']; ?></td>
                        <td class="<?PHP echo ( $data['English'] <= 40 )? 'orange': ''; ?>"><?php echo $data['English']; ?></td>
                        <td class="<?PHP echo ( $data['Mathematics'] <= 40 )? 'orange': ''; ?>"><?php echo $data['Mathematics']; ?></td>
                        <td class="<?PHP echo ( $data['Physics'] <= 40 )? 'orange': ''; ?>"><?php echo $data['Physics']; ?></td>
                        <td class="<?PHP echo ( $data['Chemistry'] <= 40 )? 'orange': ''; ?>"><?php echo $data['Chemistry']; ?></td>
                        <td class="<?PHP echo ( $data['Biology'] <= 40 )? 'orange': ''; ?>"><?php echo $data['Biology']; ?></td>
                        <td class="<?PHP echo ( $data['Social'] <= 40 )? 'orange': ''; ?>"><?php echo $data['Social']; ?></td>
                        <td><?php echo $sum;?></td>
                        <td><?php echo round(($sum/6),2);?>%</td>
                        <td><?php echo $grade; ?></td>
                        <td ><?php echo $status; ?></td>
                      </tr> 
                    <?php
                    $sum = 0;
                    }
                    ?>
                    </tbody>
              
            <?php mysqli_close($db); // Close connection ?>
      </div>
</body>
</html>