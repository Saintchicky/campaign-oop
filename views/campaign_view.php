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
                <div class="col-md-6">
                <p>Quel est votre animal préféré ?</p>
                </div>
            <div class="col-md-6">
                <input type="checkbox" id="scoring" name="scoring[]" value="8">
                <input type="hidden" name="id_campaign" id="id_campaign" value="">
                <label for="Chien">Chien</label>
                <input type="checkbox" id="scoring" name="scoring[]" value="9">
                <input type="hidden" name="id_campaign" id="id_campaign" value="">
                <label for="Chien">Chat</label> 
            </form>
            </div>
            <hr style="width:100%">
            </div>
        </div>
    </div>
</section>

<?php include_once 'views/includes/footer.php'; ?>