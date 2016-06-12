<!DOCTYPE html>
<html>
<head>
	<title>Weather Scraper</title>

	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>

	<div class="container">

		<div class="row">
			
			<div class="col-md-6 col-md-offset-3 center">
				
				<h1 class="center white">Weather Predictor</h1>
				<p class="lead center white">Enter your city below to get a forecast of weather.</p>

				<form>

					<div class="form-group">
					
						<input type="text" class="form-control" name="city" id="city" placeholder="Eg. London, Paris, Mumbai..."/>

					</div>

					<button id="findWeather" class="btn btn-success btn-lg">Find My Weather</button>

				</form>

				<div id="success" class="alert alert-success">SUCCESS!</div>
				<div id="fail" class="alert alert-danger">Could not find data for that city :( <br>Please try again.</div>

			</div>

		</div>
		
	</div>


<script type="text/javascript" src="jquery.min.js"></script>

<script type="text/javascript">
	

$("#findWeather").click(function() {

	event.preventDefault();

	if ($("#city").val() != "") {

		$.get("scraper.php?city="+$("#city").val(), function(data) {
			
			if(data != "") {
				$("#fail").hide();
				$("#success").html(data).fadeIn();
			}
			else { 
				$("#success").hide();
				$("#fail").fadeIn();
			}
		
		});

	} else {

		$("#success").hide();
		$("#fail").html("Please enter a City.").fadeIn();
	}

})

</script>


</body>
</html>