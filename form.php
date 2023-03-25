<?php
    if (isset($_POST["userName"]) && isset($_POST["eduForm"]) && isset($_POST["userName"]) &&
    isset($_POST["courses"])) {

        $name = htmlentities($_POST["userName"]);
        $eduForm = htmlentities($_POST["eduForm"]);
        $hostel = "нет";
        $courses = $_POST["courses"];

        $output = "
            <!DOCTYPE html>
            <html>
                <head>
                    <title>Form output</title>
                </head>
                <body>    
                    Вас зовут: $name <br>
                    Выбранная форма обучения: $eduForm <br>
                    Выбранные курсы:
                    <ul>";
                        foreach($courses as $item) {
                            $output .= "<li>" . htmlentities($item) . "</li>";
                        }
                        $output .= "</ul></body></html>";

                        echo $output;

    } else {
        echo "Введены некорректные данные";
    }