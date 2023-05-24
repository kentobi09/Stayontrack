<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TRANSACTION_DETAILS</title>
    <link rel="stylesheet" href="transaction_details.css">
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
         <h1 class="subtitle none">TRASACTION-DETAILS</h1>
         <hr>
         <div class="housing">
           <h1 class="date none">October 1 - 7, 2022</h1>
           <div class="wrapper">
              <div class="chart_housing">
                 <div class="chart">
                    <div class="inchart">
     
                    </div>
                 </div>
                 <div class="chart_content">
                    <p class="green small">Food (40%)</p>
                    <p class="blue small">Beauty (25%)</p>
                    <p class="orange small">Transportation (35%)</p>
                 </div>
              </div>
             <div class="expense_label flex">
               <h2>Total Expense<span class="right red">15000</span></h2>
               <h2>Cash<span class="right blue">20000</span></h2>
               <h2>Balance<span class="right green">5000  </span></h2>
             </div>
           </div>
         </div>
         <table>
            <caption>Expenses</caption>
           <thead>
              <th>
                 <tr>
                  <td>Date</td>
                  <td>Item</td>
                  <td>Price</td>
                  <td>Category</td>  
                 </tr>
              </th>
           </thead>
           <tbody>
              <tr>
                 <td>11-03-22</td>
                 <td>itlog</td>
                 <td>10</td>
                 <td>Food</td>
              </tr>
              <tr>
                 <td>11-04-22</td>
                 <td>cream</td>
                 <td>43</td>
                 <td>Non essential</td>
              </tr>
              <tr>
                 <td>11-04-22</td>
                 <td>mantika</td>
                 <td>35</td>
                 <td>Food</td>
              </tr>
              <tr>
                 <td>11-04-22</td>
                 <td>chicken</td>
                 <td>200</td>
                 <td>Food</td>
              </tr>
           </tbody>
        </table>
         <footer id="footer">
           <hr>
           <p>Copyright 2022</p>
         </footer>
      </div>
   </main>
</body>

</html>