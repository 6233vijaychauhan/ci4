<h2><?php echo $title; ?></h2>
 
<table border='1' cellpadding='4'>
    <tr>
        <td><strong>First Name</strong></td>
        <td><strong>Last Name</strong></td>
        <td><strong>Email</strong></td>
        <td><strong>Password</strong></td>
        <td><strong>Mobile</strong></td>
        <td><strong>Salary</strong></td>
        <td><strong>Current Date</strong></td>
        <td><strong>Action</strong></td>
    </tr>
<?php foreach ($news as $news_item): ?>
        <tr>
            <td><?php echo $news_item['fname']; ?></td>
            <td><?php echo $news_item['lname']; ?></td>
            <td><?php echo $news_item['email']; ?></td>
            <td><?php echo $news_item['password']; ?></td>
            <td><?php echo $news_item['mobile']; ?></td>
            <td><?php echo $news_item['salary']; ?></td>
            <td><?php echo date('d M Y',strtotime($news_item['cdate'])); ?></td>            
            <td>
                <a href="<?php echo site_url('news/'.$news_item['slug']); ?>">View</a> | 
                <a href="<?php echo site_url('news/edit/'.$news_item['id']); ?>">Edit</a> | 
                <a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>" onClick="return confirm('Are you sure you want to delete?')">Delete</a>
            </td>
        </tr>
<?php endforeach; ?>
</table>
