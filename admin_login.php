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
    .col-form-label{
        font-weight:bold;
    }
    </style>
    <body>
        <div class="row">
        <div class="col-md-4">
        
        </div>
        <div class="col-md-4 right text-center" >
        <label  class="col-form-label col-form-label-lg">Admin Login</label>
        <form method="post" action="admin_valid.php" >
            <div class="form-group">
                <input type="text" class="form-control form-control-lg" placeholder="Email address or phone number" name="t1">
            </div><br>
            <div class="form-group">
                <input type="password" class="form-control form-control-lg" placeholder="Password" name="t2"><br>
            </div>
            <div class="modal-body">
                <input type="submit" class="btn btn-primary log" value="Login"> 
            </div><br>
        </form>
        </div>
        <div class="col-md-4">
        
        </div>
        
    </body>
</html>