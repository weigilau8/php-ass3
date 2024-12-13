<?php
    require './components/header.php';

    require "./config/config.php";

    try {
        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE;
        $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);
        
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $sql = "SELECT * FROM users LIMIT 3";

        $stmt = $pdo->query($sql);

        $data = $stmt->fetchAll(PDO::FETCH_ASSOC);

    } catch (PDOException $e) {
        // Handle connection error
        die("Connection failed: " . $e->getMessage());
    }

    // Close the connection
    $pdo = null;

?>
    <div class="pt-16">
        <section class="bg-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl font-serif font-bold mb-4">Member Page</h1>
            </div>
        </section>
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <?php 
                    // Check data is empty
                    if (!empty($data)) {
                        
                        // looping the data and prod is key
                        foreach ($data as $user) { 
                ?>

                    <!-- Product Card -->
                    <div class="group">
                        <div class="relative overflow-hidden rounded-lg mb-4 p-8">
                            <!-- Shows an image -->
                            <img src="/dist/img/user.jpg" alt="<?php echo $user['image'] ?? '' ?>>" class="w-full h-80 object-cover transform group-hover:scale-105 transition duration-500">
                            <!-- Overlays a semi-transparent background on hover. -->
                            <div class="absolute inset-0 bg-black/20 group-hover:bg-black/40 transition"></div>
                            
                        </div>

                        <!-- titles and prices for the products -->
                        <h3 class="text-xl font-semibold mb-2">
                            <?php echo htmlspecialchars($user['first_name']) ?> <?php echo htmlspecialchars($user['last_name']) ?>
                        </h3>
                        
                        <p class="text-gray-600">$<?php echo $user['email'] ?></p>
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
    include './components/footer.php';
?>