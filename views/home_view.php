<?php include_once 'views/includes/head.php';?>
<?php include_once 'views/includes/header.php';?>
<br>
<section>
    <div class="container">
        <h1>Les campagnes</h1>
        <br>
        <br>
        <p>
            <button class="btn btn-outline-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Créer une Campagne
            </button>
        </p>
        <div class="collapse" id="collapseExample">
            <div class="card card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="question">Titre Campagne</label>
                        <input type="text" class="form-control" name="title" id="title" placeholder="Créer votre campagne" required>
                    </div>
                    <button type="submit" name="create_campaign" class="btn btn-success">Créer</button>
                </form>
            </div>
        </div>
        <br>
        <br>
        <?php foreach($title as $camp): ?>
            <a href="campaign?id=<?php echo $camp['id']; ?>" type="button" class="btn btn-primary"><?=$camp['title'];?></a> 
        <?php endforeach; ?>
    </div>
</section>
<br>
<br>
<hr>
<br>
<br>
<section>
    <div class="container">
        <h2>Les Résultats</h2>
        <div class="row d-flex justify-content-center">
		    <?php foreach($score as $result): ?>
                <div class="col-md-4"> 
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col"><?= $result['title']; ?></th>  
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <th scope="row"><?= $result['id']; ?></th>
                            <td value="#"><?= $result['result']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
			<?php endforeach; ?>
        </div>
    </div>
</section>
<?php include_once 'views/includes/footer.php'; ?>