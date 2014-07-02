<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">
            <?php echo $this->session->flashdata('message'); ?>
			<div class="box-title">
				<h3><i class="icon-edit"></i> Offers</h3>
				<div class="actions">
                    <div class="btn-group">
                        <a href="#" data-toggle="dropdown" class="btn dropdown-toggle">
                        <i class="glyphicon-circle_plus"></i> Add Offer</a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?php echo base_url('admin/offers/electives') ?>" data-toggle="modal" class="btn">Add Electives</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/offers/food') ?>" data-toggle="modal" class="btn">Add Food</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/offers/consulting') ?>" data-toggle="modal" class="btn">Add Consultation</a>
                            </li>
                            <li>
                                <a href="<?php echo base_url('admin/offers/research') ?>" data-toggle="modal" class="btn">Add Research</a>
                            </li>
                        </ul>
                    </div>
                </div>
			</div>
			<table class="table table-hover table-nomargin dataTable table-bordered">
				<thead>
					<tr>
						<th>Doctor</th>
						<th>Speciality</th>
						<th class='hidden-350'>Hospital</th>
                        <th class='hidden-350'>Total Students</th>
                        <th class='hidden-350'>State</th>
                        <th class='hidden-350'>City</th>
                        <th class='hidden-1024'>Offer type</th>
						<th class='hidden-480'>Action</th>
					</tr>
				</thead>
				<tbody>
                   <?php
				   if(is_array($result)) {
                        foreach($result as $key => $value) { ?>
                        <tr>
                            <td><?php echo $value->DoctorID; ?></td>
                            <td><?php echo $value->SpecialityID; ?></td>
                            <td><?php echo $value->Hospital; ?></td>
                            <?php if($value->OfferType == 'rotation') {
                               $total = $value->January + $value->Febuary +$value->March +$value->April +$value->May +$value->June +$value->July +$value->August +$value->September +$value->October +$value->November +$value->December ;
                               ?>
                            <td><?php echo $total ?></td>
                            <?php }
                            elseif($value->OfferType == 'food') {
                             ?>
                            <td><?php echo $value->TotalStudent; ?></td>
                            <?php }
                            ?>
                            <td><?php echo $value->FoodState; ?></td>
                            <td><?php echo $value->FoodCity; ?></td>
                            <td><?php echo $value->OfferType; ?></td>
                            <?php if($value->OfferType == 'rotation') { ?>
                            <td><a href="<?php echo base_url('admin/offers/electives/'.$value->RotationID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit"><i class="icon-edit"></i></a></td>
                            <?php }
                            elseif($value->OfferType == 'food') { ?>
                            <td><a href="<?php echo base_url('admin/offers/food/'.$value->RotationID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit"><i class="icon-edit"></i></a></td>
                            <?php } ?>
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