@php
    $links = [
        [
            'url' => '/',
            'label' => 'Home',
            'active' => true,
        ],
        [
            'url' => '/charachters',
            'label' => 'charachters',
            'active' => true,
        ],
        [
            'url' => '/comics',
            'label' => 'comics',
            'active' => false,
        ],
        [
            'url' => '/movies',
            'label' => 'movies',
            'active' => false,
        ],
        [
            'url' => '/tv',
            'label' => 'tv',
            'active' => false,
        ],
        [
            'url' => '/games',
            'label' => 'games',
            'active' => false,
        ],
        [
            'url' => '/collectibles',
            'label' => 'collectibles',
            'active' => false,
        ],
        [
            'url' => '/videos',
            'label' => 'videos',
            'active' => false,
        ],
        [
            'url' => '/comics',
            'label' => 'comics',
            'active' => false,
        ],
        [
            'url' => '/fans',
            'label' => 'fans',
            'active' => false,
        ],
        [
            'url' => '/news',
            'label' => 'news',
            'active' => false,
        ],
        [
            'url' => '/shop',
            'label' => 'shop',
            'active' => false,
        ]
    ];
@endphp

<header>
    <div class="header-container d-flex">
        <div class="img-logo">
            <img src="{{ Vite::asset('public/images/dc-logo.png') }}" alt="logo"> 
        </div>
        <nav class="d-flex">
            <ul>
            @foreach ($links as $link)
                <li>
                    <a href="{{ $link['url'] }}">
                        {{ $link['label'] }}
                    </a>
                </li>
            @endforeach
            </ul>
        </nav>
        <div class="searchbar">
            <i class="fa-solid fa-magnifying-glass"></i>
            <input type="text" id="search" name="search" placeholder="Search...">
        </div>
    </div>
</header>
