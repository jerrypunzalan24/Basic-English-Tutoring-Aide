@include("dashboard.layouts.sidepanel")
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8">
        <div class="card">
          <div class="header">
            <h4 class="title">Edit Info</h4>
          </div>   
          <div class="content">
            @if(session('success')!==null)
            <div class="alert alert-success alert-dismissible" style ='width:80%;margin:auto'>
              <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
              <strong>Success!</strong> - {!!session('success')!!}
            </div>
            @endif
            <form method = 'post' data-toggle = 'validator'>
              <div class="row">
                @csrf
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Username</label>
                    <input type="text" name = "username" class="form-control" placeholder="Username" value='{{$account->username}}' REQUIRED/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>First Name</label>
                    <input type="text" name = "fname" class="form-control" pattern = '^[^\s]+[\w\s]+[\w]*$' placeholder="First Name" required data-error = 'Must be valid and not empty' value='{{$account->fname}}'>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Last Name</label>
                    <input type="text" name = "lname" class="form-control" pattern = '^[^\s]+[\w\s]+[\w]*$' data-error = 'Must be valid and not empty' placeholder="Last Name" required value='{{$account->lname}}'>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              @if(Session::get('role'))
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>About</label>
                    <textarea name = 'about' class ='form-control' rows = '5'>{{$account->about}}</textarea>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              @endif
              <button type="submit" name = "updateInfo" class="btn btn-info btn-fill pull-right">Update Info</button>
              <div class="clearfix"></div>
            </form>
          </div>
          <div class ='header'><h4 class ='title'>Change Password</h4></div>
          <div class ='content'>                          
            <form method = 'post' data-toggle='validator'>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>Current Password</label>
                    <input type="password" name = "cpassword"   class="form-control" placeholder="Current Password" required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-12">
                  <div class="form-group">
                    <label>New Password</label>
                    <input type="password" name = "npassword"   class="form-control" placeholder="New Password" value='' required>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <button type="submit" name = "updatePass" class="btn btn-info btn-fill pull-right">Update Password</button>
              <div class="clearfix"></div>
            </form>
          </div>
          <div class ='header'><h4 class ='title'>Change Default Picture(Optional)</h4></div>
          <div class ='content'>
            <form method ='post' enctype="multipart/form-data">
              <div class ='row'>
                <div class ='col-md-12'>
                  <div class ='form-group'>
                    <input type ='file' name ='imageFile' accept = 'image/*'/>
                  </div>
                  <div class ='form-group'>
                    <input type = 'submit' name ='submitImage' class ='btn btn-info btn-fill pull-right'/>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  </div>
</div>

@include("dashboard.layouts.footer")
<script>
  $('#').validator();
</script>