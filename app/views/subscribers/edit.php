<?php require APPROOT . '/views/inc/header.php'; ?>
    <div class="card card-body bg-light mt-5">
        <h2>Update Subscriber's Details</h2>
        <p>Update subscriber's details by using the form below</p>
        <form action="<?php echo URLROOT; ?>/subscribers/edit/<?php echo $data['phoneNumber']; ?>" method="post">
            <div class="form-group mb-3">
                <label for="phoneNumber">Phone Number: <sup>*</sup></label>
                <input type="text" name="phoneNumber" class="form-control form-control-lg <?php echo (!empty($data['phoneNumber_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['phoneNumber']; ?>" readonly>
                <span class="invalid-feedback"><?php echo $data['phoneNumber_err'];?></span>

                <label for="username">Username: <sup>*</sup></label>
                <input type="text" name="username" class="form-control form-control-lg <?php echo (!empty($data['username_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['username']; ?>">
                <span class="invalid-feedback"><?php echo $data['username_err'];?></span>

                <label for="password">Password: <sup>*</sup></label>
                <input type="password" name="password" class="form-control form-control-lg <?php echo (!empty($data['password_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['password']; ?>">
                <span class="invalid-feedback"><?php echo $data['password_err'];?></span>

                <label for="domain">Domain: <sup>*</sup></label>
                <input type="text" name="domain" class="form-control form-control-lg <?php echo (!empty($data['domain_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['domain']; ?>">
                <span class="invalid-feedback"><?php echo $data['domain_err'];?></span>

                <label for="status">Status: <sup>*</sup></label>
                <input type="text" name="status" class="form-control form-control-lg <?php echo (!empty($data['status_err'])) ? 'is-invalid' : ''; ?>" value="<?php echo $data['status']; ?>"  placeholder="Active or Inactive">
                <span class="invalid-feedback"><?php echo $data['status_err'];?></span>
            </div>
            <input type="submit" class="btn btn-success" value="Submit">
            <a class="btn btn-primary" href="<?php echo URLROOT;?>/subscribers"><i class="fa fa-angle-double-left"></i> Back</a>
        </form>
    </div>
<?php require APPROOT . '/views/inc/footer.php'; ?>