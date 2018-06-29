<?php

$host = 'localhost';
$dbname = "printers";
$username = "root";
$password = "";


//Conexao
try {
    $dsn = "mysql:host=$host;dbname=$dbname";
    $conn = new PDO($dsn, $username, $password); //sempre passar essa conn
}catch (PDOException $e){
    echo $e->getMessage();
}

//inserir_usuario($conn, $usuario);

//alterar_usuario($conn, $usuario);

//remover_usuario($conn, 1);

//imprimir_usuarios(todos_usuarios($conn));

//imprimir_usuarios(buscar_usuario_por_nome($conn, "z"));

//imprimir_usuarios(buscar_usuario($conn, "v"));

function inserir_usuario($conn, $usuario){
    try {
        $sql = "INSERT into usuario (nome, email, senha, sexo, cpf, cnpj, datanas, endereco, numero, complemento, bairro, cep, tipouser) values (:nome, :email, :senha, :sexo, :cpf, :cnpj, :datanas, :endereco, :numero, :complemento, :bairro, :cep, :tipouser)";
        $stmt = $conn->prepare($sql);
        $stmt->execute($usuario);
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}

function visualisar_usuario($conn){
        $sql = "SELECT * FROM usuario";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();

        return $result;
}

function alterar_usuario($conn, $usuario){
    try {
        $sql = "UPDATE usuarios SET nome = :nome, email = :email, senha = :senha, sexo = :sexo, cpf = :cpf, cnpj = :cnpj, datanas = :datanas, endereco = :endereco, numero = :numero, complemento = :complemento, bairro = :bairro, cep :cep  WHERE id = :id";
        $stmt = $conn->prepare($sql);
        $stmt->execute($usuario); //array associativo com um usuario completo
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}

/*

function remover_usuario($conn, $id){
    try {
        $sql = "DELETE FROM usuarios WHERE id = ?";
        $stmt = $conn->prepare($sql);
        $stmt->execute([$id]); //array na ordem dos ?
    }catch (PDOException $e){
        echo $e->getMessage();
    }
}

function buscar_usuario_por_nome($conn, $str){
    $busca = "%".$str."%";
    $sql = "SELECT * FROM usuarios WHERE nome LIKE ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$busca]);
    $resultado = $stmt->fetch();

    return $resultado;
}

function buscar_usuario($conn, $str){
    $busca = "%".$str."%";
    $sql = "SELECT * FROM usuarios WHERE ".
        "nome LIKE :str OR ".
        "email LIKE :str";
    $stmt = $conn->prepare($sql);
    $stmt->execute(['str'=>$busca]);
    $resultado = $stmt->fetchAll();

    return $resultado;
}

function buscar_usuario_por_email($conn, $str){
    $sql = "SELECT * FROM usuarios WHERE email = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$str]);
    $resultado = $stmt->fetch();

    return $resultado;
}
*/
?>