<?php
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
echo $target_file;
$uploadOk = 1;
$imageFileType = pathinfo($target_file, PATHINFO_EXTENSION);
// Check if image file is a actual image or fake image
if (isset($_POST["submit"])) {
    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
    if ($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
    } else {
        echo "File is not an image.";
        $uploadOk = 0;
    }
}
// Check if file already exists
if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}
// Check file size
/* if ($_FILES["fileToUpload"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
  } */
// Allow certain file formats
if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
    echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    $uploadOk = 0;
}
// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
    echo "Sorry, your file was not uploaded.";
// if everything is ok, try to upload file
} else {
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . basename($_FILES["fileToUpload"]["name"]) . " has been uploaded.";
        $filename = "uploads/" . basename($_FILES["fileToUpload"]["name"]);
    } else {
        echo "Sorry, there was an error uploading your file.";
    }
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
Template Name: Photomatic
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <title>Computer Security CTF</title>
        <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
        <link rel="stylesheet" href="layout/styles/layout_main.css" type="text/css" />
        <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
        <!-- FancyBox -->
        <link rel="stylesheet" href="layout/scripts/fancybox-2.1.5/jquery.fancybox.css" type="text/css" />
        <script type="text/javascript" src="layout/scripts/fancybox-2.1.5/jquery.fancybox.pack.js"></script>
        <!-- Log in template-->
        <script type="text/javascript">
            $(document).ready(function () {
                $("a.fb_image").fancybox({
                    openEffect: 'elastic',
                    closeEffect: 'elastic',
                    openSpeed: 600,
                    closeSpeed: 600,
                    helpers: {
                        overlay: {
                            closeClick: true,
                        },
                        title: {
                            type: 'over'
                        }
                    }
                });
            });
        </script>
        <!-- End FancyBox -->
    </head>
    <body id="top">
        <div class="wrapper col1">
            <div id="header">
                <div class="fl_left">
                    <h1><a href="index.html">Computer Security CTF</a></h1>
                    <p>Website Exploitation</p>
                </div>
                <div id="topnav">
                    <ul>
                        <li class=""><a href="index.html">Home</a></li>
                        <!--        <li><a href="pages/style-demo.html">Style Demo</a></li>
                                <li><a href="pages/full-width.html">Full Width</a></li>
                                <li><a href="#">Link Text</a></li>-->
                        <li class=""><a href="login.html">Log In</a></li>
                    </ul>
                </div>
                <br class="clear" />
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <div class="wrapper col2">
            <div class="container">
                <hr/>
                <?php require($filename);?>
                <hr/>
            </div>
        </div>
        <!-- ####################################################################################################### -->
        <!--        <div class="wrapper col3">
                    <div class="container">
                            <div class="pagination">
                              <ul>
                                <li class="first"><a href="#">First</a></li>
                                <li class="prev"><a href="#">Prev</a> </li>
                                <li class="pnum"><a href="#">1</a></li>
                                <li class="pnum"><a href="#">2</a></li>
                                <li class="pnum"><a href="#">3</a></li>
                                <li class="pnum"><a href="#">4</a></li>
                                <li class="current">5</li>
                                <li class="pnum"><a href="#">6</a></li>
                                <li class="pnum"><a href="#">7</a></li>
                                <li class="pnum"><a href="#">8</a></li>
                                <li class="pnum"><a href="#">9</a></li>
                                <li class="next"><a href="#">Next</a></li>
                                <li class="last"><a href="#">Last</a></li>
                              </ul>
                    </div>
                    <div class="gallery">
                        <ul>
                            <li>
                                <p class="imgtitle">Indonectetus facilis leo nibh</p>
                                <a class="fb_image" href="images/demo/gallery/500x500.gif" title="Image 1 Link Title Tag"><img src="images/demo/gallery/284x224.gif" alt="" /></a>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </li>
                            <li>
                                <p class="imgtitle">Indonectetus facilis leo nibh</p>
                                <a class="fb_image" href="images/demo/gallery/500x500.gif" title="Image 2 Link Title Tag"><img src="images/demo/gallery/284x224.gif" alt="" /></a>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </li>
                            <li class="last">
                                <p class="imgtitle">Indonectetus facilis leo nibh</p>
                                <a class="fb_image" href="images/demo/gallery/500x500.gif" title="Image 3 Link Title Tag"><img src="images/demo/gallery/284x224.gif" alt="" /></a>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </li>
                            <li>
                                <p class="imgtitle">Indonectetus facilis leo nibh</p>
                                <a class="fb_image" href="images/demo/gallery/500x500.gif" title="Image 4 Link Title Tag"><img src="images/demo/gallery/284x224.gif" alt="" /></a>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </li>
                            <li>
                                <p class="imgtitle">Indonectetus facilis leo nibh</p>
                                <a class="fb_image" href="images/demo/gallery/500x500.gif" title="Image 5 Link Title Tag"><img src="images/demo/gallery/284x224.gif" alt="" /></a>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </li>
                            <li class="last">
                                <p class="imgtitle">Indonectetus facilis leo nibh</p>
                                <a class="fb_image" href="images/demo/gallery/500x500.gif" title="Image 6 Link Title Tag"><img src="images/demo/gallery/284x224.gif" alt="" /></a>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </li>
                            <li>
                                <p class="imgtitle">Indonectetus facilis leo nibh</p>
                                <a class="fb_image" href="images/demo/gallery/500x500.gif" title="Image 7 Link Title Tag"><img src="images/demo/gallery/284x224.gif" alt="" /></a>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </li>
                            <li>
                                <p class="imgtitle">Indonectetus facilis leo nibh</p>
                                <a class="fb_image" href="images/demo/gallery/500x500.gif" title="Image 8 Link Title Tag"><img src="images/demo/gallery/284x224.gif" alt="" /></a>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </li>
                            <li class="last">
                                <p class="imgtitle">Indonectetus facilis leo nibh</p>
                                <a class="fb_image" href="images/demo/gallery/500x500.gif" title="Image 9 Link Title Tag"><img src="images/demo/gallery/284x224.gif" alt="" /></a>
                                <p class="readmore"><a href="#">Continue Reading &raquo;</a></p>
                            </li>
                        </ul>
                        <br class="clear" />
                    </div>
                </div>-->

        <!-- ####################################################################################################### -->
        <div class="wrapper col5">
            <div id="footer">
                <p class="fl_left">Copyright &copy; 2014 - All Rights Reserved - <a href="#">Domain Name</a></p>
                <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
                <br class="clear" />
            </div>
        </div>
    </body>
</html>
