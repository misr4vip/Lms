<?php

class user
{
    private $idintityId;
    private $arabicName;
    private $englishName;
    private $isActive;


    public function isLogged()
    {
        if (isset($_SESSION['idintityId']) && !empty($_SESSION['idintityId'])) {
            return true;
        }else {
            return false;
        }
    }

    public function isActiveAccount()
    {
        if (isset($_SESSION['isActive']) && $_SESSION['isActive'] == 1) {
            return true;
        }else{
            return false;
        }
    }

}

?>