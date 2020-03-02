<?php
require_once "bootstrap.php";

if (!isset($_GET['id']) || empty($_GET['id'])) {
    exit;
}

$post=$newPost->getPostId($_GET['id']);
if(!$post){
    header("location: /");
    exit;
}
if(isset($_POST['btnPost'])){
    $_POST['id']=$_GET['id'];
    $newPost->updatePost($_POST);
    header("Location: /");
    exit;
}

if(isset($_POST['btnPost'])){
    $_POST['datePublication']=date("Y-m-d");

    $fileName=$_FILES['photo']['name'];
    $fileTemp=$_FILES['photo']['tmp_name'];
    $fileSize=$_FILES['photo']['size'];
    $fileError=$_FILES['photo']['error'];

    $fileEt=strtolower(end(explode('.',$fileName)));

    $fileName=explode('.',$fileName)[0];

    $extensions=['jpg','jpeg','png'];

    if(in_array($fileEt,$extensions)){
        if($fileSize <= 50000) {
            if ($fileError == 0) {
                $_POST['photo'] = implode('.', [$fileName, $fileEt]);
            }
        }
    }
    else{
        $_POST['photo']="5.jpg";
    }
$_POST['id']=$_GET['id'];
    $id=$newPost->updatePost($_POST);
    if($if=null){
    $fileDestination="update /" .$_POST['photo'];
    move_uploaded_file($fileDestination,$fileTemp);
    }
    header("Location: /");
    exit;
}
require_once "posts/updatePost2.php";
//    exit;
//}
//$post=$newPost->getPostId($_GET['id']);
//if (count($_POST)>0){
//    $_POST["id"]=$_GET["id"];
//    $id=$newPost->updatePost($_POST);
//    header("Location: /");
//    exit;
//}
//if ($newPost->updatePost($_GET['id'],$_GET['title'],$_GET['description'])) {
    //header("Location: /");
    // exit;

//if (!isset($_GET['id']) || empty($_GET['id'] && !isset($_GET['title']) || empty($_GET['title']))) {
//    exit;
//}
//$post=$newPost->getPostId($_GET['id']);
//if (count($_POST)>0){
//    $_POST["id"]=$_GET["id"];
//    $id=$newPost->updatePost($_POST);
//    header("Location: /");
//    exit;
//}
//if ($newPost->updatePost($_GET['id'],$_GET['title'],$_GET['description'])) {
    //header("Location: /");
   // exit;
//}
