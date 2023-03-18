
    <div class="hero-wrap js-fullheight " style="background-image: url('./picture/new.png'); height:100px;" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center " data-scrollax-parent="true">
          <div class="col-xl-10 ftco-animate mb-5 pb-5" data-scrollax=" properties: { translateY: '70%' }">
           <br></br>
            <h1 class="mb-5" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Your Dream <br><span>Job is Waiting</span></h1>

            <div class="ftco-search">
              <div class="row">
                <div class="col-md-12 nav-link-wrap">
                  <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link active mr-md-1 bg-white text-dark" id="v-pills-1-tab" data-toggle="pill" href="#v-pills-1" role="tab" aria-controls="v-pills-1" aria-selected="true">Find a Job</a>  
                  </div>
                </div>
                <div class="col-md-12 tab-wrap">
                  
                  
                  <div class="tab-content p-4 bg-white" id="v-pills-tabContent">

                    <div class="" id="v-pills-1" role="tabpanel" aria-labelledby="v-pills-nextgen-tab">
                   
                        <form  class="search-job" action="index.php?q=result&searchfor=advancesearch" method="POST"> 
                        <div class="row">
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="icon"><span class="icon-briefcase text-secondary"></span></div>
                                <input type="text"  name="SEARCH" class="form-control" placeholder="Skills">
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <div class="select-wrap">
                                  <div class="icon"><span class="ion-ios-arrow-down text-secondary"></span></div>
                                  <select name="CATEGORY" class="form-control">
                                    <option value="">Location</option>
                                    <?php
                                      $sql = "SELECT * FROM `tblcategory`";
                                      $mydb->setQuery($sql);
                                      $res = $mydb->loadResultList();
                                      foreach ($res as $row) { 
                                        echo '<option>'.$row->CATEGORY.'</option>';
                                      }
                                    ?>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                              <div class="select-wrap">
                                <div class="icon"><span class="ion-ios-arrow-down text-secondary"></span></div>
                                 <select  name="COMPANY" class="form-control">
                                    <option value="">Company</option>
                                   <?php
                                      $sql = "SELECT * FROM tblcompany";
                                      $mydb->setQuery($sql);
                                      $res = $mydb->loadResultList();
                                      foreach ($res as $row) { 
                                        echo '<option>'.$row->COMPANYNAME.'</option>';
                                      }
                                    ?>
                                  </select>
                                    </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-md">
                            <div class="form-group">
                              <div class="form-field">
                                <input type="submit" value="Search" class="form-control btn btn-primary">
                              </div>
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>

                   
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <section class="ftco-section services-section" style="background-color: ">
  
    <div class="container">
      <div class="row justify-content-center mb-5 pb-3">
        <div class="col-md-7 heading-section text-center ftco-animate">
          <span class="subheading">Categories of work wating for you</span>
          <h2 class="mb-4"><span>Current</span> Job Posts</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">Web Devt. <span class="number" data-number="1000">0</span></a></li>
            <li><a href="#">Graphic Designer <span class="number" data-number="1000">0</span></a></li>
            <li><a href="#">Multimedia <span class="number" data-number="2000">0</span></a></li>
            <li><a href="#">Advertising <span class="number" data-number="900">0</span></a></li>
          </ul>
        </div>
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">Education &amp; Training <span class="number" data-number="3500">0</span></a></li>
            <li><a href="#">English <span class="number" data-number="1560">0</span></a></li>
            <li><a href="#">Social Media <span class="number" data-number="1000">0</span></a></li>
            <li><a href="#">Writing <span class="number" data-number="2500">0</span></a></li>
          </ul>
        </div>
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">PHP Programming <span class="number" data-number="5500">0</span></a></li>
            <li><a href="#">Project Management <span class="number" data-number="2000">0</span></a></li>
            <li><a href="#">Finance Management <span class="number" data-number="800">0</span></a></li>
            <li><a href="#">Office &amp; Admin <span class="number" data-number="7000">0</span></a></li>
          </ul>
        </div>
        <div class="col-md-3 ftco-animate">
          <ul class="category">
            <li><a href="#">Web Designer <span><span class="number" data-number="8000">0</span></span></a></li>
            <li><a href="#">Customer Service <span class="number" data-number="4000">0</span></a></li>
            <li><a href="#">Marketing &amp; Sales <span class="number" data-number="3300">0</span></a></li>
            <li><a href="#">Software Development <span class="number" data-number="1356">0</span></a></li>
          </ul>
        </div>
      </div>
    </div>
  </section>
  <!-- END SECOND SECTION -->

  <!-- START THIRD SECTION -->
  <section class="ftco-section ftco-counter img" id="section-counter" style="background-image: url(/plugins/jobportal/images/bg_1.jpg);" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10">
          <div class="row">
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="1350000">0</strong>
                  <span>Jobs</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="40000">0</strong>
                  <span>Members</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="30000">0</strong>
                  <span>Resume</span>
                </div>
              </div>
            </div>
            <div class="col-md-3 d-flex justify-content-center counter-wrap ftco-animate">
              <div class="block-18 text-center">
                <div class="text">
                  <strong class="number" data-number="10500">0</strong>
                  <span>Company</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- END THIRD SECTION --> 