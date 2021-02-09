<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Thomas Bousquet</title>
        <meta name="description" content="Site personnel de Thomas Bousquet - Développeur Web">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="icon" type="image/x-generic" href="./favicon.ico">

        <link rel="stylesheet" href="./assets/css/style.css">
        <link rel="stylesheet" href="./assets/css/menu.css">
        <link rel="stylesheet" href="./assets/js/dist/loading-bar.css">
        
        <link href="https://fonts.googleapis.com/css?family=Open+Sans&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Black+Ops+One&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./assets/font-awesome/css/font-awesome.min.css">

    </head>
    <body>
    <?php
    spl_autoload_register('thomas_autoload');
    function thomas_autoload($class_name) {
        require './assets/php/classes/'.$class_name.'.class.php';
    }
    require './assets/php/includes/functions.inc.php';
    ?>
      <div class="animate-container">
      <aside class="sidebar">
        <nav class="nav">
          <ul class="nav-items">
            <li class="nav-title">Menu</li>
            <li><a href="#section1" class="nav-link">Compétences</a></li>
            <li><a href="#section3" class="nav-link">Portfolio</a></li>
            <li><a href="#formations" class="nav-link">Formation</a></li>
            <li><a href="#xp" class="nav-link">Expériences</a></li>
            <li><a href="#section4" class="nav-link">Contact</a></li>
          </ul>
        <div class="sidebar-separator"></div>
        </nav>
      </aside>
      <div class="hamburger">
        <div class="bar"></div>
        <div class="bar"></div>
        <div class="bar"></div>
      </div>

      <main class="main" role="main">

        <section id="cover">
          <div class="container">
            <div class="card">
              <div class="card-header flex column">
                <div class="photo-container">
                  <img src="./assets/img/profil1.jpg" alt="ma photo de profil">
                </div>
                <h1>Thomas Bousquet</h1>
              </div>
              <h2>Web développeur</h2>
              <h2> Full Stack</h2>
              <p>Je suis actuellement en recherche d'une alternance pour la formation "Concepteur développeur d'application" chez Simplon.</p>
              <a href="#section4">
                <div class="button-container">
                  <div class="button">Contactez-moi</div>
                </div>
              </a>
              <div class="card-footer flex row">
                <div>
                  <a href="https://github.com/TomBous">
                    <i class="fa fa-github" aria-hidden="true"></i> Github
                  </a>
                </div>
                <div>
                  <a href="https://www.linkedin.com/in/tombousquet">
                  <i class="fa fa-linkedin-square" aria-hidden="true"></i> Linkedin
                  </a>
                </div>
                <div><i class="fa fa-map-marker" aria-hidden="true"></i> Paris
                </div>
              </div>
            </div>
          </div>
          <a href="#cover" class="upper"><i class="fa fa-arrow-circle-o-up fa-3x" aria-hidden="true"></i></a>
        </section>

        <div id="section1-before">
          <img src="./assets/img/newsunrise2.svg" alt="">
        </div>
        <section id="section1">
          <div class="container">
            <h1>LANGAGES</h1>
            <div class="row spacebtw">
              <div class="skill">
                <h2>HTML</h2>
                <div class="pastille">
                <div id="html" class="ldBar label-center" data-stroke="data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)" data-path="M44.98 156.77l-5.292-5.29-10.584 10.583 10.584 10.583 10.583-10.583-3.969-3.97 30.427-30.426 10.583 21.166 30.428-30.427L127 138.25l33.073-31.75-5.292-3.969 13.23-3.969-1.323 13.23-5.292-3.97"></div>
                </div>
              </div>
              <div class="skill">
                <h2>CSS</h2>
                <div class="pastille">
                <div id="css" class="ldBar label-center" data-stroke="data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)" data-path="M44.98 156.77l-5.292-5.29-10.584 10.583 10.584 10.583 10.583-10.583-3.969-3.97 30.427-30.426 10.583 21.166 30.428-30.427L127 138.25l33.073-31.75-5.292-3.969 13.23-3.969-1.323 13.23-5.292-3.97"></div>
                </div>
              </div>
              <div class="skill">
                <h2>JS</h2>
                <div class="pastille">
                <div id="js" class="ldBar label-center" data-stroke="data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)" data-path="M44.98 156.77l-5.292-5.29-10.584 10.583 10.584 10.583 10.583-10.583-3.969-3.97 30.427-30.426 10.583 21.166 30.428-30.427L127 138.25l33.073-31.75-5.292-3.969 13.23-3.969-1.323 13.23-5.292-3.97"></div>
                </div>
              </div>
              <div class="skill">
                <h2>PHP</h2>
                <div class="pastille">
                <div id="php" class="ldBar label-center" data-stroke="data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)" data-path="M44.98 156.77l-5.292-5.29-10.584 10.583 10.584 10.583 10.583-10.583-3.969-3.97 30.427-30.426 10.583 21.166 30.428-30.427L127 138.25l33.073-31.75-5.292-3.969 13.23-3.969-1.323 13.23-5.292-3.97"></div>
                </div>
              </div>
            </div>
            <h1 class="mg-top-3">FRAMEWORK</h1>
            <div class="row spacebtw">
              <div class="skill">
                <h2>SYMFONY</h2>
                <div class="pastille">
                <div id="symfony" class="ldBar label-center" data-stroke="data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)" data-path="M44.98 156.77l-5.292-5.29-10.584 10.583 10.584 10.583 10.583-10.583-3.969-3.97 30.427-30.426 10.583 21.166 30.428-30.427L127 138.25l33.073-31.75-5.292-3.969 13.23-3.969-1.323 13.23-5.292-3.97"></div>
                </div>
              </div>
              <div class="skill">
                <h2>REACT</h2>
                <div class="pastille">
                <div id="react" class="ldBar label-center" data-stroke="data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)" data-path="M44.98 156.77l-5.292-5.29-10.584 10.583 10.584 10.583 10.583-10.583-3.969-3.97 30.427-30.426 10.583 21.166 30.428-30.427L127 138.25l33.073-31.75-5.292-3.969 13.23-3.969-1.323 13.23-5.292-3.97"></div>
                </div>
              </div>
              <div class="skill">
                <h2>VUE</h2>
                <div class="pastille">
                <div id="vue" class="ldBar label-center" data-stroke="data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)" data-path="M44.98 156.77l-5.292-5.29-10.584 10.583 10.584 10.583 10.583-10.583-3.969-3.97 30.427-30.426 10.583 21.166 30.428-30.427L127 138.25l33.073-31.75-5.292-3.969 13.23-3.969-1.323 13.23-5.292-3.97"></div>
                </div>
              </div>
              <div class="skill">
                <h2 class="little-h2">HANDLEBARS</h2>
                <div class="pastille">
                <div id="handlebars" class="ldBar label-center" data-stroke="data:ldbar/res,gradient(0,5,#9df,#9fd,#df9,#fd9)" data-path="M44.98 156.77l-5.292-5.29-10.584 10.583 10.584 10.583 10.583-10.583-3.969-3.97 30.427-30.426 10.583 21.166 30.428-30.427L127 138.25l33.073-31.75-5.292-3.969 13.23-3.969-1.323 13.23-5.292-3.97"></div>
                </div>
              </div>
            </div>
          </div>

        </section>
        <div id="section1-after">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508 79.375" height="auto" width="100%"><path d="M0 0l258.536 52.917L508 0z" fill="#244256"/></svg>
        </div>
        
        <section id="section2">
          <div class="container">
            <div class="row spacebtw">
              <div id="formations" class="formation">
                <h1 class="grey">Formations</h1>
                <div class="parallelogramme"><span class="date">2019-2020</span></div>
                <div>Développeur web et web mobile -  Full Stack - Simplon.co école du numérique</div>
                <div class="parallelogramme"><span class="date">2013-14</span></div>
                <div>Master 2 Innovation et Management des Technologies (IMT) -  Gestion - Paris 1 Panthéon-Sorbonne : Ecole de Management</div>
                <div class="parallelogramme"><span class="date">2012-13</span></div>
                <div>Master 1 de Management -  Gestion - Paris 1 Panthéon-Sorbonne : Ecole de Management</div>
                <div class="parallelogramme"><span class="date">2008-12</span></div>
                <div>Licence d'économie et gestion d'entreprise - parcours Gestion - Paris 1 Panthéon Sorbonne</div>
                <div class="parallelogramme"><span class="date">2008</span></div>
                <div>Obtention du baccalauréat général série scientifique - Option internationale - Lycée international de St Germain en
                  Laye - Section espagnole</div>
              </div>
              <div id="xp" class="formation">
                <h1 class="grey">Expériences</h1>
                <div class="parallelogramme"><span class="date">2020</span></div>
                <div>Stage de 2 mois chez Altimatech - Projet Coopin Cook - Développement de l'interface d'administration</div>
                <div class="parallelogramme"><span class="date">2018-19</span></div>
                <div>Création de la Start-Up SIRA - Incubateur Arts & Métiers Paris - Développement d'un couteau électrique vibrant à haute fréquence</div>
                <div class="parallelogramme"><span class="date">2017</span></div>
                <div>Assistant de personne atteinte d'Alzheimer - Gestion administrative - Déménagement à Palma - Liquidation des biens</div>
                <div class="parallelogramme"><span class="date">2014-16</span></div>
                <div>Création de Start-Up Bebe-Sitting.fr - Apprentissage de HTML et CSS - Construction de la plateforme de mise en relation entre parents et baby-sitters.</div>
                <div class="parallelogramme"><span class="date">2012-13</span></div>
                <div>Poursuite à temps partiel chez Cloud Solution SAS - Editeur de la plateforme collaborative WIMI</div>
                <div class="parallelogramme"><span class="date">2011</span></div>
                <div>Stage chez Cloud Solution SAS - Editeur de la plateforme collaborative WIMI - Recette de mise en production : création et exécution de test unitaires - Initiation aux méthodes Agiles
                </div>
                
              </div>
            </div>
          </div>
        </section>

        <div id="section3-before"><img src="./assets/img/new-bg-mountain.svg" alt=""></div>
        <section id="section3">
            <div class="container-lg">
            <h1>Un arbre qui tombe fait plus de bruit qu'une forêt qui pousse.</h1>
            <h2>Mes réalisations</h2>
            <div class="container-projet">
            <?php
            $projets = getProjets();
            foreach ($projets as $projet) {
                echo ('<div class="polaroid flex column">
                <a href="'.$projet['link'].'" target="_blank">
                <img src="'. $projet['img'] .'" alt="Photo du projet">
                </a>
                <div class="icon-box">
                <a href="'.$projet['link'].'" target="_blank">
                <i class="fa fa-external-link" aria-hidden="true"></i>
                </a>
                </div>
                <h3>'. $projet['titre'] .'</h3>
                <p>'. $projet['description'] .'</p>
                <div><span>Commanditaire : '. $projet['nom'] .'</span></div>
                </div>');
            }
              ?>
              </div>
            </div>
        </section>
        <div id="section3-after"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 508 79.375" height="auto" width="100%"><path d="M0 0l258.536 52.917L508 0z" fill="#5e81ac"/></svg></div>
        
        <section id="section4">
        <div class="container">
          <h1 class="grey">Vous avez un projet ?</h1>
          <form onsubmit="submitForm(); return false;" class="contact-form" id="register-form" autocomplete="on">
            <div class="form-block">
                <div class="input-block">
                    <input type="text" placeholder="Prénom" class="form-control">
                </div>
                <div class="input-block">
                    <input type="email" placeholder="Votre email" class="form-control">
                </div>
                <div class="input-block">
                  <input type="text" placeholder="Objet du message" class="form-control">
              </div>
                <textarea name="textarea" rows="5" cols="30" placeholder="Votre message ici"></textarea>
            </div>
            <div class="">
                  <button type="submit" class="square-button">Envoyer</button>
            </div>
          </form>
        </div>
        </section>

        </main>
        </div>

        
        <script src="./assets/js/app.js" async defer></script>
        <script src="./assets/js/menu.js" async defer></script>
        <script src="./assets/js/dist/loading-bar.js" async defer></script>
    </body>
</html>