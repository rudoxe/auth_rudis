<?php require "views/components/head.php" ?>

<form method="POST">
  <h1>Register</h1>

  <label>
    email:
    <input name="email" value="<?= $_POST["email"] ?? "" ?>" />
  </label>

  <?php if (isset($errors["email"])) { ?>
    <p><?= $errors["email"] ?></p>
  <?php } ?>

  <label>
    Password <span>(atleast 1 uppercase letter, 1 lowercase, 1 digit, 1 spec char)</span>:
    <input name="password" />
  </label>
  <button>Register</button>
</form>

<?php require "views/components/footer.php" ?>