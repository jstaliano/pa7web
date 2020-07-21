<?php

/**
 * Conecta com o MySQL usando PDO
 */
function db_connect()
{
    $PDO = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME . ';charset=utf8', DB_USER, DB_PASS);
 
    return $PDO;
}
 
 
/**
 * Cria o hash da senha, usando MD5 e SHA-1
 */
function make_hash($str)
{
    return sha1(md5($str));
}
 
 
/**
 * Verifica se o usuÃ¡rio estÃ¡ logado
 */
function isLoggedIn()
{
    if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true):
    
        return false;
    else:
        $HoraAgora=date('H:i:s');
        $output= (strtotime($HoraAgora) - strtotime($_SESSION['tempo']));
        if ($output>50000):
            echo "<meta http-equiv=refresh content='0;URL=logout.php?logmeout'>";
            return false;
        else:
            $_SESSION['tempo'] = date('H:i:s');
            return true;
        endif;
    endif;

}
function session_checker(){

    if(!isset($_SESSION['id'])):

        header ("Location:form-login.php");

        exit(); 
    endif;

}

function verifica_email($EMAIL){

    list($User, $Domain) = explode("@", $EMAIL);
    $result = @checkdnsrr($Domain, 'MX');

    return($result);

}

?>