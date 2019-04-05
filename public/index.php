<!DOCTYPE html>
<html>
<body>
<?php

function hint (int $A, float $B, string $C, bool $D)
{
    var_dump($A, $B, $C, $D);
}
echo "teste hint!<br>";
echo hint(123, 1234, "abcd", $TRUE);

?>
</body>
</html>