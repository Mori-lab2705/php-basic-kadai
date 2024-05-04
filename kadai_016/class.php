<?php
class Animal{
    private $name;
    private $height;
    private $weight;

    public function __construct(string $name, int $height, int $weight){
        $this->name = $name;
        $this->height = $height;
        $this->weight = $weight;
    }

    public function show_height(){
        echo $this->height;
    }
}

class Food{
    private $name;
    private $price;

    public function __construct(string $name, int $price){
        $this->name = $name;
        $this->price = $price;
    }

    public function show_price(){
        echo $this->price;
    }
}

$animal = new Animal('犬', 50, 4);

$food =new Food('リンゴ', 100);

print_r($animal);
echo '<br>';
print_r($food);
echo '<br>';
$animal->show_height();
echo '<br>';
$food->show_price();
?>