<?php
    <?php
    //task1
    $task_arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
    function Even_number ($arr){
        for ($index = 0; $index < count($arr); $index++){
            if ($arr[$index] % 2 == 0){
                echo "$arr[$index] - четное\n";
            }else {
                echo "$arr[$index] - нечетное\n";
            }
        };
    }
    Even_number($task_arr);
    //task2
    $task2_arr = [5, 11, 100, 89, 15];
    function Comparing($arr): array{
        $min = $arr[0];
        $max = $arr[0];
        $average = 0;
        $length = count($arr);
        while ($current_value = array_shift($arr)) {
            if ($current_value > $max){
                $max = $current_value;
            };
            if ($current_value < $min){
                $min = $current_value;
            };
            $average += $current_value;
        }
        $average /= $length;
        // echo $max , $min , $average;
        return $newArr = [$max, $min, $average];
    }
    Comparing($task2_arr);

    //task3
    $box = [
        [
            0 => 'Тетрадь',
            1 => 'Книга',
            2 => 'Настольная игра',
            3 => [
                'Настольная игра',
                'Настольная игра',
            ],
            4 => [
                [
                    'Ноутбук',
                    'Зарядное устройство'
                ],
                [
                    'Компьютерная мышь',
                    'Набор проводов',
                    [
                        'Фотография',
                        'Картина'
                    ]
                ],
                [
                    'Инструкция',
                    [
                        'Ключ'
                    ]
                ]
            ]
        ],
        [
            0 => 'Пакет кошачьего корма',
            1 => [
                'Музыкальный плеер',
                'Книга'
            ]
        ]
     ];

     function search($search_item, $arr) {
        var_dump($arr);
        echo "test\n";
        if (!is_array($arr)){
            if ($arr === $search_item){
                return true;
            }
        }
        foreach($arr as $search_box => $item){
            var_dump($search_box);
            var_dump($item);
            if (is_array($item)){
                echo "тест3\n";
                if (search($search_item, $item)){
                    echo "тест5";
                    echo "$item\n";
                    return true;
                }
            }
            if($search_box === $search_item){
                echo "тест6";
                echo "$item и $search_item\n";
                return true;
            }
        }
        return false;
        echo "тест2";
        echo "$item\n";
     }


     $test = search('Ключ', $box);

     var_dump($test);
