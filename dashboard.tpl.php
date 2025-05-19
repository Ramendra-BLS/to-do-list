<?php if ($action == "dashboard") { ?>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <section class="content pl-0 pr-0">
        <div class="box box-danger mb-1">
            <div class="box-header">
                <h3 class="box-title"><i class="bi bi-display-fill"></i> Dashboard </h3>
                <!-- <div class="box-tools pull-right">
                        <button title="Refresh All" type="button" id="reload_all" class="btn btn-danger btn-xs"><i class="fa fa-refresh"></i></button>
                    </div> -->
            </div>
        </div>

        <div class="box box-danger">
            <?php if ($permission_group == 1 or $permission_group == 246) { ?>
                <div class="box-body">
                    <form action="" method="post" id="rm_load_form" name="rm_load_form">
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div id="dashboard_main"></div>
                            </div>
                            <div class="col-lg-3">
                                <div id="loader_data"></div>
                            </div>
                            <div class="col-lg-3" id="show_rm">
                                <div id="rm_data"></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group input-group-sm" style="display:none;" id="dash_button">
                                    <label class="invisible" style="display:block;">Submit</label>
                                    <button type="button" class="btn btn-primary btn-sm " name="dash_button" onclick="doPost('rm_load_form', './?pid=<?= $pid; ?>&action=dashboard2_btn', 'dahsboard_btn_two', '3');"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="dahsboard_btn_two"></div>
                <script>
                    $(function() {
                        doPost('NULLL', './?pid=<?= $pid; ?>&action=dashboard_branch', 'dashboard_main', '3');

                    })
                </script>
            <?php } else if ($permission_group == 244 or $permission_group == 245) { ?>
              

                <div id="dahsboard_btn_two"></div>
                <script>
                    $(function() {
                        doPost('NULL', './?pid=<?= $pid; ?>&action=dashboard2_btn', 'dahsboard_btn_two', '3');
                    })
                </script>
            <?php } else if ($permission_group == 247) { ?>
                <div class="box-body">
                    <form action="" method="post" id="ho_load_form" name="ho_load_form">
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div id="dashboard_main_ho"></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group input-group-sm" id="dash_button_ho">
                                    <label class="invisible" style="display:block;">Submit</label>
                                    <button type="button" class="btn btn-primary btn-sm " name="dash_button_ho" onclick="doPost('ho_load_form', './?pid=<?= $pid; ?>&action=dashboard2_btn_ho', 'dahsboard_btn_ho', '3');"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="dahsboard_btn_ho"></div>
                <script>
                    $(function() {
                        doPost('NULLL', './?pid=<?= $pid; ?>&action=dashboard_ho', 'dashboard_main_ho', '3');

                    })
                </script>
            <?php } else if ($permission_group == 252) { ?>
                <div class="box-body">
                    <form action="" method="post" id="ho_ops_load_form" name="ho_ops_load_form">
                        <div class="row mt-3">
                            <div class="col-lg-3">
                                <div id="dashboard_main_ho_ops"></div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group input-group-sm" id="dash_button_ho_ops">
                                    <label class="invisible" style="display:block;">Submit</label>
                                    <button type="button" class="btn btn-primary btn-sm " name="dash_button_ho_ops" onclick="doPost('ho_ops_load_form', './?pid=<?= $pid; ?>&action=dashboard2_btn_ho_ops', 'dahsboard_btn_ho_ops', '3');"><i class="fa fa-search"></i> Search</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div id="dahsboard_btn_ho_ops"></div>
                <script>
                    $(function() {
                        doPost('NULLL', './?pid=<?= $pid; ?>&action=dashboard_ho_ops', 'dashboard_main_ho_ops', '3');

                    })
                </script>
            <?php }
            ?>
        </div>
    </section>


<?php } ?>

<style>
    .dashboard_block {
        border-top: 1px solid rgb(226, 226, 226);
        padding: 10px 10px;
    }

    .box_num {
        font-size: 23px;
        text-align: center;
        margin-bottom: 10px;
    }

    .box_num1 {
        font-size: 18px;
        text-align: center;
        margin-bottom: 10px;
    }

    .box_num2 {
        font-size: 17px;
        text-align: center;
        margin-bottom: 10px;
    }

    .box_num3 {
        font-size: 15px;
        text-align: center;
        margin-bottom: 10px;
    }

    .box_p {
        font-size: 21px;
        text-align: center;
    }

    .divbox {
        box-shadow: 3px 3px 2px 2px rgba(11, 11, 11, 0.17);
        /*box-shadow: 10px 10px;*/
        border-top-left-radius: 15px;
        border-bottom-right-radius: 15px;
        padding: 6px;
        height: 130px;
    }

    @media (max-width: 1536px) {
        .box_num2 {
            font-size: 16px;
        }
    }
</style>

<?php if ($action == "dashboard_ho") { ?>
    <div class="form-group input-group-sm">
        <label>Branch</label>
        <select class="form-control input-sm minimal" id="branch_type" name="branch_type">
            <option value="">Please Select</option>
            <?php
            if (count((array)$BranchData) > 0) {
                foreach ($BranchData as $bD) { ?>
                    <option value="<?= $bD['branch_id']; ?>"><?= $bD['branch_name']; ?></option>
            <?php }
            } ?>
        </select>
    </div>
    <script>
        $("#branch_type").on("change", function() {
            $("#dahsboard_btn_ho").html("");
        });
    </script>

<?php } ?>

