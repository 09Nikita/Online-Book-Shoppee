<html>
<head>
   <title>time table</title>

        

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

<style>
    body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #474e5d;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  }
}
</style>

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
<body bgcolor="skyblue">
<H1><FONT COLOR="DARKCYAN"><CENTER>COLLEGE TIME TABLE</FONT></H1>
<div class="row">
<table class="ml-5" border="2" cellspacing="3" align="center">
<tr>
 <td align="center">
 <td>8:30-9:30
 <td>9:30-10:30
 <td>10:3-11:30
 <td>11:30-12:30
 <td>12:30-2:00
 <td>2:00-3:00
 <td>3:00-4:00
 <td>4:00-5:00
</tr>
<tr>
 <td align="center">MONDAY
 <td align="center">---<td align="center"><font color="blue">SUB1<br>
 <td align="center"><font color="pink">SUB2<br>
 <td align="center"><font color="red">SUB3<br>
 <td rowspan="6"align="center">L<br>U<br>N<br>C<br>H
 <td align="center"><font color="maroon">SUB4<br>
 <td align="center"><font color="brown">SUB5<br>
 <td align="center">counselling class
     
</tr>
<tr>
 <td align="center">TUESDAY
 <td align="center"><font color="blue">SUB1<br>
 <td align="center"><font color="red">SUB2<br>
 <td align="center"><font color="pink">SUB3<br>
 <td align="center">---
 <td align="center"><font color="orange">SUB4<BR>
 <td align="center"><font color="maroon">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">WEDNESDAY
 <td align="center"><font color="pink">SUB1<br>
 <td align="center"><font color="orange">SUB2<BR>
 <td align="center"><font color="brown">SWA<br>
 <td align="center">---
 <td colspan="3" align="center"><font color="green"> lab
</tr>
<tr>
 <td align="center">THURSDAY
 <td align="center">SUB1<br>
 <td align="center"><font color="brown">SUB2<br>
 <td align="center"><font color="orange">SUB3<BR>
 <td align="center">---
 <td align="center"><font color="blue">SUB4<br>
 <td align="center"><font color="red">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">FRIDAY
 <td align="center"><font color="orange">SUB1<BR>
 <td align="center"><font color="maroon">SUB2<br>
 <td align="center"><font color="blue">SUB3<br>
 <td align="center">---
 <td align="center"><font color="pink">SUB4<br>
 <td align="center"><font color="brown">SUB5<br>
 <td align="center">library
</tr>
<tr>
 <td align="center">SATURDAY
 <td align="center"><font color="red">SUB1<br>
 <td colspan="3" align="center">seminar
 <td align="center"><font color="pink">SUB4<br>
 <td align="center"><font color="brown">SUB5<br>
 <td align="center">library
</tr>
</table>

</div>

<br>
<br>
<br>

<h2 style="text-align:center ">Our Team</h2>
<div class="row">
  <div class="column">
    <div class="card">
      <img src="image/a.jpg" alt="Jane" style="width:100%">
      <div class="container">
        <h2>Jane Doe</h2>
        <p class="title">CEO & Founder</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>jane@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/a.jpg" alt="Mike" style="width:100%">
      <div class="container">
        <h2>Mike Ross</h2>
        <p class="title">Art Director</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>mike@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>

  <div class="column">
    <div class="card">
      <img src="image/a.jpg" alt="John" style="width:100%">
      <div class="container">
        <h2>John Doe</h2>
        <p class="title">Designer</p>
        <p>Some text that describes me lorem ipsum ipsum lorem.</p>
        <p>john@example.com</p>
        <p><button class="button">Contact</button></p>
      </div>
    </div>
  </div>
  
</div>
<div class="about-section">
  <h3>Reach Us Page</h3>
  <p>Contact : examcenter@pccoepune.org<br>Phone : 784784846</p><br>
  <p>All rights resereved</p>
</div>

</body>
</html>
