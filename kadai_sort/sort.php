<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>
        <?php
            // ソートする配列を宣言
            $nums = [15, 4, 18, 23, 10 ];        

            function sort_2way($array,$order) {
                
                //昇順指定
                if ($order === true) {

                    echo '昇順にソートします。<br>';
                    asort($array);
                    //  配列$arrayの要素を1つずつ順番に出力する
                    foreach ($array as $num) {
                        echo $num.'<br>';
                    }

                //降順指定
                } else {

                    echo '降順にソートします。<br>';
                    arsort($array);
                    //  配列$arrayの要素を1つずつ順番に出力する
                    foreach ($array as $num) {
                        echo $num.'<br>';
                    }
                }   

            }
    
            sort_2way($nums,true);
            
            sort_2way($nums,false);

        ?>
    </p>
</body>

</html>