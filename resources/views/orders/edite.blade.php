<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>orders edite</title>

</head>

<body>
    <br>
    <center><h1>ویرایش سفارشات</h1></center>
    <br>
    <form action="/orders/edite/{{$orders->id}}" method="post">
        @csrf
        <label style="font-size: larger; margin: 10px;" for="name">
            نام و نام خانوادگی مشتری::</label><br>
        <input style="padding: 10px; width: 1200px; margin: 5px;" type="text" name="name"
            placeholder="لطفا نام و نام خانوادگی خود را وارد کنید" value="{{$orders->name}}"><br>
        <br>

        <label style="font-size: larger; margin: 10px;" for="phone_number">
            شماره تماس خود را وارد کنید:</label><br>
        <input style="padding: 10px; width: 1200px; margin: 5px;" type="text" name="phone_number"
            placeholder="لطفا شماره تماس خود را وارد کنید" value="{{$orders->phone_number}}"><br>
        <br>

        <label style="font-size: larger; margin: 10px;" for="Address">
            ادرس خود را وارد کنید:</label><br>
        <input style="padding: 10px; width: 1200px; margin: 5px;" type="text" name="Address"
            placeholder="لطفا ادرس خود را وارد کنید" value="{{$orders->Address}}"><br>
        <br>

        <label style="font-size: larger; margin: 10px;" for="products">
            نام محصول را وارد کنید:</label><br>
        <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"name="products"
            placeholder="لطفا نام محصول را وارد کنید" value="{{$orders->products}}"><br>
        <br>

        <label style="font-size: larger; margin: 10px;" for="numder">
            تعداد سفارشات:</label><br>
        <input style="padding: 10px; width: 1200px; margin: 5px;" type="text" name="number"
            placeholder="لطفا تعداد سفارشات خود را وارد کنید" value="{{$orders->number}}"><br>
        <br>
        <label style="font-size: larger; margin: 10px;" for="price">
            قیمت را وارد کنید:</label><br>
        <input style="padding: 10px; width: 1200px; margin: 5px;" type="text" name="price"
            placeholder="لطفا قیمت را وارد کنید" value="{{$orders->price}}"><br>
        <br>
        <textarea name="description" id="" cols="30" rows="10" placeholder="توضیحات خود را وارد کنید" value="{{$orders->description}}"></textarea>
        <br>
        <br>
    <input type="submit" value="send">

    </form>

</body>

</html>
