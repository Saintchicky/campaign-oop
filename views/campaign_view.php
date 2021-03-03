<?php include_once 'views/includes/head.php';?>
<?php include_once 'views/includes/header.php';?>
<br>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php foreach($campaigns as $title): ?>
                	<h1><?= $title['title']?> <span><a  class="btn btn-primary" href="/campaign-oop/home?id=<?= $id_user ?>" type="button">Retour</a></span></h1>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<section>
    <div class="container">
		<br>
		<h2>Création du Questionnaire</h2> 
		<br>
		<div class='alert alert-success' style="display:none;">La question vient d'être crée</div>
		<?php
			if(isset($_SESSION['create_question'])):
			echo $_SESSION['create_question'];
			unset($_SESSION['create_question']);
			endif;
		?>
		<br>
        <br>
		<br>
        <form method="post">
            <!-- mettre un token en input caché -->
            <div class="form-group">
                <label for="question">Question</label>
				<input type="text" class="form-control" name="question" id="question" placeholder="Créer votre question" required>
				<input type="hidden" name="id_user" value="<?= $id_user ?>">
            </div>
            <div class="form-group">
                <label for="question">Réponse</label>
                <input type="text" class="form-control" name="answer" id="answer" placeholder="Créer vos réponses" required>
                <small id="answerHelp" class="form-text text-muted">Mettre des "|" entre chaque réponse</small>
            </div>
            <div class="form-group">
                <label for="question">Score</label>
                <input type="text" class="form-control" name="score" id="score" placeholder="Attribuer vos points" required>
                <small id="scoreHelp" class="form-text text-muted">Mettre des "|" entre chaque point</small>
            </div>
            <button type="submit" name="create" class="btn btn-primary">Envoyer</button>
        </form>
    </div>
</section>
<br>
<br>
<br>
<br>
<section>
    <div class="container">
        <div id="content">
            <form action="#" method="post">
				<!-- mettre un token en input caché -->
				<h3>Le Questionnaire <a href="update?id=<?php echo $id_campaign; ?>" id="ajaxDatetour" type="button" class="btn btn-outline-info">Modifier</a>
				<span> <button type="submit" name="score_create" class="btn btn-primary">Envoyer</button></span>
				</h3>
				<br>
				<div class='alert alert-success' style="display:none;">La question vient d'être crée</div>
				<?php
					if(isset($_SESSION['update_question'])):
					echo $_SESSION['update_question'];
					unset($_SESSION['update_question']); // vide le cache cookies à chaque rafraichissement
					endif;
					if(isset($_SESSION['delete_question'])):
					echo $_SESSION['delete_question'];
					unset($_SESSION['delete_question']);
					endif;
				?>
				<br>
				<br>
				<br>
				<div class="row">
					<?php foreach($forms as $index => $form): ?>
						<div class="col-md-6">
							<p><?= $form['question']; ?></p>
						</div>
						<div class="col-md-6">
							<?php 
							$form_c = explode('|', $form['score']); 								   
							$form_r = explode('|', $form['answer']);  		
							?>
							<?php foreach($form_c as $key => $for_c): 
								$for_r = $form_r[$key]; //déclarer après pour looper un deuxième tableau afin d'éviter les répétitions ?>   
								<input type="checkbox" id="scoring" data-check="scoring[<?= $form['id'] ?>]" name="scoring[]" value="<?= $for_c; ?>">
								<!-- mettre un attribut data-check pour que jquery repère la différence entre chaque, c'est avec l'ID de la table question_anwers -->
								<label for="<?= $for_r; ?>"><?= $for_r; ?></label>
							<?php endforeach; ?>
						</div>
						<input type="hidden" name="id_user" value="<?= $id_user ?>">
						<hr style="width:100%">	
					<?php endforeach; ?>
				</div>
			</form>
        </div>
    </div>
</section>
<?php include_once 'views/includes/footer.php'; ?>