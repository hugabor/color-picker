<?php
if(isset($_GET['img'])) {
    if($_GET['img'] == "icon") {
        header("Content-type: image/png");
        $data = "";
        echo base64_decode($data);
        exit();
    }
    if($_GET['img'] == "trans") {
        header("Content-type: image/png");
        $data = "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%3D%3D";
        echo base64_decode($data);
        exit();
    }
    if($_GET['img'] == "trans_small") {
        header("Content-type: image/png");
        $data = "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";
        echo base64_decode($data);
        exit();
    }
}

$r = "ff";
$g = "ff";
$b = "ff";
$a = "ff";
if(isset($_GET['hex'])) {
    $hex = $_GET['hex'];
    if(strlen($hex) >= 1) {
        $r = $g = $b = $hex[0] . $hex[0];
    }
    if(strlen($hex) >= 3) {
        $r = $hex[0] . $hex[0];
        $g = $hex[1] . $hex[1];
        $b = $hex[2] . $hex[2];
    }
    if(strlen($hex) == 5) {
        $r = $g = $b = "00";
        $a = "ff";
    }
    if(strlen($hex) >= 6) {
        $r = $hex[0] . $hex[1];
        $g = $hex[2] . $hex[3];
        $b = $hex[4] . $hex[5];
    }
    if(strlen($hex) >= 8) {
        $a = $hex[6] . $hex[7];
    }
}
$r = hexdec($r);
$g = hexdec($g);
$b = hexdec($b);
$a = hexdec($a);

$cc = "";
if(isset($_GET['cc'])){
    $cc = $_GET['cc'];
}

