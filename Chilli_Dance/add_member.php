<?php
@mkdir("members_images", 0777);
$uploads_dir = './members_images';
foreach ($_FILES["foto"]["error"] as $key => $error) {
    if ($error == UPLOAD_ERR_OK) {
        $tmp_name = $_FILES["foto"]["tmp_name"][$key];
        $name = basename($_FILES["foto"]["name"][$key]);
        if(!move_uploaded_file($tmp_name, "$uploads_dir/$name"))
            echo "error upload file";
            else {
              echo '<img src="'.$uploads_dir.'/'.$name.'"/>';
            }
    }
}
 ?>
