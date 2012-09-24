
	<section class="title">
		<h4><?php echo lang('firesale:routes:edit'); ?></h4>
	</section>

	<section class="item form_inputs">

		<?php echo form_open_multipart($this->uri->uri_string(), 'class="crud"'); ?>

			<fieldset>
				<ul>
				<?php foreach( $fields AS $input ): ?>
					<li class="<?php echo alternator('even', ''); ?>">
						<label for="<?php echo $input['input_slug']; ?>">
							<?php echo lang(substr($input['input_title'], 5)); ?>
							<small><?php echo lang(substr($input['instructions'], 5)); ?></small>
						</label>
						<div class="input"><?php echo $input['input']; ?></div>
					</li>
				<?php endforeach; ?>
				</ul>
			</fieldset>

			<div class="buttons">
				<?php $this->load->view('admin/partials/buttons', array('buttons' => array('save', 'save_exit', 'cancel') )); ?>
			</div>

		<?php echo form_close(); ?>

	</section>