<!-- Catalogue -->
<section>
<div class="mb-8 flex justify-between items-center">
                <h2 class="text-3xl font-bold">Catalogue</h2>
                <div class="">
                  <label
                    for="sort"
                    class="block text-sm font-medium text-gray-700"
                    >Trier par:</label
                  >
                  <select
                    id="sort"
                    name="sort"
                    class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md"
                  >
                    <option value="date_desc">Date décroissante</option>
                    <option value="title_asc">Photo (A à Z)</option>
                    <option value="title_desc">Photo (Z à A)</option>
                  </select>
                </div>
              </div>
              <?php include '../app/views/photos/_index.php'; ?>
</section>