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
												<input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe" required>
											</div>
											<div class="form-group">
												<input type="password" name="confirm-password" id="confirm-password" tabindex="2" class="form-control" placeholder="Confirmer le Mot de Passe" required>
											</div>
											<div class="form-group">
												<div class="row justify-content-center">
													<div class="col-sm-6 col-sm-offset-3">
														<input type="submit" name="register-submit" id="register-submit" tabindex="1" class="form-control btn btn-success" value="Enregistrer">
													</div>
												</div>
											</div>
					</form>
			</div>
		</div>
	</div>
</section>

<?php include_once 'views/includes/footer.php'; ?>