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
<!-- Player script -->
<script src="assets/scripts/player.js"></script>
<!-- Ajax script -->
<script>
    function loadDoc() {
        var xhttp = new XMLHttpRequest();
        xhttp.onreadystatechange = function() {
            if (this.readyState == 4 && this.status == 200) {
                document.getElementById("movie").innerHTML = this.responseText;
            }
        };
        xhttp.open("GET", "movie.php", true);
        xhttp.send();
    }
</script>
<?php $dbConnect -> close(); ?>