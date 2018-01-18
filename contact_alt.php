<?php include("includes/head.php"); ?>

<?php require("includes/navigation.php"); ?>

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
								<input class="form-control" type="text" name="text" id="inputName" placeholder="Name">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Email</span>
							<input class="form-control" type="email" name="name" id="inputEmail" placeholder="Email">
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Select</span>
								<select class="form-control" name="reason" id="selectReason">
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
								<textarea class="form-control" name="comments" id="inputComments"></textarea>
						</div>
					</div>
						<input class="contact_submit_button btn btn-primary" type="submit" value="order">
						
				</form>
			</fieldset>
		</div><!--End of colums-->
	</div> <!--End of row-->
</div><!--End of container-->	

<pre>
	<?php
		if (isset($_POST['order'])) {
			print_r($_POST);
		}
	?>
</pre>

<?php include("includes/footer.php"); ?>