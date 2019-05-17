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

    let xhr = new XMLHttpRequest();

    function dataRequest() {

        xhr.open('GET', '../data/Request.php', true);

        xhr.send();

        xhr.onreadystatechange = function () {

            if (xhr.readyState !== 4){

                requestButton.innerHTML='Загрузка данных';

            }

            else {

                let response = JSON.parse(xhr.responseText);
                requestButton.innerHTML = 'Загрузить данные';

                pushData(response, 111, 'temp-stadium');
                pushData(response, 114, 'humidity-stadium');
                pushData(response, 116, 'wind-speed-stadium');
                pushData(response, 115, 'wind-direction-stadium');
                pushData(response, 122, 'pressure-stadium');
                pushData(response, 125, 'ground-temp-stadium');
                pushData(response, 126, 'snow-temp-stadium');

                pushData(response, 129, 'temp-top');
                pushData(response, 132, 'humidity-top');
                pushData(response, 130, 'dew-point-temp-top');
                pushData(response, 143, 'ground-temp-top');
                pushData(response, 144, 'snow-temp-top');

                pushData(response, 147, 'temp-bot');
                pushData(response, 150, 'humidity-bot');
                pushData(response, 148, 'dew-point-temp-bot');
                pushData(response, 161, 'ground-temp-bot');
                pushData(response, 162, 'snow-temp-bot');

                console.log(response);

                if((response[126]==='0')&&(response[144]==='0')&&(response[162]==='0')){

                    let snowCheckMas = document.querySelectorAll('.snow-temp');

                    for (snowSocket in snowCheckMas) {
                        snowCheckMas[snowSocket].innerHTML = '--';
                    }

                }

                document.querySelector('.time-p').innerHTML = response[110];

            }

        };

    }

    function autoRequest(timeout){
        setInterval(dataRequest, timeout);
    }

    function printResponse(response) {

        for (let str in response){

            phpData.innerHTML = phpData.innerHTML + str + "::" + response[str] +'_';

            if(str == 126 || str == 144){
                phpData.innerHTML = phpData.innerHTML+'<br>';
            }

        }

    }

    function pushData(data, socketNum, socketName){

        let socket = document.querySelector('.'+socketName.toString());

        socket.innerHTML = data[socketNum];

    }

    let footerWrapper = document.querySelector('.footer-wrapper');
    let footer = document.querySelector('.footer');

    footerWrapper.addEventListener('mouseout', function () {
        footer.scrollTo(0,0);
    });

    let requestButton = document.querySelector('.request-button');
    let phpData = document.querySelector('.php-content');

    requestButton.addEventListener('click', function () {

        dataRequest();

    });

    dataRequest();
    autoRequest(10000);

};