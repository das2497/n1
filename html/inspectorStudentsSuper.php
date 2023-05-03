<?php


require 'connection.php';

session_start();

?>

<div class="row">

    <div class="col-12 col-lg-12 ">
        <h4>Selected Students To Monitoring</h4>

        <?php

        $rstb2 = Database::search("SELECT inspector_students.id,student.first_name, inspector_students.date, inspector_students.select_stat FROM inspector_students
              INNER JOIN student ON inspector_students.selctd_studnt=student.id WHERE inspector_students.inspector='" . $_POST["inid"] . "' AND inspector_students.select_stat='0';");
        $tbn2 = $rstb2->num_rows;

        $dt = $rstb2->fetch_assoc();

        ?>

        <div class="row">
            <div class="col-2 offset-8 d-grid ">

                <?php

                if ($tbn2 > 0) {
                ?>

                    <button class="btb btn-primary" onclick="superApproveNextMonitoring('<?php echo $_POST['inid']; ?>','<?php echo $dt['date']; ?>');">Aprove</button>

                <?php
                } else {
                ?>

                    <button class="btb btn-primary">Aprove</button>

                <?php
                }



                ?>
            </div>
            <div class="col-12">


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
                            <th scope="col">Next Monitoring Date</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php


                        $rstb3 = Database::search("SELECT inspector_students.id,student.first_name, inspector_students.date, inspector_students.select_stat FROM inspector_students
                              INNER JOIN student ON inspector_students.selctd_studnt=student.id WHERE inspector_students.inspector='" . $_POST["inid"] . "' AND inspector_students.select_stat='0';");
                        $tbn3 = $rstb3->num_rows;

                        for ($i = 0; $i < $tbn3; $i++) {
                            $tbd2 = $rstb3->fetch_assoc();

                        ?>
                            <tr onclick="AdeselctST('<?php echo $tbd2['id']; ?>','<?php echo $i; ?>');" id="<?php echo $i; ?>" class="x " style="background-color:  #0bcbe085;">
                                <td><?php echo $tbd2["id"]; ?></td>
                                <td><?php echo $tbd2["first_name"]; ?></td>
                                <td><?php echo $tbd2["date"]; ?></td>
                            </tr>

                        <?php

                        }

                        ?>

                    </tbody>
                </table>


            </div>
        </div>

    </div>

    <div class="col-12 col-lg-12">
        <h4>Monitored Students</h4>


        <div class="row">
            <div class="col-2">
                <select id="sampr" class="form-control bg-transparent text-white " onchange="superApproveMonitoring('<?php echo $_POST['inid']; ?>');">
                    <option value="0" class="text-dark">Select Monitoring Phase</option>
                    <option value="monitoring_1" class="text-dark">Monitoring 1</option>
                    <option value="monitoring_2" class="text-dark">Monitoring 2</option>
                    <option value="monitoring_3" class="text-dark">Monitoring 3</option>
                </select>
            </div>
            <div class="col-2 offset-6 d-grid g-2 my-1">
                <button class="btb btn-primary" onclick="approveMonitoredStudents('<?php echo $_POST['inid']; ?>');" id="monitoredaprrbtn">Checked</button>
            </div>
            <div class="col-12" id="imtbappr">

                <table class=" table table-responsive table-striped shadow ">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First Name</th>
                            <th scope="col">Monitored Date</th>
                            <th scope="col">Monitored Phase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr style="background-color:  #6aff00b3;">
                            <td colspan="4">
                                <h4 class="text-center">Pleace Select Monitored Phase</h4>
                            </td>
                        </tr>
                    </tbody>
                </table>


            </div>
        </div>

    </div>


</div>