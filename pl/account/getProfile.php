<?php
session_start();


// if (!isset($_SESSION['isActive'])) {
//     header('location:login.php');
// }

include_once("../../Controller/Account.php");
$account = new AccountController();

$idintityId = $_SESSION['idintityId']; 
$profileResult = $account->getAccountDetails($idintityId);
$row = $profileResult->fetch_assoc();
$data = array();
$data = ['idintityId' => $row['idintityId'],
 'arabic_name' => $row['arabic_name'],
  'english_name' => $row['english_name'],
   'email' => $row['email'],
    'mobile' => $row['mobile'], 
    'accountType' => $row['accountType']
];
header('Content-type: application/json');
echo json_encode( $data);

?>