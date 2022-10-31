<?php

namespace Project\Model;

use Project\DB\Sql;
use Project\Model;

class Xml extends Model {
    
        public function getNome(){
            $getXml = $_REQUEST['xmlfile'];
            $fileXml = 'res/xml/'.$getXml;
            if(file_exists($fileXml) and $getXml <> ''){
                    
                    $xml = simplexml_load_file($fileXml);
                    //pega o nome do computador
                    $nome = $xml->xpath("//entry[@title='NetBIOS Name']")[0]->attributes()->value;
                    
                    return $nome;
                
            }
        
      

        }
        
        public static function getMac(){
            $getXml = $_REQUEST['xmlfile'];
            $fileXml = 'res/xml/'.$getXml;
            if(file_exists($fileXml) and $getXml <> ''){
                
                $xml = simplexml_load_file($fileXml);
                $mac_adr = $xml->xpath("//entry[@title='MAC Address']");
                isset($mac_adr[1])?$i=1:$i=0;
                $mac_adr = $mac_adr[$i]->attributes()->value;
                
                return $mac_adr;
                
            }

        }
        
        
        public static function getSo(){
            $getXml = $_REQUEST['xmlfile'];
            $fileXml = 'res/xml/'.$getXml;
            if(file_exists($fileXml) and $getXml <> ''){
                
                $xml = simplexml_load_file($fileXml);
                $so = $xml->xpath("//section[@title='Operating System']/entry")[0]->attributes()->title;
                return $so;
                
            }
            
            
            
        }
        
        public static function getRamSize(){
            $getXml = $_REQUEST['xmlfile'];
            $fileXml = 'res/xml/'.$getXml;
            if(file_exists($fileXml) and $getXml <> ''){
                
                $xml = simplexml_load_file($fileXml);
                $ramsizegb = $xml->xpath("//section[@title='RAM']/entry")[0]->attributes()->title;
                $ramsize = explode(",",$ramsizegb);
                return $ramsize[0];
                
            }
            
            
            
        }
        
        public static function getArmazenamento(){
            $getXml = $_REQUEST['xmlfile'];
            $fileXml = 'res/xml/'.$getXml;
            if(file_exists($fileXml) and $getXml <> ''){
                
                $xml = simplexml_load_file($fileXml);
                $armazenamentoAux = $xml->xpath("//entry[@title='Capacity']")[0]->attributes()->value;
                $armazenamento = explode(" GB",$armazenamentoAux);
                return $armazenamento[0];
                
            }
            
            
            
        }
        
        public static function getProcessador(){
            $getXml = $_REQUEST['xmlfile'];
            $fileXml = 'res/xml/'.$getXml;
            if(file_exists($fileXml) and $getXml <> ''){
                
                $xml = simplexml_load_file($fileXml);
                $processador = $xml->xpath("//entry[@title='Specification']")[0]->attributes()->value;
                return $processador;
                
            }
            
            
            
        }
        
        public static function getPlacamae(){
            $getXml = $_REQUEST['xmlfile'];
            $fileXml = 'res/xml/'.$getXml;
            if(file_exists($fileXml) and $getXml <> ''){
                
                $xml = simplexml_load_file($fileXml);
                $placamae = $xml->xpath("//mainsection[@title='Motherboard']/entry[@title='Model']")[0]->attributes()->value;
                return $placamae;
                
            }
            
            
            
        }































}


?>