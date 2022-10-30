<?php $title= "Issue a New Book";
	include('headerContent.php');
  include_once('../Model/usersmodel.php');
  $id = $_GET['id'];
  $requestBook = requestBookInfo($id);
   ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>Footer</title>
  <style>
    <?php include '../Style/dashboard.css'; ?>
  </style>
</head>

<body>
  <div class="dashboard-content">
    <div class="dashboard-sidebar">
      <?php include('Sidebar.php'); ?>
    </div>

    <div class="dashboard-table"> 

  <script>
  function issuenewbook(){
    var Studentroll = document.getElementById('studentroll').value;
    var Isbnno = document.getElementById('isbnno').value;
    var msg="";
    if(Studentroll==""){
                msg+="please fill up studentroll";
                studentroll.className="error";
            }
            if(Isbnno==""){
                msg+="please fill up Isbnno";
                isbnno.className="error";
            }        
      if(msg==""){
          return true;
        }else{
              document.getElementById('msg1').innerHTML = "please fill up studentroll";
              document.getElementById('msg2').innerHTML = "enter isbn";
              return false;
            }
  }
  function validation(){
            var Studentroll = document.getElementById('studentroll').value;
            var Isbnno = document.getElementById('isbnno').value;
            if(Studentroll!=""){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('studentroll').className="success";
            }
            if(Isbnno!="" && Isbnno.length == 3){
                document.getElementById('msg2').innerHTML="";
                document.getElementById('isbnno').className="success";
            }
}
  </script>     

        <h2 align="center" ><?php echo $title; ?></h2>
          <form action="../Controller/issueNewBookCheck.php" method="post" onsubmit="return issuenewbook()" enctype="multipart/form-data">
          <table align="center">
                    <tr>
                        <td>Student Id :</td>
                        <td><input type="text" name="studentroll" id="studentroll" value="<?php echo $id ?>" onkeypress="validation()"><div id="msg1"></div></td>
                    </tr>
                    <tr>
                        <td>ISBN Number :</td>
                        <td><input type="text" name="isbnno" id="isbnno" value="<?php echo  $requestBook['isbn']; ?> " onkeypress="validation()"><div id="msg2"></div></td>
                    </tr>
                    <tr>
                        <td>Book title :</td>
                        <td><input type="text" name="title" id="title" value="<?php echo  $requestBook['title']; ?>" onkeypress="validation()"><div id="msg2"></div></td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td><input type="submit" name="issuebook" value="Issue Book"></td>
                    </tr>
             </table>
          </form>
        </td>
      </tr>

      </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html> 