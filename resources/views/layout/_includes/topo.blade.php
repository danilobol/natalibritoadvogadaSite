<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href={{ asset("css/cssNatali.css")}}>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <title>Natali Brito - Advogada</title>
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-light bg-info menu__inicial">
            <div class="container-fluid">

                <img src={{ asset("Imagens/logo.png")}} alt="Natali Brito - Advogada" width=120 height=120>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse navigation__link" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#">Página Inicial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Quem somos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Lista de Associados</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Fale Conosco</a>
                        </li>
                    </ul>
                    <span class="mx-auto">
                         <input class="btn btn-primary login__button" type="reset" value="Login" data-toggle="modal" data-target="#exampleModal">
                         <input class="btn btn-primary login__button registrar__button" type="reset" value="Registrar" data-toggle="modal" data-target="#registerModal">
                     </span>
                </div>
            </div>
        </nav>
        <div>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
            <br>
        </div>
    </header>

    <!-- Modal Login -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Olá outra vez!</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
{{--                    Login--}}
                    <form>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal Registrar -->
    <div class="modal fade" id="registerModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Olá, diga pra gente, qual é o seu perfil</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    {{--                    Login--}}
                    <form>
                        <div class="row">
                            <div class="col">
                                <label for="exampleInputEmail1">Nome</label>
                                <input type="text" class="form-control" id="nome" placeholder="Nome">
                            </div>
                            <div class="col">
                                <label for="exampleInputEmail1">Sobrenome</label>
                                <input type="text" class="form-control" id="sobrenome" placeholder="Sobrenome">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" placeholder="Email">
                            <small id="emailHelp" class="form-text text-muted">Nunca compartilharemos seu e-mail com mais ninguém.</small>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Senha</label>
                            <input type="password" class="form-control" id="senha">
                        </div>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
