<nav class="main-nav">
	<div class="nav-container">
		<div class="nav-header">
			<a href="home-page">Evan & Faye</a>
		</div>
		<ul class="nav-options">
			<li>
				<a href="home-page">Home</a>
			</li>
			<li>
				<a href="rsvp">RSVP</a>
			</li>
			<li>
				<a href="venue">Venue</a>
			</li>
			<li>
				<a href="menu">Menu</a>
			</li>
		</ul>
		<div id="burger">
			<label class="burger-nav">
				<span class="burger-bread burger-bread-top">
					<span class="burger burger-top"></span>
				</span>
				
				<span class="burger-bread burger-bread-bottom">
					<span class="burger burger-bottom"></span>
				</span>				
			</label>
		</div>
	</div>
</nav>

<script>
$(".burger-nav").click(function() {
	$(".burger-nav").toggleClass("active");
	$(".burger-bread-top").toggleClass("active");
	$(".burger-bread-bottom").toggleClass("active");
	$(".burger-top").toggleClass("active");
	$(".burger-bottom").toggleClass("active");
	$(".nav-links").toggleClass("active");

	if ($(this).hasClass("active")) {
    	document.getElementById("page").style.marginRight = "250px";
    	document.getElementById("page").style.marginLeft = "-250px";
    	document.getElementById("side-nav").style.width = "250px";
	} else {
		document.getElementById("side-nav").style.width = "0";
    	document.getElementById("page").style.marginRight = "0";
    	document.getElementById("page").style.marginLeft = "0";
	}
});
</script>