<!DOCTYPE html>
<html lang="en">
<head>

  <title>placement website</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="author" content="Caren">
	<script src="amcharts/amcharts.js" type="text/javascript"></script>
    <script src="amcharts/serial.js" type="text/javascript"></script>
    <script src="amcharts/pie.js" type="text/javascript"></script>
    <script src = "mychart.js" type="text/javascript"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style>
  body {
      font: 400 15px Lato, sans-serif;
      line-height: 1.8;
      color: #818181;
  }
  h2 {
      font-size: 24px;
      text-transform: uppercase;
      color: #303030;
      font-weight: 600;
      margin-bottom: 30px;
  }
  h4 {
      font-size: 19px;
      line-height: 1.375em;
      color: #303030;
      font-weight: 400;
      margin-bottom: 30px;
  }
  .jumbotron {
      background-image: url("http://blog.visme.co/wp-content/uploads/2017/07/50-Beautiful-and-Minimalist-Presentation-Backgrounds-037.jpg");;
      color: #282727;
      padding: 100px 25px;
      font-family: Montserrat, sans-serif;
	  height: 500px;
  }
  .container-fluid {
      padding: 60px 50px;
  }
  .bg-grey {
      background-color: #f6f6f6;
  }
  .logo-small {
      color: #f4511e;
      font-size: 50px;
  }
  .logo {
      color: #f4511e;
      font-size: 200px;
  }
  .thumbnail {
      padding: 0 0 15px 0;
      border: none;
      border-radius: 0;
  }
  .thumbnail img {
      width: 100%;
      height: 100%;
      margin-bottom: 10px;
  }
  .carousel-control.right, .carousel-control.left {
      background-image: none;
      color: #f4511e;
  }
  .carousel-indicators li {
      border-color: #f4511e;
  }
  .carousel-indicators li.active {
      background-color: #f4511e;
  }
  .item h4 {
      font-size: 19px;
      line-height: 1.375em;
      font-weight: 400;
      font-style: italic;
      margin: 70px 0;
  }
  .item span {
      font-style: normal;
  }
  .panel {
      border: 1px solid #f4511e;
      border-radius:0 !important;
      transition: box-shadow 0.5s;
  }
  .panel:hover {
      box-shadow: 5px 0px 40px rgba(0,0,0, .2);
  }
  .panel-footer .btn:hover {
      border: 1px solid #f4511e;
      background-color: #fff !important;
      color: #f4511e;
  }
  .panel-heading {
      color: #fff !important;
      background-color: #f4511e !important;
      padding: 25px;
      border-bottom: 1px solid transparent;
      border-top-left-radius: 0px;
      border-top-right-radius: 0px;
      border-bottom-left-radius: 0px;
      border-bottom-right-radius: 0px;
  }
  .panel-footer {
      background-color: #282727;
  }
  .panel-footer h3 {
      font-size: 32px;
  }
  .panel-footer h4 {
      color: #aaa;
      font-size: 14px;
  }
  .panel-footer .btn {
      margin: 15px 0;
      background-color: #f4511e;
      color: #fff;
  }
  .navbar {
      margin-bottom: 0;
      background-color: #3d3c3c;
      z-index: 9999;
      border: 0;
      font-size: 12px !important;
      line-height: 1.42857143 !important;
      letter-spacing: 4px;
      border-radius: 0;
      font-family: Montserrat, sans-serif;
  }
  .navbar li a, .navbar .navbar-brand {
      color: #fff !important;
  }
  .navbar-nav li a:hover, .navbar-nav li.active a {
      color: #f4511e !important;
      background-color: #fff !important;
  }
  .navbar-default .navbar-toggle {
      border-color: transparent;
      color: #fff !important;
  }
  footer .glyphicon {
      font-size: 20px;
      margin-bottom: 20px;
      color: #f4511e;
  }
  .slideanim {visibility:hidden;}
  .slide {
      animation-name: slide;
      -webkit-animation-name: slide;
      animation-duration: 1s;
      -webkit-animation-duration: 1s;
      visibility: visible;
  }
  @keyframes slide {
    0% {
      opacity: 0;
      transform: translateY(70%);
    }
    100% {
      opacity: 1;
      transform: translateY(0%);
    }
  }
  @-webkit-keyframes slide {
    0% {
      opacity: 0;
      -webkit-transform: translateY(70%);
    }
    100% {
      opacity: 1;
      -webkit-transform: translateY(0%);
    }
  }
  @media screen and (max-width: 768px) {
    .col-sm-4 {
      text-align: center;
      margin: 25px 0;
    }
    .btn-lg {
        width: 100%;
        margin-bottom: 35px;
    }
  }
  @media screen and (max-width: 480px) {
    .logo {
        font-size: 150px;
    }
  }

  table {
    width:10%;
	 border-collapse: collapse;
	 padding:25px;
	 border: 1px solid black;

}

