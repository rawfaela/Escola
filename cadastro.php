<?php
//* conectar c banco
$conectar = mysql_connect("localhost","root","");
$banco = mysql_select_db("escola");

//* verificar opcao do user (botao)

//! curso
//? is set - se pressionado
if (isset($_POST["salvarcurso"])){
    $codigocurso = $_POST["codigocurso"];
    $nomecurso = $_POST["nomecurso"];
    $coordenadorcurso = $_POST["coordenadorcurso"];

    //* comando sql pra salvar banco
    $sql = "insert into curso (codigo, nome, coordenador) values ('$codigocurso','$nomecurso','$coordenadorcurso')"; //se nao mostrar erro em linha de codigo o erro prov vai ta aq

    //* comando php pra executar sql no banco
    $resultado = mysql_query($sql);

    if ($resultado == TRUE){
        echo "Dados do curso gravados com sucesso!";
    }
    else {
        echo "Erro ao gravar dados do curso";
    }
}

if (isset($_POST["alterarcurso"])){
    $codigocurso = $_POST["codigocurso"];
    $nomecurso = $_POST["nomecurso"];
    $coordenadorcurso = $_POST["coordenadorcurso"];

    $sql = "update curso set nome='$nomecurso', coordenador='$coordenadorcurso' where codigo='$codigocurso'";

    $resultado = mysql_query($sql);

    if ($resultado == TRUE){
        echo "Dados do curso alterados com sucesso!";
    }
    else {
        echo "Erro ao alterar dados do curso";
    }
}

if (isset($_POST["excluircurso"])){
    $codigocurso = $_POST["codigocurso"];

    $sql = "delete from curso where codigo='$codigocurso'"; //vai da erro as vezes pq ta sendo usado como chave estrangeira

    $resultado = mysql_query($sql);

    if ($resultado == TRUE){
        echo "Dados do curso excluidos com sucesso!";
    }
    else {
        echo "Erro ao excluir dados do curso";
    }
}

if (isset($_POST["pesquisarcurso"])){
    $sql = "select * from curso";
    $resultado = mysql_query($sql);

    echo "<h3>Cursos cadastrados: </h3>";
    echo "<table border=1>
            <tr><td>Codigo</td>
            <td>Curso</td>
            <td>Coordenador</td></tr>";
    while ($dados = mysql_fetch_array($resultado)){
        echo "<tr><td>".$dados["codigo"]."</td> 
        <td>".$dados["nome"]."</td>
        <td>".$dados["coordenador"]."</td></tr>";  // dentro do colchete é o nome no banco 
    }
    echo "</table>";
}


//! professor
if (isset($_POST["salvarprofessor"])){
    $codigoprofessor = $_POST["codigoprofessor"];
    $nomeprofessor = $_POST["nomeprofessor"];
    $codcursoprofessor = $_POST["codcursoprofessor"];

    //* comando sql pra salvar banco
    $sql = "insert into professor (codigo, nome, codcurso) values ('$codigoprofessor','$nomeprofessor','$codcursoprofessor')"; //se nao mostrar erro em linha de codigo o erro prov vai ta aq

    //* comando php pra executar sql no banco
    $resultado = mysql_query($sql);

    if ($resultado == TRUE){
        echo "Dados do professor gravados com sucesso!";
    }
    else {
        echo "Erro ao gravar dados do professor";
    }
}

if (isset($_POST["alterarprofessor"])){
    $codigoprofessor = $_POST["codigoprofessor"];
    $nomeprofessor = $_POST["nomeprofessor"];
    $codcursoprofessor = $_POST["codcursoprofessor"];

    $sql = "update professor set nome='$nomeprofessor', codcurso='$codcursoprofessor' where codigo='$codigoprofessor'";

    $resultado = mysql_query($sql);

    if ($resultado == TRUE){
        echo "Dados do professor alterados com sucesso!";
    }
    else {
        echo "Erro ao alterar dados do professor";
    }
}

if (isset($_POST["excluirprofessor"])){
    $codigoprofessor = $_POST["codigoprofessor"];

    $sql = "delete from professor where codigo='$codigoprofessor'"; //vai da erro as vezes pq ta sendo usado como chave estrangeira

    $resultado = mysql_query($sql);

    if ($resultado == TRUE){
        echo "Dados do professor excluidos com sucesso!";
    }
    else {
        echo "Erro ao excluir dados do professor";
    }
}

if (isset($_POST["pesquisarprofessor"])){
    $sql = "select * from professor";
    $resultado = mysql_query($sql);

    echo "<h3>Professores cadastrados: </h3>";
    echo "<table border=1>
            <tr><td>Codigo</td>
            <td>Professor</td>
            <td>Codigo do curso</td></tr>";
    while ($dados = mysql_fetch_array($resultado)){
        echo "<tr><td>".$dados["codigo"]."</td>
        <td>".$dados["nome"]."</td>
        <td>".$dados["codcurso"]."</td></tr>";
    }
    echo "</table>";
}

//! aluno
if (isset($_POST["salvaraluno"])){
    $codigoaluno = $_POST["codigoaluno"];
    $nomealuno = $_POST["nomealuno"];
    $telefonealuno = $_POST["telefonealuno"];
    $codcursoaluno = $_POST["codcursoaluno"];

    //* comando sql pra salvar banco
    $sql = "insert into aluno (codigo, nome, telefone, codcurso) values ('$codigoaluno','$nomealuno','$telefonealuno','$codcursoaluno')"; //se nao mostrar erro em linha de codigo o erro prov vai ta aq

    //* comando php pra executar sql no banco
    $resultado = mysql_query($sql);

    if ($resultado == TRUE){
        echo "Dados do aluno gravados com sucesso!";
    }
    else {
        echo "Erro ao gravar dados do aluno";
    }
}

if (isset($_POST["alteraraluno"])){
    $codigoaluno = $_POST["codigoaluno"];
    $nomealuno = $_POST["nomealuno"];
    $telefonealuno = $_POST["telefonealuno"];
    $codcursoaluno = $_POST["codcursoaluno"];

    $sql = "update aluno set nome='$nomealuno', telefone='$telefonealuno', codcurso='$codcursoaluno' where codigo='$codigoaluno'";

    $resultado = mysql_query($sql);

    if ($resultado == TRUE){
        echo "Dados do aluno alterados com sucesso!";
    }
    else {
        echo "Erro ao alterar dados do aluno";
    }
}

if (isset($_POST["excluiraluno"])){
    $codigoaluno = $_POST["codigoaluno"];

    $sql = "delete from aluno where codigo='$codigoaluno'"; //vai da erro as vezes pq ta sendo usado como chave estrangeira

    $resultado = mysql_query($sql);

    if ($resultado == TRUE){
        echo "Dados do aluno excluidos com sucesso!";
    }
    else {
        echo "Erro ao excluir dados do aluno";
    }
}

if (isset($_POST["pesquisaraluno"])){
    $sql = "select * from aluno";
    $resultado = mysql_query($sql);

    echo "<h3>Alunos cadastrados: </h3>";
    echo "<table border=1>
            <tr><td>Codigo</td>
            <td>Aluno</td>
            <td>Telefone</td>
            <td>Codigo do curso</td></tr>";
    while ($dados = mysql_fetch_array($resultado)){
        echo "<tr><td>".$dados["codigo"]."</td>
        <td>".$dados["nome"]."</td>
        <td>".$dados["telefone"]."</td>
        <td>".$dados["codcurso"]."</td></tr>";
    }
    echo "</table>";
}

?>