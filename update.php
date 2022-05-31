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
        <style>
            .col-form-label{
                font-weight:bold;
            }
        </style>
    </head>
    <body>
        <div class="row">
        <div class="col-md-4">
        
        </div>
        <div class="col-md-4 right text-center" >
        <form method="post" action="update_action1.php" >
            <label  class="col-form-label col-form-label-lg">Enter Marks Of the Students</label>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="Enter roll" name="t1">
                <label for="floatingInput">Roll Number</label>
            </div>
            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" placeholder="Enter name" name="t2">
                <label for="floatingInput">Name</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="Physic" name="t3">
                <label for="floatingInput">Physic</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="Chemistry" name="t4">
                <label for="floatingInput">Chemistry</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="Math" name="t5">
                <label for="floatingInput">Math</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="English" name="t6">
                <label for="floatingInput">English</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" placeholder="Hindi" name="t7">
                <label for="floatingInput">Hindi</label>
            </div>
            <div class="modal-body">
                <input type="submit" class="btn btn-primary log" value="Update"> 
            </div><br>
        </form>
        </div>
        <div class="col-md-4">
        
        </div>
    </body>
</html>