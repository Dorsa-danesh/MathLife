<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" dir="rtl">
<head>
  <meta charset="UTF-8">
  <title>MathLife | خانه</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')

  <!-- Bootstrap 5 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.rtl.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">


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
          <li class="nav-item"><a class="nav-link active text-orange" href="/">خانه</a></li>
          <li class="nav-item"><a class="nav-link" href="/about">درباره ما</a></li>

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

  <!-- header-->
  <section class="hero">
    <div class="container">
      <h1><i class="fas fa-calculator"></i> MathLife</h1>
      <p>یادگیری ریاضی پایه نهم به روشی جذاب و سرگرم‌کننده!</p>
      <a href="/register" class="btn btn-orange">شروع یادگیری</a>
    </div>
  </section>

  <!-- aa container-->
  <section class="py-5">
    <div class="container">
      <div class="row g-4 text-center">
        <div class="col-md-4">
          <div class="feature-box">
            <i class="fas fa-book-open"></i>
            <h5 class="mt-3">درس‌نامه‌های کامل</h5>
            <p>تمام فصل‌های کتاب ریاضی با توضیحات ساده و قابل فهم برای همه!</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <i class="fas fa-pen-to-square"></i>
            <h5 class="mt-3">آزمون‌های تعاملی</h5>
            <p>بعد از هر درس می‌تونی خودتو محک بزنی با آزمون‌های جذاب!</p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="feature-box">
            <i class="fas fa-chart-line"></i>
            <h5 class="mt-3">پیگیری پیشرفت</h5>
            <p> ببین کجا قوی هستی و کجا نیاز به تمرین بیشتر داری.</p>
          </div>
        </div>
      </div>
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
