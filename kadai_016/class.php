<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP基礎 クラス、メソッド、コンストラクタ</title>
</head>
<body>
    <?php
        class Food {
            // プロパティ
            public $name;
            public $price;
        
            // メソッドを定義する
            public function show_price(int $price) {
                $this->price = $price;
            }
        
            // コンストラクタを定義する
            public function __construct(string $name, int $price) {
                $this->name = $name;
                $this->price = $price;
            }
        }
        
        class Animal {
            // プロパティ
            public $name;
            public $height;
            public $weight;
        
            // メソッドを定義する
            public function show_height(int $height) {
                $this->height = $height;
            }
        
            // コンストラクタを定義する
            public function __construct(string $name, int $height, int $weight) {
                $this->name = $name;
                $this->height = $height;
                $this->weight = $weight;
            }
        }
        
        // Foodクラスのインスタンスを作成する
        $bread = new Food('パン', 245);
        print_r($bread);
        echo '<br>';
        
        // Animalクラスのインスタンスを作成する
        $cat = new Animal('猫', 19, 35);
        print_r($cat).'<br>';
        echo '<br><br>';
        
        // Breadの価格を表示する
        echo 'パンの価格は'.$bread->price.'円です。<br>';
        
        // catの身長を表示する
        echo '猫の身長は'.$cat->height.'cmです。';
    ?>
</body>
</html>
