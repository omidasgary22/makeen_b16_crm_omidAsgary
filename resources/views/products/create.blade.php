<html lang="en" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>create product</title>
</head>
<body>
    <center><h1>ثبت محصول جدید</h1></center>
    <form action="/products/create" method="post">
    @csrf

    <label style="font-size: larger; margin: 10px;" for="name">
        نام محصول خود را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="name" required
        placeholder="لطفا نام محصول خود را وارد کنید"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="model">
        مدل دستگاه:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="model" required
        placeholder="لطفا مدل دستگاه را وارد کنید"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="ram">
        RAMدستگاه:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="ram" requiredr
        placeholder="لطفا ramدستگاه را وارد کنید"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="graphics">
        graphicدستگاه:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="graphics" required
        placeholder="لطفا graphicدستگاه را وارد کنید"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="memory">
        memoryدستگاه:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="memory"
        placeholder="لطفا memoryدستگاه را وارد کنید"><br>
        <br>
    <label style="font-size: larger; margin: 10px;" for="price">
        قیمت:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="price"
        placeholder="لطفا قیمت دستگاه را وارد کنید"><br>
    <br>
    <textarea name="description" id="" cols="30" rows="10">توضیحات</textarea>
    <br>
    <br>

        <input type="submit" value="send">
</form>
</body>
</html>
