<?php
$conn = new mysqli("localhost", 'fancontr_hichkas47', '13841355sj', 'fancontr_contracts_main');

if (isset($_POST['submit'])) {
    $id = $_POST['id'];
    $con = $_POST['con'];
    $sql = "SELECT `id`, `name`, `context`, `type`, `status` FROM `bugs` WHERE `id` = '$id'";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    $name = $row['name'];
    $type = $row['type'];
    $stat = $_POST['stat'];
    $sql = "UPDATE `bugs` SET `id`='$id',`name`='$name', `context`='$con',`type`='$type',`status`='$stat' WHERE `id` = '$id'";
    $conn->query($sql);
}
?>
<form method="POST">
    <input type="text" placeholder="id" name="id">
    <textarea type="text" placeholder="context" name="con" dir="rtl"></textarea>
    <input type="text" placeholder="stat" name="stat">
    <input type="submit" name="submit">
</form>
<div id="temp_3">
    <?php
    $sql = "SELECT `id`, `name`, `context`, `status` FROM `bugs` WHERE `status` = 'pending'";
    $result = $conn->query($sql);
    while ($row = $result->fetch_assoc()) {
    ?>
        <div id="com_main" dir="rtl">
            <div class="com_sub">
                <p><?= $row['id'] ?> - <?= $row['name'] ?> - <?= $row['status'] ?></p>
            </div>
            <div class="com_sub">
                <p><?= $row['context'] ?></p>
            </div>
            <br>
        </div>
    <?php
    }
    ?>
</div>