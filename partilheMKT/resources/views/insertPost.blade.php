<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href="../libs/materialize/icon.css">
    <link rel="stylesheet" href="../libs/materialize/materialize.min.css">
    <link rel="stylesheet" href="../libs/materialize/fonts.css">
    <link rel="stylesheet" href="../css/partilheMKT.css">
    <link rel="stylesheet" href="../libs/summernote/summernote.css">

    <script src="../libs/materialize/materialize.min.js"></script>
    <script src="../libs/jquery/jquery-3.3.1.min.js"></script>
    <script src="../libs/summernote/summernote.js"></script>
    <script src="../libs/summernote/insertPost.js"></script>

    <title>Partilhe MKT</title>
</head>

<body>

    <nav class="nav navbar-fixed " style="position:fixed;">
        <div class="nav-wrapper">
            <a class="brand-logo">
                <img src="../img/logo.png" width="150px;">
            </a>
        </div>
    </nav>
    <div class="row">
        <ul id="nav-mobile" class="leftcolumnAdmin blue lighten-5 sidenav sidenav-fixed">
            <li class="bold"><a href="admin" class="waves-effect waves-teal">Minhas Postagens</a></li>
            <li class="bold"><a href="insertPost" class="waves-effect waves-teal">Nova Postagem</a></li>
            <li class="bold"><a href="mobile.html" class="waves-effect waves-teal">Emails Cadastrados</a></li>
        </ul>

        <div class="rightcolumnAdmin ">
            <div class="row">
                <h4>Bem vindo, William</h4>
                <br>
                <h5>Novo Post</h5>
                <br>
                <div class="col s11 m11 alinhamentoNoInsert">
                    <div class="formPost">
                        <div class="input-field col s12 m12">
                            <input placeholder="Título da postagem" id="title" type="text" class="title validate">
                            <label for="title">Título</label>
                        </div>
                        <div class="col s12 m12">
                            <input type="file" name="imgPost" id="imgPost">
                        </div>
                        <div class="col s12 m12">
                            <div id="summernote" class="summernote">Hello Summernote</div>
                        </div>
                    </div>
                </div>
                <div class="col s1 m1 blue lighten-5 divDireita"></div>
            </div>
        </div>
    </div>
</body>

</html>
