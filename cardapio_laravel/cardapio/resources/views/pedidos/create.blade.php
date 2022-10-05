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

<body >

    <form action="{{route('pedidos.store')}}" method="post">
    @csrf   

        <div class="form-group"> <br>
            <label for="nome">nome</label>
            <input type="text" class="form-control" name="nome" id="nome" required>
        </div>

        <div class="form-group">
            <label for="preco">Preço</label>
            <input type="float" class="form-control" name="preco"  required>
            
        </div>

        <div class="text-right">
            <input type="submit" value="Cadastrar" class="btn btn-primary">
            <input type="reset" value="Limpar" class="btn btn-danger">
        </div>

    </form>
</body>

</html>
