<?php
$conn = mysqli_connect('localhost', 'root', '111111', 'web4');
$sql = "insert into topic(title, description, created)
value('{$_POST['title']}',
'{$_POST['description']}',
now())";
$result = mysqli_query($conn, $sql);
if($result === false){
  echo '저장하는 과정에서 문제가 발생 관리자 문의 요망';
  error_log(mysqli_error($conn));
}else{
  echo '성공하였습니다. <a href="index.php">돌아가기</a>';
}





 ?>
