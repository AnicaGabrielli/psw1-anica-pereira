<?php

/*echo $_POST['nome'];
echo "<br>";
echo $_POST['matricula'];
echo "<br>";
echo $_POST['date'];
echo "<br>";
*/
?>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=7,8,edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <style>
.div{
  margin:50px;
      text-align: center;
      display: flex;
      width: 100%;
      justify-content: center;
    }
  </style>
    <title>Tabela de dados</title>
    
  </head>
  <body>
  <form method="POST" action="editaraluno.php"></form>
   <div class="div"> <table border="1">
      <tr>
        <th>Nome</th>
        <th>Matricula</th>
        <th>Nascimento</th>
      </tr>
      <tr>
      <input  <td><?php echo $_POST['nome'];?></td>
        <td><?php echo $_POST['matricula']; ?></td>
        <td><?php echo $_POST['date'];?></td>
      </tr>
    </table></div>
    <div class="div">
      <button type="sumit">editar</a></button>
    </div>
  </body>
</html>