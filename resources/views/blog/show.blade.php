<x-header>

</x-header>


    <div class="container mx-auto py-12">
        <h1 class="text-4xl font-bold mb-4">{{ $post->title }}</h1>
        <p class="text-gray-500 mb-8">Published on {{ $post->created_at->format('M d, Y') }}</p>
        <img src="{{ $post->image }}" alt="{{ $post->title }}" class="w-full h-96 object-cover mb-8">
        <div class="prose">
            {!! nl2br(e($post->content)) !!}
        </div>
    </div>

