<?php 
$path = "/home/jeremiah/RetroPie/roms";
$directories = glob($path . '/*' , GLOB_ONLYDIR); 
$consoleOptions="";
for($i=0;$i<count($directories);$i++){
    $directories[$i]=(preg_split("[\/]", $directories[$i]))[5];
    $consoleOptions .= "<option value='$directories[$i]' selected='selected'>$directories[$i]</option>";
}

//game console options


?>

<!DOCTYPE html>
<html>

<head>
    <title>RETRO APPLE MINI</title>



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


    
    <link rel="stylesheet" href="css/index.css">
</head>

<body>

<!--File Upload Modal-->
<div class="modal fade" data-keyboard="false" data-backdrop="static" id="fileUploadModal" tabindex="-1" role="dialog" aria-labelledby="gameUploadModal" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">PDF Upload</h5>
            </div>

            <div class="modal-body">
                <form method="post" action="" enctype="multipart/form-data" id="myform">
                    <div >
                        <input type="file" id="gameFile" name="file" />
                    </div>
                    <select id="gameSystemType">
                        <option value="0" selected="selected">Console Type</option>
                        <?=$consoleOptions?>
                    </select> 
                </form>
            </div>
            <div class="modal-footer">
                <button id="fileUploadModalCloseBtn" type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" id="uploadFileBtn" data-dismiss="modal">
                    <span style="display:none" class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Upload
                </button>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#">Ayres-Net Retro</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="">Home <span class="sr-only">(current)</span></a>
      <a id="uploadBtn" class="nav-item nav-link" href="#">Upload</a>
      <a class="nav-item nav-link" href="#">Pricing</a>
      <a class="nav-item nav-link disabled" href="#">Disabled</a>
    </div>
  </div>
</nav>
<br>
<div class="container">
    <div class = "row">
        <div class = col-12>
        <h5><a class="text-justify-center">Welcome to Retro-Gaming</a></h5>
        <p>Select an option in the navbar to get started!</p>
        </div>
    </div>
    <div class = "row">
        <div class = col-3></div>
    </div>
</div>
<img class="img-fluid" src="img/retropi.png">





<script type="text/javascript" src="js/index.js"></script>
</body>
