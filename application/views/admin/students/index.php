<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
            <?php echo $this->session->flashdata('message'); ?>
			<div class="box-title">
				<h3><i class="icon-edit"></i> Students</h3>
				<div class="actions">
					<a href="<?php echo base_url('admin/students/view') ?>" data-toggle="modal" class="btn">
					<i class="glyphicon-circle_plus"></i> Add Student</a>
				</div>
			</div>
			<table class="table table-hover table-nomargin dataTable table-bordered">
				<thead>
					<tr>
						<th>Name</th>
						<th>Email</th>
						<th>State</th>
						<th>Phone</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
                    <?php
                    if(is_array($result)) {
                        foreach($result as $key => $value) { ?>
                            <tr>
                                <td><?php echo $value->Name; ?></td>
                                <td><?php echo $value->Email; ?></td>
                                <td><?php echo $value->State; ?></td>
                                <td><?php echo $value->Phone; ?></td>
                                <td><a href="<?php echo base_url('admin/students/view/'.$value->StudentID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit"><i class="icon-edit"></i></a></td>
                            </tr>
                        <?php }
                        }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>