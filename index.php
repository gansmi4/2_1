<?php
$file = file_get_contents("base.json");
$decode = json_decode($file, true);
?>

<!DOCTYPE html>
<html lang="ru">

<head>
    <title>Домашнее задание к лекции 2.1 «Установка и настройка веб-сервера»</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/css/uikit.min.css" />
</head>

<body>

    <div class="uk-container uk-container-small uk-margin-large-top">
        <h1 class="uk-margin-medium-bottom">Телефонная книга</h1>
        <div class="uk-overflow-auto">
            <table class="uk-table uk-table-hover uk-table-middle">
                <caption></caption>
                <thead>
                    <tr>
                        <th class="uk-table-shrink"></th>
                        <th class="uk-table-small">Имя</th>
                        <th class="uk-table-small">Фамилия</th>
                        <th class="uk-table-expand">Адрес</th>
                        <th class="uk-table-small">Телефон</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach ($decode as $phonebook):?>
                    <tr>
                        <td><img class="uk-preserve-width uk-border-circle" src="<?=$phonebook['photo']; ?>" width="40" alt=""></td>
                        <td><?=$phonebook['firstName']; ?></td>
                        <td><?=$phonebook['lastName']; ?></td>
                        <td><?=$phonebook['address']; ?></td>
                        <td><?=$phonebook['phoneNumber']; ?></td>
                    </tr>
                <?php endforeach;?>

                </tbody>
            </table>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/js/uikit.min.js" integrity="sha256-vwtRoGE4E2kxfJX4j2kIo8SjdOvvSMhg1Rbl20iCguc="
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.21/js/uikit-icons.min.js" integrity="sha256-dcB3RqnuF4+TETccGg3TtO4CvzsE2fk2nIq/feKE+jE="
            crossorigin="anonymous"></script>

</body>

</html>