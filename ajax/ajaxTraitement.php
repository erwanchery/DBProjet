<?php
session_start();

try {
    $bdd = new PDO("mysql:host=localhost;dbname=dbweb", 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$str_retour = '';
$arr_retour = [];

if(isset($_POST['username']) && isset($_POST['password']) && isset($_POST['action']) && $_POST['action'] == 'connexion') {
    //Partie connexion
    $sql = "SELECT password, droit FROM dbweb.inf_user WHERE pseudo = '" . htmlspecialchars($_POST['username']) . "'";
    try {
        $sql_req = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
        $sql_req->execute();
        while ($str_info[] = $sql_req->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT));
        $sql_req = null;
    } catch (PDOException $e) {
        $str_retour = $e->getMessage();
    }

    if(!password_verify(htmlspecialchars($_POST['password']), $str_info[0]['password'])){
        $str_retour = "Identifiant ou mot de passe non reconnu";
    }
    else {
        $_SESSION['connecte'] = $str_info[0]['droit']; // 1 adhérant, 2 admin, Pas de variable -> Guest
        $str_retour = 'Success';
    }
    echo $str_retour;
}
else if (isset($_POST['action']) && $_POST['action'] == 'deconnexion') {
    unset($_SESSION['connecte']);
}
else if (isset($_POST['action']) && $_POST['action'] == 'get_data') {
    $sql = 'SELECT * FROM dbweb.inf_user';
    try {
        $sql_req = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
        $sql_req->execute();
        while ($arr_retour[] = $sql_req->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT));
        $sql_req = null;
    } catch (PDOException $e) {
        print $e->getMessage();
    }

    array_pop($arr_retour);
    echo json_encode(["data" => $arr_retour]);
}
else if (isset($_POST['data']) && isset($_POST['action']) && $_POST['action'] == 'delete_row'){
    // Delete la row d'indice $_POST['data'] du dataTable
    $sql = "DELETE FROM dbweb.inf_user WHERE id_user = '" . $_POST['data'] . "'";
    try {
        $sql_req = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
        $sql_req->execute();
        $str_retour = 'Success';
    } catch (PDOException $e) {
        $str_retour = $e->getMessage();
    }
    echo $str_retour;
}
else if (isset($_POST['data']) && isset($_POST['action']) && $_POST['action'] == 'add_row'){
    // Ajoute un utilisateur dans la bbd
    $sql = "SELECT pseudo FROM dbweb.inf_user WHERE pseudo = '" . htmlspecialchars($_POST['data']['pseudo']) . "'";
    try {
        $sql_req = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
        $sql_req->execute();
        while ($arr_pseudo[] = $sql_req->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT));
        $sql_req = null;
    } catch (PDOException $e) {
        print $e->getMessage();
    }

    if(count($arr_pseudo) == 1) {
        $str_pswrd = password_hash(htmlspecialchars($_POST['data']['password']), PASSWORD_DEFAULT);

        $sql = "INSERT INTO dbweb.inf_user (pseudo,password,mail,droit) 
                VALUES ('" . htmlspecialchars($_POST['data']['pseudo']) . "','" . $str_pswrd . "','" . htmlspecialchars($_POST['data']['mail']) . "','" . 
                htmlspecialchars($_POST['data']['droit']) . "')";

        try {
            $sql_req = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
            $sql_req->execute();
            $str_retour = 'Success';
        } catch (PDOException $e) {
            $str_retour = $e->getMessage();
        }
    } else {
        $str_retour = "Pseudo déjà utilisé";
    }
    echo $str_retour;
}
else if (isset($_POST['data']) && isset($_POST['action']) && $_POST['action'] == 'edit_get_data'){
    $sql = "SELECT * FROM dbweb.inf_user WHERE id_user = '" . $_POST['data'] . "'";
    try {
        $sql_req = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
        $sql_req->execute();
        while ($arr_retour[] = $sql_req->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT));
        $sql_req = null;
    } catch (PDOException $e) {
        $str_retour = $e->getMessage();
    }
    array_pop($arr_retour);
    echo json_encode($arr_retour);
}
else if (isset($_POST['data']) && isset($_POST['action']) && $_POST['action'] == 'edit_row'){
    $sql = "UPDATE dbweb.inf_user SET droit = '" . htmlspecialchars($_POST['data']['droit']) . "' WHERE pseudo = '" . $_POST['data']['pseudo'] . "'";
    try {
        $sql_req = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
        $sql_req->execute();
        $str_retour = 'Success';
    } catch (PDOException $e) {
        $str_retour = $e->getMessage();
    }
    echo $str_retour;
}
?>