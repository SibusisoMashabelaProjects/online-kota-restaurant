<?php include('partials/menu.php');?>

<div class="main-content">
    <div class="wrapper">
        <h2>Add admin</h2>

        <br><br>

        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Full Name</td>
                    <td><input type="text" name="full_name" placeholder="Enter your name"></td>
                    
                </tr>
                <tr>
                    <td>Surname</td>
                    <td><input type="text" name="surname" placeholder="Enter your surname"></td>
                    
                </tr>
                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="Enter your password"></td>
                    
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="Add Admin" class="btn-secondary">

                    </td>
                </tr>

            </table>

        </form>


    </div>


</div>

<?php include('partials/footer.php');?>

<?php
    if(isset($_POST['submit'])){
        echo "button Clicked";
    }
    else{
        echo "button not clicked";
    }
?>