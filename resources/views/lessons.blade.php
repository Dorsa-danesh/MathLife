<html lang="fa">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>دروس ریاضی نهم</title>
    @vite('resources/css/app.css')
    <style>
        .container {
            display: flex;
            justify-content: space-between;
        }
    </style>
    <script>
        function toggleLessons(familyId) {
            var lessons = document.getElementById(familyId);
            if (lessons.style.display === "block") {
                lessons.style.display = "none";
            } else {
                lessons.style.display = "block";
            }
        }

        function showLesson(lessonId) {
            // مخفی کردن تمام درس‌ها
            var lessons = document.querySelectorAll('.lesson-content');
            lessons.forEach(function(lesson) {
                lesson.style.display = 'none';
            });
            
            // نمایش درس انتخاب شده
            var selectedLesson = document.getElementById(lessonId);
            selectedLesson.style.display = 'block';
        }
    </script>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <div class="sidebar">
            <a href="/"><img src="img\SnapBG.ai_1743872175035.svg" alt="" style="height: 45px;"></a>
            <h3>دروس ریاضی نهم</h3>
            <ul>
                <!-- فصل اول -->
                <li>
                    <a href="javascript:void(0)" onclick="toggleLessons('chapter1-lessons')">فصل اول</a>
                    <ul id="chapter1-lessons" style="display:none;">
                        <li><a href="javascript:void(0)" onclick="showLesson('lesson1-1')">درس اول</a></li>
                        <li><a href="javascript:void(0)" onclick="showLesson('lesson1-2')">درس دوم</a></li>
                        <!-- <li><a href="javascript:void(0)" onclick="showLesson('lesson1-3')">درس سوم</a></li>
                        <li><a href="javascript:void(0)" onclick="showLesson('lesson1-4')">درس چهارم</a></li> -->
                    </ul>
                </li>
                <!-- فصل دوم -->
                <!-- <li>
                    <a href="javascript:void(0)" onclick="toggleLessons('chapter2-lessons')">فصل دوم</a>
                    <ul id="chapter2-lessons" style="display:none;">
                        <li><a href="javascript:void(0)" onclick="showLesson('lesson2-1')">درس اول</a></li>
                        <li><a href="javascript:void(0)" onclick="showLesson('lesson2-2')">درس دوم</a></li>
                        <li><a href="javascript:void(0)" onclick="showLesson('lesson2-3')">درس سوم</a></li>
                    </ul>
                </li> -->
            </ul>
        </div>

        <!-- Lesson Content -->
        <div class="lesson-content" id="lesson1-1" style="display: none;">
            <h2>عنوان درس: مجموعه ها</h2>
            <h3>معرفی مجموعه ها</h3>
            <p>هر دسته از اشیا مشخص و متمایز را یک مجموعه می نامند و ان اشیا را اعضای مجموعه می نامند</p>
            <p>
                مجموعه ها را با حروف بزرگ انگلیسی نامگذاری می کنیم و اعضای آنها را داخل آکالد {} می نویسیم و اعضا را با , از هم جدا میکنیم. در
                نمایش مجموعه ها ترتیب نوشتن عضوها مهم نیست و با جابجایی عضوهای یک مجموعه ، مجموعه جدیدی
                به دست نمی آید. <br>
                مثال : {1,2,3} = {1,2,2,3,1} {5,7,3} = 3,5,7<br>
                نکته: اعضای یک مجموعه باید مشخص باشند. مثال عبارت " تعدادی از اعداد اول " بیانگر یک مجموعه نیست
                زیرا مشخص نیست اعضای آن .
            </p>
            <p> عضویت در یک مجموعه را به شکل زیر نمایش می دهیم</p>
            <img src="img/ozviate.png" alt="" style="high:56px; width:390px;">
            <p>  نمایش مجموعه با نمودار ون:
            مجموعه ها را می توان با استفاده از منحنی ها یا خط شکسته بسته نمایش داد</p>
            <img src="img/vanplot.png" alt="" style="high:70px; width:410px;">
            <p>مجموعه تهی:
            مجموعه ای که عضو نداشته باشد تهی نام دارد و با علامت {}یا ∅ نمایش داده می شود</p>
            <h3>کاربردها</h3>
            <p>مجموعه‌ها از مفاهیم پایه ریاضیات هستند و کاربردهای گسترده‌ای در حوزه‌های مختلف دارند، از برنامه‌نویسی و علوم کامپیوتر گرفته تا پزشکی، اقتصاد و حتی زبان‌شناسی. در ادامه چند کاربرد مجموعه ها در حوزه‌های مختلف را بررسی می‌کنیم.</p>
            <ul>
                <li>
                    <!-- each part -->
                    <h5>برنامه‌نویسی و علوم کامپیوتر</h5>
                    <p>مجموعه‌ها در ساختار داده‌ها و الگوریتم‌ها نقش کلیدی دارند به ویژه در ذخیره داده‌های منحصربه‌فرد </p>
                    <ol>
                        <li>Python، نوع داده `set` برای ذخیره عناصر غیرتکراری (درواقع همان مجموعه) استفاده می‌شود</li>
                        <li>در پایگاه داده ها نیز ما داده های غیر تکراری را ذخیره کرده و بررسی میکنیم و عملیات هایی مانند JOIN انجام میدهیم که درواقع همان اجتماع مجموعه هاست (در دروس بعد یاد خواهید گرفت)</li>
                    </ol>
                </li>

                <li>
                    <!-- each part -->
                    <h5>پزشکی و زیست‌شناسی</h5>
                    <ol>
                        <li>طبقه‌بندی بیماران :مجموعه‌ای از بیماران با علائم مشابه (مثلاً همه بیماران مبتلا به دیابت نوع ۲) </li>
                        <li>تحلیل داده‌های ژنتیکی :مجموعه‌ای از ژن‌های مرتبط با یک بیماری خاص </li>
                     </ol>
                </li>
                <li>
                    <!-- each part -->
                    <h5>مهندسی و منطق فازی </h5>
                    <ol>
                        <li>طراحی مدارهای منطقی :استفاده از جبر بولی (مبتنی بر مجموعه‌ها) برای طراحی گیت‌های منطقی </li>
                    </ol>
                </li>

                <li>
                    <!-- each part -->
                    <h5>شبکه‌های اجتماعی و داده‌کاوی</h5>
                    <p>به طور کلی میتوان برخی از پایگاه داده ها (sql) را نوعی مجموعه به حساب اورد.‌ اگر به حوزه شبکه علاقه دارید می توانید مباحث مربوط به گراف ها را مطالعه کنید </p>
                    <ol>
                        <li>تشخیص جامعه‌ها (Community Detection)  یافتن زیرمجموعه‌های مرتبط در یک شبکه بزرگ (در درس بعد با زیرمجموعه ها اشنا می شوید)</li>
                    </ol>
                </li>
            </ul>
            <video width="960" height="540" controls>
                <source src="img/sets.mp4" type="video/mp4">
                Your browser does not support the video tag.
            </video>
            <br><br><br>


            <!-- each part -->
            <!-- <h5></h5>
            <p></p>
            <ol>
                <li></li>
            </ol> -->

                            <div class="gradeb">    نمره قبلی شما در این درس {{ Auth::user()->unit1_les1 }}</div>
                            <br>
                            @if ( Auth::user()->unit1_les1 <= 33)
                                <a href="/exam?unit=1&lesson=1&type=1">آزمون</a>
                            @else 
                                @if ( Auth::user()->unit1_les1 <= 66)
                                <a href="/exam?unit=1&lesson=1&type=2">آزمون</a>

                                @else
                                    <a href="/exam?unit=1&lesson=1&type=3">آزمون</a>
                                
                                @endif
                            @endif
        </div>

        <div class="lesson-content" id="lesson1-2" style="display: none;">
            <h2>عنوان درس: مجموعه های برابر و نمایش مجموعه ها</h2>
            <h3>مجموعه های برابر</h3>
            <p>اگر عضوهای دو مجموعه A و B یکسان باشند و هر عضو از A عضوی از B باشد و هر عضوی از B عضوی از A باشد در این صورت دو مجموعه A و B برابرند و می نویسیم A=B</p>
            <p>اگر عضوی در A باشد که در B نباشد یا عضوی در B باشد که در A نباشد در این صورت مجموعه های A و B برابر نیستند و می نویسم A≠B</p>
            <img src="img\Majmoobarabar.png" alt="" style="high:56px; width:390px;">
            <h3>زیرمجموعه</h3>
            <p>اگر هر عضو A در مجموعه ی B هست میگوییم مجموعه ی A زیر مجموعه ی مجموعه B هست ولی B زیر مجموعه ی A نیست</p>
            <p>مجموعه ی A زیرمجموعه ی مجموعه B است
