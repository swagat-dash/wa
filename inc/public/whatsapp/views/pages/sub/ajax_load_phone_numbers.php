

<?php if(!empty($result)){
foreach ($result as $key => $row) {
?>
<li class="list-group-item">
	<label class="i-checkbox i-checkbox--tick i-checkbox--brand m-b-0">
		<input type="checkbox" class="check-item" name="id[]" value="<?php _e( get_data($row, 'ids') )?>">
		<span></span>
	</label>
	<?php _e( $row->phone )?>		
</li>
<?php }}else{
	if($page == 0){
?>
<div class="empty m-t-100 m-b-100">
	<div class="icon"></div>
</div>
<?php }}?>