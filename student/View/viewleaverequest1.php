<?php
	$title= "leaveRequest";
	include('header.php');
	include_once('../model/leaveRequestModel.php');
	$UsersList = getleavebyid($_COOKIE['id']);
?>
<?php include('sideBar.php'); ?> s
						<div id="sidebar" class="">
                <ul>
                  <li><a href="leaveRequest.php">Student's leave request</a></li>

                </ul>
							</div>
              </td>

              <td>
                <form  class="" action="regCheckCourse.php" method="post">
                  <fieldset >
                    <legend>Student's leave request list</legend>
										<?php
										echo "<table border = 1 width='100%' cellspacing = 0  >
										<tr align = 'center'>
		                    <td>ID</td>
										    <td>Name</td>
										    <td>Leave From</td>
												<td>Leave To</td>
												<td>Action</td>
												<td>Leave From Delete</td>

										</tr>";
										for($i = 0; $i<count($UsersList); $i++){
										    echo "<tr align = 'center'>
										    <td>{$UsersList[$i]['id']}</td>
										    <td>{$UsersList[$i]['name']}</td>
										    <td>{$UsersList[$i]['leave_from']}</td>
											<td>{$UsersList[$i]['leave_to']}</td>
									<td>{$UsersList[$i]['action']}</td><td><a href='deleteLeaveForm.php?id={$UsersList[$i]['id']}'> Delete </a>  </td>

										</tr>";
										}
										echo "</table>";
										?>



                  </fieldset>
                </form>
              </td>
            </tr>
          </table>
        </td>
      </tr>





      <?php include('footer.php'); ?>
