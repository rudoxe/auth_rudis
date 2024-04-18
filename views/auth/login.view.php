<?php require "views/components/head.php" ?>

<form method="POST">
  <h1>Login</h1>

  <label>
    Email:
    <input name="email" value="<?= $_POST["email"] ?? "" ?>" />
  </label>

  <?php if (isset($errors["email"])) { ?>
    <p><?= $errors["email"] ?></p>
  <?php } ?>

  <label>
    Password:
    <input name="password" />
  </label>
  <button>Login</button>
</form>

<?php require "views/components/footer.php" ?>