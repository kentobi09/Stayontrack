<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOG_IN</title>
    <link rel="stylesheet" href="Sign_up_page.css">
</head>
<?php
include('config.php');
if(isset($_POST['submit'])){
    $sql = "SELECT email FROM tbl_accounts WHERE email=:email AND password =:pword";
    echo "<p> $sql </p>";

    $stmt=$conn->prepare($sql);
    $stmt->execute([':email'=>$_POST['email'],
                   ':pword'=>$_POST['password']]) ;
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    if($row ==FALSE){
        //pakilagyan ng notification na mali yung login credentials
        header("Location: SIGN_UP_PAGE.php");
    }else{
        //redirect if tama yung login credentials
        header("Location: HOMEPAGE.php");
    }
}
?>
<body>
    <header class="flex">
        <img src="ICON/blue.png" alt="logo" class="logo_blue">
        <select id="lang" name="lang">
           <option value="english">English</option>
           <option value="filipino">Filipino</option>
           <option value="russian">Russian</option>
        </select>
    </header>
    <main>
        <aside>
            <img src="ICON/gray.png" alt="logo" class="logo">
            <img src="ICON/2719649.png" alt="" class="display">
            <img src="ICON/Budget-PNG-Image.png" alt="" class="display">
            <img src="ICON/Budget-PNG-Pic.png" alt="" class="display">
        </aside>
        <div class="form">
            <form action="" method="post">
                <div class="subtitle_area">
                    <img src="ICON/Budget-PNG-Free-Image.png" alt="budget_pic">
                    <h3 id="signup_description">Log in to StayonTrack</h3>
                </div>
                <fieldset>
                    <label for="email">Your Email <input id="email" type="text" name="email" placeholder="Enter your Email" required></label>
                    <label for="password">Password <input type="password" name="password" id="password" placeholder="Enter your password" required></label>
                    <p><a href="" class="forgot">Forgot password?</a></p>
                   <input type="submit" name="submit" id="button" value="Log in">
                </fieldset>
                <fieldset>
                    <hr>
                    <p>or</p>
                    
                    <a href="#" id="login">
                        <img src="ICON/pngtree-facebook-social-media-icon-png-image_6315968.png" alt="fb_icon" class="socmed_icon">
                        <span>Log in with Facebook</span>
                    </a>
                    <a href="#" id="login">
                        <img src="ICON/google-logo-vector-graphic-pixabay-15.png" alt="google_icon" class="socmed_icon">
                        <span>Log in with Google</span>
                    </a>
                    <p>Don't have an account yet? <a href="CREATE_ACCOUNT_PAGE.php">Create account</a></p>
                </fieldset>
            </form>
        </div>
    </main> 
</body>
</html>