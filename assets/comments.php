<div id="comments">
    <div id="comment_header">
        <p>
            نظرات | گزارش باگ
        </p>
    </div>
    <div id="submit_comment">
        <form method="POST">
            <p>ثبت نظر / باگ</p>
            <input type="text" placeholder="نام شما" required name="name_form">
            <select name="type_form" required>
                <option hidden disabled selected value="">نوع</option>
                <option value="باگ">
                    گزارش باگ
                </option>
                <option value="نظر">
                    ثبت نظر
                </option>
            </select>
            <textarea name="context_form" required maxlength="500" placeholder="متن (حداکثر 500 کاراکتر)"></textarea>
            <button type="submit" name="submit_form">ثبت</button>
        </form>
    </div>
    <div id="show_comment">
        <div id="temp_2">
            <p id="pp">
                نظرات
            </p>
            <?php
            $sql = "SELECT `id` FROM `bugs` WHERE `status` = 'yes'";
            $result = $conn->query($sql);
            ?>
            <span>تایید شده: <?= $result->num_rows ?></span>
            <br />
            <?php
            $sql = "SELECT `id` FROM `bugs` WHERE `status` = 'pending'";
            $result = $conn->query($sql);
            ?>
            <span>در دست تایید: <?= $result->num_rows ?></span>
            <br />
            <?php
            $sql = "SELECT `id` FROM `bugs` WHERE `status` = 'no'";
            $result = $conn->query($sql);
            ?>
            <span>رد شده: <?= $result->num_rows ?></span>
            <br />
            <?php
            $sql = "SELECT * FROM `views` WHERE `t1` = 'okay'";
            $result = $conn->query($sql);
            $row = $result->fetch_assoc();
            ?>
            <span>بازدید کل: <?= $row['count'] ?></span>
        </div>
        <div id="temp_3">
            <?php
            $sql = "SELECT `id`, `name`, `context`, `type` FROM `bugs` WHERE `status` = 'yes' ORDER BY `id` DESC";
            $result = $conn->query($sql);
            while ($row = $result->fetch_assoc()) {
            ?>
                <div id="com_main">
                    <div class="com_sub">
                        <p><?= $row['name'] ?> - <?= $row['type'] ?></p>
                    </div>
                    <div class="com_sub">
                        <p><?= $row['context'] ?></p>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>