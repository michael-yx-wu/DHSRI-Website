<html>
	<head>
		<meta charset="utf-8">
		<title>DHSRI</title>
		<link rel="stylesheet" href="../css/bootstrap.css" type="text/css"/>
		<link rel="stylesheet" href="../css/dhsri.css" type="text/css"/>
	</head>

	<!-- Navigation Bar -->
	<div class="navbar navbar-fixed-top" role="banner">
        <div class="navbar-inner">
            <div class="container">
        	    <ul class="nav">
        	    	<li><a href="index">DHSRI</a></li>
	                <li><a href="about">About Us</a></li>
	                <li><a href="portfolio">Portfolio</a></li>
	                <li class="active"><a href="team">Team</a></li>
	                <li><a href="contact">Contact</a></li>
	                <li><a href="subscribe">Subscribe</a></li>
	                <li><a href="support">Support Us</a></li>
	                <li><a href="join">Join Us</a></li>
              	</ul>
            </div>
        </div>
	</div>

	<body>	    
		<div class="container body-container">
      		<div class="row">
      			<div class="span12 banner">
      				<img src="../img/banner.jpg" class="img-rounded"/>
      			</div>
      			
      			<!-- Sidebar -->
        		<div class="span3">
        			<ul class="nav nav-list sidebar" data-spy="affix" data-offset-top="233">
						<li><a href="#Undergraduate" data-toggle="collapse" data-target="#undergraduate">Management Team</a></li>
						<li><a href="#Advisors" data-toggle="collapse" data-target="#advisors">Advisory Board</a></li>
						<li><a href="#Graduate" data-toggle="collapse" data-target="#graduate">Graduate Student Advisors</a></li>
						<li><a href="#Board" data-toggle="collapse" data-target="#board">Dwight Hall Board of Trustees</a></li>
						<li><a href="#Executive" data-toggle="collapse" data-target="#executive">Dwight Hall Board of Directors</a></li>	
        			</ul>
        		</div>
        	
	        	<div class="span9">
		        	<a id="toggler" class="teamlist" href="#" data-toggle="collapse" data-target="#undergraduate">
		        		<div class="page-header left-align"><h2 id="Undergraduate">Management Team</h2></div>
		          		<div id="undergraduate" class="row collapse in">
		          			<div class="span3"><h5>Name</h5></div>
	        				<div class="span3"><h5>Position</h5></div>
	        				<div class="span3"><h5>Affiliation</h5></div>
	        				<?php
	        					$file = file('../team/management.txt');
	        					foreach ($file as $line) {
	        						echo('<div class="span3"><ul id="list1" class="list-no-style"><li>');
	        						echo($line);
	        						echo('</li></ul></div>');
	        					}
	        				?>
	        			</div>
	        		</a>

	        		<a id="toggler" class="teamlist" href="#" data-toggle="collapse" data-target="#advisors">
	        			<div class="page-header left-align"><h2 id="Advisors">Advisory Board</h2></div>
		          		<div id="advisors" class="row collapse">
		          			<div class="span3"><h5>Name</h5></div>
	        				<div class="span3"><h5>Position</h5></div>
	        				<div class="span3"><h5>Affiliation</h5></div>
	        				<?php
	        					$file = file('../team/advisors.txt');
	        					foreach ($file as $line) {
	        						echo('<div class="span3"><ul id="list1" class="list-no-style"><li>');
	        						echo($line);
	        						echo('</li></ul></div>');
	        					}
	        				?>
	        			</div>
	        		</a>

	        		<a id="toggler" class="teamlist" href="#" data-toggle="collapse" data-target="#graduate">
	        			<div class="page-header left-align"><h2 id="Graduate">Graduate Student Advisors</h2></div>
		          		<div id="graduate" class="row collapse">
		          			<div class="span3"><h5>Name</h5></div>
	        				<div class="span3"><h5>Position</h5></div>
	        				<div class="span3"><h5>Affiliation</h5></div>
	        				<?php
	        					$file = file('../team/graduate_advisors.txt');
	        					foreach ($file as $line) {
	        						echo('<div class="span3"><ul id="list1" class="list-no-style"><li>');
	        						echo($line);
	        						echo('</li></ul></div>');
	        					}
	        				?>
	        			</div>
	        		</a>

          			<a id="toggler" class="teamlist" href="#" data-toggle="collapse" data-target="#board">
	        			<div class="page-header left-align"><h2 id="Board">Dwight Hall Board of Trustees</h2></div>
		          		<div id="board" class="row collapse">
		          			<div class="span3"><h5>Name</h5></div>
	        				<div class="span3"><h5>Position</h5></div>
	        				<div class="span3"><h5>Affiliation</h5></div>
	        				<?php
	        					$file = file('../team/board.txt');
	        					foreach ($file as $line) {
	        						echo('<div class="span3"><ul id="list1" class="list-no-style"><li>');
	        						echo($line);
	        						echo('</li></ul></div>');
	        					}
	        				?>
	        			</div>
	        		</a>
							
					<a id="toggler" class="teamlist" href="#" data-toggle="collapse" data-target="#executive">
	        			<div class="page-header left-align"><h2 id="Executive">Dwight Hall Board of Directors</h2></div>
		          		<div id="executive" class="row collapse">
		          			<div class="span3"><h5>Name</h5></div>
	        				<div class="span3"><h5>Position</h5></div>
	        				<div class="span3"><h5>Affiliation</h5></div>
	        				<?php
	        					$file = file('../team/executive_committee.txt');
	        					foreach ($file as $line) {
	        						echo('<div class="span3"><ul id="list1" class="list-no-style"><li>');
	        						echo($line);
	        						echo('</li></ul></div>');
	        					}
	        				?>
	        			</div>
	        		</a>		

					<footer>
						<br>
						<small class="pagination-centered">Copyright © 2010-2013 The Dwight Hall Socially Responsible Investment Fund. All rights reserved.</small>
						<br>
						<small><small>This website and the contents herein do not constitute an offer to sell or purchase any investment securities.<br>We do not recommend investments nor do we provide tax or legal advice as it relates to investments.</small></small>
					</footer>
	          	</div>
        	</div>
    	</div>


		<script src="http://code.jquery.com/jquery-1.10.1.min.js"></script>
		<script src="../js/bootstrap.js"></script>
		<script src="../js/in-page-scroll.js" type="text/javascript"></script>
		<script src="../js/team.js" type="text/javascript"></script>
		<script src="../js/google-analytics.js" type="text/javascript"></script>
		
	</body>
</html>
