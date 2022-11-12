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
            <input type="text" name="name" id="f1" value="<?=($old)? $_SESSION['POST']['name'] : $item->name?>" class="form-control"">
        </div>
        <div class="form-group">
            <label for="f2">Category</label>
            <input type="text"  name="category" id="f2" value="<?=($old)? $_SESSION['POST']['category'] : $item->category?>" class="form-control" ">
        </div>
        <div class="form-group">
            <label for="f3">Price</label>
            <input type="number" name="price" id="f3" value="<?=($old)? $_SESSION['POST']['price'] : $item->price?>" class="form-control" ">
        </div>
        <div class="form-group">
            <label for="f3">Product description</label>
            <input type="text" name="about" id="f3" value="<?=($old)? $_SESSION['POST']['about'] : $item->about?>" class="form-control" ">
        </div>
        <input type="hidden" name="id" value="<?=$item->id?>" >
        <button type="submit" name="update" class="btn btn-success mt-3 mb-3">Išsaugoti</button>

</form>
</div>
</body>
</html>

<?php
    $_SESSION['POST'] = [];
?>