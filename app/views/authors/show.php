<section>
              <!-- PHOTOGRAPHER -->
              <article
                class="bg-white rounded-lg shadow-lg overflow-hidden flex"
              >
                <img
                  class="w-full md:w-1/3 md:h-auto object-cover"
                  src="<?php echo $author['picture']; ?>"
                  alt="<?php echo $author['firstname']?><?php echo $author['lastname']?>"
                />

                <div class="p-4">
                  <div>
                    <h2 class="text-lg font-bold"><?php echo $author['firstname']?><?php echo $author['lastname']?></h2>
                    <p class="text-sm text-gray-600">
                        Biography...
                    </p>
                  </div>
                </div>
              </article>

              <!-- SES PHOTOS -->
              <div class="pt-8">
                <h2 class="text-3xl font-bold pb-4">Ses photos</h2>
                <?php include '../app/views/photos/_index.php'; ?>
              </div>
</section>