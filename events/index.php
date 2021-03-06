<?php
ini_set('display_errors','off');
include '../connect.php';
if(isset($_COOKIE["SID"])){
	$id = $db->escape_string($_COOKIE["SID"]);
	$event_query = "SELECT * FROM `registration` WHERE id = ".$id;
	$event_list = $db->query($event_query);
	$event = $event_list->fetch_assoc();
}
?>
<!DOCTYPE html>	
<html>

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="initial-scale=0.5" />

	<title>Sensors'17</title>
	<meta name="description" content="Instrumentation and Contol Engineering department, NITT symposium website." />
	<meta name="keywords"  content="sensors,symposium,NITT,ICE,instrumentation,control" />
	<meta name="Resource-type" content="Document" />
	
    <link rel = "shortcut icon" href = "../tab_image.ico"/>
	<link type="text/css" rel="stylesheet" href="../normalise.css" />
	<link type="text/css" rel="stylesheet" href="../common.css" />
	<link type="text/css" rel="stylesheet" href="Event-style.css" />

	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	
	<link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5&appId=1063823873635962";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div id="bg">
<div id="header">
	<div id="page">EVENTS</div>
	<a href="../"><div id="logo"></div></a>
	<div id="link-container">
	<a href="../">Home</a>
	<a href="../about">About</a>
	<a href="../workshops">Workshops</a>
	<a href="../events">Events</a>
	<a href="../team">Team</a>
	<a href="../contact">Contact</a>
	</div>
</div>

<div class="tab-container">
	<button id="codequest-" class="tab active" onclick="change(this);">Codequest</button>
	<button id="expo-" class="tab" onclick="change(this);">Paper Exposition</button>
	<button id="quiz-" class="tab" onclick="change(this);">The Sensors General Quiz</button>
	<button id="tars-" class="tab" onclick="change(this);">Find the TARS – Line Follower Event</button>
	<button id="tbyt-" class="tab" onclick="change(this);">Trial by Tronix</button>
	<button id="gif-" class="tab" onclick="change(this);">GIF Challenge</button>
</div>

