<?php

Класс маршрута {
    опубликовать  статическую публичную функцию   ($path, $callback){
    $requestURI = $_SERVER['REQUEST_URI']; // Получаем URI по которому запрошена страница
        $paths = explode('/', $requestURI); // URI по которому проверяем (по нему и был запрос)
        если(strpos($path, "{") и $_SERVER['REQUEST_METHOD'] == "POST"){
        $uriChunks = explode('/',$path);
        если($uriChunks[1] == $paths[1]){
        выход($обратный вызов($пути[2]));
            }
 }иначе , если($path == $_SERVER['REQUEST_URI'] и $_SERVER['REQUEST_METHOD'] == "POST"){
        $обратный вызов();
 выход;
        }
    }

    получить  статическую публичную функцию  ($path, $callback){ // /article/{id}
    $requestURI = $_SERVER['REQUEST_URI']; // Получаем URI по которому запрошена страница
        $paths = explode('/', $requestURI); // URI по которому проверяем (по нему и был запрос)
        $content = "";
        если(strpos($path, "{") и $_SERVER['REQUEST_METHOD']== "ПОЛУЧИТЬ"){
        $uriChunks = explode('/',$path);
        если($uriChunks[1] == $paths[1]){
        $content = $обратный вызов();
                требуется один раз('template.php ');
 выход;
            }
 }иначе , если($path == '/'.$paths[1] и $_SERVER['REQUEST_METHOD']== "ПОЛУЧИТЬ") {
        $content = $обратный вызов();
            требуется один раз('template.php ');
 выход;
        }

    }
}