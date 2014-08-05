<div id="left">
    <!--
    <form action="search-results.html" method="GET" class='search-form'>
        <div class="search-pane">
            <input type="text" name="search" placeholder="Search here...">
            <button type="submit"><i class="icon-search"></i></button>
        </div>
    </form>
    -->
    <div class="subnav">
        <div class="subnav-title">
            <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Content</span></a>
        </div>
        <ul class="subnav-menu">
            <li>
                <a href="<?php echo base_url('admin/doctors/index'); ?>">Consultant/Guidance </a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/students/index'); ?>">Graduates</a>
            </li>

            <li>
                <a href="<?php echo base_url('admin/speciality/index'); ?>">Speciality</a>
            </li>
        </ul>
    </div>
    <div class="subnav">
        <div class="subnav-title">
            <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Offers</span></a>
        </div>
        <ul class="subnav-menu">
            <li>
                <a href="<?php echo base_url('admin/offer/rotation'); ?>">Rotation</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/offer/foodAll'); ?>">Lodging</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/offer/consultant'); ?>">Consultation</a>
            </li>
            <li>
                <a href="<?php echo base_url('admin/offer/researchAll'); ?>">Research</a>
            </li>
        </ul>
    </div>

    <div class="subnav">
        <div class="subnav-title">
            <a href="#" class='toggle-subnav'><i class="icon-angle-down"></i><span>Match</span></a>
        </div>
        <ul class="subnav-menu">
            <li>
                <a href="<?php echo base_url('admin/attachment/allMatch'); ?>">Match Log</a>
            </li>
        </ul>
    </div>




</div>