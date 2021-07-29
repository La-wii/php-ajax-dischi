<?php

    $dischi = [
        [
            'title' => "L'unico compromesso",
            'author' => 'Gemitaiz',
            'year' => 2018,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/61JpvPc1pzL._AC_SX679_.jpg',
            'gen' => 'rap'
        ],
        [
            'title' => 'Mentre nessuno guarda',
            'author' => 'Mecna',
            'year' => 2021,
            'poster' => 'https://images.genius.com/d4081b60920ec4c3f95fea42997f4716.1000x1000x1.jpg',
            'gen' => 'hip-hop'
        ],
        [
            'title' => 'La dolce vita',
            'author' => 'Caneda',
            'year' => 2020,
            'poster' => 'https://www.hano.it/wp-content/uploads/Caneda-Cover.jpg',
            'gen' => 'rap'
        ],
        [
            'title' => 'Ye',
            'author' => 'Kanye West',
            'year' => 2018,
            'poster' => 'https://www.melamorsicata.it/wp-content/uploads/2018/06/Kanye_West_Ye-530x529.jpg',
            'gen' => 'rap'
        ],
        [
            'title' => 'Qualcosa cambierà',
            'author' => 'Ghemon',
            'year' => 2015,
            'poster' => 'http://images.genius.com/4e226a1162753891edfaa7556f731490.300x300x1.jpg',
            'gen' => 'hip-hop'
        ],
        [
            'title' => 'Potere',
            'author' => 'Luchè',
            'year' => 1988,
            'poster' => 'https://images-na.ssl-images-amazon.com/images/I/B1FgUFb67DS._AC_SX679_.jpg',
            'gen' => 'rap'
        ],
        [
            'title' => 'Re Mida',
            'author' => 'Lazza',
            'year' => 2019,
            'poster' => 'https://a6p8a2b3.stackpathcdn.com/62DM4Fro61GTGf-xQaKlZ8uzGsY=/300x300/smart/rockol-img/img/foto/upload/re-mida-piano-solo-lazza-cover-ts1570149599.jpeg',
            'gen' => 'hip-hop'
        ],
        [
            'title' => 'Dio',
            'author' => 'Dargen',
            'year' => 2019,
            'poster' => 'https://www.nuovecanzoni.com/wp-content/uploads/2014/12/DiO-cd-cover-Dargen-DAmico.jpg',
            'gen' => 'hip-hop'
        ]
    ];

    header('Content-Type: application/json');
    echo json_encode($dischi);

