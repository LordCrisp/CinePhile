<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- Color scripts -->
<script src="assets/scripts/colorthief.js"></script>
<script src="assets/scripts/colorConvert.js"></script>
<script>
    function changeTheme() {
        var colorThief = new ColorThief();
        var banner = document.getElementById('movie_banner');
        var colors = colorThief.getColor(banner);
        var themeColor = rgbToHex(colors[0], colors[1], colors[2]);
        document.getElementById('theme_color').content = themeColor;
    }
</script>
<!-- Ajax script -->
<script>
    function loadDoc(id) {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("movie").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "movie.php", true);
        xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xhttp.send("movie_id=" + id);
    }
    function loadPlayerScript() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("player").innerHTML = this.responseText;
            }
        };
        xhttp.open("POST", "assets/scripts/player.js", true);
        xhttp.send();
    }
</script>
<script>
    $('.button__movie').click(function() {
            $('#movie').addClass('active');
            setTimeout(function () {
                changeTheme();
            }, 100);
    });
    $(document).on('click', '.button__close', function () {
        $(this).parent().addClass('inactive');
        setTimeout(function () {
            $('#movie').removeClass('inactive active');
        }, 300);
        document.getElementById('theme_color').content = "#212121";
    })
</script>
<?php $dbConnect -> close(); ?>