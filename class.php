<?php

class Menu {
    private $name;
    private $image;
    private $price;


    public function __construct($name,$image,$price,$page) {
        $this->name = $name;
        $this->image = $image;
        $this->price = $price;
        $this->page = $page;

    }

    public function getName() {
        return $this->name;
    }

    public function getImage() {
        return $this->image;
    }

    public function getPrice() {
        return $this->price;
    }

    public function getPage() {
        return $this->page;
    }
}

?>