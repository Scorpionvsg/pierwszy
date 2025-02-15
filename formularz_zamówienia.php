<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zamówienia</title>
    <style>
        span{
            color:red;
        }
        .ERROR{
            border:2px solid red;
            background-color:lightblue;
        }
        form{
            padding: 10px;
            background-color:lightgreen;
        }
        </style>
</head>
<body>
    <?php
    $validform=true;
    $product_error='';
    if($_SERVER["REQUEST_METHOD"]==="POST"){
        if(EMPTY(TRIM($_POST["product_name"]))){
            $product_error="Podaj nazwe towaru";
            $validform=false;
        }else{
            $_POST["product_name"]=htmlspecialchars($_POST["product_name"]);
        }//=====================================================
        /*if($validform){in_array
            echo"poszło";
        }*/
        if(EMPTY($_POST["pak"])){
            $pack_error="wybierz opcje pakowania";
            $validform=false;
        }else{
           // $_POST["pak"]=htmlspecialchars($_POST["pak"]);
        }//=====================================================
        /*if($validform){in_array
            echo"poszło";
        }*/
    }
    ?>
    <form method="post">
        
            <label for="product_name">Nazwa towaru </label><span>*</span><br>
            <input type="text" id="product_name" name="product_name" class="<?=$product_error ?'ERROR':'';?>" value=<?=$_POST['product_name']??''?>><br>
            <span><?=$product_error?></span><br>

            
        Wybierz opcje pakowania: <span>*</span><br>
        
            <input type="checkbox" id="1" name="pak[]" value="koperta" ><label for="1">koperta</label><br>
            <input type="checkbox" id="2" name="pak[]" ><label for="2">folia</label><br>
            <input type="checkbox" id="3" name="pak[]" ><label for="3">folia bąbelkowa</label><br>
            <input type="checkbox" id="4" name="pak[]" ><label for="4">karton</label><br>
            <input type="checkbox" id="5" name="pak[]" ><label for="5">karton z usztywnieniem</label><br><span><?=$pack_error?></span><br>
    
        Podaj wagę paczki: <span>*</span><br>
        <input type="radio" name="waga" ><label for="waga">do 2 kg</label><br>
        <input type="radio" name="waga" ><label for="waga">od 2 do 5 kg</label><br>
        <input type="radio" name="waga" ><label for="waga">od 5 do 10kg</label><br>
        <input type="radio" name="waga" ><label for="waga">od 10 do 15 kg</label><br>
        <br>

        
        Email kontaktowy <span>*</span><br>
        <input type="email" ><br><br>
        
        
        Dodatkowe informacje <span>*</span><br>
        <textarea id="text" name="text" cols="30" rows="6" ></textarea><br><br>
        
        <input type="checkbox" name="box" ><label>Zgoda na przetwarzanie danych <span>*</span></label><br><br>
        <input type="submit" name="wysl" value="Wyślij" >
    </form>
    <?php
    print_r($_POST);?>
</body>
</html>