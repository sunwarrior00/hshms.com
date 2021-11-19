<!DOCTYPE html>
<html>
<head>
	<title>Hermosa Slaughter House Management System</title>
	<link rel="icon" type="image/png" sizes="16x16" href="images/logo.png">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta meta name="viewport" content= "width=device-width, user-scalable=no" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<style type="text/css">
		body{
			background: #F9EEBD;

		}
		.cont{
			width: 35em;
			margin:auto;
			padding:1em;
			/*margin-top: 5em;*/
		}
		#logo{
			width: 20em;
			height: 20em;
		}
		label{
			color: #006400;
		}
		img{
			margin-bottom: 3em;
		}
		.form-group button{
			background: #006400!important;
			color: white!important;
		}
		form{
			width: 25em;
			margin:auto;
			text-align: left;
		}
		@media only screen and (max-width: 600px) {
			#logo{
				width: 10em;
				height: 10em;
			}
			.cont{
			width: 100%;
			}
	        form{
				width: 100%;
				margin:auto;
				text-align: left;
			}
	    }
	</style>
</head>
<body>

	<div class="modal fade" id="modalnotification" tabindex="-1" role="dialog" aria-labelledby="modalinvestmentTitle" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLongTitle">Notification</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div id="notificationcont" class="modal-body">
          </div>
        </div>
      </div>
    </div>

	<div class="container text-center">
		<div class="cont" >
			<img id="logo" src="images/logo.png">
			<form class="form text-center" action="processes/login.php" method="post">
				<div class="form-group text-left">
					<label class="">Username</label>
					<input id="username" type="text" class="form-control" name="username" autocomplete="off" required>
				</div>
				<div class="form-group text-left">
					<label>Password</label>
					<input id="password" type="password" class="form-control" name="password"  autocomplete="off" required>
				</div>
				<div class="form-group text-left">
					<button class="btn btn-light form-control">SIGN IN</button>
				</div>
				<a href="DTR.php">CLICK HERE TO OPEN QR SCANNER</a>
				<br>
				</div>
				<a href="about.php">About us</a>
				<br>
			</form>
		</div>
	</div>

</body>
</html>