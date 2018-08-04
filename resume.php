<!DOCTYPE html>
<html>
<head>
	<title>Resume</title>
	<style type="text/css">
		.details{
			padding: 10px;
		}
		label{
			font-size: 25px;
		}
		input{
			height: 25px;
			width: 1300px;
		}
		#sub{
			align-content: center;
			width: 100px;
		}
	</style>
</head>
<body bgcolor="grey">
	<h1 align="center">FILL IN YOUR RESUME</h1>

	<form action="store.php" method="get">
		<div class="details">
            <label for="name"><b>Name: </b></label> <br>
            <input type="text"  name="name" placeholder="Enter your name"> <br>
            <small>Please enter your full name.</small>
        <br><br>
            <label for="usn"><b>USN: </b></label> <br>
            <input type="text"  name="usn" placeholder="Enter your usn"> <br>
            <small>Please enter your usn.</small>
        <br><br>
        <label for="phone"><b>Phone Number: </b></label> <br>
            <input type="number" name="phone" placeholder="Enter your phone number"><br>
            <small>Please enter your phone number.</small>
        <br><br>
            <label for="address"><b>Address: </b></label> <br>
            <textarea name="address" style="width:1300px; height: 40px" rows="2"></textarea> <br>
            <small>Please type in your address in two lines.</small>
        <br><br>
        <label for="email"><b>Email: </b></label> <br>
            <input type="email" name="email" placeholder="Enter your email id"><br>
            <small>Please enter your email.</small>
        <br><br>
        	<label for="tenth"><b>Enter your 10th Marks: </b></label> <br>
            <input type="text" name="tenth" placeholder="Enter your 10th Marks"><br>
            <small>Enter your 10th Marks(in percentage)</small>
        <br><br>
        	<label for="twelth"><b>Enter your 12th Marks: </b></label><br>
            <input type="text" name="twelth" placeholder="Enter your 12th Marks"><br>
            <small>Enter your 12th Marks(in percentage)</small>
        <br><br>
        	<label for="engg"><b>Enter your Engg Marks: </b></label><br>
            <input type="text" name="engg" aria-describedby="enggHelp" placeholder="Enter your engg marks"><br>
            <small id="enggHelp">Enter your engg. marks(in percentage)</small>
        <br><br>
        	<label for="engg"><b>Enter your Skills: </b></label><br>
            <input type="text" name="skills"  placeholder="Enter your skills(front end dev.,etc)"><br>
            <small>Please enter your skills seperated by commas.</small>
       <br><br>
        	<label for="cert"><b>Enter the certification courses you have completed(if any): </b></label> <br>
            <input type="text" name="cert" placeholder="Enter the cert. courses"><br>
            <small>Please enter the cert. courses seperated by commas with the wesite name.</small>
        <br><br>
        	<label for="achei"><b>Enter your extra acheivements(if any): </b></label> <br>
            <input type="text" name="achei" placeholder="Enter your acheivements"><br>
            <small>Please enter your acheivements here</small>
           <br><br>
           	<div class="button">
          		<input type="submit" id="sub" name="submit" value="Submit">
          	</div>
        </div>

	</form>
</body>
</html>