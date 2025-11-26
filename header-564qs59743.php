<div class="header-cs"> 
    			<div class="header-top-agile">
					<div class="container"> 
						<div class="col-md-3 logo-agileinfo">
<h1>CSilver</h1>
 </div>
 							<div class="col-md-9 social-icons-agileits">

<ul> 
					<li><a href="https://www.instagram.com/sage_mastermind/"
target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>

<li><a href="https://twitter.com/sage_mastermind" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a></li> 

<li><a href="https://www.linkedin.com/in/sage-mastermind/" target="_blank"><i class="fa fa-linkedin" aria-hidden="true"></i></a>

</li>	 

</ul> </div>
	 <div class="clearfix"></div> 
					</div> 
						</div> 
							<div class="header-bottom-agile"> 
							<div class="container"> <div class="col-md-9 navigation">
								 <nav class="navbar navbar-default cl-effect-16" id="cl-effect-16"> 
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false"> 
						<span class="sr-only">Toggle navigation</span>
						 <span class="icon-bar"></span>
					 <span class="icon-bar"></span> 
					<span class="icon-bar"></span>
		 </button> 
						<div id="navbar" class="navbar-collapse navbar-right collapse hover-effect">
				 <ul class="nav navbar-nav">
								<li><a href="/index.php" data-hover="HOME">HOME</a></li>
						<li><a href="" data-hover="LINK1">LINK1</a></li> 
								<li><a href="#" data-hover="LINK2">LINK2</a></li>
								
								<li class="dropdown mega-dropdown act">
						 <a href="" class="dropdown-toggle" data-toggle="dropdown" data-hover="MORE">MORE<span class="caret"></span>
				</a> 
							<div class="dropdown-menu mega-dropdown-menu codes-menu"> <ul>	 
								<li><a href="/s/about.php">About</a></li> 
								<li><a href="/s/contact.php">Contact</a></li>

<li><a href="/s/policy.php">Privacy Policy</a></li> 

<li><a href="/s/terms.php">Terms</a></li>

<li><a href="/s/help.php">Help</a></li>
										 </ul> 
							</div> </li> 
								 </ul>	
							 </div>
						 </nav>
					 </div> 
						  <div class="col-md-3 search">
						 <div id="sb-search" class="sb-search"> 
						<form action="/search/result.php" method="get">

 <input type="search" class="sb-search-input" name="keywords" placeholder="Enter Your Search..." id="search" required="" />
<input class="sb-search-submit" type="submit" /> <span class="sb-icon-search" style="color: #fff"> </span> </form> 

			<div class="clearfix"> </div>
					 <script src="/files/classie.js"></script>
					 <script src="/files/uisearch.js"></script>
					 <script> new UISearch( document.getElementById( 'sb-search' ) ); </script> 
	</div> 
		</div> 
<div class="clearfix"></div>
 			</div>
				</div>
</div>
<script type="text/javascript">
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
    if (document.body.scrollTop > 90 || document.documentElement.scrollTop > 90) {
 document.getElementById("top-items").style.display = "block";
    } else {
 document.getElementById("top-items").style.display = "none";
    }
}
</script>
<div id="top-items">
<?php
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
echo '<a href="/account/myprofile.php"><span class="top-item"><i class="fa fa-user"></i> ' . htmlspecialchars($_SESSION["username"]) . '</span></a>
<a href="/account/messages.php"><span class="top-item"><i class="fa fa-envelope"></i> Messages</span></a>
<a href="/account/logout.php"><span class="top-item"><i class="glyphicon glyphicon-log-out"></i> Logout</span></a>';
} else {
	echo '<a href="/account/login.php"><span class="top-item"><i class="glyphicon glyphicon-log-in"></i> Login</span></a>
	<a href="/account/signup.php"><span class="top-item"><i class="fa fa-register"></i>Sign Up</span></a>';
}
?>
</div>