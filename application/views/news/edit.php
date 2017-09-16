<h2><?php echo $title; ?></h2>
 
<?php echo validation_errors(); ?>
 
<?php echo form_open('news/edit/'.$news_item['id']); ?>
    <table>        
        <tr>
            <td><label for="fname">First Name</label></td>
            <td><input type="input" name="fname" size="50" value="<?php echo $news_item['fname']; ?>" /></td>
        </tr>
        <tr>
            <td><label for="lname">Last Name</label></td>
            <td><input type="input" name="lname" size="50" value="<?php echo $news_item['lname']; ?>" /></td>
        </tr>
        <tr>
            <td><label for="email">Email</label></td>
            <td><input type="input" name="email" size="50" value="<?php echo $news_item['email']; ?>" /></td>
        </tr>
        <tr>
            <td><label for="password">Password</label></td>
            <td><input type="input" name="password" size="50" value="<?php echo $news_item['password']; ?>" /></td>
        </tr>
        <tr>
            <td><label for="mobile">Mobile</label></td>
            <td><input type="input" name="mobile" size="50" value="<?php echo $news_item['mobile']; ?>" /></td>
        </tr>
        <tr>
            <td><label for="salary">Salary</label></td>
            <td><input type="input" name="salary" size="50" value="<?php echo $news_item['salary']; ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="submit" value="Edit news item" /></td>
        </tr>
    </table>
</form>
