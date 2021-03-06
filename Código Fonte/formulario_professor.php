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
        <h2 class="titulo">Cadastro de Professores</h2>
        <fieldset> <legend> <strong>Formulário</strong> </legend>
            <form action="create_professor.php" method="POST">
                    <label>Nome:</label>
                    <input type="text" name="nome" id="nome" size="25" placeholder="Nome">
                    <br>
                    <br>
                    <label>Data de Nascimento:</label>
                    <input type="date" name="dtnasc" id="dtnasc" value="dtnasc">
                    <br>
                    <br>
                    <label>Sexo:</label>
                    <input type="radio" name="sexo" id="sexo" value="masculino">
                    <label for="masculino">Masculino</label>
                    <input type="radio" name="sexo" id="sexo" value="feminino">
                    <label for="feminino">Feminino</label>
                    <br>
                    <br>
                    <label>Especialidade:</label>
                    <input type="text" name="especialidade" placeholder="Especialidade">
                    <br>
                    <br>
                    <label>Salário:</label>
                    <input type="number" name="salario" placeholder="Salário" min="1045">
                    <br>
                    <br>
                    <input type="submit" value="Enviar">
                    <input type="reset" value="Limpar">
            </form>
        </fieldset> 
        <br>
        <div class="voltar">
            <a href="index.php"><img src="Imagens/voltar1.png" width="60"></a>
        </div>  
    </div>
</body>
</html>