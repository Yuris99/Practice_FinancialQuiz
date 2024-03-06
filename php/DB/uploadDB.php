<?php
$servername = "pcsquiz.woobi.co.kr";
$username = "pcsquiz";
$password = "pcs1103^^";
$dbName = "pcsquiz";
$conn = mysqli_connect($servername, $username, $password, $dbName);
mysqli_set_charset($conn, 'utf8');
$sql = $_COOKIE["sql_message"];
if ($conn->query($sql) === TRUE) {
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
setcookie("sql_message"); 
?>
<meta charset="UTF-8">
<script type="text/javascript">
    alert("등록이 완료되었습니다.\n이름 : " + localStorage.getItem("name") + "\n점수 : " + localStorage.getItem("score"));
    localStorage.removeItem("score");
    window.location.href = '../rank.php';
</script>