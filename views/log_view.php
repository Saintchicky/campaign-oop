<?php include_once 'views/includes/head.php';?>
<br>
<br>
<?php
	if(isset($_SESSION['session_success'])):
	echo $_SESSION['session_success'];
	unset($_SESSION['session_success']);
	endif;
?>
<section>
	<div class="container">
		<div class="row d-flex justify-content-center">
			<div class="col-md-6">
				<form id="login-form" action="#" method="post" role="form" style="display: block;">
					<div class="form-group">
						<input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Utilisateur" value="">
					</div>
					<div class="form-group">
						<input type="password" name="pass" id="pass" tabindex="2" class="form-control" placeholder="Mot de passe">
					</div>
					<div class="form-group text-center">
						<input type="checkbox" tabindex="3" class="" name="remember" id="remember">
						<label for="remember"> Se souvenir de moi</label>
					</div>
					<div class="form-group">
						<div class="row justify-content-center">
							<div class="col-sm-6 col-sm-offset-3">
								<input type="submit" name="connect" id="log" tabindex="1" class="form-control btn btn-success" value="Se connecter">
							</div>
						</div>
					</div>
					<div class="form-group">
						<div class="row">
							<div class="col-lg-12">
								<div class="text-center">
									<a href="#" tabindex="5" class="forgot-password">Mot de passe oublié ?</a>
								</div>
							</div>
						</div>
					</div>
				</form>
			</div>
		</div>
	</div>
</section>
<?php include_once 'views/includes/footer.php'; ?>