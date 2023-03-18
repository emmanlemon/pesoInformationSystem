
<!-- <div class="form-group">
  <div class="col-md-11">
  <label class="col-md-4 control-label" for=
    "NATIONALID">NationalID:</label>

    <div class="col-md-8"> 
       <input class="form-control " id="NATIONALID" name="NATIONALID" placeholder=
          "00-000000000000" type="text" value=""  onkeyup="javascript:capitalize(this.id, this.value);" >
    </div>
  </div>
</div> -->
<style type="text/css">
.form-control-2 {
  display: inline-block;
  width: 25%;
  padding: 0.375rem 0.75rem;
  font-size: 1rem;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: 0.25rem;
  -webkit-transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out;
  -o-transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out;
  transition: border-color 0.15s ease-in-out, box-shadow 0.15s ease-in-out, -webkit-box-shadow 0.15s ease-in-out; }
.error{
  color: red;
  font-weight: 600;
}
</style>

<?php 
if (!isset($_SESSION['APPLICANTID'])) {
?>

            <form action="#" class="bg-white p-5 contact-form">
              <div class="form-group">
               <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
               <input class="form-control " id="FNAME" name="FNAME" placeholder=
                  "Firstname" type="text" value=""  required onkeyup="javascript:capitalize(this.id, this.value);" >
              </div>
              <div class="form-group">
                   <input  class="form-control " id="LNAME" name="LNAME" placeholder="Lastname"  required onkeyup="javascript:capitalize(this.id, this.value);" >
              </div>
              <div class="form-group">
                <input  class="form-control " id="MNAME" name="MNAME" placeholder="Middle Name" required onkeyup="javascript:capitalize(this.id, this.value);" > 
              </div>
              <div class="form-group"> 
                  <textarea class="form-control " id="ADDRESS" name="ADDRESS" placeholder="Address" type="text" value=""   required onkeyup="javascript:capitalize(this.id, this.value);" ></textarea>
              </div>

              <div class="form-group">   
                Sex: 
                    <input checked id="optionsRadios1" checked="True" name="optionsRadios" type="radio" value="Female">Female
                     <input id="optionsRadios2"   name="optionsRadios" type="radio" value="Male"> Male   
              </div>


    <div class="form-group">  Date of Birth  
        <select class="form-control-2" name="month">
          <option>Month</option>
          <?php

             $mon = array('Jan' => 1 ,'Feb'=> 2,'Mar' => 3 ,'Apr'=> 4,'May' => 5 ,'Jun'=> 6,'Jul' => 7 ,'Aug'=> 8,'Sep' => 9 ,'Oct'=> 10,'Nov' => 11 ,'Dec'=> 11 );    
          
        
            foreach ($mon as $month => $value ) {
              
                  # code...
                   echo '<option value='.$value.'>'.$month.'</option>';
                } 
          ?>
        </select> 
        <select class="form-control-2" name="day">
          <option>Day</option>
        <?php 
          $d = range(31, 1);
          foreach ($d as $day) {
            echo '<option value='.$day.'>'.$day.'</option>';
          }
        
        ?>
          
        </select> 
        <select class="form-control-2" name="year">
          <option>Year</option>
        <?php 
          $years = range(2010, 1900);
          foreach ($years as $yr) {
            echo '<option value='.$yr.'>'.$yr.'</option>';
          }
        
        ?>
        
        </select>
      </div> 
 
              <div class="form-group">  
                <textarea class="form-control " id="BIRTHPLACE" name="BIRTHPLACE" placeholder= "Place of Birth" type="text" value=""   onkeyup="javascript:capitalize(this.id, this.value);" ></textarea>
              </div>
              <div class="form-group"> 
                 <input class="form-control " id="TELNO" name="TELNO" placeholder= "Contact No." type="text" any value=""   onkeyup="javascript:capitalize(this.id, this.value);" >
              </div>
              <div class="form-group">
                    <select class="form-control " name="CIVILSTATUS" id="CIVILSTATUS">
                        <option value="none" >Select Civil Status</option>
                        <option value="Single">Single</option>
                        <option value="Married">Married</option>
                        <option value="Widow" >Widow</option> 
                    </select> 
                
              </div>
              <div class="form-group">
                   <input type="Email" class="form-control " id="EMAILADDRESS" name="EMAILADDRESS" placeholder="Email Address"   autocomplete="false" required/>  
              </div>
              <p class="error" id="emailValidation"></p>
              <div class="form-group">
                 <input  class="form-control " id="USERNAME" name="USERNAME" placeholder="Username"    onkeyup="javascript:capitalize(this.id, this.value);" >
                
              </div>
              <div class="form-group">
                   <input  class="form-control " id="PASS" name="PASS" placeholder="Password" type="password"   onkeyup="javascript:capitalize(this.id, this.value);" > 
              </div>
              <div class="form-group">
                   <input  class="form-control " id="confirm_password" name="confirm_password" placeholder="Confirm Password" type="password"   onkeyup="javascript:capitalize(this.id, this.value);" > 
              </div>
              <p class="error" id="errormessage" style="display: none ;">Password That You Input didnt match!</p>
              <div class="form-group">
                  <input  class="form-control " id="DEGREE" name="DEGREE" placeholder="Educational Attainment"    onkeyup="javascript:capitalize(this.id, this.value);" >
                
              </div>


             <div class="form-group"> 
                 Attach your Resume here. 
                    <input id="picture" name="picture" type="file" accept=".xlsx , .doc , .ppt " >
                    <input name="MAX_FILE_SIZE" type="hidden" value="1000000" > 
                    <p>If you don't have Resume File --><a href="download.php?val=Resume" title="Click Me"> Click Me</a></p>
            </div>  
      



              <div class="form-group">
                <input type="checkbox"> By Sign up you are agree with our <a href="#">terms and condition</a> 
              </div> 

              <div class="form-group">
                <input type="submit" value="Submit Application" id="submit" name="submit" class="btn btn-primary py-3 px-5">
              </div>
            </form>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
            <script>
            var form_submit = false;  
              $('form').submit( function () {
                
                function validateInput () {
                     var email = document.getElementById("EMAILADDRESS");
                    var Password = document.getElementById("PASS");
                    var confirm_password = document.getElementById("confirm_password");

                    if(Password.value != confirm_password.value){  
                      $("#errormessage").show();
                    }
                    if(Password.value == confirm_password.value){  
                      $("#errormessage").hide();  
                      form_submit =  true;
                    }
                    if(email.value != null) {
                      var xmlhttp = new XMLHttpRequest();
                      xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                          $('#emailValidation').fadeOut(); 
                            $('#emailValidation').fadeIn();
                          $("#emailValidation").html(this.responseText);
                        }
                      };
                      xmlhttp.open("GET","getemail.php?q="+email.value,true);
                      xmlhttp.send(); 
                    }
                  }
                  

                    if (form_submit){
                          return true;
                      } else {
                          validateInput();
                          return false;
                      }
});
              
            </script>

 <?php }else{ ?>

   <div class="col-md-12">
                   <div class="row">
                    <form class="form-horizontal span6 " action="process.php?action=submitapplication&JOBID=<?php echo $result->JOBID; ?>"  enctype="multipart/form-data"  method="POST">
                        <div class="col-md-12">
                            <div class="row">
                                <div class="panel panel-default">
                                    <div class="panel-header">
                                        <div style="border-bottom: 1px solid #ddd;padding: 10px;font-size: 25px;font-weight: bold;color: #000;margin-bottom: 5px;">Attach your Resume here.
                                            <input name="JOBID" type="hidden" value="<?php echo $_GET['job'];?>">
                                        </div>
                                    </div>
                                    <div class="panel-body"> 
                                        <label class="col-md-2" for="picture" style="padding: 0;margin: 0;">Attachtment File:</label> 
                                        <div class="col-md-10" style="padding: 0;margin: 0;">
                                            <input id="picture" name="picture" type="file">
                                            <input name="MAX_FILE_SIZE" type="hidden" value="1000000"> 
                                        </div> 
                                    </div>
                                </div> 
                            </div> 
                        </div>
                       <div class="form-group"style="margin-top:10px">
                        <div class="col-md-12"> 
                             <button class="btn btn-primary btn-md pull-right" name="submit" type="submit" >Submit <span class="fa fa-arrow-right"></span></button>
                          <a href="index.php" class="btn btn-primary btn-md pull-right"><span class="fa fa-arrow-left"></span>&nbsp;<strong>Back</strong></a> 
                        
                        </div>
                       </div> 
                    </form>
                     
                       
                </div>
            </div> 


    <?php } ?>
