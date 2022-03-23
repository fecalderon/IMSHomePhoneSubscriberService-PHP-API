<?php require APPROOT . '/views/inc/header.php'; ?>
    <?php flash('subscriber_message'); ?>
    <div class="row mb-3">
        <div class="col-md-6">
            <h1>Subscribers</h1>
        </div>
        <div class="col-md-6">
            <a href="<?php echo URLROOT; ?>/subscribers/add" class="btn btn-primary float-end">
                <i class="fa fa-plus"></i> Add Subscriber
            </a>
        </div>
    </div>
    <?php foreach($data['subscribers'] as $subscriber) : ?>
        <div class="card card-body mb3">
            <h4 class="card-title">
                Phone Number: <?php echo $subscriber->phoneNumber; ?>
                <form action="<?php echo URLROOT; ?>/subscribers/delete/<?php echo $subscriber->phoneNumber; ?>" method="post" style="display: inline">
                    <input type="submit" value="Delete" class="btn btn-danger float-end me-1">
                </form>
                <a href="<?php echo URLROOT; ?>/subscribers/edit/<?php echo $subscriber->phoneNumber; ?>" class="btn btn-primary float-end me-1">
                    <i class="fa fa-pencil"></i> Update
                </a>
                <a class="btn btn-primary float-end me-1" href="<?php echo URLROOT; ?>/subscribers/show/<?php echo $subscriber->phoneNumber; ?>">
                    <i class="fa fa-eye"></i> View
                </a>
            </h4>
<!--            <div class="bg-light p-2 mb-3">-->
<!--                <b>Username:</b> --><?php //echo $subscriber->username; ?>
<!--            </div>-->
<!--            <div class="bg-light p-2 mb-3">-->
<!--                <b>Domain:</b> --><?php //echo $subscriber->domain; ?>
<!--            </div>-->
<!--            <div class="bg-light p-2 mb-3">-->
<!--                <b>Status:</b> --><?php //echo $subscriber->status; ?>
<!--            </div>-->
        </div>
    <?php endforeach; ?>
<?php require APPROOT . '/views/inc/footer.php'; ?>