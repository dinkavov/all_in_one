<!DOCTYPE html>
<html lang="en">
<head>
    <title>Task</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css"
</head>
<body>
<br>
<div class="container">
    <h2></h2>
    <br>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#task1">Задача №1</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#task2">Задача №2</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#task3">Задача №3</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#task4">Задача№4</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#task5">Задача №5</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#task6">Задача №6</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#task7">Задача №7</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content">
        <div id="task1" class="container tab-pane active"><br>
            <h3>Задача №1</h3>
            <div class="alert alert-primary">
                <p>Cоздать массив, наполнить его случайными значениями (можно использовать функцию rand),
                    найти максимальное и минимальное значение массива и поменять их местами.</p>
            </div>
            <h3>Решение</h3>
            <div class="alert alert-success">
                <?php
                $min_number = rand(10, 55);
                $max_number = rand(56, 100);
                $numbers = range($min_number, $max_number);

                foreach($numbers as $number) {
                    if($number >= $max_number) {
                        echo "Максимальное чило массива - " . $number;
                        echo "<br>";
                        $tmp_max_number = $max_number;
                    }
                    elseif($number <= $min_number) {
                        echo "Минимальное число массива - " . $number;
                        echo "<br>";
                        $tmp_min_number = $min_number;
                    }
                    else continue;
                }
                echo "Поменяли местами максимум - " . $tmp_max_number . "<br>" . "Минимум - " . $tmp_min_number;
                ?>
            </div>
        </div>
        <div id="task2" class="container tab-pane fade"><br>
            <h3>Задача №2</h3>
            <div class="alert alert-primary">
                <p>Нужно разработать программу, которая считала бы количество вхождений какой-нибуть
                    выбранной вами цифры в выбранном вами числе. Например: цифра 9 в числе 2424239423429344219587557495 встречается 4 раза.</p>
            </div>
            <h3>Решение</h3>
            <div class="alert alert-success">
                <?php
                    $i = 0;
                    $b = is_numeric($_GET['a']);
                    $f = is_numeric($_GET['f']);
                    if($b && $f == true) {
                        echo "Введенное число - " . $a = $_GET['a'];
                        echo "<br>";
                        echo "Введенная цифра для поиска - " . $d = $_GET['f'];
                        echo "<br>";
                        $array = str_split($a);
                        foreach($array as $element) {

                            if($element == $d) {$i = $i + 1;}
                            else
                                continue;
                        }
                        echo "Цифра " . $d . " встречается " . " $i " . "раз(а)";
                    }
                    else
                        echo "Это не число";
                ?>
            </div>
        </div>
        <div id="task3" class="container tab-pane fade"><br>
            <h3>Задача №3</h3>
            <div class="alert alert-primary">
                <p>Вашим заданием будет создание сокращенного варианта ФИО.
                    Например, вводим: Иванов Иван Петрович, а в результате должны получить: Иванов И. П.</p>
            </div>
            <h3>Решение</h3>
            <div class="alert alert-success">
                <form action="index.php" method="post">
                    <div class="container">
                            <p> Введите ФИО полностью </p>
                            <input type="text" name="firstName" placeholder="Фамилия"/>
                            <input type="text" name="Name" placeholder="Имя"/>
                            <input type="text" name="lastName" placeholder="Отчество"/>
                            <input type="submit" value=" Ввод " />
                    </div>
                </form>

                <?php
                    function str_line($a) {
                        $lineName = mb_strlen($a);
                        $lineName1 = mb_strlen($a) -1;
                        $lineName = $lineName - $lineName1;
                        return $lineName;
                    }
                    $firstName = $_POST['firstName'];
                    $Name = $_POST['Name'];
                    $lastName = $_POST['lastName'];
                    $lineName = str_line($Name);
                    $line_lastName = str_line($lastName);
                    echo "Результат: " . $firstName . " " . mb_substr($Name, 0, $lineName) . ". " . mb_substr($lastName, 0, $line_lastName) . "."
                ?>
            </div>
        </div>
        <div id="task4" class="container tab-pane fade"><br>
            <h3>Задача №4</h3>
            <div class="alert alert-primary">
                <p>Игральным картам присвоены следующие порядковые номера в зависимости от их достоинства:
                    "валет" - 11, "дама" - 12, "король" - 13, "туз" - 14. Порядковые номера остальных карт соответствуют их названиям("семерка", "восмерка" и т. д.).
                    Вам нужно разработать программу, которая выводила достоинство карты по заданному номеру, который будет вводит пользователь.</p>
            </div>
            <h3>Решение</h3>
            <div class="alert alert-success">
                <p>Введите число</p>
                <form action="index.php" method="post">
                    <input type="text" size="2" name="card_type">
                    <input type="submit" value="Ввод">
                </form>
