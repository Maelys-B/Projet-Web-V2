<?php 
session_start();

?>

<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Clarté Ornée</title>
<link rel="stylesheet" href="assets/index.css">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@100;400;700&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Rubik+Beastly&display=swap" rel="stylesheet">
</head>
<body>

<?php
// 1) Déterminer la page demandée, ou 'home' par défaut
$page = isset($_GET['page']) ? $_GET['page'] : 'home';

// 2) Construire le chemin du fichier
$file = 'views/pages/' . $page . '.php';

// 3) Afficher le hero uniquement sur la home
if ($page === 'home') {
?>
    <div class="hero">
        <div class="hero-bg"></div>
        <div class="hero-content hoverable">
            <h1 style="padding: 20px">Clarté Ornée</h1>
            <a href="index.php?page=home-lamp" class="btn">Nos lampes</a>
        </div>
    </div>
<?php
}
?>

<?php include('views/partials/_navbar.php'); ?>

<main class="container">
    <?php
    // 4) Inclure la page si le fichier existe
    if (file_exists($file)) {
        include $file;
    } else {
        echo "<h2 style='text-align:center; margin:50px;'>Page introuvable 😕</h2>";
    }
    ?>
</main>

<?php include('views/partials/_footer.php'); ?>

<div class="cursor">
    <div class="cursor__ball cursor__ball--big">
        <svg height="30" width="30">
            <circle cx="15" cy="15" r="12" stroke-width="0"></circle>
        </svg>
    </div>
    <div class="cursor__ball cursor__ball--small">
        <svg height="10" width="10">
            <circle cx="5" cy="5" r="4" stroke-width="0"></circle>
        </svg>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js"></script>
<script src="js/index.js"></script>

</body>
</html>
