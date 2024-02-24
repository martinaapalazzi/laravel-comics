@php
    $links = [
        [
            'url' => '/',
            'label' => 'HOME',
            'active' => true,
        ],
        [
            'url' => '/charachters',
            'label' => 'CHARACTERS',
            'active' => true,
        ],
        [
            'url' => '/comics',
            'label' => 'COMICS',
            'active' => false,
        ],
        [
            'url' => '/movies',
            'label' => 'MOVIES',
            'active' => false,
        ],
        [
            'url' => '/tv',
            'label' => 'TV',
            'active' => false,
        ],
        [
            'url' => '/games',
            'label' => 'GAMES',
            'active' => false,
        ],
        [
            'url' => '/collectibles',
            'label' => 'COLLECTIBLES',
            'active' => false,
        ],
        [
            'url' => '/videos',
            'label' => 'VIDEOS',
            'active' => false,
        ],
        [
            'url' => '/fans',
            'label' => 'FANS',
            'active' => false,
        ],
        [
            'url' => '/news',
            'label' => 'NEWS',
            'active' => false,
        ],
        [
            'url' => '/shop',
            'label' => 'SHOP',
            'active' => false,
        ]
    ];
@endphp

<header>
    <div class="header-container d-flex align-items-center justify-content-around p-4">
        <div class="img-logo">
            <img src="{{ Vite::asset('public/images/dc-logo.png') }}" alt="logo"> 
        </div>
        <nav>
            <ul class="d-flex align-items-center text-decoration-none">
            @foreach ($links as $link)
                <li>
                    <a class="header-links text-decoration-none" href="{{ $link['url'] }}">
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
