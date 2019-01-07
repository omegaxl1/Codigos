CREATE TABLE categoria (
idcategoria INTEGER PRIMARY KEY IDENTITY,
nombre VARCHAR(50) NOT NULL UNIQUE,
descripcion VARCHAR(256) NULL,
condicion BIT DEFAULT(1)
);


INSERT INTO categoria (nombre, descripcion) VALUES ('item1','');



"Conexion": "data source=.\\SQLEXPRESS;initial catalog=dbsistema;user id=usuario;password=11231321321;persist security info=True;"

-*****************************-

<html>
<head>
    <script language="JavaScript">
 
    /* Determinamos el tiempo total en segundos */
    var totalTiempo=600;
 
 
 
    function updateReloj()
    {
        document.getElementById('CuentaAtras').innerHTML = "*** "+totalTiempo+" segundos restantes";
 
        if(totalTiempo==0)
        {
            alert ('fin')
        }else{
            /* Restamos un segundo al tiempo restante */
            totalTiempo-=1;
            /* Ejecutamos nuevamente la función al pasar 1000 milisegundos (1 segundo) */
            setTimeout("updateReloj()",1000);
        }
    }
 
    window.onload=updateReloj;
 
    </script>
</head>
 
<body>
 
<h1>Tiempo restante </h1>
<h2 id='CuentaAtras'></h2>
 
</body>
</html>
