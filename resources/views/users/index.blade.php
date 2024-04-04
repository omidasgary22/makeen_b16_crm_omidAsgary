<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>users list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

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
                href="../products/index"
                >محصولات</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="../orders/index"
                >سفارشات</a
              >
            </li>
            <li class="nav-item">
              <a
                class="nav-link"
                href="../users/index"
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
<center><h1>لیست کاربران</h1></center>
<br>

<table border="11" style= " width: 1500px " >
    <tr>
        <th>ID</th>
        <th>نام</th>
        <th>نام خانوادگی</th>
        <th>موبایل</th>
        <th>کشور</th>
        <th>ادرس</th>
        <th>password</th>
        <th>جنسیت</th>
        <th>manage</th>
        <br>

    </tr>
    <br>

    @foreach ($users as $users)

    <tr>
        <td>{{$users->id}}</td>
        <td>{{$users->first_name}}</td>
        <td>{{$users->last_name}}</td>
        <td>{{$users->phone_number}}</td>
        <td>{{$users->Country}}</td>
        <td>{{$users->Address}}</td>
        <td>{{$users->password}}</td>
        <td>{{$users->gender}}</td>
        <td>
           <a href="/users/edite/{{$users->id}}"><button>ویرایش</button></a>
            <form action="/users/delete/{{$users->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>

</body>
</html>
