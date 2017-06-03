<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico" />
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
	<script src="js/jquery.min.js"></script>
	<script src="Semantic-UI-CSS-master/semantic.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
	<title>FireBug</title>
</head>
<body>
	<div class="ui top fixed menu">
		<div class="item">
			<img src="/images/logo.png">
		</div>
		<a class="item" href="#dashboard">Dashboard</a>
		<a class="item" href="#controlpanel">Control penal</a>
		<a class="item" href="#provider">Provider</a>
	</div>
	
	<p></p>
	<p></p>
</br>
</br>
<div class="ui container">
	<div class="ui segments">
		<div class="ui segment " id="controlpanel">
			<h3 class="ui header">Control Panel</h3>
			<div class="ui  segment">
				<p></p>
				<div class="ui inverted divider"></div>
				<p></p>
				<h4 class="ui horizontal inverted divider"></h4>
				<p></p>
				<div class="ui horizontal segments">
					<div class="ui center aligned segment ">
						<h2 class="ui header">Relay1</h2>
						<button class="ui inverted red button" id="relay1_off"  style="display: none">OFF</button>
						<button class="ui inverted green button" id="relay1_on" style="display: none">ON</button>
						
					</div>

				</div>
			</div>
		</div>
		<div class="ui segment" id="dashboard">
			<h3 class="ui header">Dashboard</h3>
			<div class="ui  segment">
				<p></p>
				<div class="ui inverted divider"></div>
				<p></p>
				<h4 class="ui horizontal inverted divider" >
					Horizontal

					<h2 id = 'head'></h2>
					

				</h4>
				<canvas id="myChart"></canvas>
			</div>
			<script type="text/javascript" src="js/dashboard.js"></script>
		</div>
		<div class="ui segment" id="provider">
			<h3 class="ui header">Provider</h3>
			<div class="ui  segment">
				<div class="ui small image">
				<img src="13413073_1612514969062012_2347532119015175250_n.jpg">
				<p>xxx</p>
			</div>
		</div>
		<div class="ui segment" id="mycontent">Content</div>
	</div>
</div>
<script src="https://www.gstatic.com/firebasejs/4.1.1/firebase.js"></script>
<script type="text/javascript" src='js/firebase_servie.js'></script>
</body>
</html>