window.onload = function () {

let hh = document.querySelector(".hh");
let mm = document.querySelector(".mm");
let ss = document.querySelector(".ss");

function clockUpdate(){
    let currentTime = new Date();

    let hours = currentTime.getHours();
    if (hours<10){
        hours = "0"+hours
    }

    let minutes = currentTime.getMinutes();
    if (minutes<10){
        minutes = "0"+minutes
    }

    let seconds = currentTime.getSeconds();
    if (seconds<10){
        seconds = "0"+seconds
    }

    hh.innerHTML = hours.toString();
    mm.innerHTML = minutes.toString();
    ss.innerHTML = seconds.toString();
}

function clockStart(){
    setInterval(clockUpdate, 1000);
}


clockUpdate();
clockStart();

};