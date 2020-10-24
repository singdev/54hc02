
<?php 
session_start();
    if(isset($_POST['consultation']))
    {
        $_SESSION['consult']="consult3";
        $_SESSION['tension']=$_POST['tension'];
        $_SESSION['temperature']=$_POST['temperature'];
        $_SESSION['poids']=$_POST['poids'];
        $_SESSION['symptomes']=$_POST['symptomes'];
        $_SESSION['diagnostique']=$_POST['diagnostique'];
        $_SESSION['med1']=$_POST['med1'];
        $_SESSION['med2']=$_POST['med2'];
        $_SESSION['med3']=$_POST['med3'];
        $_SESSION['examen']=$_POST['examen'];
        $_SESSION['radio']=$_POST['radio'];
        $_SESSION['date']=gmdate('d/m/Y');
            
        header('Location: ../dossiers.php');
    }
    else{
        header('Location: ../?error');
    }
    
?>