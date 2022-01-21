<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Editar produto</h1>

    <a href="/product/delete/{{$product->id}}">
        Deletar</a><br><br>
    <form action="/product/update/{{$product->id}}" method="POST">
        @csrf
        <input name="name" placeholder="Nome" value="{{$product->name}}"><br><br>
        <textarea name="description" pleaceholder="Descrição" rows="4"> {{$product->description}}</textarea><br><br>
        <input type="number" name="price" pleaceholder="Preço" value="{{$product->price}}"><br><br>
        <button type="submit"> enviar</button>

    </form>
</body>
</html>