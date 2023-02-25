<!DOCTYPE html>
<html>
<head>
	<link rel="shortcut icon" type="png" href="coursesimg/icon/favicon.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Comaptible" content="IE=edge">
	<title>Compiler Hero</title>
	<meta name="desciption" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="corse.css">
	<script type="text/javascript" src="course.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
	<script>
		$(window).on('scroll', function(){
  			if($(window).scrollTop()){
  			  $('nav').addClass('black');
 			 }else {
 		   $('nav').removeClass('black');
 		 }
		})
	</script>
</head>
<body>
<!-- Navigation Bar -->
	<header id="header">
		<nav>
			<div class="logo"><h1>Compiler Hero</h1></div>
			<ul>
				<li><a class="active" href="welcome.php">Home</a></li>
				<li><a class="nav-link scrollto" href="https://compilerheroaboutus.nicepage.io/?version=025c4527-4418-4934-b61b-fea1263cd125">About</a></li>
                <li><a class="nav-link scrollto" href="blog.php">Blog</a></li>
           </ul>
			<div class="srch"><input type="text" class="search" placeholder="Search here..."><img src="coursesimg/icon/search.png" alt="search" onclick=slide()></div>
			<!-- <a class="get-started" href="log.php">Get Started</a> -->
			<img src="coursesimg/icon/menu.png" class="menu" onclick="sideMenu(0)" alt="menu">
		</nav>
		<div class="head-container">
			<div class="quote">
				<p>The beautiful thing about learning is that nobody can take it away from you</p>
				<h5>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research!</h5>
				<div class="play">
					<img src="coursesimg/icon/play.png" alt="play"><span><a href="https://www.youtube.com/watch?v=KFyrgDO1WXk" target="_blank">Watch Now</a></span>
				</div>
			</div>
			<div class="svg-image">
				<img src="coursesimg/extra/svg1.jpg" alt="svg">
			</div>
		</div>
		<div class="side-menu" id="side-menu">
			<div class="close" onclick="sideMenu(1)"><img src="coursesimg/icon/close.png" alt=""></div>
			<div class="user">
				<img src="coursesimg/creator/roshan.jpeg" alt="Username">
				<p>Vanshaj</p>
			</div>
			<ul>
				<li><a href="#about_section">About</a></li>
			
				<li><a href="#services_section">Services</a></li>
				<li><a href="#contactus_section">Contact</a></li>
				<li><a href="#feedBACK">Feedback</a></li>
			</ul>
		</div>
	</header>


<!-- Some Popular Subjects -->
	<div class="title">
		<span>Popular Subjects on Compiler Hero</span>
	</div>
	<br><br>
	<div class="course">
		<center><div class="cbox">
		<div class="det"><a href="subjects/jee.php"><img src="coursesimg/courses/book.png">JEE Preparation</a></div>
		<div class="det"><a href="subjects/gate.php"><img src="coursesimg/courses/d1.png">GATE Preparation</a></div>
		<div class="det"><a href="subjects/jee.php#sample_papers"><img src="coursesimg/courses/paper.png">Sample Papers</a></div>
		<div class="det"><a href="subjects/quiz.php"><img src="coursesimg/courses/d1.png">Daily Quiz</a></div>
		</div></center>
		<div class="cbox">
		<div class="det"><a href="subjects/computer_courses.php"><img src="coursesimg/courses/computer.png">Computer Courses</a></div>
		<div class="det"><a href="subjects/computer_courses.php#data"><img src="coursesimg/courses/data.png">Data Structures</a></div>
		<div class="det"><a href="subjects/computer_courses.php#algo"><img src="coursesimg/courses/algo.png">Algorithm</a></div>
		<div class="det det-last"><a href="subjects/computer_courses.php#projects"><img src="coursesimg/courses/projects.png">Projects</a></div>
		</div>
	</div>

	
<!-- ABOUT -->
	<div class="diffSection" id="about_section">
		<center><p style="font-size: 50px; padding: 100px">About</p></center>
		<div class="about-content">
				<div class="side-image">
					<img class="sideImage" src="coursesimg/extra/e3.jpg">
				</div>
				<div class="side-text">
					<h2>What you think about us ?</h2>
					<p>Education is the process of facilitating learning, or the acquisition of knowledge, skills, values, beliefs, and habits. Educational methods include teaching, training, storytelling, discussion and directed research.<br> Educational website can include websites that have games, videos or topic related resources that act as tools to enhance learning and supplement classroom teaching. These websites help make the process of learning entertaining and attractive to the student, especially in today's age. <br>Using HTML(HyperText Markup Language), CSS(Cascading Style Sheet), JavaScript, we can make learning more easier and in a interesting way.</p>
				</div>
		</div>
	</div>



