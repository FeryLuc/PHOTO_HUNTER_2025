<!-- DERNIÈRES PHOTOS -->
<section>
              <h2 class="text-3xl mb-4 font-bold">Dernières photos</h2>
              <div class="grid grid-cols-3 gap-4">
                <?php foreach($photos as $photo): ?>
                <article class="bg-white rounded-lg shadow-lg overflow-hidden">
                  <img
                    class="w-full h-40 object-cover"
                    src="<?php echo $photo['cover']; ?>"
                    alt="Nom du photo"
                  />

                  <div class="p-4">
                    <header class="pb-4">
                      <h3 class="text-lg font-bold"><?php echo $photo['title']; ?></h3>
                      <div>
                        Photographe:
                        <a href="#" class="text-indigo-500 hover:underline">
                          Alex Smith
                        </a>
                      </div>
                    </header>

                    <p class="text-base text-gray-600">
                      <?php echo \Core\Helpers\truncate($photo['resume']); ?>
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
</section>

<!-- DERNIÈR.E.S PHOTOGRAPHES -->
<section class="mt-16">
              <h2 class="text-3xl mb-4 font-bold">
                Dernier.ère.s photographes
              </h2>
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
                      href="photographer.html"
                      class="mt-4 inline-block bg-indigo-500 text-white py-2 px-4 rounded-lg hover:bg-indigo-700"
                    >
                      Voir ses photos
                    </a>
                  </div>
                </article>
                <?php endforeach; ?>
              </div>
            </section>