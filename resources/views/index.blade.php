@include("layouts.header")
<div class = 'body-bg' >
  <!-- end display notifcation -->
  <div class = 'row' >
    <div class = 'col-md-6 side-bg'>
      <div class ='content' style = 'padding:40px;' >

      </div>
    </div>
    <div class ='col-md-6' style ='padding-left:0' >
      <form method = 'POST' id = 'submit-form'  data-toggle = 'validator' role = 'form'>
        @csrf
        <div class = 'card' style = 'height:100%'>
          <div class = 'header ' style = 'padding:50px' align = 'center'>
            <h4 class = 'title' style = 'font-size: 2em' >Welcome</h4>
            <p class = 'category' style ='font-size: 1.2em'>Enter your username and password to log-in</p>
          </div>
          <div class = 'content'>
            <div class ='row' style ='padding-top:50px'>

              @if(session('error')!==null)
              <div class="alert alert-danger" style ='width:80%;margin:auto'>
                <strong>Error!</strong> - {{session('error')}}
              </div>
              @elseif (session('success')!==null)
              <div class="alert alert-success" style ='width:80%;margin:auto'>
                <strong>Success</strong> - {!!session('success')!!}
              </div>
              @endif
              <div class ='content'>
                <div class = 'row'>
                  <div class = 'col-md-12'>
                    <div class = 'form-group'>
                      <label>Username</label>
                      <input type ='text' pattern = '\S+'maxlength = "20" name = 'uname' class = 'form-control' data-error = 'Please fill out this field' value = '{{ session('username') }}' REQUIRED/>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
                <div class = 'row'>
                  <div class = 'col-md-12'>
                    <div class = 'form-group'>
                      <label>Password</label>
                      <input type ='password' maxlength = "20" class = 'form-control' name = 'pass' data-error = 'Please fill out this field.' REQUIRED/>
                      <div class="help-block with-errors"></div>
                    </div>
                  </div>
                </div>
              </div>

            </div>

            <div class = 'row' align = 'center'>
              <div class ='col-md-12'>
                <input type = 'submit' name = 'submit' value = 'Login' class="btn btn-info btn-fill" style = 'width:100%'>
              </div>

            </div>
            <div class = 'row' align = 'center' style = 'padding-top: 20px'>
              <div class = 'col-md-6'>
                <p class = 'category'><a href = 'forgotpass'>Forgot password?</a></p>
              </div>
              <div class = 'col-md-6'>
                <p class = 'category'>Not a member? <a href = 'signup'>Sign up</a></p>
              </div>
            </div>

          </div>
          <?php session_unset(); ?>
        </div>
      </form>
    </div>
  </div>

</div>
</div>
@include("layouts.footer")