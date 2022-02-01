<?php
    // Instrução para informar que usarei sessão no meu codigo
    session_start();

    // inclusão do código da conexao com banco
    include_once("conexao.php");

    //receber essa informação do form
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    $senha = mysqli_real_escape_string($conn, $_POST["senha"]);


    //montar a instrução do banco para um registro
    $query = "SELECT * FROM login_usuario WHERE email = '$email' and senha = $senha";

    // montar a instrução do banco para vários registro
    // $query = "SELECT * FROM tbPessoa";

    // mandar o mysqli executar a query retornando o que ele tem que trazer
    if($resultado = mysqli_query($conn, $query))
    {
        if(mysqli_num_rows($resultado) != 0){
            // echo("Número de linhas: ".mysqli_num_rows($resultado));
            // Esperado Apenas um registro de retorno
            // $retornoDoSelect = mysqli_fetch_assoc($resultado);
            // print_r($retornoDoSelect);
            // Esperado Mais de um Registro de Retorno
            while($retornoDoSelect = mysqli_fetch_assoc($resultado))
            {
                // print_r($retornoDoSelect);
                if($retornoDoSelect["email"] == $email && $retornoDoSelect["senha"] == $senha){
                    print_r($retornoDoSelect);
                    echo($retornoDoSelect["id"]);
                    echo("Login Efetuado com Sucesso! Bem-Vindo!!");

                    // Criação da Sessão login com o dado Id dentro dela
                    $_SESSION["login"] = $retornoDoSelect["id"];


                    //Trazer os dados da tabela usuario para mostrar na saudação
                    $query2 = "SELECT * FROM usuario WHERE id = ".$retornoDoSelect["id"];
                    if(!$resultadoPessoa = mysqli_query($conn, $query2)) 
                    {
                        $_SESSION["erroLogin"] = "Usuário não encontrado na base.";
                        header("location: login.php");
                    }
                    else
                    {
                        $retornoDoSelectPessoa = mysqli_fetch_assoc($resultadoPessoa);
                        $_SESSION["nome"] = $retornoDoSelectPessoa["nome"];

                        $query3 = "SELECT * FROM cargos WHERE id = ".$retornoDoSelect["id"];

                        if(!$resultadoCargo = mysqli_query($conn, $query3)) 
                        {
                            echo ('Erro na busca do cargo.');
                        }
                        else 
                        {
                            $retornoDoSelectCargo = mysqli_fetch_assoc($resultadoCargo);
                            $_SESSION["cargo"] = $retornoDoSelectCargo["nome"];
                        }

                        //header("location: ../views/pgInterna.php?id=".$retornoDoSelect["id"]);

                        // Passagem de dados através do get
                        header("location: pgInterna.php?acesso=".$retornoDoSelectPessoa["id_cargo"]);
                    }

                        
                }
                else
                {
                    //echo("Deu ruim!");
                    header("location: login.php");
                }

            }

            
        }
        else
        {
            $_SESSION["errologin"] = "Usuário ou Senha Inválido";
            header("location: ../views/login.php");
        }
    }
    else
    {
        header("location: ../views/login.php");
        die("<br>Falha na busca dos Dados = $query -> ".mysqli_errno($conn)." -> ".mysqli_error($conn));
    }