<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AUTHENTICATOR | RATION ITEMS</title>
    <link rel="stylesheet" href="Authenticator_Ration_items_style1.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;1,300&display=swap" rel="stylesheet">
    <script type="text/javascript">
        function logout(){
            var x=confirm(" Are You Sure.. Do you want to Logout?");
            if(x==true)
            {
            return true;
            }
        else
            {
                return false;
            }
        
    }
    </script>
</head>
<body>
   <form method="post" action="Authenticator_Ration_items.php">
    <div class="wrapper">
        <div class="container">
            <div class="header">
             <div class="welcome-note">Welcome <?php session_start(); echo $_SESSION['auth']; ?></div>
             <div class="logout">
             <a href="./Authenticator_homepage.php" class="home-link">Home</a>
             <a href="../index.php" onclick="return logout()" class="logout-link">Logout</a>
             </div>
            </div> 
            
            <div class="content">
                <div class="content__header">
                 <div class="ration-note">Ration items for <?php echo " ID:{$_SESSION['smartcardID']}"; echo " Name:{$_SESSION['HolderName']}" ?></div>
                 <div class="back">
                    <a href="./Authenticator_Confirm_user.php" class="back-link">Back</a>
                 </div>
                </div>
                   <div class="content__ration-items">
                    <div class="row">
                        <div class="col1">
                            RICE
                        </div>
                        <div class="col2">
                            <select class="quantity" name="rice">
                                <option value="NIL">---</option>                                 
                                <option value="5Kg">5Kg</option>
                                <option value="10Kg">10Kg</option>
                                <option value="15Kg">15Kg</option>
                                <option value="20Kg">20kg</option>
                            </select>
                            <div class="max-limit">
                                ( Max 20KG )
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col1">
                            WHEAT
                        </div>
                        <div class="col2">
                            <select class="quantity" name="wheat">
                                <option value="NIL">---</option>                             
                                <option value="5Kg">1Kg</option>
                                <option value="10Kg">2Kg</option>
                                <option value="15Kg">3Kg</option>
                                <option value="20Kg">4kg</option>
                                <option value="20Kg">5kg</option>
                            </select>
                            <div class="max-limit">
                                ( Max 5KG )
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col1">
                            SUGAR
                        </div>
                        <div class="col2">
                            <select class="quantity" name="sugar">
                                <option value="NIL">---</option>                             
                                <option value="1Kg">1Kg</option>
                                <option value="5Kg">2Kg</option>
                            </select>
                            <div class="max-limit">
                                ( Max 2KG )
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col1">
                            SPLIT GRAMS
                        </div>
                        <div class="col2">
                            <select class="quantity" name="splitgrams">
                                <option value="NIL">---</option>                             
                                <option value="1Kg">1Kg</option>
                            </select>
                            <div class="max-limit">
                                ( Max 1KG )
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col1">
                            BLACK GRAMS
                        </div>
                        <div class="col2">
                            <select class="quantity" name="blackgrams">
                                <option value="NIL">---</option>                             
                                <option value="1Kg">1Kg</option>
                            </select>
                            <div class="max-limit">
                                ( Max 1KG )
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col1">
                            BENGAL GRAMS
                        </div>
                        <div class="col2">
                            <select class="quantity" name="bengalgrams">
                                <option value="NIL">---</option>                             
                                <option value="1Kg">1Kg</option>
                            </select>
                            <div class="max-limit">
                                ( Max 1KG )
                            </div>
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col1">
                            COOKING OIL
                        </div>
                        <div class="col2">
                            <select class="quantity" name="cookingoil">
                                <option value="NIL">---</option>                             
                                <option value="1Lit">1Lit</option>
                            </select>
                            <div class="max-limit">
                                ( Max 1Lit )
                            </div>
                        </div>
                    </div>
                    
                    <div class="row row-last">
                        <div class="col1">
                            KEROSENE
                        </div>
                        <div class="col2">
                            <select class="quantity" name="kerosene">
                                <option value="NIL">---</option>                             
                                <option value="1Lit">1Lit</option>
                            </select>
                            <div class="max-limit">
                                ( Max 1Lit )
                            </div>
                        </div>
                    </div>
                    <div class="confirm__ration-btn">
                        <input type="submit" name="confirm-ration" class="confirm-ration" value="CONFIRM">
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    </form>
</body>
</html>
    
<?php    

require('../connect1.php');
                     
$userID = $_SESSION['smartcardID'];
$name = $_SESSION['HolderName'];                     
$month = date("m-Y");//Gives Current month and year

$father = $_SESSION['father-name'];
$mother = $_SESSION['mother-name'];                    
$dob =  $_SESSION['DOB'];                    
$caste = $_SESSION['Caste'];
$religion = $_SESSION['Religion'];
$nationality = $_SESSION['Nationality'];
$familymembers = $_SESSION['Family-members'];
$address = $_SESSION['Address'];                     
$mobile = $_SESSION['Mobile'];                     
$email = $_SESSION['Email'];                                                           
                     
if(isset($_POST['confirm-ration'])){
    $rice = $_POST['rice'];
    $wheat = $_POST['wheat'];
    $sugar = $_POST['sugar'];
    $splitgrams = $_POST['splitgrams'];
    $blackgrams = $_POST['blackgrams'];
    $bengalgrams = $_POST['bengalgrams'];
    $cookingoil = $_POST['cookingoil'];
    $kerosene = $_POST['kerosene'];
    
    $sql1 = "select * from Ration_items where SmartCardID='$userID' and month='$month'";
    $res = $db->query($sql1);
    $row=$res->fetch_assoc();
    if($row["SmartCardID"] and $row["Month"]){
        echo "<script>";
        echo "alert('This user already added for this month');window.location=('http://localhost:80/SmartRation/Authenticator/Authenticator_Confirm_user.php')";
        echo "</script>";
    } else{
        $sql = "insert into Ration_items values ('$userID','$name','$month','$father','$mother','$dob','$caste','$religion','$nationality','$familymembers','$address','$mobile','$email','$rice','$wheat','$sugar','$splitgrams','$blackgrams','$bengalgrams','$cookingoil','$kerosene')";
        $db->query($sql);
        
        $sql2 = "insert into Unconfirmed_Users values ('$userID','$name','$month','$father','$mother','$dob','$caste','$religion','$nationality','$familymembers','$address','$mobile','$email','$rice','$wheat','$sugar','$splitgrams','$blackgrams','$bengalgrams','$cookingoil','$kerosene')";
        $db->query($sql2);
        
        if($sql == True){
        echo "<script>";
        echo "alert('Ration Items added Successfully');window.location=('http://localhost:80/SmartRation/Authenticator/Authenticator_Confirm_user.php')";
        echo "</script>";
        }
    }
    
}
?>

