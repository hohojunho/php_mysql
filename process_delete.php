<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '',
  'opentutorials');

  settype($_POST['id'],'integer');
$filtered = array(
  'id'=>mysqli_real_escape_string($conn, $_POST['id']),
);
$sql = "
  DELETE
  FROM topic
  where id = {$filtered['id']}
";


$result = mysqli_query($conn, $sql);
if($result === false){
  echo '삭제하는 과정에서 문제가 생겼습니다. 관리자에게 문의해주세요';
  error_log(mysqli_error($conn));
  } else {
  echo '삭제에성공했습니다. <a href="index.php">돌아가기</a>';
}
?>