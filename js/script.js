var checkSolve = false;
var score = 0;
//임시수정 5->1;
var life = 5;

window.onload = function () {
}
function movO() {
    if(!checkSolve) {
        document.getElementById("Button_O").src='../pic/O_on.png';
    }
}
function mouO() {
    if(!checkSolve) {
        document.getElementById("Button_O").src='../pic/O_off.png';
    }
}
function movX() {
    if(!checkSolve) {
        document.getElementById("Button_X").src='../pic/X_on.png';
    }
}
function mouX() {
    if(!checkSolve) {
        document.getElementById("Button_X").src='../pic/X_off.png';
    }
}


function Correct() {
    if(!checkSolve) {
        var bg = document.getElementById("Q");
        //  bg.style.backgroundColor = "#379bffb0"
        clearInterval(progressid);
        var answer = document.getElementById("answer");
        answer.style.display = 'block';
        answer.innerHTML = '<h1>정답!</h1>';
        answer.style.color = 'darkblue';
        document.getElementById("wrong").style.backgroundColor = "#0000FF50";
        document.getElementById("wrong").style.display = 'block';
        score++;
        document.getElementById("score").innerHTML = score + " 점";
        Timeover();
    }
}
function inCorrect() {
    if(!checkSolve) {
        var bg = document.getElementById("Q");
        //bg.style.backgroundColor = "#ff4b9cb0"
        clearInterval(progressid);
        var answer = document.getElementById("answer");
        answer.style.display = 'block';
        answer.innerHTML = '<h1>오답!</h1>';
        answer.style.color = 'darkred';
        Wrong();
    }
}
function Wrong() {
        document.getElementById("wrong").style.backgroundColor = "#FF000050";
        document.getElementById("wrong").style.display = 'block';
        var count = 1;
        var lostlifeid = setInterval(lostlife, 20);
        function lostlife() {
            if(count <= 0) {
                clearInterval(lostlifeid);
                document.getElementById("life"+life).style.display = 'none';
                life--;
            }
            else {
                count = count - 0.1;
                document.getElementById("life"+life).style.opacity = count;
            }
        }
        Timeover();
}
function Timeover() {
        prg.style.display = 'none';
        document.getElementById("explain").style.display = 'block';
        document.getElementById("next").style.display = 'block';
        document.getElementById("info").style.display = 'inline-block';
        checkSolve = true;
}
function progress() {
    prg = document.getElementById('progress');
    var counter = 5;
    var progress = 100.0;
    progressid = setInterval(frame, 10);
    
    function frame() {
        if(progress <= 2.0) {
            clearInterval(progressid);
            var bg = document.getElementById("Q");
            //bg.style.backgroundColor = "#ff4b9cb0"
            var answer = document.getElementById("answer");
            answer.style.display = 'block';
            answer.innerHTML = '<h1>타임 오버!</h1>';
            answer.style.color = 'darkred';
            document.getElementById("Button_O").src='../pic/O_on.png';
            document.getElementById("Button_X").src='../pic/X_off.png';
            Wrong();
            Timeover();
            
        } else{
            if(progress <= 30.0) {
                prg.style.backgroundColor = 'orangered';
            }
            else if(progress <= 70.0) {
                prg.style.backgroundColor = 'yellow';
            }
            progress -= 0.1;
            prg.style.width = progress + '%';
        }
    }
}