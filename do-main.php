<?php
if (isset($_FILES['image']) && $_FILES['image']['name'] != null) {
    $dir = 'upload/'.date('m').'_'.date('Y');
    if(!file_exists($dir) && !is_file($dir)){
        mkdir($dir);
    }
    move_uploaded_file($_FILES['image']['tmp_name'],$dir.'/'.time().$_FILES['image']['name']);
}
?>