<?php
$title = "MindCourager"; 
include("includes/head.php");
?>

<?php include("includes/navigation.php"); ?>

<!-- Container-->
<div class="container">
	<div class="row">
		<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			<fieldset>
				<legend>Contact Us</legend>
				<form class="contact_form">
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
										<input id="inputAddList" type="checkbox">Add me to email blast.
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