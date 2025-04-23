<h2 class="text-lg font-bold mb-2">Categories</h2>
              <ul class="list-disc pl-5 space-y-1">
                <?php 
                include '../app/models/categoriesModel.php'; 
                $categories = \App\Models\CategoriesModel\findAll($connexion);
                ?>
                <?php foreach($categories as $category): ?>
                <li>
                  <a href="#" class="text-indigo-600 hover:text-indigo-900"
                    ><?php echo $category['name']; ?></a
                  >
                </li>
                <?php endforeach; ?>
</ul>