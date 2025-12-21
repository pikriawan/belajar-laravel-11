<x-layout>
    <x-slot:style>{{ $style }}</x-slot>
    <x-slot:title>{{ $title }}</x-slot>
    @foreach ($posts as $post)
        <article class="article">
            <a class="article-title" href="/posts/{{ $post->slug }}">
                <h3>{{ $post->title }}</h3>
            </a>
            <header class="article-header">
                By
                <a class="article-author" href="/authors/{{ $post->author->username }}">
                    {{ $post->author->name }}
                </a>
                in
                <a class="article-category" href="/categories/{{ $post->category->slug }}">
                    {{ $post->category->name }}
                </a>
                |
                {{ $post->created_at->diffForHumans() }}
            </header>
            <p class="article-text">{{ Str::limit($post->body, 150) }}</p>
            <a class="article-more" href="/posts/{{ $post->slug }}">
                Read more
                <i class="bi bi-arrow-right"></i>
            </a>
        </article>
    @endforeach
</x-layout>
