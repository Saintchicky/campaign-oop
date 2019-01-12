<h2>Le Questionnaire<a href="campaign?id=<?= $id_campaign?>" type="button" class="btn btn-outline-info">Retour</a></h2>

<br>
<div class="row">
	<?php foreach($forms as $form): ?>
         <form id="frm" action="#" method="POST" class="form-inline">
		 <input type="hidden" value="<?= $form['id']?>">
          <div class="input-group">
            <label for="question">Question</label>
            <input type="text" class="form-control" name="question" id="question_d" value="<?= $form['question']; ?>" data-id="<?= $form['id'] ?>" size="25">
          </div>
          <div class="input-group">
            <label for="question">Réponse</label>
            <input type="text" class="form-control" name="answer" id="answer_d" value="<?= $form['answer']; ?>" data-id="<?= $form['id'] ?>">
          </div>
          <div class="input-group">
            <label for="question">Score</label>
            <input type="text" class="form-control" name="score" id="score_d" value="<?= $form['score']; ?>" data-id="<?= $form['id'] ?>">
          </div>
          <button type="submit" class="btn btn-primary btn-sm" data-id="<?=$form['id'] ?>">Sauvegarder</button>
          <span> <a  class="btn btn-danger btn-sm" href="" type="button">Supprimer</a></span>
        </form>
	<?php endforeach; ?>
</div>