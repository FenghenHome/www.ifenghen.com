<?php

namespace Ss\Node;
// extends Ss\Etc\Db
 class Node {

     public  $id;
     public  $db;

     function __construct($id=0){
         global $db;
         $this->id  = $id;
         $this->db  = $db;
     }

     function AllNode(){
         $node_array = $this->db->select("ss_node","*",[
             "ORDER" => "node_order"
             //"LIMIT" => 21
         ]);
         return $node_array;
     }

     function Add($node_name,$node_plan,$node_server,$node_method,$node_protocol,$node_obfs,$node_info,$node_enable,$node_order){
         $this->db->insert("ss_node", [
             "node_name" => $node_name,
             "node_plan" => $node_plan,
             "node_server" => $node_server,
             "node_method" => $node_method,
             "node_protocol" => $node_protocol,
             "node_obfs" => $node_obfs,
             "node_info" => $node_info,
             "node_enable" => $node_enable,
             "node_order" =>  $node_order
         ]);
         return 1;
     }

     function NodesArray($user_plan,$user_enable){
	 if ($user_enable>="1") {
             $node_array = $this->db->select("ss_node","*",[
                 "AND" => [
                     "node_plan[<=]" => $user_plan,
                     "node_enable[=]" => 1
                 ],
                 "ORDER" => "node_order",
                 //"LIMIT" => 21
             ]);
             return $node_array;
	 }
     }
}
