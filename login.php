<?php
    include './components/header.php';

    require "./config/config.php";

    if (isset($_POST['login'])) {

        $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_DATABASE;
        $pdo = new PDO($dsn, DB_USERNAME, DB_PASSWORD);

        $email = !empty($_POST['email']) ? trim($_POST['email']) : null;
        $passwordAttempt = !empty($_POST['password']) ? trim($_POST['password']) : null;

        $sql = "SELECT id, first_name, last_name, email, password FROM users WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        
        //Bind value.
        $stmt->bindValue(':email', $email);
        
        //Execute.
        $stmt->execute();

        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        //If $row is FALSE.
        if($user === false){
            //Could not find that email!
            $message = 'Incorrect email / password combination!';
            $colorBox = "red-500";
        } else{
            //Email account found. Check to see if the given password match
            //password hash that we stored in our users table.
            
            //Compare the passwords.
            $validPassword = password_verify($passwordAttempt, $user['password']);
            
            //If $validPassword is TRUE, the login has been successful.
            if($validPassword){
                
                //Provide the user with a login session.
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['first_name'] = $user['first_name'];
                $_SESSION['last_name'] = $user['last_name'];
                $_SESSION['email'] = $user['email'];
                $_SESSION['logged_in'] = time();
                
                echo "<script>
                        setTimeout(function() {
                            window.location.href = './index.php';
                        }, 2000); // Redirect after 2 seconds
                    </script>";
                $message = "User and Password are registered will be redirecting to Homepage";
                $colorBox = "indigo-600";
                
            } else{
                //$validPassword was FALSE. Passwords do not match.
                $message = 'Incorrect username / password combination!';
                $colorBox = "red-500";
            }
        }
    }

?>

    <div class="pt-16">
        <!-- header section -->
        <section class="bg-gray-900 text-white py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <h1 class="text-4xl font-serif font-bold">Login</h1>
                <p class="mt-4 text-gray-300"></p>
            </div>
        </section>
        
        <!-- Product Grid -->
        <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class=" gap-8">

                
                <div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-lg">
                    <!-- Display Message -->
                    <?php if (isset($message)): ?>
                        <div class="p-4 text-white bg-<?php echo $colorBox; ?> rounded mb-4">
                            <?php echo htmlspecialchars($message); ?>
                        </div>
                    <?php endif; ?>

                    <form class="space-y-4" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">

                        <div>
                            <label for="email" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                            <input type="email" name="email" id="email" class="w-full px-4 py-2 rounded border-gray-300 border placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500" placeholder="name@company.com" required="">
                        </div>
                        <div>
                            <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                            <input type="password" name="password" id="password" placeholder="••••••••" class="w-full px-4 py-2 rounded border-gray-300 border placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-indigo-500" required="">
                        </div>
                        <button type="submit" name="login" class="px-8 py-3 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition group w-full text-center">Sign in</button>
                        
                        <p class="text-sm font-light text-gray-500 dark:text-gray-400">
                            Don’t have an account yet? <a href="./register.php" class="font-medium text-green-600 hover:underline dark:text-green-500">Sign up</a>
                        </p>
                    </form>
                </div>
                
            </div>

        </section>
    </div>





<?php
    include './components/footer.php';
?>