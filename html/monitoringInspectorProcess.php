<?php

session_start();

require 'connection.php';

$query = "SELECT * FROM student
INNER JOIN field ON student.field_fld_id=field.fld_id
INNER JOIN gender ON student.gender_gn_id=gender.gn_id
INNER JOIN degree ON field.fld_deg_id=degree.deg_id
INNER JOIN university ON degree.deg_uni_id=university.uni_id
INNER JOIN uni_type ON university.uni_type_uni_typ_id=uni_type.uni_typ_id
INNER JOIN gov_status ON university.gov_status_govstat_id=gov_status.govstat_id
INNER JOIN training_establishment ON student.st_id=training_establishment.tran_est_st_id
INNER JOIN worksite ON training_establishment.worksite_wrksit_id=worksite.wrksit_id
INNER JOIN training_place ON worksite.wrksit_tran_plc_id=training_place.tran_plc_id";

switch ($_GET["sb"]) {
    case '':
        switch ($_GET["sc"]) {
            case '0':

                break;

            default:
                $query .= " WHERE worksite.wrksit_id='" . $_GET["sc"] . "'";
                break;
        }

        break;

    default:
        switch ($_GET["sc"]) {
            case '0':
                $query .= " WHERE student.st_id LIKE '%" . $_GET["sb"] . "%' OR student.first_name LIKE '%" . $_GET["sb"] . "%' OR student.last_name LIKE '%" . $_GET["sb"] . "%' OR university.uni_name LIKE '%" . $_GET["sb"] . "%'";
                break;

            default:
                $query .= " WHERE (student.st_id LIKE '%" . $_GET["sb"] . "%' AND worksite.wrksit_id='" . $_GET["sc"] . "') OR (student.first_name LIKE '%" . $_GET["sb"] . "%' AND worksite.wrksit_id='" . $_GET["sc"] . "') OR (student.last_name LIKE '%" . $_GET["sb"] . "%' AND worksite.wrksit_id='" . $_GET["sc"] . "') OR (university.uni_name LIKE '%" . $_GET["sb"] . "%' AND worksite.wrksit_id='" . $_GET["sc"] . "')";
                break;
        }

        break;
}

$rsm = Database::search($query .= " ORDER BY student.st_id;");
$nsm = $rsm->num_rows;

  echo $query;

$rsins = Database::search("SELECT * FROM inspector WHERE admin_ad_id='" . $_SESSION["AD"]["ad_id"] . "';");
$inspector = $rsins->fetch_assoc();

?>

