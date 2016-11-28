@extends('layouts.master')

@section('content')
<hr>
<section class="venue-container">
	<div class=" intro">
		<h3>Gwel an mor</h3>
		<p>We decided to get married in Cornwall because we both love it there and wanted to get married in our favourite place in the UK. We decided to have a look at <a href="http://www.gwelanmor.com/" target="_blank">Gwel an Mor</a> after seeing it advertised as a prize on family fortunes! We first went down there last May and have to say we were suitably impressed. The swedish style lodges are lovely and there are a few different choices ranging in price. There are also plenty of alternative places to stay nearby in Newquay, St Ives or Hayle. Everything from campsites to B&B's to posh hotels.</p>
	</div>

	<div class="accommodation">
	<p>The lodges are self catered, sleeping from 4 to 6 people. All are 5 star and very well equipped. All lodges have a full sized kitchen with all mod cons you might need and they all have an outside terrace, some even have a hot tub!</p>

	<div class="venue-slider-wrapper">
		<ul id="venue-slider">
		  <li>
		    <a href="#slide1">
		      <img src="{{ asset('/img/lowena-1.jpg') }}" alt="Lowena Lodge Sleeps 4 - 5">
		    </a>
		  </li>
		  <li>
		    <a href="#slide2">
		      <img src="{{ asset('/img/lowena-2.jpg') }}"  alt="Lowena Lodge Sleeps 4 - 5">
		    </a>
		  </li>
		  <li>
		    <a href="#slide3">
		      <img src="{{ asset('/img/lowena-3.jpg') }}" alt="Lowena Lodge Sleeps 4 - 5">
		    </a>
		  </li>
		  <li>
		    <a href="#slide4">
		      <img src="{{ asset('/img/lowena-4.jpg') }}" alt="Lowena Lodge Sleeps 4 - 5">
		    </a>
		  </li>
		  <li>
		    <a href="#slide5">
		      <img src="{{ asset('/img/residence-1.jpg') }}" alt="Residence Lodge 2 bed or 3 bed">
		    </a>
		  </li>
		  <li>
		    <a href="#slide6">
		      <img src="{{ asset('/img/residence-2.jpg') }}" alt="Residence Lodge 2 bed or 3 bed">
		    </a>
		  </li>
		  <li>
		    <a href="#slide7">
		      <img src="{{ asset('/img/residence-3.jpg') }}" alt="Residence Lodge 2 bed or 3 bed">
		    </a>
		  </li>
		  <li>
		    <a href="#slide8">
		      <img src="{{ asset('/img/residence-4.jpg') }}" alt="Residence Lodge 2 bed or 3 bed">
		    </a>
		  </li>
		  <li>
		    <a href="#slide9">
		      <img src="{{ asset('/img/residence-5.jpg') }}" alt="Residence Lodge 2 bed or 3 bed">
		    </a>
		  </li>
		  <li>
		    <a href="#slide10">
		      <img src="{{ asset('/img/tregea-1.jpg') }}" alt="Tregea Lodge Sleeps 6">
		    </a>
		  </li>
		  <li>
		    <a href="#slide11">
		      <img src="{{ asset('/img/tregea-2.jpg') }}" alt="Tregea Lodge Sleeps 6">
		    </a>
		  </li>
		  <li>
		    <a href="#slide12">
		      <img src="{{ asset('/img/tregea-3.jpg') }}" alt="Tregea Lodge Sleeps 6">
		    </a>
		  </li>
		  <li>
		    <a href="#slide13">
		      <img src="{{ asset('/img/tregea-vip-1.jpg') }}" alt="Tregea VIP Lodge Sleeps 6">
		    </a>
		  </li>
		  <li>
		    <a href="#slide14">
		      <img src="{{ asset('/img/tregea-vip-2.jpg') }}" alt="Tregea VIP Lodge Sleeps 6">
		    </a>
		  </li>
		</ul>
	</div>
	</div>

	<hr>

		<div class="activities">
			<h3>Things to do ...</h3>
			<p>Gwel has plenty to do for both adults and children. There is an indoor swimming pool alongside a fitness room and spa. There's a golf course currently being built and a fishing lake as well as tennis courts and a putting green</p>

			<p>The on site restaurant is called the Terrace, we would highly reccommend it; they will also be catering for the wedding. You can see their menu <a href="http://www.gwelanmor.com/eat" target="_blank">here.</a></p>

			<p>For the kids there's Feadon Farm, a small petting farm where you can get up close and personal to wildlife, as diverse as reindeer and badgers and also hand feed foxes. Basecamp is also next to the wedding venue which has an enormous soft play area and a "Clip'n'Climb" climbing wall where the kids can play for free during the wedding and will be supervised by staff, so parents can enjoy themselves next door while the kids are looked after.</p>

			<div class="venue-slider-wrapper">
				<ul id="activities-slider">
				  <li>
				    <a href="#slide1">
				      <img src="{{ asset('/img/activity-12.jpg') }}" alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide2">
				      <img src="{{ asset('/img/activity-13.jpg') }}"  alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide3">
				      <img src="{{ asset('/img/activity-14.jpg') }}" alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide4">
				      <img src="{{ asset('/img/activity-4.jpg') }}" alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide5">
				      <img src="{{ asset('/img/activity-5.jpg') }}" alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide6">
				      <img src="{{ asset('/img/activity-6.jpg') }}" alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide7">
				      <img src="{{ asset('/img/activity-7.jpg') }}" alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide8">
				      <img src="{{ asset('/img/activity-8.jpg') }}" alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide9">
				      <img src="{{ asset('/img/activity-9.jpg') }}" alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide10">
				      <img src="{{ asset('/img/activity-10.jpg') }}" alt="">
				    </a>
				  </li>
				<li>
				    <a href="#slide11">
				      <img src="{{ asset('/img/activity-1.jpg') }}" alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide12">
				      <img src="{{ asset('/img/activity-2.jpg') }}"  alt="">
				    </a>
				  </li>
				  <li>
				    <a href="#slide13">
				      <img src="{{ asset('/img/activity-3.jpg') }}" alt="">
				    </a>
				  </li>
				 </ul>
			</div>

			<div class="basecamp-vid">
				<iframe src="https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2FGwelanMor%2Fvideos%2F10154438457820219%2F&show_text=0&width=560" width="560" height="315" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allowFullScreen="true"></iframe>
			</div>
		</div>

		<hr>

		<div class="location">
			<h3>Location</h3>
			<p>Gwel is in Portreath on the north coast of Cornwall. Roughly half an hour away from Newquay, St Ives and Truro. Hayle is about 20 minutes away and has a beautiful long beach where surfboards can be hired as well as the normal beach related activities.</p>
			<div class="address">
				<address>
				Address:<br>
				Gwel an Mor Luxury Resort<br> 
				Feadon Lane<br>
				Portreath<br>
				Cornwall<br>
				TR16 4PE
				</address>
				<a href="https://www.google.com/maps/place/Gwel+an+Mor+Resort/@50.25547,-5.287703,13z/data=!4m5!3m4!1s0x0:0x27b0711b8ac7254b!8m2!3d50.2554704!4d-5.2877033?hl=en-US" target="_blank"><button class="btn btn-primary">Get Directions</button></a>
			</div>
			<div class="google-map">
				<iframe src="https://www.google.com/maps/embed/v1/place?q=Gwel+an+Mor+Resort
			      &zoom=13
			      &attribution_source=Google+Maps+Embed+API
			      &attribution_web_url=https://developers.google.com/maps/documentation/embed/
			      &key=AIzaSyDrtVsNVHtUIODEamp5fu7c8VWI7npbatU">
			  </iframe>
			</div>
		</div>
	</section>

	<script>
		$(function() {
			var demo1 = $("#venue-slider").slippry({
				// transition: 'fade',
				// useCSS: true,
				// speed: 1000,
				// pause: 3000,
				// auto: true,
				// preload: 'visible',
				// autoHover: false
			});

			$('.stop').click(function () {
				demo1.stopAuto();
			});

			$('.start').click(function () {
				demo1.startAuto();
			});

			$('.prev').click(function () {
				demo1.goToPrevSlide();
				return false;
			});
			$('.next').click(function () {
				demo1.goToNextSlide();
				return false;
			});
			$('.reset').click(function () {
				demo1.destroySlider();
				return false;
			});
			$('.reload').click(function () {
				demo1.reloadSlider();
				return false;
			});
			$('.init').click(function () {
				demo1 = $("#demo1").slippry();
				return false;
			});
		});

		$(function() {
			var demo1 = $("#activities-slider").slippry({
				// transition: 'fade',
				// useCSS: true,
				// speed: 1000,
				// pause: 3000,
				// auto: true,
				// preload: 'visible',
				// autoHover: false
			});

			$('.stop').click(function () {
				demo1.stopAuto();
			});

			$('.start').click(function () {
				demo1.startAuto();
			});

			$('.prev').click(function () {
				demo1.goToPrevSlide();
				return false;
			});
			$('.next').click(function () {
				demo1.goToNextSlide();
				return false;
			});
			$('.reset').click(function () {
				demo1.destroySlider();
				return false;
			});
			$('.reload').click(function () {
				demo1.reloadSlider();
				return false;
			});
			$('.init').click(function () {
				demo1 = $("#demo1").slippry();
				return false;
			});
		});
	</script>
</section>

@stop