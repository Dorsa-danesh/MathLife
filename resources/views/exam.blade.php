<html lang="fa">  
<head>  
    <meta charset="UTF-8">  
    <meta name="viewport" content="width=device-width, initial-scale=1.0">  
    <title>آزمون</title>  
    <style>  
        body {  
            font-family: Tahoma, Arial, sans-serif;  
            direction: rtl;  
            background-color: #f4f4f4;  
            margin: 0;  
            padding: 0;  
        }  

        .container {  
            width: 80%;  
            margin: 50px auto;  
            background-color: white;  
            border-radius: 8px;  
            padding: 20px;  
            box-shadow: 0 2px 15px rgba(0, 0, 0, 0.1);  
        }  

        h1 {  
            text-align: center;  
            color: #333;  
        }  

        .question {  
            margin-bottom: 20px;  
            padding: 15px;  
            background-color: #ff9f00;  
            border-radius: 8px;  
        }  

        .question h3 {  
            color: white;  
        }  

        .options {  
            margin-top: 10px;  
        }  

        .options input {  
            margin-right: 10px;  
        }  

        .button-container {  
            text-align: center;  
            margin-top: 20px;  
        }  

        button {  
            background-color: #ff9f00;  
            color: white;  
            padding: 10px 30px;  
            border: none;  
            border-radius: 5px;  
            font-size: 18px;  
            cursor: pointer;  
        }  

        button:hover {  
            background-color: #ff7f00;  
        }  
    </style>  
</head>  
<body>  
    <div class="container">  
        <h1>آزمون </h1>  
        <form id="examForm" action="{{ route('exam.submit') }}" method="post">  
            @csrf
        <!-- get questions from database -->  

            @foreach ( $qs as $q)  
                <div class="question">  
                        <div class="question-text">{{ $q["qtext"] }}</div>  
                        <div class="options">  
                            <div class="option">  
                                <label>  
                                    <input type="radio" name="q{{ $q["id"] }}" value="1" required>  
                                    {{ $q["ans1"] }} 
                                </label>  
                            </div>  
                            <div class="option">  
                                <label>  
                                    <input type="radio" name="q{{ $q["id"] }}" value="2">  
                                    {{ $q["ans2"] }}  
                                </label>  
                            </div>  
                            <div class="option">  
                                <label>  
                                    <input type="radio" name="q{{ $q["id"] }}" value="3">  
                                    {{ $q["ans3"] }}   
                                </label>  
                            </div>  
                            <div class="option">  
                                <label>  
                                    <input type="radio" name="q{{ $q["id"] }}" value="4">  
                                    {{ $q["ans4"] }}  
                                </label>  
                            </div>  
                        </div>  
                </div>  
            @endforeach

            <button type="submit" name="submit">ارسال پاسخ‌ها</button>  
        </form>  
    </div>
      
</body>  
</html>