<?php if ($action == "dashboard_ho_ops") { ?>
    <div class="form-group input-group-sm">
        <label>Branch</label>
        <select class="form-control input-sm minimal" id="branch_type" name="branch_type">
            <option value="">Please Select</option>
            <?php
            if (count((array)$BranchData) > 0) {
                foreach ($BranchData as $bD) { ?>
                    <option value="<?= $bD['branch_id']; ?>"><?= $bD['branch_name']; ?></option>
            <?php }
            } ?>
        </select>
    </div>
    <script>
        $("#branch_type").on("change", function() {
            $("#dahsboard_btn_ho_ops").html("");
        });
    </script>

<?php } ?>
<?php if ($action == "dashboard_branch") { ?>
    <div class="form-group input-group-sm">
        <label>Type</label>
        <select class="form-control input-sm minimal" id="data_type" name="data_type">
            <option value="">Please Select</option>
            <option value="1">Branch</option>
            <option value="2">RM</option>
        </select>
    </div>
    <script>
        $("#data_type").on("change", function() {
            $("#dahsboard_btn_two").html("");

            var branch_type = $("#data_type").val();
            if (branch_type == "1") {
                $('#dash_button').hide();
                $("#show_rm").hide();
                doPost("NULLL", "./?pid=<?= $pid ?>&action=load_branch_data&data_type=" + branch_type, "loader_data");
            } else if (branch_type == "2") {
                $("#dash_button").hide();
                doPost("NULLL", "./?pid=<?= $pid ?>&action=load_branch_data&data_type=" + branch_type, "loader_data");

            }
        });
    </script>

<?php } ?>
<?php if ($action == "load_branch_data") {
?>



    <div class="form-group input-group-sm">
        <label>Branch</label>
        <select class="form-control input-sm minimal" id="branch_type" name="branch_type">
            <option value="">Please Select</option>
            <?php
            if (count((array)$BranchData) > 0) {
                foreach ($BranchData as $bD) { ?>
                    <option value="<?= $bD['branch_id']; ?>"><?= $bD['branch_name']; ?></option>
            <?php }
            } ?>
        </select>
    </div>
    <script>
        $("#branch_type").on("change", function() {
            $("#dahsboard_btn_two").html("");
            var branchId = $(this).val();
            // alert(branchId);
            var dataType = "<?= $data_type; ?>";
            // alert(dataType);
            if (dataType === "2" && branchId !== "") {
                $("#show_rm").show();
                doPost("NULLL", "./?pid=<?= $pid ?>&action=load_rm_name&branch_id=" + branchId, "rm_data");
            } else if (dataType === "1" && branchId !== "") {
                $('#dash_button').show();
                $("#show_rm").hide();
            }
        });
    </script>
<?php } ?>

<?php if ($action == "load_rm_name") { ?>
    <div class="form-group input-group-sm">
        <label>RM Name</label>
        <select class="form-control input-sm minimal" id="rm_user_id" name="rm_user_id">
            <option value="">Please Select</option>
            <?php
            if (count((array)$getRmName) > 0) {
                // echo "Ramendra";
                foreach ($getRmName as $grm) { ?>
                    <option value="<?= $grm['user_id']; ?>"><?= $bls_global->getUserName($grm['user_id']); ?></option>
            <?php }
            } ?>
        </select>
    </div>
    <script>
        $("#rm_user_id").on("change", function() {
            $("#dahsboard_btn_two").html("");
            var rmName = $(this).val();

            if (rmName !== "") {
                $("#show_rm").show();
                $("#dash_button").show();

            }
        });
    </script>

<?php } ?>



<?php if ($action == "dashboard2_btn_ho") { ?>
    <style>
        #load_chart {
            min-height: 300px;

        }

        .chartData {
            width: 100%;
            height: 400px;
        }

        canvas#pendingStatusChart {
            width: 450px !important;
            height: auto !important;
        }
    </style>
    <div class="dashboard_block bg-main-color">
        <div class="mp_document--block pb-1 mb-3">
            <div class="row mb-3">

                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Pending - MTD</h3>
                                <p><?= $casesPendingMTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesPendingMTDSum > 0) {
                                                                $casesPendingMTDSum = $casesPendingMTDSum / 100000;
                                                                echo number_format($casesPendingMTDSum, 2);
                                                            } else {
                                                                echo $casesPendingMTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Pending - QTD</h3>
                                <p><?= $casesPendingQTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesPendingQTDSum > 0) {
                                                                $casesPendingQTDSum = $casesPendingQTDSum / 100000;
                                                                echo number_format($casesPendingQTDSum, 2);
                                                            } else {
                                                                echo $casesPendingQTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Pending - YTD</h3>
                                <p><?= $casesPendingYTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesPendingYTDSum > 0) {
                                                                $casesPendingYTDSum = $casesPendingYTDSum / 100000;
                                                                echo number_format($casesPendingYTDSum, 2);
                                                            } else {
                                                                echo $casesPendingYTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-3">

                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Rejected - MTD</h3>
                                <p><?= $casesRejectedMTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesRejectedMTDSum > 0) {
                                                                $casesRejectedMTDSum = $casesRejectedMTDSum / 100000;
                                                                echo number_format($casesRejectedMTDSum, 2);
                                                            } else {
                                                                echo $casesRejectedMTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Rejected - QTD</h3>
                                <p><?= $casesRejectedQTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesRejectedQTDSum > 0) {
                                                                $casesRejectedQTDSum = $casesRejectedQTDSum / 100000;
                                                                echo number_format($casesRejectedQTDSum, 2);
                                                            } else {
                                                                echo $casesRejectedQTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Rejected - YTD</h3>
                                <p><?= $casesRejectedYTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesRejectedYTDSum > 0) {
                                                                $casesRejectedYTDSum = $casesRejectedYTDSum / 100000;
                                                                echo number_format($casesRejectedYTDSum, 2);
                                                            } else {
                                                                echo $casesRejectedYTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

            </div>
            <!-- <div class="row mb-3">

                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Sent Back - MTD</h3>
                                <p><?= $casesSentBackMTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesSentBackMTDSum > 0) {
                                                                $casesSentBackMTDSum = $casesSentBackMTDSum / 100000;
                                                                echo number_format($casesSentBackMTDSum, 2);
                                                            } else {
                                                                echo $casesSentBackMTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Sent Back - QTD</h3>
                                <p><?= $casesSentBackQTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesSentBackQTDSum > 0) {
                                                                $casesSentBackQTDSum = $casesSentBackQTDSum / 100000;
                                                                echo number_format($casesSentBackQTDSum, 2);
                                                            } else {
                                                                echo $casesSentBackQTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Sent Back - YTD</h3>
                                <p><?= $casesSentBackYTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesSentBackYTDSum > 0) {
                                                                $casesSentBackYTDSum = $casesSentBackYTDSum / 100000;
                                                                echo number_format($casesSentBackYTDSum, 2);
                                                            } else {
                                                                echo $casesSentBackYTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

            </div> -->
        </div>
    </div>

<?php } ?>


