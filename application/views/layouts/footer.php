
    </div>
    <!-- ./wrapper -->
<!-- jQuery 3 -->
<script src="<?php echo base_url();?>assets/template/jquery/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?php echo base_url();?>assets/template/bootstrap/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="<?php echo base_url();?>assets/template/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- Datatable -->
<script src="<?php echo base_url();?>assets/template/table/table.js"></script> 
<script src="<?php echo base_url();?>assets/template/DataTable/datatables.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url();?>assets/template/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/template/dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/template/dist/js/demo.js"></script>
<!-- JS CREADOS POR MI -->
<script src="<?php echo base_url();?>assets/template/cris/js/modal.js"></script>
<script>
$(document).ready(function () {
	var base_url= "<?php base_url(); ?>";
	$(".btn-view").on("click", function(){
		var id = $(this).val();
		$.ajax({
			url: base_url + "categorias/view/" + id,
			type: "POST",
			success:function(resp){
				$("#viewModal .modal-body").html(resp);
				//alert(resp);
			}
		});

	});
$('.sidebar-menu').tree()
})
</script>

</body>
</html>
