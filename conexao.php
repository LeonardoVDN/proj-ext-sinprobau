<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Dados do MySQL</h1>

    <?php
    $hostname = "localhost";
    $bancodedados = "test";
    $usuario = "root";
    $senha = "";

    $mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);
    
    if ($mysqli->connect_errno){
        echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    $sql = "SELECT * FROM socio";
    $result = $mysqli->query($sql) or die($mysqli->error);
    ?>

    <table>
        <tr>
            <td>Nome</td>
            <td>Sobrenome</td>
            <td>Nascimento</td>
            <td>E-mail</td>
            <td>Cidadania</td>
            <td>Endereço</td>
            <td>Tipo Local</td>
            <td>Estado Civil</td>
            <td>Cidade</td>
            <td>Estado</td>
            <td>CEP</td>
            <td>RG</td>
            <td>CPF</td>
            <td>Telefone</td>
            <td>Celular</td>
            <td>Disciplina</td>
            <td>Locais de Trabalho</td>
            <td>Formação</td>
            <td>Outra formação</td>
            <td>Dependente</td>
            <td>Grau de Parentesco</td>
            <td>Nascimento</td>
            <td>Dependente</td>
            <td>Grau de Parentesco</td>
            <td>Nascimento</td>
            <td>Dependente</td>
            <td>Grau de Parentesco</td>
            <td>Nascimento</td>
            <td>Dependente</td>
            <td>Grau de Parentesco</td>
            <td>Nascimento</td>
            <td>Diploma/Holerite</td>
            <td>Instituição</td>
            <td>Data</td>
            <td>Cidade Instituição</td>
            <td>Observação</td>
        </tr>
        <?php while($dado = $result->fetch_array()){ ?>
        <tr>
            <td><?php echo $dado["nome"]; ?></td>
            <td><?php echo $dado["sobrenome"]; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dado["nascimento"])); ?></td>
            <td><?php echo $dado["email"]; ?></td>
            <td><?php echo $dado["cidadania"]; ?></td>
            <td><?php echo $dado["endereco"]; ?></td>
            <td><?php echo $dado["tipolocal"]; ?></td>
            <td><?php echo $dado["estadocivil"]; ?></td>
            <td><?php echo $dado["cidade"]; ?></td>
            <td><?php echo $dado["estado"]; ?></td>
            <td><?php echo $dado["cep"]; ?></td>
            <td><?php echo $dado["rg"]; ?></td>
            <td><?php echo $dado["cpf"]; ?></td>
            <td><?php echo $dado["telefone"]; ?></td>
            <td><?php echo $dado["celular"]; ?></td>
            <td><?php echo $dado["disciplina"]; ?></td>
            <td><?php echo $dado["locaisdetrabalho"]; ?></td>
            <td><?php echo $dado["formacao"]; ?></td>
            <td><?php echo $dado["outros"]; ?></td>
            <td><?php echo $dado["dependente1"]; ?></td>
            <td><?php echo $dado["graudeparentesco1"]; ?></td>
            <td><?php echo $dado["nascimento1"]; ?></td>
            <td><?php echo $dado["dependente2"]; ?></td>
            <td><?php echo $dado["graudeparentesco2"]; ?></td>
            <td><?php echo $dado["nascimento2"]; ?></td>
            <td><?php echo $dado["dependente3"]; ?></td>
            <td><?php echo $dado["graudeparentesco3"]; ?></td>
            <td><?php echo $dado["nascimento3"]; ?></td>
            <td><?php echo $dado["dependente4"]; ?></td>
            <td><?php echo $dado["graudeparentesco4"]; ?></td>
            <td><?php echo $dado["nascimento4"]; ?></td>
            <td><?php echo $dado["diploma"]; ?></td>
            <td><?php echo $dado["instituicao"]; ?></td>
            <td><?php echo date("d/m/Y", strtotime($dado["data"])); ?></td>
            <td><?php echo $dado["cidadeinstituicao"]; ?></td>
            <td><?php echo $dado["observacao"]; ?></td>
        </tr>
        <?php } ?>
    </table>
</body>
</html>