<div class="navbar-fixed">
    <nav class="navblack">
        <div class="nav-wrapper nav-wrapper-2 container white">
            <ul class="left hide-on-med-and-down">
                <li><a href="index.php" class="dark-text">Gift</a></li>

            </ul>

            <ul class="center hide-on-large-only">
                <li><a href="index.php" class="dark-text">Gift</a></li>

            </ul>

            <ul class="right">
                <li><a href="index.php" class="dark-text hide-on-med-and-down">Главная</a></li>
                <li><a href="cart.php" class="dark-text baskett"><i class="material-icons">shopping_cart</i>
                <li><a href="sign.php" class="waves-effect waves-light btn button-rounded">Войти</a></li>
                        <span class="badge <?php if(!isset($_SESSION['item']) OR $_SESSION['item'] == 0) echo'hide'; ?>"><?= $_SESSION['item']; ?></span></a></li>
            </ul>
        </div>
    </nav>
</div>
