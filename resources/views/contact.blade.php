<x-header>

</x-header>

<!-- Contact Details Section -->
<main class="max-w-6xl mx-auto mt-8">
    <section class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Contact Details</h2>
        <ul class="space-y-4">
            <li id="email-address" class="text-gray-600">
                <strong>Email:</strong> ********mechanic@gmail.com
            </li>
            <button
                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition"
                type="button"
                onclick="document.getElementById('email-address').innerHTML = '<strong>Email:</strong> uniquepromechanic@gmail.com'">
                Reveal Email
            </button>
            <li class="text-gray-600"><strong>Phone:</strong> ************</li>
            <li class="text-gray-600"><strong>Address:</strong> Earth</li>
        </ul>
        <button
            class="bg-blue-500 text-white px-4 py-2 mt-4 rounded hover:bg-blue-600 transition"
            type="button"
            onclick="document.querySelector('main').style.display = 'none'">
            Hide Contact Details
        </button>
    </section>
</main>

<!-- Footer -->
<footer class="bg-gray-800 text-white py-4 mt-12">
    <div class="max-w-6xl mx-auto text-center">
        <p class="text-sm">&copy; 2025 Your Name. All Rights Reserved.</p>
    </div>
</footer>
</body>
</html>
