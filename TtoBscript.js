function myFunction(){
    let res;
    var y;
    var x = document.getElementById("txtarea1").value;
    for (let i = 0; i < x.length; i++) {
        y= x.charAt(i);

    switch(y){
        case 'a':
            res="⠁";
            break;
        case 'b':
            res="⠃";
            break;
        case 'c':
            res="⠉";
            break;
        case 'd':
            res="⠙";
            break;
        case 'e':
            res="⠑";
            break;
        case 'f':
            res="⠋";
            break;
        case 'g':
            res="⠛";
            break;
        case 'h':
            res="⠓";
            break;
        case 'i':
            res="⠊";
            break;
        case 'j':
            res="⠚";
            break;
        case 'k':
            res="⠅";
            break;
        case 'l':
            res="⠇";
            break;
        case 'm':
            res="⠍";
            break;
        case 'n':
            res="⠝";
            break;
        case 'o':
            res="⠕";
            break;
        case 'p':
            res="⠏";
            break;
        case 'q':
            res="⠟";
            break;
        case 'r':
            res="⠗";
            break;
        case 's':
            res="⠎";
            break;
        case 't':
            res="⠞";
            break;
        case 'u':
            res="⠥";
            break;
        case 'v':
            res="⠧";
            break;
        case 'w':
            res="⠺";
            break;
        case 'x':
            res="⠭";
            break;
        case 'y':
            res="⠽";
            break;
        case 'z':
            res="⠵";
            break; 
        case ' ':
            res="   ";                  
    }  
    
    var val1=  document.getElementById("txtarea2");
    var val2=document.createTextNode(res);
    val1.appendChild(val2);
}
}