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
    }

    .form-container-main .form-main {
      display: grid;
      grid-template-columns: 1fr 1fr;
      gap: 25px;
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
    }

    input {
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

    @media (max-width: 640px) {
      .form-container-main .form-main {
        display: flex;
        flex-direction: column;
      }
    }
  </style>
  <title>Document</title>
</head>

<body>
  <div class="main">
    <div class="form-container-main">
      <img class="logo" src="https://deone.com.ec/wp-content/uploads/2022/07/marca-DeOne.com_.ec_-1-1024x688.png" alt="logo de la marca DeOne">
      <h1 class="title">MIPYMES</h1>
      <h2 class="subtitle">Datos Generales</h1>
        <form class="form-main" action="/">
          <div class="left">
            <label for="RUC">RUC:</label>
            <input type="text" class="form-control" id="RUC">
            <label for="RZS">Razon Social:</label>
            <input type="text" class="form-control" id="RZS">
            <label for="NBC">Nombre Comercial:</label>
            <input type="text" class="form-control" id="NBC">
            <label for="NDC">Numeros de Colaboradores:</label>
            <input type="text" class="form-control" id="NDC">
            <label for="FGA">Formación del gerente o administrador:</label>
            <select class="combo" name="optionlist " onChange="combo(this, 'demo')">
              <option value="Primaria">Primaria</option>
              <option value="Secundaria">Secundaria</option>
              <option value="Tercer Nivel">Tercer Nivel</option>
              <option value="Maestria">Maestria</option>
              <option value="Doctorado">Doctorado</option>
            </select>
            <label for="DCN">Direccion:</label>
            <input type="text" class="form-control" id="DCN">
            <label for="CEO">Correo Electronico:</label>
            <input type="text" class="form-control" id="CEO">
          </div>
          <div class="right">
            <label for="PRV">Provincia:</label>
            <input type="text" class="form-control" id="PRV">
            <label for="CTN">Canton:</label>
            <input type="text" class="form-control" id="CTN">
            <label for="PRQ">Parroquia:</label>
            <input type="text" class="form-control" id="PRQ">
            <label for="TDC">Telefono de contactos:</label>
            <input type="text" class="form-control" id="TDC">
            <label for="TRL">Titular/Representante legal:</label>
            <input type="text" class="form-control" id="TRL">
            <label for="GRT">Genero Representante:</label>
            <input type="text" class="form-control" id="GRT">
          </div>
          <div class="left">
            <h1 class="subtitle">Actividad Comercial y Categorías</h1>
            <label for="LGO">Logo:</label>
            <select class="combo" name="optionlist " onChange="combo(this, 'demo')">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
            <label for="NDE">Numeros de establecimientos:</label>
            <input type="text" class="form-control" id="NDE">
            <label for="FIN">Fecha de inicio negocio:</label>
            <input type="text" class="form-control" id="FIN">
            <label for="CGA">Categoria:</label>
            <select class="combo" name="optionlist " onChange="combo(this, 'demo')">
              <option value="Comercio">Comercio</option>
              <option value="Servicio">Servicio</option>
              <option value="Industrias">Industrias</option>
              <option value="Artesanias">Artesanias</option>
              <option value="Otros">Otros</option>
            </select>
          </div>
          <div class="right">
            <label class="espacio" for="POS">Productos o servicios:</label>
            <select class="combo" name="optionlist " onChange="combo(this, 'demo')">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
            <label for="POS">Producto de comercio justo:</label>
            <select class="combo" name="optionlist " onChange="combo(this, 'demo')">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
            <label for="POS">Comercio exterior:</label>
            <select class="combo" name="optionlist " onChange="combo(this, 'demo')">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
          </div>

          <div class="left">
            <h1 class="subtitle">Localización georeferenciada</h1>
            <label for="CDS">Cordenadas:</label>
            <input type="text" class="form-control" id="CDS">
          </div>
          <div class="right">
            <label class="espacio" for="IMG">Imagen:</label>
            <input type="text" class="form-control" id="CDS">
          </div>

          <div class="left">
            <h1 class="subtitle">Información Tecnológica</h1>
            <label for="CEC">Comercio Electrónico:</label>
            <input type="text" class="form-control" id="CEC">
            <label for="RCN">Requiere Capacitaciones:</label>
            <input type="text" class="form-control" id="RCN">
            <label for="PWB">Página web:</label>
            <input type="text" class="form-control" id="PWB">
          </div>
          <div class="right">
            <label class="espacio" for="RSS">Redes Sociales:</label>
            <input type="text" class="form-control" id="RSS">
            <label for="WTP">Whatsapp:</label>
            <input type="text" class="form-control" id="WTP">
            <button class="primary-button" action="submit">Aceptar</button>
          </div>
          <form>
    </div>
  </div>
</body>

</html>