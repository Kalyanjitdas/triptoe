<?php
    include'dbcon.php';
    if (isset($_POST['submit'])) 
    {
        $email = $_POST['emaill'];
        $password = $_POST['passs'];

        $email_search = "select * from registration where email ='$email'";
        $query = mysqli_query($con,$email_search);
        $email_count = mysqli_num_rows($query);
        if ($email_count) 
        {
            $email_pass = mysqli_fetch_assoc($query);
            $db_pass = $email_pass['password'];
            $_SESSION['username'] = $email_pass['fname']; 
            // $_SESSION['lname'] = $email_pass['lname'];            
            // $_SESSION['email'] = $email_pass['email'];
            

            $pass_decode = password_verify($password, $db_pass);                 
            
            if ($pass_decode) 
            {
                ?>
            <script>
                alert("Login Successful");
                location.href='index.php'
            </script>
            <?php        

            }
            else
            {
                ?>
            <script>
                alert("password incorrect");
                location.href='index.php'
            </script>
            <?php
                
            }
        }
        else
        {
            ?>
            <script>
                alert("Invalid Email");
                location.href='index.php'
            </script>
            <?php
        }
    }
    ?>