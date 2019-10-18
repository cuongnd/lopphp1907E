<form action="<?php echo ADMIN_ROOT_SITE ?>index2.php?controller=branch&task=postadd" method="post">
    <table class="table table-bordered">
        <tr>
            <th>Title</th>
            <td><input class="form-control" type="text" name="title"></td>
        </tr>
        <tr>
            <th>Ordering</th>
            <td><input class="form-control" type="text" name="ordering"></td>
        </tr>
        <tr>
            <th>Description</th>
            <td>
                <textarea class="form-control" name="description"></textarea>
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
