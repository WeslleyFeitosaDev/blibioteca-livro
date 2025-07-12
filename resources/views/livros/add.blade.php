<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add</title>
    <link href='https://cdn.boxicons.com/fonts/brands/boxicons-brands.min.css' rel='stylesheet'>
    <link href='https://cdn.boxicons.com/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap');
        *{
            font-family: "Poppins", sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body{
            display: flex;
            width: 100%;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        .box_add{
            padding: 10px;
            width: 80%;
            height: 500px;
            background-color: #eeeeeeff;
            border-radius: 15px;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            position: absolute;
        }

        .box_add h1{
            
            font-size: 25px;
            color: #1d165cff;
        }

        form div{
            display: flex;
            flex-direction: column;
        }

        .box_add form{
            height: 90%;
            display: flex;
            align-items: center;
            flex-direction: column;
            justify-content: center;
            width: 100%;
        }

        form input{
            border-radius: 5px;
            width: 520px;
            height: 36px;
            align-items: center;
            border: none;
            outline: none;
            padding: 10px;
            margin-top: 5px;
            margin-bottom: 5px;
            color: #0e0b2cff;
        }

        .box_add label{
            font-size: 14px;
            color: #2a2a49ff;
        }

        .bnts {
            bottom: 10px;
            position: absolute;
            display: flex;
            width: 520px;
        }

        .bnts button,a{
            display: flex;
            justify-content: center;
            align-items: center;
            border-radius: 5px;
            width: 90px;
            height: 40px;
            outline: none;
            border: none;
            cursor: pointer;
            transition: all .20s linear;
        }

        .bnts a{
            text-decoration: none;
            font-size: 13px;
            background-color: #1d165cff;
            color: #ffffffff;
        }

        .bnts button{
            position: absolute;
            right: 0;
            background-color: #ffffff;
            color: #1d165cff;
        }

        
        .bnts button:hover{
            background-color: #ffcd94ff;
        }
        .bnts a:hover{
            background-color: #ffcd94ff;
            color: #1d165cff;
        }


        .bnts i{
            margin-right: 2px;
            font-size: 15px;
        }

    </style>
</head>
<body>
    <div class="box_add">
        <h1>Adicionar um Novo Livro</h1>

        <form action="{{route('livros.store')}}" method="POST">
            @csrf
            <div class="campo_titulo">
                <label for="titulo">Titulo: </label>
                <input type="text" placeholder="Digite o nome do livro" name="titulo" id="titulo" required>
            </div>
            <div class="campo_autor">
                <label for="nome_autor">Nome do autor: </label>
                <input type="text" placeholder="Digite o nome do autor" name="ator" id="nome_autor" required>
            </div>
            <div class="campo_preco">
                <label for="preco">Preço: </label>
                <input type="text" placeholder="Digite o preço do livro" name="preco" id="preco" required>
            </div>
            <div class="campo_categoria">
                <label for="categoria">Categoria: </label>
                <input type="text" placeholder="Digite a categoría" name="categoria" id="categoria" required>
            </div>
            <div class="campo_ano">
                <label for="ano">Ano do livro: </label>
                <input type="text" placeholder="Digite o ano do livro" name="ano_de_publicacao" id="ano" required>
            </div>
            
            <div class="bnts">
                <a href="{{route('livros.index')}}"><i class='bx  bx-chevrons-left'></i>Voltar</a>
                <button type="submit"><i class='bxr  bx-plus'  ></i>  Adicionar</button>
            </div>
        </form>
        
        
    </div>
    
</body>
</html>