#coding:utf-8
import cgi

print("Content-type: text/html; charset=utf-8\n")

html = """<!DOCTYPE html>
<html>
<head>
    <title>Tests Abey</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wdth@90&display=swap" rel="stylesheet">
    <link href='style.css' rel="stylesheet">
</head>

<body>
    <h1 class='centered'>Site des abeilles</h1>
    <div class='okok oui'>
        <p class="centered">Est-ce que ceci est un &lsaquo;aal&rsaquo;</p>
        <img src="../images/chat1.jpg" height="200px" width="300px" class="centered">	
        
        <div style="width: 90%; overflow: hidden; margin-bottom: 3em; height: 100px;" class="oui">
            <div class="1" style="width: 45%; float: left;"> 
                <button>&lsaquo;</button>
            </div>
            <div class="2" style="width:50%; margin-left: 40%;"> 
                <button>oui</button>
                <button>non</button>
                <div style="float: right;">
                    <button>&rsaquo;</button>
                </div>
            </div>
       </div>
    </div>

</body>
</html>
"""
print(html)