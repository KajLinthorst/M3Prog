<?

$voorspelling = [
    "ma" => 20,
    "di" => 21,
    "wo" => 29,
    "do" => 19,
    "vr" => 24,
    "za" => 22,
    "zo" => 23  
];

$images = [
    "ma" => "../assets/images/cloud.png",
    "di" => "../assets/images/rain.png",
    "wo" => "../assets/images/rain.png",
    "do" => "../assets/images/snow.png",
    "vr" => "../assets/images/cloud.png",
    "za" => "../assets/images/thunder.png",
    "zo" => "../assets/images/sun.png"  
];


$key= $_GET['dag'];
$output = $voorspelling[$key];
echo $output;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <img src="<?=$images[$key]?>">
</body>
</html>