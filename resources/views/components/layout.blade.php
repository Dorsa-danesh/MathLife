<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MathLife</title>

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">
    <!-- لوگو -->
    <link rel="icon" type="image/png" href="logo.png">

    @vite('resources/css/app.css')
</head>


<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light py-3">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="/">
                <img src="{{ asset('img/SnapBG.ai_1743872175035.svg') }}" alt="">
            </a>
            <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                <li class="nav-item"><a class="nav-link text-orange" href="/">خانه</a></li>
                <li class="nav-item"><a class="nav-link " href="/about">درباره ما</a></li>

                @guest
                    <li class="nav-item"><a class="nav-link" href="/login">ورود</a></li>
                    <li class="nav-item"><a class="nav-link" href="/register">ثبت‌نام</a></li>                   
                @endguest
                @auth
                    <li class="nav-item"><a class="nav-link" href="/lessons">درس‌ها</a></li>                
                    <form class="nav-item" action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button class="nav-link">خروج</button>
                    </form>
                @endauth
                </ul>
            </div>
        </div>
    </nav>
    
    <section>
        <div class="container">
            {{ $slot }}
        </div>
    </section>
    <!-- پانوشت -->
    <footer>
        <div class="container">
        <p>© 2025 MathLife - طراحی شده با ❤️ برای آموزش ریاضی</p>
        </div>
    </footer>

    <!-- اسکریپت‌های بوت‌استرپ -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>