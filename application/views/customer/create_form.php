<!--banner-->
<div class="banner">
  <h2>
      <a href="index.html">Home</a>
      <i class="fa fa-angle-right"></i>
      <span>Blank</span>
      </h2>
</div>
<!--//banner-->
<!--faq-->
<div class="blank">

  <div class="grid-form">
    <div class="grid-form1">
      <h3 id="forms-example" class="">สร้างข้อมูลลูกค้า</h3>
      <?php if ($this->session->flashdata("result_message")!==NULL): ?>
        <div class="alert alert-success">
              <strong> <?php echo $this->session->flashdata("result_message") ?> !</strong>
          </div>
      <?php endif; ?>
      <?php if ($this->session->flashdata("result_message-error")!==NULL): ?>
        <div class="alert alert-danger" role="alert">
          <strong> <?php echo $this->session->flashdata("result_message-error") ?> !</strong>
        </div>
      <?php endif; ?>
      <form class="form-horizontal" action="<?php echo base_url() . 'cus/create' ?>" method="post">
        <div class="form-group">
          <label for="inputEmail3" class="col-sm-2 control-label hor-form">ชื่อ</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputEmail3" name="customer_firstname" placeholder="ชื่อ">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label hor-form">นามสกุล</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputPassword3" name="customer_lastname" placeholder="นามสกุล">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label hor-form">ชื่อเล่น</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputPassword3" name="customer_nickname" placeholder="ชื่อเล่น">
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label hor-form">ที่อยู่</label>
          <div class="col-sm-8">
            <textarea type="text" class="form-control" id="inputPassword3" name="customer_address" rows="4" placeholder="ที่อยู่"></textarea>
          </div>
        </div>
        <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label hor-form">เบอร์โทรศัพท์</label>
          <div class="col-sm-8">
            <input type="text" class="form-control" id="inputPassword3" name="customer_tel" placeholder="เบอร์โทรศัพท์">
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label hor-form">สถานะ</label>
          <div class="col-sm-8">
            <select class="form-control" name="customer_group_id" id="customer_group_id">
                  <option value="null" >---โปรดเลือกสถานะ---</option>
                  <?php foreach ($group as  $value): ?>
                    <option value="<?php echo $value->customer_group_id;?> "><?php echo $value->customer_group_name; ?></option>
                  <?php endforeach; ?>              
            </select>
          </div>
        </div>
         <div class="form-group">
          <label for="inputPassword3" class="col-sm-2 control-label hor-form">รูป</label>
          <div class="col-sm-8">         
             
              <input type="file" id="exampleInputFile">
              <p class="help-block"></p>            
          </div>
        </div>   
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10">
              <button class="btn-primary btn" type="submit">Submit</button>
              <button class="btn-default btn">Cancel</button>
              <button class="btn-inverse btn" type="reset">Reset</button>           
          </div>
        </div>
      </form>
  </div>
  </div>

</div>

<!--//faq-->
<!---->
<div class="copy">
  <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>