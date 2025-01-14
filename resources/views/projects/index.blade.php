<!-- resources/views/projects/index.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projects</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-50">
<div class="container mx-auto px-6 py-12">
    <h1 class="text-4xl font-bold text-center text-gray-800 mb-8">My Projects</h1>
    <div class="grid gap-8 md:grid-cols-2 lg:grid-cols-3">
        @foreach ($projects as $project)
            <div class="bg-white rounded-lg shadow-md overflow-hidden">
                <img class="w-full h-48 object-cover" src="{{ $project->image }}" alt="{{ $project->title }}">
                <div class="p-6">
                    <h2 class="text-xl font-semibold text-gray-800">{{ $project->title }}</h2>
                    <p class="text-gray-600 mt-2">{{ $project->description }}</p>
                    <p class="mt-4 text-sm font-medium text-indigo-600">Tech Stack: {{ $project->tech_stack }}</p>
                    <div class="mt-4 flex space-x-4">
                        @if ($project->live_demo_url)
                            <a href="{{ $project->live_demo_url }}" target="_blank" class="text-blue-500 hover:underline">
                                Live Demo
                            </a>
                        @endif
                        @if ($project->github_url)
                            <a href="{{ $project->github_url }}" target="_blank" class="text-gray-500 hover:underline">
                                GitHub
                            </a>
                        @endif
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
</body>

</html>
