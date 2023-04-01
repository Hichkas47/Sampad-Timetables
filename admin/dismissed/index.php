
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
                    در حال مشاهده: بررسی شده ها
                    <br />
                    <a href="../">
                        مشاهده بررسی نشده ها
                    </a>
                </p>
            </div>
        </div>
        <div class="content">
            <?php
            include "../../assets/conn.php";
            include '../../assets/view.php';
            $sql = "SELECT * FROM `sch` WHERE `stat` = 1";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <div id="context">
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