<?php

if (isset($_FILES['file']['name'])&& isset($_REQUEST['console'])) { //file UPLOAD
    $filename = $_FILES['file']['name'];
    $romsPath = "/home/jeremiah/RetroPie/roms/" . $_REQUEST['console'] . "/" .  $filename;
    $location="/home/jeremiah/RetroPie/roms/" . $_REQUEST['console'];

    /* Location */
    
    /* Upload file */
    if(move_uploaded_file($_FILES['file']['tmp_name'], $romsPath )) {
        shell_exec("unzip $romsPath");
        echo "1";
    }else{
        echo "0";
    }
}else{
    echo "0";
}
?>