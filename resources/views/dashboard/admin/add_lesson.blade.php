@include('dashboard.layouts.sidepanel');
<div class ='content'>
	<div class ='card'>
		<div class ='content'>
			 @if(session('success')!==null)
      <div class="alert alert-success alert-dismissible" style ='width:80%;margin:auto;'>
        <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
        <strong>Success!</strong> - {!!session('success')!!}
      </div>
      @endif
			<form method ='post'>
				@csrf
					<div class ='form-group'>
					<label>Lesson Number</label>
					<input type ='number' class ='form-control' name = 'lessonNumber' placeholder = 'Lesson Name' value ='' REQUIRED/>
				</div>
				<div class ='form-group'>
					<label>Lesson Name</label>
					<input type ='text' class ='form-control' name = 'lessonName' placeholder = 'Lesson Name' value ='' REQUIRED/>
				</div>
				<div class ='form-group'>
					<label>Game Type</label>
					<input type ='text' class ='form-control' name ='gameType' placeholder = 'Game Type' value ='' REQUIRED/>
				</div>
				<div class ='form-group'>
					<div class = 'col-md-4'>
						<input type ='submit' class ='btn btn-primary btn-fill pull-left' name = 'submit' value = 'Add Lesson'>
					</div>
				</div>
				<div class ='clearfix'></div>
			</form>
		</div>
	</div>
</div>
@include('dashboard.layouts.footer');