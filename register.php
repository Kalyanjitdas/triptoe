<?php
include 'dbcon.php';
if(isset($_POST['submit']))
{
    $firstname =mysqli_real_escape_string($con, $_POST['fname']);
    $lastname =mysqli_real_escape_string($con, $_POST['lname']);
    $email =mysqli_real_escape_string($con, $_POST['email']);
    $password =mysqli_real_escape_string($con, $_POST['pass']);
    $cpassword =mysqli_real_escape_string($con, $_POST['cpass']);

    $pass = password_hash($password,PASSWORD_BCRYPT);
    $Cpass = password_hash($password,PASSWORD_BCRYPT);

        $emailquery = "select * from registration where email= '$email' ";
        $query = mysqli_query($con, $emailquery);
        $emailcount= mysqli_num_rows($query);
        if($emailcount>0)
        {
            ?>
            <script>
                alert("Email is already registered");
                location.href='index.php';
            </script>
            <?php
        }
        else
        {
            if($password === $cpassword )
            {
                $insertquery = "insert into registration(fname, lname, email, password, token, status) VALUES ('$firstname','$lastname','$email','$pass','abcds','active')";
                $iquery = mysqli_query($con, $insertquery);
                if($iquery)
                {
                    ?>
                    <script>
                        alert("Account Created Successfully");
                        location.href='index.php';
                    </script>
                    <?php
                }
                else
                {
                         ?>
                    <script>
                        alert("Transaction failed!");
                        location.href='index.php';
                    </script>
                    <?php
                }
            }
        }
}
?>