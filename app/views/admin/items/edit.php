<?php
include(APPDIR.'views/layouts/header.php');
include(APPDIR.'views/layouts/nav.php');
include(APPDIR.'views/layouts/errors.php');
?>

<h1>Edit Item</h1>

<form method="post">

    <div class="row">

        <div class="col-md-6">

            <div class="control-group">
                <label class="control-label" for="DELETED"> DELETED</label>
                <input class="form-control" id="DELETED" name="DELETED" value="<?=$item->DELETED;?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="ID"> ID</label>
                <input class="form-control" id="ID" name="ID" value="<?=$item->ID;?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="NAME"> NAME</label>
                <input class="form-control" id="NAME" name="NAME" value="<?=$item->NAME;?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="DESCRIPTION"> DESCRIPTION</label>
                <input class="form-control" id="DESCRIPTION" name="DESCRIPTION" value="<?=$item->DESCRIPTION;?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="ITEMTYPE"> ITEMTYPE</label>
                <input class="form-control" id="ITEMTYPE" name="ITEMTYPE" value="<?=$item->ITEMTYPE;?>" required  />
            </div>

        </div>

        <div class="col-md-6">

            <div class="control-group">
                <label class="control-label" for="COND"> CONDITION</label>
                <input class="form-control" id="COND" name="COND" value="<?=$item->COND;?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="IS_CONTAINER"> IS_CONTAINER</label>
                <input class="form-control" id="IS_CONTAINER" name="IS_CONTAINER" value="<?=$item->IS_CONTAINER;?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="PARENT_ID"> PARENT_ID</label>
                <input class="form-control" id="PARENT_ID" name="PARENT_ID" value="<?=$item->PARENT_ID;?>" required  />
            </div>

            <div class="control-group">
                <label class="control-label" for="ENTERED"> ENTERED</label>
                <input class="form-control" id="ENTERED" name="ENTERED" value="<?=$item->ENTERED;?>"  />
            </div>

            <div class="control-group">
                <label class="control-label" for="UPDATED"> UPDATED</label>
                <input class="form-control" id="UPDATED" name="UPDATED" value="<?=$item->UPDATED;?>"  />
            </div>

        </div>

    </div>

    <p><button type="submit" class="btn btn-success" name="submit"><i class="fa fa-check"></i> Submit</button></p>

</form>

<?php include(APPDIR.'views/layouts/footer.php');?>
