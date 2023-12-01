<?php
//$colours = ["red", "orange", "yellow", "green", "blue", "navy", "purple"];
//
//for ($i = 0; $i < count($colours); $i++){
//    echo "<div style='color:".$colours[$i]."'>".$colours[$i]."</div>";
//}
//$zodiac = [
//    "Aries"=>["21.03","20.04"],
//    "Taurus"=>["21.04","20.05"],
//    "Gemini"=>["21.05","21.06"],
//    "Cancer"=>["22.06","22.07"],
//    "Leo"=>["23.07","23.08"],
//    "Virgo"=>["24.08","23.09"],
//    "Libra"=>["24.09","23.10"],
//    "Scorpio"=>["24.10","22.11"],
//    "Sagittarius"=>["23.11","21.12"],
//    "Capricorn"=>["22.12","20.01"],
//    "Aquarius"=>["21.01","20.02"],
//    "Pisces"=>["21.02","20.03"]];

//if (isset($_POST["inputDate"])){
//    $_POST["inputDate"];
//    $day =  substr($_POST["inputDate"], -2);
//    $month =  substr($_POST["inputDate"], -5, 2);
//    var_dump($day);
//    var_dump($month);
//    $sign = "";
//    foreach ($zodiac as $item){
//        $sDay = substr($item[0], 0, 2);
//        $sMonth = substr($item[0], -2, 2);
//        $eDay = substr($item[1], 0, 2);
//        $eMonth = substr($item[1],-2, 2);
//        if ((int)$day > (int)$sDay && (int)$month == (int)$sMonth || (int)$day < (int)$eDay && (int)$month == (int)$eMonth){
//            $sign = array_search($item, $zodiac);
//            echo "<p>Zodiac sign for the date ".$_POST["inputDate"]." is $sign</p>";
//        }
//    }
//}
//else{
//    echo "<p>Missing date</p>";
//}

//foreach ($zodiac as $item){
//    echo "<p>$item</p>";
//}

echo '<form action="index.php" method="post">
        <div>
        <input type="submit" class="btn btn-primary m-1" value="Login" name="login">
        <input type="submit" class="btn btn-primary m-1" value="Register" name="register">
</div>
</form>';

if (isset($_POST["register"])) {
    regForm();
}elseif (isset($_POST["login"])){
    loginForm();
}else {
    echo "<p>Missing data</p>";
}

function regForm()
{
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
    echo '
    <form action="index.php" method="post">
    <div class="container">
        <div>
            <label class="form-label"> Username:
            <input class="form-control" type="text" name="regData[username]" required>
        </label>
        </div>
        <div>
            <label class="form-label"> Password:
            <input class="form-control" type="password" name="regData[password]" required>
        </label>
        </div>
        <div>
            <label class="form-label"> Confirm password:
            <input class="form-control" type="password" required>
        </label>
        </div>
        <div>
            <label class="form-label"> Date of birth:
            <input class="form-control" type="date" name="regData[DoB]" required>
        </label>
        </div>
        <div>
            <label class="form-label"> Email:
            <input class="form-control" type="email" name="regData[email]" required>
        </label>
        </div>
        <div>
        <input type="submit" class="btn btn-primary">
            <input type="reset" class="btn btn-primary">
            </div>
    </div>
    </form>';
}

function loginForm()
{
    echo '<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">';
    echo '
    <form action="index.php" method="post">
    <div class="container">
        <div>
            <label class="form-label"> Username:
            <input class="form-control" type="text" name="loginData[username]" required>
        </label>
        </div>
        <div>
            <label class="form-label"> Password:
            <input class="form-control" type="password" name="loginData[password]" required>
        </label>
        <div><input type="submit" class="btn btn-primary">
            <input type="reset" class="btn btn-primary"></div>
    </div>
    </form>';
}
