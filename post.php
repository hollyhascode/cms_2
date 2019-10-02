<?php 
   include 'header.php';  
?> 
<?php 
   include 'nav.php';  
?> 

   
      
      <main>
     
<?php
       
function getPostDetailsFromDatabase() {
    // Get the post title
    $postTitle = rawurldecode($_GET["title"]);


    // Get the post that matches the postTitle
    include_once 'includes/db_connect.php';
    $sql = "SELECT * FROM posts WHERE title='" . $postTitle . "'";
    $result = mysqli_query($conn, $sql);


    // Get the first row from the result as an associative array
    $postDetails = mysqli_fetch_assoc($result);
    return $postDetails;
}
?>

      
      <div class="container-copy"> 
    


      <h1><?php echo $postDetails["title"];?> </h1> 
      <div class="author"><?php echo $postDetails["author"];?></div> 
      <div class="date"><?php echo $postDetails["date"]; ?></div> 
      <div class="copy-container post-content"> 
                 <?php echo $postDetails["content"]; ?> 

              

       </div> 
       </div> 
      </main>
      <?php 
   include 'footer.php';  
?> 
      </main>
     </body>
     </html>