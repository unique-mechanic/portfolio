<x-header>

</x-header>

    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold mb-8">Blog</h1>
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach ($posts as $post)
                <div class="bg-white shadow-lg rounded-lg overflow-hidden">
                    <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-24 object-cover">
                    <div class="p-6">
                        <h2 class="text-2xl font-semibold">
                            <a href="{{ route('blog.show', $post->slug) }}">{{ $post->title }}</a>
                        </h2>
                        <p class="mt-4 text-gray-600">{{ Str::limit($post->content, 150) }}</p>
                        <a href="{{ route('blog.show', $post->slug) }}" class="mt-4 inline-block text-indigo-600 font-bold">Read More</a>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="mt-8">
             //$posts->links()
        </div>
    </div>

