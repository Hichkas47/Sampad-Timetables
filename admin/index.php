<?php
include '../assets/view.php';
include "../assets/conn.php";
    if(isset($_POST['in1'])){
        $query = $_POST['temp'];
        $sql = "SELECT * FROM `sch` WHERE `id` = '$query'";
        $result = $conn->query($sql);
        $result = $result->fetch_assoc();
        $x1 = $result['id'];
        $x2 = $result['name'];
        $x3 = $result['nat_id'];
        $x4 = $result['kind'];
        $x5 = $result['aso'];
        $x6 = $result['more'];
        $sql = "UPDATE `sch` SET `id`='$x1',`name`='$x2',`nat_id`='$x3',`kind`='$x4',`aso`='$x5',`more`='$x6',`stat`=1 WHERE `id` = '$query'";
        $conn->query($sql);
        header("location: temp.php");
    }
    if(isset($_POST['in2'])){
        $query = $_POST['temp2'];
        $sql = "SELECT * FROM `sch` WHERE `id` = '$query'";
        $result = $conn->query($sql);
        $result = $result->fetch_assoc();
        $x1 = $result['id'];
        $x2 = $result['name'];
        $x3 = $result['nat_id'];
        $x4 = $result['kind'];
        $x5 = $result['aso'];
        $x6 = $result['more'];
        $sql = "UPDATE `sch` SET `id`='$x1',`name`='$x2',`nat_id`='$x3',`kind`='$x4',`aso`='$x5',`more`='$x6',`stat`=2 WHERE `id` = '$query'";
        $conn->query($sql);
        header("location: temp.php");
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>پنل ادمین</title>
</head>

<body>
    <div class="container">
        <div class="decider">
            <div id="decdiv">
                <p>
                    در حال مشاهده: بررسی نشده ها
                    <br />
                    <a href="dismissed">
                        مشاهده بررسی شده ها
                    </a>
                </p>
            </div>
        </div>
        <div class="content">
            <?php
            $sql = "SELECT * FROM `sch` WHERE `stat` = 0";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <div id="context">
                    <div class="top">
                        <div class="morebox">
                            <div class="evenmore">
                            </div>
                            <div class="more_context">
                                <form class="div1" method="POST">
                                    <input type="text" hidden value="<?= $row['id'] ?>" name="temp">
                                    <button class="in1" type="submit" name="in1">
                                        <p class="p1">
                                            <b>
                                                بررسی شده
                                            </b>
                                        </p>
                                    </button>
                                </form>
                                <form class="div2" method="POST">
                                    <input type="text" hidden value="<?= $row['id'] ?>" name="temp2">
                                    <button class="in2" type="submit" name="in2">
                                        <p class="p2">
                                            <b>
                                                حذف
                                            </b>
                                        </p>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="d1">
                        <div>
                            <span>
                                نام: <?= $row['name'] ?>
                            </span>
                            <span>
                                -------
                            </span>
                            <span>
                                نقش: <?= $row['aso'] ?>
                            </span>
                        </div>
                        <br>
                        <div>
                            <span>
                                کد ملی: <?= $row['nat_id'] ?>
                            </span>
                            <span>
                                -------
                            </span>
                            <span>
                                نوع: <?= $row['kind'] ?>
                            </span>
                        </div>
                    </div>
                    <br>
                    <div class="d2">
                        <span>
                            <?= $row['more'] ?>
                        </span>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</body>

</html>