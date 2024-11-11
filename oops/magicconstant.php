<?php

namespace MyNamespace;

echo " <h1>Magic constant in PHP OOPs</h1>";

echo "This is line no : " . __LINE__ . "<br>";
echo "This is line no : " . __LINE__ . "<br>";

echo "file path " . __FILE__ . "<br>";

echo "Folder path " . __DIR__ . "<br>";

function showName()
{
    echo "The function name : " . __FUNCTION__ . "<br>";
}

showName();

trait myTrait
{
    public function getTraitName()
    {
        return __TRAIT__;
    }
}


class MyClass
{

    public function getClassName()
    {
        echo "Method name " . __METHOD__ . "<br>";
        return __CLASS__;
    }

    public function getNamespace()
    {
        return __NAMESPACE__;
    }

    use myTrait;
}

$test = new MyClass();
echo  $test->getClassName();
echo "<br>";
echo $test->getNamespace();
echo "<br>";
echo $test->getTraitName();
