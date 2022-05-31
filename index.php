<html>
    <head>
        <!-- CSS only -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" 
        rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <!-- JavaScript Bundle with Popper -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" 
            crossorigin="anonymous">
        </script>
    </head>
    <style>
    .right{
        background-color:white;
        margin-top:10%;
        border:gray 1px solid;
        border-radius:8px;
        padding:10px;
        box-shadow:gray 1px 1px 5px 1px;
    } 
    .log{
        font-size:x-large;
        font-weight:bold;
        width:100%;
    }
    .a{
        float:right;
    }
    </style>
    <body>
        <div class="row">
        <div class="col-md-4">
        
        </div>
        <div class="col-md-4 right text-center" >
        <form method="post" action="login_action.php" >
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Email address or phone number" name="t1">
            </div><br>
            <div class="form-group">
                <input type="password" class="form-control form-control-lg" placeholder="Password" name="t2"><br>
            </div>
            <div class="modal-body">
                <input type="submit" class="btn btn-primary log" value="Login"> 
            </div><br>
            <div class="form-group">
                <a href="" >Forgotten  passwrod</a>
            </div>
            <hr>
            <div class="modal-body">
                <button type="button" class="btn btn-success new" data-bs-toggle="modal" data-bs-target="#exampleModal"> Create New Account</button>
            </div>
            
        </form>
        </div>
        <div class="col-md-4">
            <form method="post" action="admin_login.php" >
                <div class="modal-body">
                    <input type="submit" class="btn btn-danger new a" value="Admin"> 
                </div>
            </form>
        </div>
        
        <form method="post"  name="f" action="sign_action.php">
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                <div class="modal-content">
                <div class="modal-header">
                    <span class="span">Sign Up</span>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="md-3">
                        <input type="text" class="form-control" placeholder="Roll Number" aria-label="First name" name="t1">
                    </div> 
                    <div class="md-3">
                        <br><input type="text" class="form-control" placeholder="Name" aria-label="First name" name="t2">
                    </div>              
                    <div class="mb-3">
                        <br><input type="text" class="form-control" id="formGroupExampleInput" placeholder="Mobile number or email address" name="t3">
                    </div>
                    <div class="mb-3">
                        <input type="password" class="form-control" id="formGroupExampleInput" placeholder="Password" name="t4">
                    </div>
                    <div >
                        <label class="form-label">Date of Birth</label><br>
                        <input type="date" class="form-control" name="t5">
                    </div>
                    <div class="">
                        <label class="form-label">Gender</label><br>
                        <div class="row">
                            <div class="col-md-4">  
                                <label class="form-check-label form-control" for="inlineRadio1">Female
                                    <input class="form-check-input c" type="radio" name="t6" id="inlineRadio1" value="Female">
                                </label>  
                            </div>
                            <div class="col-md-4">  
                                <label class="form-check-label form-control" for="inlineRadio1">Male
                                    <input class="form-check-input c" type="radio" name="t6" id="inlineRadio1" value="Male">
                                </label>  
                            </div>
                            <div class="col-md-4">  
                                <label class="form-check-label form-control" for="inlineRadio1">Custom
                                    <input class="form-check-input c" type="radio" name="t6" id="inlineRadio1" value="Custom">
                                </label>  
                            </div>
                        </div><br>
                        <span class="span3">By clicking Sign Up, you agree to our <a href="#" class="a1">Terms</a>,
                            <a  href="#" class="a1"> Data Policy </a>and <a  href="#" class="a1"> Cookie Policy</a>. 
                            You may receive SMS notifications from us and can opt out at any time.
                        </span>
                        <div class="modal-body text-center">
                            <input type="submit" value="Signup" style="background-color:#0B5ED7">
                        </div>
                        
                    </div>                    
                </div>
            </div>
        </div>
    </div>
    </form>
    </body>
</html>