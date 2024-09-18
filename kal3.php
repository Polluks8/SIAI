<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="<?php ($_SERVER["PHP_SELF"]);?>" method="post">    
    <input type="number" name="num01" placeholder="Liczba pierwsza">
    <select name="operator">
        <option value="+">+</option>
        <option value="-">-</option>
        <option value="*">*</option>
        <option value="/">/<option>
        <option value="%">%</option>
</select>
    <input type="number" name="num02" placeholder="Liczba druga">
    <button>Oblicz</button>
</form>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){

}
$operator = $_POST['operator'];
$num01 = $_POST['num01'];
$num02 = $_POST['num02'];


if ($operator === "+"){
$obliczenie=$num01 + $num02;
}
if ($operator === "-"){
$obliczenie=$num01 - $num02;
}
if ($operator === "*"){
    $obliczenie=$num01 * $num02;
}
if ($operator ==="/"){
    $obliczenie=$num01 / $num02;
}
if ($operator ==="%"){
    $obliczenie=$num01 % $num02;
}
echo "wynik wynosi: ". $obliczenie;
?>
</body>
</html>