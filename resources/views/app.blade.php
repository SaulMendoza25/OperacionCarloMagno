<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/app.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
    body{
        margin:  0;
        /* background-color: papayawhip; */
    }
    .main{
      width: 100%;
      height: 100vh;
      display: grid;
      place-items: center;
    }
   .main .form-main{
    display: grid;
   }
   .form-main .logo{
    width: 150px;
    margin-bottom: 20px;
    justify-self: center;
   }
  .tile{

  }
    </style>
    <title>Document</title>
</head>
<body>
 <div class="main"> 
<form class="form-main" action="/">
<img  class="logo" src="https://deone.com.ec/wp-content/uploads/2022/07/marca-DeOne.com_.ec_-1-1024x688.png" alt="logo de la marca DeOne">
<h1 class="Titulo">Datos Generales</h1>

<div class="form-skills">
      <label for="RUC">RUC:</label>
      <input type="text" class="form-control" id="RUC">
      <label for="RZS">Razon Social:</label>
      <input type="text" class="form-control" id="RZS">
      <label for="NBC">Nombre Comercial:</label>
      <input type="text" class="form-control" id="NBC">
      <label for="NDC">Numeros de Colaboradores:</label>
      <input type="text" class="form-control" id="NDC">
      <label for="DCN">Direccion:</label>
      <input type="text" class="form-control" id="DCN">
      <button class="envio-de-datos" action="submit">Aceptar</button>
  </div>
    </div>
<form>
</body>
</html>