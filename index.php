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
if(isset($_POST["height"])&&isset($_POST["weight"])){
    $weight= $_POST["weight"];
    $height=$_POST["height"];
    $bmi=$weight/($height *$height);
    echo "chỉ số pmi".$bmi;
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
                    <input type="text" class="form-control" name="weight" value="<?php echo $height ?>">
                </div>
                <button type="submit" name="calo" class="btn btn-primary">Tính</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>