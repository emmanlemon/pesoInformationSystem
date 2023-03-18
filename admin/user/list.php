<?php
	 if (!isset($_SESSION['ADMIN_USERID'])){
      redirect(web_root."admin/index.php");
     }

?> 
       	 <div class="col-lg-12">
            <h1 class="page-header">List of Users  <a href="index.php?view=add" class="btn btn-primary btn-xs  ">  <i class="fa fa-plus-circle fw-fa"></i> Add User</a>  </h1>
       		</div>
        	<!-- /.col-lg-12 --> 
   		 	<div class="col-lg-12"> 
				<!-- <table id="tblUser" id="dash-table" class="table  table-bordered table-hover table-responsive" style="font-size:12px;" cellspacing="0">  -->
				<table id="tblUser" class="table  table-bordered table-hover table-responsive" style="font-size:12px;" cellspacing="0">   
				<thead>
				  	<tr>
				  		<th>Account ID</th>
				  		<th> Account Name</th>
				  		<th>Username</th>
				  		<th>Role</th>
				  		<th width="10%" >Action</th>
				 
				  	</tr>	
				  </thead> 
				  <tbody>
				  	<?php 
				  		// $mydb->setQuery("SELECT * 
								// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
						require_once ("../../include/db_connection.php");

				  		// $mydb->setQuery("SELECT * FROM  `tblusers`");
				  		// $cur = $mydb->loadResultList();
						  $sql = "SELECT * FROM tblusers";
						  $result = $conn->query($sql);
						  $cur = [];
						  if ($result->num_rows > 0) {
							  $cur = $result->fetch_all(MYSQLI_ASSOC);
						  }
						foreach ($cur as $result) {
				  		echo '<tr>';
				  		// echo '<td width="5%" align="center"></td>';
				  		echo '<td>' . $result['USERID'].'</a></td>';
				  		echo '<td>' . $result['FULLNAME'].'</a></td>';
				  		echo '<td>'. $result['USERNAME'].'</td>';
				  		echo '<td>'. $result['ROLE'].'</td>';
				  		If($result['USERID']==$_SESSION['ADMIN_USERID'] || $result['ROLE']=='MainAdministrator' || $result['ROLE']=='Administrator') {
				  			$active = "Disabled";

				  		}else{
				  			$active = "";

				  		}

				  		echo '<td align="center" > <a title="Edit" href="index.php?view=edit&id='.$result['USERID'].'"  class="btn btn-primary btn-xs  ">  <span class="fa fa-edit fw-fa"></span></a>
				  					 <a title="Delete" href="controller.php?action=delete&id='.$result['USERID'].'" class="btn btn-danger btn-xs" '.$active.'><span class="fa fa-trash-o fw-fa"></span> </a>
				  					 </td>';
				  		echo '</tr>';
				  	} 
				  	?>
				  </tbody>
					
				</table>  
			</div> 
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>