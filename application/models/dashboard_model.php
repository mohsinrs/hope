<?php

class Dashboard_model extends CI_Model {

    function getRequirementByStatus( $default_project = null ) {
        
        $query = "select status.title AS title,count(requirement_id) AS requirements from requirement 
        inner join status on (status.status_id=requirement.status_id)";
        if( $default_project != null )
            $query .= "WHERE requirement.`project_id` = '".$default_project."' ";
        $query .= "group by requirement.status_id";
        
        $count_all = $this->db->query( $query );
        return $count_all;
    }

    function getBugByStatus( $default_project = null ) {
        
//        $query = "select status.title AS title,count(bug_id) AS bugs from bug
//         inner join status on (status.status_id=bug.status_id) 
//         group by bug.status_id";
        $query = "SELECT status.title AS title,COUNT(bug_id) AS bugs FROM bug
                    INNER JOIN STATUS ON (status.status_id=bug.status_id)";
        if( $default_project != null )
            $query .= "LEFT JOIN requirement ON ( bug.requirement_id=requirement.requirement_id )
         WHERE requirement.`project_id` = '".$default_project."' ";
        $query .= "GROUP BY bug.status_id";
        
        $count_bug = $this->db->query( $query );
        return $count_bug;
    }

}

?>
