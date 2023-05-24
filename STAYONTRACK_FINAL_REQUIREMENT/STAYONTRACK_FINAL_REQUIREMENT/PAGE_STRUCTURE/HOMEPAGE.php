<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOMEPAGE</title>
    <link rel="stylesheet" href="Homepage.css">
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
      <div class="flex shadow outside_expense">
         <h3 class="expense_label">Expense<span class="right red">3,400</span></h3>
         <h3 class="expense_label">Budget<span class="right blue">5,000</span></h3>
         <hr>
         <h3 class="expense_label">Balance<span class="right green">1,600</span></h3>
      </div>
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
         <h1 class="quote">"Spend it right, think twice and be wise"</h1>
            <p class="nagsabi">-sabi ko</p>
            <hr>
         <div class="housing flex">
            <div class="report flex shadow">
                  <h3 class="summary flex">Recent Summary<span>October 1, 2022</span></h3>
                  <div class="chart_housing flex">
                     <div class="chart flex">
                        <div class="inchart">
      
                        </div>
                     </div>
                     <div class="chart_content">
                        <p class="green small">*Food (40%)</p>
                        <p class="blue small">*Beauty (25%)</p>
                        <p class="orange small">*Transportation (35%)</p>
                     </div>
                  </div>
            </div>
            <div class="container flex shadow">
                  <h3 class="expense_label">Expense<span class="right red">3,400</span></h3>
                  <h3 class="expense_label">Budget<span class="right blue">5,000</span></h3>
                  <hr>
                  <h3 class="expense_label">Balance<span class="right green">1,600</span></h3>
            </div>
         </div>
         
         <table>
            <caption>Recent Expenses</caption>
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
                  <td>Beauty</td>
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
                  <td>Beauty</td>
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
                  <td>Beauty</td>
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
                  <td>Beauty</td>
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
                  <td>Beauty</td>
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
         <div class="add_spendings">
            <input type="checkbox" name="add_button" id="add_button">
            <label for="add_button" class="add_label"></label>
            <div class="add_contents">
               <div class="spendings_content flex">
                  <div class="input_spendings flex">
                     <div class="date_item flex">
                        <label for="item">Item_Name <input type="text" name="item_name" id="item" class="item"></label>                
                        <label for="date">Date_Time <input type="datetime-local" name="spend_date" id="date" class="date"></label>
                     </div>
                     <div class="spendings flex">
                        <div class="category flex">
                           <p>Category</p>
                        </div>
                        <div class="calculator">
                           <input type="text" id="display" name="input_calc">
                           <div class="buttons flex">
                              <button type="button" class="number" value="7" name="7">7</button>
                              <button type="button" class="number" value="8" name="8">8</button>
                              <button type="button" class="number" value="9" name="9">9</button>
                              <button type="button" class="operator" value="*" name="*">&times;</button>
                              <button type="button" class="number" value="4" name="4">4</button>
                              <button type="button" class="number" value="5" name="5">5</button>
                              <button type="button" class="number" value="6" name="6">6</button>
                              <button type="button" class="operator" value="/" name="/">&divide;</button>
                              <button type="button" class="number" value="1" name="1">1</button>
                              <button type="button" class="number" value="2" name="2">2</button>
                              <button type="button" class="number" value="3" name="3">3</button>
                              <button type="button" class="operator" value="+" name="+">+</button>
                              <button type="button" class="number" value="%" name="%">%</button>
                              <button type="button" class="number" value="0" name="0">0</button>
                              <button type="button" class="number" value="." name=".">.</button>
                              <button type="button" class="operator" value="-" name="-">-</button>
                              <button type="button" id="clear">C</button>
                              <button type="button" id="add" class="green_bg">Add</button>
                              <?php
                              
                           
                              ?>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="display_spend flex">
                     <textarea name="display_spend" id="display_spend" placeholder="***Recently added spendings will be shown***" cols="40" rows="50"> 
   Candy                             10
   Pasahe                            35
   Itlog                             10
                     </textarea>
                     <input type="submit" value="Done" class="done">
                  </div>
               </div>
            </div>
         </div>
         <footer id="footer">
            <hr class="bottomline">
            <p>Copyright 2022</p>
         </footer>
      </div>
   </main>
</body>

</html>