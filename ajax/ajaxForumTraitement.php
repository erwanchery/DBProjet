<?php
session_start();

try {
    $bdd = new PDO("mysql:host=localhost;dbname=dbweb", 'root', 'root');
    $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$arr_info = [];
$str_retour = '';

if (isset($_POST['action']) && $_POST['action'] == 'get_data'){
    $sql = "SELECT * FROM dbweb.inf_forum";
    try {
        $sql_req = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
        $sql_req->execute();
        while ($arr_info[] = $sql_req->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT));
        $sql_req = null;
    } catch (PDOException $e) {
        $arr_info = $e->getMessage();
    }
    array_pop($arr_info);
    echo json_encode($arr_info);
} else if (isset($_POST['data']) && isset($_POST['action']) && $_POST['action'] == 'get_message'){
    $sql = "SELECT * FROM inf_message
            LEFT JOIN correspondance_forum_mess ON correspondance_forum_mess.id_message = inf_message.id_message
            LEFT JOIN inf_user ON inf_user.id_user = inf_message.id_user
            WHERE correspondance_forum_mess.id_forum = '" . $_POST['data'] . "'";
    try {
        $sql_req = $bdd->prepare($sql, array(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL));
        $sql_req->execute();
        while ($arr_info[] = $sql_req->fetch(PDO::FETCH_ASSOC, PDO::FETCH_ORI_NEXT));
        $sql_req = null;
    } catch (PDOException $e) {
        $arr_info = $e->getMessage();
    }
    array_pop($arr_info);
    echo json_encode($arr_info); 
}

?>