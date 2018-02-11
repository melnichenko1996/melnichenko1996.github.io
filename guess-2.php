<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function Play() {
            var answer = parseInt(Math.random() * 100);
            var plyaerNum = 1;
            while (true) {
                var userAnswer = prompt('Ходит игрок ' + plyaerNum + ' .Введите число от 0 до 100. Для выхода напишите  exit.');

                if (userAnswer == 'exit')
                    break;
                if (userAnswer > answer) {
                    alert('Ваше число слишком большое');
                } else if (userAnswer < answer) {
                    alert('Ваше число слишком маленькое');
                } else if (userAnswer == answer) {
                    alert('Вы угадали, поздравляю! Победил игрок номер ' + plyaerNum);
                    break;
                }

                if (plyaerNum == 1)
                    plyaerNum = 2;
                else if (plyaerNum == 2)
                    plyaerNum = 1;
            }

        }

    </script>
</head>

<body>
    <div id="header">
        <a href="index.php">Главная</a><span>/</span>
        <a href="puzzle.php">Загадки</a><span>/</span>
        <a href="guess-1.php">Угадайка</a><span>/</span>
        <a href="guess-2.php">Угадайка мультиплеер</a>
    </div>
    <div id="content">
        <h1>Угадайка мультиплеер</h1>
        <div id="box">
            <p>Играет 2 игра. У вас будет неограниченное количество попыток, чтобы угадать загадку.</p>
            <br><br/>
            <a href="#" onclick="Play();">Начать игру</a>
        </div>
    </div>

<footer>
	Copyright ©<?php echo date("Y"); ?> <a href="https://geekbrains.ru/">GeekBrains</a>
</footer>

</body>

</html>
