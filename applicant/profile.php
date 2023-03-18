<?php   
    $view = isset($_GET['view']) ? $_GET['view'] :"";  
	  $appl = New Applicants();
	  $applicant = $appl->single_applicant($_SESSION['APPLICANTID']); 
  ?>

    <div class="" style="background-image: url('photos/new.png'); height:90px;box-shadow: 10px 5px 5px black;" data-stellar-background-ratio="1.0">
      <div class="overlay"></div>
      <div class="container">

          </div>
        </div>
      </div>
    </div>
  <style type="text/css">
/*    #image-container {
      width: 230px;
    }*/
    .panel-body img{
      width: 100%;
      height: 50%;
    }
    .panel-body img:hover{
      cursor: pointer;
    }
  </style>
<section id="inner-headline">
  <div class="container">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="pageTitle">Profile</h1>
          </div>
      </div>
  </div>
</section>
<div class="container" style="margin-top: 10px;min-height: 600px;">

    <div class="row">

        <div class="col-sm-3"><!--left col-->
           <div class="panel panel-default">            
            <div class="panel-body"> 
              <div  id="">
                <img src="user_icon.png">  
              </div>
             </div>
          <ul class="list-group" style="text-align: center;"> 
         
            <h3 class="list-group-item text-muted">Profile</h3> 
            <li class="list-group-item "><span class="pull-left" ><strong >Real Name</strong></span> 
           <p style="text-align: center;">  <?php echo $applicant->FNAME .' '.substr($applicant->MNAME, 0,).'. '.$applicant->LNAME; ?> </p>
             </li>
            
          </ul> 
                

          <div class="box box-solid">  
            <div class="box-body no-padding"> 
                <p class="<?php echo ($view=='appliedjobs' || $view=='') ? 'active': '';?>"><a href="<?php echo web_root.'applicant/index.php?view=appliedjobs'; ?>"><i class="fa fa-list"></i> Applied Jobs
                   </a></p>
                  <p class="<?php echo ($view=='accounts') ? 'active': '';?>"><a href="<?php echo web_root.'applicant/index.php?view=accounts'; ?>"><i class="fa fa-user"></i> Accounts </a></p>

                  
                   <p class="<?php echo ($view=='notification') ? 'active': '';?>"><a href="<?php echo web_root.'applicant/index.php?view=notification'; ?>"><i class="fa fa-bell-o"></i> Notification
                  <span class="label label-success pull-right"><?php echo $notif; ?></span></a></p>

                    <p class=""><a href="<?php echo web_root.'logout.php';?>">Logout</span></a></p>
                  
            </div>
            <!-- /.box-body -->
          </div>
  
          <!-- /.box -->
          </div>
          
        </div> 
        <div class="col-sm-9">
        <?php
        check_message();  
        check_active(); 
            
        ?>

          <!-- <h1><?php echo $applicant->FNAME .' '.$applicant->MNAME.' '.$applicant->LNAME; ?>  </h1> -->
<?php 
    // if ($view =="message") { 
    //  require_once("message.php");
    // }elseif($view=='notification'){  
    //     require_once("notification.php");  
    // }elseif($view=='appliedjobs'){    
    //     require_once("appliedjobs.php"); 
    // }elseif($view=='accounts'){  
    //     require_once("accounts.php");  
    // }else{ 
    //     require_once("appliedjobs.php");
    // } 

    switch ($view) {
      case 'message':
        # code...
        require_once("message.php");
        break;
      case 'notification':
        # code...
        require_once("notification.php");
        break;
      case 'appliedjobs':
        # code...
        require_once("appliedjobs.php");
        break;
      case 'accounts':
        # code...
        require_once("accountprofile.php");
        break;
      
      default:
        # code...
        require_once("appliedjobs.php");
        break;
    }
?>  
         <!--   <ul class="nav nav-tabs" id="myTab">
        <li class="<?php echo  $_SESSION['appliedjobs']; ?>"><a href="<?php echo web_root.'applicant/index.php?view=appliedjobs'; ?>" >Applied Jobs</a></li> 
        <li class="<?php echo  $_SESSION['accounts'];  ?>"><a href="<?php echo web_root.'applicant/index.php?view=accounts'; ?>" >Accounts</a></li> 
      </ul>
          
      <div class="tab-content bottomline">
         
         <div class="tab-pane <?php echo $_SESSION['appliedjobs']; ?>" id="appliedjobs"><br/>  
         </div>
           <div class="tab-pane <?php echo $_SESSION['accounts']; ?>" id="accounts"><br/>  
          </div> 

        </div> -->    
        </div><!--/col-sm-9-->
    </div><!--/row-->

  </div><!--/contanier--> 

   <?php  
    unset($_SESSION['appliedjobs']);
    unset($_SESSION['accounts']); 
     ?>
 
         <!-- Modal -->
                  
                         
