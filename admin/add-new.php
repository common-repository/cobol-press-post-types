<?php 
global $wpdb;
$table_name = $wpdb->prefix . 'cobol_types';
$current_date = date("F j, Y");
if($_POST['submit']){
  $wpdb->insert(
          $table_name,
          array(
            'name' => $_POST['name'],
            'singularname' => $_POST['singularname'],
            'addnew' => $_POST['addnew'],
            'addnewitem' => $_POST['addnewitem'],
            'edititem' => $_POST['edititem'],
            'newitem' => $_POST['newitem'],
            'allitems' => $_POST['allitems'],
            'viewitem' => $_POST['viewitem'],
            'searchitems' => $_POST['searchitems'],
            'notfound' => $_POST['notfound'],
            'notfoundintrash' => $_POST['notfoundintrash'],
            'menuname' => $_POST['menuname'],
            'publicqueryable' => $_POST['publicquery'],
            'queryvar' => $_POST['queryvar'],
            'capability' => $_POST['capability'],
            'hasarchive' => $_POST['hasarchive'],
            'hierarchical' => $_POST['hierarchical'],
            'menuposition' => $_POST['menuposition'],
            'supports' => $_POST['supports'],
            'supports2' => $_POST['supports2'],
            'supports3' => $_POST['supports3'],
            'supports4' => $_POST['supports4'],
            'supports5' => $_POST['supports5'],
            'created' => $current_date
            )
    );
}

?>
<style type="text/css">
input[type="text"]{
	height: 30px;
}
#addcont{
	overflow: hidden;
	width: 825px;
	background: none;
}
#newleft{
	float: left;
}
#newright{
	float: right;
}
#myModal{
	display: none;
}
#supports2, #supports3, #supports4, #supports5{
	display: none;
}
#schk2, #schk3, #schk4, #schk5{
	display: none;
}
</style>
<script type="text/javascript">
//jQuery(".supports2, .supports3, .supports4, .supports5").hide();
jQuery(document).ready(function(){
	jQuery("input#schk1").change(function(){
		jQuery("select#supports2, label#supports2, input#schk2, label#schk2").toggle();
	});
	jQuery("input#schk2").change(function(){
		jQuery("select#supports3, label#supports3, input#schk3, label#schk3").toggle();
	});
	jQuery("input#schk3").change(function(){
		jQuery("select#supports4, label#supports4, input#schk4, label#schk4").toggle();
	});
	jQuery("input#schk4").change(function(){
		jQuery("select#supports5, label#supports5").toggle();
	});
});
</script>
<?php

?>
<?php screen_icon('plugins'); ?> <h2>Add New Cobol Press Post Type</h2>

<a href="#myModal" role="button" class="btn btn-info btn-large" data-toggle="modal">Need Help?</a>

