<?php
$id=$_GET["id"];
?>

<html dir="rtl">
    <head> <title> نزلاء الفندق </title> </head>
    <head> <link rel="stylesheet" href="form.css">
    <meta charset="utf-8">
    <body>
    
<form action="update.php" method="post">

<h3>تعديل إستمارة نزيل فندق</h3>


<input required type="text" name="name" placeholder="الأسم"> 


<input required type="tel" name="phonenum" placeholder="رقم الجوال">


<input required type="text" name="idnum"placeholder="رقم الهوية" >


<input required type="email" name="email"placeholder="الإيميل">


<input required type="number" name="dos"placeholder="مدة الأقامة">

<input type="hidden" name="id" value="<?php echo $id; ?>">


<input type="submit" value="إرسال">
<input type="reset" value="حذف">

        </form>
    </body>
</html>