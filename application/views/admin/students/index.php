<div class="row-fluid">
    <div class="span12">
        <?php renderNotification() ?>
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Graduates </h3>
                <div class="actions">
                    <a href="<?php echo base_url('admin/students/view') ?>" data-toggle="modal" class="btn">
                        <i class="glyphicon-circle_plus"></i> Add Graduate</a>
                </div>
            </div>
            <table class="table table-hover table-nomargin dataTable table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Specialty</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (is_array($result)) {
                        foreach ($result as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $value->FirstName . ' ' . $value->LastName; ?></td>
                                <td><?php echo $value->Email; ?></td>
                                <td><?php echo $value->Phone; ?></td>
                                <td><?php echo $value->Text; ?></td>
                                <td>
                                <a href="<?php echo base_url('admin/students/view/' . $value->StudentID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit">
                                <i class="icon-edit"></i></a>
                                <a href="<?php echo base_url('admin/students/delete/' . $value->StudentID); ?>" class="btn" rel="tooltip" title="" data-original-title="Delete">
                                <i class="icon-remove"></i></a>
                                <?php if($value->ConfirmationSent != 1): ?>
                                <a href="<?php echo base_url('admin/students/confirm/' . $value->StudentID); ?>" class="btn" rel="tooltip" title="" data-original-title="Send Confirmation Email">
                                <i class="icon-envelope"></i></a>
                                <?php endif; ?>
                                <a href="<?php echo base_url('admin/students/match/' . $value->StudentID); ?>" class="btn" rel="tooltip" title="" data-original-title="Match Offer">
                                <i class="icon-plus"></i></a>
                                </td>
                            </tr>
                        <?php
                        }
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</div>