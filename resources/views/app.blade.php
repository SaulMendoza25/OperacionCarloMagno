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
      --black: #000000;
      --white: #FFFFFF;
      --very-light-pink: #C7C7C7;
      --text-input-field: #F7F7F7;
      --dark: #232830;
      --hospital-green: #ACD9B2;
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
      place-items:left;
      width: 300px;
    }

    .form-container-main .form-main {
      display: flex;
      flex-direction: column;

    }

   .logo {
      width: 150px;
      margin-bottom: 20px;
      justify-self: center;
    }
    .title {
       font-size: var(--lg);
      margin-bottom: 12px;
      text-align: center;
    }
    label{
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
    }
  </style>
  <title>Document</title>
</head>

<body>
  <div class="main">
    <div class="form-container-main">
    <img class="logo" src="https://deone.com.ec/wp-content/uploads/2022/07/marca-DeOne.com_.ec_-1-1024x688.png" alt="logo de la marca DeOne">

      <form class="form-main" action="/">
        <h1 class="title">Datos Generales</h1>
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
          <button class="primary-button" action="submit">Aceptar</button>
        <form>
    </div>
  </div>
</body>

</html>