<?php

    switch($_REQUEST['acao']) 
    {
        case "adicionar":
            $nome = $_POST["name"];
            $preco = $_POST["price"];
            $img = $_POST["img"];

            $sql = "INSERT INTO produtos (nome, preco, img) VALUES ('{$nome}', '{$preco}', '{$img}')";
            $res = $conn->query($sql);

            if($res) 
            {
                print "<script>alert('Produto ADICIONADO ao banco de dados!')</script>";
                print "<script>location.href='?page=list'</script>";
            }
            else 
            {
                print "<script>alert('ERRO ao ADICIONAR o produto ao banco de dados.')</script>";
                print "<script>location.href='?page=new'</script>";
            }
            break;
        case "editar":
            $nome = $_POST["name"];
            $preco = $_POST["price"];
            $img = $_POST["img"];

            $sql = "UPDATE produtos SET nome='{$nome}', preco='{$preco}', img='{$img}' WHERE id=".$_REQUEST['id'];
            $res = $conn->query($sql);

            if($res) 
            {
                print "<script>alert('Produto EDITADO no banco de dados!')</script>";
            }
            else 
            {
                print "<script>alert('ERRO ao EDITAR o produto no banco de dados.')</script>";
            }
            print "<script>location.href='?page=list'</script>";
            break;
        case "excluir":

            $sql = "DELETE FROM produtos WHERE id=".$_REQUEST['id'];

            $res = $conn->query($sql);

            if($res) 
            {
                print "<script>alert('Produto EXCLUIDO ao banco de dados!')</script>";
                print "<script>location.href='?page=list'</script>";
            }
            else 
            {
                print "<script>alert('ERRO ao EXCLUIR o produto ao banco de dados.')</script>";
                print "<script>location.href='?page=new'</script>";
            }
            break;
    }
