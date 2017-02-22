@extends('layouts.master')

@section('content')
	<section class="hp-container">
		<div id="hp-msg">
			<p>Evan & Faye</p>
			<p>19.05.2018</p>
			<p id="rsvp"><a href="rsvp">RSVP</a></p>
		</div>

		<div class="hp-slider-wrapper">
			<ul id="hp-slider">
			  <li>
			    <a href="#slide1">
			      <img src="{{ asset('/img/cornwall-1.jpg') }}" alt="">
			    </a>
			  </li>
			  <li>
			    <a href="#slide2">
			      <img src="{{ asset('/img/cornwall-2.jpg') }}"  alt="">
			    </a>
			  </li>
			  <li>
			    <a href="#slide3">
			      <img src="{{ asset('/img/cornwall-3.jpg') }}" alt="">
			    </a>
			  </li>
			  <li>
			    <a href="#slide4">
			      <img src="{{ asset('/img/cornwall-4.jpg') }}" alt="">
			    </a>
			  </li>
			  <li>
			    <a href="#slide5">
			      <img src="{{ asset('/img/cornwall-5.jpg') }}" alt="">
			    </a>
			  </li>
			</ul>
		</div>

	</section>

	<script>
	$(function() {
		var demo1 = $("#hp-slider").slippry({
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
@stop
