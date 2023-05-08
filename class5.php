<?php
abstract class Category
{

    abstract function getMyCategory();
};

class Sport extends Category

{
    public function getMyCategory()
    {
        return "sport";
    }
};

class Gossip extends Category
{
    public function getMyCategory()
    {
        echo "Gossip";
    }
};

class History extends Category
{
    public function getMyCategory()
    {
        return "storia";
    }
};
