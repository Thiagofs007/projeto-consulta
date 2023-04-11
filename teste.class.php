<html>
    <head>
        <title>Exemplo de Formulário</title>
        <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    </head>
    <body class="bg-body-secondary">
    <div class="container text-center">
        <div class="row">
          <div class="col-1">
            &nbsp;
          </div>
          <div class="col bg-primary">
            <nav class="navbar bg-primary navbar-expand-lg" data-bs-theme="dark">
                <div class="container-fluid">
                  <a class="navbar-brand" href="#">SISTEMA WEB</a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                      <a class="nav-link active" aria-current="page" href="index1.php">Cadastrar</a>
                      <a class="nav-link" href="teste.class.php">Consultar</a>
                    </div>
                  </div>
                </div>
              </nav>
          </div>
          <div class="col-1">
            &nbsp;
          </div>
        </div>
            <div class="row">
              <div class="col-1">
                &nbsp;
              </div>
              <div class="col bg-white"><br>
                <p>
                <table class="--bs-primary">
                <div>
                <span class="navbar-brand mb-0 h1">
                <h3>Consultar - Contatos Agendados</h3>
<?php 

require_once("pessoa.class.php");

class Teste{
    private $pessoa;

    public function __construct(){
        $pessoa = new Pessoa();

        $pessoa->setNome($_POST['nome']."&nbsp;");
        echo $pessoa->getNome();
        
        $pessoa->setTelefone($_POST['telefone']."&nbsp;");
        echo $pessoa->getTelefone();

        $pessoa->setOrigem($_POST['origem']."&nbsp;");
        echo $pessoa->getOrigem();

        $pessoa->setDatac($_POST['datac']."&nbsp;");
        echo $pessoa->getDatac();

        $pessoa->setObs($_POST['obs']."&nbsp;");
        echo $pessoa->getObs();
    }
}new Teste();

?>
</span>
  </div>
</table>
</p>
              </div>
              <div class="col-1">
                &nbsp;
              </div>
            </div>
      </div>
    </body>
</html>