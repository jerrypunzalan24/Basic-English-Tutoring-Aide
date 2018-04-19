<!doctype html>
@include("dashboard.layouts.sidepanel")
@if(Session::get("role"))
<link href = '//cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.6/semantic.min.css' rel ='stylesheet'/>
<link href = 'https://cdn.datatables.net/1.10.15/css/jquery.dataTables.min.css' rel = 'stylesheet'/>
<link href ='https://cdn.datatables.net/1.10.15/css/dataTables.semanticui.min.css' rel = 'stylesheet'/>
@endif
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="header">
            <h4 class="title">Course Outline</h4>
            <p class ='category'>Lessons that will teach you in-game</p>
          </div>
          <div class="content table-responsive table-full-width" @if(Session::get("role")) style ='padding-left:50px' @endif>
            <div class="modal" id="deleteModal" tabindex="1" role="dialog">";
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Confirm Delete</h4>
                  </div>
                  <div class="modal-body">
                  </div>
                  <div class="modal-footer">
                    <form method = 'POST' action ='{$location}'>
                      <input type = 'submit' name = 'submit' value ='Yes'class="btn btn-danger"/>
                    </form>
                    <a href="#" data-dismiss="modal" class="btn btn-info" onclick="$("#{$idName}").modal("hide");">No</a>
                  </div>
                </div>

              </div>
            </div>
            @if(Session::get("role"))
            <a href='add_lesson.php' class='btn btn-info btn-fill pull-right'>Add Lesson</a>
            @endif
            @if(Session::get("role"))
            <table class="table-hover table-striped ui celled table" id = 'lessonTable'>
              @else 
              <table class="table table-hover table-striped">
                @endif
                <thead>
                  <th>Lesson Number</th>
                  <th>Name</th>
                  <th>Game Type</th>
                  @if(Session::get("role"))
                  <th>Action</th>
                  @endif
                </thead>
                <tbody>
                  @foreach($results as $result)
                  <tr>
                    @if(!Session::get("role"))
                    <td>{{$result->lesson_no}}</td>
                    <td><a style = 'text-decoration:none; color: #131313;' href ='https://en.wikipedia.org/wiki/Special:Search?search={{$result->lesson_name}}' >{{$result->lesson_name}}</a></td>
                    <td>{{$result->game_type}}</td>
                    @else
                    <td>{{$result->lesson_no}}</td>
                    <td>{{$result->lesson_name}}</td>
                    <td>{{$result->game_type}}</td>
                    <td><button class ='btn btn-primary btn-fill' onclick = "window.location.href='edit_lesson/{{$result->id}}'">
                      <span class ='glyphicon glyphicon-wrench'></span>
                      Edit
                    </button>&nbsp&nbsp&nbsp
                    <a href="#" class ='btn btn-danger btn-fill' role="button" class="btn-show-modal" title="Delete">
                      <span class ='glyphicon glyphicon-remove'></span>Delete</a></td>
                      @endif
                    </tr>
                    @endforeach
                  </tbody>
                </table>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    @include("dashboard.layouts.footer")