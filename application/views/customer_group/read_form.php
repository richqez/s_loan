<div class="banner">
  <h2>
      <a href="index.html">จัดการกลุ่มลูกค้า</a>
      <i class="fa fa-angle-right"></i>
      <span>ค้นหาและจัดการข้อมูลกลุ่มลูกค้า</span>
      </h2>
</div>


<div class="blank">
  <div class="blank-page">
    <div class="row">
      <div class="col-md-12">
        <table id="customer_group_table" class="table">
          <thead>
            <tr>
              <th>#</th>
              <th>ชื่อกลุ่ม</th>
              <th>สร้างเมื่อวันที่</th>
            </tr>
          </thead>
        </table>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">

  var customer_group_table = $('#customer_group_table').DataTable({
    ajax       : '<?php echo base_url() . 'cus-group/datatable' ?>',
    pageLength : 10,
    columnDefs : [
      {
        "targets"    : [0] ,
        "orderable"  : false,
        "searchable" : false
      }
    ],
    columns    : [
      {data : null },
      {data : 'customer_group_name'},
      {data : 'created_at'}
    ],
    language: {
        "url" : '<?php echo base_url() . 'assert/th.json' ?>'
      }
  });

  customer_group_table.on( 'order.dt search.dt', function () {
    customer_group_table.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
      cell.innerHTML = i+1;
    } );
  } ).draw();


</script>
