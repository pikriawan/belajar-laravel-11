<header class="header">
    <h1 class="brand">Fikri Setiawan</h1>
    <nav class="navbar">
        <x-nav-link href="/" :active="request()->is('/')">Home</x-nav-link>
        <x-nav-link href="/blog" :active="request()->is('blog')">Blog</x-nav-link>
        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
    </nav>
    <h2 class="page-title">{{ $slot }}</h2>
</header>
