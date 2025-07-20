<x-head>
    <h3 class="text-center mb-4"><i class="fas fa-user-plus"></i> ثبت‌نام در MathLife</h3>
        <!-- validation errors -->
        @if($errors->any())
            <ul >
                @foreach($errors->all() as $error)
                    <li >{{$error}}</li>
                @endforeach
            </ul>
        @endif
    <form action="/register" method="post">
        @csrf
      <div class="mb-3">
        <label class="form-label">نام</label>
        <input type="text" class="form-control" placeholder="نام" name="name">
      </div>
      <div class="mb-3">
        <label class="form-label">نام خانوادگی</label>
        <input type="text" class="form-control" placeholder="نام خانوادگی" name="last_name">
      </div>
      <div class="mb-3">
        <label class="form-label">ایمیل</label>
        <input type="email" class="form-control" placeholder="ایمیل" name="email">
      </div>
      <div class="mb-3">
        <label class="form-label">رمز عبور</label>
        <input type="password" class="form-control" placeholder="رمز عبور" name="password">
      </div>
      <div class="mb-3">
        <label class="form-label">تکرار رمز عبور</label>
        <input type="password" class="form-control" placeholder="تکرار رمز عبور" name="password_confirmation">
      </div>
      <div class="mb-4">
        <label class="form-label d-block">پایه تحصیلی</label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="grade" id="grade9" value="9" checked>
          <label class="form-check-label" for="grade9">نهم</label>
        </div>
      </div>
      <button type="submit" class="btn btn-orange w-100" name="submit">ثبت‌نام</button>
    </form>
    <div class="text-center mt-3">
        <a href="/login">قبلاً ثبت‌نام کردی؟ وارد شو</a>
    </div>
</x-head>