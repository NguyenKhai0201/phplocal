<!DOCTYPE html>
<html lang="en">
<head>
    <title>ex2</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container-fluid float-left border mt-3 w-75">
            <div class="form-group text-center bg-light">
                <h3 class="text-center p-2">Registration Form</h3>
            </div>
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
                <div class="form-group">
                    <label for="Firstname">First name</label>
                    <input class="form-control" type="text" name="name" required />
                </div>
                <div class="form-group">
                    <label for="Lastname">Last name</label>
                    <input class="form-control" type="text" name="lastname" required />
                </div>
                <div class="form-group">
                    <label form="inputEmail">Email</label>
                    <input class="form-control" type="email" name="email" required/>
                </div>
                <div class="form-group">
                    <label>Gender</label>
                    <label><input type="radio" name="gender" value="male">Male</label>
                    <label><input type="radio" name="gender" value="female">Female</label>
                </div>
                <div class="form-group">
                    <label>State</label>
                    <select name="state" class="form-control">
                        <option value="1">Johor</option>
                        <option value="2">Massachusetts</option>
                        <option value="3">Washington</option>
                    </select>
                </div>
                <div class="form-group">
                    <label>Hobbies</label><br>
                    <label><input type="checkbox" name="hobbies" value="badminton">Badminton</label>
                    <label><input type="checkbox" name="hobbies" value="football">Football</label>
                    <label><input type="checkbox" name="hobbies" value="bicycle">Bicycle</label>
                </div>
                <div class="form-group">
                    <input class="bg-info" type="submit" name="save" value="saveRecord">
                    <input type="reset" name="reset" value="Reset">
                </div>
            </form>
        </div>
    </div>
    <div class="border float-right mt-3 w-25">
        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <div class="form-group bg-light">
                <h3 class="p-2">Featured</h3>
            </div>
            <div class="form-group ml-2">
                <h4>Special title treatment</h4>
            </div>
            <p class="ml-2">With supporting text below as a natural lead-in to additional content.</p>
            <div class="form-group ml-2">
                <input class="bg-info" type="submit" name="goSomewhere" value="Go somewhere">
            </div>
        </form>
    </div>
</body>
</html>
