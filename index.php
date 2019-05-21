<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<?php
$weight=$height='';
if(isset($_POST["height"]) && isset($_POST["weight"])){
    $weight = $_POST["weight"];
    $height = $_POST["height"];
    $bmi = $weight/($height * $height);
    echo "chỉ số bmi của bạn:".$bmi;
    if($bmi<18.5){
        echo"bạn thuộc loại gầy";
    } elseif ($bmi>=18.5 && $bmi<=24.9){
        echo"bạn thuộc loại bình thường";
    }elseif ($bmi>=25 && $bmi<=29.9){
        echo"bạn thuộc loại hơi béo";
    }elseif ($bmi>=30 && $bmi<=34.9){
        echo"bạn thuộc loại béo phì cấp độ 1";
    }elseif ($bmi>=35 && $bmi<=39.9){
        echo"bạn thuộc loại béo phì cấp độ 2";
    }elseif ($bmi>=40){
        echo"bạn thuộc loại béo phì cấp độ 3";
    }
}
?>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <h3>Tính chỉ số bmi</h3>
            <form name="bmi" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">Chiều cao(m)</label>
                    <input type="text" class="form-control"  name="height" value="<?php echo $height ?>">

                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Cân nặng(kg)</label>
                    <input type="text" class="form-control" name="weight" value="<?php echo $weight ?>">
                </div>
                <button type="submit" name="calo" class="btn btn-primary">Tính</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>