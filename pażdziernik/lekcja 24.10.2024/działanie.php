<!DOCTYPE html>
<html lang="pl-PL">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reszta z dzielenia</title>
    <style>
        body{
            background-color:skyblue;
            text-align:center;
        }
    </style>
</head>
<body>
    <?php
    class Reszta{
        public $a;
        public $b;
        public $wyn;
        function reszta(){
            $this->wyn =$this->a%$this->b;
            return $this->wyn;
        }
    }
    
$wynik=new Reszta();
$wynik->a=12;
$wynik->b=5;
if (is_numeric($wynik->a)) {
    if (is_numeric($wynik->b)) {
        echo "Reszta z dzielenia liczb $wynik->a i $wynik->b wynosi ". $wynik->reszta(); 
    } else {
         echo "Druga zmienna nie jest liczbą!!!";
        }
    
} 
else {
    echo "Pierwsza zmienna nie jest liczbą!!!!";
} 
 

?>
</body>
</html>