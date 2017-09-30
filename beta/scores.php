<!doctype html>
<?php
session_start();
include_once('connectDB.php');

if(!isset($_SESSION['login'])){
   $_SESSION['error'] = '<b>Error</b> - Please login to continue';
        header("Location: login.php");
}
$title = 'Scores';
$color = 'azure';
$active = array_fill(0,7,''); $active[4]='active';
include_once('sidepanel.php');

?>
<style>
  .col-md-6{
    padding:15px;
  }
  .row{ }
</style>
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">List of Scores</h4>
                                <p class="category">Click to view the scores of each game!</p>
                            </div>
                          <div class="content">
                              <div class = 'row'>
                                <div class ='col-md-6' >
                              <button type="button" class="butt">Image of game here</button>
                                  </div>
                                <div class = 'col-md-6'>
                              <button type="button" class="butt">Image of game here</button>
                                  </div>
                                </div>
                              <div class = 'row'>
                                <div class = 'col-md-6'>
						      <button type="button" class="butt">Image of game here</button>
                                  </div>
                                <div class ='col-md-6'>
                              <button type="button" class="butt">Image of game here</button>
                                  </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    


                </div>
            </div>
        </div>



<?php include_once('footer.php');?>
