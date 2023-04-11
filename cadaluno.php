<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=7,8,edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Cadastro</title>
  <style type="text/css" media="all">
.caixa{
  display: flex;
  width: 100%;
  justify-content: center;
  margin-top: 50px;
  color:#1700FF;
}
.form{
  background-color: lightgreen;
  text-align: center;
  border: 10px groove darkgreen;
  padding: 10px;
}
button{
  background: #36FF83;
  color:#1700FF;
}
  </style>
</head>
<body>
  <div class="caixa">
    <div class="form">
      <h1>Cadastro: Adicione os dados</h1>
      
      <form action="mostraluno.php" method="post" accept-charset="utf-8">
        <label for="nome">Nome</label>
        <input type="text" name="nome" id="nome" value="" required/><br /><br />
        <label for="matricula">Matricula</label>
        <input type="text" name="matricula" id="matricula" value="" required/>
<br /><br />
        <label for="date">Data de nascimento</label>
        <input type="date" name="date" id="date" value="" required/><br /><br />
<button type="submit">Enviar dados</button>
      </form>
    </div>
  </div>
</body>
</html>