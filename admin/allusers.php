<?php

session_start();

if ($_SESSION['role'] !== 'admin') {
    header('Location: ../index.php');
}

require 'includes/header.php';
require 'includes/navconnected.php'; //require $nav;?>

<div class="container-fluid product-page">
    <div class="container current-page">
        <nav>
            <div class="nav-wrapper">
                <div class="col s12">
                    <a href="index.php" class="breadcrumb">Панель управления</a>
                    <a href="users.php" class="breadcrumb">Пользователи</a>
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container scroll">
    <table class="highlight striped">
        <thead>
        <tr>
            <th data-field="lastname">Полное имя</th>
            <th data-field="email">Почта</th>
            <th data-field="city">Город</th>
            <th data-field="country">Страна</th>
            <th data-field="address">Адрес</th>
            <th data-field="delete">Удалить</th>
        </tr>
        </thead>
        <tbody>
        <?php
        include '../db.php';

        //получение пользователей
        $queryuser = "SELECT id, email, firstname, lastname, address, city, country FROM users WHERE role = 'client'";
        $resultuser = $connection->query($queryuser);
        if ($resultuser->num_rows > 0) {
            while($rowuser = $resultuser->fetch_assoc()) {
                $id_user = $rowuser['id'];
                $firstname = $rowuser['firstname'];
                $lasttname = $rowuser['lastname'];
                $email = $rowuser['email'];
                $city = $rowuser['city'];
                $country = $rowuser['country'];
                $address = $rowuser['address'];
                ?>
                <tr>
                    <td><?php echo" $firstname "." $lasttname"; ?></td>
                    <td><?= $email; ?></td>
                    <td><?= $city; ?></td>
                    <td><?= $country; ?></td>
                    <td><?= $address; ?></td>
                    <td><a href="deleteuser.php?id=<?= $id_user; ?>"><i class="material-icons red-text">close</i></a></td>
                </tr>
            <?php }}  ?>
        </tbody>
    </table>
</div>

<?php require 'includes/footer.php'; ?>
