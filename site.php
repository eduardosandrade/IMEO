<?php 

use Slim\Slim;
use Project\DB\Sql;
use Project\Page;
use Project\Model\Computador;
use Project\Model\Xml;


$app->get('/',function(){

    $page = new Page();
    $page->setTpl("index");
    
    
});

$app->post('/computadores',function(){
        
    $page = new Page();
    $computador = Computador::listAll();
    $page->setTpl("computadores",[
        "computador"=>$computador,
        "teste"=>8
    ]);
        
});

$app->get('/computadores',function(){
        
    $page = new Page();
    $computador = Computador::listAll();
    $page->setTpl("computadores",[
            "computador"=>$computador,
       
    ]);
        
});



$app->post('/computadores/adicionar',function(){
        
    $page = new Page();
    $nome = Xml::getNome();
    $mac_adr = Xml::getMac();
    $so = Xml::getSo();
    $ramSize = Xml::getRamSize();
    $getUsuario = Computador::getUsuarios();
    $armazenamento = Xml::getArmazenamento();
    $processador = Xml::getProcessador();
    $placamae = Xml::getPlacamae();
    $getSo = Computador::getSos();
    $page->setTpl("computadores_adicionar",[
        "nome"=>$nome,
        "mac_adr"=>$mac_adr,
        "so"=>$so,
        "ramSize"=>$ramSize,
        "usuario"=>$getUsuario,
        "armazenamento"=>$armazenamento,
        "processador"=>$processador,
        "placamae"=>$placamae,
        "getSo"=>$getSo
    ]);
        
});

    $app->post('/computadores/adicionar/sucesso',function(){
        
        $page = new Page();
        $save = new Computador();
        $save->save();
        $page->setTpl("computadores");
        header("Location: /imeo/computadores");
        exit;
   
    });
    
        $app->get('/computadores/:id/atualizar',function(){
            

            $page = new Page();
            $getUsuario = Computador::getUsuarios();
            $idAux = explode('/',$_SERVER["REQUEST_URI"]);
            $getId = Computador::getId($idAux[3]);
            $id = $getId[0];
            $soAux = Computador::getSo($idAux[3]);
            $so = $soAux[0];
            $getIdSo = $so['so_id'];
            $usuario_id = Computador::getIdUsuarios($idAux[3]);
            $getNome = Computador::getNameId($usuario_id);
            $getSos = Computador::getSos();
            $getNomeSo = Computador::getNameSo($so['so_id']);
            
            $page->setTpl('computador_atualizar',[
                "ativo"=>$id['ativo'],
                "dominio"=>$id['dominio'],
                "etiquetado"=>$id['etiquetado'],
                "usuario_id"=>$usuario_id,
                "nome"=>$id['nome'],
                "usuario"=>$getNome,
                "usuarios"=>$getUsuario,
                "mac_adr"=>$id['mac_adr'],
                "so_id"=>$getIdSo,
                "so"=>$getNomeSo,
                "getSos"=>$getSos,
                "ramSize"=>$id['ramsizegb'],
                "ramtipo"=>$id['ramtipo'],
                "armazenamento"=>$id['armazenamento'],
                "processador"=>$id['processador'],
                "soquete"=>$id['soquete'],
                "placamae"=>$id['placamae']
                
            ]);   
        });
        
            $app->post('/computadores/:id/atualizar/sucesso',function(){
                
                $update = new Computador();
                $idAux = explode('/',$_SERVER["REQUEST_URI"]);
                $id = $idAux[3];    
                $update->update($id);
                header("Location: /imeo/computadores");
                exit;
                
                
            });
            
            
            $app->get('/computadores/:id/deletar',function(){
                
                $idAux = explode('/',$_SERVER["REQUEST_URI"]);
                $id = $idAux[3];
                $info = Computador::ComputerInfo($id);
                $teste = Computador::delete($info);
                header("Location: /imeo/computadores");
                exit;
                
                
            });
            
            $app->get('/computadores/:id/info',function(){
                $idAux = explode('/',$_SERVER["REQUEST_URI"]);
                $id = $idAux[3];
                $info = Computador::ComputerInfo($id);
                $page = New Page();
                $page->setTpl('computadores_info',[

                    'usuario_id'=>$info['usuario_id'],
                    'nome_do_usuario'=>$info['nome_do_usuario'],
                    'nome_do_id'=>$info['nome_do_id'],
                    'mac_adr'=>$info['mac_adr'],
                    'processador'=>$info['processador'],
                    'soquete'=>$info['soquete'],
                    'placamae'=>$info['placamae'],
                    'ramsizegb'=>$info['ramsizegb'],
                    'ramtipo'=>$info['ramtipo'],
                    'armazenamento'=>$info['armazenamento']
                ]);
                
                    
            });



?>