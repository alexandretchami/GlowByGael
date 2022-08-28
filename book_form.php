<?php


$connection = mysqli_connect('localhost', 'root', '', 'glowbygael-book_db');

if (isset($_POST['send'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $guests = $_POST['guests'];
  $arrivals = $_POST['arrivals'];

  $request = " INSERT INTO book_form(name, email, phone, guests, arrivals) values('$name','$email','$phone','$guests','$arrivals')";

  mysqli_query($connection, $request);

  header('Location:book.php');
}else{
  echo "quelque chose s'est mal passé essaie encore";
}