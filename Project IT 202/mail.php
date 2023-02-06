<!--
   David Villafranca
   IT 202-001
   Project Phase 1
   Ocotber 6, 2022
-->
<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>

   <meta charset="utf-8">
   <title> 
      Puff's Book Store
   </title>
   <link rel="stylesheet" href="mail.css">
   <link rel="shortcut icon" href="images/Puff.PNG">

   <script type="text/javascript" language="javascript" src="js/mail.js"></script>
<body>
   <header>
      <img src="images/Puff.PNG" alt="Puff's Book Store" width="80"> 
      <p class="title">Puff's Book Store</p>

      <br>
      <br>

      <div style="text-align:center">
         <a href="home.html" >Home</a>
         <a href="create.php">Create</a>
         <a href="about.html">About</a>
         <a href="contact.html">Contact</a>
      </div>
   </header>
   
   <br>
   <br>

   <main>
      <form name="form" class="center" method="post" onsubmit="return validateForm()" action="http://www.randyconnolly.com/tests/process.php">
         <table>
               <thead>
                  <tr>
                     <th colspan="2">Join Mailing List!</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>First Name:</td>
                     <td>
                        <input type="text" id="firstName" name="firstName" min="2" maxlength="10" size="10" required>
                     </td>
                  </tr>
                  <tr>
                     <td>Last Name:</td>
                     <td>
                           <input type="text" id="lastName" name="lastName" min="5" maxlength="20" size="20" required>
                     </td>
                  </tr>
                  <tr>
                     <td for="email">Email:</td>
                     <td><input type="email" id="email" name="email"  maxlength="30" size="30" required></td>
                  </tr>
                  <tr>
                     <td>Address:</td>
                     <td><input name="text" name="address" min="10" maxlength="255" required>
                  </tr>
                  <tr>
                     <td>City or Town:</td>
                     <td><input type="text" id="cityTown" name="cityTown" min="5" maxlength="30" required></td>
                  </tr>
                  <tr>
                     <td>State:</td>
                     <td><input type="text" id="state" name="state" maxlength="2" required></td>
                  </tr>
                  <tr>
                     <td>Zip Code:</td>
                     <td><input type="number" id="zipCode" name="zipCode" min="5" maxlength="5" required></td>
                  </tr>
                  <tr>
                     <td>How did you hear about us?</td>
                     <td>
                        <select name="hear" id="hear" required>
                           <option>Choose an option</option>
                           <option>Newspaper/Magazine</option>
                           <option>Yellow Pages</option>
                           <option>Google Search</option>
                           <option>Billboard</option>
                           <option>Friend</option>
                           <option>Social Media</option>
                           <option>TV Ad</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td><input type="submit"></td>
                  </tr>
               </tbody>
         </table>
      </form>
   </main>
<footer>
   <h6>David Villafranca</h6>
   <h6>IT 202-001</h6>
   <h6>Semester Project Phase 1</h6>
   <h6>November 9, 2022</h6>
</footer>   
</body>
</html>