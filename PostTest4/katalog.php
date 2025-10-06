<section id="koleksi">
    <h2>Koleksi Terbaru</h2>

    <?php
    $koleksi = [
        [
            "nama" => "Iron Man Mark 85 Figure",
            "gambar" => "Iron Man Mark 85 Figure.jpg",
            "deskripsi" => "Figure skala 1:6 dengan detail armor dari film Avengers: Endgame."
        ],
        [
            "nama" => "Captain America Shield Replica",
            "gambar" => "Captain America Shield Replica.jpg",
            "deskripsi" => "Replika perisai Captain America ukuran asli berbahan metal."
        ],
        [
            "nama" => "Spider-Man Statue",
            "gambar" => "Spider-Man Statue.jpg",
            "deskripsi" => "Patung Spider-Man edisi terbatas dengan pose ikonik di gedung kota New York."
        ]
    ];

    foreach ($koleksi as $item) {
        echo "<article class='card'>
                <img src='{$item['gambar']}' alt='{$item['nama']}'>
                <h3>{$item['nama']}</h3>
                <p>{$item['deskripsi']}</p>
              </article>";
    }
    ?>
</section>
