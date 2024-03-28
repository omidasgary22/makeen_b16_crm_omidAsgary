<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edite product</title>
</head>
<body>
    <center><h1>ویرایش محصول</h1></center>
    <form action="/products/edite/{{$product->id}}" method="post">
        @csrf

    <label style="font-size: larger; margin: 10px;" for="name">
        نام دستگاه خود را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="name" required
        placeholder="لطفا نام دستگاه را وارد کنید" value="{{$product->name}}"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="model">
        مدل دستگاه را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="model" required
        placeholder="لطفا مدل دستگاه را وارد کنید" value="{{$product->model}}"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="ram">
        مقدار RAMدستگاه را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="ram" requiredr
        placeholder="لطفا مقدار ramدستگاه را وارد کنید" value="{{$product->ram}}"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="graphics">
    مقدار graphicدستگاه را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="graphics" required
        placeholder="لطفا مقدار graphic دستگاه را وارد کنید " value="{{$product->graphics}}"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="memory">
        مقدار memoryدستگاه را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="memory"
        placeholder="لطفا مقدار memory دستگاه را وارد کنید" value="{{$product->memory}}"><br>
        <br>
    <label style="font-size: larger; margin: 10px;" for="price">
        قیمت راوارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="price"
        placeholder="لطفا قیمت دستگاه را وارد کنید" value="{{$product->price}}"><br>
    <br>
    <textarea name="description"  cols="30" rows="10" value="{{$product->description}}"></textarea>
    <br>
    <br>
        <input type="submit" value="send">
</form>
</body>
</html>
