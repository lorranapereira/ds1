<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Consultar</h1>
    <form action="/index.php/Welcome/salvarConsulta" method="post">
        <label for="">Bairro</label>
        <input name="bairro" type="text">
        <label for="">Número de dormitórios</label>
        <input name="dormitorios" type="number">
        <label for="">Tipo de operação</label>
        <select name="tipo_operacao">
            <option value="venda">Venda</option>
            <option value="aluguel">Aluguel</option>
        </select>
        <button type="submit">Enviar</button>
    </form>
</body>
</html>