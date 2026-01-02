<x-layout>
    <x-slot:style>{{ $style }}</x-slot>
    <x-slot:title>{{ $title }}</x-slot>
    <article class="article">
        <header class="article-header">
            <a class="article-author" href="/posts?author={{ $post->author->username }}">
                {{ $post->author->name }}
            </a>
            <a class="article-category" href="/posts?category={{ $post->category->slug }}" style="{{ $post->category->color != null ? "color: " . $post->category->color . ";" : "" }}{{ $post->category->background_color != null ? "background-color: " . $post->category->background_color . ";" : "" }}">
                {{ $post->category->name }}
            </a>
            <span class="article-timestamp">
                {{ $post->created_at->diffForHumans() }}
            </span>
            <h3 class="article-title">{{ $post->title }}</h3>
        </header>
        <p class="article-text">{{ $post->body }}</p>
        <a class="article-back" href="/posts">
            <i class="bi bi-arrow-left"></i>
            Back to posts
        </a>
    </article>
</x-layout>
