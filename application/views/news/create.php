<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/create'); ?>    
    <table>
        <tr>
            <td><label for="fname">First Name</label></td>
            <td><input type="input" name="fname" size="50" /></td>
        </tr>
        <tr>
            <td><label for="lname">Last Name</label></td>
            <td><input type="input" name="lname" size="50" /></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="input" name="email" size="50" /></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td><input type="input" name="password" size="50" /></td>
        </tr>
        <tr>
            <td><label for="mobile">Mobile</label></td>
            <td><input type="input" name="mobile" size="50" /></td>
        </tr>
        <tr>
            <td><label for="salary">Salary</label></td>
            <td><input type="input" name="salary" size="50" /></td>
        </tr>        
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Add User" /></td>
        </tr>
    </table>    
</form>
