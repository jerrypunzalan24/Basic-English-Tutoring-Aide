<!doctype html>
@include("dashboard.layouts.sidepanel")
<div class="content">
  <div id="myModal" class="modal fade" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
  <div class="container-fluid">
    <div class ='row'>
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Objective of the Project</h4>
            <p class="category">About the Project</p>
          </div>
          <div class="content">
            <div>
              @if(Session::get('role')) 
              <form method = 'post' >
                @csrf
                <div class = 'form-group'>
                  <textarea name = 'contentOne' class ='form-control' rows = '20' cols ='20'>{!!$contents[0]->description!!}</textarea>
                </div>
                <div class ='form-group'>
                  <input type = 'submit' class ='btn btn-primary btn-fill' name = 'submitOne' value ='Update'/>
                </div>

              </form> 
              
              @else
              <div class="content">
                <div>
                  <p>
                  </p>
                </div>
              </div>
              @endif    
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class ='row'>
      <div class="col-md-12">
        <div class="card ">
          <div class="header">
            <h4 class="title">English Language</h4>
            <p class="category">Information</p>
          </div>
          <div class="content">
            @if(Session::get("role"))
            <form method = 'post' >
              @csrf
              <div class ='form-group'>
                <textarea name = 'contentTwo' class ='form-control' rows = '20' cols ='20'>{!!$contents[1]->description!!}</textarea>
              </div>
              <div class ='form-group'>
                <input type = 'submit' class ='btn btn-primary btn-fill' name = 'submitTwo' value ='Update'/>
              </div>
            </form>
            
            @else
            <div class="content">
              <div>
                <p>
                </p>
              </div>
            </div>
            @endif
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class ='col-md-12'>
        <div class="card">

          <div class="header">
            <h4 class="title">Mechanics</h4>
            <p class="category">Information</p>
          </div>
          <div class ='content'>
            <p>Visual Novels (English 101 with Sachi & Henriks Supermarket)</p>
            <p>Press left click to interact in the game.</p>
            <p><b>Game's Interface</b></p>
            <img src = 'assets/img/gameplay-choice.png' width = '100%'/>
            <img src = 'assets/img/gameplay-choice-answer.png' width = '100%'/>
          </div>
        </div>

        <div class="row">
        </div>
      </div>
    </div>

    @include("dashboard.layouts.footer")
    <script>
              $('.sidebar').attr('data-color','blue')

    </script>