td{
   background-color: #696969;

   padding: 25px;
   text-align:center;
   }
div.nn{
 width : 80%;
 border-style: ridge;
 margin: auto;
  padding: 10px;
}
  </style>
</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#myPage">DSCE</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#about">ABOUT</a></li>
		<li><a href="#pricing">DETAILS</a></li>
        <li><a href="#services">COMPANIES</a></li>
        <li><a href="#portfolio">STATISTICS</a></li>
        <li><a href="#contact">CONTACT</a></li>
		<li><a href="#login">LOGIN</a></li>
      </ul>
    </div>
  </div>
</nav>

<div class="jumbotron text-center">
   <a href="#myPage"><img src="http://dsce.edu.in/images/Home/logo.png" style="width:500px; height:150px;"></a><br><br>
  <p style="font-size: 10px;">AN AUTONOMOUS INSTITUTE AFFILIATED TO VTU, APPROVED BY AICTE & UGC, ACCREDITED BY NAAC WITH 'A' GRADE.<br>
BIOTECHNOLOGY, CSE, ELECTRICAL, MECHANICAL & TELECOMMUNICATION ENGINEERING ACCREDITED BY NBA</p>
  <h1> PLACEMENT WEBSITE </h1>
</div>

<!-- Container (About Section) -->
<div id="about" class="container-fluid bg-grey">
  <h1>About DSCE</h1>
			<br><br>

<div class="container-fluid" style="height:450px; width:1000px;">

  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="images/Front.jpg" alt="Los Angeles" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/Ele.jpg" alt="Chicago" style="width:100%;">
      </div>

      <div class="item">
        <img src="images/Front.jpg" alt="New york" style="width:100%;">
      </div>

	   <div class="item">
        <img src="images/One.jpg" alt="New york" style="width:100%;">
      </div>

	   <div class="item">
        <img src="images/BB.jpg" alt="New york" style="width:100%;">
      </div>

	   <div class="item">
        <img src="images/Amp.jpg" alt="New york" style="width:100%;">
      </div>

	   <div class="item">
        <img src="images/Three.jpg" alt="New york" style="width:100%;">
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>

			<div>
			Dayananda Sagar College of Engineering is approved by All India Council for Technical Education (AICTE), Govt. of India and affiliated to Visvesvaraya Technological University. It has widest choice of engineering branches having 16 Under Graduate courses & 17 Post Graduate courses. In addition, it has 21 Research Centres in different branches of Engineering catering to research scholars for obtaining Ph.D under VTU. Various courses are accredited by NBA.<br><br>
			The Institute is spread over 29 acres of land with large infrastructure supported by laboratories with state-of-the-art, Equipment & Machines. The Central Library with modern facilities occupying 4500 Sq. mts of area and including Digital Library provides the knowledge base for the students.<br><br>
			The campus is WIFI equipped with large bandwidth internet facility. The College has good faculty strength with highest professional integrity and committed to the academics with transparency in their actions. Each faculty takes the responsibility of mentoring a certain number of students' through personal attention paving the way for the students' professional growth. The faculties are research oriented having number of sponsored R&D projects from different agencies such as Department of Science & Technology, Defense R & D organization, Indian Space Research Organization, AICTE etc.
			</div>

</div>
<br><br>
<!-- Container (placement Section) -->
<div id="pricing" class="container-fluid">
  <div class="text-center">
    <h2>About Placement</h2>
	<div>
		<img src="images/placements_1.jpg" width="100%" height="220px" >
		</div>
		<br> <br>
	<p style="line-height:1.6">
Dayananda Sagar Institutions has an elite placement division to facilitate the placements for all students. The Centre provides pre-placement training in soft skills to all students to enable them to apprise to the modern corporate requirements in association with CIL - Centre for Innovation & Leadership and HR Division.</p>
<pstyle="line-height:1.6">
The Placement Division also supports training in CV Writing, Aptitude Assessment, Mock interviews, Group Discussion etc.,
Internship opportunities in various companies will be provided for interested UG/PG students.
</p>
<pstyle="line-height:1.6">
DSI is committed to provide best talent for corporates.
</p>
<pstyle="line-height:1.6">
The Placement division works with Corporates to build the overall Development of Students as per industry requirements.
			</p></div>
			<br>

			<div class="nn">
