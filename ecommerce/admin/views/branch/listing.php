<table class="table table-bordered">
    <thead>
    <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Ordering</th>
        <th>description</th>
        <th><a href="<?php echo ADMIN_ROOT_SITE ?>index2.php?controller=branch&task=add" class="btn btn-primary">Add category</a></th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($data as $branch){ ?>
        <tr>
            <td><?php echo $branch['id'] ?></td>
            <td><?php echo $branch['title'] ?></td>
            <td><?php echo $branch['ordering'] ?></td>
            <td><?php echo $branch['description'] ?></td>
            <td><a href="<?php echo ADMIN_ROOT_SITE ?>index2.php?controller=branch&task=delete&id=<?php echo $branch['id'] ?>" class="btn btn-primary btn-danger">Delete</a><a href="<?php echo ADMIN_ROOT_SITE ?>index2.php?controller=branch&task=edit&id=<?php echo $branch['id'] ?>" class="btn btn-primary">Edit</a></td>
        </tr>
    <?php } ?>
    </tbody>
</table>
