<!doctype html>
@include("dashboard.layouts.sidepanel");
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
            <h4 class="title">List of Available Games</h4>
            <p class="category">Enjoy the Games!</p>
          </div>
          <div class="content">
            <div class = 'row'>
              <div class ='col-md-6'>
                <div class ='content' style ='padding-right:0px'>
                  <a href = 'Monogatari/index.php?gameType=Start'><img src ='{{asset('assets/img/vino.png')}}' style ='width:100%'/></a>
                </div>
              </div>
              <div class ='col-md-6'>
                <div class ='content' style ='padding-left:0px'>
                  <a href = 'Monogatari/index.php?gameType=Start1'><img src ='{{asset('assets/img/henrik-supermarket.png')}}' style ='width:100%'/></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@include("dashboard.layouts.footer")