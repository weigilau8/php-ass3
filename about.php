<?php
    include './components/header.php';
?>

    <div class="pt-16">
        <section class="relative py-20 bg-gray-900 text-white">
            <div class="absolute inset-0"><img src="https://images.unsplash.com/photo-1495856458515-0637185db551?ixlib=rb-4.0.3&amp;auto=format&amp;fit=crop&amp;w=2000&amp;q=80" alt="Watchmaking" class="w-full h-full object-cover opacity-20"></div>
            <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
                <h1 class="text-4xl md:text-5xl font-serif font-bold mb-6">Our Heritage</h1>
                <p class="text-xl max-w-3xl mx-auto text-gray-300">Since 1970, we've been crafting exceptional timepieces that combine traditional watchmaking with modern innovation.</p>
            </div>
        </section>
        <section class="py-20">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 md:grid-cols-4 gap-12">
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-12 w-12 text-indigo-600 mx-auto mb-4">
                            <circle cx="12" cy="12" r="10"></circle>
                            <polyline points="12 6 12 12 16 14"></polyline>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Precision</h3>
                        <p class="text-gray-600">Every timepiece is crafted with meticulous attention to detail</p>
                    </div>
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-shield h-12 w-12 text-indigo-600 mx-auto mb-4">
                            <path d="M20 13c0 5-3.5 7.5-7.66 8.95a1 1 0 0 1-.67-.01C7.5 20.5 4 18 4 13V6a1 1 0 0 1 1-1c2 0 4.5-1.2 6.24-2.72a1.17 1.17 0 0 1 1.52 0C14.51 3.81 17 5 19 5a1 1 0 0 1 1 1z"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Quality</h3>
                        <p class="text-gray-600">Using only the finest materials and Swiss movements</p>
                    </div>
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-award h-12 w-12 text-indigo-600 mx-auto mb-4">
                            <circle cx="12" cy="8" r="6"></circle>
                            <path d="M15.477 12.89 17 22l-5-3-5 3 1.523-9.11"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Excellence</h3>
                        <p class="text-gray-600">Award-winning designs and craftsmanship</p>
                    </div>
                    <div class="text-center">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-users h-12 w-12 text-indigo-600 mx-auto mb-4">
                            <path d="M16 21v-2a4 4 0 0 0-4-4H6a4 4 0 0 0-4 4v2"></path>
                            <circle cx="9" cy="7" r="4"></circle>
                            <path d="M22 21v-2a4 4 0 0 0-3-3.87"></path>
                            <path d="M16 3.13a4 4 0 0 1 0 7.75"></path>
                        </svg>
                        <h3 class="text-xl font-semibold mb-2">Heritage</h3>
                        <p class="text-gray-600">Five decades of watchmaking expertise</p>
                    </div>
                </div>
            </div>
        </section>
        <section class="py-20 bg-gray-50">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
                    <article>
                        <h2 class="text-3xl font-serif font-bold mb-6">Our Story</h2>
                        <div class="space-y-4 text-gray-600">
                            <p>Founded in 1970 by master watchmaker James Chrono, our company began with a simple vision: to create timepieces that would stand the test of time.</p>
                            <p>Today, we continue this legacy of excellence, combining traditional craftsmanship with cutting-edge technology to create watches that are both beautiful and precise.</p>
                            <p>Each CHRONO timepiece is assembled by hand in our workshop, undergoing rigorous quality control to ensure it meets our exacting standards.</p>
                        </div>
                    </article>
                    <div class="grid grid-cols-2 gap-4">
                        <img src="./dist/img/a1.jpeg" alt="Watchmaking craft" class="w-full h-64 object-cover rounded-lg">
                        <img src="./dist/img/a2.jpeg" alt="Watch workshop" class="w-full h-64 object-cover rounded-lg">
                    </div>
                </div>
            </div>
        </section>
    </div>

<?php
    include './components/footer.php';
?>