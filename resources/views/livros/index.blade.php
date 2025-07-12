<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');

        body{
            width: 100%;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            align-items: center;
        }
        *{
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        .box_livros{
            width: 80%;
            height: 450px;
            background-color: #eeeeeeff;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: absolute;
        }
        .box_livros h1{
            position: absolute;
            top: 10px;
            font-size: 25px;
            color: #1d165cff;
        }

        .card_livro{
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 10px;
            border-radius: 10px;
            width: 220px;
            height: 300px;
            background-color: #ffffff;
            position: absolute;
        }

        .card_livro .img{
            border-radius: 5px;
            width: 100%;
            height: 90px;
            background-color: #1d165cff;
        }

        .detalhes{
            width: 100%;
            height: 150px;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .detalhes p{
            font-size: 13px;
            color: #0e0b2cff;
            
        }
        
        .especificacaoes{
            color: #ffcd9dff;
        }

        .bnts{
            display: flex;
            width: 100%;
            position: relative;
        }

        #bntEditar,#bntExcluir{
            font-size: 13px;
            text-align: center;
            display: flex;
            align-items: center;
            justify-content: center ;
            cursor: pointer;
            width: 80px;
            height: 30px;
            border: none;
            border-radius: 5px;
            outline: none;
            transition: all .20s linear;
        }


        .bnts a{
            text-decoration: none;
            background-color: #1d165cff;
            color: #ffffffff;
        }
        

        .bnts #bntExcluir{
            position: absolute;
            right: 0;
            background-color: #ebeaeaff;
        }
        .bnts a:hover{
            background-color: #ffcd94ff;
        }
        .bnts #bntExcluir:hover{
            background-color: #ffcd94ff;
        }


        .bnt_add_livro{
            display: flex;
            align-items: center;
            justify-content: center;
            right: 0;
            position: absolute  ;
            background-color: #1d165cff;
            height: 100%;
            width: 80px;
            border-top-right-radius: 15px; 
            border-bottom-right-radius: 15px; 
        }
        .bnt_add_livro i{
            font-size: 30px;
            color: #ffffff;
            transition: all .20s linear;
        }

        .bnt_add_livro i:hover{
            color: #ffcd94ff;
        }
        
    </style>
    
</head>
<body>
    <div class="box_livros">
        <h1>Veja os livros desponíveis</h1>
        
        @if($livros->isEmpty())
            <p>Não existem cursos</p>
        @else
            @foreach($livros as $livro)
                <div class="card_livro">
                    <div class="img"></div>
                    <div class="detalhes">
                        <p>Titulo: <strong class="especificacaoes">{{$livro->titulo}}</strong></p>
                        <p>Nome do autor: <strong class="especificacaoes" >{{$livro->ator}}</strong></p>
                        <p>Preço: <strong class="especificacaoes">{{$livro->preco}}</strong></p>
                        <p>Categoria: <strong class="especificacaoes">{{$livro->categoria}}</strong></p>
                        <p>Ano de lançamento: <strong class="especificacaoes">{{$livro->ano_de_publicacao}}</strong></p>
                    </div>
                    <div class="bnts">
                        <a id="bntEditar"  href="{{route('livros.edit' , $livro->id )}}">Editar</a>
                        <form action="{{route('livros.destroy', $livro->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" id="bntExcluir">Excluir</button>
                        </form>
                        
                    </div>
                </div>
            @endforeach
        @endif

        <div class="bnt_add_livro">
            <a id="bntAdd"  href="{{route('livros.create')}}"><i class='bxr  bx-plus-circle'></i></a>
        </div>
    </div>
</body>
</html>