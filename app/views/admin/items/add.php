<?php
include(APPDIR.'views/layouts/header.php');
include(APPDIR.'views/layouts/nav.php');
include(APPDIR.'views/layouts/errors.php');
?>

<h1>Add Item</h1>

<form method="post">

    <div class="row">

        <div class="col-md-6">

            <div class="control-group">
                <label class="control-label" for="DELETED"> DELETED</label>
                <input class="form-control" id="DELETED" name="DELETED" value="<?=(isset($_POST['DELETED']) ? $_POST['DELETED'] : '');?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="ID"> ID</label>
                <input class="form-control" id="ID" name="ID" value="<?=(isset($_POST['ID']) ? $_POST['ID'] : '');?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="NAME"> NAME</label>
                <input class="form-control" id="NAME" name="NAME" value="<?=(isset($_POST['NAME']) ? $_POST['NAME'] : '');?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="DESCRIPTION"> DESCRIPTION</label>
                <input class="form-control" id="DESCRIPTION" name="DESCRIPTION" value="<?=(isset($_POST['DESCRIPTION']) ? $_POST['DESCRIPTION'] : '');?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="ITEMTYPE"> ITEMTYPE</label>
                <input class="form-control" id="ITEMTYPE" name="ITEMTYPE" value="<?=(isset($_POST['ITEMTYPE']) ? $_POST['ITEMTYPE'] : '');?>" required  />
            </div>

        </div>

        <div class="col-md-6">

            <div class="control-group">
                <label class="control-label" for="COND"> CONDITION</label>
                <input class="form-control" id="COND" name="COND" value="<?=(isset($_POST['COND']) ? $_POST['COND'] : '');?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="IS_CONTAINER"> IS_CONTAINER</label>
                <input class="form-control" id="IS_CONTAINER" name="IS_CONTAINER" value="<?=(isset($_POST['IS_CONTAINER']) ? $_POST['IS_CONTAINER'] : '');?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="PARENT_ID"> PARENT_ID</label>
                <input class="form-control" id="PARENT_ID" name="PARENT_ID" value="<?=(isset($_POST['PARENT_ID']) ? $_POST['PARENT_ID'] : '');?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="ENTERED"> ENTERED</label>
                <input class="form-control" id="ENTERED" name="ENTERED" value="<?=(isset($_POST['ENTERED']) ? $_POST['ENTERED'] : '');?>" />
            </div>

            <div class="control-group">
                <label class="control-label" for="UPDATED"> UPDATED</label>
                <input class="form-control" id="UPDATED" name="UPDATED" value="<?=(isset($_POST['UPDATED']) ? $_POST['UPDATED'] : '');?>" />
            </div>

        </div>

    </div>

    <br>

    <p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button></p>

</form>

<?php include(APPDIR.'views/layouts/footer.php');?>
