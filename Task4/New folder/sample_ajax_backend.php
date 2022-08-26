<?php

// simple input get - post
if(isset($_POST['f_name']) && isset($_POST['l_name']))
{
    $error_code = rand(0,1);
    $res = array('error'=>$error_code, 'msg' => "Please try again later!");
    if($error_code == 1)
    {
        $res = array('error'=>$error_code, 'fname'=>$_POST['f_name'], 'l_name'=>$_POST['l_name']);
    }
    echo json_encode($res);
    exit;
}

// simple input get - get
if(isset($_GET['f_name']) && isset($_GET['l_name']))
{
    echo "Added successfully";
    exit;
}

// form data get - post
if(isset($_POST['first_name']) && isset($_POST['last_name']))
{
    $error_code = rand(0,1);
    $res = array('error'=>$error_code, 'msg' => "Please try again later!");
    if($error_code == 1)
    {
        $res = array('error'=>$error_code, 'fname'=>$_POST['first_name'], 'l_name'=>$_POST['last_name']);
    }
    echo json_encode($res);
    exit;
}

// getting file - post

if(isset($_FILES['proof_file']))
{
    if (!file_exists($_FILES['proof_file']['name']) || !is_uploaded_file($_FILES['proof_file']['name']))
    {

        $file = $_FILES['proof_file']['name'];

        $allowed_image_extension = array(
            "png","PNG",
            "jpg","JPG",
            "jpeg","JPEG",
            "pdf","PDF"
        );

        $file_extension = pathinfo($_FILES["proof_file"]["name"], PATHINFO_EXTENSION);

            // Validate file input to check if is not empty
        if (empty($_FILES) || $_FILES["proof_file"]["error"] == 4) {

                echo "Choose image file to upload.";

        }    // Validate file input to check if is with valid extension
        else if (! in_array($file_extension, $allowed_image_extension)) {

            echo "Upload valid images.
                    Only PNG, JPEG and PDF are allowed.";


        }    // Validate image file size
        else if (($_FILES["proof_file"]["size"] > 1000000) || $_FILES["proof_file"]["size"] == 0) {

            echo "Image size exceeds 1MB";

        } else
        {
            echo "1";
        }

    }
    exit;
}

echo "Invalid Parameteres!";
?>