<?php include "../private/shared/header.php"; ?>

<h1>
  Standaard tekst

</h1>
<form action="" method="post">
  Name: <input type="text" name="name"><br>
  E-mail: <input type="text" name="email"><br>
  Comentaar: <textarea name="coment" id="" cols="30" rows="10"></textarea>
  <input type="submit" name="submit" value="Submit">
</form>

<?php 
  var_dump($_SERVER);
  if(($_SERVER['REQUEST_METHOD'])== 'POST'){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $coment = trim($_POST['coment']);

    echo $name;
    echo $email;
    echo $coment;
    
  } else{
    echo "hier komt ie";
  }

?>

<?php include "../private/shared/footer.php"; ?>