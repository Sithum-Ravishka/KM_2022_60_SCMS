<?php $title= "Add New Book Arrival Notice";
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
function bookarrivalnotice(){
            var Noticetitle = document.getElementById('noticetitle').value;
            var Noticedetails = document.getElementById('noticedetails').value;
            var msg="";
            
            if(Noticetitle==""){
                msg+="please write notice title";
                noticetitle.className="error";
            }
            if(Noticedetails==""){
                msg+="enter noticedetails";
                noticedetails.className="error";
            }
            if(msg==""){
                return true;
            }
            else{
                document.getElementById('msg1').innerHTML = "please write notice title";
                document.getElementById('msg2').innerHTML = "enter noticedetails";
                return false;

            }
}

            function validation(){
            var Noticetitle = document.getElementById('noticetitle').value;
            var Noticedetails = document.getElementById('noticedetails').value;
            if(Noticetitle!="" && Noticetitle.length >= 12){
                document.getElementById('msg1').innerHTML="";
                document.getElementById('noticetitle').className="success";
            }
            if(Noticedetails!="" && Noticedetails.length >= 30){
                document.getElementById('msg2').innerHTML="";
                document.getElementById('noticedetails').className="success";
            }
          }     
</script>
        <td id="main content"><h2 align="center" ><?php echo $title; ?></h2><hr>
          <form action="../Controller/noticeCheck.php" method="POST"  onsubmit="return bookarrivalnotice()">
          <table align="center">
                    <tr>
                        <td>Enter Notice Title :</td>
                        <td><input type="text" name="noticetitle" id="noticetitle" value=""  onkeypress="validation()"><div id="msg1"></div></td>
                    </tr>
                    
                    <tr>
                        <td>Enter Notice Details :</td>
                        <td><textarea rows="4" cols="50" name="noticedetails" id="noticedetails"  onkeypress="validation()"></textarea><div id="msg2"></div></td>
                    </tr>
                    
                    <tr>
                        <td></td>
                        <td><input type="submit" name="uploadnotice" value="Upload Notice"></td>
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