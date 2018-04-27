<html>
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <div class="cont">
            <h1>Multiplicacion</h1>
            <form action="multiplicacion.php" method="post">
                <input  type="text" class="campo" placeholder="ingrese un numero" name="dato1">
                <input  type="text" class="campo" placeholder="ingrese un numero" name="dato2">
                <br>
                <hr>
                <button class="boton" >Procesar</button>
            </form>
        </div> 
    </body>
</html>
<style>
    .campo{
        padding:8px;
        margin:2px;
        border:1px solid #393E46;
        height: 30px;
        border-radius: 10px;
    }
    .boton{
        height: 30px;
        padding:8px;
        color:#fff;
        background-color: #393E46;
        width: 150px;
        font-weight: bold;
    }
    .boton:hover{
        color:#393E46;
        background-color: #fff;
        border:1px solid #393E46;
    }
    .cont{
        margin: 0 auto;
        text-align: center;
    }
</style>


