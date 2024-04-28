<?php

session_start();

if (!isset($_SESSION['id'])) {
header('Location: ../sign.php');
}
else {

error_reporting(0);

require 'includes/header.php';
require 'includes/navconnected.php'; }
?>

<div class="container-fluid product-page">
  <div class="container current-page">
    <nav>
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="index.php" class="breadcrumb">Панель управления</a>
          <a href="infoproduct.php" class="breadcrumb">Управления</a>
          <a href="addproduct.php" class="breadcrumb">Добавить предмет</a>
        </div>
      </div>
    </nav>
  </div>
</div>

<div class="container addproduct">
  <div class="container">
    <div class="row">
    <h4>Выберите в какую категорию хотите добавить?</h4>
        <?php
        include '../db.php';

        //получение категорий
          $querycategory = "SELECT id, name FROM category";
          $total = $connection->query($querycategory);
          if ($total->num_rows > 0) {
          while($rowcategory = $total->fetch_assoc()) {
            $id_category = $rowcategory['id'];
            $name_category = $rowcategory['name'];

        ?>
        
        <div class="col s12 m4">
          <div class="card hoverable animated slideInUp wow">
            <div class="card">
              <a href="addp.php?id=<?= $id_category; ?>&category=<?= $name_category; ?>">
                <span class="card-title blue-text"><?= $name_category; ?></span></a>
              
            </div>
          </div>
        </div>

      <?php }} ?>
    </div>
  </div>
</div>

<?php require 'includes/footer.php'; ?>
