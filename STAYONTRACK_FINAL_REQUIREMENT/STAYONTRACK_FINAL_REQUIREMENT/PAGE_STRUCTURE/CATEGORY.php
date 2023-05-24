<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CATEGORY</title>
    <link rel="stylesheet" href="category.css">
</head>

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
    <div>
        <input type="checkbox" name="sidebar" id="sidebar">
        <label for="sidebar"><img src="ICON/icons8-menu-50.png" alt="menu" class="menu_icon"></label>
        <div class="navigation">
           <div class="profile">
              <img src="ICON/nigga.jpg" alt="profile">
              <p>Russel Guerrero</p>
              <p>*****</p>
           </div>
           <div class="nav">
                 <nav>
                    <hr>
                    <a href="HOMEPAGE.php"><img class="nav_icon" src="ICON/icons8-home-24 (1).png" alt="home_icon"><span>HOME</span></a>
                    <a href="TRANSACTION.php"><img class="nav_icon" src="ICON/icons8-budgeting-48.png" alt="transac_icon"><span>TRANSACTION</span></a>
                    <a href="CATEGORY.php"><img class="nav_icon" src="ICON/icons8-filing-cabinet-50.png" alt="category_icon"><span>CATEGORY</span></a>
                    <a href="TIPS.php"><img class="nav_icon" src="ICON/icons8-bulb-32.png" alt="tips_icon   "><span>TIPS</span></a>
                    <br>
                    <br>
                    <a href="SETTINGS.php"><img class="nav_icon" src="ICON/icons8-setting-24.png" alt="settings_icon"><span>SETTINGS</span></a>
                    <a href="HELP.php"><img class="nav_icon" src="ICON/icons8-about-30.png" alt="help_icon"><span>HELP</span></a>
                    <hr>
                    <a href="SIGN_UP_PAGE.php"><img class="nav_icon" src="ICON/icons8-logout-30.png" alt="logout_icon"><span>LOG OUT</span></a>
                 </nav>
           </div>  
        </div>   
      </div>
    <div class="main-content">
        <h1 class="subtitle">CATEGORY</h1>
        <hr>
        <div class="housing">
          <div class="wrapper details">
              <h2>Food</h2>
          </div>
          <div class="wrapper details">
              <h2>Clothing</h2>
          </div>
          <div class="wrapper details">
              <h2>Transportation</h2>
          </div>
          <div class="wrapper details">
              <h2>Bills</h2>
          </div>
          <div class="wrapper details">
              <h2>Education</h2>
          </div>
          <div class="wrapper details">
              <h2>Electronics</h2>
          </div>
          <div class="wrapper details">
              <h2>Social</h2>
          </div>
          <div class="wrapper details">
              <h2>Insurance</h2>
          </div>
          <div class="wrapper details">
              <h2>Beauty</h2>
          </div>
          <div class="wrapper details">
            <h2>Health</h2>
          </div>
          <div class="wrapper details">
              <h2>Shopping</h2>
          </div>
          <div class="wrapper details">
              <h2 class="add">Add Category</h2>
          </div>
        </div>
        <footer id="footer">
          <hr>
          <p>Copyright 2022</p>
        </footer>
    </div>
   </main>
</body>

</html>