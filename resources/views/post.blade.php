<x-layout>
    <x-slot:style>{{ $style }}</x-slot>
    <x-slot:title>{{ $title }}</x-slot>
    <article class="article">
        <h3 class="article-title">{{ $post['title'] }}</h3>
        <header class="article-header">
            <a class="article-author" href="#">{{ $post['author'] }}</a> | 1 October 2025
        </header>
        <p class="article-text">{{ $post['body'] }}</p>
        <a class="article-back" href="/posts">
            <i class="bi bi-arrow-left"></i>
            Back to posts
        </a>
    </article>
</x-layout>
