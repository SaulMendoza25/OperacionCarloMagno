<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@300;500;700&display=swap" rel="stylesheet">
  <style>
    :root {
      --white: #FFFFFF;
      --black: #000000;
      --very-light-pink: #C7C7C7;
      --text-input-field: #F7F7F7;
      --hospital-green: #ACD9B2;
      --sm: 14px;
      --md: 16px;
      --lg: 25px;
    }

    body {
      margin: 0;
      font-family: 'Quicksand', sans-serif;
      /* background-color: papayawhip; */
    }

    .main {
      width: 100%;
      height: 100vh;
      display: grid;
      place-items: center;
     
    }

    .form-container-main {
      display: grid;
      width: 1000px;
      background-color: white;
    }

    .form-container-main .form-main {
      display: grid;
      grid-template-columns: 1fr 1fr;
      column-gap: 50px;
    }

    .form-main .left {
      display: flex;
      flex-direction: column;
    }

    .form-main .right {
      display: flex;
      flex-direction: column;
    }

    .logo {
      width: 250px;
      margin-bottom: 20px;
      justify-self: center;
    }

    .title {
      font-size: var(--lg);
      margin-bottom: 12px;
      text-align: center;
    }

    .subtitle {
      color: black;
      font-size: 25px;
      font-weight: 300px;
      margin-top: 0;
      margin-bottom: 32px;
      text-align: left;
    }

    label {
      font-size: var(--sm);
      font-weight: bold;
      margin-bottom: 4px;
      cursor: pointer;
    }

    .form-control {
      background-color: var(--text-input-field);
      border: none;
      border-radius: 8px;
      height: 30px;
      font-size: var(--md);
      padding: 6px;
      margin-bottom: 12px;
    }

    .primary-button {
      background-color: var(--hospital-green);
      border-radius: 8px;
      border: none;
      color: var(--white);
      width: 100%;
      cursor: pointer;
      font-size: var(--md);
      font-weight: bold;
      height: 50px;
      margin-top: 25px;
    }

    .combo {
      background-color: var(--text-input-field);
      border: none;
      border-radius: 8px;
      height: 50px;
      font-size: var(--md);
      padding: 6px;
      margin-bottom: 12px;
    }

    .espacio {
      margin-top: 60px;
    }
    .comment{
        height:120px; 
        width:300px;
    }
    .form-file{
        margin-top: 10px;
        margin-bottom: 10px;
        padding:3%;
        border:thin solid black;
    }
    @media (max-width: 640px) {
      
    }
  </style>
  <title>🏆EMPRENDIMIENTO</title>
</head>
<body>
  <div class="main">
    <div class="form-container-main">
      <img class="logo" src="https://deone.com.ec/wp-content/uploads/2022/07/marca-DeOne.com_.ec_-1-1024x688.png" alt="logo de la marca DeOne">
      <h1 class="title">🏆EMPRENDIMIENTO</h1>
      <h2 class="subtitle">Datos del proyecto emprendimiento</h1>
        <form class="form-main" action="./" method="post" enctype="multipart/form-data">
          <div class="left">
            <label for="NDP">Nombre del proyecto:</label>
            <input type="text" name="NDP" class="form-control" id="NDP">
            <label for="NPO">Nombre(s) Propietario(s):</label>
            <input type="text" name="NPO" class="form-control" id="NPO">
            <label for="DRN">Direccion:</label>
            <input type="text" name="DRN" class="form-control" id="DRN">
            <label for="TLF">Telefono:</label>
            <input type="text" NAME="TLF" class="form-control" id="TLF">
            <label for="CEO">Correo Electronico:</label>
            <input type="text" name="CEO" class="form-control" id="CEO">
            <label for="FIN">Fecha de inicio negocio:</label>
            <input type="text" name="FIN" class="form-control" id="FIN">
        </div>
          <div class="right">
          <label for="CMT">Productos Principales:</label>
            <div class="PRP-DIV">
            <textarea name="CMT" cols="40" rows="5" class="comment" id="CMT"></textarea>
            <input type="file" name="PRP" class="form-file" id="PRP">
            </div>
            <label for="SRP">Servicios Principales</label>
            <input type="text" name="SRP" class="form-control" id="SRP">
            <label for="FIP">Fuente de Inversion Principales:</label>
            <input type="text" name="FIP" class="form-control" id="FIP">
            <label for="RIP">Rango de Inversion Principal:</label>
            <input type="text" name="RIP" class="form-control" id="RIP">
            <label for="MRC">Marca:</label>
            <input type="text" name="MRC"class="form-control" id="MRC">
            <label for="NDE">Numero de Empleados:</label>
            <input type="text" name="NDE" class="form-control" id="NDE">
          </div>
          <div class="left">
            <label for="FDF">Fecha de Fin:</label>
            <input type="text" name="FDF" class="form-control" id="FDF">
            <label for="RCS">Requiere Capacitaciones:</label>
            <select class="combo" name="RCS" onChange="combo(this, 'demo')" id="RCS">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
            <label for="SEP">Subir el proyecto:</label>
            <input type="text" name="SEP" class="form-control" id="SEP">
            <label for="LGO">Logo:</label>
            <input type="text" name="LGO" class="form-control" id="LGO">
          </div>
          <div class="right">
          <button class="primary-button" action="submit">Enviar</button>
          </div>
          <form>
     </div>
   </div>
 </body>
</html>