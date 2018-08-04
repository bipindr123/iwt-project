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
?>

<!DOCTYPE html>
<html>
<head>
<title> admin dashboard </title>

<style>
body{
   background-color: #4c4b4b;
   }
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
    width: 20%;
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: auto;
    border: none;
    border-radius: 4px;
    cursor: pointer;


}

input[type=submit]:hover {
    background-color: #45a049;
}

div {
width: 50%;
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
	margin: auto;
}
h1 { text-align: center;
color: white; }
#ab{
 margin: auto;
 }
</style>
</head>
<body>
<br>
<h1>ADMIN DASHBOARD</h1>
<br><br>

<div >
  <form action="storeadmin.php">
    <label for="fname">FIRST NAME</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name.."><br>

    <label for="usn">USN</label>
    <input type="text" id="usn" name="usn" placeholder="Your last name.."><br>

    <label for="branch">BRANCH</label>
    <select id="branch" name="branch">
      <option value="cse">computer science</option>
      <option value="ise">information science</option>
      <option value="mech">mechanical</option>
	  <option value="civil">civil</option>
      <option value="ec">electronics comunication</option>
      <option value="eee">electrical and electronics</option>
	  <option value="eie">electrical and instrumentation</option>
      <option value="iem">industrial management</option>
      <option value="tel">telecommunication</option>
	  <option value="btech">biotech</option>
      <option value="mec">medical electronics</option>

    </select><br>

	<label for="cname">COMPANY NAME</label>
    <input type="text" id="cname" name="companyname" placeholder="placed in which company"><br>

	<label for="package">PACKAGE</label>
    <input type="text" id="package" name="package" placeholder="package got"><br><br>

    <input type="submit" value="SUBMIT">

  </form>
</div>

</body>
</html>
