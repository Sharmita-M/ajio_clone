<?php
include '../config.php';
if(empty($_POST['action'])){
    $submit = $_REQUEST['action'];
} else {
    $submit = $_POST['action'];
}
$datetime = date('Y-m-d_H-i-s');
switch($submit){
    case 'submit':
        $title = mysqli_real_escape_string($db, $_POST['title']);
        $bannerDescription = mysqli_real_escape_string($db, $_POST['description']);
        $db-> query(" INSERT INTO `banner` (`id`, `title`, `description`) VALUES (NULL , '$title', '$bannerDescription') ")

        $new = $db-> insert_id;
        if(!empty($_FILES['image']['name'])){
            $oldImage = $_FILES['image']['name'];
            $divide = explode('.', $oldImage);
            $currentName = current($divide);
            $ext = end($divide);
            $allowed = array('jpg', 'jpeg', 'png', 'gif');

                if(in_array($ext, $allowed)){
                    $newName = $currentName . '_' . $datetime . '.' . $ext;
                    $uploadPath = '../uploads/manage-banner.php/' . $newName;
                    $tempN = $_FILES['image']['tmp_name'];
                    move_uploaded_file($tempN, $uploadPath);
                    $db->query("UPDATE `banner` SET `image` = '$newName' WHERE `id` = '$new'");
            } else {
                echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
                }


        }else{
            echo "Invalid file type";
            exit();
        }
        

        exit();
        break;

    default:
        echo "Invalid action specified.";
        break;
}

?>