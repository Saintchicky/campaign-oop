<?php include_once 'views/includes/head.php';?>
<br>
<br>
<section>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
					<form id="register-form" action="#" method="post" role="form">
											<div class="form-group">
												<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Pseudo" required>
											</div>
											<div class="form-group">
												<input type="email" name="email" id="email" tabindex="1" class="form-control" placeholder="Courriel" required>
											</div>
											<div class="form-group">
												<input type="password" name="pass_first" id="pass_first" tabindex="2" class="form-control" placeholder="Mot de passe" required>
											</div>
											<div class="form-group">
												<input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="Confirmer le Mot de Passe" required>
													<?php
														if(isset($_SESSION['not_confrim'])):
														echo $_SESSION['not_confrim'];
														unset($_SESSION['not_confrim']);
														endif;
													?>
											</div>
											<div class="form-group">
												<div class="row justify-content-center">
													<div class="col-sm-6 col-sm-offset-3">
														<input type="submit" name="register" id="register" tabindex="1" class="form-control btn btn-success" value="S'inscrire">
													</div>
												</div>
											</div>
					</form>
			</div>
		</div>
	</div>
</section>

<?php include_once 'views/includes/footer.php'; ?>