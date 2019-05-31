<div class="row notif">
		<div class="col-md-12 col-sm-12">
			<div class="alert alert-success">
				<h3 style="margin:0;">Terimakasih atas partisipasinya ya sampai jumpa :)</h3>
			</div>
		</div>
	</div>
<div class="row konten">
		<div class="col-sm-12 col-md-4">
		    <div class="thumbnail">
		      <a href="javascript:void();" onclick="get(1);"><img src="<?php echo base_url() ?>assets/img/sangat_puas.png" width="150" alt="Sangat Puas"></a>
		      <div class="caption">
		      	<h4>Sangat Puas</h4>
		      </div>
		    </div>
		</div>
		<div class="col-sm-12 col-md-4">
		    <div class="thumbnail">
		      <a href="javascript:void();" onclick="get(2);"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png" width="150" alt="Cukup Puas"></a>
		      <div class="caption">
		        <h4>Cukup Puas euy</h4>
		      </div>
		    </div>
		</div>
		<div class="col-sm-12 col-md-4">
		    <div class="thumbnail">
		      <a href="javascript:void();" onclick="get(3);"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png" width="150" alt="Cukup Puas"></a>
		      <div class="caption">
		        <h4>Tidak Puas sama sekali</h4>
		      </div>
		    </div>
		</div>

		<div class="col-sm-12 col-md-4">
		    <div class="thumbnail">
		      <a href="javascript:void();" onclick="get(3);"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png" width="150" alt="Cukup Puas"></a>
		      <div class="caption">
		        <h4>Ini Link Rizky Said</h4>
		      </div>
		      <div class="caption">
		        <h4>Ini Link AKUH dianRiki</h4>
		      </div>
		    </div>
		</div>

		<div class="col-sm-12 col-md-4">
		    <div class="thumbnail">
		      <a href="javascript:void();" onclick="get(3);"><img src="<?php echo base_url() ?>assets/img/cukup_puas.png" width="150" alt="Cukup Puas"></a>
		      <div class="caption">
		        <h4>Lutfi Ambarwati</h4>
		      </div>
		    </div>
		</div>
	</div>


<script>
	function get(c){
		$.ajax({
			url:'<?php echo base_url(); ?>proses/AddSurvei',
			type:'post',
			data: {get:c},
			success: function(){
					$(".notif").show();
					$(".notif").fadeOut(1000);
				}
		});
	}
</script>