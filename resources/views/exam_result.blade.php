<x-layout>

    <br><br>
    <div class="resultb">
        <h5>درصد شما در این آزمون {{ $percentage }}</h5>
        <h6>تلاشت ارزشمنده. به امید موفقیت های بیشتر برای تو.</h6>
    </div>
    <div class="questions">
        @foreach ($answers as $q)
            <div class="question">  
                <div class="question-text">{{ $q["qtext"] }}</div>  
                <div class="options">  
                    @for ($i = 1; $i <= 4; $i++)
                        @php
                            $icon = 'fa-regular fa-circle'; 

                            if ($i == $q["correctAnswer"]) {
                                $icon = 'fa-regular fa-circle-check'; 
                            }

                            if ($i == $q["userAnswer"] && $q["userAnswer"] != $q["correctAnswer"]) {
                                $icon = 'fa-regular fa-circle-xmark'; 
                            }
                        @endphp

                        <div class="option">  
                            <label><i class="{{ $icon }}"></i> {{ $q["$i"] }} </label>  
                        </div>  
                    @endfor
                </div>  
            </div>  
        @endforeach
    </div>

</x-layout>