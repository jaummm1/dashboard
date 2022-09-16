<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        div.cima {
            display: flex;
            justify-content: space-around;
        }

        div.dados {
            display: flex;
            justify-content: space-around;
            align-items: center;
        }

        div.id {
            display: flex;
            justify-content: space-between;
        }

        div.meio {
            display: flex;
            margin: 100px;
            justify-content: center !important;
            align-items: center !important;
        }

        div.fim {
            display: flex;
            justify-content: flex-end;
        }
    </style>

</head>

<body>
    <div class="cima">
        <h1>Id:</h1>
        <h1>Nome de Usuario</h1>
        <h1>Pontuação</h1>
    </div>


    @foreach ($rankings as $ranking)
        <div class="dados">
            <div class="id">
                <h1>{{ $ranking->id }}</h1>
            </div>

            <div class="meio">
                <h1>{{ $ranking->nome_usuario }}</h1>
            </div>

            <div class="fim">
                <h1>{{ $ranking->pontos }}</h1>
            </div>
        </div>
    @endforeach

</body>

</html>
