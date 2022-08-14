<html>
    <head>
    <link rel="stylesheet" href="dec.css">
    </head>
    <body id="box2">
            <div id="bb1">
            <div id="d1">
                <button onclick="redirect()" id="back" style="border-radius:10px;">Back</button>
                <h1>CREATE YOUR OWN BRAILLE SENTENCE</h1>
            </div>
            <div id="d2"> <br>
                <form method="post">
                <textarea id="txtarea1"rows="2" cols="20" name="input"  placeholder="type a word or sentence" style="font-family: 'Montserrat';font-size: 50px; padding:30px;"></textarea><br><br>
                <button type="button" id="btn" onclick="myFunction()">Convert</button><br><br>
                <textarea id="txtarea2"rows="2" cols="0" placeholder="output" style="font-family: 'Montserrat', sans-serif;font-size: 50px; padding:30px;"></textarea><br><br>
                <button onclick="clear()" id="clr" style="padding-left:20px; padding-right:20px; font-size:20px;">clear</button><br><br><br><br>
                </form>
                        <script>
                            function redirect(){
                                location.replace("mainpage.php");
                            }
                            function clear(){
                                document.getElementById('txtarea2').innerHTML = "";
                                }
                
                
            </script>
            <script src="TtoBscript.js"></script>
        </div>
    </body>
</html>