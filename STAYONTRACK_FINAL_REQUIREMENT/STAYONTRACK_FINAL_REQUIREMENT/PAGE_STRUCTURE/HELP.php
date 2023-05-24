<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HELP</title>
    <link rel="stylesheet" href="help.css">
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
      <h1 class="subtitle">HELP</h1>
      <hr>
      <div class="help">
        <h1 class="help_title">StayonTrack 1.0</h1>
        <p class="reminder">StayonTrack is a spendings tracker website where you can manage your expenses in
          easiest way possible.</p>
          <div>
            <h2 class="getting_started">Getting Started</h2>
              <div>
                <h3 class="content_title">Cash</h3>
                <p class="contents">Upon opening the website, input your budget/cash to track if you are over
                  spending or under spending your money. In this way, you will gain better control of 
                  you spendings.
                  </p>
              </div>
              <div>
                <h3 class="content_title">Enter your Spendings</h3>
                <p class="contents">Simply log in your expenses by clicking the plus "+" button on the bottom-right 
                  of the screen in home tab. This will then be displayed and recorded on the platform.</p>
              </div>
              <div>
                <h3 class="content_title">Tracking</h3>
                <p class="contents">By default, your spendings will be automatically tallied and recorded per week but 
                  you can filter and update it  to monthly or yearly for a wider overview.</p>
              </div>
              <div>
                <h3 class="content_title">Categorization</h3>
                <p class="contents">When you add an expense, you will personally categorize it and give the item its 
                  specific name for the record. This will give you a good view overtime if you are 
                  spending your money on essential things or not. In this way, you will be able to
                  analyse you spendings with depth and hopefully learn something.
                  </p>
              </div>
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