<html>
<head>
    <title>Тест на распознавание лиц</title>
    <style>
        h1 {
            margin-bottom: 2em;
            text-shadow: 9px 11px 26px black;
        }
        img {
            border: 1px solid black;
            padding: 5px;
            background: linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
            animation: shadow  2s infinite ease-in-out;
        }
        #o1 img {
            margin-left: 3em;
            transform: rotate(-7deg);
            box-shadow: 9px 11px 26px black;
        }
        #o2 img {
            box-shadow: 0 11px 26px black;
        }
        #o3 img {
            transform: rotate(7deg);
            box-shadow: -9px 11px 26px black;
        }
    </style>
</head>
<body>
<h1>Тест на распознавание лиц</h1>
    <a id="o1" target="_blanck" href="img.php?name=hZpip1ADYvw.jpg">
        <img width="300" src="img.php?name=hZpip1ADYvw.jpg">
    </a>
    <a id="o2" target="_blanck" href="img.php?name=7RSJEPx7GHo.jpg">
        <img width="300" src="img.php?name=7RSJEPx7GHo.jpg">
    </a>
    <a id="o3" target="_blanck" href="img.php?name=IjYIOHBoFWg.jpg">    
        <img width="300" src="img.php?name=IjYIOHBoFWg.jpg">
    </a>  
</body>
</html>