<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>

    <div class="card mb-3" style="max-width: 540px;">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="<?= base_url('assets/img/profile/') . $user['image'] ?>" class="card-img">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h4 class="card-title"><?= $user['name'] ?></h4>
                    <h5 class="card-title"><?= $user['email'] ?></h5>
                    <h5 class="card-title"><?= date('d M Y', $user['date_created']) ?></h5>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->