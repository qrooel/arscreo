<div id="sliderContainer" class="contact-header"></div>
	
	<div id="content">
	
		<div id="contentTemplate">
			<h3>Skontaktuj się ze mną</h3>
			
			<form id="mail" action="<?php echo site_url('main/mail'); ?>" method="post" >
				
				<label>Firma bądź imię i nazwisko* <?php echo form_error('name', '<div class="form_error">', '</div>'); ?></label>
				<input type="text" name="name" value="<?php echo set_value('name'); ?>"/>
				
				<label>Adres e-mail* <?php echo form_error('email', '<div class="form_error">', '</div>'); ?></label>
				<input type="text" name="email" value="<?php echo set_value('email'); ?>" />
				
				<label>Telefon kontaktowy <?php echo form_error('telephone', '<div class="form_error">', '</div>'); ?></label>
				<input type="text" name="telephone" value="<?php echo set_value('telephone'); ?>" />
				
				<label>Tytuł wiadomości <?php echo form_error('title', '<div class="form_error">', '</div>'); ?></label>
				<input type="text" name="title" value="<?php echo set_value('title'); ?>" />
				
				<label>Treść wiadomości* <?php echo form_error('message', '<div class="form_error">', '</div>'); ?></label>
				<textarea name="message" cols="37" rows="8" ><?php echo set_value('message'); ?></textarea>
			
				<label></label>
				<input type="submit" name="submit" value="Wyślij wiadomość" />
			
			</form>
			
			<div class="contentRightTemplate2">
				<div class="contant_data">
					<img src="<?php echo base_url(); ?>/public/gfx/telephone.png" alt="" />
					<div>
						<p>ArsCreo.pl</p>
						<p>Krzysztof Płachta - 792 727 773</p>
					</div>
				</div>

				
			</div>
			
		</div>
	</div>
