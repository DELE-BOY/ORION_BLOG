<!-- <!DOCTYPE html>
<html lang="en">
  <head>
  <meta http-equiv="content-type" content="text/html;charset=utf-8">
  <base>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="Babcock University">
    <meta name="author" content="DELE">
    <title>FRESHERS HELP DESK LOGIN </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  </head>
  <body class="c-app flex-row align-items-center  pace-done"><div class="pace  pace-inactive">
    <div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
    <div class="pace-progress-inner"></div>
  </div>
  <div class="pace-activity"></div></div><c:url var="url" value="/index.jsp">
  
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
              <div class="card-body">
                <h1>LOGIN</h1>
                <p class="text-muted">Sign In to your account</p>
                <form method="POST" action="{{route('login-user')}}" id="loginform">
                    @if (Session::has('success'))
                    <div class="alert alert-success">{{Session::get('success')}}</div>
                        
                    @endif
                    @if (Session::has('fail'))
                    <div class="alert alert-danger">{{Session::get('fail')}}</div>
                        
                    @endif
                    @csrf
                <div class="input-group mb-3">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <i class="far fa-user"></i>
                    </span></div>
                  <input class="form-control" type="text" placeholder="Username" name="username" id="username">
                </div>
                <span class="text-danger">@error('username')* {{$message}} @enderror</span>
                <div class="input-group mb-4">
                  <div class="input-group-prepend"><span class="input-group-text">
                      <i class="far fa-lock"></i>
                    </span></div>
                  <input class="form-control" type="password" placeholder="Password" id="password" name="password">
                </div>
                <span class="text-danger">@error('username')* {{$message}} @enderror</span>
                <div class="form-group row">
                  <div class="col-md-12 col-form-label">
                    <div class="form-check form-check-inline mr-1">
                      <input class="form-check-input" id="inline-checkbox1" type="checkbox" value="showPass" onclick="showPassword()">
                      <label class="form-check-label" for="inline-checkbox1">Show Password</label>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-6">
                    <button class="btn text-white px-4" type="submit" style="background-color: #004282;">
                      <i class="far fa-sign-in-alt text-white" style="margin-right:10px;"></i> Login
                    </button>
                  </div>
                  <div class="col-6 text-right" >
                    <!-- <a class="btn  px-0" href="./passwordResetApplicants.jsp" >Forgot password?</a> ->
                  </div>
                </div>
                </form>
              </div>
            </div>
            <!-- <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%"> ->
            <div class="card text-white  d-md-down-none" style="width:44%; background-color: #004282">
              <!-- Logo ->
              <img src="./img/BUCC.png" style="padding: 1rem;">
              <div class="card-body text-center">
                <div>
  
                  <h2>Welcome</h2> 
                  <p>We want to create a medium through which students can seek direction and recieve guidance on how to process thei registration into BUCC.</p>
                  <a class="btn btn-lg btn-outline-light mt-3" target="_blanks" href="{{ route('register') }}"> <i classfar fa-house-return" style="margin-right:10px;">
                  </i> Register </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="./assets/login/vendors/pace-progress/js/pace.min.js"></script>
    <script src="./assets/login/vendors/%40coreui/coreui-pro/js/coreui.bundle.min.js"></script>
  
    
    <script type="text/javascript">
      // Change Password Script
      function showPassword() {
        var x = document.getElementById("password");
        if (x.type === "password") {
          x.type = "text";
        } else {
          x.type = "password";
        }
      }
    
    </script>
  
  
  
  </c:url></body>
</html> -->