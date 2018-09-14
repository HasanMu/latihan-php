<?php
    $str = <<<EOD
    Contoh dari string
    spanning multy lines
    using herodic syntax.
EOD;

    class foo {
        var $foo;
        var $bar;

        function foo(){
            $this->foo = 'Foo';
            $this->bar = array('Bar1', 'Bar2', 'Bar3');
        }
    }

    $foo = new foo();
    $name = 'Juned';

    echo <<<EOT
    <u>$str</u><br>
    My name is "<b>$name</b>". I am printing some <b>$foo->foo</b>.
Now, I am printing some <b>{$foo->bar[1]}</b>.
This should print a capital 'A': \x41
EOT;
?>