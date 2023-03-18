<div class="" style="background-image: url('picture/new.png'); height:90px;" data-stellar-background-ratio="1.0">
      <div class="" ></div>
      <div class="">
      <div class="row no-gutters slider-text align-items-end justify-content-start" style="height:300px;"data-scrollax-parent="true">
          
      
          </div>
        </div>
      </div>
    </div>
    </div>

 <?php
if (isset($_GET['job'])) {
# code...
$jobid = $_GET['job'];
}else{
$jobid = '';

}
$sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND JOBID LIKE '%" . $jobid ."%' ORDER BY DATEPOSTED DESC" ;
$mydb->setQuery($sql);
$result = $mydb->loadSingleResult();

?> 
<section class=" contact-section bg-light"style="margin-top:10px">
      <div class="container">
        <div class="row d-flex mb-1 contact-info">



            <h2 class="page-header" >Job Details</h2>
           
        </div>
        <div class="row block-9">
          <div class="col-md-6 order-md-last d-flex">
              <form class="form-horizontal span6  wow fadeInDown" action="process.php?action=submitapplication&JOBID=<?php echo $result->JOBID; ?>"  enctype="multipart/form-data"  method="POST" autocomplete="off">

               <?php require_once('applicantform.php') ?>  

            </form>
          </div>
          <div class="col-md-6 d-flex">
                     <div class="panel">
                         <div class="panel-header">
                              <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;"><a href="<?php echo web_root.'index.php?q=viewjob&search='.$result->JOBID;?>"><?php echo $result->OCCUPATIONTITLE ;?></a> 
                              </div> 
                         </div>
                         <div class="panel-body">
                                  <div class="row contentbody">
                                        <div class="col-md-6">
                                            <ul>
                                                <li><i class="fp-ht-bed"></i>Required No. of Employee's : <?php echo $result->REQ_NO_EMPLOYEES; ?></li>
                                                <li><i class="fp-ht-food"></i>Salary : <?php echo number_format($result->SALARIES,2);  ?></li>
                                                <li><i class="fa fa-sun-"></i>Duration of Employment : <?php echo $result->DURATION_EMPLOYEMENT; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-6">
                                            <ul> 
                                                <li><i class="fp-ht-tv"></i>Prefered Sex : <?php echo $result->PREFEREDSEX; ?></li>
                                                <li><i class="fp-ht-computer"></i>Sector of Vacancy : <?php echo $result->SECTOR_VACANCY; ?></li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12">
                                            <p>Qualification/Work Experience :</p>
                                             <ul style="list-style: none;"> 
                                                <li><?php echo $result->QUALIFICATION_WORKEXPERIENCE ;?></li> 
                                            </ul> 
                                        </div>
                                        <div class="col-md-12"> 
                                            <p>Job Description:</p>
                                            <ul style="list-style: none;"> 
                                                 <li><?php echo $result->JOBDESCRIPTION ;?></li> 
                                            </ul> 
                                         </div>
                                        <div class="col-md-12">
                                            <p>Employer :  <?php echo  $result->COMPANYNAME; ?></p> 
                                            <p>Location :  <?php echo  $result->COMPANYADDRESS; ?></p>
                                        </div>
                                    </div>
                         </div>
                         <div class="panel-footer">
                              Date Posted :  <?php echo date_format(date_create($result->DATEPOSTED),'M d, Y'); ?>
                         </div>
                     </div> 

          </div>
        </div>
      </div>
    </section>
