function change() {
    bg = document.getElementById("sub_mode");
    let theme = document.cookie;
    theme = theme.substr(6);
    var now = new Date();
    var time = now.getTime();
    var expireTime = time + 86400 * 365000;
    now.setTime(expireTime);
    if (theme == 'dark') {
        document.cookie = 'theme=light; expires=' + now.toUTCString() + ';path=/';
        window.location.reload(true);
    } else {
        document.cookie = `theme=dark; expires=${now.toUTCString()};path=/`;
        window.location.reload(true);
    }
}

function gava() {
    alert("بازدید‌کنندگان حق کاویدن داده بااستفاده از ابزار هایی به مانند وب کراولر ندارند");

}

function harim() {
    alert("این سایت هیچگونه داده ای از کاربران نگرفته و ذخیره نمیکند. کوکی های استفاده شده فقط توسط کاربر قابل مشاهده هستند");
}