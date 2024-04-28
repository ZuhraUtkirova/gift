<?php

if (isset($_POST['done'])) {







  $name = $_POST['name'];



  //добавление продукта
  $queryaddproduct = "INSERT INTO category(name) VALUES ('$name')";

if ($connection->query($queryaddproduct) === TRUE ) {
          echo "<div class='center-align'>
                 <h5 class='green-text'>Категория успешно добавлена!</h5>
                 </div><br><br>";

     } else {
         echo "<h5 class='red-text '>Error: " . $queryaddproduct . "</h5><br><br><br>" . $connection->error;
     }

     $connection->close();

}

 ?>
