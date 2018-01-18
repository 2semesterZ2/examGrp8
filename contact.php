<?php include("includes/head.php"); ?>

<?php require("includes/navigation.php"); ?>

<?php
$errors = [];
$missing = [];
if (isset($_POST['submit'])) {
	$expected = ['name', 'email', 'comments'];
	$required = ['name', 'email', 'comments'];
	$to = 'Linas Mackonis <linas.mackonis@gmail.com>';
	$subject = 'Feedback from online form.';
	$headers = [];
	$headers[] = 'From: webmaster@mackonis.dk';
	$headers[] = 'Cc: linas.mackonis@gmail.com';
	$headers[] = 'Content-type: text/plain, charset=utf-8';
	$authorized = '-fwebmaster@mackonis.dk';
	require 'process_mail.php';
	if ($mailSent) {
		header('Location: thanks.php');
		exit;
	}
}
?>

<!-- Container-->
<div class="container contactpage_container">
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">

			<fieldset>
				<legend>Contact Us</legend>
				<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
				<p class="warning">Sorry, your mail couldn't be sent.</p>
				<?php elseif ($errors || $missing) : ?>
				<p class="warning">Please fix the items indicated.</p>
				<?php endif; ?>
				<form class="contact_form" action="" method="post">

					<div class="form-group">
						<div class="input-group">
						    <span class="input-group-addon">Name
						    <?php if ($missing && in_array('name', $missing)) : ?>
						    <span class="warning">Please enter your name.</span>
						    <?php endif; ?>
						    </span>
						       <input class="form-control" type="text" name="name" id="inputName" placeholder="Name"
							   <?php if ($errors || $missing) {
							   	echo 'value="' . htmlentities($name) .'"';
							   } ?>
						       >
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
						        <span class="input-group-addon">Email
								<?php if ($missing && in_array('email', $missing)) : ?>
						    	<span class="warning">Please enter your email.</span>
						    	<?php elseif (isset($errors['email'])) : ?>
						    		<span class="warning">Invalid email address.</span>
						    	<?php endif; ?>
						        </span>
						        <input class="form-control" type="email" name="email" id="inputEmail" placeholder="Email"
								<?php if ($errors || $missing) {
							   	echo 'value="' . htmlentities($email) .'"';
							   } ?>
						        >
						</div>
					</div>

					<div class="form-group">
						<div class="input-group">
							<span class="input-group-addon">Select</span>
								<select class="form-control" name="reason" id="selectReason">
							        <option value="articles">Articles</option>
									<option value="images">Images</option>
									<option value="other">Other</option>
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
							<span class="input-group-addon">Comments
							<?php if ($missing && in_array('comments', $missing)) : ?>
						    <span class="warning">You forgot to add any comments.</span>
						    <?php endif; ?>
							</span>
								<textarea class="form-control" name="comments" id="inputComments"><?php 
								if ($errors || $missing) {
									echo htmlentities($comments);
								}
								?></textarea>
						</div>
					</div>	    

					<input class="contact_submit_button btn btn-primary" type="submit" name="submit" id="submit" value="submit">    
				</form>
			</fieldset>
		</div><!--End of colums-->
	</div> <!--End of row-->
</div><!--End of container-->


<?php include("includes/footer.php"); ?>