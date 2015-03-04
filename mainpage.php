<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="UTF-8">
	<title>Boxers</title>

	<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="style.css">
	
</head>

<body>

	<div class="container">

		<h1>BOXERS</h1>
		<h2>Click the yellows to get rid of them!</h2>

		<div class="grid">
			<div class="row">
				<div class="box" id="1"></div>
				<div class="box" id="2"></div>
				<div class="box" id="3"></div>
				<div class="box" id="4"></div>
				<div class="box" id="5"></div>
			</div>
			<div class="row">
				<div class="box" id="6"></div>
				<div class="box" id="7"></div>
				<div class="box" id="8"></div>
				<div class="box" id="9"></div>
				<div class="box" id="10"></div>
			</div>
			<div class="row">
				<div class="box" id="11"></div>
				<div class="box" id="12"></div>
				<div class="box" id="13"></div>
				<div class="box" id="14"></div>
				<div class="box" id="15"></div>
			</div>
			<div class="row">
				<div class="box" id="16"></div>
				<div class="box" id="17"></div>
				<div class="box" id="18"></div>
				<div class="box" id="19"></div>
				<div class="box" id="20"></div>
			</div>
			<div class="row">
				<div class="box" id="21"></div>
				<div class="box" id="22"></div>
				<div class="box" id="23"></div>
				<div class="box" id="24"></div>
				<div class="box" id="25"></div>
			</div>
		</div>

			<h2>Remaining boxers: <span class="remaining" style="color: #b88b7b"> 25 </span></h2>
			<h2><a class="resetGame" href="#">Reset Game</a></h2>
			<div class="win">
				<h1>GOOD JOB!</h1>
				<h2>You just won with your lightning fast finger movements!</h2>
			</div>
	</div>

	<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
	<script type="text/javascript" src="boxers.js"></script>
	<script type="text/javascript"> window.game.init(); </script>

</body>
</html>

<!-- ADD A TIMER -->
<!-- ADD A START BUTTON -->