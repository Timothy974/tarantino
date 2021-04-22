<?php

include __DIR__ .'/../data/cards.data.php';
?>
<main>
    <div class="container">
        <?php
        foreach ($cards as $movieNumber => $movieArray) :
        ?>
            <div class="card-container">
                <div class="card">
                    <figure class="front"><a href="fiche"><img src="./../public/img/<?= $movieArray['url_img'] ?>"></a></figure>
                    <figure class="back">
                        <h3>Réalisé en <br> <?= $movieArray['realised'] ?></h3>
                    </figure><
                </div>
            </div>
        <?php
        endforeach
        ?>
    </div>

</main>
<?php

