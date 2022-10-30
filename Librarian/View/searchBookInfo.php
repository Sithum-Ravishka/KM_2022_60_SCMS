<?php $title= "Search Book";
include('headerContent.php');
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
  function searchbookinfo(){
    var Isbnno = document.getElementById('isbnno').value;
    var msg="";
    if(Isbnno==""){
                msg+="please fill up ISBN";
                isbnno.className="error";
            }
      if(msg==""){
          return true;
        }else{
              document.getElementById('msg1').innerHTML = "please fill up the isbn";
              return false;
            }
  }
  function validation(){
            var Isbnno = document.getElementById('isbnno').value;
            if(Isbnno!="" && Isbnno.length == 3){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('isbnno').className="success";
            }
}
  </script> 
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
          <form action="../View/searchBookCheck.php" method="post" onsubmit="return searchbookinfo()">
          <table align="center">
                    
                    <tr>
                        <td>ISBN Number :</td>
                        <td><input type="text" name="isbnno" id="isbnno" value=""  onkeypress="validation()"><div id="msg1"></div></td>
                    </tr>
                    <tr> 
                        <td></td>
                        <td><input type="submit" name="searchbook" value="Get Book Info"></td>
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