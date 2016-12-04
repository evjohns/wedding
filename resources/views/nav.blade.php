<nav class="main-nav">
	<div class="nav-container">
		<div class="nav-header">
			<a href="/">Evan & Faye</a>
		</div>
		<ul class="nav-options">
			<li>
				<a href="/">Home</a>
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
		$("#page").animate({"margin-right": "250px", "margin-left": "-250px"}, 500);
		$("nav.main-nav").animate({"left": "-250px"}, 500);
		$("#side-nav").animate({"width": "250px"}, 500);
	} else {
		$("#page").animate({"margin-right": "0px", "margin-left": "0px"}, 500);
		$("nav.main-nav").animate({"left": "0px"}, 500);
		$("#side-nav").animate({"width": "0"}, 500);
	}
});
</script>