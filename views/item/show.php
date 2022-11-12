<?php 
include "../components/head.php"; 
include $_INNER_PATH ."/routes.php"; 
?>
<body>
<div class="container">
    <?php include $_INNER_PATH."./views/components/navigation.php";  ?>


    <div class="form-group">
            <label for="f1">Product name</label>
            <h2><?=$item->name?> </h2>
        </div>
        <div class="form-group">
            <label for="f3">Category</label>
           <h2><?=$item->category?></h2>
        </div>
        <div class="form-group">
            <label for="f2">Price</label>
            <h2><?=$item->price?></h2>
        </div>
        <div class="form-group">
            <label for="f3">Product description</label>
           <h2><?=$item->about?></h2>
        </div>
        <form action="<?=$_OUTER_PATH.'/views/item/edit.php'?>" method="post">
            <input type="hidden" name="id" value=" <?=$item->id?>">
            <button type="submit" name="edit" class="btn btn-success">EDIT</button>
        </form>

</div>
</body>
</html>