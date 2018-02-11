<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">
    <script type="text/javascript">
        function Play() {
            var answer = parseInt(Math.random() * 100); //загадует рандом!

            for (var i = 10; i > 0; i--) {

                var number = parseInt(prompt("Введите ваш вариант ответа. У вас есть " + i + " попыток"));

                if (number == answer) {
                    alert("Молодец! Вы угадали =)");
                    break; //виходит из цыкла в любой момент, когда до ходим до ответа
                } else if (number < answer) {
                    alert("Ваше число слишком маленькое");
                } else if (number > answer) {
                    alert("Ваше число слишком большое");
                }
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
        <h1>Угадайка</h1>
        <div id="box">
            <p>У вас будет 10 попыток, чтобы угадать число от 1 до 100.В зависимости от вашего ответа, вам будут даватся подсказки, какое число нужно, большее или меньшее.</p>
            <br><br/>
            <a href="#" onclick="Play();">Начать игру</a>



        </div>
    </div>

<footer>
	Copyright ©<?php echo date("Y"); ?> <a href="https://geekbrains.ru/">GeekBrains</a>
</footer>

</body>

</html>