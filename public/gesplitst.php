<?php include "../private/shared/header.php"; ?>

<h1>
  Standaard tekst

</h1>
<form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
  Name: <input type="text" name="name"><br>
  E-mail: <input type="text" name="email"><br>
  Comentaar: <textarea name="comentaar" id="" cols="30" rows="10"></textarea>
  <input type="submit">
</form>

<?php include "../private/shared/footer.php"; ?>