<form action="<?php echo ADMIN_ROOT_SITE ?>index2.php?controller=user&task=postedit&id=<?php echo $data['id'] ?>" method="post">
    <table class="table table-bordered">
        <tr>
            <th>Full name</th>
            <td><input class="form-control" value="<?php echo $data['full_name'] ?>"  type="text" name="full_name"></td>
        </tr>
        <tr>
            <th>User Name</th>
            <td>
                <input type="text" readonly class="form-control" value="<?php echo $data['username'] ?>" name="username"/>
            </td>
        </tr>
        <tr>
            <th>Email</th>
            <td>
                <input type="text"value="<?php echo $data['email'] ?>" class="form-control" name="email"/>
            </td>
        </tr>
        <tr>
            <th>Password</th>
            <td>
                <input type="text" class="form-control" name="password"/>
            </td>
        </tr>
        <tr>
            <th>User type</th>
            <td>
                <select name="type" class="form-control">
                    <option value="admin">Admin</option>
                    <option value="client">Client</option>
                    <option value="published">Published</option>
                </select>
            </td>
        </tr>
        <tr>
            <th>Block</th>
            <td>
                <select name="block" class="form-control">
                    <option value="1">Yes</option>
                    <option value="0">No</option>

                </select>
            </td>
        </tr>
        <tr>
            <th>Note</th>
            <td>
                <textarea class="form-control" name="note"></textarea>
            </td>
        </tr>
        <tr>
            <td colspan="2">
                <div class="pull-right">
                    <button type="submit" class="btn btn-primary" name="save">Apply</button>
                    <button type="submit" class="btn btn-primary" name="save_close">Save & close</button>
                </div>
            </td>
        </tr>
    </table>
</form>
