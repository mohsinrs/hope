<div class="row-fluid">
    <div class="span12">
        <div class="box box-color box-bordered">

            <?php renderNotification() ?>
            <div class="box-title">
                <h3><i class="icon-edit"></i> Offers</h3>
                <div class="pull-right">
                    <div class="actions">
                        <a href="<?php echo base_url('admin/offers/consulting') ?>" data-toggle="modal" class="btn">
                            <i class="glyphicon-circle_plus"></i> Add Consultation</a>
                    </div>

                </div>
            </div>
            <table class="table table-hover table-nomargin dataTable table-bordered">
                <thead>
                    <tr>
                        <th class='hidden-350'>Total Graduates</th>
                        <th class='hidden-350'>State</th>
                        <th class='hidden-350'>City</th>
                        <th class='hidden-480'>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (is_array($result)) {
                        foreach ($result as $key => $value) {
                            ?>
                            <tr>
                                <?php
                                if ($value->OfferType == 'rotation') {
                                    $total = $value->January + $value->February + $value->March + $value->April + $value->May + $value->June + $value->July + $value->August + $value->September + $value->October + $value->November + $value->December;
                                    ?>
                                    <td><?php echo $total ?></td>
                                <?php
                                } elseif ($value->OfferType == 'food') {
                                    ?>
                                    <td><?php echo $value->TotalStudent; ?></td>
                                <?php
                                } else {
                                    $total = $value->January + $value->February + $value->March + $value->April + $value->May + $value->June + $value->July + $value->August + $value->September + $value->October + $value->November + $value->December;
                                    ?><td> <?php echo $total ?></td> <?php }
                                ?>
                                <td><?php echo $value->State; ?></td>
                                <td><?php echo $value->City; ?></td>
                                <td>
                                    <?php if ($value->OfferType == 'rotation') { ?>
                                        <a href="<?php echo base_url('admin/offers/electives/' . $value->OfferID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit"><i class="icon-edit"></i></a>
                                    <?php } elseif ($value->OfferType == 'food') {
                                        ?>
                                        <a href="<?php echo base_url('admin/offers/food/' . $value->OfferID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit"><i class="icon-edit"></i></a>
                                    <?php } elseif ($value->OfferType == 'consulting') {
                                        ?>
                                        <a href="<?php echo base_url('admin/offers/consulting/' . $value->OfferID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit"><i class="icon-edit"></i></a>
                                    <?php } elseif ($value->OfferType == 'research') { ?>
                                        <a href="<?php echo base_url('admin/offers/research/' . $value->OfferID); ?>" class="btn" rel="tooltip" title="" data-original-title="Edit"><i class="icon-edit"></i></a>
                                    <?php } ?>
                                    <a href="<?php echo base_url('admin/offers/delete/' . $value->OfferID); ?>" class="btn" rel="tooltip" title="" data-original-title="Delete">
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