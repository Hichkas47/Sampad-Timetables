<div class="mode">
    <div id="sub_sub">
        <div id="sub_mode" onclick="change()">
            <p id="x">
                <?php
                if (isset($_COOKIE['theme']) && $_COOKIE['theme'] == 'dark') {
                ?>
                    روز
                <?php
                } else {
                ?>
                    شب
                <?php
                }
                ?>
            </p>
        </div>
    </div>
</div>