<!DOCTYPE html>
<html lang="en">

<head>
    <title>Braille Converter</title>
    <link rel="stylesheet" href="dec.css">
</head>

<body>
    <div id="bb1">
        <div id="b1">
            <h1>WELCOME TO OUR PAGE</h1>
        </div>
        <div id="b2">
            <br><br><br><br><br><br><br><br>
            <h1><b>BRAILLE CONVERTER</b></h1>
            <p style="color:white;">Below is a simple way to convert text to braille and braille<br> to text. Click any button below to proceed further.</p> <br><br><br><br><br>


            <input type="button" value="Text to Braille" id="btn" name="TtoB" onclick="myFunction()">
            <input type="button" value="Braille to Text" id="btn" name="BtoT" onclick="myFunction1()">
            <script>
                function myFunction() {
                    location.replace("TtoB.php")
                }
                function myFunction1() {
                    location.replace("BtoT.php")
                }
            </script>
        </div>
        <footer id="b3">
            <span id="float_left">20BCI7085</span>
            <span id="float_right">20BCD7059</span>
        </footer>
    </div>
</body>

</html>