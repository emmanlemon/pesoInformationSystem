<div class="" style="background-image: url('picture/new.png'); height:90px;box-shadow: 10px 5px 5px black;background-repeat: no-repeat;
  background-size: 3000px 1000px;" data-stellar-background-ratio="1.0">
      <div class="" ></div>
      <div class="">
      <div class="row no-gutters slider-text align-items-end justify-content-start" style="height:300px;"data-scrollax-parent="true">
       
          
        </div>
        </div>
        </div>
    </div>

<section class="ftco-section" style="background-color:solid black;">
<input id="myInput" type="text" placeholder="Search.."style="margin-left:1000px;border: 2px solid black;">

            <div class="container">
    
                <div class="row d-flex"  id="myData">

                     <?php
 if (isset($_GET['search'])) {
     # code...
    $COMPANYNAME = $_GET['search'];
 }else{
     $COMPANYNAME = '';

 }
    $sql = "SELECT * FROM `tblcompany` c,`tbljob` j WHERE c.`COMPANYID`=j.`COMPANYID` AND COMPANYNAME LIKE '%" . $COMPANYNAME ."%' ORDER BY DATEPOSTED DESC" ;
    $mydb->setQuery($sql);
    $cur = $mydb->loadResultList();


    foreach ($cur as $result) {

        ?>

<tr>
  
</tr>

          <div class="col-md-12 ftco-animate"style="border: 0.1px solid;
  margin: 8px;padding:10px;
  box-shadow: 10px 5px;">

            <div class=" bg-white p-8 d-block d-md-flex align-items-center" id="columnData">

              <div class="mb-4 mb-md-0 mr-5 ">
                <div class="job-post-item-header d-flex align-items-center">
                  <h2 class="mr-3 text-black h3" ><?php echo $result->OCCUPATIONTITLE ?></h2>
                  <div class="badge-wrap">
                   <span class="bg-primary text-white badge py-2 px-3"><?php echo $result->CATEGORY ?></span>
                  </div>
                </div>
                <div class="job-post-item-body d-block d-md-flex">
                  <div class="mr-3"><span class="icon-layers"></span> <a href="#"><?php echo $result->COMPANYNAME ?></a></div>
                 
                </div>
              </div>

              <div class="ml-auto d-flex">
                <a href="<?php echo web_root; ?>index.php?q=apply&job=<?php echo $result->JOBID;?>&view=personalinfo" class="btn btn-primary py-2 mr-1">Apply Job</a>
              
              </div>
               
            </div>
            <p>Date Created:
            <?php 
                              $datetime_1 =  $result->DATEPOSTED; 
                              $datetime_2 = date('Y/m/d H:i:s'); 
                              
                              $start_datetime = new DateTime($datetime_1); 
                              $diff = $start_datetime->diff(new DateTime($datetime_2)); 
                              
                              // echo $diff->y.' Years'; 
                              echo $diff->m.' Months '; 
                              echo $diff->d.' Days '; 
                              echo $diff->h.' Hours '; 
                              echo $diff->i.' Minutes'; 
                              echo $diff->s.' Seconds';
?>
                            </p>     
              </div>
          <!-- end -->
 <?php } ?>
         
  <?php  
        // $sql = "SELECT * from SELECT * FROM `tblcompany`";
        //    $mydb->setQuery($sql);

        // $paginationlink = "getresult.php?page=";	
        // $pagination_setting = $_GET["pagination_setting"];
                
        // $page = 1;
        // if(!empty($_GET["page"])) {
        // $page = $_GET["page"];
        // }

        // $start = ($page-1)*$perPage->perpage;
        // if($start < 0) $start = 0;

        // $query =  $sql . " limit " . $start . "," . $perPage->perpage; 
        // $mydb->setQuery($sql);

        // if(empty($_GET["rowcount"])) {
        // $_GET["rowcount"] = $mydb->numRows($sql);
        // }
        // if($pagination_setting == "prev-next") {
        //   $perpageresult = $perPage->getPrevNext($_GET["rowcount"], $paginationlink,$pagination_setting);	
        // } else {
        //   $perpageresult = $perPage->getAllPageLinks($_GET["rowcount"], $paginationlink,$pagination_setting);	
        // }
        // $output = '';
        // foreach($faq as $k=>$v) {
        // $output .= '<div class="question"><input type="hidden" id="rowcount" name="rowcount" value="' . $_GET["rowcount"] . '" />' . $faq[$k]["question"] . '</div>';
        // $output .= '<div class="answer">' . $faq[$k]["answer"] . '</div>';
        // }
        // if(!empty($perpageresult)) {
        // $output .= '<div id="pagination">' . $perpageresult . '</div>';
        // }
        // print $output;
?>
            <!--    <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li ><a href="active">2</a></li>
                <li><a href="active">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> 
            </div>-->
        </section>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
        <script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myData div").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>




 