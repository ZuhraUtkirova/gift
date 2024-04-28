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
                </div>
            </div>
        </nav>
    </div>
</div>

<div class="container">
    <div class="row">
        <style>
            .blue-text button {
                background-color: #0b0;
                border-radius: 25px;
                border: 0px;
                padding: 10px;
                color: white;
                transition: all 0.3s ease;
            }
            
            .blue-text button:hover {
                transform: scale(0.96);
                box-shadow: 0 0px 10px rgba(4, 133, 0, 1);
            }

        </style>
        <div class="col s12 m4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="src/img/add.png" alt="">
                </div>
                <div class="card-action">
                    <a class="blue-text" href="addproduct.php"><button>Добавить предмет</button></a>
                </div>
            </div>
        </div>
        
        <div class="col s12 m4">
            <div class="card hoverable">
                <div class="card-image">
                <img src="src/img/add.png" alt="">
                </div>
                <div class="card-action">
                    <a class="blue-text" href="addc.php"><button>Добавить категорию</button></a>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="src/img/stats.png" alt="">
                </div>
                <div class="card-action">
                    <a class="blue-text" href="stats.php"><button>Смотреть статистику</button></a>
                </div>
            </div>
        </div>

        <div class="col s12 m4">
            <div class="card hoverable">
                <div class="card-image">
                    <img src="src/img/edit.png" alt="">
                </div>
                <div class="card-action">
                    <a class="blue-text" href="editproduct.php"><button>Заказы</button></a>
                </div>
            </div>
        </div>
    </div>
</div>



<?php require 'includes/footer.php'; ?>
