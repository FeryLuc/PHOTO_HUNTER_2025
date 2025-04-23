<div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <?php foreach($authors as $author): ?>
                <article
                  class="bg-white rounded-lg shadow-lg overflow-hidden flex"
                    >
                  <img
                    class="w-full md:w-1/3 md:h-auto object-cover"
                    src="<?php echo $author['picture']; ?>"
                    alt="<?php echo $author['firstname']; ?><?php echo $author['lastname']; ?>"
                  />

                  <div class="p-4">
                    <h2 class="text-lg font-bold"><?php echo $author['firstname']; ?><?php echo $author['lastname']; ?></h2>
                    <p class="text-sm text-gray-600">
                      Biography...
                    </p>
                    <a
                      href="?authors=show&id=<?php echo $author['id']; ?>"
                      class="mt-4 inline-block bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-700"
                    >
                      Voir ses photos
                    </a>
                  </div>
                </article>
                <?php endforeach; ?>
              </div>