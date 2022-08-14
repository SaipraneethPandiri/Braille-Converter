<html>
    <head>
        <link rel="stylesheet" href="dec.css">
</head>
<body >
    <div id="bb1">
    <div id="box3">
        
        <div id="box3_1" >
            <br><button onclick="redir()" id="back">Back</button>
            <h1>BRAILLE SCRIPT TRANSALTOR</h1>
            <p>Select braille characters to translate</p><br>
        </div>
        <script>
            function redir(){
                location.replace("mainpage.php");
                    }
            function clr(){
                document.getElementById('txtarea2').innerHTML = "";
                    }
            </script>
        <div id="box3_2">
            <h3>ABC</h3><br>
            <button type="button" id="Bchar"onclick="funA()">⠁</button>
            <button type="button" id="Bchar"onclick="funB()">⠃</button>
            <button type="button" id="Bchar"onclick="funC()">⠉</button>
            <button type="button" id="Bchar"onclick="funD()">⠙</button>
            <button type="button" id="Bchar"onclick="funE()">⠑</button>
            <button type="button" id="Bchar"onclick="funF()">⠋</button>
            <button type="button" id="Bchar"onclick="funG()">⠛</button>
            <button type="button" id="Bchar"onclick="funH()">⠓</button>
            <button type="button" id="Bchar"onclick="funI()">⠊</button>
            <button type="button" id="Bchar"onclick="funJ()">⠚</button>
            <button type="button" id="Bchar"onclick="funK()">⠅</button>
            <button type="button" id="Bchar"onclick="funL()">⠇</button>
            <button type="button" id="Bchar"onclick="funM()">⠍</button><br><br>
            <button type="button" id="Bchar"onclick="funN()">⠝</button>
            <button type="button" id="Bchar"onclick="funO()">⠕</button>
            <button type="button" id="Bchar"onclick="funP()">⠏</button>
            <button type="button" id="Bchar"onclick="funQ()">⠟</button>
            <button type="button" id="Bchar"onclick="funR()">⠗</button>
            <button type="button" id="Bchar"onclick="funS()">⠎</button>
            <button type="button" id="Bchar"onclick="funT()">⠞</button>
            <button type="button" id="Bchar"onclick="funU()">⠥</button>
            <button type="button" id="Bchar"onclick="funV()">⠧</button>
            <button type="button" id="Bchar"onclick="funW()">⠺</button>
            <button type="button" id="Bchar"onclick="funX()">⠭</button>
            <button type="button" id="Bchar"onclick="funY()">⠽</button>
            <button type="button" id="Bchar"onclick="funZ()">⠵</button> <br> <br>
            <h3>123</h3><br>
            <button type="button" id="Bchar"onclick="fun1()">⠁</button>
            <button type="button" id="Bchar"onclick="fun2()">⠃</button>
            <button type="button" id="Bchar"onclick="fun3()">⠉</button>
            <button type="button" id="Bchar"onclick="fun4()">⠙</button>
            <button type="button" id="Bchar"onclick="fun5()">⠑</button>
            <button type="button" id="Bchar"onclick="fun6()">⠋</button>
            <button type="button" id="Bchar"onclick="fun7()">⠛</button>
            <button type="button" id="Bchar"onclick="fun8()">⠓</button>
            <button type="button" id="Bchar"onclick="fun9()">⠊</button>
            <button type="button" id="Bchar"onclick="fun0()">⠚</button><br><br><br>
            
        </div>
        <div id="box3_2">
             <textarea rows="2" cols="20" style="font-family:'Montserrat';font-size: 40px;" id="txtarea2" placeholder="output"></textarea><br><br>
             <button onclick="clr()" id="clr">clear</button>
        </div>

    </div>
    </div>
    <script src="BtoTscript.js"></script>
</body>
</html>