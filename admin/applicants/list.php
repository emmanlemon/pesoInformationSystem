<?php
if(!isset($_SESSION['ADMIN_USERID'])){
	redirect(web_root."admin/index.php");
}

?> 
<div class="row"> 
	<div class="col-lg-12">
		<h1 class="page-header fa fa-users">List of Applicant's   </h1>
	</div>
	<!-- /.col-lg-12 -->
	</div>

<form class="wow fadeInDownaction" action="controller.php?action=delete" Method="POST">   		
	<table id="tblUser" class="table table-striped  table-hover table-responsive" style="font-size:12px" cellspacing="0">

		<thead>
			<tr>
				<th>Applicant</th>
				<th>Job Title</th>
				<th>Company</th>
				<th>Applied Date</th> 
				<th>Remarks</th>
				<th width="14%" >Action</th> 
			</tr>	
		</thead> 
		<tbody>
			<?php   
							  		// $mydb->setQuery("SELECT * 
											// 			FROM  `tblusers` WHERE TYPE != 'Customer'");
			// $mydb->setQuery("SELECT * FROM `tblcompany` c  , `tbljobregistration` j, `tbljob` j2, `tblapplicants` a WHERE c.`COMPANYID`=j.`COMPANYID` AND  j.`JOBID`=j2.`JOBID` AND j.`APPLICANTID`=a.`APPLICANTID` ");
			// $cur = $mydb->loadResultList();
			require_once ("../../include/db_connection.php");
			
			$sql = "SELECT * FROM `tblcompany` c  , `tbljobregistration` j, `tbljob` j2, `tblapplicants` a 
			WHERE
			c.`COMPANYID`= j.`COMPANYID` AND  
			j.`JOBID`=j2.`JOBID` AND 
			j.`APPLICANTID`=a.`APPLICANTID` ";
			$result = $conn->query($sql);
			$cur = [];
			if ($result->num_rows > 0) {
				$cur = $result->fetch_all(MYSQLI_ASSOC);
			}
			foreach ($cur as $result) { 
				echo '<tr>';
							  		// echo '<td width="5%" align="center"></td>';
				echo '<td>'. $result['APPLICANT'].'</td>';
				echo '<td>' . $result['OCCUPATIONTITLE'].'</a></td>';
				echo '<td>' . $result['COMPANYNAME'].'</a></td>'; 
				echo '<td>'. $result['REGISTRATIONDATE'].'</td>';
				echo '<td>'. $result['REMARKS'].'</td>';  
				echo '<td align="center" >    
				<a title="View" href="index.php?view=view&id='.$result['REGISTRATIONID'].'"  class="btn btn-info btn-xs  ">
				<span class="fa fa-info fw-fa"></span> View</a> 
				<a title="Remove" href="controller.php?action=delete&id='.$result['REGISTRATIONID'].'"  class="btn btn-danger btn-xs  ">
				<span class="fa fa-trash-o fw-fa"></span> Remove</a> 
				</td>';
				echo '</tr>';
			} 
			?>
		</tbody>
		
	</table>
	
	
</form>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script type="text/javascript" src="https://cdn.datatables.net/v/dt/dt-1.11.5/datatables.min.js"></script>
<script>
jQuery(document).ready(function($) {
    $('#tblUser').DataTable();
} );
</script>


