<div class="container mt-5">
    
    <div class="row justify-content-center">
        <div class="col-6">
            <?php foreach($films as $film): ?>
                <div class="box hover">
                    <a href="film/<?= $film->id ?>"><?= ucfirst($film->titre) ?></a>
                </div>
            <?php endforeach; ?>
        </div>
    </div>

</div>