<!---->
<!--            --><?php
//                if (!empty($_POST[$card_type])){
//                    $card_type = $_POST ['card_type'];
//
//                    switch ($card_type) {
//                        case 6:
//                            echo 'Ваша карта: шестерка';
//                            break;
//                        case 7:
//                            echo 'Ваша карта: семерка';
//                            break;
//                        case 8:
//                            echo 'Ваша карта: восьмерка';
//                            break;
//                        case 9:
//                            echo 'Ваша карта: девятка';
//                            break;
//                        case 10:
//                            echo 'Ваша карта: десятка';
//                            break;
//                        case 11:
//                            echo 'Ваша карта: валет';
//                            break;
//                        case 12:
//                            echo 'Ваша карта: дама';
//                            break;
//                        case 13:
//                            echo 'Ваша карта: король';
//                            break;
//                        case 14:
//                            echo 'Ваша карта: туз';
//                            break;
//
//                        default:
//                            echo 'Карта не определена или неверный ввод';
//                            break;
//                    }
//                ?>
            </div>
        </div>
        <div id="task5" class="container tab-pane fade"><br>
            <h3>Задача №5</h3>
            <div class="alert alert-primary">
                <p>Необходимо сделать форму для авторизации на сайте, для этого делаются 3 обязательных поля: login, password, email.
                    Если верно ввели - записываем в куки специальный ключ, при наличии которого выводим человеку кнопку "выйти из сайта".
                    В момент выхода - удалить созданную куку..</p>
            </div>
            <h3>Решение</h3>
            <div class="alert alert-success">
                <?PHP session_start(); ?>
                <?PHP if(isset($_COOKIE['loggedIn']) && $_COOKIE['loggedIn']) : ?>
                    <p>Hello, <?= $_COOKIE['login']; ?></p>
                    <a href="<?= $_SERVER['PHP_SELF']; ?>?logout=true">logout</a>
                <?PHP else : ?>
                    <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
                        <table>
                            <tr>
                                <td>Login</td>
                                <td><input type="text" name="login" required placeholder="login"></td>
                            </tr>
                            <tr>
                                <td>Password</td>
                                <td><input type="password" name="password" required placeholder="password"></td>
                            </tr>
                            <tr>
                                <td>Email</td>
                                <td><input type="email" name="email" required placeholder="email"></td>
                            </tr>
                        </table>
                        <input type="submit" name="submit" value="Login">
                    </form>
                <?PHP endif; ?>

                <?PHP
                $login = 'login';
                $pass = 'pass';
                $email = 'email@test.com';

                if(isset($_POST['submit']) && !empty($_POST['submit'])) {
                    $data['login'] = $_POST['login'] == $login ? $_POST['login'] : false;
                    $data['pass'] = $_POST['password'] == $pass ? $_POST['password'] : false;
                    $data['email'] = $_POST['email'] == $email ? $_POST['email'] : false;

                    foreach($data as $key => $value) {
                        If(!$value) $error[] = $key;
                    }

                    if(empty($error)) {
                        setcookie('loggedIn', true);
                        setcookie('PHPSESSID', session_id());
                        setcookie('login', $data['login']);
                        session_start();
                        header('Location: ' . $_SERVER['PHP_SELF']);
                    }
                    else {
                        print_r($error);
                    }
                }

                if(Isset($_GET['logout']) && $_GET['logout'] == true) {
                    setcookie("loggedIn", "false", time() - 3600);
                    setcookie("PHPSESSID", "", time() - 3600);
                    setcookie("login", "", time() - 3600);
                    header('Location: ' . $_SERVER['PHP_SELF']);
                    session_destroy();
                }
                ?>
            </div>
        </div>
        <div id="task6" class="container tab-pane fade"><br>
            <h3>Задача №6</h3>
            <div class="alert alert-primary">
                <p>Создаём скрытую страницу "module=control" , в ней выводим весь массив куки и сессии.
                    Добавляем 2 кнопки: "очистить куки" и "очистить сессию", которая должна выполнять указанные действия по нажатию.
                    Кроме главного подраздела по управлению куки и сессией добавляем ещё 2: страницу с выводом phpinfo и страницу с выводом $_SERVER.
                    Данный раздел защищаем паролем. Можно воспользоваться отдельной формой для входа, можно дать доступ админу сайта..</p>
            </div>
            <h3>Решение</h3>
            <div class="alert alert-success">

            </div>
        </div>
        <div id="task7" class="container tab-pane fade"><br>
            <h3>Задача №7</h3>
            <div class="alert alert-primary">
                <p>Реализуйте алгоритм, определяющий, все ли символы в строке встречаются только один раз.</p>
            </div>
            <h3>Решение</h3>
            <div class="alert alert-success">

            </div>
        </div>
    </div>
</div>

</body>
</html>
