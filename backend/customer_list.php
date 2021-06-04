<?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                //2. query ข้อมูลจากตาราง tb_admin:
                $query = "SELECT * FROM customer_data1 ORDER BY a_id ASC" or die("Error:" . mysqli_error());
                //3.เก็บข้อมูลที่ query ออกมาไว้ในตัวแปร result .
                $result = mysqli_query($con, $query);
                //4 . แสดงข้อมูลที่ query ออกมา โดยใช้ตารางในการจัดข้อมูล:
              
                echo ' <table class="table table-hover">';
                  //หัวข้อตาราง 
                    echo "
                      <tr>
                      <td width='5%'>ชื่อร้านลูกค้า</td>
                      <td>ชื่อลูกค้า</td>
                      <td>ที่อยู่</td>
                      <td>เบอร์</td>
                      <td>เว็บไซต์ลูกค้า</td>
                      <td>หมายเลขประจําสินค้า</td>
                      <td>รหัสลับ</td>
                      <td>โลโก้ร้าน</td>
                      <td>สถานะลูกค้า</td>
                      <td>วันที่ลงข้อมูล</td>
                      <td>เวลาที่แก้ไข</td>
                    </tr>";
                
                  while($row = mysqli_fetch_array($result)) {
                  echo "<tr>";
                    echo "<td>" .$row["a_storename"] .  "</td> ";
                    echo "<td>" .$row["a_name"] .  "</td> ";
                    echo "<td>" .$row["a_address"] .  "</td> ";
                    echo "<td>" .$row["a_number"] .  "</td> ";
                    echo "<td>" .$row["a_link"] .  "</td> ";
                    echo "<td>" .$row["a_sn"] .  "</td> ";
                    echo "<td>" .$row["a_code"] .  "</td> ";
                    echo "<td align=center>"."<img src='a_logo/".$row["newname"]."' width='100'>"."</td>";
                    echo "<td>" .$row["a_status"] .  "</td> ";
                    echo "<td>" .$row["datesave"] .  "</td> ";
                    echo "<td>" .$row["datanow"] .  "</td> ";
                    //แก้ไขข้อมูล
                    echo "<td><a href='customerdata.php?act=edit&ID=$row[0]' class='btn btn-warning btn-xs'>แก้ไข</a></td> ";

                    //ดูข้อมูล
                    echo "<td><a href='list_user.php?act=edit&ID=$row[0]' class='btn btn-success btn-xs'>ดูข้ออมูล</a></td> ";
                    
                    //ลบข้อมูล
                    echo "<td><a href='customer_del.php?ID=$row[0]' onclick=\"return confirm('Do you want to delete this record? !!!')\" class='btn btn-danger btn-xs'>ลบ</a></td> ";
                  echo "</tr>";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>
                