<b style = "font-size:20px; font-weight:4em; color:#3d3c3c;">Mr. M N Guruvenkatesh</b>
<br><br>
<p style="line-height:1.6">

<img src="images/Guruvenkatesh.png" style ="float:left;padding:10px;" width = "160px">
The Dayananda Sagar University has state of the art infrastructure for all departments. The excellent infrastructure of the University facilitates different activities of placement like pre-placement talks, Presentations, Online / written tests, Group discussions/ JMT, and interviews as per the requirements of the Companies. The centralized Placement cell have consistent placement records for the students from UG and PG programs that illustrates the commitment to the success of the Dayananda Sagar Group of Institutions.

I cordially invite all students to join our esteemed University for good placements and bright future. Also I cordially invite all prospective employers of our students to visit Dayananda Sagar University and to participate in the on-campus placement process.
</p>

  </div>
</div>
<br><br>
<!-- Container (recruiting Section) -->
<div id="services" class="container text-center">
  <h2>Recruiting partners</h2>
  <h1 > List of few Recruiting Partners </h1>
		  <p>Infosys, HCL, Accenture, IBM, WIPRO, Mercedes Benz, SASKEN, Tech Mahindra,Mahindra
						Satyam, NOKIA, TESCO, Novell Software Ltd., Cap Gemini, I Gate, HP, Mphasis, Volvo, ICICI,
						KPIT, HSBC, Thomson Reuters, D-Link, Oracle, SBI Life, ITC InfoTech, TCS, Fire Pro systems,
						Mindtree, Deloitte, Cognizant, Honeywell, Biocon, Soma Constructions, KNK, LG Soft,
						Huwaei, Patni Computers, Microsoft, Adobe, Future Group, L & T InfoTech, ERNST & YOUNG,
						KPMG, Deutsche Bank, Aviva, Kotak Securities, Standard Chartered Bank, AMADA-Japan,
						Wipro InfoTech, Godrej, Altair, ICICI Securities & Many More.<br><br>

						The Placement Cell coordinates with recruiting companies and handles the entire end
						to end placement process.<br><br>

						The Training and Placement Cell is provided with a well-equipped Auditorium/ Seminar
						Hall for pre-placement talk, well-furnished rooms for training, interviews and counseling.</p>


			<h1 id> Placement Partners </h1>
         <div class="container">
  <div class="row">
    <div class="col-lg-4"><a href="https://www.cisco.com/c/en_in/index.html" target="_blank"><img src="http://www.coach2clarity.com/wp-content/uploads/2011/11/cisco-logo.jpg" style="width:200px;height:200px" ></a></div>
    <div class="col-lg-4"><a href="https://www.infosys.com/" target="_blank"><img src="https://ik.imagekit.io/newsbytes/images/1465819547.webp" style="width:200px;height:200px"></a></div>
	<div class="col-lg-4"><a href="https://www.capgemini.com/" target="_blank"><img src="https://media.glassdoor.com/sqll/3280/igate-squarelogo-1416307890301.png" style="width:200px;height:200px" ></a></div>
  </div>

  <div class="row">
    <div class="col-md-4"><a href="https://www.microsoft.com/en-in" target="_blank"><img src="https://cdn.vox-cdn.com/thumbor/NeSo4JAqv-fFJCIhb5K5eBqvXG4=/7x0:633x417/1200x800/filters:focal(7x0:633x417)/cdn.vox-cdn.com/assets/1311169/mslogo.jpg" style="width:200px;height:200px"></a></div>
    <div class="col-md-4"><a href="www.dell.com/in/en" target="_blank"><img src="https://assets7.domestika.org/project-items/001/713/097/dell_2016_logo_reticula-big.jpg?1473868603" style="width:150px;height:150px"></a></div>
	<div class="col-md-4"><a href="https://www.oracle.com/in/index.html" target="_blank"><img src="http://www.famouslogos.org/wp-content/uploads/2013/04/logo-oracle-300x100.png" style="width:200px;height:200px"></a></div>
  </div>

  <div class="row">
    <div class="col-md-4"><a href="https://www.microfocus.com/novell/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/thumb/f/f8/Novell_Logo.svg/800px-Novell_Logo.svg.png" style="width:150px;height:100px"></a></div>
    <div class="col-md-4"><a href="https://www.hcltech.com/" target="_blank"><img src="https://www.hcltech.com/sites/default/files/styles/large/public/images/guideline_based_vectors-square.png?itok=KEUChzF3"style="width:150px;height:150px"></a></div>
	<div class="col-md-4"><a href="www.larsentoubro.com/" target="_blank"><img src="http://corpwebmediaprod.larsentoubro.com/webimage/mediakitlogoimage//media/30891/ltgrouplogo.jpg" style="width:150px;height:150px"></a></div>
  </div>

  <div class="row">
    <div class="col-md-4"><a href="https://www.mu-sigma.com/" target="_blank"><img src="http://jobway.in/wp-content/uploads/2014/12/mu-sigma-logo.jpg" style="width:150px;height:150px"></a></div>
    <div class="col-md-4"><a href="https://www.jpmorgan.com/" target="_blank"><img src="https://seeklogo.com/images/J/JPMorgan-logo-20C5449C5F-seeklogo.com.gif" style="width:200px;height:200px"></a></div>
	<div class="col-md-4"><a href="https://www.ibm.com/in-en/" target="_blank"><img src="http://diylogodesigns.com/blog/wp-content/uploads/2016/04/ibm-logo-png-transparent-background.png" style="width:150px;height:150px"></a></div>
  </div>

