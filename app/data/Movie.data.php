<?php

class Movie {
    public $realised;
    public $scenario;
    public $decors;
    public $costume;
    public $montage;
    public $sortie;
    public $budget;

    public function __construct($realised='', $scenario='', $decors='', $costume='', $montage='', $sortie='', $budget=''   ){
        $this->realised = $realised;
        $this->scenario = $scenario;
        $this->decors = $decors;
        $this->costume = $costume;
        $this->montage = $montage;
        $this->sortie = $sortie;
        $this->budget = $budget;
        
    }

    
}

$dataMovie = [
    1 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : David Wasco",
        "Costumes : Betsy Heimann",
        "Montage : Sally Menke",
        "Date de sortie US : 23 octobre 1992",
        "Budget : 1 200 000 USD",
    ),
    2 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : David Wasco",
        "Costumes : Betsy Heimann",
        "Montage : Sally Menke",
        "Date de sortie US : 14 octobre 1994",
        "Budget : 8 000 000 USD",
    ),
    3 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : David Wasco",
        "Costumes : Mary Claire Hannan",
        "Montage : Sally Menke",
        "Date de sortie US : 25 décembre 1997",
        "Budget : 12 000 000 USD",
    ),
    4 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : David Wasco et Yohei Taneda",
        "Costumes : Catherine Thomas et Kumiko Ogawa",
        "Montage : Sally Menke",
        "Date de sortie US : 10 octobre 2003",
        "Budget : 60 000 000 USD",
    ),
    5 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : David Wasco et Yohei Taneda",
        "Costumes : Catherine Thomas et Kumiko Ogawa",
        "Montage : Sally Menke",
        "Date de sortie US : 8 avril 2004",
        "Budget : 60 000 000 USD",
    ),
    6 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : Steve Joyner et Caylah Eddleblute",
        "Costumes : Nina Proctor",
        "Montage : Sally Menke",
        "Date de sortie US : 6 avril 2007",
        "Budget : 30 000 000 USD",
    ),
    7 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : David Wasco et Sandy Reynolds-Wasco",
        "Costumes : Anna B. Sheppard",
        "Montage : Sally Menke",
        "Date de sortie US : 19 août 2009",
        "Budget : 70 000 000 USD",
    ),
    8 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : J. Michael Riva",
        "Costumes : Sharen Davis",
        "Montage : Fred Raskin",
        "Date de sortie US : 25 décembre 2012",
        "Budget : 100 000 000 USD",
    ),
    9 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : Yohei Taneda",
        "Costumes : Courtney Hoffman",
        "Montage : Fred Raskin",
        "Date de sortie US : 31 décembre 2015",
        "Budget : 54 000 000 USD",
    ),
    10 => new Movie(
        "Réalisation : Quentin Tarantino",
        "Scénario : Quentin Tarantino",
        "Décors : Jann K. Engel et Eric Sundahl",
        "Costumes : Arianne Phillips",
        "Montage : Fred Raskin",
        "Date de sortie US : 90 000 000 ",
        "Budget : 1 200 000 USD",
    ),
];
/*
$movie = [
    1 => [
        'url_img' => "reservoir-dogs.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "David Wasco",
        'Costumes' => "Betsy Heiman",
        'Montage' => "Sally Menke",
        'Date de sortie' => "23 octobre 1992",
        'Budget' => "1 200 000 USD",
        'Synopsis' => "Six truands désignés par des noms de code entreprennent de dévaliser une importante bijouterie sous la direction du tyrannique Joe Cabot et de son fils Nice Guy Eddie. L'opération échoue malencontreusement et se solde par un bain de sang. Les malfrats se réfugient alors dans un entrepôt sordide. Mr Orange est grièvement blessé. Mr Pink, quant à lui, est d'avis qu'il existe un traître parmi eux. Mr Blonde, un psychopathe, entend bien faire parler le policier qu'il a réussi à capturer."
    ],
    2 => [
        'url_img' => "Pulp-Fiction.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "David Wasco",
        'Costumes' => "Betsy Heimann",
        'Montage' => "Sally Menke",
        'Date de sortie' => "14 octobre 1994",
        'Budget' => "8 000 000 USD",
        'Synopsis' => "L'odyssée sanglante et burlesque de petits malfrats dans la jungle de Hollywood à travers trois histoires qui s'entremêlent. Dans un restaurant, un couple de jeunes braqueurs, Pumpkin et Yolanda, discutent des risques que comporte leur activité. Deux truands, Jules Winnfield et son ami Vincent Vega, qui revient d'Amsterdam, ont pour mission de récupérer une mallette au contenu mystérieux et de la rapporter à Marsellus Wallace."
    ],
    3 => [
        'url_img' => "jackie-brown.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "David Wasco",
        'Costumes' => "Mary Claire Hannan",
        'Montage' => "Sally Menke",
        'Date de sortie' => "25 décembre 1997",
        'Budget' => "12 000 000 USD",
        'Synopsis' => "Jackie Brown, hôtesse de l'air, arrondit ses fins de mois en convoyant de l'argent liquide pour le compte d'un trafiquant d'armes, Ordell Robbie. Un jour, un agent fédéral et un policier de Los Angeles la cueillent à l'aéroport. Ils comptent sur elle pour faire tomber le trafiquant. Jackie échafaude alors un plan audacieux pour doubler tout le monde lors d'un transfert impliquant une somme de cinq cent mille dollars."
    ],
    4 => [
        'url_img' => "kill-bill-1.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "David Wasco et Yohei Taneda",
        'Costumes' => "Catherine Thomas et Kumiko Ogawa",
        'Montage' => "Sally Menke",
        'Date de sortie' => "10 octobre 2003",
        'Budget' => "60 000 000 USD",
        'Synopsis' => "Au cours d'une cérémonie de mariage en plein désert, un commando fait irruption dans la chapelle et tire sur les convives. Laissée pour morte, la Mariée enceinte retrouve ses esprits après un coma de quatre ans. Celle qui a auparavant exercé les fonctions de tueuse à gages au sein du Détachement International des Vipères Assassines n'a alors plus qu'une seule idée en tête : venger la mort de ses proches en éliminant tous les membres de l'organisation criminelle."

    ],
    5 => [
        'url_img' => "kill-bill-2.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "David Wasco et Yohei Taneda",
        'Costumes' => "Catherine Thomas et Kumiko Ogawa",
        'Montage' => "Sally Menke",
        'Date de sortie' => "8 avril 2004",
        'Budget' => "60 000 000  USD",
        'Synopsis' => "Après sa sanglante escapade japonaise, La Mariée revient aux États-Unis afin de se venger une fois pour toutes de Bill. Pourtant, la quête est loin d'être terminée et les deux derniers lieutenants de son ennemi, Budd et Elle Driver, se dressent sur son chemin. La route de la vengeance est longue pour La Mariée qui devra se souvenir des apprentissages de Paï-Meï, son maître de kung fu."
 
    ],
    6 => [
        'url_img' => "death-proof.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "Steve Joyner et Caylah Eddleblute",
        'Costumes' => "Nina Proctor",
        'Montage' => "Sally Menke",
        'Date de sortie' => " 6 avril 2007",
        'Budget' => "30 000 000  USD",
        'Synopsis' => "C'est à la tombée du jour que Jungle Julia, la DJ la plus sexy d'Austin, peut enfin se détendre avec ses meilleures copines, Shanna et Arlene. Ce trio infernal, qui vit la nuit, attire les regards dans tous les bars et dancings du Texas. L'attention dont ces trois jeunes femmes sont l'objet n'est pas forcément innocente."
 
    ],
    7 => [
        'url_img' => "inglourious-basterds.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "David Wasco et Sandy Reynolds-Wasco",
        'Costumes' => "Anna B. Sheppard",
        'Montage' => "Sally Menke",
        'Date de sortie' => "19 août 2009",
        'Budget' => "70 000 000 USD",
        'Synopsis' => "Dans la France occupée de 1940, Shosanna Dreyfus assiste à l'exécution de sa famille tombée entre les mains du colonel nazi Hans Landa. Shosanna s'échappe de justesse et s'enfuit à Paris où elle se construit une nouvelle identité en devenant exploitante d'une salle de cinéma. Quelque part ailleurs en Europe, le lieutenant Aldo Raine forme un groupe de soldats juifs américains pour mener des actions punitives particulièrement sanglantes contre les nazis."
 
    ],
    8 => [
        'url_img' => "django.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "J. Michael Riva",
        'Costumes' => "Sharen Davis",
        'Montage' => "Fred Raskin",
        'Date de sortie' => "25 décembre 2012",
        'Budget' => "100 000 000  USD",
        'Synopsis' => "Un ancien esclave s'associe avec un chasseur de primes d'origine allemande qui l'a libéré : il accepte de traquer avec lui des criminels recherchés. En échange, il l'aidera à retrouver sa femme perdue depuis longtemps et esclave elle-aussi. Un western décoiffant."
 
    ],
    9 => [
        'url_img' => "hatefull-eight.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "Yohei Taneda",
        'Costumes' => "Courtney Hoffman",
        'Montage' => "Fred Raskin",
        'Date de sortie' => "31 décembre 2015 ",
        'Budget' => "54 000 000 USD",
        'Synopsis' => "Quelques années après la Guerre de Sécession, le chasseur de primes John Ruth, dit Le Bourreau, fait route vers Red Rock, où il conduit sa prisonnière Daisy Domergue se faire pendre. Sur leur route, ils rencontrent le Major Marquis Warren, un ancien soldat lui aussi devenu chasseur de primes, et Chris Mannix, le nouveau shérif de Red Rock."
 
    ],
    10 => [
        'url_img' => "once-upon-a-time.jpg",
        'Réalisation' => "Quentin Tarantino",
        'Scénario' => "Quentin Tarantino",
        'Décors' => "Jann K. Engel et Eric Sundahl",
        'Costumes' => "Arianne Phillips",
        'Montage' => "Fred Raskin",
        'Date de sortie' => "26 juillet 2019",
        'Budget' => "90 000 000 USD",
        'Synopsis' => "En 1969, la star de télévision Rick Dalton et le cascadeur Cliff Booth, sa doublure de longue date, poursuivent leurs carrières au sein d'une industrie qu'ils ne reconnaissent plus."
 
    ],

];
*/