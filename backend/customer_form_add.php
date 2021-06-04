<?php include('h.php');?>
<form  name="admin" action="customer_form_add_db.php" method="POST" enctype="multipart/form-data" id="admin" class="form-horizontal">
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_storename" type="text" required class="form-control" id="a_storename" placeholder="ชื่อร้านลูกค้า" pattern="^[a-zA-Z0-9]+$" title="ภาษาอังกฤษหรือตัวเลขเท่านั้น" minlength="2"  />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_name" type="text" required class="form-control" id="a_name" placeholder="ชื่อลูกค้า" pattern="^[a-zA-Z0-9]+$" minlength="2" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <textarea name="a_address" type="text" required class="form-control" id="a_address" placeholder="ที่อยู่" ><?php echo $a_address?></textarea>
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_number" type="text" required class="form-control" id="a_number" placeholder="เบอร์โทร" />
            </div>
          </div>
          <p></p>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_link" type="text" required class="form-control" id="a_link" placeholder="เว็ปไซต์" />
            </div>
          </div>
          <P></P>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_sn" type="text" required class="form-control" id="a_sn" placeholder="S/N" />
            </div>
          </div>
          <P></P>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_code" type="text" required class="form-control" id="a_code" placeholder="รหัสลับ" />
            </div>
          </div>
          <P></P>
          <div class="form-group">
            <div class="col-sm-6" align="left">
              <input  name="a_status" type="text" required class="form-control" id="a_status" placeholder="สถานะลูกค้า" />
            </div>
          </div>
          <P></P>
          <div class="form-group">
          
          <div class="col-sm-12">
            <p> LOGO </p>
            <input type="file" name="a_logo" id="a_logo" class="form-control" />
          </div>
        </div>
          <P></P>
          <div class="form-group">
            <div class="col-sm-6" align="right">
            <p></p>
              <button type="submit" class="btn btn-success" id="btn"> <span class="glyphicon glyphicon-saved"></span> บันทึก  </button>      
            </div> 
          </div>
        </form>