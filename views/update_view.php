<h2>Le Questionnaire<a href="campaign?id=<?= $id_campaign?>" type="button" class="btn btn-outline-info">Retour</a></h2>
<br>
<?php foreach($forms as $form): ?>
	<div class="row">
		<div class="col-md-12">
			<form id="frm" data-id="<?= $form['id']?>" method="POST" class="form-inline">
			 <input type="hidden" name="id"  id="id_d"  value="<?= $form['id']?>" data-id="<?= $form['id']?>">
			 <input type="hidden" data-id="<?= $form['id']?>" name="id_user" value="<?= $id_user ?>">
				<input type="hidden" name="id_c"  id="id_c"  value="<?= $form['id_campaign']?>">
				<div class="form-group">
					<label for="question">Question</label>
					<input type="text" class="form-control" name="question" id="question_d" value="<?= $form['question']; ?>" data-id="<?= $form['id'] ?>" size="25" required>
				</div>
				<div class="form-group">
					<label for="question">Réponse</label>
					<input type="text" class="form-control" name="answer" id="answer_d" value="<?= $form['answer']; ?>" data-id="<?= $form['id'] ?>" required>
				</div>
				<div class="form-group">
					<label for="question">Score</label>
					<input type="text" class="form-control" name="score" id="score_d" value="<?= $form['score']; ?>" data-id="<?= $form['id'] ?>" required>
				</div>
				<button type="submit" name="up" id="up-data" class="btn btn-primary btn-sm" data-id="<?=$form['id'] ?>">Sauvegarder</button>
				<span><a class="btn btn-danger btn-sm" href="delete?id=<?= $form['id'] ?>" type="button">Supprimer</a></span>
				<br>
			</form>
		</div>	
	</div>
<br>
<?php endforeach; ?>