<?php require("../includes/head.php"); ?>

<?php require("../includes/navigation.php"); ?>


<!-- Container-->

<div class="container form_container">

	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<fieldset>
				<legend id="support_post">Contradict to this post</legend>

				<div class="description_box">
				<span id="form_description">If you want to contradict to the given post, you have to provide additional information related to the subject in question and backe it up with your selected source(-es).</span>
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
							<label  for="inputComments">Article</label>
							<textarea class="form-control" name="inputComments"></textarea>
						</div>
							<input class="submit_button btn btn-primary pull-right" type="submit" value="submit" name="submit">
					</form>
			</fieldset>
		</div><!--End of colums-->
	</div> <!--End of row-->

</div><!-- End of Form Container -->

<?php include("../includes/footer.php"); ?>