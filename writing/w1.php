<html>
<head>
	<meta charset="utf-8">
	<title>English Learning - English Learning Website </title>
	<link rel="favicon" href="assets/images/favicon.png">
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">
	
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen">
	<link rel="stylesheet" type="text/css" href="assets/css/da-slider.css" />
	<link rel="stylesheet" href="assets/css/style.css">
	
</head>
<body>
	<?php
		include "nav.php";
	?>
	<header id="head" class="secondary">
		<div class="container">
			<div class="row">
				<div class="col-sm-8">
					<h1>Lessons for writing</h1>
				</div>
			</div>
		</div>
	</header>
	<div class="container-fluid" style="margin-top:10px;margin-left:82px;margin-right:450px;">
<form method="post" action="">
	<b><h1>PUNCTUATION RULES</h1></b>
<h2>6 Basic Punctuation Rules</h2>
					<h4><li>Punctuation Must be Parallel. ...</li></h4>
					<h4><li>An Emdash is a Strong Comma. ...</li></h4>
					<h4><li>A Colon Appears at the End of a Main Clause. ...</li></h4>
					<h4><li>A Semicolon is Used for Equal Emphasis. ...</li></h4>
					<h4><li>Parentheses Show Related, Nonessential Elements. ...</li></h4>
					<h4><li>Apostrophes Show Possession or Indicate an Omission.</li></h4>
	</form>
</div>
	<?php
	if(isset($_POST['submit']))
	{
		$radval=$_POST['optradio'];
		if($radval=="a")
		{
						echo '<a href="b2.php" class="btn">Next>></a>';

			
		}
		else
		{
			echo "<div class='alert alert-danger' role='alert'>Incorrect Answer</div>";
		}
	}
?>
</div>
			<div class="col-md-2 col-md-pull-9" style="margin-top:10px;">
				<?php include "sidebar.php"; ?>
			</div>
		</div>
	</div>

	<?php
		include "footer.php";
	?>
</body>
</html>
