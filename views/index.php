<html>
    <head>
        <title>User Registration</title>
    </head>
    
    <!-- link css files here -->
    <link type="text/css" rel="stylesheet" href="../others/boostrap/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="../others/alertify/alertify.css">
    
    <body>
        <div class="container-fluid">
            <div class="row">             
                <div class="col-md-3">   </div> 
                <h1 class="col-md-6 text-info text-center" >User Registration</h1>                 
                <h1 class="col-md-3 text-danger text-center" ></h1>  
            </div>
            
            <div class="row">
                <div class="col-md-3"></div>  

                <div class="col-md-6">
                    <p class="text-center">Welcome to the party!</p>
                </div>   


                <div class="col-md-3"></div>   
            </div>


            <!--this is form section-->
            <div class="row">

                <div class="col-md-5">
                    <div class="mb-3 row">
                        <label for="name" class="col-md-3 col-form-label">Name</label> 
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="name" placeholder="Ex: Saman Pradeep">   
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-5">
                    <div class="mb-3 row">
                        <label for="nic" class="col-md-3 col-form-label">Nic</label> 
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="nic">   
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">

                <div class="col-md-5">
                    <div class="mb-3 row">
                        <label for="contact" class="col-md-3 col-form-label">Contact</label> 
                        <div class="col-md-9">
                            <input type="text" class="form-control" id="contact">   
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="mb-3 row">
                        <div class="col-md-9 offset-md-3 d-flex gap-5">
                            <button type="reset" class="btn btn-dark" id="reset">Reset</button> 
                            <button type="submit" class="btn btn-success" id="save">Save</button>    
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-7">              

            </div>
        </div>
        <br>
<!--        <div class="alert alert-warning col-md-3" role="alert">
            A simple light alert—check it out!
        </div>-->
    </div>


</div>
</body>
<script type="text/javascript" src="../others/alertify/alertify.js"></script>
<script type="text/javascript" src="../others/boostrap/bootstrap.js"></script>
<script type="text/javascript" src="../others/jquery/jquery.js"></script>
<script type="text/javascript" src="../controllers/index_controller.js"></script>
</html>
