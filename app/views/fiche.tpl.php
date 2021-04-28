<?php
include __DIR__ .'/../data/info.data.php';

?>

<main class="main-fiche">
    <h1 class="titre-fiche">Reservoir Dogs</h1>
    <section class="section-fiche">
        <div class="acteur-fiche">
            <h3>Acteurs Principaux</h3>
            <ul>
                <li> <img src="<?= $this->generateUrl('/img/keitel.jpg')?>" alt=""> Harvey Keitel <br> dans le rôle de <br> M. White</li>
                <li> <img src="<?= $this->generateUrl('/img/roth.jpg')?>" alt=""> Tim Roth <br> dans le rôle de <br> M. Orange</li>
                <li> <img src="<?= $this->generateUrl('/img/madsen.jpg')?>" alt=""> Michael Madsen <br> dans le rôle de <br> de M. Blonde </li>
                <li> <img src="<?= $this->generateUrl('/img/buscemi.jpg')?>" alt=""> Steve Buscemi <br> dans le rôle de <br> M. Pink</li>
            </ul>
        </div>
        <div class="resume-fiche">
            <div class="infos">
                <div>
                    <img src="<?= $this->generateUrl('/img/reservoir-dogs.jpg')?>" alt="">
                </div>
                <div>
                    <h3>Infos</h3>
                    <ul>
                        <?php foreach ($movie[1] as $id => $value): ?>
                        <li><?= $id?> : <?= $value?></li>  
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
            <div class="synopsis-fiche">
                <h3>Synopsis</h3>
                <p><?= $synopsis[1]?></p>
            </div>
        </div>
        <div class ="ost">
            <h3>Bande Originale</h3>
            <ul>
                <?php foreach($soundtrack[1] as $title => $singer): ?>
                <li><?=$title ?>  -  <?=$singer ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>
</main>

