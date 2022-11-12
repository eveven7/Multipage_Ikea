<?php include $_INNER_PATH."/controllers/ItemController.php"; 

if($_SERVER['REQUEST_METHOD'] == "POST"){
    
    if(isset($_POST['save'])){
        ItemController::store();
        header("Location: ".$_OUTER_PATH."/views/item/index.php");
        die;
    }
        
    if(isset($_POST['update'])){
        ItemController::update();        
        header("Location: ".$_OUTER_PATH."/views/item/index.php");
        die;
    }
    
    if(isset($_POST['destroy'])){
        ItemController::destroy();
        header("Location: ".$_OUTER_PATH."/views/item/index.php");
        die;
    }    

}

if($_SERVER['REQUEST_METHOD'] == "GET"){
    if(count($_GET) == 0){
        $items = ItemController::index();
        // print_r($items);
        // die;
        // echo"something";
        // die;
    }
    if(isset($_GET['show']) ){

        // echo"something";
        // die;
        
        $item = ItemController::show($_GET['id']);
    }
    
    if(isset($_GET['edit'])){
        $item = ItemController::show($_GET['id']);
    }  
}



?>