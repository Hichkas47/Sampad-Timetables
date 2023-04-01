<?php
include '../assets/view.php';
include "../assets/conn.php";
if (isset($_POST['submit'])) {
    $name = $_POST['name_name'];
    $id = $_POST['name_id'];
    $kind = $_POST['name_kind'];
    $aso = $_POST['name_aso'];
    $more = $_POST['name_more'];
    $sql = "INSERT INTO `sch` (`id`, `name`, `nat_id`, `kind`, `aso`, `more`, `stat`) VALUES (null, '$name', '$id', '$kind', '$aso', '$more', 0)";
    $conn->query($sql);
    header('location: TEMP.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <link rel="shortcut icon" href="../style/images/ss.png" type="image/x-icon">
    <title>ارتباط با دبیرستان شهید بهشتی</title>
</head>

<body>
    <div class="container">
        <div id="header">
            <div id="title_container">
                <h2>
                    <b> دبیرستان شهید بهشتی 2 ساری</b>
                </h2>
                <br />
                <h3>
                    <b>صندوق ارتباطی</b>
                </h3>
            </div>
        </div>
    </div>
    <div class="testbox">
        <form method="POST">
            <div class="item">
                <div class="city-item">
                    <input type="text" placeholder="نام و نام خانوادگی" name="name_name" id="id_title" required maxlength="50">
                    <input type="number" placeholder="کد ملی" name="name_id" id="id_id" required min="10000000" max="9999999999">
                    <select name="name_kind" id="id_plat" required>
                        <option disabled hidden selected value="">هدف پیام</option>
                        <option value="پرسش">
                            پرسش
                        </option>
                        <option value="درخواست">
                            درخواست
                        </option>
                        <option value="انتقاد">
                            انتقاد
                        </option>
                        <option value="پیشنهاد">
                            پیشنهاد
                        </option>
                    </select>
                    <select name="name_aso" id="id_plat" required>
                        <option disabled hidden selected value="">نقش</option>
                        <option value="والد">
                            والد
                        </option>
                        <option value="دانش‌آموز">
                            دانش‌آموز
                        </option>
                    </select>
                </div>
            </div>
            <div class="item">
                <textarea name="name_more" id="id_more" placeholder=" متن پیام" required minlength="10"></textarea>
            </div>
            <div class="btn-block">
                <button type="submit" name="submit">ارسال</button>
            </div>
        </form>
    </div>
</body>

</html>