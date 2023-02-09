<?php
//include_once("config.php")
include_once("../Controller/Account.php");
$account = new AccountController();
//session_unset();
session_start();
if (isset($_POST['loginSubmit'])) {
    $idintityId = $_POST['idintityId'];
    $password = $_POST['password'];

    $result = $account->login($idintityId, $password);
    if ($result) {
        $row = $result->fetch_assoc();
        //session_start();
        $_SESSION['idintityId'] = $row['idintityId'];
        $_SESSION['arabic_name'] = $row['arabic_name'];
        $_SESSION['english_name'] = $row['english_name'];
        $_SESSION['isActive'] = $row['isActive'];
        echo true;
    } else {
        echo $result;
    }
}


/////// get Profile
if (isset($_GET['profileSubmit'])) {
    $idintityId = $_SESSION['idintityId'];
    $profileResult = $account->getAccountDetails($idintityId);
    $row = $profileResult->fetch_assoc();
    $data = array();
    $data = [
        'idintityId' => $row['idintityId'],
        'arabic_name' => $row['arabic_name'],
        'english_name' => $row['english_name'],
        'email' => $row['email'],
        'mobile' => $row['mobile']

    ];
    header('Content-type: application/json');
    echo json_encode($data);

}

if (isset($_POST['profilesubmit'])) {
    $idintityId = $_SESSION['idintityId'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];

    $result = $account->updateAccount($idintityId, $email, $mobile);
    if ($result) {

        echo 'تم تحديث الحساب بنجاح';
    } else {
        echo "فشل في عمليه التحديث";
    }
}
if (isset($_POST['forgetPasswordsubmit'])) {
    $idintityId = $_POST['idintityId'];
    $email = $_POST['email'];
   

    $result = $account->forgetPassword($idintityId, $email);
    if ($result) {

        echo 'سيتم ارسال كلمة المرور الي حسابك اذا ما كانت البيانات صحيحة';
    } else {
        echo "عفوا لم نجد حساب بهذه البيانات";
    }
}


?>