var cntq = 0;
quizlist.sort(function() {
    return Math.random() - Math.random();
})
localStorage.setItem("quizcnt", quizlist.length);
window.onload = function () {
        document.getElementById("progress").style.display = 'none';
        document.getElementById("score").style.display = 'none';
        document.getElementById("question").style.display = 'none';
        document.getElementById("Button_O").style.display = 'none';
        document.getElementById("Button_X").style.display = 'none';
        document.getElementById("life1").style.display = 'none';
        document.getElementById("life2").style.display = 'none';
        document.getElementById("life3").style.display = 'none';
        document.getElementById("life4").style.display = 'none';
        document.getElementById("life5").style.display = 'none';
        document.getElementById("Q").style.display = 'none';
}

function nextQ() {
    if(quizlist.length <= cntq) {
        if(life > 0) {
            score += life;
        }
        localStorage.setItem("score", score);
        window.location.href = '../php/gameover.php';
        if(life > 0) {
            document.getElementById("gameover").innerHTML = "올 클리어!";
            document.getElementById("gameoverTitle").innerHTML = "올 클리어!";
        }
        
    } else if(life <= 0) {
        localStorage.setItem("score", score);
        window.location.href = '../php/gameover.php';
    } else {
        document.getElementById("question").innerHTML = quizlist[cntq]['Question'];
        if(quizlist[cntq]['Explain'] != "") {
            document.getElementById("explain").innerHTML = "<h3>" + quizlist[cntq]['Explain'] + "</h3>";
        }
        else {
            document.getElementById("explain").innerHTML = "";
        }
        cntq+=1;
        checkSolve = false;
        document.getElementById("Button_O").src='../pic/O_off.png';
        document.getElementById("Button_X").src='../pic/X_off.png';
        document.getElementById("wrong").style.backgroundColor = "#0000";
        document.getElementById("wrong").style.display = 'none';
        document.getElementById("explain").style.display = 'none';
        document.getElementById("info").style.display = 'none';
        document.getElementById("next").style.display = 'none';
        document.getElementById("answer").style.display = 'none';
        document.getElementById("tempInfo").style.display = 'none';
        document.getElementById("progress").style.display = 'block';
        document.getElementById("progress").style.backgroundColor = 'darkturquoise';
        document.getElementById("score").style.display = 'block';
        document.getElementById("question").style.display = 'block';
        document.getElementById("Button_O").style.display = 'inline-block';
        document.getElementById("Button_X").style.display = 'inline-block';
        document.getElementById("life1").style.display = 'inline-block';
        document.getElementById("life2").style.display = 'inline-block';
        document.getElementById("life3").style.display = 'inline-block';
        document.getElementById("life4").style.display = 'inline-block';
        document.getElementById("life5").style.display = 'inline-block';
        document.getElementById("Q").style.display = 'block';
        progress();
    }
}
function checkO() {
    if(quizlist[cntq-1]['Answer'] == 1) {
        Correct();
        console.log("ㅁ");
    } else {
        inCorrect();
        console.log("ㅌ");
    }
}
function checkX() {
    if(quizlist[cntq-1]['Answer'] == 0) {
        Correct();
        console.log("ㅁ");
    } else {
        inCorrect();
        console.log("ㅌ");
    }
}
