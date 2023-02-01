<?php
require_once __DIR__."/../config.php";
require_once ROOT."/dbLayer/Operation.php";

class RolesController{

  private $operation;
  public function __construct()
  {
      $this->operation  = new Operations();
  }

  public function __destruct()
  {
      
  }
  public function create($roleName)
   {
   
    $query = "insert into `roles` (`roleName`) values('$roleName') ";
    
    $result = $this->operation->ExcuteQuery($query);
    
    return $result;
      
   }
  
   public function getRoles($id)
   {
   
    $query = "select * from  `roles` where `id`  = '$id' ";
    
    $result = $this->operation->selectData($query);
    
    return $result;
      
   }
   public function updateRole($id ,$roleName)
   {
   
    $query = "update `roles` SET `roleName`='$roleName' WHERE `id` = '$id'";
       $result =  $this->operation->ExcuteQuery($query);
       return $result;
   }
   

   public function deleteRole($id)
   {
   
    $query = "delete from `roles`  WHERE `id` = '$id'";
       $result =  $this->operation->ExcuteQuery($query);
       return $result;
   }
 
   


}

?>