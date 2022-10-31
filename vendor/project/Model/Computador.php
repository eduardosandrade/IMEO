<?php

namespace Project\Model;

use Project\DB\Sql;
use Project\Model;

class Computador extends Model {
    
    

    public static function listAll()
    {
        $sql = new Sql();

        $results = $sql->select("SELECT a.id, a.usuario_id, b.nome 'nome_do_usuario',a.nome 'nome_do_id',a.mac_adr,a.processador,a.soquete,a.placamae,a.ramsizegb,a.ramtipo,a.armazenamento FROM computador as a inner join usuario as b on a.usuario_id=b.id");

        return $results;
    }
    
    
    public static function ComputerInfo($id)
    {
        $sql = new Sql();
        
        $results = $sql->select("SELECT a.id, a.usuario_id, b.nome 'nome_do_usuario',a.nome 'nome_do_id',a.mac_adr,a.processador,a.soquete,a.placamae,a.ramsizegb,a.ramtipo,a.armazenamento FROM computador as a inner join usuario as b on a.usuario_id=b.id where a.id = :id",[
            "id"=>$id
        ]);
        
        $info = $results[0];
        
        
        return $info;
    }
    
    

    //Seleciona um usuario através do id e carrega o objeto User
    public function getUsuarios()
    {
        $sql = new Sql();

        $results = $sql->selectPair('SELECT id,nome from usuario');

        return $results;
    }
    

    
    public function getIdUsuarios($id)
    {
        $sql = new Sql();
        
        $idusuario = $sql->select("SELECT usuario_id from computador where id = :id",[
            ":id"=>$id
        ]);
        $auxUsuario_id = $idusuario[0];
        $usuario_id = $auxUsuario_id['usuario_id'];
        
        return $usuario_id;
  
        
    }
    
    
    public function getIdSo()
    {
        $sql = new Sql();
        $so = $_REQUEST['so'];
        $so_id = $sql->selectOne("SELECT id from so where nome = :so",[
            ":so"=>$so
        ]);
  
        return $so_id['id'];
        
        
    }
    
    public function getSos()
    {
        $sql = new Sql();
        
        $results = $sql->selectPair('SELECT id,nome from so');
        
        return $results;
    }
    

    
    public function getSo($id){
        
        $sql = new Sql();
        
        $results = $sql->select('SELECT so_id from computador where id = :id',[
            "id"=>$id
        ]);
        
        //var_dump($results);
        
        return $results;
               
        
    }
    public function getNameSo($idso)
    {
        
        $sql = new Sql();
        
        $results = $sql->select('SELECT nome from so where id = :id',[
            "id"=>$idso
        ]);
        
        $nameSo = $results[0]; 
        return $nameSo['nome'];
        
    }
    
    public function getNameId($idusuario){
        
        $sql = new Sql();
        
        $results = $sql->select('SELECT nome from usuario where id = :id',[
            "id"=>$idusuario
        ]);
        
        $nameUsuario = $results[0];
        return $nameUsuario['nome'];
    }

