<?php 
include "../components/head.php"; 
include $_INNER_PATH ."/routes.php"; 

?>
<body>
    <?php include $_INNER_PATH."./views/components/navigation.php";  ?>

    <table class="table border-top">
            <thead>
                <tr>
                <th>id</th>
                    <th>Name</th>
                    <th>Category</th>
                    <th>Price</th>
                    <th>About</th>
                    <th>Show</th>
                    <th>Edit</th>
                    <th>Delete</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($items as $item) { ?>
                <tr>
                        <td> <?=$item->id?> </td>
                        <td> <?=$item->name?> </td>
                        <td> <?=$item->category?> </td>

                        <td> <?=$item->price?> </td>
                        <td> <?=$item->about?> </td>

                        <td>
                            <form action="<?=$_OUTER_PATH.'/views/item/show.php'?>" method="get">
                                <input type="hidden" name="id" value=" <?=$item->id?>">
                                <button type="submit" name="show" class="btn btn-primary">Show</button>
                            </form>
                        </td>
                        <td>
                            <form action="<?=$_OUTER_PATH.'/views/item/edit.php'?>" method="get">
                                <input type="hidden" name="id" value="<?=$item->id?>">
                                <button type="submit" name="edit" class="btn btn-success">Edit</button>
                            </form>
                        </td>
                        <td>
                            <form action="" method="post">
                                <input type="hidden" name="id" value="<?=$item->id?>">
                                <button type="submit" name="destroy" class="btn btn-danger">Delete</button>
                            </form>
                        </td>

                </tr>
                <?php  } ?>
            </tbody>
        </table>
</body>
</html>