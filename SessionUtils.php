<?php

class SessionUtils {
    static public function startSession() {
        if (!session_id()) {
            session_start();
        }    
    }

    static public function storeSessionValueForKey ( $key, $value ) {
        $_SESSION[$key] = $value;
    }

    static public function getSessionValueForKey($key){
        return $_SESSION[$key];
    }

    static public function checkIfKeyExistsInSession($key){
        if(!isset($_SESSION[$key])){
            return FALSE;
        }
        return TRUE;
    }

    static public function checkIfKeyValuePairExistsInSession($key, $value){
        if(!isset($_SESSION[$key])){
            return FALSE;
        }

        return $value == $_SESSION[$key];
    }

    static public function removeKeyFromSession($key){
        if(!self::checkIfKeyExistsInSession($key)){
            return;
        }
        unset($_SESSION[$key]);
    }
}

?>
