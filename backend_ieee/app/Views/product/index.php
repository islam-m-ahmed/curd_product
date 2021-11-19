<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ"
    crossorigin="anonymous">

    <title>all product</title>
</head>
<body>
<?php include(VIEWS."inc/header.php") ?>
<h1 class=" text-center py-3 my-3">view all product</h1>
<div class="cart container my-5">

<!-- Start Table -->

<div class="table-responsive-lg mb-2">
<form action="<?php echo url('product/delete_all')?>" method="post">

    <table class="table table-hover text-center">
        <thead>
            <tr>
                <th scope="col">
                select
                </th>
                <th scope="col">name</th>
                <th scope="col">product</th>
                <th scope="col">Price</th>
                <th scope="col">Quntity</th>
                <th scope="col">Discount</th>
                <th scope="col">Time</th>
                <th scope="col">Edit</th>
                <th scope="col">Remove</th>
            </tr>
        </thead>
        
        <tbody>
        <?php foreach($products as $prod): ?>
            <tr>

                <td><input name='check[]' value="<?php echo $prod['id'] ?>" type="checkbox" /></td>
                <td ><?php echo $prod["user_name"] ?></td>
                <td ><?php echo $prod["product_name"] ?></td>
                <td ><?php echo $prod["product_price"] ?>$</td>
                <td ><?php echo $prod["product_quntity"] ?></td>
                <td ><?php echo $prod["product_discount"] ?>%</td>
                <td ><?php echo $prod["time"] ?></td>
                <td >
                    <a class="btn btn-primary" href="<?php echo url('product/edit/').$prod['id']; ?>">
                        <i class="fas fa-edit"></i>
                    </a>
                </td>
                <td  >
                    <a class="btn btn-danger" href="<?php echo url('product/delete/').$prod['id']; ?>">
                    <i class="fas fa-trash-alt"></i>
                    </a>
                </td>
            </tr>
            <?php endforeach ?>
            
        </tbody>
        
    </table>
    <div class="buttons mt-3">
    <div class="info d-flex align-items-center">
        <div class="left">
        <button type="submit"  class="btn btn-info py-2 px-4"> <i class="far fa-times-circle"></i> Clear Cart</button>
      
           
        </div>
        <div class="right ml-auto">
        <a href="#" class="btn btn-info py-2 px-4">Total: <span>$568.00</span></a>
        </div>
        </div>
</div>
        </form>
<!-- End Table -->

<!-- Start buttons -->
<!-- <div class="buttons mt-3">

    <div class="info d-flex align-items-center">
        <div class="left">
            <a href="#">Total: <span>$568.00</span></a>
        </div>
        <div class="right ml-auto">
            <a href="#" class="clear ml-auto">
                <i class="far fa-times-circle"></i> Clear Cart
            </a>
        </div>
    </div>

    <div class="proccess mt-5 d-flex align-items-center">
        <div class="left">
            <a href="#" class="mr-3"><i class="fas fa-long-arrow-alt-left mr-2"></i> Continue Shopping</a>
            <a href="#"><i class="fas fa-sync-alt mr-2"></i> Update Cart</a>
        </div>
        <div class="right ml-auto">
            <a href="#">Proceed To CheckOut <i class="fas fa-sign-out-alt ml-2"></i></a>
        </div>
    </div>
</div> -->
<!-- End buttons -->

</div>
<!-- End Cart -->
</body>
</html>