<?php
 $title= $email= $materials = ''; 
$error = array('email'=>'','title'=>'','materials'=>'');
if(isset($_POST['submit'])){
   // echo htmlspecialchars($_POST['email']);
  //  echo htmlspecialchars($_POST['title']);
   // echo htmlspecialchars($_POST['materials']);
   //chexck email
   if(empty($_POST['email'])){
    $error['email'] = 'an email is required <br />';

}
   else{
       $email = $_POST['email'];
       if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
          $error['email'] = 'email must be valid email address <br />';
       }

       }
  // echo htmlspecialchars($_POST['email']);

    if(empty($_POST['title'])){
    $error['title'] = 'a title is required <br />';
}
      else{
        $title= $_POST['title'];
        if(!preg_match('/^[a-zA-Z\s]+$/',$title)){
           $error['title'] = 'title must be letters and spaces only for title <br />';
        }
  //  echo htmlspecialchars($_POST['email']);
}
 
    if(empty($_POST['materials'])){
    $error['materials'] =  'a materials is required <br />';
}
       else{
        $materials= $_POST['materials'];
        if(!preg_match('/^([a-zA-Z\s]+)(,\s*[a-zA-Z\s]*)*$/',$materials)){
           $error['materials'] ='materilas must be letters and spaces seperated with comma only for materials   <br />';
        }
   // echo htmlspecialchars($_POST['email']);
 }
 if(array_filter($error)){
     echo 'errors in the form';
 }
 else{
         echo 'form is valid';
         header('location: C:\xampp\htdocs\tuts\templates\index.php');
     }
 
}//end


?>
<!DOCTYPE html>
<html lang="en">
 
<?php   require('C:\xampp\htdocs\tuts\templates\header.php'); ?>
<sectionc class="container grey-text">

<h4 class="center"class="btn brand z-depth-0" >ADD STYLE</h4>
</section>
<form action="add.php" class="white"method="POST">

<label >Your Email</label>
<input type="text"name="email" value="<?php echo $email ?>">
<div class="red-text"><?php echo $error['email']; ?> </div>
<label >new styel title</label>
<input type="text" name="title" value="<?php echo $title ?>">
<div class="red-text"><?php echo $error['title']; ?> </div>
<label >materials used (comma seperated):</label>
<input type="text"  name="materials" value="<?php echo $materials ?>">
<div class="red-text"><?php echo $error['materials']; ?></div>
<div class="center">
<input type="submit" name="submit" value ="submit">
</div>

  
</form>
<?php   require('C:\xampp\htdocs\tuts\templates\footer.php'); ?>



</html>