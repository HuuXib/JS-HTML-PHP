<?php
$x = 21.272137;
echo "Zadeklarowana wartość zmiennej \$x: $x <br>";
settype($x, 'string');
echo "Wartość zmiennej \$x po zmianie typu na string: $x <br>";
settype($x, 'integer');
echo "Wartość zmiennej \$x po zmianie typu na integer: $x <br>";
settype($x, 'double');
echo "Wartość zmiennej \$x po zmianie typu na double: $x <br>";
?>