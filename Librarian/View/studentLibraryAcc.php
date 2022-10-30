<?php $title= "Create Student Library Account";
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
  function studentLibAcc(){
    var Sturoll = document.getElementById('sturoll').value;
    var msg="";
    if(Sturoll==""){
                msg+="enter your roll";
                sturoll.className="error";
            }
      if(msg==""){
          return true;
        }else{
              document.getElementById('msg1').innerHTML = "enter your roll";
              return false;
            }
  }
  function validation(){
            var Sturoll = document.getElementById('sturoll').value;
            if(Sturoll!="" && Sturoll.length > 0){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('sturoll').className="success";
            }
}
  </script>  
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
            <form action="../Controller/studentAccCheck.php" method="POST" onsubmit="return studentLibAcc()">
                <table align="center" >
                     <tr>
                        <td>Enter Student Id</td>
                        <td>: <input type="text" name="sturoll" id="sturoll" onkeypress="validation()"><div id="msg1"></div></td>
                      </tr>
                      <tr>
                        <td><input type="submit" name="submit" value="Submit"></td>
                      </tr>
                       
                  </table>
                </fieldset>
              </form>
          
        </td>
      </tr>
    </table>
      </div>
  </div>
  <?php include('footer1.php'); ?>

</body>

</html>