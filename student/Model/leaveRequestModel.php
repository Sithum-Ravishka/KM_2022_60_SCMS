<?php
include_once('db.php');

function allUserList(){
    $conn = getConnection();
    $sql = "select * from leave_request";
    $result = mysqli_query($conn, $sql);
    $users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;


}


function getleavebyid($Id){

    $conn = getConnection();

    $sql = "select * from leave_request where id='{$Id}' && action=''";
    $result = mysqli_query($conn, $sql);
    $users =[];

		while($row = mysqli_fetch_assoc($result)){
			array_push($users, $row);
		}

		return $users;
}


function deleteUserbyid($id){
    $conn = getConnection();
    $sql = "delete from leave_request where id='$id'";
    $result = mysqli_query($conn,$sql);
    if($result){
        header('location: ../view/viewleaverequest1.php?your info is deleted');
    }
    else
    {
        header('location: ../view/viewleaverequest1.php?Not deleted your info');
    }

}
 ?>
