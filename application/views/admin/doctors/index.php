<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
			<div class="box-title">
				<h3><i class="icon-edit"></i> Doctors</h3>
				<div class="actions">
					<a href="<?php echo base_url('admin/doctors/view') ?>" data-toggle="modal" class="btn">
					<i class="fa fa-plus-circle"></i>Add Doctor</a>
				</div>
			</div>
			<table class="table table-hover table-nomargin dataTable table-bordered">
				<thead>
					<tr>
						<th>UserName</th>
						<th>Qualification</th>
						<th class='hidden-350'>Email</th>
						<th class='hidden-1024'>State</th>
						<th class='hidden-480'>Speciality</th>
                        <th class='hidden-480'>Action</th>
					</tr>
				</thead>
				<tbody>
				<?php
                    if(is_array($result)) {
                        foreach($result as $key => $value) { ?>
                            <tr>
                                
                                <td><?php echo $value->UserName; ?></td>
                                <td><?php echo $value->Qualification; ?></td>
                                <td><?php echo $value->Email; ?></td>
                                <td><?php echo $value->State; ?></td>
                                <td><?php echo $value->Speciality; ?></td>
                                <td><a href="<?php echo base_url('admin/doctors/view/'.$value->DocterID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit"><i class="icon-edit"></i></a></td>
                            </tr>
                    <?php }
                    }
                    ?>
				</tbody>
			</table>
		</div>
	</div>
</div>