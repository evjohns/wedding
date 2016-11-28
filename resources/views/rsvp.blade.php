@extends('layouts.master')

@section('content')

<section class="rsvp-container">
<hr>
	<div class="row>">
		<div class="col-md-8 col-md-offset-2">
		<h4>RSVP</h4>
		<p class="text-center">Please rsvp and make your food choices by filling in the form below.</p>
		
			<form class="rsvpForm form-horizontal">
				<div class="panel panel-default">
					<div class="panel-heading">Number of guests</div>
					<div class="panel-body">
						<div id="adult-guests" class="form-group">
							<label class="control-label col-md-4" for="adultSelect">Number of adults</label>
							<div class="col-md-6">
								<select id="adultSelect" class="adultSelect form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
						<div id="child-guests" class="form-group">
							<label class="control-label col-md-4" for="childSelect">Number of children</label>
							<div class="col-md-6">
								<select id="childSelect" class="childSelect form-control">
									<option>0</option>
									<option>1</option>
									<option>2</option>
									<option>3</option>
									<option>4</option>
									<option>5</option>
								</select>
							</div>
						</div>
					</div>
				</div>	

				<div class="panel panel-default guests-panel">
					<div class="panel-heading">Guests</div>
					<div class="panel-body">
						<div class="adults"></div>
						<div class="children"></div>
						<div class="col-md-8 col-md-offset-4">
							<button id="submitNamesNotAttending" class="btn btn-danger">Sorry, we can't make it</button>
							<button id="submitNames" class="btn btn-success">Yes, we can come</button>
						</div>
					</div>
				</div>

				<div class="panel panel-default food-panel">
					<div class="panel-heading">Food Choices</div>
					<div class="panel-body">
						<div class="adultFood"></div>
						<div class="childrensFood"></div>
					</div>
				</div>

				<div class="form-group">
				<button class="btn btn-success submit pull-right">Submit</button>
				</div>
			</form>
			
			<div class="panel panel-default success-panel">
				<div class="panel-body">
					<h4><img src="{{ asset('/img/green-tick.png') }}">Thanks! We look forward to seeing you at the wedding!</h4>
				</div>
			</div>
			<div class="panel panel-default success-panel-not-attending">
				<div class="panel-body">
					<h4><img src="{{ asset('/img/green-tick.png') }}">Sorry you can't make it, but thanks for letting us know.</h4>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="overlay">
	<div class="loader"></div>
</div>

<script>
$.ajaxSetup({
	headers: {
		'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
	}
});

$(".adultSelect").change(function() {
	$(".guests-panel").show();
	$(".adults").empty();
	$(".adultFood").empty();
	var count = 1;
	var adults = $(this).val();

	while (adults >= count) {
		$(".adults").append("<div class='form-group'>" +
			"<label class='control-label col-md-4'>Adult " + count + "</label>" +
			"<div class='col-md-6'>" +
			"<input class='form-control adultName' id='adult"+ count +"' type='text' placeholder='Name'>" +
			"<p class='adult"+ count +"Err error'></p>" +
			"</div>" +
			"</div>");
		
		count ++;
	}

	$('html,body').animate({scrollTop: $(".guests-panel").offset().top},'slow');
});

$(".childSelect").change(function() {
	$(".guests-panel").show();
	$(".children").empty();
	$(".childrensFood").empty();
	var count = 1;
	var children = $(this).val();

	while (children >= count) {
		$(".children").append("<div class='form-group'>" +
			"<label class='control-label col-md-4'>Child " + count + "</label>" +
			"<div class='col-md-6'>" +
			"<input class='form-control' id='child"+ count +"' type='text' placeholder='Name'>" +
			"<p class='child"+ count +"Err error'></p>" +
			"</div>" +
			"</div>");

		count ++;
	}

	$('html,body').animate({scrollTop: $(".guests-panel").offset().top},'slow');
});

$("#submitNamesNotAttending").click(function(e) {
	e.preventDefault();
	$("p.error").empty();

	$(".adults input").each(function() {
		if ($(this).val().length < 1 ) {
			$("p."+ this.id + "Err").append("Please enter a name!");
		} else {
			$.ajax({
				type: "post",
				url: "/rsvp/submitnotattending",
				data: { "type": "child", "name": $(this).val() },
				success: function()
				{
					$(".success-panel-not-attending").show();
				}
			})
		}
	})

	$(".children input").each(function() {
		if ($(this).val().length < 1 ) {
			$("p."+ this.id + "Err").append("Please enter a name!");
		} else {
			$.ajax({
				type: "post",
				url: "/rsvp/submitnotattending",
				data: { "type": "child", "name": $(this).val() },
				success: function()
				{
					$(".success-panel-not-attending").show();
				}
			})
		}
	})
});

