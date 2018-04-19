@include("layouts.header")
<div class = 'body-bg'>
  <div class = 'content'>
    <!-- end display notifcation -->
    <div class ='row'>
      <div class ='col-md-6 side-bg'>

      </div>
      <div class ='col-md-6' style ='padding-left:0px'>
        <form method = 'POST' id = 'submit-form' data-toggle = 'validator' role = 'form'>
          @csrf 
          <div class = 'card' style ='height:100%'>
            <div class = 'header ' style = 'padding:50px' align = 'center'>
              <h4 class = 'title' style = 'font-size: 2em' >Forgot Password</h4>
              <p class = 'category' style ='font-size: 1.2em'>Enter your username to continue</p>
            </div>
            @if(session('error')!==null)
            <div class="alert alert-danger" style ='width:80%;margin:auto'>
              <strong>Error!</strong> - {!!session('error')!!}
            </div>
            @endif
            <div class = 'content' style ='padding-top:50px'>
              <div class = 'row'>
                <div class = 'col-md-12'>
                  <div class = 'form-group'>
                    <label>Username</label>
                    <input type ='text' maxlength = "20" name = 'uname' class = 'form-control' data-error = 'Please fill out this field'REQUIRED/>
                    <div class="help-block with-errors"></div>
                  </div>
                </div>
              </div>
              <div class = 'row' align = 'center'>
                <div class ='col-md-12'>
                  <input type = 'submit' name = 'submit' value = 'Continue' class="btn btn-info btn-fill" style = 'width:100%' >
                </div>
              </div>
              <div class = 'row' align = 'center' style = 'padding-top: 20px'>
                <div class = 'col-md-12'>
                  <p class = 'category'><a href = '/'>Go back</a></p>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
@include("layouts.footer")
