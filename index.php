<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="shortcut icon" href="favicon.ico" />
	<title>FireBug</title>
	<meta charset="UTF-8">
	<script src="js/jquery.min.js"></script>
	<script src="Semantic-UI-CSS-master/semantic.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.js"></script>
	
	<link rel="stylesheet" type="text/css" href="Semantic-UI-CSS-master/semantic.css">
	<style type="text/css">
		.no-js #loader { display: none;  }
		.js #loader { display: block; position: absolute; left: 100px; top: 0; }
		.se-pre-con {
			position: fixed;
			left: 0px;
			top: 0px;
			width: 100%;
			height: 100%;
			z-index: 9999;
			background: url(images/loader-64x/Preloader_2.gif) center no-repeat #fff;
		}
		.center__{
			margin: 0;
			position: absolute;
			top: 50%;
			left: 50%;
			transform: translate(-50%, -50%);
		}
	</style>

</head>
<body>
	<div class="se-pre-con">
		<img src="http://bradsknutson.com/wp-content/uploads/2013/04/page-loader.gif" class="center__">
	</div>
	<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.2/modernizr.js"></script>
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
		<div class="ui  segment " id="controlpanel">
			<h2 class="ui red header">Control Panel</h2>
			<div class="ui  segment">
				<p><h3 class="ui header">Relay Chanel</h3></p>
				<div class="ui inverted divider"></div>
				<p></p>
				<h4 class="ui horizontal inverted divider"></h4>
				<p></p>
				<div class="ui horizontal segments">
					<div class="ui center aligned segment ">
						<h2 class="ui header" id="nameRelay1" data-tooltip="Double click for edit name" data-inverted=""></h2>
						<div class="ui input">
							<input type="text" name="text" id="fieldNameRelay1" style="display: none">
						</div>
						<button class="ui inverted red button" id="relay1_off"  style="display: none">OFF</button>
						<button class="ui inverted green button" id="relay1_on" style="display: none">ON</button>
					</div>

					<div class="ui center aligned segment ">
						<h2 class="ui header"  id="nameRelay2" data-tooltip="Double click for edit name" data-inverted=""></h2>
						<div class="ui input">
							<input type="text" name="text" id="fieldNameRelay2" style="display: none">
						</div>
						<button class="ui inverted red button" id="relay2_off"  style="display: none">OFF</button>
						<button class="ui inverted green button" id="relay2_on" style="display: none">ON</button>
						
					</div>

					<div class="ui center aligned segment ">
						<h2 class="ui header"  id="nameRelay3" data-tooltip="Double click for edit name" data-inverted=""></h2>
						<div class="ui input">
							<input type="text" name="text" id="fieldNameRelay3" style="display: none">
						</div>
						<button class="ui inverted red button" id="relay3_off"  style="display: none">OFF</button>
						<button class="ui inverted green button" id="relay3_on" style="display: none">ON</button>
						
					</div>

					<div class="ui center aligned segment ">
						<h2 class="ui header"  id="nameRelay4" data-tooltip="Double click for edit name" data-inverted=""></h2>
						<div class="ui input">
							<input type="text" name="text" id="fieldNameRelay4" style="display: none">
						</div>
						<button class="ui inverted red button" id="relay4_off"  style="display: none">OFF</button>
						<button class="ui inverted green button" id="relay4_on" style="display: none">ON</button>
						
					</div>

				</div>

				<p>
					<h3 class="ui header">Automatic relay switch <i class="settings icon"></i></h3>
					<button class="ui red right labeled icon button">
						<i class="download icon"></i>
						Update to Machine
					</button>                 
				</p>
				<div class="ui inverted divider"></div>
				<p></p>
				<h4 class="ui horizontal inverted divider"></h4>
				<p></p>
				<div class="ui horizontal segments">
					<link rel="stylesheet" type="text/css" href="cssframework/bootstrap-datepicker.css">
					<link rel="stylesheet" type="text/css" href="cssframework/jquery.timepicker.css">
					<link rel="stylesheet" type="text/css" href="cssframework/site.css">
					<div class="ui center aligned segment ">
						<h2 class="ui horizontal divider header" id="nameRelay1_">
							Relay1
						</h2>
						<div class="row">
							<div class="ui checkbox">
								<input type="checkbox" name="example">
								<label>ON Time:&nbsp;&nbsp;<input type="text" name="time" id="timeformatExample1"></label>
							</div>
						</div>
						<div class="row">
							<div class="ui checkbox">
								<input type="checkbox" name="example">
								<label>OFF Time:<input type="text" name="time" id="timeformatExample2"></label>
							</div>
						</div>
					</div>

					<script type="text/javascript" src="js/jquery.timepicker.js"></script>
					<script type="text/javascript" src="js/site.js"></script>
					<script type="text/javascript" src="js/bootstrap-datepicker.js"></script>

					<script type="text/javascript">
						$('#timeformatExample1').timepicker({ 'timeFormat': 'H:i:s' });
						$('#timeformatExample2').timepicker({ 'timeFormat': 'H:i:s' });
					</script>
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