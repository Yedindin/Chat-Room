<?php
	include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Room</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
  />
	<link rel="stylesheet" type="text/css" href="css/main.css?v=145">
	<script >
		function ajax(){
			var req = new XMLHttpRequest();
			req.onreadystatechange = function() {
				if(req.readyState == 4 && req.status == 200){
					document.getElementById('chat').innerHTML = req.responseText;	
				}
			}
			req.open('GET','chat.php',true);
			req.send();
		}
		setInterval(function() {ajax()}, 1000);
	</script>
</head>
<body onload="ajax();">
	<h2 align="center" style="color:white;" >  <strong>Guest Book</h2>
	<div id="main" style="width:50%;margin:auto;margin-top:30px;">
				<div class=" col-md-10" style="max-width:100%;padding:0px;margin-bottom:30%;height:500px;">
					<div class="chat-discussion">
						<div class="chat-message left">
							<div id="chat"></div>
						</div>
					</div>
				</div>

		<div style="background-color:rgb(197,202,150);;margin:0px;" class="row">
			<div style="margin-left: 15%;" class="col-md-8">
				<form method="POST" action="index.php">
					<div></div>
					</i><input type="text" style="background-color:rgb(240,236,235);" name="name" placeholder="이름을 입력하세요 :)" required="">
					<textarea name="message" style="background-color:rgb(240,236,235);" placeholder="남길 글을 입력하세요 " required=""></textarea>
					<input type="submit" style="color: white;" name="submit" value="남기기"/>
				</form>
			</div>
		</div>
		<div class="footer">
			 <p class="small" style="margin-top: 10%; color:white;"><U> Developed by : <a href="https://github.com/nikhilamin073">Nikhil Amin</a><br>
			<U> <p class="small" style="color:white;"> Modified by : <a href="https://github.com/Yedindin/Chat-Room">Yejin Kim</a>
		</div>
	</div>
	<?php
		if(isset($_POST['submit'])){
			$name = $_POST['name'];
			$message = $_POST['message'];
			$query = "INSERT INTO chat (name, message) VALUES ('$name','$message')";
			$run = $con -> query($query);

			if($run){
				?>
				<audio src='audio/notification.mp3' hidden='true' autoplay='true'/>
				<?php
			}
		}
	?>
</body>
</html>