@include("dashboard.layouts.sidepanel")
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="header">
            <h4 class="title">Add Account</h4>
          </div>
          <div class="content">
            @if(session('success')!==null)
            <div class="alert alert-success alert-dismissible" style ='width:80%;margin:auto'>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> - {!!session('success')!!}
            </div>
            @elseif(session('error')!==null)
            <div class="alert alert-danger alert-dismissible" style ='width:80%;margin:auto'>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Error</strong> - {!!session('error')!!}
            </div>
            @endif
            <form method="post" data-toggle = 'validator'>
              @csrf
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name = "uname" pattern = '\S{6,}' data-error = "Must contain 6 characters" class="form-control" placeholder="Username" value='{{old('uname')}}' REQUIRED/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Password</label>
                    <input type="password" name = "password" pattern = '\S{6,}' data-error = 'Must contain 6 characters' class="form-control" placeholder="Password" required value=''>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name = "fname" class="form-control" pattern = '^[^\s]+[\w\s]+[\w]*$' placeholder="First Name" required data-error = 'Must be valid and not empty' value='{{old('fname')}}'>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name = "lname" class="form-control" pattern = '^[^\s]+[\w\s]+[\w]*$' data-error = 'Must be valid and not empty' placeholder="Last Name" required value='{{old('uname')}}'>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Admin Account?</label>
                    <input type="checkbox" name = "admin" class="form-control" id=admin value=1>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <button type="submit" name = "btnAdd" class="btn btn-info btn-fill pull-right">Add Account</button>
              <div class="clearfix"></div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<style>
input[type="checkbox"]
{
  vertical-align:middle;
  width: 30px;
  height: 30px;
}
</style>
@include('dashboard.layouts.footer')

<script>
  $('#').validator();
</script>