<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Produtos</title>
</head>
<body>
    <h1>Todos os produtos</h1>
   <a href="/product/create">criar</a>
    @foreach ($product as $prod)
    <h2>{{ $prod->name }}</h2>
    <p>{{ $prod->descreption }}</p>
    <p>{{ $prod->price }}</p>
    <a href="/product/show/{{$prod->id}}">Detalhes</a>
    <hr>
    @endforeach
</body>
</html>