    public function save()
    {
        
        $ativo = (bool)$_REQUEST['ativo'];
        $nome = $_REQUEST['nome'];
        $usuario_id = $this->getIdUsuario();
        $mac_adr = $_REQUEST['mac_adr'];
        $so_id = $this->getIdSo();
        $dominio = (bool)$_REQUEST['dominio'];
        $etiquetado = (bool)$_REQUEST['etiquetado'];
        $ramsizegb = (int)$_REQUEST['ramsizegb'];
        $armazenamento = (int)$_REQUEST['armazenamento'];
        $ramtipo = $_REQUEST['ramtipo'];
        $processador = $_REQUEST['processador'];
        $soquete = $_REQUEST['soquete'];
        $placamae = $_REQUEST['placamae'];

        $sql = new Sql();

        $results = $sql->select('INSERT INTO computador (nome, usuario_id, mac_adr, so_id,dominio,etiquetado, ativo, processador, soquete,placamae,ramsizegb,ramtipo,armazenamento) 
        VALUES (:nome, :usuario_id, :mac_adr, :so_id, :dominio, :etiquetado, :ativo, :processador, :soquete, :placamae, :ramsizegb, :ramtipo, :armazenamento)', [ 
            ":nome"=>$nome,
            ":usuario_id"=>$usuario_id,
            ":mac_adr"=>$mac_adr,
            ":so_id"=>$so_id,
            ":dominio"=>$dominio,
            ":etiquetado"=>$etiquetado,
            ":ativo"=>$ativo,
            ":processador"=>$processador,
            ":soquete"=>$soquete,
            ":placamae"=>$placamae,
            ":ramsizegb"=>$ramsizegb,
            ":ramtipo"=>$ramtipo,
            ":armazenamento"=>$armazenamento		
        ]);

    }
    
    public function update($id){
        
        $ativo = (bool)$_REQUEST['ativo'];
        $nome = $_REQUEST['nome'];
        $usuario_id = $this->getIdUsuario();
        $so_id = $this->getIdSo();
        $mac_adr = $_REQUEST['mac_adr'];
        $dominio = (bool)$_REQUEST['dominio'];
        $etiquetado = (bool)$_REQUEST['etiquetado'];
        $ramsizegb = (int)$_REQUEST['ramsizegb'];
        $armazenamento = (int)$_REQUEST['armazenamento'];
        $ramtipo = $_REQUEST['ramtipo'];
        $processador = $_REQUEST['processador'];
        $soquete = $_REQUEST['soquete'];
        $placamae = $_REQUEST['placamae'];
        
        print('status: '.$ativo);
        echo '<br>nome:'.$nome.'<br>';
        echo 'usuario_id: '.$usuario_id.'<br>';
        echo 'so_id: '.$so_id.'<br>';
        echo 'mac address: '.$mac_adr.'<br>';
        print('dominio: '.$dominio);
        echo '<br>etiquetado: '.$etiquetado.'<br>';
        echo 'ramsizegb: '.$ramsizegb.'<br>';
        echo 'armazenamento: '.$armazenamento.'<br>';
        echo 'ramtipo: '.$ramtipo.'<br>';
        echo 'processador: '.$processador.'<br>';
        echo 'soquete: '.$soquete.'<br>';
        echo 'placamae: '.$placamae.'<br>';
        
        $sql = new Sql();
        
        $sql->select('UPDATE computador SET nome=:nome,
                                            usuario_id=:usuario_id, 
                                            so_id=:so, 
                                            mac_adr=:mac_adr, 
                                            dominio=:dominio, 
                                            etiquetado=:etiquetado, 
                                            ativo=:ativo, 
                                            processador=:processador,   
                                            soquete=:soquete,
                                            placamae=:placamae, 
                                            ramsizegb=:ramsizegb, 
                                            ramtipo=:ramtipo, 
                                            armazenamento=:armazenamento 
                                            WHERE id=:id',
                                         [
                                            ":ativo"=>$ativo,
                                            ":usuario_id"=>$usuario_id,
                                            ":nome"=>$nome,
                                            ":so"=>$so_id,
                                            ":mac_adr"=>$mac_adr,
                                            ":dominio"=>$dominio,
                                            ":etiquetado"=>$etiquetado,
                                            ":ramsizegb"=>$ramsizegb,
                                            ":armazenamento"=>$armazenamento,
                                            ":ramtipo"=>$ramtipo,
                                            ":processador"=>$processador,
                                            ":soquete"=>$soquete,
                                            ":placamae"=>$placamae,
                                            ":id"=>$id
                                        ]);
        
        
    }
    
    public function delete($id){
        
        $idd = $id['id'];
        
        $sql = new Sql();
        $sql->select("DELETE from computador where id = :id",[
           ":id"=>$idd 
        ]);
    }
    
    public function getIdUsuario()
    {
        $sql = new Sql();
        $usuario = $_REQUEST['usuario'];
        
        $usuario_id = $sql->selectOne("SELECT id from usuario where nome = :usuario",[
            ":usuario"=>$usuario
        ]);
        
        
        return $usuario_id['id'];
        
        
    }
    

    public function getId($id){
        
        
        var_dump($id);
        $sql = new Sql();
        
        $idusuario = $sql->select("SELECT usuario_id from computador where id = :id",[
            ":id"=>$id
        ]);
        $auxUsuario_id = $idusuario[0];
        $usuario_id = $auxUsuario_id['usuario_id'];
        

        $results = $sql->select('SELECT nome, mac_adr, so_id,dominio,etiquetado, ativo, processador, soquete,placamae,ramsizegb,ramtipo,armazenamento from computador where usuario_id = :usuario_id',[
            ":usuario_id"=>$usuario_id
        ]);
        
        return $results;
        
    }
    
}


?>