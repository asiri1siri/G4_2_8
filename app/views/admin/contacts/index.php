<?php
include(APPDIR.'views/layouts/header.php');
include(APPDIR.'views/layouts/nav.php');
?>

<h1>Contacts</h1>

<?php include(APPDIR.'views/layouts/errors.php');?>

<p><a href="/contacts/add" class="btn btn-xs btn-info">Add Contact</a></p>

<div class='table-responsive'>
    <table class='table table-striped table-hover table-bordered'>
    <tr>
        <th>ENABLED</th>
        <th>ID</th>
        <th>NAME</th>
        <th>USERNAME</th>
        <th>USERTYPE</th>
        <th>EMAIL</th>
        <th>ACTIONS</th>
    </tr>
    <?php foreach($contacts as $row) { ?>
    <tr>
        <td><?=htmlentities($row->ENABLED);?></td>
        <td><?=htmlentities($row->ID);?></td>
        <td><?=htmlentities($row->NAME);?></td>
        <td><?=htmlentities($row->USERNAME);?></td>
        <td><?=htmlentities($row->USERTYPE);?></td>
        <td><?=htmlentities($row->EMAIL);?></td>
        <td>
<!--        <a href="/contacts/view/<?=$row->ID;?>" class="btn btn-xs btn-info">View</a>    -->
            <a href="/contacts/edit/<?=$row->ID;?>" class="btn btn-xs btn-warning">Edit</a>
            <a href="javascript:del('<?=$row->ID;?>','<?=$row->NAME;?>')" class="btn btn-xs btn-danger">Delete</a>
        </td>
    </tr>
    <?php } ?>
    </table>
</div>

<script language="JavaScript" type="text/javascript">
function del(ID, title) {
    if (confirm("Are you sure you want to delete '" + title + "'?")) {
        window.location.href = '/contacts/delete/' + ID;
    }
}
</script>

<?php include(APPDIR.'views/layouts/footer.php');?>