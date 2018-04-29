@include("dashboard.layouts.sidepanel")
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">

        <div class = 'content'>

          <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item active">
              <a class="nav-link active" data-toggle="tab" href="#info" role="tab" aria-expanded = 'true'>Edit Info</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#pass" role="tab">Change Password</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data-toggle="tab" href="#changedp" role="tab">Change Default Picture</a>
            </li>
          </ul>
          <div class="card">   
            <div class="tab-content">
              <div class="tab-pane fade active in" id="info" role="tabpanel" aria-expanded = 'true'>
                <div class ='content'>
                  <form method = 'post' data-toggle = 'validator'>
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Username</label>
                          <input type="text" name = "username" class="form-control" pattern = '\S{6,}' placeholder="Username" value='{{$account->username}}' REQUIRED/>
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
                    @if(!Session::get('role'))
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
              </div>
              <div class="tab-pane fade" id="pass" role="tabpanel">
                <div class ='content'>                          
                  <form method = 'post' data-toggle='validator'>
                    @csrf
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>Current Password</label>
                          <input type="password" name = "cpassword"   class="form-control" pattern = '\S{6,}' placeholder="Current Password" required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12">
                        <div class="form-group">
                          <label>New Password</label>
                          <input type="password" name = "npassword"   class="form-control"  pattern = '\S{6,}' placeholder="New Password" value='' required>
                          <div class="help-block with-errors"></div>
                        </div>
                      </div>
                    </div>
                    <button type="submit" name = "updatePass" class="btn btn-info btn-fill pull-right">Update Password</button>
                    <div class="clearfix"></div>
                  </form>
                </div>
              </div>
              <div class="tab-pane fade" id="changedp" role="tabpanel">
                <div class ='content'>
                  <form method ='post' enctype="multipart/form-data">
                    @csrf
                    <div class ='row'>
                      <div class ='col-md-12'>
                        <div class ='form-group'>

                          <input type ='file' name ='imageFile' id ='file'class = 'custom-file-input' accept = 'image/*'/>
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

    </div>
  </div>
</div>
@include("dashboard.layouts.footer")
<script>
  $('#').validator();
</script>
</script>
</script>