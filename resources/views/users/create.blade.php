<html lang="en" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>کاربر جدید</title>
</head>

<body>
    <br>
   <center> <h2>ثبت کاربر جدید</h2></center>
   <form action="/users/create" method="post">
    @csrf

    <label style="font-size: larger; margin: 10px;" for="first_name">
        نام خود را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="first_name" required
        placeholder="لطفا نام خود را وارد کنید"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="last_name">
        نام خانوادگی خود را وارد کنید:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="last_name" required
        placeholder="لطفا نام خود را وارد کنید"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="phone_number">
        شماره همراه:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="phone_number" requiredr
        placeholder="لطفا همراه خود را وارد کنید"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="email">
        ایمیل:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="email" required
        placeholder="لطفا ایمیل خود را وارد کنید"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="Country">
        کشور:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="Country"
        placeholder="لطفا نام کشور خود را وارد کنید"><br>
    <br>
    <label style="font-size: larger; margin: 10px;" for="gender">
        جنسیت:</label><br>
    <select name="gender">
        <br>

        <option value="زن"> زن</option>
        <option value="مرد"> مرد</option>
    </select>
    <br>
    <label style="font-size: larger; margin: 10px;" for="Adderss">
        ادرس:</label><br>
    <input style="padding: 10px; width: 1200px; margin: 5px;" type="text"  name="Address"
        placeholder="لطفا ادرس خود را وارد کنید"><br>

        <input type="submit" value="send">
    </form>
</body>

</html>
