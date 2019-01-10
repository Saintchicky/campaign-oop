<?php include_once 'views/includes/head.php';?>

<section>
    <div class="container">
    <br>
        <h2>Création du Questionnaire</h2>
        <br>
        <br>
    <!-- faire la banderole success 
    <div class="alert alert-success">

    </div><br/>-->

            <form action="" method="post">
            <!-- mettre un token en input caché -->
            <div class="form-group">
                <label for="question">Question</label>
                <input type="text" class="form-control" name="question" id="question" placeholder="Créer votre question">
            

        
            </div>
            <div class="form-group">
                <label for="question">Réponse</label>
                <input type="text" class="form-control" name="answer" id="answer" placeholder="Créer vos réponses">
                <small id="answerHelp" class="form-text text-muted">Mettre des "|" entre chaque réponse</small>
            </div>
            <div class="form-group">
                <label for="question">Score</label>
                <input type="text" class="form-control" name="score" id="score" placeholder="Attribuer vos points">
                <small id="scoreHelp" class="form-text text-muted">Mettre des "|" entre chaque point</small>
            </div>
            <button type="submit" class="btn btn-primary">Envoyer</button>
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
				<h3>Le Questionnaire <a href="#" id="ajaxDatetour" type="button" class="btn btn-outline-info">Modifier</a>
				<span>     <button type="submit" class="btn btn-primary">Envoyer</button></span>
				</h3>
				<br>
					<div class="row">
						
						<?php 
						
						foreach($forms as $index => $form): ?>

						<div class="col-md-6">
							<p><?= $form['question']; ?></p>
						</div>
						<div class="col-md-6">
							<?php 
							$form_c = explode('|', $form['score']); 
							$id_c = array_count_values( $forms);
							debug($id_c);
							
							
							$form_r = explode('|', $form['answer']);
							// explode ne marche pas avec echo, il faut donc séparer les valeurs du tableau manuellement en echo
							?>
								<!-- <input type="checkbox" id="scoring" name="scoring[]" value="<?= $form_c[0]; ?>">
								<label for="<?= $form_r[0]; ?>"><?= $form_r[0]; ?></label>
								<input type="hidden" name="id_campaign" id="id_campaign" value="">
								<input type="checkbox" id="scoring" name="scoring[]" value="<?= $form_c[1]; ?>">
								<label for="<?= $form_r[1]; ?>"><?= $form_r[1]; ?></label>	-->	
							<?php foreach($form_c as $index => $for_c): ?>
							 <input type="checkbox" id="scoring" name="scoring[]" value="<?= $for_c; ?>">
							 <?php foreach ($form_r as $index => $for_r): ?>
							 <label for="<?= $for_r; ?>"><?= $for_r; ?></label>
							 <?php endforeach; ?>
							<?php endforeach; ?>

			</form>
					</div>
				<hr style="width:100%">
				
				<?php endforeach; ?>
				</div>
        </div>
    </div>
</section>

<?php include_once 'views/includes/footer.php'; ?>