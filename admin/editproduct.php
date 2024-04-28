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
            <a href="infoproduct.php" class="breadcrumb">Управления</a>
            <a href="editproduct.php" class="breadcrumb">Заказы</a>
          </div>
        </div>
      </nav>
    </div>
   </div>


<div class="container scroll">
  <table class="highlight striped">
     <thead>
       <tr>
           <th data-field="name">Предмет</th>
           <th data-field="price">Цена</th>
           <th data-field="quantity">Количество</th>
           <th data-field="user">Пользователь</th>
           <th data-field="statut">Статус</th>
           <th data-field="delete">Удалить</th>
       </tr>
     </thead>
     <tbody>
<?php
include '../db.php';

$queryfirst = "SELECT
product.id as 'id',
product.name as 'name',
product.price as 'price',

SUM(command.quantity),
command.statut as 'statut',
command.id_product,
command.quantity as 'quantity',
command.id_user as 'user'


FROM product, command
WHERE product.id = command.id_product
GROUP BY command.id
ORDER BY SUM(command.id_user) DESC ";
$resultfirst = $connection->query($queryfirst);
if ($resultfirst->num_rows > 0) {
  while($rowfirst = $resultfirst->fetch_assoc()) {

        $idp = $rowfirst['id'];
        $name = $rowfirst['name'];
        $statut = $rowfirst['statut'];
        $quantity = $rowfirst['quantity'];
        $price = $rowfirst['price'];
        $user = $rowfirst['user'];

        //получение имя пользователя
        $queryuser = "SELECT firstname, lastname FROM users WHERE id = '$user'";
        $resultuser = $connection->query($queryuser);
        if ($resultuser->num_rows > 0) {
          while($rowuser = $resultuser->fetch_assoc()) {
            $userfirstname = $rowuser['firstname'];
            $userlasttname = $rowuser['lastname'];
    ?>
    <tr>
      <td><?= $name; ?></td>
      <td><?= $price; ?></td>
      <td><?= $quantity; ?></td>
      <td><?php echo" $userfirstname "." $userlasttname"; ?></td>
      <td><?= $statut; ?></td>
      <td><a href="deletecmd.php?id=<?= $idp; ?>&userid=<?= $user; ?>"><i class="material-icons red-text">close</i></a></td>
    </tr>
    <?php }} }} ?>
  </tbody>
</table>
</div>

 <?php require 'includes/footer.php'; ?>