?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="icon" type="image/png" href="?img=icon" sizes="16x16" />
<title>Color Picker</title>
<style>
    html, body
    {
        margin: 0;
        border: 0;
        padding: 0;
        overflow: hidden;
        min-height: 100%;
        height: 100%;
        cursor: default;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }
    body
    {
        font-family: Tahoma, Geneva, sans-serif;
        font-family: "Trebuchet MS", Helvetica, sans-serif;
        font-size: 100%;
        background-color: #ffffff;
        background-attachment: fixed;
        background-image: url("?img=trans");
    }
    div
    {
        margin: 0;
        border: 0;
        padding: 0;
        overflow: hidden;
        cursor: default;
    }
    select
    {
        font-family: Georgia, serif;
        outline: none;
    }
    div.color
    {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    div.typeColor
    {
        position: absolute;
        bottom: 50px;
        left: 20px;
        font-size: 2em;
        font-family: Consolas, monospace;
    }
    div.colorRep
    {
        position: absolute;
        top: 40%;
        height: 0;
        overflow: visible;
        width: 100%;
        font-family: Consolas, monospace;
        text-align: center;
    }
    div.colorRep div.main
    {
        display: inline-block;
        overflow: visible;
        text-align: left;
    }
        .drag
        {
            cursor: pointer;
        }
        .hex2
        {
            margin-left: 0.15em;
        }
    div.dragNotice
    {
        position: absolute;
        top: 1em;
        left: 0;
        width: 100%;
        text-align: center;
    }
    div.buttons
    {
        position: absolute;
        top: 1em;
        right: 0;
    }
    div.buttons a
    {
        margin: 0;
        border: 0;
        padding: 0 10px 10px 10px;
        display: block;
        text-decoration: none;
        cursor: pointer;
        text-align: right;
    }

</style>

<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>

<script>

    var colorCode = "<?php echo $cc; ?>";
    var color = [<?php echo $r; ?>, <?php echo $g; ?>, <?php echo $b; ?>, <?php echo $a; ?>];

    var lastMouseX = -1;
    var lastMouseY = -1;
    var elem;
    var dragging = false;
    var faded = false;

    $(document).ready(function() {
        createColorCode(colorCode);
        updateDisplay();
        function onMouseMove(x, y) {
            if(dragging) {
                if(!faded) {
                    $(".dragNotice").fadeOut(2500);
                    faded = true;
                }
                deselect();
                parseMousePos(x - lastMouseX, lastMouseY - y);
                lastMouseX = x;
                lastMouseY = y;
            }
        }
        function onMouseUp() {
            dragging = false;
        }
        $(document).mousemove(function(event) {
            onMouseMove(event.pageX, event.pageY);
        });
        $(document).mouseup(function(event) {
            onMouseUp();
        });
        $("html")[0].addEventListener('touchmove',function(event){ // for mobile phones
            event.preventDefault();
            onMouseMove(event.targetTouches[0].pageX, event.targetTouches[0].pageY);
        },false);
        $("html")[0].addEventListener('touchend',function(event){ // for mobile phones
            onMouseUp();
        },false);
    });

    function createColorCode(cc) {
        colorCode = cc;
        if(colorCode == "sRGB_HEX_RGBA") {
            $(".colorRep .main").css("height", "4em");
            $(".colorRep .main").css("margin-top", "-2em");
            $(".colorRep .main").html('<span style="font-size: 4em;">#<span class="drag hex2" id="R_HEX">FF</span><span class="drag hex2" id="G_HEX">FF</span><span class="drag hex2" id="B_HEX">FF</span><span class="drag hex2" id="A_HEX">FF</span></span>');
        } else if(colorCode == "sRGB_rgb") {
            $(".colorRep .main").css("height", "4em");
            $(".colorRep .main").css("margin-top", "-2em");
            $(".colorRep .main").html('<span style="font-size: 4em;">rgb(<span class="drag" id="R">255</span>,<span class="drag" id="G">255</span>,<span class="drag" id="B">255</span>)</span>');
        } else if(colorCode == "sRGB_rgba") {
            $(".colorRep .main").css("height", "4em");
            $(".colorRep .main").css("margin-top", "-2em");
            $(".colorRep .main").html('<span style="font-size: 4em;">rgba(<span class="drag" id="R">255</span>,<span class="drag" id="G">255</span>,<span class="drag" id="B">255</span>,<span class="drag" id="A">255</span>)</span>');
        } else if(colorCode == "sRGB_rgb_fl") {
            $(".colorRep .main").css("height", "4em");
            $(".colorRep .main").css("margin-top", "-2em");
            $(".colorRep .main").html('<span style="font-size: 4em;">rgba(<span class="drag" id="R_fl">1</span>,<span class="drag" id="G_fl">1</span>,<span class="drag" id="B_fl">1</span>)</span>');
        } else if(colorCode == "sRGB_rgba_fl") {
            $(".colorRep .main").css("height", "4em");
            $(".colorRep .main").css("margin-top", "-2em");
            $(".colorRep .main").html('<span style="font-size: 4em;">rgba(<span class="drag" id="R_fl">1</span>,<span class="drag" id="G_fl">1</span>,<span class="drag" id="B_fl">1</span>,<span class="drag" id="A_fl">1</span>)</span>');
        } else if(colorCode == "sRGB_rgba_css") {
            $(".colorRep .main").css("height", "4em");
            $(".colorRep .main").css("margin-top", "-2em");
            $(".colorRep .main").html('<span style="font-size: 4em;">rgba(<span class="drag" id="R">255</span>,<span class="drag" id="G">255</span>,<span class="drag" id="B">255</span>,<span class="drag" id="A_fl">1</span>)</span>');
        } else { // "sRGB_HEX"
            $(".colorRep .main").css("height", "4em");
            $(".colorRep .main").css("margin-top", "-2em");
            $(".colorRep .main").html('<span style="font-size: 4em;">#<span class="drag hex2" id="R_HEX">FF</span><span class="drag hex2" id="G_HEX">FF</span><span class="drag hex2" id="B_HEX">FF</span></span>');
        }
        function onMouseDown(obj, x, y) {
            lastMouseX = x;
            lastMouseY = y;
            elem = obj;
            dragging = true;
        }
        $(".drag").each(function() {
            $(this).mousedown(function(event) {
                onMouseDown($(this), event.pageX, event.pageY);
            });
            $(this)[0].addEventListener('touchstart',function(event){ // for mobile phones
                onMouseDown($(this), event.targetTouches[0].pageX, event.targetTouches[0].pageY);
            },false);
        });
    }

    function parseMousePos(dx, dy) {
        dx = Math.floor(dx);
        dy = Math.floor(dy);
        var id = elem.attr("id");
        if(id == "R_HEX" || id == "R" || id == "R_fl"){
            color[0] += dy;
            if(color[0] > 255) { color[0] = 255; }
            if(color[0] < 0) { color[0] = 0; }
        }
        if(id == "G_HEX" || id == "G" || id == "G_fl"){
            color[1] += dy;
            if(color[1] > 255) { color[1] = 255; }
            if(color[1] < 0) { color[1] = 0; }
        }
        if(id == "B_HEX" || id == "B" || id == "B_fl"){
            color[2] += dy;
            if(color[2] > 255) { color[2] = 255; }
            if(color[2] < 0) { color[2] = 0; }
        }
        if(id == "A_HEX" || id == "A" || id == "A_fl"){
            color[3] += dy;
            if(color[3] > 255) { color[3] = 255; }
            if(color[3] < 0) { color[3] = 0; }
        }
        updateDisplay();
    }

    function updateDisplay() {
        $(".color").css("background-color", "rgba(" + color[0] + "," + color[1] + "," + color[2] + "," + (color[3] / 255) + ")");
        updateTextColor();
        $("#R_HEX").html(decToHex(color[0], 2));
        $("#G_HEX").html(decToHex(color[1], 2));
        $("#B_HEX").html(decToHex(color[2], 2));
        $("#A_HEX").html(decToHex(color[3], 2));
        $("#R").html(color[0]);
        $("#G").html(color[1]);
        $("#B").html(color[2]);
        $("#A").html(color[3]);
        $("#R_fl").html((color[0] / 255).toFixed(3));
        $("#G_fl").html((color[1] / 255).toFixed(3));
        $("#B_fl").html((color[2] / 255).toFixed(3));
        $("#A_fl").html((color[3] / 255).toFixed(3));
        $("title").text("Color Picker ~ " + $(".colorRep .main").text());
    }

    function updateTextColor() {
        var newTextColor = 0;
        var lightness = color[0] / 255 * 0.22 + color[1] / 255 * 0.35 + color[2] / 255 * 0.08 + (255 - color[3]) / 255 * 0.35;
        if(lightness <= 0.18) {
            newTextColor = 1;
        }

        var light = "#ffffff";
        var dark = "#171516";

        if(newTextColor > 0) {
            $(".colorChangeText").css("color", light);
        } else {
            $(".colorChangeText").css("color", dark);
        }
    }

    function decToHex(n, l) {
        return leadingZeros(n.toString(16), l).toUpperCase();
    }

    function leadingZeros(num, length) {
        while(num.length < length) {
            num = "0" + num;
        }
        return num;
    }

    function deselect() {
        if (window.getSelection) {
            var selection = window.getSelection();
            selection.removeAllRanges();
        }
        else {
            if (document.selection.createRange) {
                var range = document.selection.createRange();
                document.selection.empty();
            }
        }
    }

</script>
</head>
<body>
    <div class="color">
        <div class="typeColor colorChangeText"></div> <!-- typeColor as in typing on the keyboard -->
        <div class="colorRep colorChangeText">
            <div class="main"></div>
            <div class="extra"></div>
        </div>
    </div>
    <div class="buttons">
        <a class="colorChangeText" href="?">Color representation</a>
        <a class="colorChangeText" href="?">Copy to clipboard</a>
        <a class="colorChangeText" href="?">Get URL to this color</a>
        <a class="colorChangeText" href="?">My colors</a>
        <a class="colorChangeText" href="?">Add color</a>
        <a class="colorChangeText" href="?">Fullscreen</a>
        <a class="colorChangeText" href="https://github.com/kukac67/colorPicker">GitHub</a>
    </div>
    <div class="dragNotice colorChangeText">Drag the color values to change them</div>
</body>
</html>
