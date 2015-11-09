<?php session_start(); ?>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
$type=$_FILES['file']['type'];
$size=$_FILES['file']['size'];
$name=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
?>


<?php
include("dbconnect.php");
	


if ((($_FILES["file"]["type"] == "image/gif") || ($_FILES["file"]["type"] == "image/jpeg") || ($_FILES["file"]["type"] == "image/pjpeg"))
	&& ($_FILES["file"]["size"] < 2000000)) {
	if ($_FILES["file"]["error"] > 0) {
    	echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  	else{
    	echo "檔案名稱: " . $_FILES["file"]["name"] . "<br />";
    	echo "檔案類型: " . $_FILES["file"]["type"] . "<br />";
    	echo "檔案大小: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
    	echo "檔案路徑: " . $_FILES["file"]["tmp_name"] . "<br />";

    	$file = explode(".",$name);
    	//echo $file[0];/*主檔名*/
   		//echo $file[1];/*副檔名*/
    	$new_name = $name_file[0]."-".date(ymdhis)."-".rand(0,10);//把檔名增加日期及亂數1-10做為新檔名
    	$chi_name = iconv("BIG-5","UTF-8",$new_name);
    	echo "</br>已修改為新檔名:".$new_name.'<br>';

    	// 取得上傳圖片
    	$src = imagecreatefromjpeg($_FILES['file']['tmp_name']);
    	// 取得來源圖片長寬
    	$src_w = imagesx($src);
		$src_h = imagesy($src);
		if($src_w > $src_h){
  			$thumb_w = 90;
  			$thumb_h = intval($src_h / $src_w * 90);
		}else{
  			$thumb_h = 90;
  			$thumb_w = intval($src_w / $src_h * 90);
		}
		// 建立縮圖
		$thumb = imagecreatetruecolor($thumb_w, $thumb_h);
		// 開始縮圖
		imagecopyresampled($thumb, $src, 0, 0, 0, 0, $thumb_w, $thumb_h, $src_w, $src_h);
		// 儲存縮圖到指定 thumb 目錄
		imagejpeg($thumb, "thumb/".$_FILES['file']['name']);

    	move_uploaded_file($tmp_name,"upload/".$new_name.".".$file[1]);//移動檔案至upload資料夾

		$pic_type = $_FILES["file"]["type"];
		//$pic_road = "thumb".'/'.$new_name.'.'.$file[1];//製作檔案路徑
		$pic_road = "thumb".'/'.$name;
		$id = $_SESSION['account'];

    	$sql = "UPDATE member SET pic_name = '$pic_road', pic_type = '$pic_type' WHERE account='$id'";

    	if (!mysql_query($sql)==0) {        
	        $_SESSION['name'] = $new_name;
			echo "您所上傳的檔案已儲存進入資料庫";
            echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';            
        }
        else{
            echo "您所上傳的檔案無法儲存進入資料庫";
            echo '<meta http-equiv=REFRESH CONTENT=1;url=main.php>';
        }

    }
}
else {
  echo "上傳失敗";
}
?>