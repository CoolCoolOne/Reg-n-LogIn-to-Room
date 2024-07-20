<?php
session_start();
if (!$_SESSION['user']) {
    header('Location: ./index.php');
}
?>

<!DOCTYPE html>
<html lang="ru">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>room_auth</title>
    <link rel="stylesheet" href="./MyRoom.css">
</head>


<body>
    <div class="avatar">
        <img src="<?= $_SESSION['user']['avatar'] ?>" alt="avatar">
        <?= $_SESSION['user']['login'] ?>
    </div>

    <div class="contain">
        <div class="room">
            <!-- $_SESSION['user'] = [
            "id" => $user['id'],
            "full_name" => $user['full_name'],
            "avatar" => $user['avatar'],
            "email" => $user['email'],
        ]; -->



            <?php
            echo 'Добро пожаловать, ' . $_SESSION['user']['full_name'];

            echo ' <img class="picGif" src="./imgs/computer.gif" alt="animeComputer"> ';
            echo '<div class="email">';
            echo 'Ваша почта: ' . $_SESSION['user']['email'];
            echo '</div>';

            ?>
            <a href="logic/logOut.php"> Выход!</a>
        </div>
    </div>



</body>

</html>