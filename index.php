<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css"/>
<script src="script.js"></script>
<meta name="viewport" content="initial-scale=1" />
</head>
<body>
<section>

<input type="radio" name="menu" id="r1" checked="checked" autofocus/>
<div class="navbar"></div>	
<input type="radio" name="menu" id="r2" />
<div class="navbar"></div>
<input type="radio" name="menu" id="r3" />
<div class="navbar"></div>
<input type="radio" name="menu" id="r4" />
<div class="navbar"></div>
<input type="radio" name="menu" id="r5" />
<div class="navbar"></div>

<input type="checkbox" id="sidebarButton" />
<div class="sidebar"></div>
<div id="sidebarPanel">
	<div class="sidePage toS1" onclick="navigate(r1)"><h1>Home</h1></div>
	<div class="sidePage toS2" onclick="navigate(r2)"><h1>Strands</h1></div>
	<div class="sidePage toS3" onclick="navigate(r3)"><h1>Facilitites</h1></div>
	<div class="sidePage toS4" onclick="navigate(r4)"><h1>Mission, Vision</h1></div>
	<div class="sidePage toS5" onclick="navigate(r5)"><h1>About</h1></div>
</div>

<div class="content">

<!--First Page-->
<div class="page" id="s1">
<img src="images/logoMain.png"></img>
<h1 id="title1">FAR</h1>
<h1 id="title2">EASTERN</h1>
<h1 id="title3">UNIVERSITY</h1>
<h3>EXPERIENCE EDUCATION TO THE FARTHEST</h3>

<label class="down_arrow" for="r2" data-icon="0xEA"></label>
<h4 id="pressF11">Tip: Press f11 for better full screen experience</h4>
<h4 id="nowClickHere">Click Here!</h4>
</div>

<!--Second Page-->
<div class="page" id="s2">
<div id="nav">
	<div id="nav_tracks">
		<h1 class="nav_track" onclick="showDescription(stemDescription)">STEM</h1>
		<h1 class="nav_track" onclick="showDescription(abmDescription)">ABM</h1>
		<h1 class="nav_track" onclick="showDescription(humssDescription)">HUMSS</h1>
		<h1 class="nav_track" onclick="showDescription(gasDescription)">GAS</h1>
	</div>
</div>

<div id="choices">
	<h1 id="stem" onclick="showDescription(stemDescription)">STEM</h1>
	<h1 id="abm" onclick="showDescription(abmDescription)">ABM</h1>
	<h1 id="humss" onclick="showDescription(humssDescription)">HUMSS</h1>
	<h1 id="gas" onclick="showDescription(gasDescription)">GAS</h1>
</div>

<div id="choiceDescription">

	<div id="stemDescription">
	<h1>Science, Technology, Engineering and Mathematics</h1>
	<p>STEM is an educational program developed to prepare primary and secondary students for college and graduate study in the fields of science, technology, engineering, and mathematics (STEM). In addition to subject-specific learning, STEM <b>aims to foster inquiring minds, logical reasoning, and collaboration skills</b>.</p>
	</div>
	
	<div id="abmDescription">
	<h1>Accountancy, Business and Management</h1>
	<p>This is a flexible course allowing you to study the <b>fundamentals of accounting and business management</b> with the option to then focus more deeply in either field. This course will prepare you for a career in management accountancy, management consultancy and business management.</p>
	</div>
	
	<div id="humssDescription">
	<h1>Humanities and Social Sciences</h1>
	<p>This strand <b>helps you build a solid liberal arts foundation, detailed exploration of the theoretical aspects of your field and hands-on professional experience</b>. This strengthens your logical reasoning and critical thinking which are needed skills once you go to college.</p>
	</div>
	
	<div id="gasDescription">
	<h1>General Academic Strand</h1>
	<p>General Academic Strand is for learners who are <b>not yet decided on what course to take in college.</b> It is possible that the learner will be given bridging courses to assess his/her preparedness for the field of study he/she will choose in the future. General Academic Strand will present the option for students to take their electives from specialized subjects of any other strands.</p>
	</div>
	
