<?php
/* Session are way to store Information(in variables) to be used across multiple pages.
Unlike Cookies, Sessions are stored on server*/
session_start(); // Must be called before accessing any session data

if (isset($_POST['submit'])) {
  $username = filter_input(
    INPUT_POST,
    'username',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );
  $password = filter_input(
    INPUT_POST,
    'password',
    FILTER_SANITIZE_FULL_SPECIAL_CHARS
  );

  if ($username == 'Mohsin' && $password == 'Hello123') {
    // Set Session variable
    $_SESSION['username'] = $username;
    // Redirect user to another page
    header('Location: /PHP-PRACTICE/dashboard.php');
  } else {
    echo 'Incorrect username or password';
  }
}
?>

  <form action="<?php echo htmlspecialchars(
    $_SERVER['PHP_SELF']
  ); ?>" method="POST">
    <div>
      <label>Username: </label>
      <input type="text" name="username">
    </div>
    <br>
    <div>
      <label>Password: </label>
      <input type="password" name="password">
    </div>
    <br>
    <input type="submit" name="submit" value="Submit">
  </form>
?>