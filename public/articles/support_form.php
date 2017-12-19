<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MindCourager</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="../font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="../css/navigation.css" rel="stylesheet">
    <link href="../css/footer.css" rel="stylesheet">
    <link href="../css/forms.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>

<?php include("../includes/navigation_for_articles.php"); ?>


<!-- Container-->

<div class="container form_container">

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<fieldset>
				<legend id="support_post">Support this post</legend>

				<div class="description_box">
				<span id="form_description">If you want to support the given post, you have to provide additional information related to the subject in question and backe it up with your selected source(-es).</span>
				</div>

				<legend id="personal_inf">Personal information</legend>
					<form class="contact_form" method="post" action="submit.php">
						<div class="form-group">
							<label for="inputName">Name</label>
							<input class="form-control" type="text" placeholder="Name" name="name">
						</div>

						<div class="form-group">
							<label for="inputEmail">Email</label>
							<input class="form-control" type="email" placeholder="Email" name="email">
						</div>

						<div class="form-group">
							<div class="chackbox">
							<label class="checkbox_label_contact">
							<input type="checkbox" name="AddList">Add me to email blast
						    </label>
						    </div>
						</div>

				<legend id="post_inf">Post</legend>

						<div class="form-group">
							<label for="inputTitle">Post title</label>
							<input class="form-control" type="text" placeholder="Post title" name="title">
						</div>

						<div class="form-group">
							<label for="inputKeywords">Keywords</label>
							<input class="form-control" type="text" placeholder="Keywords" name="keywords">
						</div>

						<div class="form-group">
							<label for="selectReason">Do you prefer to use your name as an author or you want to stay anonymous?</label>
							<select class="form-control" name="selectReason">
								<option>Name</option>
								<option>Anonymous</option>
							</select>
						</div>
						
						<div class="form-group">
							<label  for="inputComments">Comments</label>
							<textarea class="form-control" name="inputComments"></textarea>
						</div>
							<input class="submit_button btn btn-primary pull-right" type="submit" value="submit" name="submit">
					</form>
			</fieldset>
		</div><!--End of colums-->
	</div> <!--End of row-->

</div><!-- End of Form Container -->

<script src="../css/bootstrap/js/jquery-2.1.4.min.js"></script>
<script src="../css/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
 <script src="../js/navigation.js"></script>

<?php include("../includes/footer.php"); ?>