<!--banner-->
<div class="banner">
  <h2>
      <a href="index.html">จัดการกลุ่มลูกค้า</a>
      <i class="fa fa-angle-right"></i>
      <span>สร้างกลุ่มลูกค้า</span>
      </h2>
</div>
<div class="grid-form">
  <div class="grid-form1">
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
    <h3 id="forms-example" class="">สร้างกลุ่มลูกค้า</h3>
    <form action="<?php echo base_url() . 'cus-group/create' ?>" method="post">
      <div class="form-group">
        <label>ชื่อกลุ่ม</label>
        <input type="text" class="form-control" placeholder="ชื่อกลุ่มลูกค้า" name="customer_group_name">
      </div>
      <button type="submit" class="btn btn-default">สร้าง</button>
      <button type="reset" class="btn btn-default">ยกเลิก</button>
    </form>
  </div>
</div>
