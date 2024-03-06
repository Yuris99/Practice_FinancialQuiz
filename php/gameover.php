<?php
    include("DB/rankDB.php");
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title id="gameoverTitle">게임오버..</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
  <script type="text/javascript" src="../js/script.js"></script>
   <div class="content">
        <h1 id="gameover">게임 오버!</h1>
        <h2 id="viewscore">점수 : 50 점</h2>
        <input id="getname" type="text" placeholder="이름을 입력해주세요." required>
        <button class="shiny-blue" onclick="upRank()" type="submit">랭킹 등록</button>
   </div>
    
    <script type="text/javascript">
        window.onload = function() {
            if(localStorage.score == null) {
                window.location.href = 'rank.php';
            }
        }
        function upRank() {
            if(document.getElementById("getname").value == "") {
                alert("이름을 입력해주세요!");
                return;
            }
            var name = document.getElementById("getname").value;
            var lastscore = localStorage.getItem("score");
            localStorage.setItem("name", name);
            document.cookie = "sql_message=" + AddRanker(name, lastscore) + ";";
            window.location.href = 'DB/uploadDB.php';
        }
        
        document.getElementById("viewscore").innerHTML = '점수  :  ' + localStorage.getItem("score") + '점';
        if(parseInt(localStorage.getItem("score")) >= parseInt(localStorage.getItem("quizcnt"))) {
            document.getElementById("gameover").innerHTML = "올 클리어!";
            document.getElementById("gameoverTitle").innerHTML = "올 클리어!";
            document.getElementById("gameover").style.color = "blue";
        }
    </script>
    
    <svg version="1.1" id="home-anim" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	 viewBox="0 0 1080 1920" style="enable-background:new 0 0 1080 1920;" xml:space="preserve">

