<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ویرایش کاربر</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <br>

    <center>
    <nav class="navbar navbar-expand-sm bg-light container">
        <div class="container-fluid">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                >ورود</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                >ثبت نام</a
              >
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                data-bs-toggle="dropdown"
                href="#"
                >دسته بندی</a
              >
              <ul class="dropdown-menu">
                <li><a class="dropdown-item" href="#">1</a></li>
                <li><a class="dropdown-item" href="#">2</a></li>
                <li><a class="dropdown-item" href="#">3</a></li>
              </ul>
            </li>

            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                >محصولات</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                >سفارشات</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="C:\xampp\htdocs\projects\crm1\resources\views\users\index.blade.php"
                >کاربران</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="#"
                >مجله</a
              >
            </li>
          </ul>
        </div>
      </nav>
    </center>

    <br>
   <center> <h2>ویرایش کاربر</h2></center>
   <form action="/users/edite/{{$user->id}}" method="post">
    @csrf

    <label style="font-size: larger; margin: 10px;" for="first_name">
        نام خود را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="first_name"
        placeholder="لطفا نام خود را وارد کنید" value="{{$user->first_name}}"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="last_name">
        نام خود را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="last_name"
        placeholder="لطفا نام خانوادگی خود را وارد کنید" value="{{$user->last_name}}"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="phone_number">
        شماره همراه:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="phone_number"
        placeholder="لطفا همراه خود را وارد کنید" value="{{$user->phone_number}}"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="email">
        ایمیل:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="email"
        placeholder="لطفا ایمیل خود را وارد کنید" value="{{$user->email}}"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="Country">
        کشور:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="Country"
        placeholder="لطفا نام کشور خود را وارد کنید" value="{{$user->Country}}"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="gender">
        جنسیت:</label><br>
    <select name="gender">
        <option value="زن" {{$user->gender == "زن" ? "selected" : ""}}> زن</option>
        <option value="مرد" {{$user->gender == "مرد" ? "selected" : ""}}> مرد</option>
    </select>
    <br>
    <label style="font-size: larger; margin: 10px;" for="Address">
        ادرس:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="Address"
        placeholder="لطفا ادرس خود را وارد کنید" value="{{$user->Address}}"><br>
        <br>

    <label style="font-size: larger; margin: 10px;" for="passwoed">
        رمز عبور:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="password"
        placeholder="لطفا رمز عبور خود را وارد کنید" value="{{$user->password}}"><br>


        <input type="submit" value="send">
    </form>
</body>

</html>
