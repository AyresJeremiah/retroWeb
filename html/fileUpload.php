<?php

if (isset($_FILES['file']['name'])&& isset($_REQUEST['console'])) { //file UPLOAD
    $console=preg_replace("/[^0-9a-zA-Z\-\_\ \.\:\,\'\"\?\/]/","",$_REQUEST['console']);
    $console = trim($console);
    $console = stripslashes($console);
    $console = htmlspecialchars($console);

    $filename=preg_replace("/[^0-9a-zA-Z\-\_\ \.\:\,\'\"\?\/]/","",$_FILES['file']['name']);
    $filename = trim($filename);
    $filename = stripslashes($filename);
    $filename = htmlspecialchars($filename);

    $romsPath = "/home/retro/RetroPie/roms/" . $console . "/";
    $location="/home/retro/RetroPie/roms/" . $console;
    /* Upload file */
    if(move_uploaded_file($_FILES['file']['tmp_name'], $romsPath.$filename)){
        echo "1";
    }else{
        echo "0";
    }
}else{
    echo "0";
}
?>
