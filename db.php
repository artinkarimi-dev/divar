

<?php

$db = mysqli_connect('localhost', 'root', '', 'divar');
if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['sabt'])) {
    $name = mysqli_real_escape_string($db, $_POST['onvan']);
    $price = mysqli_real_escape_string($db, $_POST['price']);
    $description = mysqli_real_escape_string($db, $_POST['textbox']);

 
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        $target_dir = "uploads/";
       
        $uniqueName = time() . '_' . basename($_FILES["image"]["name"]);
        $target_file = $target_dir . $uniqueName;

       
        if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
           
            $sql = "INSERT INTO sabtnam (img, name, price, description) VALUES ('$target_file', '$name', '$price', '$description')";
            if (mysqli_query($db, $sql)) {
               
                header("Location: index.php");
                exit();
            } else {
                echo "خطا در ثبت اطلاعات: " . mysqli_error($db);
            }
        } else {
            echo "خطا در آپلود عکس.";
        }
    } else {
        echo "لطفا عکس را انتخاب کنید.";
    }
}
?>
