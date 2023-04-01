<?php
include 'assets/conn.php';
include 'assets/view.php';
if (isset($_POST["submit_form"])) {
    if (isset($_POST['name_form']) && !empty($_POST['name_form'])) {
        $name = $_POST['name_form'];
        if (isset($_POST['type_form']) && !empty($_POST['type_form'])) {
            $type = $_POST['type_form'];
            if (isset($_POST['context_form']) && !empty($_POST['context_form'])) {
                $context = $_POST['context_form'];
                $sql = "INSERT INTO `bugs`(`id`, `name`, `context`, `type`, `status`) VALUES (null,'$name','$context','$type','pending')";
                $conn->query($sql);
                header('location: form.php');
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <?php include 'assets/meta.php'; ?>
</head>

<body>
    <?php
    if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') {
        include "assets/darkstyle.php";
    } else {
        include "assets/lightstyle.php";
    }
    ?>
    <div class="container">
        <?php
        include "assets/header.php";
        include "assets/mode.php";
        /*include "assets/emtehan.php";*/
        include "assets/table.php";
        include "assets/comments.php";
        include "assets/footer.php";
        ?>
    </div>
</body>

</html>