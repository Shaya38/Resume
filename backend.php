<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="./style.css">    
</head>    
<body>
    
    

    <div class="container">

        <?php if (empty($_POST['fname'])): ?>
            <div class="error"><?php echo "First name is missing.";  ?></div>
        <?php else: ?>
            <div class="item"><?php echo $_POST['fname'] ?> </div>            
        <?php endif; ?>

        

        <?php if (empty($_POST['lname'])): ?>
            <div class="error"><?php echo "last name is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['lname'] ?> </div>
        <?php endif; ?>
        

        
        <?php if (empty($_POST['birthday'])): ?>
            <div class="error"><?php echo "birthday is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['birthday'] ?> </div>
        <?php endif; ?>

        

        <?php if (empty($_POST['National Code'])): ?>
            <div class="error"><?php echo "National Code is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['National Code'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['Number'])): ?>
            <div class="error"><?php echo "Number is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Number'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['email'])): ?>
            <div class="error"><?php echo "email is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['email'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['Photo'])): ?>
            <div class="error"><?php echo "Photo is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Photo'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['Grade'])): ?>
            <div class="error"><?php echo "Grade is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Grade'] ?> </div>
        <?php endif; ?>


        
        <?php if (empty($_POST['Education Evidence'])): ?>
            <div class="error"><?php echo "Education Evidence is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Edution Evidence'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['Education Level'])): ?>
            <div class="error"><?php echo "Education Level is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Education Level'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['Education Place'])): ?>
            <div class="error"><?php echo "Education Place is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Education Place'] ?> </div>
        <?php endif; ?>

    

        <?php if (empty($_POST['Resume'])): ?>
            <div class="error"><?php echo "Resume is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Resume'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['City'])): ?>
            <div class="error"><?php echo "City is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['City'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['Province'])): ?>
            <div class="error"><?php echo "Province is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Province'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['phone'])): ?>
            <div class="error"><?php echo "phone is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['phone'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['Address'])): ?>
            <div class="error"><?php echo "Address is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Address'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['Post Code'])): ?>
            <div class="error"><?php echo "Post Code is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Post Code'] ?> </div>
        <?php endif; ?>


        
        <?php if (empty($_POST['username'])): ?>
            <div class="error"><?php echo "username is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['username'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['pwd'])): ?>
            <div class="error"><?php echo "Password is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['pwd'] ?> </div>
        <?php endif; ?>



        <?php if (empty($_POST['Recovery Key'])): ?>
            <div class="error"><?php echo "Recovery Key is missing.";  ?></div>
            <?php else: ?>
                <div class="item"><?php  echo $_POST['Recovery Key'] ?> </div>
        <?php endif; ?>





        

    </div>

</body>
</html>

