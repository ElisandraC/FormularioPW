<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="proc.php" method="POST">
        <div>
            <label> Nome:</label>
            <input type= "text" id="nome" name="nome"/>
        <div>
       <div>
            <label> sexo:</label>
            <input type="radio" id="sexo" name="sexo" value="f"/>feminino
            <input type="radio" id="sexo" name="sexo" value="m"/>masculino
        </div>
        <div>
            <label> Senha:</label>
            <input type="password" id="x" name="senha"/>
            
        </div>
        <input type="submit" value= "cadastro"/>
    </form>
</body>
</html>