<div class="desc-container">
	<div id="codequest-d" class="show">
		<h2>CODEQUEST</h2>
		<p>if (You’re a coder)<br />goto Sensors;<br />else<br />Printf("Well, there’s no better place to start learning!");<br />Sensors:<br />Printf(“ Participate in Codequest\n Run your fingers through the keyboard\n Compile your brains out and watch the magic unfold onscreen”);</p>
		<p><a href="./codequest.pdf" style="color: #add8e6">Click here</a>&nbsp; for detailed description and FAQs.</p>
		<p><b>EVENT SCHEDULE&nbsp;:&nbsp;</b>12 March 2017<br />First round will begin at 09:30 am
		<br />Final Round will begin at 11:30 am.</p>
		<p><b>EVENT MANAGERS &nbsp;:</b><br />Ankit ( 82202 93471 ) <br /> Muralidharan ( 80983 88128 )</p><br />
		<div class="dont-show" id="codequest_r">You've registered for Codequest.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($event['codequest']==1)
			echo 'You\'ve registered for Codequest';
			else
			echo '<button id="codequest" onclick="event_register(this);">Register for Codequest</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
	</div>
	
	<div id="expo-d" class="dont-show">
		<h2>PAPER EXPOSITION</h2>
		<p><b>Small minds discuss people, Average minds discuss events, Great minds discuss ideas<br />~ Eleanor Roosevelt</b></p>
		<p>Sensors serves as an amazing platform to bring out your interests, talents and depth of knowledge in your preferred domains. We invite you to present your ideas to inquisitive minds from the engineering world, in this technical extravaganza.</p>
		<p><a href="./paper_exposition.pdf" style="color: #add8e6">Click here</a>&nbsp; for detailed description and FAQs.</p>
		<p><b>EVENT SCHEDULE &nbsp;:&nbsp;</b>11 March 2017 - 01:30 pm to 04:30 pm</p>
		<p><b>EVENT MANAGERS &nbsp;:</b><br />Apuroop ( 82202 85481 )<br />Vaneesha ( 99522 14684 )</p><br />
		<div class="dont-show" id="expo_r">You've registered for Paper Exposition.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($event['expo']==1)
			echo 'You\'ve registered for Paper presentation.';
			else
			echo '<button id="expo" onclick="event_register(this);">Register for Paper Exposition</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
	</div>
	
	<div id="quiz-d" class="dont-show">
		<h2>THE SENSORS GENERAL QUIZ</h2>
		<p>It's at this time that the tidbits of trivia you accumulated over time come in handy. Participate in this general themed quiz, work out questions and rack your head until the answer finally strikes you!</p>
		<p><b>EVENT RULES:</b><br />
		- Teams of 3, from colleges only. No restrictions on number of teams.<br />
		- Written prelims followed by finals.<br />
		- It is a general quiz, not specific to instrumentation and control.<br />
		- 6-8 teams qualify for finals.</p>
		<p><b>EVENT SCHEDULE&nbsp;:&nbsp;</b>11 March 2017<br />Prelims - 10:30 am to 12:00 pm<br />Finals - 01:30 pm to 04:00 pm</p>
		<p><b>EVENT MANAGER&nbsp; :</b><br />Surya ( 96889 71832 )</p><br />
		<div class="dont-show" id="quiz_r">You've registered for The Sensors General Quiz.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($event['quiz']==1)
			echo 'You\'ve registered for Paper presentation.';
			else
			echo '<button id="quiz" onclick="event_register(this);">Register for The Sensors General Quiz</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
	</div>
	
	<div id="tars-d" class="dont-show">
		<h2>FIND THE TARS – LINE FOLLOWER EVENT</h2>
		<p>A new face has been added to the solar system's family portrait : Scientists have discovered a new dwarf planet looping around the sun in the region beyond Pluto. TARS is a car-sized robotic rover exploring on this planet to collect information. It has to reach the base station within the stipulated time but it hasn’t returned yet.</p>
		<p>Build an autonomous line follower robot which would negotiate through checkpoints, sharp turns and determine the correct path to find TARS.</p>
		<p><b>EVENT SCHEDULE &nbsp;: &nbsp;</b>11 March 2017 - 09:30 am to 5 pm</p>
		<p><a href="./TARS_FAQ.pdf" style="color: #add8e6">Click here</a>&nbsp; for detailed description and FAQs.</p>
		<p><b>EVENT MANAGERS &nbsp; : </b><br />Lokesh ( 89037 81031 )<br />Sathwik ( 82202 99470 )</p><br />
		<div class="dont-show" id="tars_r">You've registered for Find the TARS.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($event['tars']==1)
			echo 'You\'ve registered for Find the TARS.';
			else
			echo '<button id="tars" onclick="event_register(this);">Register for Find the TARS</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
	</div>
	
	<div id="tbyt-d" class="dont-show">
		<h2>TRIAL BY TRONIX</h2>
		<p>For those who have been longing for an opportunity to flaunt their circuit design skills – the ultimate challenge to test your electronics knowledge is here. The event consists of two rounds: with a preliminary written round and a final hardware round. The written round will comprise of questions on basic analog, digital electronics and circuit design tasks. Around 8-10 teams will be shortlisted based on their performance to participate in the final round which involves the practical implementation of circuits for problem statements given on the spot.</p>
		<p><a href="./Trial_By_Tronix_Description.pdf" style="color: #add8e6">Click here</a>&nbsp; for detailed description of the event.</p>
		<p><a href="./trail_by_tronics.pdf" style="color: #add8e6">Click here</a>&nbsp; for the Rules.</p>
		<p><a href="./trailbytronix_FAQ.pdf" style="color: #add8e6">Click here</a>&nbsp; for FAQs.</p>
		<p><b>EVENT SCHEDULE &nbsp;:&nbsp;</b>12 March 2017<br /> Prelims - 11 am to 12:30 pm<br />Finals - 01:30 pm to 04:30 pm</p>
		<p><b>EVENT MANAGERS &nbsp;:</b><br /> Krishna ( 87542 18578 )<br />Tejaswi ( 9487949352 )</p><br />
		<div class="dont-show" id="tbyt_r">You've registered for Sensor Design.</div>
		<?php
			if(isset($_COOKIE['SID'])){
			if($event['tbyt']==1)
			echo 'You\'ve registered for Trial by Tronix.';
			else
			echo '<button id="tbyt" onclick="event_register(this);">Register for Trial by Tronix</button>';
			}
			else{
			echo '<i>Kindly login to register.</i>';
			}
		?>
	</div>
	
	<div id="gif-d" class="dont-show">
		<h2>GIF CHALLENGE</h2>
		<p>We know that you love to see GIFs on Facebook, Twitter and every other social platform. GIFs are one of the most trending modes of visuals now. But have you ever tried making one? Here is your opportunity to create a GIF. Not just create one, but also win prizes worth Rs.4,000!</p>
	 	<p>Sharpen your Brains and let your Creativity, Comic sense and Craziness flow. Create your own GIFs and post them on your FB Timeline or on your friend’s timeline ( :P ). Simply use the hashtag “#GIFSensors17” in your description to submit your GIF.</p>
		<p>Play it. Loop it.</p>
		<p><b>P.S.</b> : The GIFs created cannot directly be uploaded onto Facebook. Please find the section “Directions to post GIF on Facebook” to know the procedure.</p>
		<p><b>Deadline for submissions</b> :  March 11th , 2017 before 11:59pm.</p>
		<p><b>Prizes Worth</b> : Rs.4,000. </p>
	    <p>Contact : Apuroop ( 82202 85481 )</p>
		<p><a href="./gif.pdf" style="color: #add8e6">Click here</a>&nbsp; for detailed description of the event.</p>
		<!--<div class="dont-show" id="gif_r">You've registered for Sensor Design.</div>-->
	</div>

