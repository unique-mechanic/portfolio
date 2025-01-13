<x-header>

</x-header>

<main class="container mx-auto mt-8">
    <!-- Intro Section -->
    <section class="text-center py-8 bg-white shadow-md rounded-lg">
        <h2 class="text-2xl font-bold">Welcome to my Portfolio</h2>
        <p class="mt-4">Thanks for visiting my first-ever page. Inspired by creativity, I decided to build my own portfolio!</p>
    </section>

    <!-- About Section -->
    <section class="mt-8 p-6 bg-white shadow-md rounded-lg">
        <div class="flex items-center space-x-4">
            <img src="{{ asset('images/mechanic-logo.jpg') }}" alt="Mechanic Logo" class="w-48 h-48 rounded-md">
            <div>
                <h3 class="text-xl font-bold">About Me</h3>
                <p>A budding coder; Favorite quote: <em>Keep it simple</em></p>
                <p>நான் நினைத்ததை முடிப்பவன் ✡️</p>
                <p>Obsessed with Machines ⚙️ and Tech 🖥️</p>
            </div>
        </div>
    </section>

    <!-- Quote Section -->
    <section class="mt-8 p-6 bg-gray-50 rounded-lg">
        <h3 class="text-lg font-semibold">Favorite Quote:</h3>
        <blockquote class="italic mt-2">
            "When life gives me lemons, I'll make chocolate cake and leave the bitches wondering how I did it."
        </blockquote>
    </section>

    <!-- Education Section -->
    <section class="mt-8 p-6 bg-white shadow-md rounded-lg">
        <h3 class="text-xl font-bold">Education</h3>
        <ul class="list-disc list-inside mt-4">
            <li>Graduate Diploma in IT - University of Sydney</li>
            <li>Graduate Diploma in Computing - University of Sydney</li>
            <li>B.Tech in Mechanical Engineering - Christ College, Puducherry</li>
            <li>St. Patrick Matric Higher Secondary School, Puducherry</li>
        </ul>
    </section>

    <!-- Work Experience -->
    <section class="mt-8 p-6 bg-white shadow-md rounded-lg">
        <h3 class="text-xl font-bold">Work Experience</h3>
        <table class="table-auto w-full mt-4">
            <thead>
            <tr class="bg-gray-200 text-left">
                <th class="px-4 py-2">Duration</th>
                <th class="px-4 py-2">Designation</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td class="border px-4 py-2">2022-Present</td>
                <td class="border px-4 py-2">National IT & Software Support</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">2021-2022</td>
                <td class="border px-4 py-2">Recruitment Consultant</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">2019-2021</td>
                <td class="border px-4 py-2">Customer Service Team Lead</td>
            </tr>
            <tr>
                <td class="border px-4 py-2">2016-2017</td>
                <td class="border px-4 py-2">Software Tester</td>
            </tr>
            </tbody>
        </table>
    </section>

    <!-- Skills -->
    <section class="mt-8 p-6 bg-white shadow-md rounded-lg">
        <h3 class="text-xl font-bold">Skills</h3>
        <ul class="grid grid-cols-2 gap-4 mt-4">
            <li>Web Development: ⭐⭐⭐⭐</li>
            <li>Photography: ⭐⭐⭐</li>
            <li>Cooking: ⭐⭐⭐</li>
            <li>Fixing Tickets: ⭐⭐⭐⭐</li>
        </ul>
    </section>

    <!-- Projects -->
    <section class="mt-8 p-6 bg-white shadow-md rounded-lg">
        <h3 class="text-xl font-bold">Projects</h3>
        <ul class="list-disc list-inside mt-4">
            <li>Project Zardian: Sample Work</li>
            <li>Sample Contact Book: Sample Work</li>
        </ul>
    </section>

    <!-- Favorite Poem -->
    <section class="mt-8 p-6 bg-gray-50 rounded-lg">
        <h3 class="text-lg font-bold">Favorite Poem</h3>
        <blockquote class="italic mt-4">
            All that is gold does not glitter,<br>
            Not all those who wander are lost;<br>
            The old that is strong does not wither,<br>
            Deep roots are not reached by the frost.<br>
            From the ashes a fire shall be woken,<br>
            A light from the shadows shall spring;<br>
            Renewed shall be blade that was broken,<br>
            The crownless again shall be king.<br>
            <br>— J.R.R. Tolkien
        </blockquote>
    </section>
</main>

<footer class="bg-gray-800 text-white py-4 mt-8 text-center">
    &copy; 2025 Unique Mechanic. All rights reserved.
</footer>
</body>

</html>
