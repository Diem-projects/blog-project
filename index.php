<?php require_once("header.php"); ?>

<body>
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('img/mountains.jpg')">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Diem's Blog</h1>
                        <hr class="small">
                        <span class="subheading">Human Enhancement & Disruptive Innovation</span>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    
    <?php
try
{
    // On se connecte à MySQL
    $bdd = new PDO('mysql:host=localhost;dbname=blog;charset=utf8', 'root', '');
}
catch(Exception $e)
{
    // En cas d'erreur, on affiche un message et on arrête tout
        die('Erreur : '.$e->getMessage());
}

// Si tout va bien, on peut continuer

// On récupère tout le contenu de la table jeux_video
$reponse = $bdd->query('SELECT * FROM articles');

// On affiche chaque entrée une à une
while ($donnees = $reponse->fetch())
{
?>

    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
    
                <div class="post-preview">
                    <h2 class="post-title"><?php echo $donnees['title']; ?></h2>
                    <p class="post-meta">Posted on <?php echo $donnees['date']; ?> - <?php echo $donnees['libelle1']; ?> & <?php echo $donnees['libelle2']; ?></p>
                    <p><?php echo $donnees['text']; ?></p>  
                </div>
                <hr>
    
                <div class="post-preview">
                   <h2 class="post-title"><?php echo $donnees['title']; ?></h2>
                   <p class="post-meta">Posted on <?php echo $donnees['date']; ?> - <?php echo $donnees['libelle1']; ?> & <?php echo $donnees['libelle2']; ?></p>
                   <p><?php echo $donnees['text']; ?></p>  
                </div>
                <hr>
                
                <div class="post-preview">
                   <h2 class="post-title"><?php echo $donnees['title']; ?></h2>
                   <p class="post-meta">Posted on <?php echo $donnees['date']; ?> - <?php echo $donnees['libelle1']; ?> & <?php echo $donnees['libelle2']; ?></p>
                   <p><?php echo $donnees['text']; ?></p>  
                </div>
                <hr>
                
                <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <hr>

<?php
}

$reponse->closeCursor(); // Termine le traitement de la requête

?>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/clean-blog.min.js"></script>

</body>

<?php require_once("footer.php"); ?>

</html>



