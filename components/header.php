
<!-- This is header page -->
<?php
    ob_start();
    session_start();

    $current_page = $_SERVER['REQUEST_URI'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="CHRONO: This web site is a wristwatch store.">
    <meta name="author" content="Luigi, Sergei, Yichen, Valerii, Shakhboz">
    <title>CHRONO - Luxury Timepieces</title>
    <link rel="stylesheet" href="./dist/css/reset.css">
    <link rel="stylesheet" href="./dist/css/normalize.css">
    <link rel="stylesheet" href="./dist/css/style.css">
</head>
<body>
    <div class="sub-body">
        <header>
            <nav class="fixed w-full bg-white/90 backdrop-blur-sm z-50 shadow-sm">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-16">
                        <div class="flex items-center">
                            <a class="flex items-center space-x-2" href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-watch h-8 w-8 text-indigo-600">
                                    <circle cx="12" cy="12" r="6"></circle>
                                    <polyline points="12 10 12 12 13 13"></polyline>
                                    <path d="m16.13 7.66-.81-4.05a2 2 0 0 0-2-1.61h-2.68a2 2 0 0 0-2 1.61l-.78 4.05"></path>
                                    <path d="m7.88 16.36.8 4a2 2 0 0 0 2 1.61h2.72a2 2 0 0 0 2-1.61l.81-4.05"></path>
                                </svg>
                                <span class="font-serif text-2xl font-bold">CHRONO</span>
                            </a>
                        </div>
                        <ul class="hidden md:flex items-center space-x-8">
                            <li><a class="text-gray-700 hover:text-indigo-400 transition <?php echo ($current_page == '/home.php' || $current_page == '/') ? 'text-indigo-600': '' ?>" href="/">Home</a></li>
                            <li><a class="text-gray-700 hover:text-indigo-400 transition <?php echo ($current_page == '/home.php' || $current_page == '/about.php') ? 'text-indigo-600 ': '' ?>" href="/about.php">About</a></li>
                            <li><a class="text-gray-700 hover:text-indigo-400 transition <?php echo ($current_page == '/home.php' || $current_page == '/products.php') ? 'text-indigo-600': '' ?>" href="/products.php">Products</a></li>
                            <li><a class="text-gray-700 hover:text-indigo-400 transition <?php echo ($current_page == '/home.php' || $current_page == '/contact.php') ? 'text-indigo-600': '' ?>" href="/contact.php">Contact</a></li>
                            <?php if (!$_SESSION) { ?>
                                <li><a class="text-gray-700 hover:text-indigo-400 transition <?php echo ($current_page == '/home.php' || $current_page == '/login.php') ? 'text-indigo-600': '' ?>" href="/login.php">Login</a></li>
                                <li><a class="text-gray-700 hover:text-indigo-400 transition <?php echo ($current_page == '/home.php' || $current_page == '/register.php') ? 'text-indigo-600': '' ?>" href="/register.php">Register</a></li>
                            <?php } else { ?>
                                <li>
                                    <?php echo $_SESSION['first_name']; ?>
                                    <button id="logged-in" class="text-gray-700 hover:text-indigo-600 transition">
                                        <svg width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M2 8l6 6 6-6" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
                                    </button>
                                </li>
                                
                            <?php } ?>
                        </ul>
                        <div class="md:hidden flex items-center">
                            <button id="button-mobile" class="text-gray-700 hover:text-indigo-600 transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-menu h-6 w-6">
                                    <line x1="4" x2="20" y1="12" y2="12"></line>
                                    <line x1="4" x2="20" y1="6" y2="6"></line>
                                    <line x1="4" x2="20" y1="18" y2="18"></line>
                                </svg>
                            </button>
                        </div>
                        <!-- Navigation Menu -->
                        
                    </div>
                    
                    <nav id="mobile-nav" class="hidden p-2">
                        <ul>
                            <li class="p-2">
                                <a href="/" class="block text-gray-700 hover:text-indigo-600 <?php echo ($current_page == '/home.php' || $current_page == '/') ? 'text-indigo-600': '' ?>">Home</a>
                            </li>
                            <li class="p-2">
                                <a href="/about.php" class="block text-gray-700 hover:text-indigo-600 <?php echo ($current_page == '/about.php') ? 'text-indigo-600': '' ?>">About</a>
                            </li>
                            <li class="p-2">
                                <a href="/products.php" class="block text-gray-700 hover:text-indigo-600 <?php echo ($current_page == '/products.php') ? 'text-indigo-600': '' ?>">Products</a>
                            </li>
                            <li class="p-2">
                                <a href="/contact.php" class="block text-gray-700 hover:text-indigo-600 <?php echo ($current_page == '/contact.php') ? 'text-indigo-600': '' ?>">Contact</a>
                            </li>
                            <?php if (!$_SESSION) { ?>
                                <li class="p-2">
                                    <a href="/login.php" class="block text-gray-700 hover:text-indigo-600 <?php echo ($current_page == '/login.php') ? 'text-indigo-600': '' ?>">Login</a>
                                </li>
                                <li class="p-2">
                                    <a href="/register.php" class="block text-gray-700 hover:text-indigo-600 <?php echo ($current_page == '/register.php') ? 'text-indigo-600': '' ?>">Register</a>
                                </li>
                            <?php } else { ?>
                                <li class="p-2">
                                    <a href="/member.php" class="block text-gray-700 hover:text-indigo-600 <?php echo ($current_page == '/member.php') ? 'text-indigo-600': '' ?>">Member</a>
                                </li>
                                <li class="p-2">
                                    <a href="/logout.php" class="block text-gray-700 hover:text-indigo-600 <?php echo ($current_page == '/logout.php') ? 'text-indigo-600': '' ?>">Logout</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
                </div>
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">

                    <nav id="login-nav" class="hidden p-2 absolute right-0 bg-white w-20 p-4">
                        <ul>
                            <li><a class="text-gray-700 hover:text-indigo-400 transition <?php echo ($current_page == '/home.php' || $current_page == '/member.php') ? 'text-indigo-600': '' ?>" href="/member.php">Member</a></li>
                            <li><a class="text-gray-700 hover:text-indigo-400 transition <?php echo ($current_page == '/home.php' || $current_page == '/logout.php') ? 'text-indigo-600': '' ?>" href="/logout.php">Logout</a></li>
                        </ul>
                    </nav>
                </div>
                
            </nav>
            
        </header>
        
        <main class="flex-grow">