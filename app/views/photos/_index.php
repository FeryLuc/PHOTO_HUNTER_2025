<div class="grid grid-cols-3 gap-4">
                <?php foreach($photos as $photo): ?>
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                  <img
                    class="w-full h-40 object-cover"
                    src="<?php echo $photo['cover']; ?>"
                    alt="<?php echo \Core\Helpers\truncate($photo['title'], 20); ?>"
                  />

                  <div class="p-4">
                    <header class="pb-4">
                      <h3 class="text-lg font-bold"><?php echo \Core\Helpers\truncate($photo['title'], 20); ?></h3>
                      <div>
                        <a href="#" class="text-indigo-500 hover:underline">
                          <?php echo $photo['firstname']; ?> <?php echo $photo['lastname']; ?>
                        </a>
                      </div>
                    </header>

                    <p class="text-base text-gray-600">
                      <?php echo \Core\Helpers\truncate($photo['resume'], 50); ?>
                    </p>
                    <a
                      href="photo.html"
                      class="mt-4 inline-block bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-700"
                    >
                      En savoir plus
                    </a>
                  </div>
                </article>
                <?php endforeach; ?>
              </div>