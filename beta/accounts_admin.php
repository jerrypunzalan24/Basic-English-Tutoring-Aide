<?php 
session_start();
include_once('connectDB.php');
if(!isset($_SESSION['login']) || !$_SESSION['admin']){
   $_SESSION['error'] = '<b>Error</b> - Please login to continue';
        header("Location: login.php");
}
$title = 'Accounts';
$color = 'blue';
$active = array_fill(0,8,''); 
$active[7]='active'; include_once('sidepanel.php');?>
  <link href = '//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css' rel ='stylesheet'/>
  <link href = 'https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css' rel = 'stylesheet'/>
  <link href ='https://cdn.datatables.net/1.10.15/css/dataTables.semanticui.min.css' rel = 'stylesheet'/>
<style>
  .dataTables_wrapper .dataTables_paginate .paginate_button:hover{
    border:none;
  }
  table.dataTable.no-footer{
    border-bottom:1px solid #b5b5b5;
  }
  .glyphicon{
    margin-right: 5px;
  }
  .ui.table td{
  text-align: center;
  }
</style>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">User Accounts</h4>
                            </div>
                            <div class="content table-responsive">
                                <?php
                              function showModal($message, $idName, $location){
                                echo "<div class=\"modal\" id=\"{$idName}\" tabindex=\"1\" role=\"dialog\">";
                                    echo "<div class=\"modal-dialog\">";
                                                    //<!-- Modal content-->
                                        echo "<div class=\"modal-content\" id=\"{$idName}\">";
                                            echo "<div class=\"modal-header\">";
                                              echo "<button type=\"button\" class=\"close\" data-dismiss=\"modal\">&times;</button>";
                                              echo "<h4 class=\"modal-title\">Confirm Delete</h4>";
                                            echo "</div>";

                                            echo "<div class=\"modal-body\">";
                                              echo $message;
                                            echo "</div>";

                                            echo "<div class=\"modal-footer\">";
                                              echo "<form method = 'POST' action ='{$location}'>";
                                              echo "<input type = 'submit' name = 'submit' value ='Yes'class=\"btn btn-danger\"/>
                                              </form>";
                                              echo "<a href=\"#\" data-dismiss=\"modal\" class=\"btn btn-info\" onclick=\"$(\"#{$idName}\").modal(\"hide\");\">No</a>";
                                              echo "</div>";
                                          echo "</div>";

                                      echo "</div>";
                                  echo "</div>";
                              } // Glyphicon Reference: https://www.w3schools.com/bootstrap/bootstrap_ref_comp_glyphs.asp
                                echo "<a href='add.php' class='btn btn-info btn-fill pull-right'>Add Account</a>";
                                $query = mysqli_query($con, "SELECT * FROM accounts");
                                echo '<table id="table1" class="table-hover table-striped ui celled table" align =\"center\">';
                                    echo '<thead>';
                                        echo '<th>ID</th>';
                                        echo '<th >Role</th>';
                                        echo '<th>User Name</th>';
                                        echo '<th>First Name</th>';
                                        echo '<th>Last Name</th>';
                                        echo '<th>Action</th>';
                                   
                                    echo '</thead>';
                                    echo '</tbody>';
                                        //$i = 0;
                                        while ($row = mysqli_fetch_array($query))
                                        {
                                            $edit = "edit_admin.php?id=" . $row['id'];
                                            $delete = "delete.php?id=" . $row['id'];
                                            $change = 'assignRole.php?id='.$row['id'];
                                            $roleString = ($row['admin'] == 1) ? "<span class ='glyphicon glyphicon-eye-open'></span>Admin" : "<span class ='glyphicon glyphicon-user'></span>User&nbsp;&nbsp;&nbsp;";
                                            echo '<tr>';
                                                echo "<td>". $row['id'] ."</td>";
                                                echo "<td ><p class ='btn btn-primary btn-fill btn-md' style ='cursor:default'>{$roleString}</p></td>";
                                                echo "<td>". $row['username'] ."</td>";
                                                echo "<td>". $row['fname'] ."</td>";
                                                echo "<td>". $row['lname'] ."</td>";
                                                echo "<td><button class ='btn btn-primary btn-fill ".(($row['id'] == $_SESSION['id'])?"disabled'" : "' onclick = \"window.location.href='{$edit}'\"")." >
                                                <span class ='glyphicon glyphicon-wrench'></span>
                                                Edit
                                                </button>&nbsp&nbsp&nbsp
                                                <a href=\"#\" class ='btn btn-danger btn-fill' onclick=\"$('#dialog_{$row['id']}').modal('show');\" role=\"button\" class=\"btn-show-modal\" title=\"Delete?\">
                                                <span class ='glyphicon glyphicon-remove'></span>Delete</a></td>";
                                          
                                                showModal("<p>Are you sure you want to delete this record?</p>" . (($row['id'] == $_SESSION['id'])? "<p class ='text-warning'>You will be logged out if you delete a logged in user</p>" : ""), "dialog_{$row['id']}", $delete);
                                          
                                                showModal("<p>Do you want to change roles?</p>","role_{$row['id']}", $change);
                                            
                                              
                                            echo '</tr>';
                                        }
                                    echo '</tbody>';
                                echo '</table>';
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include_once('footer.php');?>
        <style>
            .row
            {
                margin: 0 14px 0 14px;
            }
        </style>