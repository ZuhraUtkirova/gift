<ul id="dropdown2" class="dropdown-content">
    <?php
        error_reporting(0);
        if ($_SESSION['role'] == 'admin') {
            echo '<li><a href="admin/index.php" class="blue-text">Админ</a></li>';
        }
        error_reporting(1);
    ?>
    <li><a class="blue-text" href="editprofile.php">Изменить</a></li>
    <li><a class="blue-text" href="orders.php">Заказы</a></li>
    <li><a class="blue-text" href="includes/logout.php">Выйти</a></li>
</ul>
<div class="navbar-fixed">
    <nav class="navblack">
        <div class="nav-wrapper nav-wrapper-2 container white">
            <ul class="left hide-on-med-and-down">
                <!--<li><a href="index.php" class="brand"></a></li>-->
                <li><a href="index.php" class="dark-text">Gift</a></li>

            </ul>

            <ul class="center hide-on-large-only">
                <li><a href="index.php" class="dark-text">Gift</a></li>

            </ul>
            <ul class="right">
                <li><a href="index.php" class="dark-text hide-on-med-and-down">Главная</a></li>
                <li><a href="cart.php" class="dark-text baskett"><i class="material-icons">shopping_cart</i>
                        <span class="badge <?php if (!isset($_SESSION['item']) or $_SESSION['item'] == 0)
                            echo 'hide'; ?>"><?= $_SESSION['item']; ?></span></a></li>
                <li><a href="editprofile.php" class="nohover dropdown-button" class="dropdown-button"
                        data-activates="dropdown2"><img class="responsive-img" src="users/default.jpg">
                        <i class="fa fa-angle-down dark-text right"></i></a></li>
            </ul>
        </div>
    </nav>
</div>