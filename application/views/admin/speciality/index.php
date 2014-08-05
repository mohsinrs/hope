<div class="row-fluid">
    <div class="span12">
        <?php renderNotification() ?>
        <div class="box box-color box-bordered">
            <div class="box-title">
                <h3><i class="icon-edit"></i> Specialties</h3>
                <div class="actions">
                    <a href="<?php echo base_url('admin/speciality/view') ?>" data-toggle="modal" class="btn">
                        <i class="glyphicon-circle_plus"></i> Add Specialty</a>
                </div>
            </div>
            <table class="table table-hover table-nomargin dataTable table-bordered">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th class='hidden-1024'>Status</th>
                        <th class='hidden-480'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (is_array($result)) {
                        foreach ($result as $key => $value) {
                            ?>
                            <tr>
                                <td><?php echo $value->Text; ?></td>
                                <td><?php echo ($value->IsActive == 1) ? 'Active' : 'In Active'; ?></td>
                                <td>
                                    <a href="<?php echo base_url('admin/speciality/view/' . $value->SpecialityID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit">
                                    <i class="icon-edit"></i></a>
                                    <a href="<?php echo base_url('admin/speciality/delete/' . $value->SpecialityID); ?>" class="btn" rel="tooltip" title="" data-original-title="Delete">
                                    <i class="icon-remove"></i></a>
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