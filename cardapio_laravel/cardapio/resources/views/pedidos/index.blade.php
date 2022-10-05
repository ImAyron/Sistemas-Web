<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    

    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <title>Document</title>

</head>
@csrf

<body>
    
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ route('pedidos.index') }}">Criar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('notas.index')}}">Pedidos</a>
                    </li>
                </ul>
                <span class="navbar-text">

                </span>
            </div>
        </div>
    </nav>

    <div class="container text-center">

        <div class="row">
            <div class="col">
                <form action="{{ route('notas.store') }}" method="post">
                    @csrf
                    <label for="">Mesa:</label>
                    <select name='mesa' id='mesa'>
                        @for ($i = 1; $i <= $mesa; $i++)
                            <option value={{ $i }}>{{ $i }}</option>
                        @endfor
                    </select>


                    @for ($i = 0; $i <=intdiv($count,2); $i++)
                        <p> <img src="/img/picanha.jpg" class="img-thumbnail" alt="...">
                        <p></p>
                        <p>R${{ $pedidos[$i]->preco }}</p>
                        <p>{{ $pedidos[$i]->nome }}</p>
                        <input type="button" class="btn btn-primary" value=-
                            onclick="subtrairItem({{ $pedidos[$i]->id }},{{ $pedidos[$i]->preco }})">
                        <input id={{ $pedidos[$i]->id }} type="text" name="" value=0 disabled>
                        <input type="button" class="btn btn-primary" value=+
                            onclick="somarItem({{ $pedidos[$i]->id }},{{ $pedidos[$i]->preco }})">
                        <input type="hidden" name={{ $pedidos[$i]->id }} value=>
                        <input type="hidden" id={{ 'nome' .(-1 + $pedidos[$i]->id) }} value={{ $pedidos[$i]->nome }}>

                        </p>
                    @endfor

            </div>
            <div class="col">
                <div class="col">
                    <p></p>
                    @for ($i = intdiv($count,2)+1; $i < $count; $i++)
                        <p> <img src="/img/picanha.jpg" class="img-thumbnail" alt="...">
                        <p></p>
                        <p>{{ $pedidos[$i]->nome }}</p>
                        <input type="button" class="btn btn-primary" value=-
                            onclick="subtrairItem({{ $pedidos[$i]->id }},{{ $pedidos[$i]->preco }})">
                        <input id={{ $pedidos[$i]->id }} type="text" name="" value=0 disabled>
                        <input type="button" class="btn btn-primary" value=+
                            onclick="somarItem({{ $pedidos[$i]->id }},{{ $pedidos[$i]->preco }})">
                        <p>R${{ $pedidos[$i]->preco }}</p>
                        <input type="hidden" name={{ $pedidos[$i]->id }} value=>
                        <input type="hidden" id={{ 'nome' . (-1+$pedidos[$i]->id) }} value={{ $pedidos[$i]->nome }}>

                        </p>
                    @endfor

                </div>
            </div>
            <div class="row">

            </div>
            <div class="col">
                <p id="prec">Total Pedido: R$190,00</p>
                <input type="hidden" name="nota"id='nota'value="eoq">
                <input type="submit" class="btn btn-danger" value="Finalizar pedido"  onclick="fecharNota()">
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

</body>

</html>

<script>
    function somarItem(id, preco) {
        const valor = document.getElementById(id).value;
        document.getElementById(id).value = parseFloat(valor) + 1;

        var valora = (parseFloat(valor) + 1) * preco;
        document.getElementsByName(id).value = valora;



    }


    function subtrairItem(id, preco) {


        const valor = document.getElementById(id).value;
        if (Number(valor) > 0)
            document.getElementById(id).value = parseFloat(valor) - 1;
        var valora = (parseFloat(valor) - 1) * preco;
        document.getElementsByName(id).value = valora;

    }

    function fecharNota() {

        let nota = "";
        let numero={{$count}};
       
            for (let i = 0; i < {{ $count }}; i++) {
            let nome = document.getElementById("nome" + i).value;
            let preco = document.getElementsByName(i).value;

            
            console.log(nome)


            if (preco && parseFloat(preco) !== 0.0) {

                nota += nome + ': R$' + preco + '\n';

            }




        }
        
       

        var ok = document.getElementById("nota").value = String(nota);
       
        



    }
</script>
