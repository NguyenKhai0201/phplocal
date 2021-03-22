<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex4</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
<?php
//khai bao va dieu kien
$name=$lastname=$gender=$address=$magazines=$duration=$payment=$err="";
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(trim($_POST["lastName"])!=""){
        $lastname=$_POST["lastName"];
    }
    else{
        $err="Xin nhập đủ thông tin";
    }
    if(trim($_POST["firstName"])!=""){
        $name=$_POST["firstName"];
    }else{
        $err="Xin nhập đủ thông tin";
    }
    if(empty($_POST["gender"])){
        $err="Xin nhập đủ thông tin";
    }else{
        $gender=$_POST["gender"];
    }
    if(trim($_POST["address"])!=""){
        $address=$_POST["address"];
    }
    else{
        $err="Xin nhập đủ thông tin";
    }
    if(empty($_POST["time"])){
        $err="Xin nhập đủ thông tin";
    }
    else{
        $magazines=$_POST["time"];
    }
    if(empty($_POST["year"])){
        $err="Xin nhập đủ thông tin";
    }
    else{
        $duration=$_POST["year"];
    }
    if(empty($_POST["Payment"])){
        $err="Xin nhập đủ thông tin";
    }
    else{
        $payment=$_POST["Payment"];
    }
}
?>
<div class="container border">
    <h3 class="bg-success text-center">Subscription Form</h3>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <div class="bg-danger"><?php echo $err;?></div>
        <fieldset>
            <legend>Personal Information</legend>
            <label for="Lastname">Last Name</label>
            <input type="text" name="lastName" required />
            <label for="firstName">First Name</label>
            <input type="text" name="firstName" required />
            <div class="mt-3 mb-3">
                <label class="mr-2"><input type="radio" name="gender" value="male">Male</label>
                <label><input type="radio" name="gender" value="Female">Female</label>
            </div>
            Address:
            <textarea name="address" rows="4" cols="50"></textarea>
        </fieldset>
        <fieldset class="mt-3">
            <p>Magazines subscription for</p>
            <div class="mt-3">
                <input class="mr-2" type="checkbox" name="time" >Time
                <input class="mr-2" type="checkbox" name="time">Newsweek
                <input class="mr-2" type="checkbox" name="time">Sunday
                <input class="mr-2" type="checkbox" name="time">Vogue
                <input class="mr-2" type="checkbox" name="time">People
            </div>
        </fieldset>
        <fieldset class="mt-3">
            <legend>Duration</legend>
            <label><input class="mr-2"  type="radio" name="year">1 Year</label>
            <label><input class="mr-2" type="radio" name="year">3 Year</label>
            <label><input type="radio" name="year">5 Year</label>
        </fieldset>
        <fieldset class="mt-3">
            <legend>Payment options</legend>
            <label><input class="mr-2" type="radio" name="Payment">Demand Draft</label>
            <label><input type="radio" name="Payment">Credit Card</label>
        </fieldset>
        <div class="mt-3">
            <input type="submit" name="process" value="Process">
            <input class="ml-3" type="reset" name="reset" value="Reset">
        </div>
    </form>
</div>
<?php
//in ra
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(trim($_POST["lastName"]=="")&& trim($_POST["firstName"]=="")&& !empty($_POST["gender"])&& trim($_POST["address"]=="")&& !empty($_POST["time"])&& !empty($_POST["year"])&& !empty($_POST["Payment"])){
        ?>
        <script>
            const areYouSure=confirm('Do you want to order <?php echo $magazines. "magazins for".$duration."and to pay with".$payment;?>');
            if(areYouSure){
                alert("Thank you very much for you order,we will supply as soon as possible the magazins for you to the address: <?php echo "<br>";echo "Mr.".$lastname."va". $name ; echo "<br>"; echo $address;?>")
            }
        </script>
    <?php} }?>
</body>
</html>
