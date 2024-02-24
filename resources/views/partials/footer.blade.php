@php
    $dccomics = [
        [
            'link' => 'Characters',
        ],
        [
            'link' => 'Comics',
        ],
        [
            'link' => 'Movies',
        ],
        [
            'link' => 'Tv',
        ],
        [
            'link' => 'Games',
        ],
        [
            'link' => 'Videos',
        ],
        [
            'link' => 'News',
        ]
    ];
    $shops = [
        [
            'link' => 'Shop DC',
        ],
        [
            'link' => 'Shop DC Collectibles',
        ]
    ];
    $dcs = [
        [
            'link' => 'Terms of Use',
        ],
        [
            'link' => 'Privacy policy',
        ],
        [
            'link' => 'Add choices',
        ],
        [
            'link' => 'Advertising',
        ],
        [
            'link' => 'Jobs',
        ],
        [
            'link' => 'Subscriptions',
        ],
        [
            'link' => 'Talent Workshops',
        ],
        [
            'link' => 'CPSC Certificates',
        ],
        [
            'link' => 'Ratings',
        ],
        [
            'link' => 'Shop Help',
        ],
        [
            'link' => 'Contact us',
        ]
    ];
    $sites = [
        [
            'link' => 'DC',
        ],
        [
            'link' => 'MAD Magazine',
        ],
        [
            'link' => 'DC Kids',
        ],
        [
            'link' => 'DC Universe',
        ],
        [
            'link' => 'DC Power Visa',
        ]
    ];
@endphp

<footer>
    <div class="bg_footer">
        <div class="container">
                <div class="big-footer d-flex">
                    <div class="column"> 
                        <h3>DC COMICS</h3>
                        <ul>
                            @foreach ( $dccomics as $dccomic)
                                <li>
                                    <a class="" href="">{{ $dccomic['link'] }}</a>
                                </li>
                            @endforeach              
                        </ul>
                        <h3>SHOP</h3>
                        <ul>
                            @foreach ( $shops as $shop)
                                <li>
                                    <a class="" href="">{{ $shop['link'] }}</a>
                                </li>
                            @endforeach              
                        </ul>
                    </div>
                    <div class="column">
                        <h3>DC</h3>
                        <ul>
                            @foreach ( $dcs as $dc)
                                <li>
                                    <a class="" href="">{{ $dc['link'] }}</a>
                                </li>
                            @endforeach              
                        </ul>
                    </div>
                    <div class="column">
                        <h3>SITES</h3>
                        <ul>
                            @foreach ( $sites as $site)
                            <li>
                                <a class="" href="">{{ $site['link'] }}</a>
                            </li>
                            @endforeach              
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