<!-- TEAM -->
	<!-- <div class="diffSection" id="team_section">
		<center><p style="font-size: 50px; padding-top: 100px; padding-bottom: 60px;">We're the Creators</p></center>
		<div class="totalcard">
			<div class="card">
				<center><img src="coursesimg/creator/roshan1.jpeg"></center>
				<center><div class="card-title">Roshan Kumar</div>
				<div id="detail">
					<p>“ You can teach a student a lesson for a day; but if you can teach him to learn by creating curiosity, he will continue the learning process as long as he lives “</p>
					<div class="duty"></div>
					<a href="https://www.linkedin.com/in/roshan-kumar-a18b76179/" target="_blank"><button class="btn-roshan">Follow +</button></a>
				</div>
				</center>
			</div>
			<div class="card">
				<center><img src="coursesimg/creator/roshan2.jpeg"></center>
				<center><div class="card-title">Roshan Kumar</div>
				<div id="detail">
					<p>“ Real education should consist of drawing the goodness and the best out of our own students. What better books can there be than the book of humanity “</p>
					<div class="duty"></div>
					<a href="https://www.linkedin.com/in/roshan-kumar-a18b76179/" target="_blank"><button class="btn-akhil">Follow +</button></a>
				</div>
				</center>
			</div>
		</div>
	</div> -->


<!-- SERVICES -->
	<div class="service-swipe">
		<div class="diffSection" id="services_section">
		<center><p style="font-size: 50px; padding: 100px; padding-bottom: 40px; color: #fff;">Services</p></center>
		</div>
		<a href="subjects/computer_courses.php"><div class="s-card"><img src="coursesimg/icon/computer-courses.png"><p>Free Online Computer Courses</p></div></a>
		<a href="subjects/jee.php"><div class="s-card"><img src="coursesimg/icon/brainbooster.png"><p>Building Concepts for Competitive Exams</p></div></a>
		<a href="#"><div class="s-card"><img src="coursesimg/icon/online-tutorials.png"><p>Online Video Lectures</p></div></a>
		<a href="subjects/jee.php#sample_papers"><div class="s-card"><img src="coursesimg/icon/papers.jpg"><p>Sample Papers of Various Competitive Exams</p></div></a>
		<a href="#"><div class="s-card"><img src="coursesimg/icon/p3.png"><p>Performance and Ranking Report</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="coursesimg/icon/discussion.png"><p>Discussion with Our Tutors & Mentors</p></div></a>
		<a href="subjects/quiz.php"><div class="s-card"><img src="coursesimg/icon/q1.png"><p>Daily Brain Teasing Questions to Improve IQ</p></div></a>
		<a href="#contactus_section"><div class="s-card"><img src="coursesimg/icon/help.png"><p>24x7 Online Support</p></div></a>
	</div>

<!-- Reviews by Students -->
<div id="makeitfull">
	<a href="#review_section"><img src="coursesimg/icon/makeitfull.png"></a>
</div>
<div class="review">
	<div class="diffSection" id="review_section">
		<center><p style="font-size: 40px; padding: 100px; padding-bottom: 40px; color: #2E3D49;">What the Students Say About Us?</p></center>
	</div>
	<div class="rev-container">
		<div class="rev-card">
			<div class="identity">
				<img src="coursesimg/creator/humanNotExist1.jpg"><p>Sophie Daniel</p>
				<h6>Java</h6>
				<div class="rating"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					I did Java Fundamenetal course with Rishab Sir. It was a great experience. The brain teasers and assignments, actually the whole lot of content was really good. Some problems were challenging yet interesting. Was explained very well where ever I stuck...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="coursesimg/creator/humanNotExist2.jpg"><p>Clayton Clair</p>
				<h6>C/C++</h6>
				<div class="rating"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					When I was watching "Dear Zindagi", I could relate Sharukh Khan to Arnav Bhaiya. The way Sharukh Khan was giving life lessons to Alia Bhatt, in the same way Arnav Bhaiya will give coding life lessons which will guide you throughout your code life...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="coursesimg/creator/humanNotExist3.jpg"><p>Devyn Sethi</p>
				<h6>JEE</h6>
				<div class="rating"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					Compiler Hero was an amazing experience for me. I belong to electronics department and had a little experience in coding but I think it has helped me think things through in a much more analytical manner. Coding is important no matter which branch you are in. It gives you a better understanding about how to approach a problem...
				</p>
			</div>
		</div>
		<div class="rev-card">
			<div class="identity">
				<img src="coursesimg/creator/humanNotExist4.jpg"><p>Rylee Phillips</p>
				<h6>Python</h6>
				<div class="rating"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"><img src="coursesimg/icon/star.png"></div>
			</div>
			<div class="rev-cont">
				<p id="title">Review:</p>
				<p id="content">
					This was my first complete course at coding blocks. I attended the Python course in Winter 2020 and loved it which made me join the full course. Shubham bhaiya and Ayush Bhaiya(TA) have good knowledge about the field and were very helpful in making us understand the concepts. I would certainly recommend this to anyone...
				</p>
			</div>
		</div>
	</div>
