<?php

session_start();

    require 'includes/header.php';
    require 'includes/navconnected.php';  ?>

<div class="container-fluid product-page">
  <div class="container current-page">
    <nav>
      <div class="nav-wrapper">
        <div class="col s12">
          <a href="index.php" class="breadcrumb">Панель управления</a>
          <a href="infoproduct.php" class="breadcrumb">Управления</a>
          <a href="addproduct.php" class="breadcrumb">Добавить категорию</a>
        </div>
      </div>
    </nav>
  </div>
</div>

<div class="container addp">
    <form method="post" enctype="multipart/form-data">
        <div class="card">
            <?php

            include '../db.php';
            ?>
    
            <div class="row">
                <div class="input-field col s6" style="margin-left: 22%;">
                    <i class="fa fa-product-hunt prefix"></i>
                    <input id="icon_prefix" type="text" class="validate" name="name">
                    <label for="icon_prefix">Название категория</label>
                </div>

                

                
            </div>

            <div class="center-align">
                <button type="submit" name="done" class="waves-effect button-rounded waves-light btn">Подтвердить</button>
            </div>
        </div>
        

        <?php require 'successc.php'; ?>
    </form>
</div>

<?php require 'includes/footer.php'; ?>
