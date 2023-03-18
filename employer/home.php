
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Dashboard</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <!-- Small boxes (Stat box) -->
      <div class="row">
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-aqua">
            <div class="inner">
              <h3><?php
                // $sql = "SELECT count(*) as 'COMP' FROM `tblcompany` WHERE 1";
                $sql = "SELECT count(*) as 'COMP' FROM `tbljob` WHERE 1";

                $mydb->setQuery($sql);
                $pending = $mydb->loadSingleResult();
                echo $pending->COMP;
                ?>
              </h3>

              <p>Vacancy</p>
            </div>
            <div class="icon " >
              <i class="ion ion-bag " ><img src="../picture/company.jpg" alt="" idth="200" height="100" style="margin-right:20px;"> </i>
            </div>
            <a href="../vacancy" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>

        <!-- ./col -->
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-yellow">
            <div class="inner">
              <h3><?php
                $sql = "SELECT count(*) as 'EMPL' FROM `tblemployees` WHERE 1";
                $mydb->setQuery($sql);
                $pending = $mydb->loadSingleResult();
                echo $pending->EMPL;
                ?></h3>

              <p>Employee</p>
            </div>
            <div class="icon">
              <i class="ion ion-stats-bars" ><img src="../picture/employee.png" alt="" idth="200" height="100" style="margin-right:20px;"></i>
            </div>
            <a href="../employee" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-4 col-xs-8">
          <!-- small box -->
          <div class="small-box bg-red">
            <div class="inner">
              <h3><?php
              //  $sql = "SELECT count(*) as 'APPL' FROM `tblapplicants` WHERE 1";
           $sql = "SELECT count(*) as 'APPL' FROM `tbljobregistration` WHERE 1";

                $mydb->setQuery($sql);
                $pending = $mydb->loadSingleResult();
                echo $pending->APPL;
                ?>
              </h3> 
              <p>Applicants</p>
            </div>
            <div class="icon">
              <i class="ion ion-pie-graph"><img src="../picture/applicant icon.jpg" alt="" idth="200" height="100" style="margin-right:20px;"></i>
            </div>
            <a href="../applicants" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
          </div>
        </div>
        <!-- ./col -->
      </div>
     
      <!-- /.row -->
    </section>
    
    <!-- /.content -->
  