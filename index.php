<?php
//dir = "img/"
//httpPath = "http://example.com/viewer/img/"
$ini_arr = parse_ini_file("setting.ini");
$dir = $ini_arr["dir"];
$array = scandir($dir);
$httpPath = $ini_arr["httpPath"];
$num = count($array);
 
?>
<!DOCTYPE html>
<html>
<head>
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <link rel="stylesheet" href="style.css" />
  <title>Image list</title>
  
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="script.js"></script>
</head>
<body>
  <div id="detail">
  <div id="detailImg">Image Not Selected.</div>
  <div id="info">
    <table><tbody>
      <tr>
        <th class="r1">URL</th>
        <td id="tFileName" class="r1"> - </td>
      </tr>
      <tr>
        <th>更新日</th>
        <td id="tDate"> - </td>
      </td>
    </tbody></table>
    <!-- <p><a id="rm" href="#">この画像を削除する</a></p> -->
  </div>
  </div>
  <hr>
  <div id="list">
  <ul class="thumbnail clearFix">
<?php 
  for($i=0; $i<$num; $i++){
    if(preg_match("/png$|jpg$|jpeg$|gif$/i", $array[$i])){
      $filename = $httpPath . $array[$i];
?>
    <li><a class="lb <?php echo date("Y/m/d",  filemtime($dir.$array[$i])); ?>" href="<?php echo $filename; ?>"><img class="listImg" src="<?php echo $filename; ?>"/></a></li>
<?php
    }
  }
  
?>
  </ul>
  
  </div>
</body>
</html>