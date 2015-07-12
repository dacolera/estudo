<?php

    ini_set('display_errors',1);
    ini_set('display_startup_erros',1);
    error_reporting(E_ALL);


    require "vendor/autoload.php";

    echo "Abstract Factory";
    $image = new \DesignPatterns\Creational\AbstractFactory\HtmlFactory();
    echo $image->createPicture("images/sad_rock.png","Pedra triste")->render();
    print '<hr>';
    $jsonImage = new \DesignPatterns\Creational\AbstractFactory\JsonFactory();
    echo $jsonImage->createPicture("images/sad_rock.png","Pedra triste")->render();
    print '<hr>';

    echo "Builder";
    $createBike = new \DesignPatterns\Creational\Builder\Director();
    $bike = $createBike->build(new \DesignPatterns\Creational\Builder\BikeBuilder());
    print '<pre>'; var_dump($bike); print '<hr>';
    $createCar = new \DesignPatterns\Creational\Builder\Director();
    $car = $createCar->build(new \DesignPatterns\Creational\Builder\CarBuilder());
    print '<pre>'; var_dump($car); print '<hr>';
    $createBoat = new \DesignPatterns\Creational\Builder\Director();
    $boat = $createBoat->build(new \DesignPatterns\Creational\Builder\BoatBuilder());
    print '<pre>'; var_dump($boat); print '<hr>';

    print "FactoryMethod";
    //$makeException = new \DesignPatterns\Creational\FactoryMethod\GermanFactory();
    //$makeException->create('spaceship');
    print '<hr>';

    $pool = new \DesignPatterns\Creational\Pool\Pool(
        "\\DesignPatterns\\Creational\\Pool\\Worker");
    var_dump($pool);
    $processor = new \DesignPatterns\Creational\Pool\Processor($pool);

    $processor->process('image');
    var_dump($pool);
    print '<hr>';

    print "Prototype<br><br>";

    $fooPrototype = new \DesignPatterns\Creational\Prototype\FooBookPrototype();
    $barPrototype = new \DesignPatterns\Creational\Prototype\BarBookPrototype();

    // now lets say we need 10,000 books of foo and 5,000 of bar ...

    $inicioFoo = microtime(true);
    for ($i = 0; $i < 1000000; $i++) {
        $book2 = new \DesignPatterns\Creational\Prototype\FooBookPrototype();
        $book2->setTitle('Foo Book No ' . $i);
    }
    echo "Tempo gasto sem o modo prototype foi de " .   (microtime(true) - $inicioFoo) . " segundos<br>";



    $inicioFooClone = microtime(true);
    for ($ix = 0; $ix < 1000000; $ix++) {
        $book = clone $fooPrototype;
        $book->setTitle('Foo Book No ' . $ix);
    }
    echo "Tempo gasto com o modo prototype foi de " .  (microtime(true) - $inicioFooClone) . " segundos<br>";


   /* print "<br>";
    for ($i = 0; $i < 5000; $i++) {
        $book = clone $barPrototype;
        $book->setTitle('Bar Book No ' . $i);
    }

    var_dump($book);*/
