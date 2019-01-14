<?php include_once 'views/includes/head.php';?>
<section>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php foreach($campaigns as $title): ?>
                <h1><?= $title['title']?> <span><a  class="btn btn-primary" href="/campaign_oop" type="button">Retour</a></span></h1>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>
<br>
<hr>
<br>
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
				<span>     <button type="submit" name="score_create" class="btn btn-primary">Envoyer</button></span>
				</h3>
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
                            <input type="checkbox" id="scoring" name="scoring[]" value="<?= $for_c; ?>">
                            <label for="<?= $for_r; ?>"><?= $for_r; ?></label>
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