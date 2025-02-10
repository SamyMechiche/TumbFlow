<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="asset\CSS\style.css">
    <title>DevAura</title>
</head>
<body class="flex-column" >
    <section class="mr-2 row-limit-size" >
        <!-- Barre laterale pour le menu -->
         <ul>
            <li class="mb-4" ><a href="/DevAura"><img src="uploads\logo-DevAura.svg" alt="Logo DevAura"></a></li>
            <li class="mb-4"><!-- NOM DU USER --></li>
            <li class="mb-4"><a href="/DevAura"><i class="fa-solid fa-house"></i> Accueil</a></li>
            <li class="mb-4"><a href="./feed"><i class="fa-solid fa-compass"></i> Explorer</a></li>
            <li class="mb-4"><a href="#"><i class="fa-solid fa-user-group"></i> Communautés</a></li>
            <li class="mb-4"><a href="#"><i class="fa-solid fa-message"></i> Messages</a></li>
            <li class="mb-4"><a href="#"><i class="fa-solid fa-bolt"></i> Tendances</a></li>
            <li class="menu-separator" ></li>
            <li class="mb-4"><a href="#">Mes suivis</a></li>
            <li class="mb-4"><a href="#">Confidentialité</a></li>
            <li class="mb-4"><!-- CONNEXION / DECONNEXION --></li>
         </ul>
    </section>
    <div class="line-up" ></div>
    <section class="mt-2" >
    <?php foreach($datas as $data): ?>
    <article class="subcategory">
       <figure><?=$data->getPicture();?></figure>
       <p><?=$data->getSubcategory_name();?></p>
        <p><?=$data->getDescription(); ?></p>
    </article>
    <?php endforeach; ?>
    </section>
    <script src="asset\CSS\js\main.js"></script>
</body>
</html>