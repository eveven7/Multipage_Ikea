<?php 
include "../components/head.php"; 
include $_INNER_PATH ."/routes.php"; 
$old = false;
if(isset($_SESSION['POST'])){
    if(count($_SESSION['POST']) != 0){
        $old = true;
    }
}
?>
<body>
<div class="container">
    <?php include $_INNER_PATH."./views/components/navigation.php";  ?>


    <form action="" method="post" class="">

        <div class="form-group">
            <label for="f1">Product name</label>
            <input type="text" name="name" id="f1" value="<?=($old)? $_SESSION['POST']['name'] : ""?>" class="form-control"">
        </div>
        <div class="form-group">
            <label for="f1">Category</label>
            <input type="text" name="category" id="f1" value="<?=($old)? $_SESSION['POST']['category'] : ""?>" class="form-control"">
        </div>
        <div class="form-group">
            <label for="f2">Price</label>
            <input type="number" step=".01" name="price" id="f2"  value="<?=($old)? $_SESSION['POST']['price'] : ""?>" class="form-control" ">
        </div>
        <div class="form-group">
            <label for="f3">Product description</label>
            <input type="text" name="about" id="f3"  value="<?=($old)? $_SESSION['POST']['about'] : ""?>" class="form-control" ">
        </div>
        <button type="submit" name="save" class="btn btn-primary mt-3 mb-3">Save</button>

</form>
</div>
</body>
</html>

<?php
    $_SESSION['POST'] = [];
?>