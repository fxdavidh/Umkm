<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}">
    <title>UMKM by Videfel</title>
</head>
<body>
    <div class="navbar">
        <div class="nav-left">
            <a href="{{route('viewUmkm')}}">
                <img src="{{asset('public/assets/logo.svg')}}" alt="logo" class="logo">
            </a>
        </div>
        <div class="nav-right">
            <a href="#landing-section" class="nav-item">Home</a>
            <a href="#about-section" class="nav-item">About</a>
            <a href="#partner-section" class="nav-item">Partners</a>
            <a href="#contact-section" class="nav-item">Contact</a>
            <a href="{{route('addUmkm')}}" class="nav-item button">DAFTAR</a>
        </div>
    </div>
    <div id="landing-section">
        <div class="landing-content">
            <h1 class="content-heading">
                Why Join Us?
            </h1>
            <p class="text">
                Website kami sengaja dirancang untuk membantu para pemilik UMKM dalam memasarkan bisnis mereka. Melihat kondisi perekonomian di Indonesia yang terbilang kurang baik, kami merangcang website ini untuk membantu pemerintah dalam meningkatkan pendapatan nasional dimasa pandemic ini.            </p>
            <div class="landing-button">
                <a href="{{route('addUmkm')}}" class="button">
                    GET STARTED
                </a>
            </div>
        </div>
        <div class="landing-img">
            <img src="{{asset('public/assets/landing.svg')}}" alt="landing-illus">
        </div>
    </div>

    <div id="about-section">
        <div class="about-img">
            <img src="{{asset('public/assets/about.svg')}}" alt="about-illus">
        </div>
        <div class="about-content">
            <h1 class="content-heading">
                About Us
            </h1>
            <p class="text">
                UMKM by Videfel adalah website yang menaungi UMKM-UMKM di Jakarta sebagai media pemasaran UMKM. UMKM by Videfel bersifat terbuka terhadap semua UMKM-UMKM di Jakarta yang ingin ikut dipasarkan di dalam website kami.            </p>
        </div>
    </div>

    <div id="partner-section">
        <h1 class="content-heading">
            Partner Kami
        </h1>
        <div class="search-container">
            <form action="{{ route('searchUmkm') }}" method="GET" action="{{asset('/public/assets/regis-lower.svg')}}">
                <input type="text" placeholder="Search.." name="search">
                <button type="submit">Submit</button>
            </form>
        </div>
        <div class="card-container">
            @foreach ($umkms as $key => $umkm)
                @if ($umkm -> verified == 'yes')
                    <div class="umkm-card">
                        <div class="card-upper">
                            <img src="{{asset('storage/'.$umkm -> image)}}" alt="{{'image'.$key}}" class="card-img">
                            <h3 class="umkm-name">
                                {{$umkm -> title}}
                            </h3>
                            <p class="umkm-desc">
                                {{$umkm -> description}}
                            </p>
                        </div>
                        <div class="card-bottom">
                            <div class="contact">
                                <form action="{{route('waAPI', ['id' => $umkm->id])}}" method="GET" enctype="multipart/form-data">
                                    @csrf
                                    <button class="contact-btn">
                                        CONTACT
                                    </button>
                                </form>
                            </div>
                            <h4 class="umkm-kecamatan">
                                {{$umkm -> district}}
                            </h4>
                        </div>
                    </div>
                @endif
            @endforeach
    </div>
    </div>


    <div id="contact-section">
        <div class="contact-img">
            <img src="{{asset('public/assets/contact.svg')}}" alt="contact-illus" class="contact-illus">
        </div>
        <div class="contact-content">
            <h1 class="content-heading">
                Contact Us
            </h1>
            <p class="text"> Jln. Kebon Kacang Raya No. 25 Tanah Abang</p>
            <p class="text">Jakarta Pusat, Indonesia</p>
            <p class="text"> Kode Pos 10240</p>
            <p class="text">+628118587938</p>
        </div>
    </div>

    <div id="footer">
        <div class="foot-left">
            <p>Copyright © Videfel 2020</p>
        </div>
        <div class="foot-right">
            <a href="#">
                <img src="{{asset('public/assets/Path 184.svg')}}" alt="fb" class="sosmed">
            </a>
            <a href="#">
                <img src="{{asset('public/assets/Path 185.svg')}}" alt="twt" class="sosmed">
            </a>
            <a href="#">
                <img src="{{asset('public/assets/Path 186.svg')}}" alt="yt" class="sosmed">
            </a>
            <a href="#">
                <img src="{{asset('public/assets/Path 187.svg')}}" alt="ig" class="sosmed">
            </a>
            <a href="#">
                <img src="{{asset('public/assets/Path 188.svg')}}" alt="linkedin" class="sosmed">
            </a>
        </div>
    </div>

</body>
</html>