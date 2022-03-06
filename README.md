MONITEUR DE FLUX VIDEO
----------------------

Démo ici : http://soft.rf.gd/monitor/index.php

I - INTRODUCTION
Cet utilitaire permet de contrôler les flux vidéo provenant du/des providers lors d'une production.
Il affiche jusqu'à 4 flux vidéo qu'il suffit de renseigner via le menu Edition.
Le lecteur vidéo utilisé est celui fourni par le fournisseur de flux quand celui-ci le propose.

II - EDITION
La page est découpée en 4 zones identiques, servant à renseigner les 4 flux.
Dans la zone noire, est indiqué le lien actuellement lu par le lecteur vidéo.
Le champs "Service" est optionnel. Il permet de choisir un fournisseur de flux.
Le champs "URL de la vidéo" doit être renseigné avec le lien contenu dans la constante SRC de la balise iframe fournie par le fournisseur de flux.
Exemple sur un lien d'intégration "Youtube" :
<iframe width="560" height="315" src="https://www.youtube.com/embed/MsN0_WNXvh8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
La partie à copier/coller est :
https://www.youtube.com/embed/MsN0_WNXvh8

III - RECUPERATION DES LIENS
Ci-dessous, quelques exemples pour récupérer le lien chez certain fournisseurs.

YOUTUBE
[iframe width="560" height="315" src="https://www.youtube.com/embed/qLINONEDT6U" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen> [/iframe]

FACEBOOK
[iframe src="https://www.facebook.com/plugins/video.php?height=314&href=https%3A%2F%2Fwww.facebook.com%2FBENBOY26%2Fvideos%2F677457100062212%2F&show_text=false&width=560&t=0" width="560" height="314" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowfullscreen="true" allow="autoplay; clipboard-write; encrypted-media; picture-in-picture; web-share" allowFullScreen="true"> [/iframe]

VIMEO
[iframe src="https://player.vimeo.com/video/684542460?h=782c09adc7&title=0&byline=0&portrait=0" width="640" height="360" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>[/iframe]

IV - INSTALLATION
Ce script est sous license libre.
Ce script doit être installé sur un serveur Internet utilisant les technologies APACHE, PHP MYSQL et PHPMYADMIN pour administrer la base de données.
Les sources BOOTSTRAP sont fournies avec le script.

ETAPE 1
Copier le contenu du dossier dans un répertoire accessible sur votre serveur web.

ETAPE 2
Créer une base de données MYSQL ou utiliser une déjà existante et rajouter deux tables : services et stream :
CREATE TABLE services (
  id int(11) NOT NULL,
  providers text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO services (id, providers) VALUES
(1, 'Youtube'),
(2, 'Daylimotion'),
(3, 'Vimeo'),
(4, 'Amazon'),
(5, 'Twitch'),
(6, 'Facebook'),
(7, 'Infomaniak'),
(8, 'Ustream'),
(9, 'Dacast'),
(10, 'Clevercast'),
(11, 'Boxcast'),
(12, 'ESPxMedia'),
(13, 'IBM Video Streaming'),
(14, 'Meridix'),
(15, 'Ministerio TV'),
(16, 'LinkedIn'),
(17, 'Restream'),
(18, 'Scale Engine'),
(19, 'Streaming Video Provider'),
(20, 'Wowza'),
(21, 'Stream Shark');
						
CREATE TABLE stream (
  id int(11) NOT NULL,
  url text NOT NULL,
  service text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

INSERT INTO stream (id, url, service) VALUES
(1, 'https://www.youtube.com/embed/jVYG_eH5UMU', 'Youtube'),
(2, 'https://www.facebook.com/plugins/video.php?height=476&href=https%3A%2F%2Fwww.facebook.com%2FMonacoBasket%2Fvideos%2F1660405357652479%2F&show_text=false&width=476&t=0', 'Facebook'),
(3, 'https://www.dailymotion.com/embed/video/xgz4t1?autoplay=1', 'Daylimotion'),
(4, 'https://player.vimeo.com/video/683127004?h=9cd06d5487', 'Vimeo');

ALTER TABLE services
  ADD PRIMARY KEY (id);

ALTER TABLE stream
  ADD PRIMARY KEY (id);

ALTER TABLE services
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

ALTER TABLE stream
  MODIFY id int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

La table "services" peut être modifiée en fonction de choix personnel.
La table "stream" contient déjà des liens d'exemples qui peuvent êtres obsolètes le jour de la mise en place du script sur un nouveau serveur.

ETAPE 3
Modifier le fichier "connect.php" qui se trouve dans le répertoire du script.
Entrer les informations liées au serveur Internet utilisé :
$bdd = new PDO('mysql:host=localhost;port=3306;dbname=nom_de_la_base_de_donnee;charset=utf8', 'login', 'motdepasse');

HOST : doit comporter le host sur lequel est hébergé la base de donnée. Sur un serveur unique pour APACHE et MYSQL, le plus souvent on reste en localhost. Sinon il faut regarder la notice d'utilisation fournie par le fournisseur de service.
PORT : Le port par défaut est le 3306. Le modifier si les informations du serveur MYSQL sont différentes
DBNAME : doit comporter le nom de la base de données utilisée.
A la place de LOGIN et MOTDEPASSE, entrer les informations d'accès à la base de données fournies par le fournisseur de service.

ETAPE 4
Dans un navigateur, écrire l'adresse correspondante à votre serveur et le dossier contenant le script. Par exemple, https://monsite.com/moniteur/".

V - CONCLUSION
Ce script est fonctionnel avec les navigateur Google Chrome, Microsoft Edge, Firefox, Brave, Opera sur PC avec une résolution de 1920 x 1080 pixels.
Le script n'est pas compatible avec les mobiles et tablettes.