$("#submitNames").click(function(e) {
	e.preventDefault();
	$("p.error").empty();
	
	var errors = false;
	$(".adults input").each(function() {
		if ($(this).val().length < 1 ) {
			$("p."+ this.id + "Err").append("Please enter a name!");
			errors = true;
		}
	})

	$(".children input").each(function() {
		if ($(this).val().length < 1 ) {
			$("p."+ this.id + "Err").append("Please enter a name!");
			errors = true;
		}
	})

	if (errors == true) {
		return false;
	}

	$(".food-panel").show();

	$(".adults input").each(function() {
		if ($("div#"+ $(this).val() +"-adult-food").length > 0) {
			return false;
		}

		$(".adultFood").append("<div id='"+ $(this).val() +"-adult-food'>" +
			"<div class='form-group'>" +
			"<label class='col-md-4'></label>" +
			"<h4 class='col-md-6'>"+ $(this).val() +"'s food choices</h4>" +
			"</div>" +
			"<div class='form-group'>" +
			"<label class='control-label col-md-4' for='adult-starter'>Starter</label>" +
			"<div class='col-md-6'>" +
			"<select id='"+ this.id +"-starter' class='adult-starter form-control'>");
		
		@foreach ($starters as $starter)
			var starter =  "{{ $starter->description }}";
			$("select#"+ this.id +"-starter").append("<option data-id='{{ $starter->id }}'>"+ starter +"</option>");
		@endforeach

		$(".adultFood").append("</select>" +
			"</div>" +
			"</div>");

		$(".adultFood").append("<div class='form-group'>" +
			"<label class='control-label col-md-4' for='adult-main'>Mains</label>" +
			"<div class='col-md-6'>" +
			"<select id='"+ this.id +"-main' class='adult-main form-control'>");	

		@foreach ($mains as $main)
			var main =  "{{ $main->description }}";
			$("select#"+ this.id +"-main").append("<option data-id='{{ $main->id }}'>"+ main +"</option>");
		@endforeach
		
		$(".adultFood").append("</select>" +
			"</div>" +
			"</div>");	
		
		$(".adultFood").append("<div class='form-group'>" +
			"<label class='control-label col-md-4' for='adult-dessert'>Dessert</label>" +
			"<div class='col-md-6'>" +
			"<p id='adult-dessert'>A Trio of:<br>" +
			"Seasonal Berry Crumble & Custard<br>" +
			"Vanilla Crème Brulee<br>" +
			"Chocolate Brownie<br></p>" +
			"</div>" +
			"</div>");
		
		$(".adultFood").append("<div class='form-group border-bottom'>" +
			"<label class='control-label col-md-4' for='adult-requirements'>Any dietry requirements or allergies?</label>" +
			"<div class='col-md-6'>" +
			"<textarea class='form-control' id='"+ this.id +"-requirements'></textarea>" +
			"</div>" +
			"</div>");

		$("button.submit").show();

		$('html,body').animate({scrollTop: $(".food-panel").offset().top},'slow');
	})

	$(".children input").each(function() {
		if ($("div#"+ $(this).val() +"-child-food").length > 0) {
			return false;
		}

		$(".childrensFood").append("<div id='"+ $(this).val() +"-child-food'>" +
			"<div class='form-group'>" +
			"<label class='col-md-4'></label>" +
			"<h4 class='col-md-6'>"+ $(this).val() +"'s food choices</h4>" +
			"</div>" +
			"<div class='form-group'>" +
			"<label class='control-label col-md-4' for='child-starter'>Main</label>" +
			"<div class='col-md-6'>" +
			"<select id='"+ this.id +"-main' class='child-starter form-control'>");
		
		@foreach ($childrens_mains as $main)
			var main =  "{{ $main->description }}";
			$("select#"+ this.id +"-main").append("<option data-id='{{ $main->id }}'>"+ main +"</option>");
		@endforeach

		$(".childrensFood").append("</select>" +
			"</div>" +
			"<div class='form-group'>" +
			"<label class='col-md-4'></label>" +
			"<p class='col-md-6 nb'>n.b. There will also be a selection of sides available on the day.</p>" +
			"</div>");
		
		$(".childrensFood").append("<div class='form-group'>" +
			"<label class='control-label col-md-4' for='child-dessert'>Dessert</label>" +
			"<div class='col-md-6'>" +
			"<p id='child-dessert'>Selection of Ice Creams:<br>" +
			"Vanilla<br>" +
			"Chocolate<br>" +
			"Strawberry<br></p>" +
			"</div>" +
			"</div>");
		
		$(".childrensFood").append("<div class='form-group border-bottom'>" +
			"<label class='control-label col-md-4' for='child-requirements'>Any dietry requirements or allergies?</label>" +
			"<div class='col-md-6'>" +
			"<textarea class='form-control' id='"+ this.id +"-requirements'></textarea>" +
			"</div>" +
			"</div>");

		$("button.submit").show();
	})
});

$("button.submit").click(function(e) {
	e.preventDefault();
	$('.overlay').show();
	
	$(".adults input").each(function() {
		var name = $(this).val();
		var starter = $("select#" + this.id + "-starter option:selected").data("id");
		var main = $("select#" + this.id + "-main option:selected").data("id");
		var requirements = $("textarea#" + this.id + "-requirements").val();

		$.ajax({
			type: "post",
			url: "/rsvp/submit",
			data: {"type": "adult", "name": name, "starter": starter, "main": main, "requirements": requirements},
			success: function() 
			{
				$(".success-panel").show();
			}
		})
	})

	$(".children input").each(function() {
		var name = $(this).val();
		var main = $("select#" + this.id + "-main option:selected").data("id");
		var requirements = $("textarea#" + this.id + "-requirements").val();

		$.ajax({
			type: "post",
			url: "/rsvp/submit",
			data: {"type": "child", "name": name, "main": main, "requirements": requirements},
			success: function() 
			{
				$(".success-panel").show();
			}
		})
	})
});

$(document).ajaxStart(function(){
    $(".overlay").show();
});

$(document).ajaxComplete(function(){
	$(".overlay").hide();
	$("form.rsvpForm").hide();
});
</script>

@stop