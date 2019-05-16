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

                <div class="station-name">Стадион</div>

                <div class="data-wrapper">
                    <div class="data-row">
                        <div class="data-title">Температура</div>
                        <div class="data-value">0.0</div>
                    </div>
                    <div class="data-row">
                        <div class="data-title">Влажность</div>
                        <div class="data-value">0%</div>
                    </div>
                    <div class="data-row">
                        <div class="data-title">Скорость ветра</div>
                        <div class="data-value">15</div>
                    </div>
                    <div class="data-row">
                        <div class="data-title">Направление ветра</div>
                        <div class="data-value">с-з</div>
                    </div>
                </div>

            </div>

            <div class="right-container">

                <div class="station top-station">

                    <div class="station-name">Верхняя точка</div>

                    <div class="data-wrapper">
                        <div class="data-row">
                            <div class="data-title">Температура</div>
                            <div class="data-value">0.0</div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Влажность</div>
                            <div class="data-value">0%</div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Скорость ветра</div>
                            <div class="data-value">15</div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Направление ветра</div>
                            <div class="data-value">с-з</div>
                        </div>
                    </div>

                </div>

                <div class="station bottom-station">

                    <div class="station-name">Нижняя точка</div>

                    <div class="data-wrapper">
                        <div class="data-row">
                            <div class="data-title">Температура</div>
                            <div class="data-value">0.0</div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Влажность</div>
                            <div class="data-value">0%</div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Скорость ветра</div>
                            <div class="data-value">15</div>
                        </div>
                        <div class="data-row">
                            <div class="data-title">Направление ветра</div>
                            <div class="data-value">с-з</div>
                        </div>
                    </div>

                </div>

            </div>

        </div>

        <div class="footer-wrapper">
            <svg class="arrow-container">
                <polygon class="arrow-svg"
                         points="0,30 25,0 50,30">
                </polygon>
            </svg>
            <div class="footer">
                <div class="php-content">
                    <?php
                        include_once ('data/curl.php');

                        $c = curl::app('http://62.213.36.254')
                            ->set(CURLOPT_HEADER, 1);

                        $data = $c->request('all_main.php?lg_ex=meteo&pw_ex=krsk2019&butn=Вход');

                        echo $data['html'];
                    ?>
                </div>
            </div>
        </div>

    </div>

</body>

</html>