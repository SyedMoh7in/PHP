<?php require("partialcodes/head.php")?>
<body class="h-full">

<div class="min-h-full">
<?php require("partialcodes/nav.php")?>

<?php require("partialcodes/banner.php")?>
  <main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
      <!-- Your content -->
      <p>Hello, <?=$_SESSION['user']['email']?? 'Guest'?> Welcome to the homepage</p>
    </div>
  </main>


</body>
</html>