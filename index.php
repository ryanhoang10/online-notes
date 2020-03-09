<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">
      
    <link href="https://fonts.googleapis.com/css?family=Arvo&display=swap" rel="stylesheet">

<link rel="stylesheet" href="styles.css">

    <title>Online Notes</title>
  </head>
  <body>
    <!-- Navigation Bar -->
      <nav role="navigation" class="navbar navbar-custom navbar-fixed-top">
          
          <div class="container-fluid">
          
              <div class="navbar-header">
              
                <a class="navbar-brand">Online Notes</a>
                  
                  
                <button type="button" class="navbar-toggle" data-target="#navbarCollapse" data-toggle="collapse">    
                  
                    <span class="sr-only">Toggle navigation</span>
                  
                    <span class="icon-bar"></span>
                  
                    <span class="icon-bar"></span>
                  
                    <span class="icon-bar"></span>
                </button>
                  
              </div>
              <div class="navbar-collapse collapse" id="navbarCollapse">
              
                  <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="#">Help</a></li>
                    <li><a href="#">Contact</a></li>
                  </ul>
                  
                   <ul class="nav navbar-nav navbar-right"> 
                    <li><a href="#loginModal" data-toggle="modal">Login</a></li>               
                  </ul>
                  
              </div>
          </div>
      
      </nav>
    <!-- Jumbotron with Sign up Button -->
      
      <div class="jumbotron" id="myContainer">
          <h1>Online Notes</h1>
          <p>Your notes with you wherever</p>
          <p>Easy to use!</p>
          
          <button type="button" class="btn btn-lg green signup" data-target="#signupModal" data-toggle="modal">Sign Up</button>
      </div>
      
    <!-- Login form -->
      
      <form method="post" id="loginform">
        <div class="modal" role="dialog" id="loginModal" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                
                <button class="close" data-dismiss="modal">
                    &times;
                </button>
   
                <h4 class="modal-title">Login</h4>   
                </div>
                    
                    
                <div class="modal-body">
                    
                    <!---Login message form from PHP--->
                    
                    <div id="loginMessage"></div>
                    
                    <div class="form-group">
                        <label for="loginusername" class="sr-only">Enter your Username: </label>
                        <input class="form-control" type="text" name="loginusername" placeholder="Username" maxlength="30" id="loginusername">
                    </div>
                    
                    <div class="form-group">
                        <label for="loginpassword" class="sr-only">Enter your Password: </label>
                        <input class="form-control" type="loginpassword" name="loginpassword" placeholder="Choose a Password" maxlength="30" id="loginpassword">
                    </div>

                    
                </div>
                    
                    
                <div class="modal-footer">
                    <input class="btn green" name="signup" type="submit" value="Sign up">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                </div>
            </div>
        </div>
      </form>
      
    <!-- Sign up form -->
      
      <form method="post" id="signupform">
        <div class="modal" role="dialog" id="signupModal" aria-labelledby="myModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                
                <button class="close" data-dismiss="modal">
                    &times;
                </button>
   
                <h4 class="modal-title">Sign Up Now!</h4>   
                </div>
                    
                    
                <div class="modal-body">
                    
                    <!---Sign up message form from PHP--->
                    
                    <div id="signupMessage"></div>
                    
                    <div class="form-group">
                        <label for="username" class="sr-only">Username: </label>
                        <input class="form-control" type="text" name="username" placeholder="Username" maxlength="30" id="username">
                    </div>
                    
                    <div class="form-group">
                        <label for="password" class="sr-only">Choose a Password: </label>
                        <input class="form-control" type="password" name="password" placeholder="Choose a Password" maxlength="30" id="password">
                    </div>
                    
                    <div class="form-group">
                        <label for="password2" class="sr-only">Confirm Password: </label>
                        <input class="form-control" type="password" name="password2" placeholder="Confirm Password" maxlength="30" id="password2">
                    </div>
                    
                </div>
                    
                    
                <div class="modal-footer">
                    <input class="btn green" name="signup" type="submit" value="Sign up">

                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                </div>
                </div>
            </div>
        </div>
      </form>
      
    <!-- Maybe forget Password -->
    
    <!-- Footer -->
      
      <div class="footer">
        <div class="container">
          <p>Ryan Hoang CSIS484 &copy; 2019-<?php $today=date("Y"); echo $today?>.</p>
        </div>
      </div>
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>