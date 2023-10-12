<?php 
include 'db_connect.php';
if(isset($_GET['id'])){
	$qry = $conn->query("SELECT * FROM task_list where id = ".$_GET['id'])->fetch_array();
	foreach($qry as $k => $v){
		$$k = $v;
	}
}
?>
<div class="col-lg-12">
	<div class="card card-outline card-success">
		<div class="card-header">
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0"><?php echo $title='Görev' ?></h1>
          </div><!-- /.col -->

        </div><!-- /.row -->
            <hr class="border-primary">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
<div class="container-fluid">
	<dl>
		<dt><b class="border-bottom border-primary">Görev</b></dt>
		<dd><?php echo ucwords($task) ?></dd>
	</dl>
	<dl>
		<dt><b class="border-bottom border-primary">Durum</b></dt>
		<dd>
			<?php 
        	if($status == 1){
		  		echo "<span class='badge badge-secondary'>Askıda</span>";
        	}elseif($status == 2){
		  		echo "<span class='badge badge-primary'>Süreç Devam Etmekte</span>";
        	}elseif($status == 3){
		  		echo "<span class='badge badge-success'>Tamamlandı</span>";
        	}
        	?>
		</dd>
	</dl>
	<dl>
		<dt><b class="border-bottom border-primary">Tanım</b></dt>
		<dd><?php echo html_entity_decode($description) ?></dd>
	</dl>
</div>