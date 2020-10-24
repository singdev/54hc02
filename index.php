<?php 
session_start();
$_SESSION['consult'] = '';
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>e-Ifulu</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css?h=b21d47edf1702babc13c293b1fac22e5">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=ABeeZee">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abel">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Abhaya+Libre">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Actor">
    <link rel="stylesheet" href="assets/fonts/font-awesome.min.css?h=98a49735ed420ff1094cb21c75dd8271">
    <link rel="stylesheet" href="assets/css/Contact-Form-Clean.css?h=cb382140b4b96ff98b33268c744f42a0">
    <link rel="stylesheet" href="assets/css/Div-Overlay-Black.css?h=6403702008c0d4062fe9b85b57852d9c">
    <link rel="stylesheet" href="assets/css/Profile-Card.css?h=041312aaeb830f2425301a331ddc1a84">
    <link rel="stylesheet" href="assets/css/Search-Field-With-Icon.css?h=2139b9d9b644a241eea7c750d3380b0c">
    <link rel="stylesheet" href="assets/css/styles.css?h=4d5aee96190a7c5898508c3df349dea9">
</head>

<body style="background-size: cover;background-repeat: no-repeat;filter: contrast(100%);background-image: url(&quot;assets/img/Woman%20with%20vitiligo%20-%201280x854.jpg?h=f16b6a41dc789f35ecf029b1124b476b&quot;);">
    <div class="overlay black">
        <header class="menu">
            <nav class="navbar navbar-light navbar-expand-md">
                <div class="container-fluid">
                    <a class="navbar-brand logo" href="#">
                        <div><img class="logo" src="assets/img/IMG-20201020-WA0061-removebg-preview.png?h=5ad532d673f39a7ee48fe9088ead4a11" style="height: 100px;"></div>
                    </a><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
                    
                </div>
            </nav>
        </header>
        <section>
            <div class="g-logo">
                <h1 class="text-center title-logo">e-Ifulu</h1>
                <h4 class="text-center slogan">Votre dossier médical à porter de main</h4>
            </div>
            <form class="form login" style="padding-top: 32px;opacity: 0.76;">
                <div class="form-group d-flex justify-content-center"><input class="form-control" type="text" style="width: 200px;" placeholder="Numéro d'identification"></div>
                <div class="form-group d-flex justify-content-center"><input class="form-control" type="password" style="width: 200px;" placeholder="Mot de passe"></div>
                <div class="form-group d-flex justify-content-center"><a class="btn btn-dark valider" role="button" style="width: 200px;" href="profil.php">Valider</a></div>
            </form>
        </section>
    </div>
    <script src="assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
</body>

</html>