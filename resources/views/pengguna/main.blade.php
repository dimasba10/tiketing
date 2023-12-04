<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    
    <title>TiketKu</title>
    
    
    {{-- Style Start --}}
    {{-- Style End --}}




    {{-- Fonts --}}
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap" rel="stylesheet">
    {{-- Feather Icon --}}
    <script src="https://unpkg.com/feather-icons"></script>
    

    {{-- MyStyle --}}
    
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    


</head>
<body>

    {{-- Navbar Start --}}
        <nav class="navbar">
            <a href="#" class="navbar-logo">TiketKu</a>

            <div class="navbar-nav">
                <a href="#home">Home</a>
                <a href="#menu">Pemesanan</a>
                {{-- <a href="">Pembayaran</a> --}}
                <a href="#about">Tentang Kami</a>
                {{-- <a href="logout">Logout</a> --}}
            </div>

            <div class="navbar-extra">
                <a href="" id="search"><i data-feather="search"></i></a>
                <a href="" id="hamburger-menu"><i data-feather="menu"></i></a>
            </div>
        </nav>
    {{-- Navbar End --}}

    {{-- Hero Section Start --}}
        <section class="hero" id="home">
            <main class="content">
                <h1>Ayo Naik Kereta Rek</h1>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Est, animi!</p>
                <a href="/pemesanan" class="cta">Gasken!!</a>
            </main>
        </section>
    {{-- Hero Section End --}}

    {{-- About Section Start --}}
        <section id="about" class="about">
            <h2><span>Tentang</span> Kami</h2>

            <div class="row">
                <div class="about-img">
                    <img src={{ asset("img/tentang-kami.jpg") }} alt="Tentang Kami">
                </div>
                <div class="content">
                    <h3>Kenapa Harus TiketKu ?</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Distinctio, reiciendis maiores? Harum ea odit dicta quis, rerum tempore vitae dolore.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Commodi quas laborum vero unde omnis voluptatum qui dolore deserunt, sunt impedit!</p>
                </div>
            </div>
        </section>
    {{-- About Section End --}}

    {{-- Pemesanan Section Start --}}
        <section id="menu" class="menu">
            <h2><span>Pesan</span>  Disini</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat aut labore earum, itaque pariatur asperiores.</p>
            <a href="/pemesanan" class="cta">Gasken!!</a>
        </section>
    {{-- Pemesanan Section End --}}


    {{-- Fetaher Icons --}}
    <script>
        feather.replace();
    </script>

    {{-- My JavaScript --}}
    <script src="js/script.js"></script>

</body>
</html>