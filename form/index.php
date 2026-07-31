<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulário de contato</h1>
    <form action="receba.php" method="POST">
         <input type='text' placeholder='Nome' name='nome'>
         <br>
         <input type='text' placeholder='Endereço' name='endereco'>
         <br>
         <input type='email' placeholder='Email' name='email'>
         <br>
         <select name="pais">
            <option value="">Selecione um país</option>
            <option value="Brasil">Brasil</option>
            <option value="França">França</option>
            <option value="Croacia">Croacia</option>
        </select>
        <br>
        <div>
            <input type="radio" name="turno" value="Manhã">Manhã<br>
            <input type="radio" name="turno" value="Tarde">Tarde<br>
            <input type="radio" name="turno" value="Noite">Noite<br>
        </div>
         <button type='submit'>Enviar</button>
    </form>
</body>
</html>