A={3,5,7}     B={2,3,5,7}</p>
            <ul>
                <li>هر مجموعه زیر مجموعه ی خودش هست</li>
                <li>دو مجموعه ی برابر زیر مجموعه ی یکدیگر اند</li>
                <li>مجموعه ی تهی زیرمجموعه ی هر مجموعه ای هست</li>
            </ul>
            <p> تعداد زیر مجموعه های هر مجموعه : به طور کلی تعداد زیر مجموعه های یک مجموعه ی n عضوی برابر است با 2 به توان n</p>
            <p> به تمامی زیر مجموعه های هر مجموعه به جز خودش زیرمجموعه های محض ان مجموعه میگویند و تعداد زیر مجموعه های محض یک مجموعه ی n عضوی برابر است با 2 به توان n منهای 1</p>
            <ul>
                <li>
                    مجموعهٔ اعداد طبیعی که با حرف <b>N</b> نمایش داده می‌شود:<br>
                    <p>N = {1, 2, 3, 4, ...}</p>
                </li>
                <li>
                    مجموعهٔ اعداد حسابی که با حرف <b>W</b> نمایش داده می‌شود:<br>
                    <p>W = {0, 1, 2, 3, ...}</p>
                </li>
                <li>
                    مجموعهٔ اعداد صحیح که با حرف <b>Z</b> نمایش داده می‌شود:<br>
                    <p>Z = {..., -3, -2, -1, 0, 1, 2, 3, ...}</p>
                </li>
            </ul>

            <p>
                چون مجموعهٔ اعداد طبیعی، زیرمجموعه‌ی مجموعهٔ اعداد حسابی است، پس می‌توان گفت که هر عدد طبیعی یک عدد حسابی است و این مطلب به زبان ریاضی به صورت <b>N &sube; W</b> می‌شود. چون همه‌ی اعداد طبیعی و حسابی، عضو <b>Z</b> هستند، بنابراین <b>N &sube; W &sube; Z</b> است. یعنی هر عدد طبیعی، یک عدد صحیح و هر عدد حسابی نیز یک عدد صحیح است.
            </p>
            <img src="img/Q.png" alt="" style="high:56px; width:390px;">
            <p>اعداد گویا:کسری که صورتش و مخرجش اعداد صحیح باشند و مخرج آن صفر نباشد</p>
            <br>
                            <div class="gradeb">    نمره قبلی شما در این درس {{ Auth::user()->unit1_les2 }}</div>
                            <br>
                            @if ( Auth::user()->unit1_les2 <= 33)
                                <a href="/exam?unit=1&lesson=2&type=1">آزمون</a>
                            @else 
                                @if ( Auth::user()->unit1_les2 <= 66)
                                <a href="/exam?unit=1&lesson=2&type=2">آزمون</a>

                                @else
                                    <a href="/exam?unit=1&lesson=2&type=3">آزمون</a>
                                
                                @endif
                            @endif
        </div>
        </div>

        <!-- ادامه درس‌های دیگر مشابه همین ساختار -->
    </div>
</body>
</html>
