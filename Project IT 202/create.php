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
   <link rel="stylesheet" href="create.css">
   <link rel="shortcut icon" href="images/Puff.PNG">

   <script type="text/javascript" language="javascript" src="js/create.js"></script>
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
      <form name="form" class="center" onsubmit="return validateForm()" method="post" action="http://www.randyconnolly.com/tests/process.php">
         <table>
               <thead>
                  <tr>
                     <th colspan="2">Enter New Book</th>
                  </tr>
               </thead>
               <tbody>
                  <tr>
                     <td>Book Catergory or Genre:</td>
                     <td>
                        <select name="genre" id="genre" required>
                           <option>Choose a catergory or genre</option>
                           <option>Action/Adventure</option>
                           <option>Comic Book/Graphic Novel</option>
                           <option>Mystery</option>
                           <option>Sc-Fi</option>
                           <option>Horror</option>
                           <option>Non-fiction</option>
                        </select>
                     </td>
                  </tr>
                  <tr>
                     <td>Book Code:</td>
                     <td>
                           <input type="code" id="code" name="code" min="1" maxlength="10" size="10" required>
                     </td>
                  </tr>
                  <tr>
                     <td>Book Name:</td>
                     <td><input type="text" min="2" maxlength="255" name="name" required></td>
                  </tr>
                  <tr>
                     <td>Book Description:</td>
                     <td><textarea name="description" min="25" maxlength="255" rows="5" cols="15" required></textarea>
                  </tr>
                  <tr>
                     <td>Book Price:</td>
                     <td><input type="number" id="number" name="price" min="5.00" maxlength="21" required></td>
                  </tr>
                  <tr>
                     <td><input type="reset"></td>
                     <td><input type="submit"></td>
                  </tr>
               </tbody>
         </table>
      </form>
   </main>
<footer>
   <h6>David Villafranca</h6>
   <h6>IT 202-001</h6>
   <h6>Semester Project Phase 2</h6>
   <h6>November 9, 2022</h6>
</footer>   
</body>
</html>