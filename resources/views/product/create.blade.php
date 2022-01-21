<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Criar produto</h1>
    <form action="/product/store" method="POST">
        @csrf
        <input name="name" placeholder="Nome"><br><br>
        <textarea name="description" pleaceholder="Descrição"></textarea><br><br>
        <input type="number" name="price" pleaceholder="Preço"><br><br>
        <button type="submit"> enviar</button>

    </form>
</body>
</html>