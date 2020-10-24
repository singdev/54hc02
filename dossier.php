<?php 
session_start();
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

<body style="background-color: #d8ecef;">
    <nav class="navbar navbar-light navbar-expand-md">
        <div class="container-fluid">
            <a class="navbar-brand logo" href="#">
                <div><img class="logo" src="assets/img/IMG-20201020-WA0061-removebg-preview.png?h=5ad532d673f39a7ee48fe9088ead4a11" style="height: 100px;"></div>
            </a>
            <div class="search-container"><input type="text" class="search-input" name="search-bar" placeholder="Search..."><button class="btn btn-light search-btn" type="button"> <i class="fa fa-search"></i></button></div><button class="navbar-toggler" data-toggle="collapse"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div
                class="row flex-grow-0 align-items-xl-center doc">
                <div class="col avatar" style="margin: 0;margin-left: 23px;margin-top: 0;"><img class="img-fluid d-lg-flex" style="width: 30px;" src="assets/img/default.png?h=dd1652f2823098c13534c4b15a0ef354"></div>
                <div class="col-xl-auto name-doctor">
                    <h6 class="d-lg-flex d-xl-flex justify-content-lg-center align-items-xl-center doctor">Sonia NIENIANOU</h6>
                </div>
        </div>
        </div>
    </nav>
    <section>
        <div>
            <h2 class="text-center">Historique des Consultations</h2>
            <div class="d-lg-flex justify-content-lg-center"><a class="btn btn-primary btn-doc" role="button" style="width: 280px;" href="consultation.php">Retourner</a></div>
        </div>
        <?php 
            if(isset($_SESSION['consult']) && $_SESSION['consult'] != ''){
                    
                echo '
                <div>
                    <div class="card d-lg-flex justify-content-lg-center">
                        <div class="d-lg-flex card">
                            <h6 class="titre-hist"><i class="fa fa-folder-open"></i>&nbsp; Consultation du '.$_SESSION['date'].'</h6>
                            <p class="p-hist">
                                <b>Symptomes:</b> '.$_SESSION['symptomes'].'<br>
                                <b>Diagnostique:</b> '.$_SESSION['diagnostique'].'<br><br>
                                <a class="detail" href="fiche.php?consult2" style="color:green">Détail</a>
                            </p>
                        </div>
                    </div>
                </div>
                ';
                    
            }
        ?>
        <div>
            <div class="card d-lg-flex justify-content-lg-center">
                <div class="d-lg-flex card">
                    <h6 class="titre-hist"><i class="fa fa-folder-open"></i>&nbsp; Consultation du 22/10/2020</h6>
                    <p class="p-hist">
                        <b>Symptomes:</b> Fievre, vomissements, nausées<br>
                        <b>Diagnostique:</b> Diabete<br><br>
                        <a class="detail" href="fiche.php?consult2" style="color:green">Détail</a>
                    </p>
                </div>
            </div>
        </div>
        <div>
            <div class="card d-lg-flex justify-content-lg-center">
                <div class="d-lg-flex card">
                    <h6 class="titre-hist"><i class="fa fa-folder-open"></i>&nbsp; Consultation du 19/10/2020</h6>
                    <p class="p-hist">
                        <b>Symptomes:</b> Mal de tete, fievre, vomissements<br>
                        <b>Diagnostique:</b> Paludisme<br><br>
                        <a class="detail" href="fiche.php?consult1" style="color:green">Détail</a>
                    </p>
                </div>
            </div>
        </div>
    </section>
    <script src="assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
</body>

</html>