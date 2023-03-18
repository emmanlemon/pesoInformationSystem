<div class="" style="background-image: url('picture/new.png'); height:90px;box-shadow: 10px 5px 5px black;background-repeat: no-repeat;
  background-size: 3000px 1000px;" data-stellar-background-ratio="1.0">
      <div class="" ></div>
      <div class="">
      <div class="row no-gutters slider-text align-items-end justify-content-start" style="height:300px;"data-scrollax-parent="true">
       
          
        </div>
      </div>
    </div>
    </div>
   
<script>
              var slideIndex = 0;
              carousel();

              function carousel() {
            var i;
            var x = document.getElementsByClassName("mySlides");
                 for (i = 0; i < x.length; i++) {
                   x[i].style.display = "none"; 
                       }
                     slideIndex++;
                     if (slideIndex > x.length) {slideIndex = 1} 
                     x[slideIndex-1].style.display = "block"; 
                     setTimeout(carousel, 3000); 
                      }
</script>
</div>

</div>
<section class="ftco-section" >
      <div class="container">
        <div class="row d-flex">

          

            <?php 
                  $sql = "SELECT * FROM `tblcompany`";
                  $mydb->setQuery($sql);
                  $comp = $mydb->loadResultList(); 

                  foreach ($comp as $company ) { 
            ?>

          <div class="col-md-3 d-flex ftco-animate">
            <div class="blog-entry align-self-stretch"> 
              <a href="<?php echo web_root.'index.php?q=hiring&search='.$company->COMPANYNAME; ?>" class="block-20" style="background-image: url(picture/company.png);">
              </a>
              <div class="text mt-3">
                <div class="meta mb-2">
                  <h5><b>Company Profile & Vacancies</b></h5>
                  <hr></hr>
                </div>
                <h3 class="heading"><a href="<?php echo web_root.'index.php?q=hiring&search='.$company->COMPANYNAME; ?>"><?php echo $company->COMPANYNAME;  ?></a></h3>
                <p>Address :<?php echo $company->COMPANYADDRESS;?></p>
                            <p>Contact No. :<?php echo $company->COMPANYCONTACTNO;?></p>
                            <p>Date Created: 
                            <?php 
                              $datetime_1 = $company->CREATED_AT; 
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
            </div>
          </div> 

 <?php } ?>
          </div>
        </div>
<!--         <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>
                <li><a href="#">2</a></li>
                <li><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div> -->
      </div>
    </section>
   