<x-layout>
    <x-slot:style>{{ $style }}</x-slot>
    <x-slot:title>{{ $title }}</x-slot>
    <form class="search-form">
        @if (request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}">
        @endif
        @if (request('author'))
            <input type="hidden" name="author" value="{{ request('author') }}">
        @endif
        <input class="search-text-field" type="search" id="searchTextField" name="search" placeholder="Search for article">
        <button class="search-button">Search</button>
    </form>
    <div class="article-list">
        @forelse ($posts as $post)
            <article class="article">
                    <div class="article-top">
                    <header class="article-header">
                        <a class="article-category" href="/posts?category={{ $post->category->slug }}" style="{{ $post->category->color != null ? "color: " . $post->category->color . ";" : "" }}{{ $post->category->background_color != null ? "background-color: " . $post->category->background_color . ";" : "" }}">
                            {{ $post->category->name }}
                        </a>
                        <span class="article-timestamp">
                            {{ $post->created_at->diffForHumans() }}
                        </span>
                    </header>
                    <a class="article-title" href="/posts/{{ $post->slug }}">
                        <h3>{{ $post->title }}</h3>
                    </a>
                    <p class="article-text">{{ Str::limit($post->body, 150) }}</p>
                </div>
                <footer class="article-footer">
                    <a class="article-author" href="/posts?author={{ $post->author->username }}">
                        {{ $post->author->name }}
                    </a>
                    <a class="article-more" href="/posts/{{ $post->slug }}">
                        Read more
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </footer>
            </article>
        @empty
            <div class="article-empty">
                <p>Article not found!</p>
                <a class="article-back" href="/posts">
                    <i class="bi bi-arrow-left"></i>
                    Back to all posts
                </a>
            </div>
        @endforelse
    </div>
</x-layout>
