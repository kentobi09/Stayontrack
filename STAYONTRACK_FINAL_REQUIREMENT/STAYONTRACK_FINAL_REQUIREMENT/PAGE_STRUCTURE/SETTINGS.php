<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SETTINGS</title>
    <link rel="stylesheet" href="settings.css">
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
      <h1 class="subtitle">SETTINGS</h1>
      <hr>
      <div class="settings">
        <div class="housing">
          <h3 class="settings_part">Personalization</h3>  
          <div class="personalize padding">
            <input type="checkbox" name="settings" id="theme" class="personalize_input input">
            <label for="theme" class="personalize_label label"><p class="edit">Theme</p></label>
            <div class="personalize_content padding expand">
              <p class="reminder">Choose your style by changing the platform theme color.</p>
              <label for="default"><input type="radio" name="theme" id="default" class="default" checked>Default</label>
              <label for="dark"><input type="radio" name="theme" id="dark" class="dark">Dark</label>
              <label for="light"><input type="radio" name="theme" id="light" class="light">Light</label>
            </div>
          </div>
          <div class="personalize padding">
            <input type="checkbox" name="settings" id="currency" class="personalize_input input">
            <label for="currency" class="personalize_label label"><p class="edit">Currency</p></label>
            <div class="personalize_content padding expand">
              <p class="reminder">Choose what currency you want your money to be displayed.</p>
              <label for="none"><input type="radio" name="currency" id="none" checked>None</label>
              <label for="peso"><input type="radio" name="currency" id="peso">Peso</label>
              <label for="dollar"><input type="radio" name="currency" id="dollar">DuhLahh</label>
              <label for="yen"><input type="radio" name="currency" id="yen">Yen</label>
              <label for="euro"><input type="radio" name="currency" id="euro">Euro</label>
              <label for="riyal"><input type="radio" name="currency" id="riyal">Riyal</label>
            </div>
          </div>
        </div>

        <div class="housing">
          <h3 class="settings_part">Spendings</h3>  
          <div class="spendings padding">
            <input type="checkbox" name="settings" id="budget" class="spendings_input input">
            <label for="budget" class="spendings_label label"><p class="edit">Budget Mode</p></label>
            <div class="spendings_content padding expand">
              <form action="">
                <p class="reminder">By enabling budget mode, your spendings by default will be tracked weekly against a fixed amount.
                  You can change this in Time Period settings.
                </p>
                <label for="enable"><input type="checkbox" name="enable" id="enable" class="enable">Enable</label>
                <div class="enable_content expand">
                 <label for="amount">Budget Amount <input type="number" name="budget_amount" id="amount" class="amount">  <input type="button" value="Set" class="green"></label>
                </div>
              </form>
            </div>
          </div>
          <div class="spendings padding">
            <input type="checkbox" name="settings" id="time" class="spendings_input input">
            <label for="time" class="spendings_label label"><p class="edit">Time Period</p></label>
            <div class="spendings_content padding expand">
              <p class="reminder">The selected time period will be the way how your spendings will be tracked and tallied, this is by default weekly.</p>
              <label for="daily"><input type="radio" name="time_period" id="daily">Daily</label>
              <label for="weekly"><input type="radio" name="time_period" id="weekly" checked>Weekly</label>
              <label for="monthly"><input type="radio" name="time_period" id="monthly">Monthly</label>
              <label for="yearly"><input type="radio" name="time_period" id="yearly">Yearly</label>
            </div>
          </div>
        </div>

        <div class="housing">
          <h3 class="settings_part">General</h3>  
          <div class="general padding">
            <input type="checkbox" name="settings" id="reminder" class="general_input input">
            <label for="reminder" class="general_label label"><p class="edit">Reminder</p></label>
            <div class="general_content padding expand">
              <p class="reminder">Choose how frequently you want to be reminded to enter your spendings.</p>
              <label for="frequency">Frequency
                  <span class="right">
                    <select name="frequency" id="frequency">
                      <option value="every_week" selected>Every Week</option>
                      <option value="every_day">Every Day</option>
                      <option value="every_month">Every Month</option>
                      <option value="never">Never</option>
                    </select>
                  </span>
              </label>
              <label for="time">Time<span class="right"><input type="time" name="frequency_time" id="time"></span></label>
              <input type="button" value="Set" class="center button green">
            </div>
          </div>
          <div class="general padding">
            <input type="checkbox" name="settings" id="acct" class="general_input input">
            <label for="acct" class="general_label label"><p class="edit">Account</p></label>
            <div class="general_content padding expand">
              <p class="reminder">This is by default a personal account.</p>
              <label for="account_name">Account Name<span class="right"><input type="text" name="account_name" id="account_name" placeholder="e.g Russel Guerrero"></label>
            </div>
          </div>
          <div class="general padding">
            <input type="checkbox" name="settings" id="privacy" class="general_input input">
            <label for="privacy" class="general_label label"><p class="edit">Privacy</p></label>
            <div class="general_content padding expand">
              <p class="reminder"><center>***Privacy contents***</center></p>
            </div>
          </div>
          <div class="general padding">
            <input type="checkbox" name="settings" id="backup" class="general_input input">
            <label for="backup" class="general_label label"><p class="edit">Backup and Restore</p></label>
            <div class="general_content padding expand">
              <p class="reminder">Backup and restore your data with Google Drive. First of all, you need connect an account to proceed with the process.
              </p>
              <input type="button" value="CONNECT" class="center button green">
            </div>
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