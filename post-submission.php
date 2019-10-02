<?php 
   include 'header.php';  
?> 
<?php 
   include 'nav.php';  
?> 
      
      <main>
      <ul>
       <h2>Submit a Post</h2> 

       <form action="includes/submit-post.php" method="POST">
    Title:<br>
    <input type="text" placeholder="Title" name="title">
    <br>
    Author:<br>
    <input type="text" placeholder="Author" name="author">
    <br>
    Date:<br>
    <input type="type" placeholder="Date" name="date">
    <br>
    Date:<br>
    <input type="textarea" placeholder="Content" name="content">

    <br><br>
    <button type="submit"  name="submit" value="Submit">Submit</button>
  </form> 
      </ul>
      
      </main>
      <?php 
   include 'footer.php';  
?> 
   
</body>
</html>

