<?php
if(isset($_POST['submit'])){
    $fileinfo = $_FILES['myfile'];
    $name = $_POST['first'];
    echo $name;
    print_r($fileinfo);


}else{
    echo "invalid Request";
}

?>