var rankerlist = ranker.length;
var i = 0;
while(i < rankerlist) {
    console.log(ranker[i]['No'] + ranker[i]['Name'] + ranker[i]['Score']);
    i++;
}
    
    function AddRanker(rankname, rankscore) {
        var sql = "INSERT INTO rank (No, Name, Score) VALUES (" + rankerlist + ", '" + rankname + "', " + rankscore + ")";
        return sql;
        //var temp = "<?php echo insertdb('" + sql + "'); ?>";
    }

function getRank() {
    var cnt = 1;
    while(cnt <= rankerlist && cnt <= 20) {
        var tr = document.getElementById("rank" + cnt);
        tr.innerHTML = "<td>" + cnt + "</td>";
        tr.innerHTML += "<td>" + ranker[cnt-1]['Name'] + "</td>";
        tr.innerHTML += "<td>" + ranker[cnt-1]['Score'] + "</td>";
        cnt++;
    }
}