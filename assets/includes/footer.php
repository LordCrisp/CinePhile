<!-- jQuery -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
<!-- Bootstrap script -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>
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
</script>
<script>
    $('.button__movie').click(function() {
        if ($(window).width < 961) {
            $('#movie').addClass('active');
            setTimeout(function () {
                changeTheme();
            }, 100);
        }
    });
</script>
<?php $dbConnect -> close(); ?>