<?php

function debug($tableau){
    echo '<pre>';
    print_r($tableau);
    echo '</pre>';
}

function clean($string)
{
    return trim(strip_tags($string));
}


function textValid($err,$value,$key,$min,$max,$empty = true)
{
    if(!empty($value)) {
        if(mb_strlen($value) < $min) {
            $err[$key] = 'Min '.$min.' caracteres';
        } elseif (mb_strlen($value) > $max) {
            $err[$key] = 'Max '.$max.' caracteres';
        }
    } else {
        if($empty) {
            $err[$key] = 'Veuillez renseigner ce champ';
        }
    }
    return $err;
}

function emailValidation($err,$mail,$key)
{
    if(!empty($mail)) {
        if (!filter_var($mail, FILTER_VALIDATE_EMAIL)) {
            $err[$key] = 'Email non valide';
        }
    } else {
        $err[$key] = 'Veuillez renseigner ce champ';
    }
    return $err;
}

function generateRandomString($length = 10) {
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

function is_logged()
{
    $roles = array('abonne','admin');

    if(!empty($_SESSION['login'])) {
        if(!empty($_SESSION['login']['id']) && is_numeric($_SESSION['login']['id'])) {
            if(!empty($_SESSION['login']['pseudo'])) {
                if(!empty($_SESSION['login']['role'])) {
                    if(in_array($_SESSION['login']['role'],$roles)) {
                        if(!empty($_SESSION['login']['ip'])) {
                            if($_SESSION['login']['ip'] == $_SERVER['REMOTE_ADDR']) {
                                return true;
                            }
                        }
                    }
                }
            }
        }
    }
    return false;
}

