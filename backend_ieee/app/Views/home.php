<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
   
    <title><?php echo "title" ?></title>
</head>
<body >
<?php   include(VIEWS."inc/header.php") ?>
<div class="jumbotron text-center my-5">
        <h1 class="display-4">Card Product</h1>
        <P class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to
            feature</P>
        <hr class="my-4">
        <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
        <a class="btn btn-primary btn-lg" href="<?php url('product')?>" role="button"> SHOW PRODUCTS</a>
    </div>
</body>
</html>