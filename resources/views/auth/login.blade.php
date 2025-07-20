<x-head>
    <h3 class="text-center mb-4"><i class="fas fa-user"></i> ورود به MathLife</h3>        
    <!-- validation errors -->
        @if($errors->any())
            <ul >
                @foreach($errors->all() as $error)
                    <li >{{$error}}</li>
                @endforeach
            </ul>
        @endif
    <form action="/login" method="post">
        @csrf
      <div class="mb-3">
        <label for="email" class="form-label">ایمیل</label>
        <input type="email" class="form-control" id="email" placeholder="ایمیل خود را وارد کنید" name="email">
      </div>
      <div class="mb-4">
        <label for="password" class="form-label">رمز عبور</label>
        <input type="password" class="form-control" id="password" placeholder="رمز عبور را وارد کنید" name="password">
      </div>
      <button type="submit" class="btn btn-orange w-100" name="submit">ورود</button>
      <div class="text-center mt-3">
        <a href="/register">حساب نداری؟ ثبت‌نام کن</a>
      </div>
    </form>
</x-head>
