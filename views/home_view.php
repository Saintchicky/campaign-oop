<?php include_once 'views/includes/head.php';?>
<br>
<section>
    <div class="container">
            <h1>Les campagnes</h1>
            <br>
            <br>

        <?php foreach($title as $index => $camp): ?>
        <a href="campaign?id=<?php echo $camp['id']; ?>" type="button" class="btn btn-primary"><?=$camp['title'];?></a> 
        <?php endforeach; ?>
        

    </div>
</section>
<br>
<br>
<br>
<br>
<section>
    <div class="container">
        <div class="row d-flex justify-content-center">
            <div class="col-md-4"> 
                <table class="table">
                <thead>
                    <tr>
                    <th scope="col">#</th>
                    <th scope="col">Campagne 1</th>  
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th scope="row">1</th>
                    <td value="#">18 points</td>
                    </tr>
                </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
 



<?php include_once 'views/includes/footer.php'; ?>