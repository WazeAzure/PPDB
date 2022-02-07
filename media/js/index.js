// alert("JS is running fine and well");

// Timer app

let dateDifference = (today, finalDate) => {
    var result = finalDate.getTime() - today.getTime();
    result = Math.floor(result/1000)
    
    var days = 0;
    var hours = 0;
    var minutes = 0;
    var seconds = 0;
    
    if(result >= 24*60*60){
        days = Math.floor(result/86400);
        result = result - (days * 86400)
    }
    if(result >= 3600){
        hours = Math.floor(result/3600);
        result = result - (hours * 3600);
    }
    if(result >= 60){
        minutes = Math.floor(result/60);
        result = result - (minutes * 60);
    }
    seconds = result;

    return [days, hours, minutes, seconds];
}

let checkTimeOut = (time) => {
    if(time[0] == 0 && time[1] == 0 && time[2] == 0 && time[3] <= 0){
        clearInterval(timer);
        document.getElementById('timer-seconds').innerHTML = 0;
        var hostname = location.hostname;;
        window.location.replace(`https://${hostname}/PPDB/login.php`)
    }
}


let display = (time) => {
    document.getElementById('timer-days').innerHTML = time[0];
    document.getElementById('timer-hours').innerHTML = time[1];
    document.getElementById('timer-minutes').innerHTML = time[2];
    document.getElementById('timer-seconds').innerHTML = time[3];
    
    checkTimeOut(time);
    
}

let timerApp = function(){
    var today = new Date();
    var finalDate = new Date("2022-01-28 20:52:0");
    var daysToFinal = dateDifference(today, finalDate);
    display(daysToFinal);
    // console.log(daysToFinal)
}

const timer = setInterval(timerApp, 1000);