</div>
</div>
<br><br>
<!-- Container (chart Section) -->
<div id="portfolio" class="container-fluid text-center bg-grey">
  <h2>Current Statistics</h2>

			<br>
			<h1>
				Statistics of current year's placements
			</h1>
			<div id="chartdiv" style="width: 600px; height: 400px;"></div>
			<br><br>
			<h1>
				Segregation of stats
			</h1>
			<br>
            <div id="chartdiv2" style="width: 100%; height: 400px;"></div>

</div>


<br><br>
<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2 class="text-center">CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Dayananda Sagar College of Engineering,Bangalore - 560078</p>
      <p><span class="glyphicon glyphicon-phone"></span> +91-80-42161750</p>
	   <p><span class="glyphicon glyphicon-phone"></span> +91-80-421617865</p>
      <p><span class="glyphicon glyphicon-envelope"></span> placements@dayanandasagar.edu</p>
    </div>
    <div class="col-sm-7 slideanim">
      <iframe width="700" height="300" frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?q=dayanada%20sagar%20college%20of%20engineering&key=AIzaSyB16FCDWG_jakFc2tF4UJWZnbFCx4s_WW8" allowfullscreen></iframe>
    </div>
  </div>
</div>
<br><br>
<hr size="3" noshade>
<!-- Container (Contact Section) -->
<div id="login" class="container-fluid">
  <h1 class="text-center">LOGIN HERE</h1>
  <h3 class="text-center"> know about the college placements scenarios and register for the upcoming companies </h3><br><br>
  <div class="container">
  <div class="row">
    <div class="col-lg-4"  style="border-right: 6px solid black;"><a href="newloginadmin.php" target="newloginadmin.php"><img src="http://tespl.org/oes/images/admin_login.gif" style="width:300px;height:200px" ></a></div>
    <div class="col-lg-4" style="border-right: 6px solid black;"><a href="newloginstudent.php" target="_blank"><img src="https://www.cadenceacademy.in/frontend/default/images/student-login.jpg" style="width:300px;height:200px"></a></div>
	<div class="col-lg-4"><a href="https://www.capgemini.com/" target="_blank"><img src="https://recpro.ci.davenport.ia.us/Images/cm/Register_Now_Button_2.png" style="width:300px;height:200px" ></a></div>
  </div>
  </div>
  </div>
<hr>
<footer class="container-fluid text-center ">
  <a href="#myPage" title="To Top">
    <span class="glyphicon glyphicon-chevron-up"></span>
  </a>
  <div class="copyright">	Copyright  2018 DSCE. All Rights Reserved.</div>
				<div class="designby copyright_middle">Designed by <a title="DSI" href="http://www.dayanandasagar.edu/" target="_blank">DSI</a></div>
</footer>

<script>
$(document).ready(function(){
  // Add smooth scrolling to all links in navbar + footer link
  $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

    // Prevent default anchor click behavior
    event.preventDefault();

    // Store hash
    var hash = this.hash;

    // Using jQuery's animate() method to add smooth page scroll
    // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
    $('html, body').animate({
      scrollTop: $(hash).offset().top
    }, 900, function(){

      // Add hash (#) to URL when done scrolling (default click behavior)
      window.location.hash = hash;
    });
  });

  // Slide in elements on scroll
  $(window).scroll(function() {
    $(".slideanim").each(function(){
      var pos = $(this).offset().top;

      var winTop = $(window).scrollTop();
        if (pos < winTop + 600) {
          $(this).addClass("slide");
        }
    });
  });
})
</script>

</body>
</html>
