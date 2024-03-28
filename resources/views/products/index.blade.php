<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>products list</title>
</head>
<body>
    <center>
    <center><h1>لیست محصولات</h1></center>
<table border="1" style="width:1300px">
    <tr>
        <th>id</th>
        <th>نام محصول</th>
        <th>مدل دستگاه</th>
        <th>حافظهRAM</th>
        <th>مقدار گرافیک</th>
        <th>مقدار حافظه دستگاه</th>
        <th>قیمت</th>
        <th>توضیحات</th>
        <th>manage</th>
    </tr>
    @foreach ($products as $product)

    <tr>

        <td>{{ $product->id }}</td>
        <td>{{ $product->name }}</td>
        <td>{{ $product->model }}</td>
        <td>{{ $product->ram }}</td>
        <td>{{ $product->graphics }}</td>
        <td>{{ $product->memory }}</td>
        <td>{{ $product->price }}</td>
        <td>{{ $product->description }}</td>

        <td>
            <a href="/products/edite/{{$product->id}}">ویرایش</a>
            <form action="/products/delete/{{$product->id}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="delete">
            </form>
        </td>
    </tr>
    @endforeach
</table>
</center>

</body>
</html>
