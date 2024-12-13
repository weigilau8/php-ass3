<?php
    require './components/header.php';

    require "./config/config.php";

    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE;
            $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);

            $stmt = $pdo->prepare("INSERT INTO users (first_name, last_name, email, password) VALUES (:first_name, :last_name, :email, :password)"); 

            // Getting the form data
            $first_name = $_POST['first_name'];
            $last_name = $_POST['last_name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            // Hashing the password for security
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

            $stmt->bindParam(':first_name', $first_name, PDO::PARAM_STR);
            $stmt->bindParam(':last_name', $last_name, PDO::PARAM_STR);
            $stmt->bindParam(':email', $email, PDO::PARAM_STR);
            $stmt->bindParam(':password', $hashedPassword, PDO::PARAM_STR);

            if ($stmt->execute()) {
                $message = "New account created successfully!";
            } else {
                $message = "Error: Unable to create account.";
            }
        
        } catch (PDOException $e) {
            // Handle database errors
            $message = "Database error: " . $e->getMessage();
        }
    }


?>

    <div class="pt-16">
        <!-- header section -->
        <section class="bg-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-serif font-bold">Register</h1>
                <p class="mt-4 text-gray-300"></p>
            </div>
        </section>
        
        <!-- Product Grid -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class=" gap-8">

                
                <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                    <!-- Display Message -->
                    <?php if (isset($message)): ?>
                        <div class="p-4 text-white bg-gray-800 rounded mb-4">
                            <?php echo htmlspecialchars($message); ?>
                        </div>
                    <?php endif; ?>

                    <form class="space-y-4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                        <div>
                            <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First name</label>
                            <input type="text" name="first_name" id="first_name" class="w-full px-4 py-2 rounded border-gray-300 border placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="First name" required="">
                        </div>

                        <div>
                            <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last name</label>
                            <input type="text" name="last_name" id="last_name" class="w-full px-4 py-2 rounded border-gray-300 border placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="Last name" required="">
                        </div>

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="w-full px-4 py-2 rounded border-gray-300 border placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="w-full px-4 py-2 rounded border-gray-300 border placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500" required="">
                        </div>
                        <button type="submit" name="register" class="px-8 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition group w-full text-center">Register</button>
                        
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Do you have an account? <a href="./login.php" class="font-medium text-green-600 hover:underline dark:text-green-500">Login</a>
                        </p>
                    </form>
                </div>
                
            </div>

        </section>
    </div>





<?php
    include './components/footer.php';
?>