<?php
// THIS CODE WAS MODIFIED FROM CODE FOUND AT FOLLOWING SOURCES:
// http://www.startutorial.com/articles/view/how-to-build-a-file-upload-form-using-dropzonejs-and-php#sthash.hG6Ojjzo.dpuf

/////////////////

$ds          = "/";  //1
 
$storeFolder = 'img';   //2
 // $storeFolder = 'img/thumbs';
if (!empty($_FILES)) {
   

    $tempFile = $_FILES['file']['tmp_name'];          //3             
      // $images = $_FILES["userfile"]["tmp_name"];

 // $image = new ImageResize($tempFile);



    $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     // $thumbPath = dirname( __FILE__ ) . $ds. $thumbFolder . $ds;  //4
    $targetFile =  $targetPath. $_FILES['file']['name'];  //5
  // $thumbFile =  $thumbPath. $_FILES['file']['name']; 


    move_uploaded_file($tempFile,$targetFile); //6
    
// $image->resize(100, 100);
// $image->save('image2.jpg');
// move_uploaded_file($tempFile,$targetFile); //6
}




/////////////
// require_once('SimpleImage.php');
// $ds          = "/";  //1
 
// $storeFolder = 'img';   //2
 
// if (!empty($_FILES)) {
   

//     $tempFile = $_FILES['file']['tmp_name'];          //3             
      
//     $targetPath = dirname( __FILE__ ) . $ds. $storeFolder . $ds;  //4
     
//     $targetFile =  $targetPath. $_FILES['file']['name'];  //5
//  $ext = pathinfo($file, PATHINFO_EXTENSION);
// $fn = 'img-'.time().rand(0,10).'.jpg';
// $targetFile = $targetPath. $fn;
//     // move_uploaded_file($tempFile,$targetFile); //6
//      if(move_uploaded_file($tempFile,$targetFile))
// 		{
// 		$image = new SimpleImage();
// 		$image->load($targetPath. $fn);
// 		$image->resizeToWidth(200);
// 		$image->save($targetPath.'thumb-'.$fn);
// 		}
// $array = array("img"=>$targetPath.$fn,"thumb"=>$targetPath.'thumb-'.$fn);
// // echo json_encode($array);
// }
//////////////


//  header("Access-Control-Allow-Origin: *");
// header('Content-type: application/json');
// require_once('simpleImage.php');
// $ds = DIRECTORY_SEPARATOR;
// $dir= 'img/';
// if (!empty($_FILES)) {
// $tempFile = $_FILES['file']['tmp_name'];
// $targetPath = $dir . $ds;
// $file = $_FILES['file']['name'];
// $ext = pathinfo($file, PATHINFO_EXTENSION);
// $fn = 'img-'.time().rand(0,10).'.jpg';
// $targetFile = $targetPath. $fn;
// if(move_uploaded_file($tempFile,$targetFile))
// {
// $image = new SimpleImage();
// $image->load($targetPath. $fn);
// $image->resizeToWidth(200);
// $image->save($targetPath.'thumb-'.$fn);
// }
// $array = array("img"=>$targetPath.$fn,"thumb"=>$targetPath.'thumb-'.$fn);
// echo json_encode($array);
// }
?>