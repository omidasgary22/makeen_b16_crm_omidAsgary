<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>orders index</title>
</head>
<body>
<form>
    <center><h1>جدول سفارشات</h1></center>
    <table border="1" style="width: 1400px">
        <tr>
            <th>id</th>
            <th>نام و نام خانوادگی مشتری</th>
            <th>شماره تماس</th>
            <th>ادرس</th>
            <th>محصول</th>
            <th>تعداد سفارشات</th>
            <th>قیمت</th>
            <th>توضیحات</th>
            <th>manage</th>
        </tr>
        @foreach ( $order as $orders)

        <tr>
            <td>{{$orders->id}}</td>
            <td>{{$orders->name}}</td>
            <td>{{$orders->phone_number}}</td>
            <td>{{$orders->Address}}</td>
            <td>{{$orders->products}}</td>
            <td>{{$orders->number}}</td>
            <td>{{$orders->price}}</td>
            <td>{{$orders->description}}</td>

        <td>
            <a href="/orders/edite{{$orders->id}}">ویرایش</a>
            <form action="/orders/delete/{{$orders->id}}" method="post">
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
