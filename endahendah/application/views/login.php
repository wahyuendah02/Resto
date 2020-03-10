<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
  <meta name="description" content="">
  <meta name="author" content="">
  <link rel="icon" href="../../favicon.ico">

  <title>Restoran</title>

  <!-- Bootstrap core CSS -->
  <link href="dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/signin.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
  <!--[if lt IE 9]><script src="assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <script src="assets/js/ie-emulation-modes-warning.js"></script>

<head>
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.css">
	<body>
		<style type="text/css">
		 .panel-heading {
    color: #ffffff;
    background-color: #ab6464;
    border-color: #f9f4ea;
}
.panel-warning > .panel-heading {
    color: #ffffff;
    background-color: #a76262;
    border-color: #faebcc;
}
.btn-danger {
    color: #fff;
    background-color: #a76262;
    border-color: #d43f3a;
}
.alert-success {
    color: #8c844a;
    background-color: #dff0d8;
    border-color: #d6e9c6;
		</style>
		<div class="container">
			<center>
				<div class="col-md-5 col-md-offset-4">

					<div class="panel panel-warning">
						<div class="panel-heading">
							<h2>
								<Toko><span class= aria-hidden="true">
								</span> Restoran Wahyu
							</h2>
							<h3>Login System</h3>
							<p><span class="glyphicon glyphicon-road" aria-hidden="true"></span> Jl.Cepogo Kembang Jepara</p>
						</h2>
					</div>
					<div class="panel-body">
						 <div class="alert alert-success">
              <span class="glyphicon glyphicon-exclamation-sign" aria-hidden="true"></span>
              Masukkan username dengan benar!
            </div>
            <form action="" method="post">
              <div class="input-group">
                <span class="input-group-addon" id="username">Username</span>
                <input type="text" name="username" class="form-control" placeholder="Username" aria-describedby="username" required>
              </div>
              <br>
              <div class="input-group">
                <span class="input-group-addon" id="password">Password</span>
                <input type="password" name="password" class="form-control" placeholder="password" aria-describedby="password" required>
              </div>
              <br>
              <div>
                <input type="submit" name="flogin" class="btn btn-danger btn-block" value="Login">
               