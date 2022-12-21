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

  if(($_SERVER['REQUEST_METHOD'])== 'POST'){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $coment = trim($_POST['coment']);

    $name = htmlspecialchars($name);
    $email = htmlspecialchars($email);
    $coment = htmlspecialchars($coment);

    $name = filter_var($name, FILTER_SANITIZE_NUMBER_FLOAT);

 

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
      echo $email;
    }else{
      echo "dit is niet een geldig email";
    };

    echo $name;
    echo $coment;
    
  } else{
    echo "hier komt ie";
  }

  

?>

<?php include "../private/shared/footer.php"; ?>