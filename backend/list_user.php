<?php
      include('h.php');
                //1. เชื่อมต่อ database:
                include('condb.php');  //ไฟล์เชื่อมต่อกับ database ที่เราได้สร้างไว้ก่อนหน้าน้ี
                $a_id = $_GET["ID"];
                //2. query ข้อมูลจากตาราง:
                $sql = "SELECT * FROM customer_data1 WHERE a_id='$a_id' ";
                $result2 = mysqli_query($con, $sql) or die ("Error in query: $sql " . mysqli_error());
                $row = mysqli_fetch_array($result2);
                extract($row);
                $result = mysqli_query($con, $sql);
                
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
                    echo "<td align=center>"."<img src='a_logo/".$row["newname"]."' width='400'>"."</td>";
                    echo "<td>" .$row["datesave"] .  "</td> ";
                    echo "<td>" .$row["datanow"] .  "</td> ";
                  }
                echo "</table>";
                //5. close connection
                mysqli_close($con);
                ?>
                