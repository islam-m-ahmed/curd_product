<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobily-add</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="main.css"> -->
    <!-- <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script> -->

</head>

<body>
<header>
    <?php   include(VIEWS."inc/header.php") ?>
 
    </header>
    <br>
    <h1  class=" text-center py-3 my-3">Edit Product</h1>
    <?php  if(isset($success)){  ?>
        <h2 class="alert alert-success text-center"><?php echo $success; ?></h2>
    <?php }; ?>
    <div id="content-center" class="row justify-content-center my-5">
   
    
    <form action="<?php url('product/update/'.$row['id']) ?>" method="post" name="">
            <div class="form-goup">
                <label id="first_label">&nbsp; Username <span>*</span></label>
                <input type="text" value="<?php echo $row['user_name'] ?>" name="user_name" class="form-control" required>
            </div>
            <div class="form-goup">
                <label>&nbsp; Product Name <span>*</span></label>
                <input type="text" value="<?php echo $row['product_name'] ?>" name="product_name" class="form-control" required>
            </div>
            <div class="form-group">
                <label>&nbsp; Price <span>*</span></label>
             <input type="number" value="<?php echo $row['product_price'] ?>" name="product_price" placeholder="500$" class="form-control" required>
            </div>
            <div class="form-group">
                <label>&nbsp; Quantity <span>*</span></label required>
                <input type="number" min="1" value="<?php echo $row['product_quntity'] ?>" name="product_quntity" class="form-control" required>
            
            </div>
            <div class="form-group">
                <label>&nbsp; Discount <span>*</span></label required>
                <input id="last_input" type="number" value="<?php echo  $row['product_discount'] ?>" name="product_discount" placeholder="10%" class="form-control" required>
            </div>
            <div class="container">
                <div class="buttons" class="form-group">
                    <button  name="submit" class="btn btn-info py-2 px-5">Insert</button>
                </div>
                <!--
                        <div class="buttons" class="form-group">
                        <button type="" name="update" class="btn btn-primary">Update</button>
                    </div>
                    <div class="buttons" class="form-group">
                        <button type="reset" name="delete" class="btn btn-danger">Delete</button>
                    </div> 
                -->
            </div>

        </form>
    </div>

    <footer>

    </footer>
    <style>
           form {
            border: 1px #00000059 solid;
            padding: 79px;
            padding-left: 50px;
            padding-top: 48px;
            padding-bottom:20px;
             }

            input , label{
                display: block;
                
            }
            input{
            
                margin: 10px;
                padding: 5px;
            }
            .container{
                text-align: center;
                flex: auto;
            }
            /* .buttons{
                display: inline-block;
                width: 200px;
                height: 38px;
                justify-content: center;
            } */

            span{
                color: red;
            }
            #content-center{
                margin-top: 2%;
            }
            input{
            margin-right: 200px;
            }
            input , label{
                margin-top: 20px;
                margin-bottom: 20px; 
            }
            #first_label{
                margin-top: 0px;
            }
            #last_input{
                margin-bottom: 80px; 
            }
    </style>
</body>
</html>