<div class="row  h-75">

    <div class="col-12 col-lg-12 mt-4 shadow" id="">

        <h4 class="text-center">Available Training Students to Monitoring</h4>

        <table class=" table table-responsive table-striped shadow ">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Student ID</th>
                    <th scope="col">First Name</th>                    
                    <th scope="col">Gender</th>
                    <th scope="col">Field</th>
                    <th scope="col">Company</th>
                    <th scope="col">Training Place</th>
                    <th scope="col">Worksite</th>
                    <th scope="col">Univercity</th>
                    <th scope="col">Field</th>
                    <th scope="col">Next Monitoring</th>
                </tr>
            </thead>
            <tbody>
                <?php



                for ($i = 0; $i < $nsm; $i++) {
                    $tbd = $rsm->fetch_assoc();

                    $rs = Database::search("SELECT * FROM inspector_students WHERE selctd_studnt='" . $tbd["id"] . "';");
                    $mnt = $rs->num_rows;

                    $monitoring;

                    if ($tbd["monitoring_1"] == "0") {
                        $monitoring = "monitoring_1";
                    }
                    if ($tbd["monitoring_1"] == "1") {
                        $monitoring = "monitoring_2";
                    }
                    if ($tbd["monitoring_2"] == "1") {
                        $monitoring = "monitoring_3";
                    }
                    if ($tbd["monitoring_3"] == "1") {
                        $monitoring = "Monitoring Complete";
                    }

                    if ($monitoring != "Monitoring Complete") {


                ?>
                        <tr onclick="AselctST('<?php echo $tbd['id']; ?>','<?php echo $i; ?>','<?php echo $inspector['id']; ?>');" id="<?php echo $i; ?>" class="x text-white" style="background-color:  #bd68006e;">
                            <td><?php echo $i + 1; ?></td>
                            <td><?php echo $tbd["student_id"]; ?></td>
                            <td><?php echo $tbd["first_name"]; ?></td>
                            <td><?php echo $tbd["gender_type"]; ?></td>
                            <td><?php echo $tbd["field_name"]; ?></td>
                            <td><?php echo $tbd["company_name"]; ?></td>
                            <td>traning place</td>
                            <td>Worksite</td>
                            <td><?php echo $tbd["university_name"]; ?></td>
                            <td><?php echo $tbd["field_name"]; ?></td>
                            <td><?php echo $monitoring; ?></td>
                        </tr>

                <?php
                    }
                }

                ?>

            </tbody>
        </table>



    </div>

    <div class="col-12 d-none ">
        <!-- 
        <div style="width: 50%; text-align: center; margin-top: 80px;" class="">
            <div class="pagination ">

                <?php

                // $i;



                // if ($pg > 1) {

                ?>

                     <a href='#' onclick="loadmonitorinspect(<?php // echo $pg - 1; 
                                                                ?>);">&laquo;</a> -->


        <!-- <a href='#' onclick="loadmonitorinspect(1);">1 ......</a> -->

        <?php
        // }

        //  $i = max(0, $pg - 2);

        //=================================================================================================================

        // for ($i = 0; $i <  $page_count; $i++) {

        //     if ($pg == $i + 1) {

        ?>

        <!-- <a href='#' class='active'><?php // echo  $i + 1; 
                                        ?></a> -->

        <?php
        // } else {

        ?>

        <!--  <a href='#' onclick="loadmonitorinspect(<?php // echo $i + 1; 
                                                        ?>);"><?php // echo  $i + 1; 
                                                                ?></a> -->

        <?php
        // }

        //==============================================================================================            

        ?>

        <?php

        // }

        //==========================================================================================================        

        // if ($page_count > $pg) {


        ?>

        <!-- <a href='#' class='active'><?php // echo  $page_count; 
                                        ?></a> -->

        <?php

        // } else {

        ?>

        <!-- <a href='#' onclick="loadmonitorinspect(<?php // echo $page_count; 
                                                        ?>);">....<?php // echo  $page_count; 
                                                                    ?></a> -->

        <!-- <a href="#" onclick="loadmonitorinspect(<?php // echo $pg + 1; 
                                                        ?>);">&raquo;</a> -->

        <?php
        // }

        //==========================================================================================================        

        //=========================================================================================================
        // if ($pg == $i) {

        // $i = 1;

        // } else {


        ?>

        <!-- <a href="#" onclick="loadmonitorinspect(<?php // echo $pg + 1; 
                                                        ?>);">&raquo;</a> -->

        <?php
        // }

        //=======================================================================================================        



        ?>

    </div>


    <div class="col-12 col-lg-6 mt-4 shadow" id="stb">

        <h4>Selected to Monitoring</h4>

        <?php


        $rstb2 = Database::search("SELECT inspector_students.id, student.student_id, student.first_name, inspector_students.date, inspector_students.select_stat FROM inspector_students
     INNER JOIN student ON inspector_students.selctd_studnt=student.id 
     WHERE inspector_students.inspector='" . $inspector["id"] . "';");
        $tbn2 = $rstb2->num_rows;

        echo $inspector["id"];
        ?>

        <table class=" table table-responsive table-striped shadow ">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Date</th>
                </tr>
            </thead>
            <tbody>
                <?php

                for ($i = 0; $i < $tbn2; $i++) {
                    $tbd2 = $rstb2->fetch_assoc();

                    if ($tbd2["select_stat"] == "0") {


                ?>
                        <tr id="<?php echo $i; ?>" class="x " style="background-color:  #0bcbe085;">

                            <td><?php echo $tbd2["student_id"]; ?></td>
                            <td><?php echo $tbd2["first_name"]; ?></td>
                            <td><?php echo $tbd2["date"]; ?></td>
                        </tr>

                <?php

                    }
                }

                ?>

            </tbody>
        </table>

    </div>

    <div class="col-12 col-lg-6 mt-4 shadow" id="">

        <h4>Approved to Monitoring</h4>

        <?php
        $rstb3 = Database::search("SELECT inspector_students.id, student.student_id, student.first_name, inspector_students.date, inspector_students.select_stat, student.monitoring_1, student.monitoring_2, student.monitoring_3 FROM inspector_students
                                        INNER JOIN student ON inspector_students.selctd_studnt=student.id 
                                        WHERE inspector_students.inspector='" . $inspector["id"] . "';");
        $tbn3 = $rstb3->num_rows;
        ?>

        <table class=" table table-responsive table-striped shadow ">
            <thead>
                <tr>
                    <th scope="col">Student ID</th>
                    <th scope="col">First Name</th>
                    <th scope="col">Date</th>
                    <th scope="col">Update</th>
                    <th scope="col">Participation</th>
                </tr>
            </thead>
            <tbody>
                <?php

                for ($i = 0; $i < $tbn3; $i++) {
                    $tbd3 = $rstb3->fetch_assoc();

                    $monitoring;

                    if ($tbd3["monitoring_1"] == "0") {
                        $monitoring = "monitoring_1";
                    }
                    if ($tbd3["monitoring_1"] == "1") {
                        $monitoring = "monitoring_2";
                    }
                    if ($tbd3["monitoring_2"] == "1") {
                        $monitoring = "monitoring_3";
                    }

                    // echo $monitoring;

                    // elseif ($tbd2["monitoring_2"] == "null" || $tbd2["monitoring_2"] == "0" || $tbd2["monitoring_2"] == "") {
                    //     $monitoring = "monitoring_2";
                    // } elseif ($tbd2["monitoring_3"] == "null" || $tbd2["monitoring_3"] == "0" || $tbd2["monitoring_3"] == "") {
                    //     $monitoring = "monitoring_3";
                    // } else {
                    //     $monitoring = "Successfully";
                    // }

                    $rs = Database::search("SELECT * FROM " . $monitoring . " WHERE inspector='" . $inspector["id"] . "' AND super_status='0';");
                    // $montr = $rs->fetch_assoc();

                    //   echo "SELECT * FROM " . $monitoring . " WHERE id='" . $tbd3["id"] . "' AND inspector='" . $inspector["id"] . "' AND super_status='1';";

                    // echo $rs->num_rows;

                    //  if ($rs->num_rows == 0) {


                    if ($tbd3["select_stat"] == "1") {

                ?>
                        <tr id="<?php echo $tbd3["id"]; ?>" class=" " style="background-color:  #6aff00b3;">
                            <td><?php echo $tbd3["student_id"]; ?></td>
                            <td><?php echo $tbd3["first_name"]; ?></td>
                            <td><?php echo $tbd3["date"]; ?></td>
                            <td><button onclick="monitoredByInspector('<?php echo $tbd3['id']; ?>','<?php echo $monitoring; ?>','<?php echo $inspector['id']; ?>');" class="btn btn-primary text-white fw-bold">Monitored</button></td>
                            <td>
                                <div class="form-check form-switch">
                                    <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked">
                                    <label class="form-check-label" for="flexSwitchCheckChecked">Present</label>
                                </div>
                            </td>
                        </tr>

                <?php

                    }
                }
                //  }

                ?>

            </tbody>
        </table>

    </div>
</div>

<!-- 
<script src="script.js"></script> -->