</div>

<div id="marquee-container"><marquee onmouseover="this.stop();" onmouseout="this.start();">Event dates for Trial by Tronix and Sensors General Quiz have been changed.&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;Certificates will be issued to anyone that reaches the final round of any event.</marquee></div>

<div class="fb-like" style="position:absolute;top:94.5%;right:4%;" data-href="https://www.facebook.com/sensorsNITTrichy/" data-layout="button" data-action="like" data-show-faces="true" data-share="true"></div>

<div id="form-container">
<?php
if(isset($_COOKIE['SID']))
echo 'Logged in as SID '.$_COOKIE['SID'].'. <button id="logout"> Logout</button>';
else
echo '<button id="login">Login</button> / <a target="_blank" href="../register"> Register</a>';
?>
<a target="_blank" href="http://www.uniqtechnologies.co.in/"><img id="uniq_login" src="../uniq/uniq.jpg" /></a>
</div>

<div id="login-container" class="hide">
<form id="login-form">
<div class="label"><b>Email ID</b></div>
<input type="text" name="username" id="username" />
<div class="label"><b>Password</b></div>
<input type="password" name="pass" id="pass" />
<button name="signin" id="signin">Sign In</button>
<label id="error" style="color:red;display:none;padding:5px;">Invalid username or password</label>
<label id="success" style="color:green;display:none;padding:5px;">Login successful</label>
<br />
<div class="label">New user? Click here to <a href="../register">register</a></div>
<div id="return">Return to previous page</div>
</form>
</div>

<div id="uniq-container">
<div id="uniq-link">
<hr>
<a href="http://www.inplanttraining.org/">Inplant training</a><br /><br />
<a href="http://www.internshipinchennai.com/">Internship</a><br /><br />
<a href="http://www.ieeefinalyearprojects.org/">IEEE projects</a><br /><br />
<a href="http://www.androidtraininginchennai.com/">Android training</a><br /><br />
<hr>
<div class="fb-like" data-href="https://www.facebook.com/uniqtechnologies/" data-layout="button" data-action="like" data-show-faces="true" data-share="false"></div>
</div>
<div>UNIQ Technologies</div>
</div>

</body>

<script>
function event_register(item){
$.post( "event-register.php", { event: $(item).attr("id") }, function(){
$("#"+$(item).attr("id")+"_r").removeClass('dont-show');
$("#"+$(item).attr("id")+"_r").addClass('show');
$("#"+$(item).attr("id")).css('display','none');} );
}

$("#logout").click(function(){
    	$.post("../clearcookie.php","",function(data){location.reload();});

});

$("#login").click(function(){
	$("#login-container").removeClass("hide");
});
$("#return").click(function(){
	$("#login-container").addClass("hide");
});

$("#login-form").submit(function(){return false;});

$("#signin").click(function(){
var formData = $("#login-form input").serialize();

$.post("../verify.php",
	formData,
	function(data){
	if(data == 1){
		$("#error").css("display","none");
		$("#success").css("display","inline-block");
		location.reload();
	}
	else if(data == 0)
		$("#error").css("display","inline-block");
	});
});

function change(item){
var id= $(item).attr("id");

$("#codequest-").removeClass("active");
$("#expo-").removeClass("active");
$("#quiz-").removeClass("active");
$("#tars-").removeClass("active");
$("#tbyt-").removeClass("active");
$("#gif-").removeClass("active");

$("#"+id).addClass("active");

$("#codequest-d").removeClass("show");
$("#expo-d").removeClass("show");
$("#quiz-d").removeClass("show");
$("#tars-d").removeClass("show");
$("#tbyt-d").removeClass("show");
$("#gif-d").removeClass("show");

$("#codequest-d").addClass("dont-show");
$("#expo-d").addClass("dont-show");
$("#quiz-d").addClass("dont-show");
$("#tars-d").addClass("dont-show");
$("#tbyt-d").addClass("dont-show");
$("#gif-d").addClass("dont-show");

$("#"+id+"d").removeClass("dont-show");
$("#"+id+"d").addClass("show");
}
</script>

</html>