<?php if ($action == "dashboard2_btn_ho_ops") { ?>
    <style>
        #load_chart {
            min-height: 300px;

        }

        .chartData {
            width: 100%;
            height: 400px;
        }

        canvas#pendingStatusChart {
            width: 450px !important;
            height: auto !important;
        }
    </style>
    <div class="dashboard_block bg-main-color">
        <div class="mp_document--block pb-1 mb-3">
            <div class="row mb-3">

                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Sanction Letter Issued Disbursal - MTD</h3>
                                <p><?= $casesSanctionDisbursalMTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesSanctionDisbursalMTDSum > 0) {
                                                                $casesSanctionDisbursalMTDSum = $casesSanctionDisbursalMTDSum / 100000;
                                                                echo number_format($casesSanctionDisbursalMTDSum, 2);
                                                            } else {
                                                                echo $casesSanctionDisbursalMTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Sanction Letter Issued Disbursal - QTD</h3>
                                <p><?= $casesSanctionDisbursalQTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesSanctionDisbursalQTDSum > 0) {
                                                                $casesSanctionDisbursalQTDSum = $casesSanctionDisbursalQTDSum / 100000;
                                                                echo number_format($casesSanctionDisbursalQTDSum, 2);
                                                            } else {
                                                                echo $qtdcasesSanctionDisbursalQTDSumLeadSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Sanction Letter Issued Disbursal - YTD</h3>
                                <p><?= $casesSanctionDisbursalYTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesSanctionDisbursalYTDSum > 0) {
                                                                $casesSanctionDisbursalYTDSum = $casesSanctionDisbursalYTDSum / 100000;
                                                                echo number_format($casesSanctionDisbursalYTDSum, 2);
                                                            } else {
                                                                echo $casesSanctionDisbursalYTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-3">

                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Sanction Letter Issued Not Disbursal - MTD</h3>
                                <p><?= $casesSanctionNotDisbursalMTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesSanctionNotDisbursalMTDSum > 0) {
                                                                $casesSanctionNotDisbursalMTDSum = $casesSanctionNotDisbursalMTDSum / 100000;
                                                                echo number_format($casesSanctionNotDisbursalMTDSum, 2);
                                                            } else {
                                                                echo $casesSanctionNotDisbursalMTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Sanction Letter Issued Not Disbursal - QTD</h3>
                                <p><?= $casesSanctionNotDisbursalQTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesSanctionNotDisbursalQTDSum > 0) {
                                                                $casesSanctionNotDisbursalQTDSum = $casesSanctionNotDisbursalQTDSum / 100000;
                                                                echo number_format($casesSanctionNotDisbursalQTDSum, 2);
                                                            } else {
                                                                echo $casesSanctionNotDisbursalQTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Sanction Letter Issued Not Disbursal - YTD</h3>
                                <p><?= $casesSanctionNotDisbursalYTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesSanctionNotDisbursalYTDSum > 0) {
                                                                $casesSanctionNotDisbursalYTDSum = $casesSanctionNotDisbursalYTDSum / 100000;
                                                                echo number_format($casesSanctionNotDisbursalYTDSum, 2);
                                                            } else {
                                                                echo $casesSanctionNotDisbursalYTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row mb-3">

                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Legal Initiated - MTD</h3>
                                <p><?= $casesLegalInitiatedMTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesLegalInitiatedMTDSum > 0) {
                                                                $casesLegalInitiatedMTDSum = $casesLegalInitiatedMTDSum / 100000;
                                                                echo number_format($casesLegalInitiatedMTDSum, 2);
                                                            } else {
                                                                echo $casesLegalInitiatedMTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Legal Initiated - QTD</h3>
                                <p><?= $casesLegalInitiatedQTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesLegalInitiatedQTDSum > 0) {
                                                                $casesLegalInitiatedQTDSum = $casesLegalInitiatedQTDSum / 100000;
                                                                echo number_format($casesLegalInitiatedQTDSum, 2);
                                                            } else {
                                                                echo $casesLegalInitiatedQTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Legal Initiated - YTD</h3>
                                <p><?= $casesLegalInitiatedYTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesLegalInitiatedYTDSum > 0) {
                                                                $casesLegalInitiatedYTDSum = $casesLegalInitiatedYTDSum / 100000;
                                                                echo number_format($casesLegalInitiatedYTDSum, 2);
                                                            } else {
                                                                echo $casesLegalInitiatedYTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mb-3">

                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Valuation Initiated - MTD</h3>
                                <p><?= $casesValuationInitiatedMTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesValuationInitiatedMTDSum > 0) {
                                                                $casesValuationInitiatedMTDSum = $casesValuationInitiatedMTDSum / 100000;
                                                                echo number_format($casesValuationInitiatedMTDSum, 2);
                                                            } else {
                                                                echo $casesValuationInitiatedMTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Valuation Initiated - QTD</h3>
                                <p><?= $casesValuationInitiatedQTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesValuationInitiatedQTDSum > 0) {
                                                                $casesValuationInitiatedQTDSum = $casesValuationInitiatedQTDSum / 100000;
                                                                echo number_format($casesValuationInitiatedQTDSum, 2);
                                                            } else {
                                                                echo $casesValuationInitiatedQTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Valuation Initiated - YTD</h3>
                                <p><?= $casesValuationInitiatedYTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesValuationInitiatedYTDSum > 0) {
                                                                $casesValuationInitiatedYTDSum = $casesValuationInitiatedYTDSum / 100000;
                                                                echo number_format($casesValuationInitiatedYTDSum, 2);
                                                            } else {
                                                                echo $casesValuationInitiatedYTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row mb-3">

                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Received For Disbursal - MTD</h3>
                                <p><?= $casesReceivedDisbursalMTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesReceivedDisbursalMTDSum > 0) {
                                                                $casesReceivedDisbursalMTDSum = $casesReceivedDisbursalMTDSum / 100000;
                                                                echo number_format($casesReceivedDisbursalMTDSum, 2);
                                                            } else {
                                                                echo $casesReceivedDisbursalMTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Received For Disbursal - QTD</h3>
                                <p><?= $casesReceivedDisbursalQTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesReceivedDisbursalQTDSum > 0) {
                                                                $casesReceivedDisbursalQTDSum = $casesReceivedDisbursalQTDSum / 100000;
                                                                echo number_format($casesReceivedDisbursalQTDSum, 2);
                                                            } else {
                                                                echo $casesReceivedDisbursalQTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Cases Received For Disbursal - YTD</h3>
                                <p><?= $casesReceivedDisbursalYTDCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($casesReceivedDisbursalYTDSum > 0) {
                                                                $casesReceivedDisbursalYTDSum = $casesReceivedDisbursalYTDSum / 100000;
                                                                echo number_format($casesReceivedDisbursalYTDSum, 2);
                                                            } else {
                                                                echo $casesReceivedDisbursalYTDSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

<?php } ?>

<?php if ($action == "dashboard2_btn") { ?>
    <style>
        #load_chart {
            min-height: 300px;

        }

        .chartData {
            width: 100%;
            height: 400px;
        }

        canvas#pendingStatusChart {
            width: 450px !important;
            height: auto !important;
        }
    </style>
    <div class="dashboard_block bg-main-color">

        <div class="mp_document--block pb-1 mb-3">
            <div class="row mb-3">
