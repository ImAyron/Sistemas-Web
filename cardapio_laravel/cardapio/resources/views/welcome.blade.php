<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Document</title>
</head>

<body>
    <div class="row">
        <div class="col bg-warning">

        </div>
        <div class="col ">
            <div>
                <img src="img/logo.png" class="mx-auto"style=" display: block;
                margin: 0px auto; width: 50%;text-align: center;" alt="...">
            </div>
            <p></p>
            <div style="text-align: center;">
                <a href="{{route('pedidos.index')}}"> <button url="" class="btn  btn-warning btn-lg btn-block">Fazer Pedido</button></a>
                <p></p>
                <a href="{{route('pedidos.create')}}"><button class="btn  btn-warning btn-lg btn-block">Cadastrar item</button></a>
                <p></p>
                <a href="{{route('notas.index')}}"><button class="btn  btn-warning btn-lg btn-block">Exibir Pedidos</button></a>
            </div>
           
        </div>
        <div class="col bg-warning">

        </div>
    </div>

</body>

</html>