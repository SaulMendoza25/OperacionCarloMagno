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

    @media (max-width: 640px) {}
  </style>
  <title>🪃MIPYMES</title>
</head>

<body>
  <div class="main">
    <div class="form-container-main">
      <img class="logo" src="https://deone.com.ec/wp-content/uploads/2022/07/marca-DeOne.com_.ec_-1-1024x688.png" alt="logo de la marca DeOne">
      <h1 class="title">MIPYMES</h1>
      <h2 class="subtitle">Datos Generales</h1>
        <form class="form-main" action="./" method="post" enctype="multipart/form-data">
          <div class="left">
            <label for="RUC">RUC:</label>
            <input type="text" class="form-control" id="RUC">
            <label for="Business_name">Razon Social:</label>
            <input type="text" nam="Business_name" class="form-control" id="Business_name">
            <label for="Trade_name">Nombre Comercial:</label>
            <input type="text" name="Trade_name" class="form-control" id="Trade_name">
            <label for="Number_of_collaborators">Numeros de Colaboradores:</label>
            <input type="text" NAME="Number_of_collaborators" class="form-control" id="Number_of_collaborators">
            <label for="Formation_of_manager_or _administrator">Formación del gerente o administrador:</label>
            <select class="combo" name="Formation_of_manager_or _administrator" onChange="combo(this, 'demo')" id="Formation_of_manager_or _administrator">
              <option value="Primaria">Primaria</option>
              <option value="Secundaria">Secundaria</option>
              <option value="Tercer Nivel">Tercer Nivel</option>
              <option value="Maestria">Maestria</option>
              <option value="Doctorado">Doctorado</option>
            </select>
            <label for="Address">Direccion:</label>
            <input type="text" name="Address" class="form-control" id="Address">
            <label for="E-mail_address">Correo Electronico:</label>
            <input type="text" name="E-mail_address" class="form-control" id="E-mail_address">
          </div>
          <div class="right">
            <label for="Province">Provincia:</label>
            <input type="text" name="Province" class="form-control" id="Province">
            <label for="County">Canton:</label>
            <input type="text" name="County" class="form-control" id="County">
            <label for="Parish">Parroquia:</label>
            <input type="text" name="Parish" class="form-control" id="Parish">
            <label for="Contact_telephone_number">Telefono de contactos:</label>
            <input type="text" name="Contact telephone_number" class="form-control" id="Contact_telephone_number">
            <label for="Owner/Legal_representative">Titular/Representante legal:</label>
            <input type="text" name="Owner/Legal_representative" class="form-control" id="Owner/Legal_representative">
            <label for="Gender_Representative">Genero Representante:</label>
            <select class="combo" name="Gender_Representative" onChange="combo(this, 'demo')" id="Gender_Representative">
              <option value="Masculino">Masculino</option>
              <option value="Femenino">Femenino</option>
            </select>
          </div>
          <div class="left">
            <h1 class="subtitle">Actividad Comercial y Categorías</h1>
            <label for="Logo">Logo: (opcional)</label>
            <select class="combo" name="Logo" onChange="combo(this, 'demo')" id="Logo">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
            <label for="Number_of_establishments">Numeros de establecimientos:</label>
            <input type="text" name="Number_of_establishments" class="form-control" id="Number_of_establishments">
            <label for="Business_start_date">Fecha de inicio negocio:</label>
            <input type="text" name="Business_start_date" class="form-control" id="Business_start_date">
            <label for="Category">Categoria:</label>
            <select class="combo" name="Category" onChange="combo(this, 'demo')" id="Category">
              <option value="Comercio">Comercio</option>
              <option value="Servicio">Servicio</option>
              <option value="Industrias">Industrias</option>
              <option value="Artesanias">Artesanias</option>
              <option value="Otros">Otros</option>
            </select>
          </div>
          <div class="right">
            <label class="Products_or_services" for="Products_or_services">Productos o servicios:</label>
            <select class="combo" name="Products_or_services" onChange="combo(this, 'demo')" id="Products_or_services">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
            <label for="Fair_trade_products">Producto de comercio justo:</label>
            <select class="combo" name="Fair_trade_products" onChange="combo(this, 'demo')" id="Fair_trade_products">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
            <label for="Foreign_trade">Comercio exterior:</label>
            <select class="combo" name="Foreign_trade" onChange="combo(this, 'demo')" id="Foreign_trade">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
          </div>

          <div class="left">
            <h1 class="subtitle">Localización georeferenciada</h1>
            <label for="Coordinates">Cordenadas: (opcional)</label>
            <input type="text" name="Coordinates" class="form-control" id="Coordinates">
          </div>
          <div class="right">
            <label class="espacio" for="image">Imagen: (opcional)</label>
            <input type="text" name="image" class="form-control" id="image">
          </div>
          <div class="left">
            <h1 class="subtitle">Información Tecnológica</h1>
            <label for="E-commerce">Comercio Electrónico:</label>
            <input type="text" name="E-commerce" class="form-control" id="E-commerce">
            <label for="Requires_training">Requiere Capacitaciones:(opcional)</label>
            <input type="text" name="Requires_training" class="form-control" id="Requires_training">
            <label for="Web_page">Página web:(opcional)</label>
            <input type="text" name="Web_page" class="form-control" id="Web_page">
          </div>
          <div class="right">
            <label class="social_media" for="social_media">Redes Sociales: (opcional)</label>
            <input type="text" name="social_media" class="form-control" id="social_media">
            <label for="Whatsapp">Whatsapp:</label>
            <input type="text" name="Whatsapp" class="form-control" id="Whatsapp">
          </div>
          <div></div>
          <div class="right">
            <button class="primary-button" action="submit">Enviar</button>
          </div>
          <form>
    </div>
  </div>
</body>
</html>