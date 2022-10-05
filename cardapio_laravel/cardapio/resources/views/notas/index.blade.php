<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>
<body>
    <div class="row">
        <div class="col">

        </div>
        <div class="col">
            @foreach($notas as $a)
            <p>
            <a href="{{route('notas.show',$a->id)}}">Pedido mesa: {{$a->mesa}}
            @if($a->situation == false){
                Em preparação
            }
            @else{
                Pronto
            }
            @endif
            </a>
        </p>
            @endforeach
        </div>
        <div class="col">

        </div>
    </div>
    
</body>
</html>