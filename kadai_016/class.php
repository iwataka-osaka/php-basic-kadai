<!DOCTYPE html>
 <html lang="ja">
 
 <head>
     <meta charset="UTF-8">
     <title>クラスを2つ作ってそれぞれのインスタンスを出力しよう</title>
 </head>
 
 <body>
     <p>
         <?php
            // クラスを定義する
            class food {
                // プロパティを定義する
                private $name;
                private $price;

                // コンストラクタを定義する
                public function __construct(string $name, int $price) {
                    $this->name = $name;
                    $this->price = $price;
                }

                // メソッドを定義する
                public function show_price() {
                    echo $this->price . '円'. '<br>';
                }
            }
 
            // クラスを定義する
            class animal {
                // プロパティを定義する
                private $name;
                private $height;
                private $weight;

                // コンストラクタを定義する
                public function __construct(string $name, int $height, int $weight) {
                    $this->name = $name;
                    $this->height = $height;
                    $this->weight = $weight;
                }

                // メソッドを定義する
                public function show_height() {
                    echo $this->height . 'cm'. '<br>';
                }
            }

            //Step3. インスタンスを作成し、出力する
            // インスタンス化する
            $zoo_food = new food('海苔巻き',500); 
            // インスタンスを出力する。
            print_r($zoo_food);
            echo '<br>';

            // インスタンス化する
            $zoo_animal = new animal('ライオン',200,100); 
            // インスタンスを出力する。
            print_r($zoo_animal);
            echo '<br>';

            //Step4. メソッドへアクセスする
            $zoo_food->show_price();
            $zoo_animal->show_height();
        ?>
     </p>

 </body>
 
 </html>
