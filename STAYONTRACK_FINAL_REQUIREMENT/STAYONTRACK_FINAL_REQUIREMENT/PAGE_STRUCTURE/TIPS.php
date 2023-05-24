<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TIPS</title>
    <link rel="stylesheet" href="tips.css">
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
      <h1 class="subtitle">TIPS</h1>
      <hr>
      <div class="housing">
        <h1>Videos</h1>
        <div class="videos flex">
          <iframe src="https://www.youtube.com/embed/Hm4ONQSRHEw" allowfullscreen></iframe>
          <iframe src="https://www.youtube.com/embed/c4NGcdiat4k" allowfullscreen></iframe>
          <iframe src="https://www.youtube.com/embed/TPX_OTvGk9k" allowfullscreen></iframe>
        </div>
      </div>
      <div class="housing">
        <h1>Articles</h1> 
        <div class="housingarticle flex">
          <a href="https://www.sunlife.com.ph/en/life-goals/grow-your-money/how-to-save-money-on-a-minimum-wage/" target="blank"><div><img src="https://www.sunlife.com.ph/content/dam/sunlife/regional/philippines/images/April%20Life%20Goal%20Article%203%20-%201200x600-9%20(1).jpg" alt="">How to save money on a minimum wage</div></a>
          <a href="https://www.sunlife.com.ph/en/life-goals/grow-your-money/smart-steps-to-keep-track-of-financial-goals/" target="blank"><div><img src="https://www.sunlife.com.ph/content/dam/sunlife/regional/philippines/images/Smart%20steps%20to%20stay%20on%20track%20of%20your%20financial%20goals_1200x600.jpg" alt="">Smart steps to stay on track of your financial goals</div></a>
          <a href="https://www.sunlife.com.ph/en/life-goals/grow-your-money/tips-on-how-to-prepare-for-the-future/" target="blank"><div><img src="https://www.sunlife.com.ph/content/dam/sunlife/legacy/assets/ph/Life%20Goals/Take%20care%20of%20your%20family/Preparing%20for%20the%20future%20for%20business%20owners%201200%20x%20600-min.png" alt="">Tips from an entrepreneur on how to prepare for the future</div></a>
          <a href="https://www.sunlife.com.ph/en/life-goals/grow-your-money/how-to-achieve-financial-stability-in-changing-times/" target="blank"><div><img src="https://www.sunlife.com.ph/content/dam/sunlife/regional/philippines/images/1200x600-13.jpg" alt="">How to achieve financial stability in changing times</div></a>
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