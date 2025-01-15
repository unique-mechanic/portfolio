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
            <li id="phone-number" class="text-gray-600">
                <strong>Phone:</strong> ************
            </li>
            <li id="physical-address" class="text-gray-600">
                <strong>Address:</strong> Earth
            </li>
            <button
                id="toggle-info-btn"
                class="bg-green-500 text-white px-4 py-2 rounded hover:bg-green-600 transition"
                type="button"
                onclick="toggleInfo()"
            >
                Reveal Info
            </button>
        </ul>

        <script>
            // JavaScript function to toggle visibility of email, phone, and address
            function toggleInfo() {
                const emailElement = document.getElementById('email-address');
                const phoneElement = document.getElementById('phone-number');
                const addressElement = document.getElementById('physical-address');
                const toggleButton = document.getElementById('toggle-info-btn');

                // Obfuscated and revealed values
                const obfuscatedEmail = '<strong>Email:</strong> ********mechanic@gmail.com';
                const revealedEmail = '<strong>Email:</strong> uniquepromechanic@gmail.com';

                const obfuscatedPhone = '<strong>Phone:</strong> ************';
                const revealedPhone = '<strong>Phone:</strong> 123-456-7890';

                const obfuscatedAddress = '<strong>Address:</strong> Earth';
                const revealedAddress = '<strong>Address:</strong> 123 Main St, Galaxy 42';

                // Toggle between obfuscated and revealed states
                if (emailElement.innerHTML === obfuscatedEmail) {
                    emailElement.innerHTML = revealedEmail;
                    phoneElement.innerHTML = revealedPhone;
                    addressElement.innerHTML = revealedAddress;
                    toggleButton.textContent = 'Hide Info';
                } else {
                    emailElement.innerHTML = obfuscatedEmail;
                    phoneElement.innerHTML = obfuscatedPhone;
                    addressElement.innerHTML = obfuscatedAddress;
                    toggleButton.textContent = 'Reveal Info';
                }
            }
        </script>
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
