
<div class="item span12">
	<div class="container main-content" >

    	<?php foreach ($business_data as $item): ?>
			<a href="<?php echo base_url(); ?>Client/profile_view/3">
			<div class="row span6 business-item" style="height: 140px">
				<div class="panel panel-default">
					<div class="panel-body">
						<div class="panel-more1 span2">
							<a href="<?php echo base_url(); ?>bz/<?= $item->handler; ?>" class="thumbnail panel-more1" style="width: 120px">
								<?php echo "<img src='" . base_url() . "assets/business/" . $item->logo_path . "' alt=''/>" ?>
							</a>
						</div>
						<div class="panel-info span2">
							<p><strong><?= $item->name; ?></strong></p>
							<p><?= $item->description; ?></p>
						</div>
						<div class="span2">
							<?php
								for ($i=0; $i<5; $i++){
									echo "<span class='fa fa-star" . ($item->rating > $i ? ' checked' : '') . "'></span>";
								}
							 ?>
						</div>
						<div class="panel-more1 span1">
							<p><?= $item->address; ?></p>
							<p><?= $item->city; ?></p>
						</div>
						<!-- <div class="panel-more1 span1">
							<button class="btn btn-info" style="margin-top:40px; margin-left: 10px">View</button>
						</div> -->
					</div>
				</div>


			</div>
		</a>
		<?php endforeach; ?>

	</div>
</div>
