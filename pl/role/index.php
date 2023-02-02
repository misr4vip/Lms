<?php
    session_start();
    include_once("../../Controller/Roles.php");
    $roles = new RolesController();
    $result =  $roles->getRoles();
    $data = array();

    if ($result->num_rows > 0) {
        // output data of each row
        while($row = $result->fetch_array()) {
        $arr = ["id" => $row['id'], "roleName" => $row['roleName']];
        array_push($data, $arr);
        }
        echo json_encode($data);
} else {
    echo "no data";
}
      
?>