<g id="home">
	<defs>
		<rect id="masque" y="0.4" width="1080" height="1920"/>
	</defs>
	<clipPath id="cache">
		<use xlink:href="#masque"  style="overflow:visible;"/>
	</clipPath>
	<g id="light-blue">
		<line y1="630.8" x1="894.3" y2="476.3" x2="1048.8"/>
		<line y1="858.2" x1="823.9" y2="1012.7" x2="669.4"/>
		<line y1="1066.9" x1="458.2" y2="912.4" x2="612.7"/>
		<line y1="1294.3" x1="387.8" y2="1448.8" x2="233.3"/>
		<line y1="1503" x1="22.1" y2="1348.5" x2="176.6"/>
		<line y1="895.6" x1="1166.6" y2="1050.1" x2="1012.1"/>
		<line y1="1104.3" x1="800.9" y2="949.8" x2="955.4"/>
		<line y1="1331.7" x1="730.5" y2="1486.2" x2="576"/>
		<line y1="1540.4" x1="364.8" y2="1385.9" x2="519.3"/>
		<line y1="1767.8" x1="294.4" y2="1922.3" x2="139.9"/>
		<line y1="1976.5" x1="-71.3" y2="1822" x2="83.2"/>
		<line y1="1369.1" x1="1073.2" y2="1523.6" x2="918.7"/>
		<line y1="1577.8" x1="707.5" y2="1423.3" x2="862"/>
		<line y1="1805.2" x1="637.1" y2="1959.7" x2="482.6"/>
		<line y1="1624" x1="1041.4" y2="1469.4" x2="1195.9"/>
		<line y1="-134.7" x1="674.9" y2="19.8" x2="520.4"/>
		<line y1="74" x1="309.2" y2="-80.5" x2="463.7"/>
		<line y1="301.4" x1="238.8" y2="455.9" x2="84.3"/>
		<line y1="510.1" x1="-126.9" y2="355.6" x2="27.6"/>
		<line y1="-88.6" x1="1008.9" y2="65.9" x2="854.4"/>
		<line y1="120.1" x1="643.1" y2="-34.4" x2="797.7"/>
		<line y1="347.5" x1="572.8" y2="502" x2="418.3"/>
		<line y1="556.2" x1="207.1" y2="401.7" x2="361.6"/>
		<line y1="783.6" x1="136.7" y2="938.1" x2="-17.8"/>
		<line y1="157.6" x1="985.8" y2="3" x2="1140.3"/>
		<line y1="384.9" x1="915.5" y2="539.4" x2="760.9"/>
		<line y1="593.6" x1="549.7" y2="439.1" x2="704.3"/>
		<line y1="821" x1="479.4" y2="975.5" x2="324.9"/>
		<line y1="1029.7" x1="113.6" y2="875.2" x2="268.2"/>
		<line y1="1257.1" x1="43.3" y2="1411.6" x2="-111.2"/>
	</g>
	<g id="red">
		<line y1="794.4" x1="883.4" y2="639.8" x2="1037.9"/>
		<line y1="694.6" x1="834.8" y2="849.2" x2="680.3"/>
		<line y1="1230.4" x1="447.3" y2="1075.9" x2="601.8"/>
		<line y1="1130.7" x1="398.7" y2="1285.2" x2="244.2"/>
		<line y1="1666.5" x1="11.2" y2="1512" x2="165.7"/>
		<line y1="732" x1="1177.5" y2="886.6" x2="1023"/>
		<line y1="1267.9" x1="790" y2="1113.3" x2="944.5"/>
		<line y1="1168.1" x1="741.4" y2="1322.7" x2="586.9"/>
		<line y1="1703.9" x1="353.9" y2="1549.4" x2="508.4"/>
		<line y1="1604.2" x1="305.3" y2="1758.7" x2="150.8"/>
		<line y1="1205.5" x1="1084.1" y2="1360.1" x2="929.6"/>
		<line y1="1741.4" x1="696.5" y2="1586.8" x2="851.1"/>
		<line y1="1641.6" x1="648" y2="1796.2" x2="493.5"/>
		<line y1="1787.5" x1="1030.5" y2="1633" x2="1185"/>
		<line y1="1687.8" x1="981.9" y2="1842.3" x2="827.4"/>
		<line y1="200.1" x1="-44.4" y2="45.6" x2="110.1"/>
		<line y1="237.5" x1="298.3" y2="83" x2="452.8"/>
		<line y1="137.8" x1="249.7" y2="292.3" x2="95.2"/>
		<line y1="673.6" x1="-137.8" y2="519.1" x2="16.7"/>
		<line y1="283.7" x1="632.2" y2="129.2" x2="786.8"/>
		<line y1="184" x1="583.7" y2="338.5" x2="429.2"/>
		<line y1="719.8" x1="196.2" y2="565.2" x2="350.7"/>
		<line y1="620" x1="147.6" y2="774.6" x2="-6.9"/>
		<line y1="321.1" x1="974.9" y2="166.6" x2="1129.4"/>
		<line y1="221.4" x1="926.4" y2="375.9" x2="771.8"/>
		<line y1="757.2" x1="538.8" y2="602.7" x2="693.4"/>
		<line y1="657.5" x1="490.3" y2="812" x2="335.8"/>
		<line y1="1193.3" x1="102.7" y2="1038.7" x2="257.3"/>
		<line y1="1093.5" x1="54.2" y2="1248.1" x2="-100.3"/>
	</g>
	<g id="blue">
		<line y1="225.8" x1="1151" y2="534.9" x2="841.9"/>
		<line y1="827.1" x1="1003.3" y2="518" x2="1312.3"/>
		<line y1="661.9" x1="714.9" y2="971" x2="405.9"/>
		<line y1="1263.1" x1="567.2" y2="954.1" x2="876.3"/>
		<line y1="1098" x1="278.8" y2="1407.1" x2="-30.2"/>
		<line y1="1699.2" x1="131.1" y2="1390.2" x2="440.2"/>
		<line y1="699.3" x1="1057.6" y2="1008.4" x2="748.5"/>
		<line y1="1300.6" x1="909.9" y2="991.5" x2="1218.9"/>
		<line y1="1135.4" x1="621.5" y2="1444.5" x2="312.4"/>
		<line y1="1736.6" x1="473.8" y2="1427.6" x2="782.8"/>
		<line y1="1571.5" x1="185.4" y2="1880.6" x2="-123.6"/>
		<line y1="1172.8" x1="964.2" y2="1481.9" x2="655.1"/>
		<line y1="1774.1" x1="816.5" y2="1465" x2="1125.5"/>
		<line y1="1608.9" x1="528.1" y2="1918" x2="219"/>
		<line y1="1219" x1="1298.1" y2="1528" x2="989.1"/>
		<line y1="1655.1" x1="862" y2="1964.1" x2="553"/>
		<line y1="232.8" x1="75.5" y2="-76.2" x2="384.6"/>
		<line y1="270.2" x1="418.2" y2="-38.8" x2="727.3"/>
		<line y1="105.1" x1="129.8" y2="414.2" x2="-179.2"/>
		<line y1="706.3" x1="-17.9" y2="397.3" x2="291.2"/>
		<line y1="-284.8" x1="899.9" y2="24.2" x2="590.8"/>
		<line y1="316.4" x1="752.2" y2="7.3" x2="1061.2"/>
		<line y1="151.3" x1="463.8" y2="460.3" x2="154.7"/>
		<line y1="752.5" x1="316.1" y2="443.4" x2="625.1"/>
		<line y1="587.3" x1="27.7" y2="896.4" x2="-281.4"/>
		<line y1="1188.6" x1="-120" y2="879.5" x2="189"/>
		<line y1="-247.4" x1="1242.5" y2="61.6" x2="933.5"/>
		<line y1="188.7" x1="806.4" y2="497.7" x2="497.4"/>
		<line y1="789.9" x1="658.8" y2="480.8" x2="967.8"/>
		<line y1="624.8" x1="370.4" y2="933.8" x2="61.3"/>
		<line y1="1226" x1="222.7" y2="916.9" x2="531.7"/>
		<line y1="1662.1" x1="-213.4" y2="1353" x2="95.6"/>
	</g>
</g>
</svg>
</body>
</html>