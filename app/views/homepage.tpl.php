
<main>
    <div class="container">
        <?php
        foreach ($movies as $movie) :
        ?>
            <div class="card-container">
                <div class="card">
                    <figure class="front"><a href="<?= $router->generate('fiche', ['id' =>$movie->getId()])?>"><img src="<?= $this->generateUrl('img/').$movie->getImage() ?>"></a></figure>
                    <figure class="back">
                        <h3>Réalisé le <br> <?= $movie->getDate() ?></h3>
                    </figure><
                </div>
            </div>
        <?php
        endforeach
        ?>
    </div>

</main>
<?php

