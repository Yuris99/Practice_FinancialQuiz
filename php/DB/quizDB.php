<?php
  header('Content-Type: text/html; charset=utf-8');
$servername = "pcsquiz.woobi.co.kr";
$username = "pcsquiz";
$password = "pcs1103^^";
$dbName = "pcsquiz";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

mysqli_set_charset($conn, 'utf8');

$res = mysqli_query($conn, 'SELECT * FROM quiz');
$result = array();
while($row = mysqli_fetch_array($res))
{ 
    //$arr = array('No' => $row['No'], 'Question' => $row['Question'],
    //             'Answer' => $row['Answer'], 'Explain' => $row['Explain']);
    $arr = array('No' => $row[0], 'Q' => $row[1],
                 'Answer' => $row[2], 'Explain' => $row[3]);
    array_push($result, array('No'=>$row[0],'Question'=>$row[1],'Answer'=>$row[2],'Explain'=>$row[3]));
}
?>

<script type="text/javascript">
    var quizlist = <?php echo json_encode($result, JSON_UNESCAPED_UNICODE); ?>;
</script>
<script type="text/javascript" src=".../question.js"></script>    