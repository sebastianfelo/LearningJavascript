<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- No Robots de buscadores-->
        <meta name="robots" content="noindex">
        <meta name="googlebot" content="noindex">

    <title>PXW</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap-select/dist/css/bootstrap-select.min.css">

    
    
    <style>
        #header.header-fixed { background: linear-gradient(45deg, #1de099, #1dc8cd); padding: 20px 0; height: 72px; transition: all 0.5s;}
        #header { left: 0; top: 0; right: 0; z-index: 997; }
        #header #logo h1 { font-size: 36px; margin: -4px 0 0 0; padding: 0; line-height: 1; display: inline-block; font-family: "Montserrat", sans-serif; font-weight: 300; letter-spacing: 3px; text-transform: uppercase; }
        #header #logo img { max-height: 38px; float: left; }

        .titulo{ text-align: center; line-height: 40px; margin-bottom: 40px; }
    </style>


</head>
<body>
    
<header id="header" class="header-fixed">
    <div class="container">
      <div id="logo" class="pull-left">
         <a href="#intro"><img src="https://pxw.com.ar/pxw/assets/img/apple-touch-icon.png" alt="Pedidos Por WHatsapp"></a>
         <h1><a href="#intro" class="scrollto">Pedidos Por Whatsapp</a></h1>
      </div>
    </div>
</header>









<div class="container">

<!-- /////   ////--> 
<?php
    if(isset($_POST['enviar'])){
        
        echo $_POST['mitienda'];



    }
?>
<!-- /////   ////-->



        <h3 class="titulo">Listo, tu suscripción ya esta en curso,<br>la validación fina de MercadoPago puede tardar hasta 24hs.</h3>
        <h4 class="titulo">Pero podemos ir ganando tiempo si nos indicas cual es tu tienda</h4>
        
        <div class="row" style="text-align: center;">
            <button type="button" class="btn btn-default btn-lg" onclick="$('#tengoTienda').slideDown('slow'), $('#tiendaNueva').slideUp('slow') ">
                <span class="glyphicon glyphicon-home" aria-hidden="true"></span> Ya tengo mi tienda creada
            </button>
            <button type="button" class="btn btn-default btn-lg" onclick="$('#tengoTienda').slideUp('slow'), $('#tiendaNueva').slideDown('slow') ">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span> Todavia no tengo Tienda
            </button>
        </div>


    <div class="row" id="tengoTienda" style="display: none;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <div class="form-group">
                <h3>Ya tengo mi tienda creada:</h3>
                <form action="" method="POST">
                    <select class="selectpicker form-control"  data-live-search="true" title="Mi tienda es:" id="mitienda" name="mitienda">
                        <option value=""></option>
                        <option>Mustard</option>
                        <option>Ketchup</option>
                        <option>Barbecue</option>
                    </select>
                    <br>
                    <input type="submit" value="Enviar" class="btn btn-primary" id="enviar" name="enviar">
                </form>
            </div>
        </div>
        <div class="col-md-3"></div>
    </div>


    <div class="row" id="tiendaNueva" style="display: none;">
        <div class="col-md-3"></div>
        <div class="col-md-6">
            <h3>Todavia no tengo Tienda:</h3>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre de tu Tienda</label>
                    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
        <div class="col-md-3"></div>
    </div>







</div><!-- fin container-->

        
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.bundle.min.js"></script>
<script src="bootstrap-select/dist/js/bootstrap-select.js"></script>

<script>

    $(function () {
        $('select').selectpicker();
    });

</script>




</body>
</html>