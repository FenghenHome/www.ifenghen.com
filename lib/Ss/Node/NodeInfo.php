<?php


namespace Ss\Node;


class NodeInfo extends \Ss\Etc\Db {

    private $table = "ss_node";

    function NodeArray(){
        $datas = $this->db->select($this->table,"*",[
            "id" => $this->id,
            "LIMIT" => "1"
        ]);
        return $datas['0'];
    }

    function Server(){
        return $this->NodeArray()['node_server'];
    }

    function Method(){
        return $this->NodeArray()['node_method'];
    }

    function Protocol(){
        return $this->NodeArray()['node_protocol'];
    }

    function Obfs(){
        return $this->NodeArray()['node_obfs'];
    }

    function Plan(){
        return $this->NodeArray()['node_plan'];
    }

    function Enable(){
        return $this->NodeArray()['node_enable'];
    }	

    function Obfsparam(){
        return $this->NodeArray()['node_obfsparam'];
    }

    function Port(){
        return $this->NodeArray()['node_port'];
    }

    function Passwd(){
        return $this->NodeArray()['node_passwd'];
    }
	
    function Del(){
        $this->db->delete($this->table,[
            "id" => $this->id
        ]);
    }

    function Update($node_name,$node_plan,$node_server,$node_method,$node_protocol,$node_obfs,$node_info,$node_enable,$node_order,$node_obfsparam,$node_port,$node_passwd){
        $this->db->update("ss_node", [
            "node_name" => $node_name,
            "node_plan" => $node_plan,
            "node_server" => $node_server,
            "node_method" => $node_method,
            "node_protocol" => $node_protocol,
            "node_obfs" => $node_obfs,
            "node_info" => $node_info,
            "node_enable" => $node_enable,
            "node_order" =>  $node_order,
            "node_obfsparam" =>  $node_obfsparam,
            "node_port" =>  $node_port,
            "node_passwd" =>  $node_passwd
        ],[
            "id[=]"  => $this->id
        ]);
        return 1;
    }

}
