<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <title>Личный сайт студента GeekBrains</title>
    <link rel="stylesheet" href="style.css">

    <script type="text/javascript">
        //скрипт JS
        function checkAnswers() { //функция
            var result = document.getElementById("answer1").value;
            var count = 0;
            var notcount = 0;
            if (result == "12")
                count++;
            else
                notcount++;


            var result = document.getElementById("answer2").value;
            if (result == "язык")
                count++;
            else
                notcount++;

            var result = document.getElementById("answer3").value;
            if (result == "море")
                count++;
            else
                notcount++;

            alert("Вы ответили правильно на " + count + " загадки!")
            alert("Не правильно вы ответили на " + notcount + " загадки!")
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
        <h1>Игра в загадки</h1>
        <div id="box">
            <h2>Я загадал несколько загадок, попробуй их угадать!(писать с маленькой буквы)</h2>

            <p>Кузнец подковал тройку лошадей. Сколько подков пришлось ему сделать?</p>
            <input type="text" id="answer1"> </input>

            <p>Если б не было его, не сказал бы ничего.</p>
            <input type="text" id="answer2"> </input>

            <p>Кругом вода, а с питьем беда.</p>
            <input type="text" id="answer3"> </input>

            <br/>

            <a href="#" onclick="checkAnswers();">Отправить</a>

            </h2>
        </div>
    </div>
    </div>

<footer>
	Copyright ©<?php echo date("Y"); ?> <a href="https://geekbrains.ru/">GeekBrains</a>
</footer>

</body>

</html>
