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

<body style="background-color: rgb(216,236,239);">
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
                    <h6 class="d-lg-flex d-xl-flex justify-content-lg-center align-items-xl-center doctor">Dr Axelle MOUSSOUNDA</h6>
                </div>
        </div>
        </div>
    </nav>
    <div class="contact-clean">
    <div class="d-lg-flex justify-content-lg-center"><a class="btn btn-primary btn-doc" role="button" style="width: 280px;" href="dossier.php">Voir le Dossier Medical</a></div>
    <br>
        <form method="post" action="actions/actions.php" method="POST">
            <input type="hidden" id="consultation" name="consultation" class="form-control" />
            <h2 class="text-center">Nouvelle Consultation</h2>
            <div class="form-group">
                <input class="form-control" type="text" name="tension" placeholder="Tension">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="temperature" placeholder="Température">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="poids" placeholder="Poids">
            </div>
            <div class="form-group">
                <textarea class="form-control" name="symptomes" placeholder="Symptomes" rows="14"></textarea>
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="diagnostique" placeholder="Diagnostique">
            </div>
            <h6 style="color:grey;">Ordonances</h6>
            <div class="form-group">
                <input class="form-control" type="text" name="med1" placeholder="Medicament 1">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="med2" placeholder="Medicament 2">
            </div>
            <div class="form-group">
                <input class="form-control" type="text" name="med3" placeholder="Medicament 3">
            </div>
            <h6 style="color:grey;">Examens</h6>
            <div class="form-group">
                <textarea class="form-control" name="examen" rows="14"></textarea>
            </div>
            <h6 style="color:grey;">Radios</h6>
            <div class="form-group">
                <textarea class="form-control" name="radio" rows="14"></textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-save" type="submit" style="background-color: #0f9db7;color: rgb(255,255,255);">Enregistrer</button>
            </div>
        </form>
    </div>
    <script src="assets/js/jquery.min.js?h=83e266cb1712b47c265f77a8f9e18451"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js?h=63715b63ee49d5fe4844c2ecae071373"></script>
</body>

</html>