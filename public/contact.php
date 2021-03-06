<?php
$title = "MindCourager"; 
include("includes/head.php");
?>

<?php include("includes/navigation.php"); ?>

<?php

require_once('../private/initialize.php');

$test = $_GET['test'] ?? '';

if($test == '404') {
  error_404();
} elseif($test == '500') {
  error_500();
} elseif($test == 'redirect') {
  redirect_to(url_for('contact.php'));
}
?>

<!-- Container-->
<div class="container contactpage_container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">



			<fieldset>
				<legend>Contact Us</legend>
				<form class="contact_form"  action="" method="post"">
					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Name</span>
								<input class="form-control" type="text" id="inputName" placeholder="Name">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Email</span>
							<input class="form-control" type="email" id="inputEmail" placeholder="Email">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Select</span>
								<select class="form-control" id="selectReason">
									<option>Articles</option>
									<option>Images</option>
									<option>Other</option>
								</select>
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<div class="chackbox pull-right">
									<label class="checkbox_label_contact">
										<input id="inputAddList" type="hidden" name="visible" value="0">
										<input id="inputAddList" type="checkbox" name="visible" value="1">Add me to email blast.

								    </label>
						    </div>
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Comments</span>
								<textarea class="form-control" id="inputComments"></textarea>
						</div>
					</div>
						<input class="contact_submit_button btn btn-primary" type="submit" value="submit">
				</form>
			</fieldset>
		</div><!--End of colums-->
	</div> <!--End of row-->
</div><!--End of container-->	

<?php include("includes/footer.php"); ?>