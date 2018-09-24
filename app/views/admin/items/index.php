<?php
include(APPDIR.'views/layouts/header.php');
include(APPDIR.'views/layouts/nav.php');
?>

<h1>Items</h1>

<?php include(APPDIR.'views/layouts/errors.php');?>

<p><a href="/items/add" class="btn btn-xs btn-info">Add Item</a></p>

<div class='table-responsive'>
    <table class='table table-striped table-hover table-bordered'>
    <tr>
        <th>DELETED</th>
        <th>ID</th>
        <th>NAME</th>
        <th>DESCRIPTION</th>
        <th>ITEMTYPE</th>
        <th>COND</th>
        <th>IS_CONTAINER</th>
        <th>PARENT_ID</th>
        <th>ENTERED</th>
        <th>UPDATED</th>
    </tr>
    <?php foreach($items as $row) { ?>
    <tr>
        <td><?=htmlentities($row->DELETED);?></td>
        <td><?=htmlentities($row->ID);?></td>
        <td><?=htmlentities($row->NAME);?></td>
        <td><?=htmlentities($row->ITEMTYPE);?></td>
        <td><?=htmlentities($row->COND);?></td>
        <td><?=htmlentities($row->IS_CONTAINER);?></td>
        <td><?=htmlentities($row->PARENT_ID);?></td>
        <td><?=htmlentities($row->ENTERED);?></td>
        <td><?=htmlentities($row->UPDATED);?></td>
        <td>
            <a href="/items/edit/<?=$row->ID;?>" class="btn btn-xs btn-warning">Edit</a>
            <a href="javascript:del('<?=$row->ID;?>','<?=$row->NAME;?>')" class="btn btn-xs btn-danger">Delete</a>
        </td>
    </tr>
    <?php } ?>
    </table>
</div>

<script language="JavaScript" type="text/javascript">
function del(ID, title) {
    if (confirm("Are you sure you want to delete '" + title + "'?")) {
        window.location.href = '/items/delete/' + ID;
    }
}
</script>

<?php include(APPDIR.'views/layouts/footer.php');?>
