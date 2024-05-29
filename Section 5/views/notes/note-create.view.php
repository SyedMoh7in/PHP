<?php require "../PHP-Practice-Level1/views/partialcodes/head.php" ?>

<body class="h-full">

  <div class="min-h-full">
    <?php require("../PHP-Practice-Level1/views/partialcodes/nav.php") ?>

    <?php require("../PHP-Practice-Level1/views/partialcodes/banner.php") ?>
    <main>
      <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        <!-- Your content -->

        <form action="/notes" method="POST" >
          <div class="space-y-12">
            <div class="border-b border-gray-900/10 pb-12">
              <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                <div class="col-span-full">
                  <label for="body" class="block text-sm font-medium leading-6 text-gray-900">Body</label>
                  <div class="mt-2">
                    <textarea id="body" name="body" rows="3" class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6"
                    > </textarea>
                  <?php  if(isset($errors['body'])) : ?>
                    <p class="text-red-500 text-xs mt-2"> <?=$errors['body']?></p>
                    <?php endif; ?>
                  </div>
                </div>
              </div>
              <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Create</button>
            </div>
        </form>
      </div>
    </main>


</body>

</html>