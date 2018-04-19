@include("layouts.header")
<div class = 'body-bg'>
  <div class = 'content' style = ''>
    <div class = 'row'>
      <div class ='col-md-6 side-bg'>
        <div class ='content' style = 'padding:40px; ' >
        </div>
      </div>
      <div class ='col-md-6' style ='padding-left:0; '>
        <!-- form fields -->
        <form method = 'POST' id = 'submit-form' data-toggle = 'validator' role = 'form'>
          @csrf
          <div class = 'card' style = 'height:100%'>
            <div class = 'header ' style = 'padding:50px' align = 'center'>
              <h4 class = 'title' style = 'font-size: 2em' >Signing up</h4>
              <p class = 'category' style ='font-size: 1.2em'>Fill the following fields</p>
            </div>
            <div class = 'content'>
              <div class = 'row'>
                <div class = 'col-md-6'>
                  <div class = 'form-group'>
                    <label>First Name</label>
                    <input type ='text' name = 'fname' pattern = "^[^\s]+[\w\s]+[\w]*$" class = 'form-control' maxlength = "20" data-error = 'Must be valid and not empty!' value = '' REQUIRED/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
                <div class = 'col-md-6'>
                  <div class = 'form-group'>
                    <label>Last Name</label>
                    <input type ='text' name = 'lname' pattern = "^[^\s]+[\w\s]+[\w]*$" class = 'form-control' maxlength = "20" data-error = 'Must be valid and not empty!' value = ''   REQUIRED/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class = 'row'>
                <div class = 'col-md-12'>
                  <div class = 'form-group'>
                    <label>Username</label>
                    <input type ='text'  pattern = '\S{6,}'  name = 'uname'  class = 'form-control' maxlength = "20"
                    value = '' REQUIRED/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class = 'row'>
                <div class = 'col-md-12'>
                  <div class = 'form-group'>
                    <label>Password</label>
                    <input type ='password'  pattern = '\S{6,}' class = 'form-control'  name = 'pass' maxlength = "20"REQUIRED/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class = 'row' align = 'center'>
                <div class ='col-md-12'>
                  <input type = 'submit' value = 'Sign up' name = 'signup' class="btn btn-info btn-fill" style = 'width:100%'>
                </div>
              </div>
              <div class = 'row' align = 'center' style = 'padding-top: 20px'>
                <div class = 'col-md-12'>
                  <p class = 'category'><a href = 'login.php'>Go back</a></p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </form>
  </div>
</div>
@include("layouts.footer")
