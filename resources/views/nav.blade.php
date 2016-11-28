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
		$("#side-nav").show();
	} else {
		$("#side-nav").hide();
	}
});
</script>