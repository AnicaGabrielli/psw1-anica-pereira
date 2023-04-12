
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=7,8,edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="home.css" type="text/css" media="all" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
  <title>Home</title>

  <style>
  
  

    .todo {
      display: flex;
      justify-content: center;
      width: 100%;
      height: 100%;
    }

    .caixa {
      display: flex;
      flex-direction: row;
      justify-content: space-around;
      margin-top: 30px;
      width: 80%;
      height: 600px;
      flex-wrap: nowrap;
    }
    .imagem {
      width: 50%;
      border: 1px solid green;
    
    }
    .imagem img {
      width: 100%;
      height: 600px;
      
    }
    .cadastro {
      text-align: center;
      border: 1px solid green;
      width: 50%;
      display: flex;
      flex-direction: column;
      
    }

    #topo {
      font-size: 35px;
      color: darkgreen;
      text-align: center;
    }
    .titulo {
      width: 100%;
      text-align: center;
      margin-bottom:50px;
      margin-top: 20px;
    }
    .form{
      margin: 25px 50px;
    }
  #bnt{
    margin-top: 20px;
    
  }
#bnt a{
  text-decoration: none;
  color: green;
}

#verde{
  background-color: green;
  
}
a{
  text-decoration: none;
  color: white;
  
}
body{
  font-family:'Courier New' ;
  font-weight: bold;
}
#input{
  border:solid gray 2px;
}

  </style>
</head>
<body>
  
  <div class="todo">

    <div class="caixa">
         
      <div class="imagem">
        <img src="logif.jpg" alt="logo do IF">
      </div>
      <div class="cadastro">
         <div class="topo"><?php
    include_once('header.php');?></div>
        <div class="titulo">
          <h1 id="topo">Instituto Federal</h1>
        </div>

<div class="form">
  <form action="/action_page.php">
  <div class="mb-3 mt-3">
    <label for="email" class="form-label">Email:</label>
    <input id="input" type="email" class="form-control" id="email" placeholder="Enter email" name="email">
  </div>
  <div class="mb-3">
    <label for="pwd" class="form-label">Password:</label>
    <input id="input" type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
  </div>
  <div class="form-check mb-3">
    <label class="form-check-label">
      <input class="form-check-input" type="checkbox" name="remember">Lembre-me
    </label>
  </div>
  <button id="verde"type="submit" class="btn btn-primary"><a href="https://www.ifbaiano.edu.br/unidades/guanambi/">Entre</a></button>
</form>
</div>
        <div id="bnt">
          <buttom type="submit"><a href="cadaluno.php">Cadastre-se aqui!</a></buttom>
          
        </div>
        
      
       <div class="rodape"><?php
    include_once('footer.php');?></div>
      </div>
      
    </div>
  </div>
</body>
</html>
