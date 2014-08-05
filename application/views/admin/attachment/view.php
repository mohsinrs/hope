<div class="row-fluid">
	<div class="span12">
		<div class="box box-color box-bordered">

            <div class="alert alert-success">
                    <?php echo $this->session->flashdata('message'); ?>
            </div>
			<div class="box-title">
				<h3><i class="icon-edit"></i> Match</h3>
			
			</div>
			<table class="table table-hover table-nomargin dataTable table-bordered">
				<thead>
					<tr>
						
                        <th class='hidden-350'>Graduates</th>
                        <th class='hidden-350'>Offer</th>
                        <th class='hidden-350'>Month</th>
                        
			
					</tr>
				</thead>
				<tbody>
                   
                        <tr>
                           <?php if(is_array($result)) {
                               foreach($result as $value)
                               {
                           ?>
                            
                            <td><?php echo $value->FirstName.' '.$value->LastName; ?></td>
                            <td><?php echo $value->DoctorID.' / '.$value->Hospital; ?></td>
                            <td><?php echo $value->Month ?></td>
                            
                          
                           
                        </tr>
                        <?php }
                          }
                       ?>
				</tbody>
			</table>
		</div>
	</div>
</div>