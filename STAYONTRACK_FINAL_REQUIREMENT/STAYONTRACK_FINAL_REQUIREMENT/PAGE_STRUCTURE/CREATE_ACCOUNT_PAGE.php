<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CREATE_ACCOUNT</title>
    <link rel="stylesheet" href="Create_account_page.css">
</head>
<?php 
    include('config.php');

    if(isset($_POST['submit'])){
       $sql="INSERT INTO tbl_accounts (firstname,lastname,email,age,password) VALUES (:fname, :lname, :email,:age,:pword)";
       $stmt=$conn->prepare($sql);
       $stmt->execute([':fname'=>$_POST['fname'],
       ':lname'=>$_POST['lname'],
       ':email'=>$_POST['email'],
       ':age'=>$_POST['age'],
       ':pword'=>$_POST['password'],
    ]);

    //redirects to login page after signing up
    if(isset($_POST['submit'])){
        header("Location: SIGN_UP_PAGE.php");
    }else{
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
                    <h2>Sign up for Stayontrack</h2>
                </div>
                <fieldset>
                    <label for="fname">Firstname <input type="text" name="fname" id="fname" placeholder="Enter your firstname" required></label>
                    <label for="lname">Lastname <input type="text" name="lname" id="lname" placeholder="Enter your lastname" required></label>
                    <label for="email">Email <input type="email" name="email" id="email" placeholder="Email" required></label>
                    <label for="age">Age <input type="number" name="age" id="age" min="13" max="120" placeholder="Enter your age" required></label>
                    <label for="password">Create password <input type="password" name="password" id="password" pattern="[a-z, 0-9]{8,}" placeholder="Enter your password" required></label>
                    <input type="submit" name="submit" id="submit" value="Sign up">
                </fieldset>
                <fieldset>
                    <hr>
                    <p>or</p>
                    <a href="#" id="signup">
                        <img src="ICON/pngtree-facebook-social-media-icon-png-image_6315968.png" alt="fb_icon" class="socmed_icon">
                        <span>Sign up with Facebook</span>
                    </a>
                    <a href="#" id="signup">
                        <img src="ICON/google-logo-vector-graphic-pixabay-15.png" alt="google_icon" class="socmed_icon">
                        <span>Sign up with Google</span>
                    </a>
                    <p>Already have an account? <a href="SIGN_UP_PAGE.php">Log in</a></p>
                </fieldset>
            </form>
        </div>
    </main>
</body>     
</html>