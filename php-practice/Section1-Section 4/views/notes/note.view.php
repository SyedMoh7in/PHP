<?php require("../PHP-Practice-Level1/views/partialcodes/head.php") ?>

<body class="h-full">

  <div class="min-h-full">
    <?php require("../PHP-Practice-Level1/views/partialcodes/nav.php") ?>

    <?php require("../PHP-Practice-Level1/views/partialcodes/banner.php") ?>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <P class="mb-6">
          <a href="/notes" class="text-blue-500 underline"> Go Back</a>
        </P>
        <p><?php echo  htmlspecialchars($note['body']) ?></p>
        <footer class="mt-6">
        <a class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded" href="note/edit?id=<?=$note['id']?>">Edit</a>
        </footer>
        
        <form class="mt-6" method="POST" action="/notes">
          <input type="hidden" name="_method" value="delete">
          <input type="hidden" name="id" value="<?=$note['id']?>">
          <button class="text-sm text-red-500">Delete</button>
        </form>
      </div>
    </main>


</body>

</html>