<?php
    // Includes the header.php file
    include './components/header.php';

    // Product Data
    require "./config/config.php";

    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE;
        $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM products";

        $stmt = $pdo->query($sql);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        // Handle connection error
        die("Connection failed: " . $e->getMessage());
    }

    // Close the connection
    $pdo = null;
?>
    
  
    <!-- Frontend Display -->
    <div class="pt-16">
        <!-- header section -->
        <section class="bg-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-serif font-bold">Our Collection</h1>
                <p class="mt-4 text-gray-300">Discover our range of exceptional timepieces</p>
            </div>
        </section>
        
        <!-- Product Grid -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">

                <!-- foreach would loop over the $products arrays. -->
                <?php 
                    // Check data is empty
                    if (!empty($data)) {
                        
                        // looping the data and prod is key
                        foreach ($data as $prod) { 
                ?>

                    <!-- Product Card -->
                    <div class="group">
                        <div class="relative overflow-hidden rounded-lg mb-4 p-8">
                            <!-- Shows an image -->
                            <img src="<?php echo $prod['image'] ?>" alt="<?php echo $prod['image'] ?? '' ?>>" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                            <!-- Overlays a semi-transparent background on hover. -->
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                            
                        </div>

                        <!-- titles and prices for the products -->
                        <h3 class="text-xl font-semibold mb-2"><?php echo htmlspecialchars($prod['title']) ?></h3>
                        <p class="text-gray-600">$<?php echo $prod['price'] ?></p>
                    </div>
                    <?php 
                        } 
                    } else {
                ?>
                    <p>No products available.</p>
                <?php 
                    }
                ?>
            </div>

        </section>
    </div>

<?php
    // Includes the footer.php file
    include './components/footer.php';
?>