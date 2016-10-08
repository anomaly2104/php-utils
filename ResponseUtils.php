<?php

class ResponseUtils {
    static public function createSuccessResponse() {
        return static::createSuccessResponseWithData("No Data In Response");
    }
    
    static public function createSuccessResponseWithData($data){
        $json = json_encode(
            array(
                'status' => '200',
                'data' => $data
            )
        );
        return $json;    
    }

    static public function createErrorResponse(){
        return createErrorResponseWithMessage("Some Error Occurred");
    }
    
    static public function createErrorResponseWithMessage($msg){
        $json = json_encode(
            array(
                'status' => '400',
                'error_message' => $msg
            )
        );
        return $json;    
    }
}

?>