</div>

<!-- CONTACT US -->
	<div class="diffSection" id="contactus_section">
		<center><p style="font-size: 50px; padding: 100px">Contact Us</p></center>
		<div class="csec"></div>
		<div class="back-contact">
			<div class="cc">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<label>First Name <span class="imp">*</span></label><label style="margin-left: 185px">Last Name <span class="imp">*</span></label><br>
				<center>
				<input type="text" name="" style="margin-right: 10px; width: 175px" required="required"><input type="text" name="lname" style="width: 175px" required="required"><br>
				</center>
				<label>Email <span class="imp">*</span></label><br>
				<input type="email" name="mail" style="width: 100%" required="required"><br>
				<label>Message <span class="imp">*</span></label><br>
				<input type="text" name="message" style="width: 100%" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
			</div>
		</div>
	</div>


<!-- FEEDBACK -->
	<div class="title2" id="feedBACK">
		<span>Give Feedback</span>
		<div class="shortdesc2">
			<p>Please share your valuable feedback to us</p>
		</div>
	</div>

	<div class="feedbox">
		<div class="feed">
			<form action="mailto:roshank9419@gmail.com" method="post" enctype="text/plain">
				<label>Your Name</label><br>
				<input type="text" name="" class="fname" required="required"><br>
				<label>Email</label><br>
				<input type="email" name="mail" required="required"><br>
				<label>Additional Details</label><br>
				<textarea name="addtional"></textarea><br>
				<button type="submit" id="csubmit">Send Message</button>
			</form>
		</div>
	</div>

<!-- Sliding Information -->
	<!-- <marquee style="background: linear-gradient(to right, #FA4B37, #DF2771); margin-top: 50px;" direction="left" onmouseover="this.stop()" onmouseout="this.start()" scrollamount="20"><div class="marqu">“Education is the passport to the future, for tomorrow belongs to those who prepare for it today.” “Your attitude, not your aptitude, will determine your altitude.” “If you think education is expensive, try ignorance.” “The only person who is educated is the one who has learned how to learn …and change.”</div></marquee> -->

<!-- FOOTER -->
	<footer>
		<div class="footer-container">
			<div class="left-col">
				
				<div class="logo"><h1 class = "van"style="width: 300px;">Compiler Hero</h1></div>
				<div class="social-media">
					<a href="#"><img src="coursesimg/icon\fb.png"></a>
					<a href="#"><img src="coursesimg/icon\insta.png"></a>
					<a href="#"><img src="coursesimg/icon\tt.png"></a>
					<a href="#"><img src="coursesimg/icon\ytube.png"></a>
					<a href="#"><img src="coursesimg/icon\linkedin.png"></a>
				</div><br><br>
				<p class="rights-text">Copyright © 2021 Created By <strong>Vanshaj</strong>. All Rights Reserved.</p>
				<br><p><img src="coursesimg/icon/location.png">Anand College of Enginnering<br>Jaipur, Rajasthan 303012 </p><br>
				<p><img src="coursesimg/icon/phone.png"> +91 7878620980<br><img src="coursesimg/icon/mail.png">&nbsp; vanshajagarwal4567@gmail.com</p>
			</div>
			<div class="right-col">
				<h1 style="color: #fff">Our Newsletter</h1>
				<div class="border"></div><br>
				<p>Enter Your Email to get our News and updates.</p>
				<form class="newsletter-form">
					<input class="txtb" type="email" placeholder="Enter Your Email">
					<input class="btn" type="submit" value="Submit">
				</form>
			</div>
		</div>
	</footer>

</body>
</html>