<div id="addcont">
	<form method="post" class="form-horizontal" action="">
		<div id="newleft">
			<div class="control-group">
    			<label class="control-label" for="name">Post Type Name</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="name" id="name" placeholder="Post Type Name" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="singularname">Singular Name</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="singularname" id="singularname" placeholder="Singular Name" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="addnew">Add New Label</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="addnew" id="addnew" placeholder="Add New Label" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="addnewitem">Add New Item</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="addnewitem" id="addnewitem" placeholder="Add New Item" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="edititem">Edit Item</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="edititem" id="edititem" placeholder="Edit Item" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="newitem">New Item</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="newitem" id="newitem" placeholder="New Item" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="allitems">All Items</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="allitems" id="allitems" placeholder="All Items" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="viewitem">View Item</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="viewitem" id="viewitem" placeholder="View Item" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="searchitems">Search Items</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="searchitems" id="searchitems" placeholder="Search Items" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="notfound">Not Found</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="notfound" id="notfound" placeholder="Not Found" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="notfoundintrash">Not Found In Trash</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="notfoundintrash" id="notfoundintrash" placeholder="Not Found In Trash" />
    			</div>
  			</div>
  		</div>
  		<div id="newright"><!-- Float Right -->
  			<div class="control-group">
    			<label class="control-label" for="menuname">Menu Name</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="menuname" id="menuname" placeholder="Menu Name" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="publicquery">Publicly Queryable</label>
    			<div class="controls">
      				<select name="publicquery">
      					<option value="true">True</option>
      					<option value="false">False</option>
      				</select>
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="queryvar">Query Variable</label>
    			<div class="controls">
      				<select name="queryvar">
      					<option value="true">True</option>
      					<option value="false">False</option>
      				</select>
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="capability">Capability</label>
    			<div class="controls">
      				<select name="capability">
      					<option value="post">Post</option>
      					<option value="page">Page</option>
      				</select>
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="hasarchive">Has Archive</label>
    			<div class="controls">
      				<select name="hasarchive">
      					<option value="true">True</option>
      					<option value="false">False</option>
      				</select>
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="hierarchical">Hierarchical</label>
    			<div class="controls">
      				<select name="hierarchical">
      					<option value="true">True</option>
      					<option value="false">False</option>
      				</select>
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="menuposition">Menu Position</label>
    			<div class="controls">
      				<input type="text" class="input-large" name="menuposition" id="menuposition" placeholder="Menu Position" />
    			</div>
  			</div>
  			<div class="control-group">
    			<label class="control-label" for="supports">Supports</label>
    			<div class="controls">
      				<select name="supports">
                <option></option>
      					<option value="title">Title</option>
      					<option value="editor">Editor</option>
      					<option value="author">Author</option>
      					<option value="thumbnail">Thumbnail</option>
      					<option value="excerpt">Excerpt</option>
      					<option value="comments">Comments</option>
      				</select>
      			</div>
      		</div>
      		<div class="control-group">
      			<label class="control-label" for="schk1">Add Another?</label>
      			<div class="controls">
      				<input type="checkbox" id="schk1" />
      			</div>
      		</div>
      		<div class="control-group">
      			<label class="control-label" id="supports2" for="supports2">Supports</label>
      			<div class="controls">
      				<select id="supports2" name="supports2">
                <option></option>
      					<option value="title">Title</option>
      					<option value="editor">Editor</option>
      					<option value="author">Author</option>
      					<option value="thumbnail">Thumbnail</option>
      					<option value="excerpt">Excerpt</option>
      					<option value="comments">Comments</option>
      				</select>
    			</div>
  			</div>
  			<div class="control-group">
      			<label class="control-label" id="schk2" for="schk2">Add Another?</label>
      			<div class="controls">
      				<input type="checkbox" id="schk2" />
      			</div>
      		</div>
      		<div class="control-group">
      			<label class="control-label" id="supports3" for="supports3">Supports</label>
      			<div class="controls">
      				<select id="supports3" name="supports3">
                <option></option>
      					<option value="title">Title</option>
      					<option value="editor">Editor</option>
      					<option value="author">Author</option>
      					<option value="thumbnail">Thumbnail</option>
      					<option value="excerpt">Excerpt</option>
      					<option value="comments">Comments</option>
      				</select>
    			</div>
  			</div>
  			<div class="control-group">
      			<label class="control-label" id="schk3" for="schk3">Add Another?</label>
      			<div class="controls">
      				<input type="checkbox" id="schk3" />
      			</div>
      		</div>
      		<div class="control-group">
      			<label class="control-label" id="supports4" for="supports4">Supports</label>
      			<div class="controls">
      				<select id="supports4" name="supports4">
                <option></option>
      					<option value="title">Title</option>
      					<option value="editor">Editor</option>
      					<option value="author">Author</option>
      					<option value="thumbnail">Thumbnail</option>
      					<option value="excerpt">Excerpt</option>
      					<option value="comments">Comments</option>
      				</select>
    			</div>
  			</div>
  			<div class="control-group">
      			<label class="control-label" id="schk4" for="schk4">Add Another?</label>
      			<div class="controls">
      				<input type="checkbox" id="schk4" />
      			</div>
      		</div>
      		<div class="control-group">
      			<label class="control-label" id="supports5" for="supports5">Supports</label>
      			<div class="controls">
      				<select id="supports5" name="supports5">
                <option></option>
      					<option value="title">Title</option>
      					<option value="editor">Editor</option>
      					<option value="author">Author</option>
      					<option value="thumbnail">Thumbnail</option>
      					<option value="excerpt">Excerpt</option>
      					<option value="comments">Comments</option>
      				</select>
    			</div>
  			</div>
  		</div>
  		<div class="form-actions">
  			<button type="submit" name="submit" value="Save" class="btn btn-primary btn-large">Save</button>
		</div>
	</form>
</div>

<!-- Need Help Modal -->
<div class="modal" style="width: 1000px; left: 33%" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Custom Post Type Documentation</h3>
  </div>
  <div class="modal-body">
    <iframe src="http://codex.wordpress.org/Function_Reference/register_post_type#Parameters" frameborder="0" width="100%" height="600px"></iframe>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary btn-large" data-dismiss="modal" aria-hidden="true">Close</button>
  </div>
</div>
<script type='text/javascript' src='http://cobol.dev/wp-content/themes/cobol/assets/js/bootstrap.js?ver=2.1.1'></script>
<script type="text/javascript">
jQuery('#myModal').modal({
	show: false,
});
 //zy = jQuery("input:text").val();
//jQuery(zy).click(function(){
 // if(zy == null){

 // }
//});

</script>