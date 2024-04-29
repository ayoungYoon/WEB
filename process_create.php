<?php
$conn = mysqli_connect("localhost","","","") or die("fall");
$id = $_GET[name];
$pw = $_GET[pw];
$title = $_GET[title];
$connect = $_GET[content];
$data = data(Y-m-d);


$query = "insert into board(number ,title, content, data,hit,id,password)
values(null, '$title', '$content', '$data',0,'$id', '$pw')";


$result = $connect->query($query);
if($result){
  <script>
    alert("<?php echo "글이 등록되었습니다."?>");
  </script>
    
}
else{
  echo"FAIL";
}

mysqli_close($connect);