<main>
    <div class="container-fluid">
        <h1 class="mt-4"></h1>
        <o1 class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href='<?php echo site_url('user') ?>">User</a></li>
            <li class="breadcrumb-item active"><?php echo $title ?></li>
        </o1>
        <div class="card-body mb-4>
            <div class="card-body">
            <form action="<?php echo site_url('user/save') ?>" method="post"  >
            <div class="mb-3">
                <label for="nik">NIK <code>*</code></label>
                <input class="form-control" type"text" name="nik" placeholder="NIK" required />
        </div>
        <div class="mb-3">
                <label for="username">USERNAME <code>*</code></label>
                <input class="form-control" <?php echo form-error('username') ? 'is-invalid':'' ?>"
                    type="text" name="username" placeholder="USERNAME" required />
                <div class="invalid-feedback">
                    <?php echo form_error('username') ?>
                </div>
        </div>
        <div class="mb-3">
                <label for="full">USERNAME <code>*</code></label>
                <input class="form-control" <?php echo form-error('username') ? 'is-invalid':'' ?>"



</main>