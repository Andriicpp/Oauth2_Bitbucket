<?php

class Autoloader
{
    public function addNamespace(string $prefix, string $dir)
    {

    }

    public function register()
    {
        /*этот метод запускается, когда у нас инициализируется новый объект класса
        если мы явно не указали, где находиться этот объект класса (не сделали require_once).
        Эта функция запускает метод autoload текущего класса (autoload($class))*/
        spl_autoload_register(array($this, 'autoload'));
    }

    public function autoload($class)
    {
        var_dump($class);
        /*сюда приходит фрагмент искомого класса*/
//        $file = null;
//        foreach ($this->map as $prefix => $dir){
//            if (strpos($class, $prefix)== !false) {
//                $class = explode('\\', $class);
//                array_shift($class);
//                $file = realpath($dir . DIRECTORY_SEPARATOR . implode(DIRECTORY_SEPARATOR, $class));
//            }
//        }
//
//        if (null !== $file){
//            include $file;
//        }
    }
}

/*создаем класс автозагрузчик*/
$autoload = new Autoloader();

/*добавляем в автозагрузчик namespace*/
$autoload->addNamespace('App', __DIR__ . DIRECTORY_SEPARATOR);

/*вызываем этот метод если мы явно не указали, где находиться объект класса(не сделали require_once)
создав объект ($autoload = new Autoloader())*/
$autoload->register();
