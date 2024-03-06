<?php
  header('Content-Type: text/html; charset=utf-8');
$servername = "pcsquiz.woobi.co.kr";
$username = "pcsquiz";
$password = "pcs1103^^";
$dbName = "pcsquiz";
 
// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbName);

mysqli_set_charset($conn, 'utf8');

$res = mysqli_query($conn, 'SELECT * FROM rank ORDER BY score DESC');
$result = array();
while($row = mysqli_fetch_array($res))
{ 
    //$arr = array('No' => $row['No'], 'Question' => $row['Question'],
    //             'Answer' => $row['Answer'], 'Explain' => $row['Explain']);
    $arr = array('No' => $row[0], 'Name' => $row[1], 'Score' => $row[2]);
    array_push($result, $arr);
}
//echo json_encode($result, JSON_UNESCAPED_UNICODE);
?>

<script type="text/javascript">
    var ranker = <?php echo json_encode($result, JSON_UNESCAPED_UNICODE); ?>;
</script>
<script type="text/javascript" src="../js/rank.js"></script>