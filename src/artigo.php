<?php
//basicamente toda a estrutura do site ficou aqui

class Artigo
{
    private $mysql;

    public function __construct(mysqli $mysql)
    {
        $this->mysql = $mysql;
    }

    
    public function criarArtigos(string $titulo, string $conteudo, string $nome, string $path, string $categoria): void
    {
        //aqui esta inserindo no banco de dados os valores que serão recebidos
        $insirirArtigo = $this->mysql->prepare('INSERT INTO artigos (titulo, conteudo,nome,path,categoria) VALUES (?,?,?,?,?);');
        $insirirArtigo->bind_param('sssss', $titulo, $conteudo, $nome, $path, $categoria);
        //esse conjunto de 'sssss' e pra dizer que serão enviadas strings
        $insirirArtigo->execute();
    }

    public function excluir(string $id): void
    {
        //Deletando do banco de dados usando o ID
        $excluirArtigo = $this->mysql->prepare('DELETE FROM artigos WHERE id= ? ');
        $excluirArtigo->bind_param('s', $id);
        $excluirArtigo->execute();
    }

    public function editar(string $titulo, string $conteudo,string $id): void
    {
        //editando do banco de dados pelo valor do id
        $editarArtigo = $this->mysql->prepare('UPDATE artigos set titulo=?, conteudo=? WHERE id= ? ');
        $editarArtigo->bind_param('sss', $titulo, $conteudo, $id);
        $editarArtigo->execute();
    }
    //começo da query de exibição

    public function exibirArtigosAll(): array
    {
        //exibe todos os artigos armazenados do banco de dados
        $resultado = $this->mysql->query('SELECT id,titulo,conteudo,path,categoria FROM artigos');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);


        return $artigos;
    }

    //exibe todos os artigos por categoria
    public function exibirArtigosPolitica(): array
    {

        $resultado = $this->mysql->query('SELECT id,titulo,conteudo,path FROM artigos WHERE categoria = "politica"');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);


        return $artigos;
    }
    public function exibirArtigosTecnologia(): array
    {

        $resultado = $this->mysql->query('SELECT id,titulo,conteudo,path FROM artigos WHERE categoria = "tecnologia"');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);


        return $artigos;
    }
    public function exibirArtigosJogos(): array
    {

        $resultado = $this->mysql->query('SELECT id,titulo,conteudo,path FROM artigos WHERE categoria = "jogo"');
        $artigos = $resultado->fetch_all(MYSQLI_ASSOC);


        return $artigos;
    }
    // // // // // // // // // // // // // // /// // // // // // // //
    //fim da query de exibição//


    public function pegarArtigosId(string $id)
    {
        $selecionarArtigo = $this->mysql->prepare("SELECT id,titulo,conteudo,path,categoria FROM artigos where id= ?");
        $selecionarArtigo->bind_param('s', $id);
        $selecionarArtigo->execute();
        $artigo = $selecionarArtigo->get_result()->fetch_assoc();

        return $artigo;
    }
}