<!--                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Today's Leads</h3>
                                <p><?//= $loginsCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
//                                                            if ($loginsSum > 0) {
//                                                                $loginsSum = $loginsSum / 100000;
//                                                                echo number_format($loginsSum, 2);
//                                                            } else {
//                                                                echo $loginsSum;
//                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-3 col-md-4" style="cursor:pointer;" onclick="divPop('./?pid=<?= $pid?>&action=data_explore_leads&dtype=mtd','Leads - MTD','modal-lg','4')">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Leads - MTD</h3>
                                <p><?= $mtdLeadCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($mtdLeadSum > 0) {
                                                                $mtdLeadSum = $mtdLeadSum / 100000;
                                                                echo number_format($mtdLeadSum, 2);
                                                            } else {
                                                                echo $mtdLeadSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
<!--                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Leads - QTD</h3>
                                <p><?//= $qtdLeadCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
//                                                            if ($qtdLeadSum > 0) {
//                                                                $qtdLeadSum = $qtdLeadSum / 100000;
//                                                                echo number_format($qtdLeadSum, 2);
//                                                            } else {
//                                                                echo $qtdLeadSum;
//                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-3 col-md-4" style="cursor:pointer;" onclick="divPop('./?pid=<?= $pid?>&action=data_explore_leads&dtype=ytd','Leads - YTD','modal-lg','4')">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Leads - YTD</h3>
                                <p><?= $ytdLeadCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($ytdLeadSum > 0) {
                                                                $ytdLeadSum = $ytdLeadSum / 100000;
                                                                echo number_format($ytdLeadSum, 2);
                                                            } else {
                                                                echo $ytdLeadSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

            
<!--                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 ">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Today's Successful Logins</h3>
                                <p><?//= $tdSuccessCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
//                                                            if ($tdSuccessSum > 0) {
//                                                                $tdSuccessSum = $tdSuccessSum / 100000;
//                                                                echo number_format($tdSuccessSum, 2);
//                                                            } else {
//                                                                echo $tdSuccessSum;
//                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 ">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Successful Logins - MTD</h3>
                                <p><?= $mtdSucessCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($mtdSucessSum > 0) {
                                                                $mtdSucessSum = $mtdSucessSum / 100000;
                                                                echo number_format($mtdSucessSum, 2);
                                                            } else {
                                                                echo $mtdSucessSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
<!--                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Successful Logins - QTD</h3>
                                <p><?//= $qtdSucessCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
//                                                            if ($qtdSucessSum > 0) {
//                                                                $qtdSucessSum = $qtdSucessSum / 100000;
//                                                                echo number_format($qtdSucessSum, 2);
//                                                            } else {
//                                                                echo $qtdSucessSum;
//                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Successful Logins - YTD</h3>
                                <p><?= $ytdSucessCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($ytdSucessSum > 0) {
                                                                $ytdSucessSum = $ytdSucessSum / 100000;
                                                                echo number_format($ytdSucessSum, 2);
                                                            } else {
                                                                echo $ytdSucessSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
<!--                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 ">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Today's Disbursed</h3>
                                <p><?//= $tdDisbursedCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
//                                                            if ($tdDisbursedSum > 0) {
//                                                                $tdDisbursedSum = $tdDisbursedSum / 100000;
//                                                                echo number_format($tdDisbursedSum, 2);
//                                                            } else {
//                                                                echo $tdDisbursedSum;
//                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>-->
<!--                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 ">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Disbursed - MTD</h3>
                                <p><?//= $mtdDisbursedCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
//                                                            if ($mtdDisbursedSum > 0) {
//                                                                $mtdDisbursedSum = $mtdDisbursedSum / 100000;
//                                                                echo number_format($mtdDisbursedSum, 2);
//                                                            } else {
//                                                                echo $mtdDisbursedSum;
//                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Disbursed - QTD</h3>
                                <p><?= $qtdDisbursedCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($qtdDisbursedSum > 0) {
                                                                $qtdDisbursedSum = $qtdDisbursedSum / 100000;
                                                                echo number_format($qtdDisbursedSum, 2);
                                                            } else {
                                                                echo $qtdDisbursedSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Disbursed - YTD</h3>
                                <p><?= $ytdDisbursedCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($ytdDisbursedSum > 0) {
                                                                $ytdDisbursedSum = $ytdDisbursedSum / 100000;
                                                                echo number_format($ytdDisbursedSum, 2);
                                                            } else {
                                                                echo $ytdDisbursedSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
            
<!--                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Today's Login Fee</h3>
                                <p><?//= $tdLoginFeeCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
//                                                            if ($tdLoginFeeSum > 0) {
//                                                                $tdLoginFeeSum = $tdLoginFeeSum / 100000;
//                                                                echo number_format($tdLoginFeeSum, 2);
//                                                            } else {
//                                                                echo $tdLoginFeeSum;
//                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>-->
<!--                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Login Fee - MTD</h3>
                                <p><?//= $mtdLoginFeeCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
//                                                            if ($mtdLoginFeeSum > 0) {
//                                                                $mtdLoginFeeSum = $mtdLoginFeeSum / 100000;
//                                                                echo number_format($mtdLoginFeeSum, 2);
//                                                            } else {
//                                                                echo $mtdLoginFeeSum;
//                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>-->
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Login Fee - QTD</h3>
                                <p><?= $qtdLoginFeeCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($qtdLoginFeeSum > 0) {
                                                                $qtdLoginFeeSum = $qtdLoginFeeSum / 100000;
                                                                echo number_format($qtdLoginFeeSum, 2);
                                                            } else {
                                                                echo $qtdLoginFeeSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Login Fee - YTD</h3>
                                <p><?= $ytdLoginFeeCount; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($ytdLoginFeeSum > 0) {
                                                                $ytdLoginFeeSum = $ytdLoginFeeSum / 100000;
                                                                echo number_format($ytdLoginFeeSum, 2);
                                                            } else {
                                                                echo $ytdLoginFeeSum;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mp_document--block pb-1 mb-3">
            <div class="row mb-3">
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0">BCM Pending - MTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $mtdBCMLoginPendingCount; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0">BCM Pending - YTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $ytdBCMLoginPendingCount; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0">HO Credit Pending - MTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $mtdHOCreditLoginPendingCount; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0">HO Credit Pending - YTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $ytdHOCreditLoginPendingCount; ?></p>
                        </div>
                    </div>
                </div>
            </div>


            <div class="row mb-3">
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0">Rejected By BM/BCM - MTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $mtdBCMRejectedCount; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0">Rejected By BM/BCM - YTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $ytdBCMRejectedCount; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0">Rejected By HO Credit - MTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $mtdHOCreditRejectedCount; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0">Rejected By HO Credit - YTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $ytdHOCreditRejectedCount; ?></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0">Approved By HO Credit - MTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $mtdHOCreditApprovedCount; ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0"> Approved By HO Credit - QTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $qtdHOCreditApprovedCount; ?></p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3 class="m-0"> Approved By HO Credit - YTD</h3>
                                <p></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><?= $ytdHOCreditApprovedCount; ?></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="mp_document--block pb-1 mb-3">
            <div class="row mb-3">
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Collection 0 - 30</h3>

                                <?php if ($collection_0_30 > 0) {
                                    $col_0_30 = $collection_0_30;
                                } else {
                                    $col_0_30 = 0;
                                } ?>
                                <p><?= $col_0_30; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($amount0_30 > 0) {
                                                                $amount0_30 = $amount0_30 / 100000;
                                                                echo number_format($amount0_30, 2);
                                                            } else {
                                                                echo $amount0_30;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Collection 31 - 60</h3>
                                <?php if ($collection_31_60 > 0) {
                                    $col_31_60 = $collection_31_60;
                                } else {
                                    $col_31_60 = 0;
                                } ?>
                                <p><?= $col_31_60; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($amount31_60 > 0) {
                                                                $amount31_60 = $amount31_60 / 100000;
                                                                echo number_format($amount31_60, 2);
                                                            } else {
                                                                echo $amount31_60;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Collection 61 - 90</h3>
                                <?php if ($collection_61_90 > 0) {
                                    $col_61_90 = $collection_61_90;
                                } else {
                                    $col_61_90 = 0;
                                } ?>
                                <p><?= $col_61_90; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($amount61_90 > 0) {
                                                                $amount61_90 = $amount61_90 / 100000;
                                                                echo number_format($amount61_90, 2);
                                                            } else {
                                                                echo $amount61_90;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 col-md-4">
                    <div class="mp_documentLined--block mb-2 mr-2">
                        <div class="mp_documentLined--group">
                            <div class="mp_documentLined--icon"><img src="./images/document.svg" alt="Document" class="img-fluid"></div>
                            <div class="mp_documentLined--content">
                                <h3>Collection 91 & More</h3>
                                <?php if ($collection_90_day > 0) {
                                    $col_day_90 = $collection_90_day;
                                } else {
                                    $col_day_90 = 0;
                                } ?>
                                <p><?= $col_day_90; ?></p>
                            </div>
                        </div>
                        <div class="mp_documentLined--size">
                            <p><i class="fa fa-rupee"></i> <?php
                                                            if ($amount90_day > 0) {
                                                                $amount90_day = $amount90_day / 100000;
                                                                echo number_format($amount90_day, 2);
                                                            } else {
                                                                echo $amount90_day;
                                                            }

                                                            ?> L</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--Document Box-->

        <!--Document Box for graph-->
        <div class="row">
<!--            <div class="col-lg-6 col-md-4">
                <div class="mp_document--block mb-3 mr-1">
                    <ul class="mp_document--actionNav">
                        <li><a href="javascript:void(0);">Refresh</a></li>
                    </ul>

                    <div class="col-lg-6">
                        <div class="mp_document--header">
                            <h3> Login Vs Disbursed (MTD) </h3>
                        </div>
                    </div>
                    <div class="col-lg-3 pull-right mr-0">
                        <div class="input-group">
                            <select class="form-control input-sm minimal" id="state_branch" name="state_branch" style1="cursor:pointer;border:1px solid;">
                                <option value="" disabled="">Select</option>
                                <option value="state" <?php if ($logdisburse == 'state') {
                                                            echo "selected";
                                                        } ?>>State</option>
                                <option value="branch" <?php if ($logdisburse == 'branch') {
                                                            echo "selected";
                                                        }
                                                        if (empty($logdisburse)) {
                                                            echo "selected";
                                                        } ?>>Branch</option>
                            </select>
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default btn-sm" id="login_vs_disbursed_btn">
                                    <span class="fa fa-refresh"></span></button>
                            </div>
                        </div>

                    </div>

                    <div id="login_disbursed"></div>
                </div>

            </div>-->

<!--            <div class="col-lg-6 col-md-4">
                <div class="mp_document--block mb-3 ml-1">
                    <ul class="mp_document--actionNav">
                        <li><a href="javascript:void(0);">Refresh</a></li>
                    </ul>

                    <div class="col-lg-6">
                        <div class="mp_document--header">
                            <h3>Login Vs Rejected (MTD)</h3>
                        </div>
                    </div>
                    <div class="col-lg-3 pull-right mr-0">
                        <div class="input-group">

                            <select class="form-control input-sm minimal" id="search_login_reject" name="search_login_reject">
                                <option value="" disabled="">Select</option>
                                <option value="state" <?php if ($logreject == 'state') {
                                                            echo "selected";
                                                        } ?>>State</option>
                                <option value="branch" <?php if ($logreject == 'branch') {
                                                            echo "selected";
                                                        }
                                                        if (empty($logreject)) {
                                                            echo "selected";
                                                        } ?>>Branch</option>
                            </select>
                            <div class="input-group-btn">
                                <button type="button" class="btn btn-default btn-sm" id="login_vs_rejected_btn">
                                    <span class="fa fa-refresh"></span></button>
                            </div>
                        </div>
                    </div>
                    <div id="login_rejected"></div>

                </div>
            </div>-->
<!--            <div class="col-lg-6 col-md-4">
                <div class="mp_document--block mb-3 mr-1 text-center">
                    <span class="mp_document--action" id="pending_status_btn"><i class="fa fa-refresh mr-3"></i></span>

                    <div class="mp_document--header">
                        <h3 class="text-left">Pending Status (MTD)</h3>
                    </div>
                    <div style="display:inline-block" class="text-center">
                        <div style="width: 100%;text-align:center; float:left;">

                            <div id="pending_status_section" class="min-450"></div>

                        </div>
                    </div>

                </div>
            </div>-->
<!--            <div class="col-lg-6 col-md-4 ">
                <div class="mp_document--block mb-3 ml-1">
                    <span class="mp_document--action" id="branch_performaces_btn"><i class="fa fa-refresh mr-3"></i></span>
                    <div class="mp_document--header">
                        <h3>Branch Performance</h3>
                    </div>

                    <div id="branch_performaces_section" class="min-450"></div>

                </div>
            </div>-->
        </div>
        <!--Document Box-->

    </div>
    </div>


    <script>
        //Document Box JS
        $(document).on('click', function() {
            $('.mp_document--actionNav').removeClass('active')
            $('.mp_document--actionNav').hide()
        });
        $('.mp_document--actionNav').on('click', function(e) {
            e.stopPropagation();
        });
        $('.mp_document--action').on('click', function(e) {
            e.stopPropagation();
            if ($(this).parent('.mp_document--block').find('.mp_document--actionNav').hasClass('active')) {
                $(this).parent('.mp_document--block').find('.mp_document--actionNav').removeClass('active')
                $(this).parent('.mp_document--block').find('.mp_document--actionNav').hide()
            } else {

                $(this).parent('.mp_document--block').find('.mp_document--actionNav').addClass('active');
                $(this).parent('.mp_document--block').find('.mp_document--actionNav.active').show();
            }
        });
    </script>

    <!-- for login disburse -->

    <script>
        var dropVal = $('#state_branch').val();
        var data_type = $('#data_type').val();
        var branch_type = $('#branch_type').val();
        var rm_user_id = $('#rm_user_id').val();

        $(function() {

      //      doPost('NULLL', './?pid=<?= $pid ?>&action=login_vs_disbursed&logdisburse=' + dropVal + '&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'login_disbursed', '3');
        });

        $('#login_vs_disbursed_btn').on("click", function() {
            var dropVal = $('#state_branch').val();
     //       doPost('NULLL', './?pid=<?= $pid ?>&action=login_vs_disbursed&logdisburse=' + dropVal + '&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'login_disbursed', '3');
        });

        $('#state_branch').on('change', function(event) {
            var dropVal = $('#state_branch').val();
     //       doPost('NULLL', './?pid=<?= $pid ?>&action=login_vs_disbursed&logdisburse=' + dropVal + '&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'login_disbursed', '3');
        });
    </script>


    <!-- for login rejected -->

    <script>
        var dropVal = $('#state_branch').val();
        var data_type = $('#data_type').val();
        var branch_type = $('#branch_type').val();
        var rm_user_id = $('#rm_user_id').val();
        $(function() {
            var dropVal = $('#search_login_reject').val();
            doPost('NULLL', './?pid=<?= $pid ?>&action=login_vs_rejected&logreject=' + dropVal + '&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'login_rejected', '3');
        });

        $('#login_vs_rejected_btn').on("click", function() {
            var dropVal = $('#search_login_reject').val();
            doPost('NULLL', './?pid=<?= $pid ?>&action=login_vs_rejected&logreject=' + dropVal + '&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'login_rejected', '3');
        });

        $('#search_login_reject').on('change', function(event) {
            var dropVal = $('#search_login_reject').val();
            doPost('NULLL', './?pid=<?= $pid ?>&action=login_vs_rejected&logreject=' + dropVal + '&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'login_rejected', '3');
        });
    </script>

    <!-- for pending status pie chart -->


    <script>
        var dropVal = $('#state_branch').val();
        var data_type = $('#data_type').val();
        var branch_type = $('#branch_type').val();
        var rm_user_id = $('#rm_user_id').val();
        $(function() {

    //        doPost('NULLL', './?pid=<?= $pid ?>&action=pending_status&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'pending_status_section', '3');
        });

        $('#pending_status_btn').on("click", function() {

     //       doPost('NULLL', './?pid=<?= $pid ?>&action=pending_status&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'pending_status_section', '3');
        });
    </script>
    <!-- line chart for branch performance -->

    <script>
        var dropVal = $('#state_branch').val();
        var data_type = $('#data_type').val();
        var branch_type = $('#branch_type').val();
        var rm_user_id = $('#rm_user_id').val();
        $(function() {
     //       doPost('NULLL', './?pid=<?= $pid ?>&action=branch_performaces&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'branch_performaces_section', '3');
        });

        $('#branch_performaces_btn').on("click", function() {
    //        doPost('NULLL', './?pid=<?= $pid ?>&action=branch_performaces&data_type=' + data_type + '&branch_type=' + branch_type + '&rm_user_id=' + rm_user_id, 'branch_performaces_section', '3');
        });
    </script>


<?php } ?>

<?php if ($action == "login_vs_disbursed") { ?>

    <canvas id="loginDisbursedChart" width="300" height="100"></canvas>
    <script>
        // Fetch PHP data into JavaScript
        var branches = <?php echo json_encode($branches); ?>;
        var loginData = <?php echo json_encode($loginData); ?>;
        var disbursedData = <?php echo json_encode($disbursedData); ?>;


        var ctx = document.getElementById('loginDisbursedChart').getContext('2d');

        var loginDisbursedChart = new Chart(ctx, {
            type: 'bar', // Bar chart
            data: {
                labels: branches, // X-axis labels
                datasets: [{
                        label: 'Login', // Dataset 1: Login data
                        data: loginData, // Data points for Login
                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color for Login bars
                        borderColor: 'rgba(75, 192, 192, 1)', // Border color for Login bars
                        borderWidth: 1,
                        barPercentage: 0.06,
                    },
                    {
                        label: 'Disbursed', // Dataset 2: Disbursed data
                        data: disbursedData, // Data points for Disbursed
                        backgroundColor: 'rgba(153, 102, 255, 0.2)', // Color for Disbursed bars
                        borderColor: 'rgba(153, 102, 255, 1)', // Border color for Disbursed bars
                        borderWidth: 1,
                        barPercentage: 0.06,
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Amount    in   Lakh' // Label for the y-axis
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom', // Legend position
                    }
                }
            }
        });
    </script>
<?php } ?>


<?php if ($action == "login_vs_rejected") { ?>


    <canvas id="loginRejectedChart" width="300" height="100"></canvas>
    <script>
        var branchesData_rejected = <?php echo json_encode($branchesData_rejected); ?>;
        var loginData_rejected = <?php echo json_encode($loginData_rejected); ?>;
        var rejectedData = <?php echo json_encode($rejectedData); ?>;


        var ctx = document.getElementById('loginRejectedChart').getContext('2d');

        var loginRejectedChart = new Chart(ctx, {
            type: 'bar', // Bar chart
            data: {
                labels: branchesData_rejected, // X-axis labels
                datasets: [{
                        label: 'Login', // Dataset 1: Login data
                        data: loginData_rejected, // Data points for Login
                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Color for Login bars
                        borderColor: 'rgba(75, 192, 192, 1)', // Border color for Login bars
                        borderWidth: 1,
                        barPercentage: 0.06,

                    },
                    {
                        label: 'Rejected', // Dataset 2: Rejected data
                        data: rejectedData, // Data points for Rejected
                        backgroundColor: 'rgba(255, 99, 132, 0.2)', // Color for Rejected bars
                        borderColor: 'rgba(255, 99, 132, 1)', // Border color for Rejected bars
                        borderWidth: 1,
                        barPercentage: 0.06,
                    }
                ]
            },
            options: {
                scales: {
                    x: {
                        grid: {
                            display: false
                        },
                    },
                    y: {
                        beginAtZero: true,
                        title: {
                            display: true,
                            text: 'Amount    in   Lakh' // Label for the y-axis
                        }
                    }
                },
                plugins: {
                    legend: {
                        display: true,
                        position: 'bottom', // Legend position
                    }
                }
            }
        });
    </script>

<?php } ?>



<?php if ($action == "pending_status") { ?>

    <canvas id="pendingStatusChart" width="50" height="50"></canvas>

    <script>
        var count_data = <?php echo isset($count_data) ? json_encode($count_data) : '[]'; ?>;
        if (count_data == '0') {

            $('#pending_status_section').html('NO DATA FOUND..');

        } else {

            var backgroundColors = ['rgba(75, 192, 192, 0.6)', 'rgba(255, 99, 132, 0.6)', 'rgba(255, 206, 86, 0.6)', 'rgba(153, 102, 255, 0.6)', 'rgba(54, 162, 235, 0.6)', 'rgba(255, 159, 64, 0.6)', 'rgba(201, 203, 207, 0.6)', 'rgba(100, 149, 237, 0.6)'];

            var borderColors = ['rgba(75, 192, 192, 0.6)', 'rgba(255, 99, 132, 0.6)', 'rgba(255, 206, 86, 0.6)', 'rgba(153, 102, 255, 0.6)', 'rgba(54, 162, 235, 0.6)', 'rgba(255, 159, 64, 0.6)', 'rgba(201, 203, 207, 0.6)', 'rgba(100, 149, 237, 0.6)'];


            var ctx = document.getElementById('pendingStatusChart').getContext('2d');

            var pendingStatusChart = new Chart(ctx, {
                type: 'pie', // Pie chart
                data: {
                    labels: ['Relationship Manager', 'Credit (BCM)', 'ACM Approval', 'RCM Approval', 'Legal & Technical', 'CAM', 'KIT Signing', 'Disbursement'], // Categories
                    datasets: [{
                        label: 'Pending Status MTD', // Chart label
                        data: count_data,
                        backgroundColor: backgroundColors,
                        borderColor: borderColors,
                        borderWidth: 1
                    }]
                },
                options: {
                    responsive: true,
                    plugins: {
                        legend: {
                            display: true,
                            position: 'right', // Legend position
                            lineWidth: 1,
                            align: 'center',
                            labels: {
                                padding: 20,
                                boxWidth: 10,


                                font: {
                                    size: 10,
                                    lineHeight: 1.5,
                                }

                            }
                        },

                        tooltip: {
                            callbacks: {
                                label: function(tooltipItem) {
                                    return tooltipItem.label + ': ' + tooltipItem.raw; // Show label and count

                                }
                            }
                        }
                    }
                }
            });
        }
    </script>
<?php } ?>


<?php if ($action == "branch_performaces") { ?>

    <canvas id="branchAmountChart" width="200" height="100"></canvas>
    <script>
        var branches = <?php echo json_encode($branche_performaces); ?>;
        var currentMonthAmounts = <?php echo json_encode($currentMonths); ?>;
        var lastMonthAmounts = <?php echo json_encode($lastMonths); ?>;


        // Create a line chart using Chart.js
        var ctx = document.getElementById('branchAmountChart').getContext('2d');
        var branchAmountChart = new Chart(ctx, {
            type: 'line', // Line chart type
            data: {
                labels: branches, // X-axis labels representing branches
                datasets: [{
                        label: 'Current Month', // Label for the current month data
                        data: currentMonthAmounts, // Data points for the current month
                        borderColor: 'rgba(75, 192, 192, 1)', // Line color for the current month
                        backgroundColor: 'rgba(75, 192, 192, 0.2)', // Fill color below the line for current month
                        borderWidth: 2,
                        fill: false, // Enable the fill under the line
                        tension: 0.4 // Smooth the line
                    },
                    {
                        label: 'Last Month', // Label for the last month data
                        data: lastMonthAmounts, // Data points for the last month
                        borderColor: 'rgba(255, 99, 132, 1)', // Line color for the last month
                        backgroundColor: 'rgba(255, 99, 132, 0.2)', // Fill color below the line for last month
                        borderWidth: 2,
                        fill: false, // Enable the fill under the line
                        tension: 0.4 // Smooth the line
                    }
                ]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true, // Start the y-axis from 0
                        title: {
                            display: true,
                            text: 'Amount    in   Lakh' // Label for the y-axis
                        }
                    },
                    x: {
                        title: {
                            display: false,
                            //text: 'Branch' // Label for the x-axis
                        }
                    }
                },
                responsive: true, // Enable responsiveness
                plugins: {
                    legend: {
                        position: 'bottom' // Position of the legend
                    },
                    tooltip: {
                        mode: 'index', // Show tooltips for both datasets on hover
                        intersect: false // Ensure tooltips show for both lines even if they don't intersect
                    }
                }
            }
        });
    </script>

<?php } ?>
<?php if($action =="data_explore_leads"){?>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Proposal No.</th>
                <th>Customer Name</th>
                <th>Branch</th>
                <th>Login Date</th>
                <th>Product</th>
                <th>Loan Amount</th>
                <th>Sales Person</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            <?php $count=1;if(count((array)$LeadData)>0){
                foreach($LeadData as $Ld){
                    if($Ld['status']>='15'){
                        $status = 'Disbursed';
                    }else if($Ld['status']< '15' and $Ld['status']>0){
                        $status = 'Proposal Stage';
                    }
                    else if($Ld['status']<0){
                        $status = 'Rejected';
                    }
                    ?>
            <tr>
                <td><?= $count++;?></td>
                <td><?= $Ld['proposal_no'];?></td>
                <td><?= $Ld['customer_name'];?></td>
                <td><?= $bls_global->getBranchName($Ld['branch_id'],'1');?></td>
                <td><?= displayDate($Ld['login_date'],'d-m-Y');?></td>
                <td><?= $Ld['product_type'];?></td>
                <td><?= getFancyNumber($Ld['loan_amount']);?></td>
                <td><?= $bls_global->getUserName($Ld['servicing_id']);?></td>
                <td><?= $status;?></td>
            </tr>
            <?php }}?>
        </tbody>
    </table>
<?php } ?>
