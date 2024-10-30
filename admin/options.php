<?php
global $wpdb;
$table_name = $wpdb->prefix . 'cobol_types';

if($_POST['submit']){
    $theid = $_POST['submit'];
    $wpdb->query("DELETE FROM $table_name WHERE ID = $theid");
}
?>
<style type="text/css">
    .modal{
        display: none;
    }
</style>
<?php
//global $wpdb;
$num_types = $wpdb->get_results("SELECT * FROM $table_name");
?>
<div class="wrap">  
	<?php screen_icon('plugins'); ?> <h2>Cobol Press Post Types</h2>
<?php if($num_types == null){ ?>
	<h3>There are No Cobol Press Post Types to Display</h3>
	<a class="btn btn-primary" href="<?php echo admin_url(); ?>admin.php?page=add_new_cobol_type">Add Cobol Press Post Type</a>
<?php }else{ ?>
<?php 
$current_types = $wpdb->get_results("SELECT * FROM $table_name");
$today = date("F j, Y");
?>
<table class="widefat">
<thead>
    <tr>
        <th>Name</th>
        <th>Menu Name</th>
        <th>Capabilities</th>       
        <th>Menu Position</th>
        <th>Created On</th>
        <th>Delete</th>
    </tr>
</thead>
<tfoot>
    <tr>
    <th>Name</th>
    <th>Menu Name</th>
    <th>Capabilities</th>
    <th>Menu Position</th>
    <th>Created On</th>
    <th>Delete</th>
    </tr>
</tfoot>
<?php foreach($current_types as $post_type){ ?>
<tbody>
   <tr>
     <td><?php echo $post_type->name ?></td>
     <td><?php echo $post_type->menuname ?></td>
     <td><?php echo ucfirst($post_type->capability) ?></td>
     <td><?php echo $post_type->menuposition ?></td>
     <?php if($post_type->created == $today){ ?>
     <td>Today</td>
     <?php } else { ?>
     <td><?php echo $post_type->created; ?></td>
      <?php } ?>
     <td><a href="#<?php echo $post_type->id ?>" role="button" class="btn btn-danger" data-toggle="modal">Delete</a></td>
   </tr>
</tbody>
<div class="modal" id="<?php echo $post_type->id ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Edit <?php echo ucfirst($post_type->name) ?></h3>
  </div>
  <div class="modal-body">
    <p>Are You Sure You Want to Delete this Cobol Post Type?</p>
  </div>
  <div class="modal-footer">
    <!--<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>-->
    <form method="post" action="">
        <button type="submit" name="submit" value="<?php echo $post_type->id ?>" class="btn btn-danger btn-large">Delete</button>
    </form>
  </div>
</div>

<script type="text/javascript">
jQuery('#<?php echo $post_type->id ?>').modal({
    show: false,
});
</script>

<?php } ?>
</table>
<?php } ?>
</div>  