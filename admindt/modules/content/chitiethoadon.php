<?php
$idhd = $_GET['id'];
include ("../../../core/connect.php");
 $sql = "SELECT * FROM chitietdonhang where idHD = $idhd";
 $run = mysqli_query($conn,$sql);
 $num = mysqli_num_rows($run);
 $i = 0; 
                            if($num > 0)
                            {
                                while ($row = mysqli_fetch_array($run)) {
                                    if($i <= $num){
                                            echo '<tr>
                                            		<td>'.$row['idHD'].'</th>
													<td>'.$row['idSP'].'</th>
													<td>'.number_format($row['Dongia'],0,',','.').' VNĐ</th>
													<td>'.$row['Soluong'].'</th>
													<td>'.number_format($row['Thanhtien'],0,',','.').' VNĐ</th>	
											</tr>';   
                                    }
                                    $i++;
                                }
                            }
?>