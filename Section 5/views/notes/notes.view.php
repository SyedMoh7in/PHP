<?php require "../PHP-Practice-Level1/views/partialcodes/head.php" ?>

<body class="h-full">

  <div class="min-h-full">
    <?php require("../PHP-Practice-Level1/views/partialcodes/nav.php") ?>

    <?php require("../PHP-Practice-Level1/views/partialcodes/banner.php") ?>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <?php foreach ($notes as $note) : ?>
          <ul>
          <li >
          <a class="text-blue-500 hover:underline" href="/note?id=<?= $note['id'] ?>">
           <?php echo  htmlspecialchars($note['body']) ?>
          </a>
          </li>
          </ul>
        <?php endforeach; ?>
        <p class="mt-6">
          <a href="/notes/create" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create a Note</a>
        </p>
      </div>
    </main>


</body>

</html>