@include("dashboard.layouts.sidepanel")
<div class ='content'>
  <div class ='card'>
    <div class ='content'>
      @if(session('success')!==null)
      <div class="alert alert-success alert-dismissible">
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> - {!!session('success')!!}
      </div>
      @endif
      <form method ='post'>
        <div class ='form-group'>
          @csrf
          <label>Lesson Number</label>
          <input type ='text' class ='form-control' name = 'lessonNumber' pattern = '[0-9]+' placeholder = 'Lesson Number' value ='{{$lesson->lesson_no}}' REQUIRED/>
        </div>
        <div class ='form-group'>
          <label>Lesson Name</label>
          <input type ='text' class ='form-control' name = 'lessonName' placeholder = 'Lesson Name' value ='{{$lesson->lesson_name}}' REQUIRED/>
        </div>
        <div class ='form-group'>
          <label>Game Type</label>
          <input type ='text' class ='form-control' name ='gameType' placeholder = 'Game Type' value = '{{$lesson->game_type}}' REQUIRED/>
        </div>
        <div class ='form-group'>
          <div class = 'col-md-4'>
            <input type ='submit' class ='btn btn-primary btn-fill pull-left' name = 'submit' value = 'Edit Lesson'>
          </div>
        </div>
        <div class ='clearfix'></div>
      </form>
    </div>
  </div>
</div>
@include("dashboard.layouts.footer");