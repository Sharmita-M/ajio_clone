<?php include '../config.php';


if (empty($_POST['action'])){
    $submit = $_REQUEST['action'];
} else {
    $submit = $_POST['action'];
}

// $datetime = date('Y-m-d H:i:s');
$datetime = date('Y-m-d_H-i-s'); // safe for filenames on all OS


switch($submit){
    case 'submit':
        $category = mysqli_real_escape_string($db, $_POST['category']);
        $description = mysqli_real_escape_string($db, $_POST['description']);

        $db-> query("INSERT INTO `product_categories` (`pc_id`, `pc_name`, `description`) VALUES ( NULL, '$category', '$description')");


        $new = $db-> insert_id;
        if(!empty ($_FILES['image']['name'])) {
            $old_image = $_FILES['image']['name'];
           $divide = explode('.', $old_image);
           $current_name = current($divide);
           $ext = end($divide);
           $allowed = array('jpg', 'jpeg', 'png', 'gif');

            if(in_array($ext, $allowed)) {
                $new_image = $current_name . '_' . $datetime . '.' . $ext;
                $upload_path = '../uploads/category/' . $new_image;
                $tempName = $_FILES['image']['tmp_name'];
                move_uploaded_file($tempName, $upload_path);
                $db->query("UPDATE `product_categories` SET `pc_image` = '$new_image' WHERE `pc_id` = '$new'");
            } else {
                echo "Invalid file type. Only JPG, JPEG, PNG, and GIF files are allowed.";
                exit;
            }
        } else {
            echo "No image uploaded.";
            exit;
        }

        header("Location: ../category.php?sucess");

    break;
    default:
    echo "Invalid action specified.";
    break;

}

?>