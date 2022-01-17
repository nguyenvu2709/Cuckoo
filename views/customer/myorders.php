<style>
  body{
    background-image: url("assets/css/background.jpg");
    background-size: cover;
  }
  h2{
    text-align: center;
  }
  table{
    margin-left: 35%;
    border-collapse: collapse;
    font-size: 20px;
  }

  input{
    border-radius: 10%;
  }
</style>
<body >
  <?php require_once('views/layouts/customer_menu.php') ?>
  <?php require_once('views/layouts/customer_inform.php') ?>
  <?php if (isset($orders)) { ?>
  <div class="align-center">
    <h2 class="text-center">ORDER LIST</h2>
    <table class="datatable1" border="1">
      <tr class="datatable">
        <th>OrderID</th>
        <th>CustName</th>
        <th>Creation date</th>
        <th>Total</th>
        <th>Status</th>
      </tr>
      <?php foreach ($orders as $item) { ?>
      <tr class="datatable" onclick="window.location='?controller=customer&action=myorders&id=<?=$item->id?>'">
        <th><?=$item->id?></th>
        <td><?=$item->custid?></td>
        <td><?=date("d/m/Y - H:i:s", ($item->cdate/1000))?></td>
        <td><?=$item->total?></td>
        <td><?=$item->status?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <?php } ?>
  <?php if (isset($odetails)) { ?>
  <div class="align-center">
    <h2 class="text-center">ORDER DETAIL</h2>
    <table class="datatable2" border="1">
      <tr class="datatable">
        <th>OrderID</th>
        <th>ProdName</th>
        <th>Quantity</th>
      </tr>
      <?php foreach ($odetails as $item) { ?>
      <tr class="datatable">
        <td><?=$item->orderid?></td>
        <td><?=$item->prodid?></td>
        <td><?=$item->quantity?></td>
      </tr>
      <?php } ?>
    </table>
  </div>
  <?php } ?>
  
  
  
</body>