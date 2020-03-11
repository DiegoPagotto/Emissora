<!DOCTYPE html>
<meta charset="UTF-8">
<html>

<head>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>

<body class="bg-light">

    <!--  Navbar  -->

    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">Emissora</a>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#" id="irAtor">Ator</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="irDiretor">Diretor</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="irNovela">Novela</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" id="irAtua">Atua</a>
                </li>
            </ul>
        </div>
    </nav>

    <!--  Container "Cadastrar empregado"  -->

    <div class="container bg-light my-3 py-2 w3-animate-left rounded" id="ator">
        <h1 class="display-3 text-center pb-3 mx-4 my-2" style="background-color: #cccdcf; border-radius: 25px;">Cadastrar ator</h1>
        <form type="GET" class="mt-3">
            <div class="row">
                <div class="form-group col-6">
                    <label for="cpfAtor">CPF</label>
                    <input type="text" class="form-control cpf" id="cpfAtor" name="cpfAtor" placeholder="XXX.XXX.XXX-XX">
                </div>
                <div class="form-group col-6">
                    <label for="nome">Nome</label>
                    <input type="text" class="form-control" id="nome" name="nome">
                </div>
            </div>
            <div class="row">
                <span class="col-3"></span>
                <input type="submit" class="btn btn-secondary btn-lg col-6 mt-3" value="Cadastrar">
            </div>
        </form>
    </div>

    <!--  Container "Cadastrar dependente"  -->

    <div class="container bg-light my-3 py-2 w3-animate-left rounded" id="novela">
        <h1 class="display-3 text-center pb-3 mx-4 my-2" style="background-color: #cccdcf; border-radius: 25px;">Cadastrar novela</h1>
        <form type="GET" class="mt-3">
            <div class="row">
                <div class="form-group col-6">
                    <label for="IdNovela">ID da novela</label>
                    <input type="number" class="form-control cpf" id="IdNovela" name="IdNovela">
                </div>
                <div class="form-group col-6">
                    <label for="nomeNovela">Nome da novela</label>
                    <input type="text" class="form-control" id="nomeNovela" name="nomeNovela">
                </div>
            </div>
            <div class="row">
                <div class="form-group col-4">
                    <label for="example-date-input" class="col-form-label">Ano</label>
                    <input class="form-control" type="text" id="data" name="data">
                </div>
                <div class="form-group col-6">
                    <label for="cpfDiretor2">CPF do diretor</label>
                    <input type="text" class="form-control cpf" id="cpfDiretor2" name="cpfDiretor2">
                </div>
            </div>
            <div class="row">
                <span class="col-3"></span>
                <input type="submit" class="btn btn-secondary btn-lg col-6 mt-3" value="Cadastrar">
            </div>
        </form>
    </div>

    <!--  Container "Cadastrar departamento"  -->

    <div class="container bg-light my-3 py-2 w3-animate-left rounded" id="diretor">
        <h1 class="display-3 text-center pb-3 mx-4 my-2" style="background-color: #cccdcf; border-radius: 25px;">Cadastrar diretor</h1>
        <form type="GET" class="mt-3">
            <div class="row">
                <div class="form-group col-6">
                    <label for="cpfDiretor">CPF</label>
                    <input type="text" class="form-control cpf" id="cpfDiretor" name="cpfDiretor" placeholder="XXX.XXX.XXX-XX">
                </div>
                <div class="form-group col-6">
                    <label for="nomeDiretor">Nome</label>
                    <input type="text" class="form-control" id="nomeDiretor" name="nomeDiretor">
                </div>
            </div>
            <div class="row">
                <span class="col-3"></span>
                <input type="submit" class="btn btn-secondary btn-lg col-6 mt-3" value="Cadastrar">
            </div>
        </form>
    </div>

    <div class="container bg-light my-3 py-2 w3-animate-left rounded" id="atua">
        <h1 class="display-3 text-center pb-3 mx-4 my-2" style="background-color: #cccdcf; border-radius: 25px;">Cadastrar atuação</h1>
        <form type="GET" class="mt-3">
            <div class="row">
                <div class="form-group col-6">
                    <label for="cpfAtorAtua">CPF do ator</label>
                    <input type="text" class="form-control cpf" id="cpfAtorAtua" name="cpfAtorAtua" placeholder="XXX.XXX.XXX-XX">
                </div>
                <div class="form-group col-6">
                    <label for="idNovela">ID da novela</label>
                    <input type="number" class="form-control cpf" id="idNovela" name="idNovela">
                </div>
                <div class="form-group col-6">
                    <label for="salario">Salário</label>
                    <input type="number" class="form-control" id="salario" name="salario">
                </div>
                <div class="form-group col-6">
                    <label for="salario">Nome personagem</label>
                    <input type="text" class="form-control" id="nome_person" name="nome_person">
                </div>
            </div>
            <div class="row">
                <span class="col-3"></span>
                <input type="submit" class="btn btn-secondary btn-lg col-6 mt-3" value="Cadastrar">
            </div>
        </form>
    </div>

    <!-- Código PHP -->

    <?php
    $con = mysqli_connect("localhost", "root", "", "novela");
    if (mysqli_connect_errno()) {
        echo "Erro ao conectar no banco";
    } else {
        if (isset($_GET["cpfAtor"])) {
            $cpf = $_GET["cpfAtor"];
            $nome = $_GET["nome"];

            $query = "INSERT INTO ator VALUES ('$cpf','$nome');";
            if (!mysqli_query($con, $query)) {
                echo "Erro ao gravar dados: " . mysqli_error($con);
            } else {
                echo '<script type="text/javascript">Swal.fire("Tudo certo!", "Ator cadastrado com sucesso!", "success")</script>';
            }
        } else if (isset($_GET["cpfDiretor"])) {
            $cpf = $_GET["cpfDiretor"];
            $nome = $_GET["nomeDiretor"];

            
            $query = "INSERT INTO diretor VALUES ('$nome','$cpf');";
            if (!mysqli_query($con, $query)) {
                echo "Erro ao gravar dados: " . mysqli_error($con);
            } else {
                echo '<script type="text/javascript">Swal.fire("Tudo certo!", "Diretor cadastrado com sucesso!", "success")</script>';
            }

        } else if (isset($_GET["nomeNovela"])) {
            $nome = $_GET["nomeNovela"];
            $data = $_GET["data"];
            $id = $_GET["IdNovela"];
            $cpf = $_GET["cpfDiretor2"];

            $query = "INSERT INTO novela VALUES ($id, '$nome', '$data', '$cpf');";
            if (!mysqli_query($con, $query)) {
                echo "Erro ao gravar dados: " . mysqli_error($con);
            } else {
                echo '<script type="text/javascript">Swal.fire("Tudo certo!", "Novela cadastrada com sucesso!", "success")</script>';
            }
        } else if (isset($_GET["nome_person"])){
          $idNovela = $_GET["idNovela"];
          $cpf = $_GET["cpfAtorAtua"];
          $salario = $_GET["salario"];
          $personagem = $_GET["nome_person"];

          $query = "INSERT INTO atua VALUES ('$cpf',$idNovela,$salario,'$personagem');";
          if (!mysqli_query($con, $query)) {
              echo "Erro ao gravar dados: " . mysqli_error($con);
          } else {
              echo '<script type="text/javascript">Swal.fire("Tudo certo!", "Atuação cadastrada com sucesso!", "success")</script>';
          }
        }   
    }

    mysqli_close($con);
    ?>

</body>
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>
<script src="script.js"></script>
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<script src="https://kit.fontawesome.com/3fa6e46a3c.js" crossorigin="anonymous"></script>



</html>