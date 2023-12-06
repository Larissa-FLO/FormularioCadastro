<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styleformulario.css">
    <title>Cadastro</title>
</head>

<body>

  <div class="divTitulo">
    <h2 class="tituloCadastro">Formulário de Cadastro de Alunos(as)</h2>
  </div>

    <div class="caixaCadastro">

        <form action="formulario.php" method="post">

            <div class="nomeCompleto">
                <label for="inputNome" class="form-label">Nome completo:</label><br>
                <input type="text" class="nome" id="inputAddress" name="nome">
            </div><br>

            <div class="col-md-6">
              <label for="inputEmail4" class="form-label">E-mail:</label><br>
              <input type="email" class="inputEmail" id="inputEmail4" placeholder="emailexemplo@gmail.com" name="email">
            </div><br><br>

            <div class="cepEndereco">
              <label for="inputEndereço" class="form-label">Endereço:</label>
              <input type="text" class="inputendereco" id="inputEndereco" placeholder="Ex: Av. Tancredo Neves, 3654" name="endereco">
              <label for="inputCep" class="form-label">CEP:</label>
              <input type="text" class="cep" id="inputCep" maxlength="8" name="cep">
            </div><br><br>

            <div class="cpfData">
              <label for="inputCpf" class="form-label">CPF:</label>
              <input type="text" class="form-control" id="inputCpf" name="cpf">
              <label for="inputNasc" class="form-label">Data Nascimento:</label>
              <input type="date" class="form-control" id="inputNasc" maxlength="8" placeholder="dd/mm/aaaa" name="dataNasc">
            </div><br><br><br>

            <hr class="linha">
            <br>
            <br>
            <br>

            <div class="curso">
            <select class="form-select" aria-label="Default select example" name="curso">
              <option selected>Selecione o Curso</option>
              <option value="1">Análise e Desenvolvimento de Sistemas</option>
              <option value="2">Administração</option>
              <option value="3">Contabilidade</option>
              <option value="3">Engenharia de Computação</option>
              <option value="3">Farmácia</option>
              <option value="3">Sistemas da Informação</option>
              <option value="3">Zootecnia</option>
            </select><br><br><br><br>
            </div>

            <div class="btn">
              <button type="submit" name="submit" class="botao">Cadastrar</button>
            </div>

        </form>

    </div>

    <div class="fimFormulario">
    </div>
    

</body>
</html>