<?php
function get_products(){
    return[
        "1" =>[
            "title" => "DEATH ZONE",
            "img_kart" => "img/deth zone.png",
            "opis" => "Королевская битва. Зоны закрываются по таймеру. Мигрируй в центр если сможешь.",
            "ssil" => "https://www.youtube.com/embed/Cgpn_nYYiBw",
        ],
        "2" =>[
            "title" => "DEATH ZONE WITH ZONEE",
            "img_kart" => "img/deth zone2.png",
            "opis" => "Королевская битва. Зоны закрываются по таймеру. Теперь идти в центр сразу
            нельзя. зоны открываются по таймеру. для миграции каждый раз есть по 300 секунд.",
            "ssil" => "https://www.youtube.com/embed/Cgpn_nYYiBw",
        ],
        "3" =>[
            "title" => "CAPTURE THE COW",
            "img_kart" => "img/COW.png",
            "opis" => "Захват коровы это как захват флага только вместо флага корова. Кто приведет
            корову себе на базу 3 раза",
            "ssil" => "https://www.youtube.com/embed/I2x77taaZzE",
        ],
        "4" =>[
            "title" => "GEOMETRIA",
            "img_kart" => "img/geo.png",
            "opis" => "Абсолютная геометричность. Все игроки разделены утесами. Можно идти через
            центр, а можно и через задный",
            "ssil" => "0",
        ],
        "5" =>[
            "title" => "MYASORUBKA",
            "img_kart" => "img/MYASO.png",
            "opis" => "Чтобы победить надо удержать монумент 50 лет. У всех есть все военные здания и
            монастырь. 5 факторий
            обеспечивают ресурсами.",
            "ssil" => "https://www.youtube.com/embed/Wf13Kt0ZKHs",
        ],
        "6" =>[
            "title" => "KINGS & PINGWINS",
            "img_kart" => "img/ping.png",
            "opis" => "Пингвины сильные, живут в антарктиде и всегда голодны. Скорми им 20 крестьян и
            они перейдут на твою сторону.",
            "ssil" => "https://www.youtube.com/embed/lZ3l3dmSCqY",
        ],
        "7" =>[
            "title" => "LOVE THE KING",
            "img_kart" => "img/KING.png",
            "opis" => "В нашем королестве завелся бешеный король. Он бегает вокруг лабиринта и
            набивается к каждому встречному
            в друзья. Но его потеря равно поражение.",
            "ssil" => "0",
        ],
        "8" =>[
            "title" => "VSA KARTA ETO KYRGAN",
            "img_kart" => "img/45.jpg",
            "opis" => "Мой город идеален как карта для эпохи, ведь уровень инфраструктуры застрял
            где-то в 13 веке.",
            "ssil" => "0",
        ],
        "9" =>[
            "title" => "FOREST OF WONDERS",
            "img_kart" => "img/forest.png",
            "opis" => "Королевство пришло в упадок, но ходят слухи что в центре земель есть лес
            изобилующими богатвами. Найди их чтобы победить своих врагов.",
            "ssil" => "https://www.youtube.com/embed/FTn-_47aTYE",
        ],
        "10" =>[
            "title" => "KINGS RACING",
            "img_kart" => "img/KR.jpg",
            "opis" => "Добро пожаловать на гонки королей. Чтобы ускорить своего короля строй осадные
            башни. Чей король придет первым тот и победил.",
            "ssil" => "https://www.youtube.com/embed/H9KEPXm6aVM",
        ],
        "11" =>[
            "title" => "KINGS RACING WITH DEATH",
            "img_kart" => "img/KR2.jpg",
            "opis" => "То же самое что и первый вариант но с одним дополнительным условием. Если игрок
            потеряет всех крестьян и все ратуши он так же проигрывает.",
            "ssil" => "https://www.youtube.com/embed/H9KEPXm6aVM",
        ],

        ];
}
function get_product_attribute ($id, $attr){
    $products = get_products();
    $result = $products[$id][$attr] ?? null;
    return $result;
}

function get_product_title($id){
    return get_product_attribute($id, "title")
;}
function get_product_img_kart($id){
    return get_product_attribute($id, "img_kart")
;}
function get_product_opis($id){
    return get_product_attribute($id, "opis")
;}
function get_product_ssil($id){
    return get_product_attribute($id, "ssil")
;}