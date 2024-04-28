<?php
if (isset($_POST['signup'])) {

  $email = $_POST['email'];
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $password = $_POST['password'];
  $address = $_POST['address'];
  $city = $_POST['city'];
  $country = $_POST['country'];

  $encryptedpass = md5($password);


  include 'db.php';


  // Проверка, существует ли email уже в базе данных
  $checkQuery = "SELECT COUNT(*) as count FROM users WHERE email = '$email'";
  $checkResult = $connection->query($checkQuery);
  $checkRow = $checkResult->fetch_assoc();


  if ($checkRow['count'] == 0) {
    // доавления информаций в базу данных
    $query = "INSERT INTO users(email,
    firstname,
    lastname,
    password,
    address,
    city,
    country,
    role) VALUES ('$email',
    '$firstname',
    '$lastname',
    '$encryptedpass',
    '$address',
    '$city',
    '$country',
    'client')";
  if ($connection->query($query) === TRUE) {
      echo "<div class='center-align'>
      <h5 class='black-text'>Добро пожаловать <span class='green-text'>$firstname</span> Пожалуйста войдите в систему!</h5><br><br>
      </div>";}
  } elseif ($checkRow['count'] > 0) {
    echo "<div class='center-align'>
    <h5 class='red-text'>Пользователь с такой почтой уже существует, используйте другую почту для регистрации! </h5><br><br>
    </div>";
  } else {
    echo "<h5 class='red-text'>Error: " . $query . "</h5>" . $connection->error;
  }



  

  $connection->close();


}




?>
