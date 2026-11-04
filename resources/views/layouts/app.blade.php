<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('judul', 'gausah beli, soalnya enak')|{{ config('app.name') }}</title>
    <meta name="description"
        content="Biji dari petani Flores, Kerinci, dan Gayo kami sangrai sendiri dalam batch 12 kilo, lalu kami seduh di dua kedai dan kirim ke rumah Anda.">
    <link rel="icon"
        href="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%2064%2064%22%3E%3Crect%20width%3D%2264%22%20height%3D%2264%22%20rx%3D%2214%22%20fill%3D%22%23333333%22%2F%3E%3Ctext%20x%3D%2232%22%20y%3D%2244%22%20font-family%3D%22system-ui%2Csans-serif%22%20font-size%3D%2234%22%20font-weight%3D%22700%22%20text-anchor%3D%22middle%22%20fill%3D%22%23ffffff%22%3EK%3C%2Ftext%3E%3C%2Fsvg%3E">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700&family=Inter:wght@300;400;500;600;700;800&display=swap">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body id="top">
    <div class="site fx-on fx-r-up fx-s-sedang fx-sticky fx-m">
        <a class="rk-skip" href="#hero">Lewati ke isi utama</a>
        <x-navbar />
        <main id="isi">
            @yield('konten')
        </main>
        <x-footer />

    </div>
    </div>
</body>

</html>
