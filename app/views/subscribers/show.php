<?php require APPROOT . '/views/inc/header.php'; ?>
    <a class="btn btn-primary" href="<?php echo URLROOT;?>/subscribers"><i class="fa fa-angle-double-left"></i> Back</a>
    <br>
    <h1>
        Subscriber Details:</h1>
    </h1>
    <?php echo $data['subscriber']->phoneNumber; ?>
    <div class="card card-body mb3">
        <h4 class="card-title">
            Phone Number: <?php echo $data['subscriber']->phoneNumber; ?>
            <form action="<?php echo URLROOT; ?>/subscribers/delete/<?php echo $data['subscriber']->phoneNumber; ?>" method="post" style="display: inline">
                <input type="submit" value="Delete" class="btn btn-danger float-end me-1">
            </form>
            <a href="<?php echo URLROOT; ?>/subscribers/edit/<?php echo $data['subscriber']->phoneNumber; ?>" class="btn btn-primary float-end me-1">
                <i class="fa fa-pencil"></i> Update
            </a>
        </h4>
        <div class="bg-light p-2 mb-3">
            <b>Username:</b> <?php echo $data['subscriber']->username; ?>
        </div>
        <div class="bg-light p-2 mb-3">
            <b>Domain:</b> <?php echo $data['subscriber']->domain; ?>
        </div>
        <div class="bg-light p-2 mb-3">
            <b>Status:</b> <?php echo $data['subscriber']->status; ?>
        </div>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>