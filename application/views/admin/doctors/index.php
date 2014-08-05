<div class="row-fluid">
    <div class="span12">
        <?php renderNotification() ?>
        <div class="box box-color box-bordered">            
            <div class="box-title">
                <h3><i class="icon-edit"></i> Consultants </h3>
                <div class="actions">
                    <a href="<?php echo base_url('admin/doctors/view') ?>" data-toggle="modal" class="btn">
                        <i class="icon-plus-sign"></i> Add Consultant </a>
                </div>
            </div>
            <table class="table table-hover table-nomargin dataTable table-bordered" id="tblDoctor">
                <thead>
                    <tr>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th class='hidden-350'>Phone</th>
                        <th class='hidden-1024'>Specialty</th>
                        <th class='hidden-480'>Action</th>
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
                                    <a href="<?php echo base_url('admin/doctors/view/' . $value->DoctorID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit">
                                    <i class="icon-edit"></i></a>
                                    <a href="<?php echo base_url('admin/doctors/delete/' . $value->DoctorID); ?>" class="btn" rel="tooltip" title="" data-original-title="Delete">
                                    <i class="icon-remove"></i></a>
                                    <?php if($value->ConfirmationSent != 1): ?>
                                    <a href="<?php echo base_url('admin/doctors/confirm/' . $value->DoctorID); ?>" class="btn" rel="tooltip" title="" data-original-title="Send Confirmation Email">
                                    <i class="icon-envelope"></i></a>
                                    <?php endif; ?>
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