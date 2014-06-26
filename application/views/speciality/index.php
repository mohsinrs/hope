<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
            <?php echo $this->session->flashdata('message'); ?>
			<div class="box-title">
				<h3><i class="icon-edit"></i> Specialities</h3>
				<div class="actions">
					<a href="/index.php/speciality/view" data-toggle="modal" class="btn">
					<i class="glyphicon-circle_plus"></i> Add Speciality</a>
				</div>
			</div>
			<table class="table table-hover table-nomargin dataTable table-bordered">
				<thead>
					<tr>
						<th>Serial #</th>
						<th>Name</th>
						<th class='hidden-350'>Type</th>
						<th class='hidden-1024'>Status</th>
						<th class='hidden-480'>Action</th>
					</tr>
				</thead>
				<tbody>
                <?php
                if(is_array($result)) {
                    foreach($result as $key => $value) { ?>
                        <tr>
                            <td><?php echo $key + 1; ?></td>
                            <td><?php echo $value->Text; ?></td>
                            <td><?php echo $value->Type; ?></td>
                            <td><?php echo $value->IsActive; ?></td>
                            <td>
                                <a href="<?php echo base_url(); ?>index.php/speciality/index/<?php echo $value->SpecialityID; ?>" class="btn" rel="tooltip" title="" data-original-title="Delete"><i class="icon-edit"></i></a>
                            </td>
                        </tr>
                    <?php }
                }
                ?>
				</tbody>
			</table>
		</div>
	</div>
</div>