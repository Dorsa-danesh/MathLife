<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

You may also try the [Laravel Bootcamp](https://bootcamp.laravel.com), where you will be guided through building a modern Laravel application from scratch.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).

# 🚀 MathLife
این پروژه یک سیستم مدیریت آموزشی ریاضی است که با استفاده از فریم‌ورک لاراول توسعه داده شده است. هدف این پروژه فراهم کردن یک بستر ساده و کاربردی برای آموزش مفاهیم پایه ریاضی نهم است.

---

## ⚙️ پیش‌نیازها
برای اجرای این پروژه، لازم است نرم‌افزارهای زیر روی سیستم شما نصب شده باشند:

- **Laragon:** (توصیه شده) یک محیط توسعه محلی شامل Apache, MySQL, PHP
- **Composer:** ابزار مدیریت پکیج‌های PHP
- **Node.js و npm:** برای مدیریت وابستگی‌های Front-end

---

## 🛠️ نصب و راه‌اندازی

برای راه‌اندازی پروژه، مراحل زیر را به ترتیب دنبال کنید.

### **1. دانلود و نصب لاراگون**
برای دانلود لاراگون کافیست روی لینک مقابل کلیک کنید و به [صفحه دانلود لاراگون] (https://laragon.org/download) بروید. سپس روی لینک دانلود کلیک کنید تا دانلود شروع شود.

بعد از دانلود laragon، فایلی که فرمت .exe دارد را اجرا کنید. با این کار پنجره ای باز می‌شود که در آن بعد از انتخاب زبان مدنظر خود (در حالت عادی انگلیسی) “OK” را بزنید.

در این مرحله محل نصب لاراگون را در یک درایو سریع سیستم خود انتخاب کنید ترجیحاً محل نصب را تغییر ندهید. بعد از انتخاب محل ذخیره، گزینه “Next” را انتخاب کنید.
در این پنجره اگر مایلید لاراگون با اجرا شدن ویندوز به طور خودکار اجرا شود، گزینه اول را در حالت تیک خورده نگه دارید. گزینه دوم را نیز بهتر است در حالتی که تیک دارد، باقی بگذارید. 

در مورد گزینه آخر نیز چنانچه ویرایشگر متن پیشرفته‌ای را روی سیستم خود نصب نکرده اید، این گزینه را تیک زده شده باقی بگذارید. با این کار گزینه “++Notepad” به عنوان یک ادیتور متن حرفه‌ای به منوی لاراگون اضافه خواهد شد.
<img src="README/1.webp" width="400" alt="Laragon install">

بعد از انتخاب این تنظیمات، روی “Next” کلیک کنید.
در پنجره بعد نیز روی “Install” کلیک کنید تا فرآیند نصب آغاز شود.

بعد از اتمام نصب، پنجره ای را می بینید که باید “Finish” را بزنید. با این کار اگر گزینه اول را انتخاب کرده باشید، سیستم تان Restart خواهد شد.  حالا می توانید آیکون لاراگون روی دسکتاپ خود مشاهده کنید.

### **2. قرار دادن فایل‌های پروژه**
ابتدا فایل های پروژه را از لینک گیت هاب مطابق تصویر زیر دانلود کنید.
<img src="README/3.webp" width="400" alt="Laragon menu">
سپس فایل‌های پروژه را از حالت فشرده خارج کرده و در پوشه `www` نرم‌افزار **Laragon** قرار دهید. این پوشه معمولاً در مسیر نصب Laragon قرار دارد (معمولا `C:\laragon\www`).



### **3. اجرای Laragon**

نرم‌افزار Laragon را اجرا کرده و روی دکمه **"Start All"** کلیک کنید تا سرویس‌های Apache و MySQL فعال شوند.




### **4. تنظیمات env**

فایل `.env.example` را به `.env` تغییر نام دهید. 

### **5. نصب وابستگی‌های پروژه**

1.  **نصب پکیج‌های PHP:**
    از این لینک به صفحه زیر رفته و [composer](https://getcomposer.org/download/) را نصب کنید.
    <img src="README/2.webp" width="400" alt="Laragon menu">

2.  **ایجاد کلید رمزنگاری برای لاراول:**
    برای نصب Node.js می‌توانید از وب‌سایت رسمی آن استفاده کنید.
 به وب‌سایت [Node.js](https://nodejs.org/en/download) بروید.
نسخه مناسب سیستم خود را انتخاب کنید. npm را تغییر ندهید

 فایل دانلود شده را اجرا کنید. در طول فرآیند نصب، گزینه "Automatically install the necessary tools" را انتخاب کنید تا ابزارهای مورد نیاز مانند Python و Visual Studio Build Tools نیز نصب شوند.
 از نصب صحیح همه ی موارد مطمئن شوید.

### **6. اجرای پروژه**
یک ترمینال در پوشه پروژه باز کنید و دستورات زیر را به ترتیب در آن اجرا کنید:
2.  **ایجاد کلید رمزنگاری برای لاراول:**
    ```bash
    php artisan key:generate
    ```
3.  **اجرای Migration و Seed:**
    ```bash
    php artisan migrate --seed
    ```
    این دستور ساختار جداول پایگاه داده را ایجاد کرده و اطلاعات اولیه را در آن‌ها قرار می‌دهد.
4.  **نصب وابستگی‌های Front-end:**
    ```bash
    npm install
    ```
5.  **کامپایل کردن فایل‌های Front-end :**
    ```bash
    npm run dev
    ```
6.  **اجرای پروژه :**
    ```bash
    php artisan serve
    ```
    سپس از طریق آدرس داده شده به پروژه دسترسی دارید.


---

## 🤝 مشارکت
اگر قصد دارید به این پروژه کمک کنید، لطفاً با من در ارتباط باشید.
dorsadanesh1400@gmail.com

---

## 📝 مجوز
این پروژه تحت مجوز MIT منتشر شده است.
