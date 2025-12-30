<x-layout>
    <x-slot:style>{{ $style }}</x-slot>
    <x-slot:title>{{ $title }}</x-slot>
    @foreach ($posts as $post)
        <article class="article">
            <div class="article-top">
                <header class="article-header">
                    <a class="article-category" href="/categories/{{ $post->category->slug }}" style="{{ $post->category->color != null ? "color: " . $post->category->color . ";" : "" }}{{ $post->category->background_color != null ? "background-color: " . $post->category->background_color . ";" : "" }}">
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
                <a class="article-author" href="/authors/{{ $post->author->username }}">
                    {{ $post->author->name }}
                </a>
                <a class="article-more" href="/posts/{{ $post->slug }}">
                    Read more
                    <i class="bi bi-arrow-right"></i>
                </a>
            </footer>
        </article>
    @endforeach
</x-layout>
