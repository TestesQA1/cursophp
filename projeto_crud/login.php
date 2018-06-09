<?php
if($_POST) {
    include("inc/utils.php");

    $conn = getconn();
    if($conn) {
        $result = getUser($conn, $_POST['email'], $_POST['senha']);
        // var_dump($user->num_rows);
        if($result->num_rows == 1) {
            $user = mysqli_fetch_object($result);
            // setcookie("USER_LOGGED", $user->email, time() +10); com time para expirar
            setcookie("USER_LOGGED", $user->email, time() +10);
            header("Location: lista.php");
        } else {
            header("Location: index.php?r=user_not_found");
        }
    } else {
        header("Location: index.php?r=without_conn");    
    }
    // var_dump($_POST);
} else {
    header("Location: index.php?r=without_post");
}
?>