</div>

<h1 id="title1">Strand Offerings</h1>
<h3>FEU WILL LET YOU ACHIEVE YOUR FUTURE JOBS</h3>
<label class="down_arrow" for="r3" ></label>
</div>

<!--Third Page-->
<div class="page" id="s3">
<div class="bgWrap"></div>
<label class="down_arrow" for="r4" ></label>
<div id="sideDescription">
	<div id="facilitiesDescription">
	<h1>Facilitites</h1>
	
	</div>
	<div id="lab1Description">
	<h1>Biochemistry Laboratory</h1>
	<h2>Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog </h2>
	</div>
	
	
	<div id="lab2Description">
	<h1>Rooms</h1>
	<h2>Room is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog </h2>
	</div>
	
	<div id="lab3Description">
	<h1>Wifi Zone</h1>
	<h2>Wifi zone is here and it is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog </h2>
	</div>
	
	<div id="lab4Description">
	<h1>Basketball Court</h1>
	<h2>Basketball Court is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog Biochemistry Laboratory is the quick brown fox jumps over the lazy dog </h2>
	</div>
<p></p>

</div>
<div id="facilities">
	<div class="facility" id="lab1" onclick="display(lab1Description)"></div>
	<div class="facility" id="lab2" onclick="display(lab2Description)"></div>
	<div class="facility" id="lab3" onclick="display(lab3Description)"></div>
	<div class="facility" id="lab4" onclick="display(lab4Description)"></div>
</div>
</div>

<!--Fourth Page-->
<div class="page" id="s4">

<h4 id="lbldown">Down</h4>
<label class="down_arrow" for="r5" ></label>

<p id="content">
MISSION
<br/><br/>
Far Eastern University High School provides quality education that prepares its graduates for the world of work, for college, and for life.
<br/>
Its curriculum is student-centered, values-oriented, and competency-laden; its delivery methods technology-enabled, and its learning activities project-based.<br/><br/>

VISION
<br/>
FEU High School graduates flourish in college or at work and lead meaningful and rewarding lives.
<br/>
They are critical thinkers, good communicators, and digitally literate lifelong learners; morally upright persons; and socially responsible citizens.<br/><br/>

</p>
<div class="gate leftside a1 infront"></div>
<div class="gate rightside b1 infront"></div>
<div class="gate leftside a2"></div>
<div class="gate rightside b2"></div>
<div class="gate leftside a3 infront" ></div>
<div class="gate rightside b3 infront"></div>
<div class="gate leftside a4"></div>
<div class="gate rightside b4"></div>
<div class="gate leftside a5 infront" ></div>
<div class="gate rightside b5 infront"></div>
<div class="gate leftside a6"></div>
<div class="gate rightside b6"></div>
<div class="gate leftside a7 infront" ></div>
<div class="gate rightside b7 infront"></div>
<div class="gate leftside a8"></div>
<div class="gate rightside b8"></div>
<img id="gateTitle" src="images/tamaraw-logo.png"></img>
</div>

<!--Fifth Page-->
<div class="page" id="s5">
<div class="tile t1 topX topY">facebook</div>
<div class="tile t2 topX middleY">fb.me/dave.duya</div>
<div class="tile t3 topX bottomY">Created</div>
<div class="tile t4 middleX topY">HARDCODED!</div>
<div class="tile t5 middleX middleY">Webdesigner</div>
<div class="tile t6 middleX bottomY">x Software Developer</div>
<div class="tile t7 bottomX topY">0915 315 9667</div>
<div class="tile t8 bottomX middleY">Contact</div>
<div class="tile t9 bottomX bottomY">dave.duya@gmail.com</div>
<div id="transition"></div>
<h1>About</h1>
</div>

</div>

</section>
</body>
</html>