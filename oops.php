<?php
class rafay
{
    public $id = 1;
    public $name;
    public $email;
    public $city;
    public function __destruct()
    {
        echo "This is a destructor <br>";
    }

    public function __construct($id)
    {
        echo "This is a constructor <br>";
        $this->id = $id;
    }

    public function random()
    {
        echo "Random Function <br>";
    }
}

$obj = new rafay($id);
$obj->random();
?>