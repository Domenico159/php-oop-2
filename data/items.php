
<?php

require_once __DIR__ . './main.php';


$item1 = new Items();
$item1->name = 'PS5';
$item1->details = 'La PlayStation 5 utilizza un processore Zen 2 di AMD con 8 core a una frequenza variabile limitata a 3,5 GHz. La GPU è un sistema su chip (SoC) personalizzato, basato su RDNA 2 di AMD, con 36 unità di calcolo funzionanti a frequenza variabile, limitato a 2,23 GHz e capace di 10,28 TFLOPS.';
$item1->img = 'https://www.nextplayer.it/wp-content/uploads/2020/08/Vh6eSp4siwggK7RUys72nP.jpg';
$item1->price = 499;

$item2 = new Items();
$item2->name = 'Xbox Series X';
$item2->details = 'Xbox Series X arriverà il 10 novembre 2020 al prezzo di 399€, si tratta della console top di gamma della nuova generazione di Microsoft, piattaforma che affiancherà la sorellina minore Xbox Series S. Sin dalla sua creazione e dal nome in codice, Project Scarlett, Xbox Series X è nata per essere la console di riferimento per il gaming da salotto, un posto dove poter giocare a una libreria infinita di titoli, ripercorrendo anche le passate generazioni';
$item2->img = 'https://www.corriere.it/methode_image/2020/11/04/Tecnologia/Foto%20Tecnologia%20-%20Trattate/xbox-series-x-ktNI--656x492@Corriere-Web-Sezioni.jpg';
$item2->price = 399;

$item3 = new Items();
$item3->name = 'RTX 3060';
$item3->details = 'La GeForce RTX 3060 è una scheda grafica del segmento delle prestazioni di NVIDIA, lanciata nel gennaio 2021. Costruita sul processo a 8 nm e basata sul processore grafico GA106, nella sua variante GA106-300-A1, la scheda supporta DirectX 12 Ultimate. Ciò garantisce che tutti i giochi moderni funzioneranno su GeForce RTX 3060.';
$item3->img = 'https://i.ytimg.com/vi/SGK0asyRUyg/maxresdefault.jpg';
$item3->price = 599;

$item4 = new Items();
$item4->name = 'RTX 3070';
$item4->details = 'La GeForce RTX 3070 Founders Edition è basata su una GPU GA104 dotata di 5888 CUDA core a 1,5 GHz di base e 1,73 GHz in boost, affiancati da 8 GB di memoria GDDR6 a 14 Gbps su bus a 256 bit. Il TGP è di 220W.';
$item4->img = 'https://www.annoonci.it/adpics_new/48ae0de23e71fbc0268491e11bf4e3ea.jpg';
$item4->price = 799;

$item5 = new Items();
$item5->name = 'RTX 3080';
$item5->details = "Le schede grafiche GeForce RTX™ 3080 Ti e RTX 3080 offrono le prestazioni ultra che i giocatori bramano grazie ad Ampere, l'architettura RTX di seconda generazione di NVIDIA. Sono costruite con RT Core e Tensor Core potenziati, nuovi multiprocessori di streaming e una memoria G6X superveloce, il tutto per offrirti una straordinaria esperienza di gioco.";
$item5->img = 'https://www.annoonci.it/adpics_new/48ae0de23e71fbc0268491e11bf4e3ea.jpg';
$item5->price = 999;

$item6 = new Items();
$item6->name = 'RTX 3090';
$item6->details = "La GeForce RTXTM 3090 è una GPU feroce di grandi dimensioni (BFGPU) con prestazioni di classe TITAN. È alimentato da Ampere, l'architettura RTX di seconda generazione di NVIDIA, raddoppiando il ray tracing e le prestazioni IA con RT Core migliorati, core Tensor e nuovi multiprocessori in streaming.";
$item6->img = 'https://images.everyeye.it/img-articoli/nvidia-rtx-3090-recensione-punto-d-incontro-gaming-produttivita-recensione-v10-50458-1280x16.jpg';
$item6->price = 1399;


$item7 = new Items();
$item7->name = 'Asus ROG Strix Z390-E gaming';
$item7->details = "Descrizione. Asus ROG Strix Z390-E gaming scheda madre Intel Z390 ATX con Aura Sync, 802.11ac Wi-Fi, supporto DDR4 a 4266 MHz +, doppio M. 2 con dissipatore di calore, SATA 6 Gbps, HDMI e USB 3.1 Gen 2.";
$item7->img = 'https://www.tadanstore.it/presta17/147-medium_default/mb-intel-asus-rog-strix-z390-e-gaming-skt-1151-v2.jpg';
$item7->price = 325;


$item8 = new Items();
$item8->name = 'Intel CORE i9 10TH';
$item8->details = "Goditi un fantastico gameplay con un valore elevato di fotogrammi al secondo durante lo streaming e la registrazione, grazie a una frequenza fino a 5,3 GHz. Tecnologia Turbo e accelerazione grazie alla memoria Intel® Optane™. Sia a casa che in movimento, i processori Intel® Core™ di decima generazione overcloccabili potenziano i notebook e i sistemi desktop più all'avanguardia per il gaming.";
$item8->img = 'https://www.hwupgrade.it/articoli/5723/448.jpg';
$item8->price = 549;


$items = [$item1, $item2, $item3, $item4, $item5, $item6, $item7, $item8];
