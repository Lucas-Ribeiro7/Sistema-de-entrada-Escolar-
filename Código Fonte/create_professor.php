<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilo.css">
    <title>Sistema Educantil</title>
</head>
<body>
    <div class="borda">
            <?php
                require_once 'professor.php';
                    function descobriIdadeProfessor($dtnasc){
                        $data = explode("-", $dtnasc);
                        
                        $anoNasc = $data[0];
                        $mesNasc = $data[1];
                        $diaNasc = $data[2];

                        $anoAtual = date("Y");
                        
                        return ($anoAtual - $anoNasc);
                    }

                    //Professor
                    $nome = $_POST['nome'];
                    $nome = strtolower($nome);
                    $nome = ucwords($nome);
                    $dtnasc = $_POST['dtnasc'];
                    $sexo = $_POST['sexo'];
                    $idade = descobriIdadeProfessor($dtnasc);
                    $especialidade = $_POST['especialidade'];
                    $especialidade = strtolower($especialidade);
                    $especialidade = ucwords($especialidade);
                    $salario = $_POST['salario'];

                    
                    //Professor
                    $professor = new professor($especialidade, $salario);
                    $professor->setNome($nome);
                    $professor->setIdade($idade);
                    $professor->setSexo($sexo);
                    $professor->apresentarProfessor();


            ?>
            <div class="voltar">
            <a href="index.php"><button>Novo Cadastro</button></a>
            </div>
    </div>
</body>
</html>
