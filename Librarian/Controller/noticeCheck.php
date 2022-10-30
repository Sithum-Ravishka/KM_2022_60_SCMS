<?php
require_once('../Model/usersmodel.php');
if(isset($_POST['uploadnotice'])){
    $noticetitle = $_POST['noticetitle'];
    $noticedetails = $_POST['noticedetails'];
    $noticetime = time() - 86400;

    function noticeTitleValidation($noticetitle){
        if($noticetitle == ""){
            echo "Notice Field is Require";
            echo "</br>";
        }
    }

    function noticeDetailsValidation($noticedetails){
        if($noticedetails == ""){
            echo "Notice details is Require";
            echo "</br>";
        }
    }

    if(noticeTitleValidation($noticetitle) && noticeDetailsValidation($noticedetails)){
        $noticeinfo = [
            'noticetitle' => $noticetitle,
            'noticedetails' => $noticedetails,
            'noticetime' => $noticetime
        ];
        //print_r($noticeinfo['noticetime']);
        
        $status1 = insertNotice($noticeinfo);
        if($status1){
            header('location: ../View/dashboard.php');
        }else{
            echo "failed to upload notice!";
        }

    }else{
        return false;
    }
    

}
else{
    echo "Invalid Request";
}


?>