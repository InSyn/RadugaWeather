<!doctype html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no,
          initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Raduga Weather</title>
    <link rel="stylesheet" href="styles/style.css">
    <script src="js/vue.js"></script>
    <script src="js/main.js"></script>
</head>

<body class="body">

    <div class="main-wrapper">

        <div class="overlay"></div>

        <div class="header">
            <div class="clock">
                <div class="hh"></div>
                <div class="dots">:</div>
                <div class="mm"></div>
                <div class="dots">:</div>
                <div class="ss"></div>
            </div>
        </div>

        <div class="content">

            <div class="station stadium-station">

                <div class="name-wrapper">
                    <div class="station-name">Стадион</div>
                    <div class="time"><p>Обновлено:&nbsp</p><p class="time-p">00:00:00</p></div>
                </div>

                <div class="data-wrapper">
                    <div class="data-row">
                        <div class="data-title">Температура</div>
                        <div class="data-value"><div class="temp-stadium">0.0</div><p>&nbsp°C</p></div>
                    </div>
                    <div class="data-row">
                        <div class="data-title">Влажность</div>
                        <div class="data-value"><div class="humidity-stadium">0</div><p>&nbsp%</p></div>
                    </div>
                    <div class="data-row">
                        <div class="data-title">Скорость ветра</div>
                        <div class="data-value"><div class="wind-speed-stadium">15</div><p>&nbspм/с</p></div>
                    </div>
                    <div class="data-row">
                        <div class="data-title">Направление ветра</div>
                        <div class="data-value"><div class="wind-direction-stadium">с-з</div></div>
                    </div>
                    <div class="data-row">
                        <div class="data-title">Давление</div>
                        <div class="data-value"><div class="pressure-stadium">0</div><p>&nbspгПа</p></div>
                    </div>
                    <div class="data-row">
                        <div class="data-title">Температура почвы</div>
                        <div class="data-value"><div class=" ground-temp-stadium">0</div><p>&nbsp°C</p></div>
                    </div>
                    <div class="data-row">
                        <div class="data-title">Температура снега</div>
                        <div class="data-value snow"><div class="126 snow-temp snow-temp-stadium">0</div><p>&nbsp°C</p></div>
                    </div>
                </div>

            </div>

            <div class="right-container">

                <div class="station top-station">

                    <div class="station-name">Верхняя точка</div>

                    <div class="data-wrapper">
                        <div class="data-row">
                            <div class="data-title">Температура</div>
                            <div class="data-value"><div class="temp-top">0.0</div><p>&nbsp°C</p></div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Влажность</div>
                            <div class="data-value"><div class="humidity-top">0</div><p>&nbsp%</p></div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Точка росы</div>
                            <div class="data-value"><div class="dew-point-temp-top">0.0</div><p>&nbsp°C</p></div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Температура почвы</div>
                            <div class="data-value"><div class="143 ground-temp-top">0</div><p>&nbsp°C</p></div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Температура снега</div>
                            <div class="data-value snow"><div class="144 snow-temp snow-temp-top">0</div><p>&nbsp°C</p></div>
                        </div>
                    </div>

                </div>

                <div class="station bottom-station">

                    <div class="station-name">Нижняя точка</div>

                    <div class="data-wrapper">
                        <div class="data-row">
                            <div class="data-title">Температура</div>
                            <div class="data-value"><div class="temp-bot">0.0</div><p>&nbsp°C</p></div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Влажность</div>
                            <div class="data-value"><div class="humidity-bot">0</div><p>&nbsp%</p></div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Точка росы</div>
                            <div class="data-value"><div class="dew-point-temp-bot">0.0</div><p>&nbsp°C</p></div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Температура почвы</div>
                            <div class="data-value"><div class="161 ground-temp-bot">0</div><p>&nbsp°C</p></div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Температура снега</div>
                            <div class="data-value snow"><div class="162 snow-temp snow-temp-bot">0</div><p>&nbsp°C</p></div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="footer-wrapper">
            <svg class="arrow-container">
                <polygon class="arrow-svg"
                         points="0,30 30,0 90,0 120,30">
                </polygon>
            </svg>
            <div class="footer">
                <div class="request-button">
                    <p>Загрузить данные</p>
                </div>
                <div class="php-content">
                    <div class="news-overlay">

                    </div>
                </div>
            </div>
        </div>

    </div>

</body>

</html>