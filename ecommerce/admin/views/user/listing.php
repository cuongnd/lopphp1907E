<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Full name</th>
        <th>User name</th>
        <th>email</th>
        <th>type</th>
        <th>note</th>
        <th><a href="<?php echo ADMIN_ROOT_SITE ?>index2.php?controller=user&task=add" class="btn btn-primary">Add user</a></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $user){ ?>
        <tr>
            <td><?php echo $user['id'] ?></td>
            <td><?php echo $user['full_name'] ?></td>
            <td><?php echo $user['username'] ?></td>
            <td><?php echo $user['email'] ?></td>
            <td><?php echo $user['type'] ?></td>
            <td><?php echo $user['note'] ?></td>
            <td><a href="<?php echo ADMIN_ROOT_SITE ?>index2.php?controller=user&task=delete&id=<?php echo $user['id'] ?>" class="btn btn-primary btn-danger">Delete</a><a href="<?php echo ADMIN_ROOT_SITE ?>index2.php?controller=user&task=edit&id=<?php echo $user['id'] ?>" class="btn btn-primary">Edit</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
