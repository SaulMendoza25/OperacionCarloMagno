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

    .comment {
      height: 120px;
      background-color: var(--text-input-field);
      border: none;
      border-radius: 8px;
      font-size: var(--md);
      padding: 6px;
      margin-bottom: 12px;
    }

    .form-file {
      border-radius: 8px;
      margin-top: 10px;
      margin-bottom: 10px;
      padding: 3%;
      border: thin solid black;
      border: none;
      background-color: var(--text-input-field);
    }

    .LGO-image {
      border-radius: 8px;
      background-color: var(--text-input-field);
     
      border: none;
      margin: 15px;
    }

    @media (max-width: 640px) {}
  </style>
  <title>🏆EMPRENDIMIENTO</title>
</head>

<body>
  <div class="main">
    <div class="form-container-main">
      <img class="logo" src="https://deone.com.ec/wp-content/uploads/2022/07/marca-DeOne.com_.ec_-1-1024x688.png" alt="logo de la marca DeOne">
      <h1 class="title">🏆EMPRENDIMIENTO</h1>
      <h2 class="subtitle">Datos del proyecto emprendimiento</h1>
        <form class="form-main" action="{{url ('/emprendimiento')}}" method="post" enctype="multipart/form-data">
        @csrf 
        <div class="left">
            <label for="name_proyect">Nombre del proyecto:</label>
            <input type="text" name="name_proyect" class="form-control" id="name_proyect">
            <label for="name_property">Nombre(s) Propietario(s):</label>
            <input type="text" name="name_property" class="form-control" id="name_property">
            <label for="addresses">Direccion:</label>
            <input type="text" name="addresses" class="form-control" id="addresses">
            <label for="phone_number">Telefono:</label>
            <input type="text" NAME="phone_number" class="form-control" id="phone_number">
            <label for="email">Correo Electronico:</label>
            <input type="text" name="email" class="form-control" id="email">
            <label for="start_date">Fecha de inicio negocio:</label>
            <input type="date" value="2023-01-01" min="2023-01-01" max="2150-01-01" name="start_date" class="form-control" id="start_date">
            <label for="end_date">Fecha de Fin:</label>
            <input type="date" value="2023-01-01" min="2023-01-01" max="2150-01-01" name="end_date" class="form-control" id="end_date">
            
            <label for="require_trainings">Requiere Capacitaciones:</label>
            <select class="combo" name="require_trainings" onChange="combo(this, 'demo')" id="require_trainings">
              <option value="SI">SI</option>
              <option value="NO">NO</option>
            </select>
            <label for="upload_proyect">Subir el proyecto:</label>
            <input type="text" name="upload_proyect" class="form-control" id="upload_proyect">
            <label for="logo">Logo:</label>
            <div class="PRP-DIV">
              <select class="combo" name="logo" onChange="combo(this, 'demo')" id="logo">
                <option value="SI">SI</option>
                <option value="NO">NO</option>
              </select>
            <input type="file" name="up_image_logo[]" accept="image/png, image/jpeg" class="form-file LGO-image" id="up_image_logo">
            </div>
          </div>
          <div class="right">

            <label for="main_products">Productos Principales:</label>
            <div class="PRP-DIV">
              <textarea name="main_products" cols="40" rows="5" class="comment" id="main_products"></textarea>
              <input type="file" name="up_image_main_products" class="form-file" id="up_image_main_products">
            </div>
            <label for="service_products">Servicios Principales</label>
            <input type="text" name="service_products" class="form-control" id="service_products">
            <label for="main_investment_source">Fuente de Inversion Principales:</label>
            <input type="text" name="main_investment_source" class="form-control" id="main_investment_source">
            <label for="principal_investment_range">Rango de Inversion Principal:</label>
            <input type="text" name="principal_investment_range" class="form-control" id="principal_investment_range">
            <label for="mark">Marca:</label>
            <input type="text" name="mark" class="form-control" id="mark">
            <label for="number_employees">Numero de Empleados:</label>
            <input type="text" name="number_employees" class="form-control" id="number_employees">
            <button class="primary-button" action="submit">Enviar</button>
          </div>
          <form>
    </div>
  </div>
</body>

</html>