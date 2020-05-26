<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800"><?= $title ?></h1>
    <div class="row">
        <div class="col-lg-6">
            <?= $this->session->flashdata('message') ?>
        </div>
    </div>

    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mb-3" data-toggle="modal" data-target="#tambahRoleModal">
        <i class="fas fa-plus"></i> Tambah Role
    </button>
    <div class="row">
        <div class="col-lg-6">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Role</th>
                        <th scope="col">Detail</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($role as $r) : ?>
                        <tr>
                            <th scope="row"><?= $i ?></th>
                            <td><?= $r['role'] ?></td>
                            <td><a href="<?= base_url('admin/role_access/') . $r['id'] ?>" class="badge badge-success">Access Detail</a></td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>

</div>
<!-- /.container-fluid -->

</div>
<!-- End of Main Content -->

<!-- Modal -->
<div class="modal fade" id="tambahRoleModal" tabindex="-1" role="dialog" aria-labelledby="tambahRoleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahRoleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/role') ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="role" name="role" placeholder="Insert New Role">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Save changes</button>
                </div>
            </form>
        </div>
    </div>
</div>