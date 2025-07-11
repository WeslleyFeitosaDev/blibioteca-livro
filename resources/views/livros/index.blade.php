<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biblioteca</title>
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
            font-size: 15px;
            color: #0e0b2cff;
            
        }

        .bnts{
            display: flex;
            width: 100%;
            position: relative;
        }

        .bnts button{
            cursor: pointer;
            width: 80px;
            height: 30px;
            border: none;
            border-radius: 5px;
            outline: none;
            transition: all .20s linear;
        }

        .bnts button:hover{
            background-color: #ffcd94ff;
        }

        .bnts button:first-child{
            background-color: #1d165cff;
            color: #94fff6ff;
        }
        .bnts button:first-child:hover{
            background-color: #ffcd94ff;
            color: #1d165cff;
        }

        .bnts button:last-child{
            position: absolute;
            right: 0;
        }
    </style>
    
</head>
<body>
    <div class="box_livros">
        <h1>Veja os livros desponíveis</h1>
        <div class="card_livro">
            <div class="img"></div>
            <div class="detalhes">
                <p>Titulo: </p>
                <p>Nome do autor : </p>
                <p>Preço : </p>
                <p>Categoria : </p>
                <p>Ano de lançamento: </p>
            </div>
            <div class="bnts">
                <button id="bntEditar">Editar</button>
                <button id="bntEditar">Excluir</button>
            </div>
        </div>
    </div>
</body>
</html>