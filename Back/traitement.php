<?php
    session_start();
    include_once('fonction.php');

    if (isset($_POST['connexion']) && !empty($_POST['login']) && !empty($_POST['passwd'])) {
        $_SESSION ['login'] = $_POST['login'];
        $_SESSION ['passwd'] = $_POST['passwd'];
        
        $login = $_SESSION ['login'];
        $pass = $_SESSION ['passwd'];
        
        include("../connexion.php");
        $cursor = $collectionUser->find();
        foreach($cursor as $result){
            $loginDb = $result['login'];
            $pass = $result['password'];
        }
        
        if ($login == $loginDb && $pass == "admintest") {
            header("location:administration.php");
        }else{
            header("location:login.php");
        }
    }

    switch ($_GET['action'] ) {
        case 'deconnexion' :
            session_destroy();
            header("location:login.php");
        break;
        case 'ajout' :
            if (isset($_POST['add'])) {
                $title = $_POST['title'];
                $categorie = $_POST['categorie']; 
                $message = $_POST['message'];
                if (isset($_file['name'])) {
                    $image = $_FILE['name'];
                    $transfert = move_upload_file($image, "/www/let's_start_a_blog/Back/media/images");
                    if ($transfert) {
                        echo "<script> alert('Transfert Réussi'); </script>";
                    }else{
                        echo "<script> alert('Echec du Transfert'); </script>";
                    }    
                }else{
                    $transfert="";
                }
                include("../connexion.php");
                $now =date('d/m/Y | H:i');
                $billet = array("titre" => "$title", "categorie" => "$categorie","message" => "$message", "date" => "$now" ,"picture" => "$transfert");
                setBillet($billet,$collectionBillet);
                $texte =utf8_decode("Le billet a bien été ajouté !");
                echo "<script> alert('$texte'); document.location.href='http://localhost/let\'s_start_a_blog/Back/ajout.php'; </script>";
            }
        break;
        case 'modification' :
        
        break;
        case 'suppression' :
            $titre= $_GET['titre'];
            include("../connexion.php");
            $collectionBillet -> remove(array("titre"=>$titre));
            header("location:http://localhost/let's_start_a_blog/Back/modification.php");
        break;
    }

?>