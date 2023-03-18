$datetime_1 = '2023/03/16 13:07:49'; 
$datetime_2 = date('Y/m/d H:i:s'); 
 
$start_datetime = new DateTime($datetime_1); 
$diff = $start_datetime->diff(new DateTime($datetime_2)); 
 
echo $diff->days.' Days total'; 
echo $diff->y.' Years'; 
echo $diff->m.' Months'; 
echo $diff->d.' Days'; 
echo $diff->h.' Hours'; 
echo $diff->i.' Minutes'; 
echo $diff->s.' Seconds';