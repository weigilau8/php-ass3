<?php
    include './components/header.php';
?>
<div class="pt-16">
   <section class="bg-gray-900 text-white py-20">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
         <h1 class="text-4xl font-serif font-bold mb-4">Contact Us</h1>
         <p class="text-xl text-gray-300">We're here to help with any questions about our timepieces</p>
      </div>
   </section>
   <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
      <div class="grid grid-cols-1 lg:grid-cols-2 gap-12">
         <aside class="bg-white p-8 rounded-lg shadow-lg">
            <h2 class="text-2xl font-serif font-bold mb-6">Send Us a Message</h2>
            <form class="space-y-6"  onsubmit="return confirm('Message Sent');">
               <div>
                  <label for="name" class="block text-sm font-medium text-gray-700 mb-1">Full Name</label>
                  <input type="text" id="name" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" placeholder="John Doe" required>
               </div>
               <div>
                  <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email Address</label>
                  <input type="email" id="email" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" placeholder="john@example.com" required>
               </div>
               <div>
                  <label for="subject" class="block text-sm font-medium text-gray-700 mb-1">Subject</label>
                  <input type="text" id="subject" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" placeholder="How can we help?" required>
               </div>
               <div>
                  <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Message</label>
                  <textarea id="message" rows="4" class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500" placeholder="Your message here..."></textarea>
               </div>
               <button type="submit" class="w-full bg-indigo-600 text-white py-3 rounded-md hover:bg-indigo-700 transition">Send Message</button>
            </form>
         </aside>
         <address class="space-y-8">
            <div>
               <h2 class="text-2xl font-serif font-bold mb-6">Contact Information</h2>
               <div class="space-y-4">
                  <div class="flex items-start space-x-4">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-phone h-6 w-6 text-indigo-600 mt-1">
                        <path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"></path>
                     </svg>
                     <div>
                        <h3 class="font-semibold">Phone</h3>
                        <a href="tel:1 (555) 123-4567" class="text-gray-600 hover:text-indigo-400">+1 (555) 123-4567</a>
                     </div>
                  </div>
                  <div class="flex items-start space-x-4">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-mail h-6 w-6 text-indigo-600 mt-1">
                        <rect width="20" height="16" x="2" y="4" rx="2"></rect>
                        <path d="m22 7-8.97 5.7a1.94 1.94 0 0 1-2.06 0L2 7"></path>
                     </svg>
                     <div>
                        <h3 class="font-semibold">Email</h3>
                        <a href="mailto:info@chrono.com" class="text-gray-600 hover:text-indigo-400">info@chrono.com</a>
                     </div>
                  </div>
                  <div class="flex items-start space-x-4">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-map-pin h-6 w-6 text-indigo-600 mt-1">
                        <path d="M20 10c0 6-8 12-8 12s-8-6-8-12a8 8 0 0 1 16 0Z"></path>
                        <circle cx="12" cy="10" r="3"></circle>
                     </svg>
                     <div>
                        <h3 class="font-semibold">Address</h3>
                        <p class="text-gray-600">120 Bloor <br>Toronto, ON 10001</p>
                     </div>
                  </div>
                  <div class="flex items-start space-x-4">
                     <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-clock h-6 w-6 text-indigo-600 mt-1">
                        <circle cx="12" cy="12" r="10"></circle>
                        <polyline points="12 6 12 12 16 14"></polyline>
                     </svg>
                     <div>
                        <h3 class="font-semibold">Business Hours</h3>
                        <p class="text-gray-600">Monday - Friday: 9:00 AM - 6:00 PM<br>Saturday: 10:00 AM - 4:00 PM<br>Sunday: Closed</p>
                     </div>
                  </div>
               </div>
            </div>
            <div class="aspect-w-16 aspect-h-9">
               <img src="./dist/img/c1.jpeg" alt="Location" class="w-full h-64 object-cover rounded-lg">
            </div>
         </address>
      </div>
   </section>
</div>

<?php
    include './components/footer.php';
?>