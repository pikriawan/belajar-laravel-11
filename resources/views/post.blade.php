<x-layout>
    <x-slot:style>{{ $style }}</x-slot>
    <x-slot:title>{{ $title }}</x-slot>
    <article class="article">
        <h3 class="article-title">{{ $post->title }}</h3>
        <header class="article-header">
            By
            <a class="article-author" href="/authors/{{ $post->author->id }}">
                {{ $post->author->name }}
            </a>
            in
            <a class="article-category" href="/categories/{{ $post->category->slug }}">
                {{ $post->category->name }}
            </a>
            |
            {{ $post->created_at->diffForHumans() }}
        </header>
        <p class="article-text">{{ $post->body }}</p>
        <a class="article-back" href="/posts">
            <i class="bi bi-arrow-left"></i>
            Back to posts
        </a>
    </article>
</x-layout>
