

<main class="main-fiche">
    <h1 class="titre-fiche"><?= $movies->getName() ?></h1>
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
                    <img src="<?= $this->generateUrl('img/'). $movies->getImage()?>" alt="">
                </div>
                <div>
                    <h3>Infos</h3>
                    <ul>
                        
                        <li>Réalisateur : <?= $movies->getRealise() ?> </li>  
                        <li>Scénario : <?= $movies->getScenario() ?> </li>
                        <li>Décor : <?= $movies->getDecor() ?> </li>
                        <li>Costume : <?= $movies->getCostume() ?> </li>
                        <li>Montage : <?= $movies->getMontage() ?> </li>
                        <li>Date de sortie : <?= $movies->getDate() ?> </li>
                        <li>Budget : <?= $movies->getBudget() ?></li>
                        
                    </ul>
                </div>
            </div>
            <div class="synopsis-fiche">
                <h3>Synopsis</h3>
                <p><?= $movies->getSynopsis() ?></p>
            </div>
            
        </div>
        <div class ="ost">
            <h3>Bande Originale</h3>
            <ul>
                <?php foreach($songs as $song): ?>
                    
                <li>  <?= $song->getTitle() ?> - <?= $song->getAuthor() ?> </li>
                <?php endforeach ?>
            </ul>
        </div>
    </section>
</main>

