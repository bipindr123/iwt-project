<!DOCTYPE html>

<?php

session_start();
if (isset($_SESSION['username'])){
	//$username = $_SESSION['username'];
	echo  'WELCOME '.$_SESSION['username'].'';

	echo "<br><a href='logout.php'>Logout</a>";
	}
	else{
    echo "not working";
		header('Location: /iwtproject/newloginstudent.php');
	}


$name = $_SESSION['username'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "iwtproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


// $sql = "INSERT INTO studentresume (Name, USN, PhoneNo, Address, Email, 10thMarks, 12thMarks, EnggMarks, Skills, CertCourses, Achievements)
// VALUES ('$name', '$usn', '$phone', '$address', '$email', '$tenth', '$twelth', '$engg', '$skills', '$cert', '$achei')";

$sql = "SELECT * FROM studentresume where Name = '$name' ";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {

        $usn =  $row["USN"];
        $skils = $row["Skills"];
        $cgpa = $row["EnggMarks"];
        $certi = $row["CertCourses"];
        $achie = $row["Achievements"];
    }
} else {
    echo "0 results";
}

$conn->close();
?>

<html>
<title>Student Dashboard</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body, h1,h2,h3,h4,h5,h6 {font-family: "Montserrat", sans-serif}
.w3-row-padding img {margin-bottom: 12px}
/* Set the width of the sidebar to 120px */
.w3-sidebar {width: 120px;background: #222;}
/* Add a left margin to the "page content" that matches the width of the sidebar (120px) */
#main {margin-left: 120px}
/* Remove margins from "page content" on small screens */
@media only screen and (max-width: 600px) {#main {margin-left: 0}}
</style>
<body class="w3-black">

<!-- Icon Bar (Sidebar - hidden on small screens) -->
<nav class="w3-sidebar w3-bar-block w3-small w3-hide-small w3-center">
  <!-- Avatar image in top left corner -->
  <img src="profile.png" style="width:80%">
  <a href="#" class="w3-bar-item w3-button w3-padding-large w3-black">
    <i class="fa fa-home w3-xxlarge"></i>
    <p>HOME</p>
  </a>
  <a href="#about" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-user w3-xxlarge"></i>
    <p>ABOUT</p>
  </a>
  <a href="#photos" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-eye w3-xxlarge"></i>
    <p>COMPANIES</p>
  </a>
  <a href="#contact" class="w3-bar-item w3-button w3-padding-large w3-hover-black">
    <i class="fa fa-envelope w3-xxlarge"></i>
    <p>PREPARE</p>
  </a>
</nav>

<!-- Navbar on small screens (Hidden on medium and large screens) -->
<div class="w3-top w3-hide-large w3-hide-medium" id="myNavbar">
  <div class="w3-bar w3-black w3-opacity w3-hover-opacity-off w3-center w3-small">
    <a href="#" class="w3-bar-item w3-button" style="width:25% !important">HOME</a>
    <a href="#about" class="w3-bar-item w3-button" style="width:25% !important">ABOUT</a>
    <a href="#photos" class="w3-bar-item w3-button" style="width:25% !important">COMPANIES</a>
    <a href="#contact" class="w3-bar-item w3-button" style="width:25% !important">PREPARE YOURSELF</a>
  </div>
</div>

<!-- Page Content -->
<div class="w3-padding-large" id="main">
  <!-- Header/Home -->
  <header class="w3-container w3-padding-32 w3-center w3-black" id="home">
    <h1 class="w3-jumbo"><span class="w3-hide-small"></span> <?php echo $name; ?> </h1>
    <p><?php echo $usn; ?></p>
    <p>Dept,DSCE</p>
    <img src="profile.png" alt="boy" class="w3-image" width="92" height="110">
  </header>


  <!-- About Section -->
  <div class="w3-content w3-justify w3-text-grey w3-padding-64" id="about">
    <h2 class="w3-text-light-grey">About Me</h2>
    <hr style="width:200px" class="w3-opacity">
    <p>Details about student to be fetched from the database
    </p>
    <h3 class="w3-padding-16 w3-text-light-grey">My Skills</h3>
    <p class="w3-wide">Skills</p>
    <div class="w3-white">
      <div class="w3-dark-grey" style="height:28px;width:95%"><?php echo $skils; ?></div>
    </div>


    <div class="w3-row w3-center w3-padding-16 w3-section w3-light-grey">
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">11+</span><br>
        Workshops Attended
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">9+</span><br>
        Projects Done
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">4+</span><br>
        Hackathons Attended
      </div>
      <div class="w3-quarter w3-section">
        <span class="w3-xlarge">1+</span><br>
        Courses undertaken
      </div>
    </div>

    <button class="w3-button w3-light-grey w3-padding-large w3-section">
      <i class="fa fa-download"></i> Download Resume
    </button>

    <!-- Grid for tables -->
    <h3 class="w3-padding-16 w3-text-light-grey">Additional Details</h3>
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half w3-margin-bottom">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Certification Courses</li>
          <li class="w3-padding-16"><?php echo $certi; ?></li>

          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Add details</button>
          </li>
        </ul>
      </div>

      <div class="w3-half">
        <ul class="w3-ul w3-white w3-center w3-opacity w3-hover-opacity-off">
          <li class="w3-dark-grey w3-xlarge w3-padding-32">Other Acheivements</li>
          <li class="w3-padding-16"><?php echo $achie; ?></li>

          <li class="w3-light-grey w3-padding-24">
            <button class="w3-button w3-white w3-padding-large w3-hover-black">Add details</button>
          </li>
        </ul>
      </div>
    <!-- End tables -->
    </div>

    <!-- Records -->
    <h3 class="w3-padding-24 w3-text-light-grey">Academic Details</h3>

      <p>Overall CGPA: <?php echo $cgpa; ?></p><br>

  <!-- End About Section -->
  </div>

  <!-- Companies -->
  <div class="w3-padding-64 w3-content" id="photos">
    <h2 class="w3-text-light-grey">Companies hiring</h2>
    <hr style="width:200px" class="w3-opacity">

    <!-- Grid for logos -->
    <div class="w3-row-padding" style="margin:0 -16px">
      <div class="w3-half">
        <a href="cutoff.html"><img src="http://www.coach2clarity.com/wp-content/uploads/2011/11/cisco-logo.jpg" style="width:70%;height:200px"></a>
        <a href="cutoff.html"><img src="https://ik.imagekit.io/newsbytes/images/1465819547.webp" style="width:70%;height:200px"></a>
        <a href="cutoff.html"><img src="https://media.glassdoor.com/sqll/3280/igate-squarelogo-1416307890301.png" style="width:70%;height:200px"></a>
		<a href="cutoff.html"><img src="https://cdn.vox-cdn.com/thumbor/NeSo4JAqv-fFJCIhb5K5eBqvXG4=/7x0:633x417/1200x800/filters:focal(7x0:633x417)/cdn.vox-cdn.com/assets/1311169/mslogo.jpg" style="width:70%;height:200px"></a<
		<a href="cutoff.html"><img src="https://assets7.domestika.org/project-items/001/713/097/dell_2016_logo_reticula-big.jpg?1473868603" style="width:70%;height:200px"></a>
      </div>

      <div class="w3-half">
        <a href="cutoff.html"><img src="http://www.famouslogos.org/wp-content/uploads/2013/04/logo-oracle-300x100.png" style="width:70%;height:200px"></a>
        <a href="cutoff.html"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Novell_Logo.svg/800px-Novell_Logo.svg.png" style="width:70%;height:200px"></a>
        <a href="cutoff.html"><img src="https://www.hcltech.com/sites/default/files/styles/large/public/images/guideline_based_vectors-square.png?itok=KEUChzF3" style="width:70%; height:200px"></a>
        <a href="cutoff.html"><img src="http://corpwebmediaprod.larsentoubro.com/webimage/mediakitlogoimage//media/30891/ltgrouplogo.jpg" style="width:70%;height:200px"></a>
		<a href="cutoff.html"><img src="http://jobway.in/wp-content/uploads/2014/12/mu-sigma-logo.jpg" style="width:70%;height:200px"></a>
      </div>
    <!-- End logos -->
    </div>
  <!-- End Companies -->
  </div>

  <!-- Prepare section -->
  <div class="w3-padding-64 w3-content w3-text-grey" id="contact">
    <h2 class="w3-text-light-grey">Use the following links to start practising the mock aptitude tests!</h2>
    <hr style="width:200px" class="w3-opacity">

    <div class="w3-section">
      <h3 class="w3-padding-24 w3-text-light-grey">Numerical Reasoning</h3>
      <p><a href = "https://tests.practiceaptitudetests.com/numerical-reasoning-tests/testnummember1">Numerical Test 1</a> </p>
      <p><a href = "https://tests.practiceaptitudetests.com/numerical-reasoning-tests/testnummember2">Numerical Test 2</a> </p>
      <h3 class="w3-padding-24 w3-text-light-grey">Verbal Reasoning</h3>
      <p><a href = "https://tests.practiceaptitudetests.com/verbal-reasoning-tests/verbaltest1">Verbal Test 1</a> </p>
      <p><a href = "https://tests.practiceaptitudetests.com/verbal-reasoning-tests/verbaltest2">Verbal Test 2</a> </p>
      <h3 class="w3-padding-24 w3-text-light-grey">Diagrammatic Reasoning</h3>
      <p><a href = "https://tests.practiceaptitudetests.com/diagrammatic-reasoning-tests/testdiag1">Diagrammatic Test 1</a> </p>
      <p><a href = "https://tests.practiceaptitudetests.com/diagrammatic-reasoning-tests/testdiag2">Diagrammatic Test 2</a> </p>
      <h3 class="w3-padding-24 w3-text-light-grey">Situational Judgement</h3>
      <p><a href = "https://tests.practiceaptitudetests.com/situational-judgement-tests/pilot-test1">Situational Test 1</a> </p>
      <p><a href = "https://tests.practiceaptitudetests.com/situational-judgement-tests/pilot-test1">Situational Test 2</a> </p>
    </div><br>


  <!-- End Prepare Section -->
  </div>

<!-- END PAGE CONTENT -->
</div>

</body>
</html>
