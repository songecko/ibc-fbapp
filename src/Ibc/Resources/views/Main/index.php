<section id="participate"<?php echo $facebook->getUser()?' style="display: none;"':''?>>
	<img src="images/<?php echo $isMobile?'mobile/':''?>home-background.jpg" />
	<a href="<?php echo $loginUrl ?>" target="_top" class="participateButton" data-section="form"><img src="images/participateButton.png" /></a>
</section>

<section id="form"<?php echo $facebook->getUser()?' style="display: block;"':''?>>
	<img src="images/<?php echo $isMobile?'mobile/':''?>form-background.jpg" />
	<form action="#" method="post">
		
		<!-- <img src="images/conectate_fb.png" class="conectateFb img-responsive" /> -->
		
		<fieldset
			data-title="Error en la validación" 
			data-content="Todos los campos son obligatorios." 
			data-placement="auto left"
		>
			<label for="contact_name" class="fullLabel">Nombre</label>
			<input type="text" name="register[name]" id="contact_name" class="fullInput"
				data-rule-required="true" 
			/>
			<label for="contact_lastname" class="fullLabel">Apellido</label>
			<input type="text" name="register[lastname]" id="contact_lastname" class="fullInput"
				data-rule-required="true"
			/>
			<label for="contact_phone" class="fullLabel">Teléfono</label>
			<input type="text" name="register[phone]" id="contact_phone" class="fullInput"
				data-rule-required="true"
			/>
			<label for="contact_email" class="fullLabel">Email</label>
			<input type="text" name="register[email]" id="contact_email" class="fullInput"
				data-rule-required="true" 
				data-rule-email="true"
			/>
			<label for="contact_recinto" class="fullLabel">Recinto</label>
			<input type="text" name="register[recinto]" id="contact_recinto" class="fullInput"
				data-rule-required="true" 
			/>
			<label for="contact_programa" class="fullLabel">Programa de estudio</label>
			<input type="text" name="register[programa]" id="contact_programa" class="fullInput"
				data-rule-required="true" 
			/>
			<label for="contact_anio" class="fullLabel">Año de graduación</label>
			<input type="text" name="register[anio]" id="contact_anio" class="fullInput"
				data-rule-required="true" 
			/>
			
			<p class="clearfix terms">
				<input type="checkbox" name="register[terms]" id="contact_terms"
					data-rule-required="true" 
				/>
				<label for="contact_terms">
					Leí y acepto los <a href="#" data-toggle="modal" data-target="#modal" target="_blank">términos y condiciones</a>
				</label>
			</p>
			<p class="clearfix newsletter">
				<input type="checkbox" name="register[newsletter]" id="contact_newsletter" />
				<label for="contact_newsletter">Deseo recibir ofertas y promociones del Instituto de Banca y Comercio</label>
			</p>			
		</fieldset>
		<div class="actions">
			<button type="submit"><img src="images/registerButton.png"></button>
		</div>
	</form>
</section>

<section id="thanks">
	<img src="images/<?php echo $isMobile?'mobile/':''?>thanks-background.jpg" />
	<a href="https://www.facebook.com/ibanca" target="_top" class="exitButton"><img src="images/exitButton.png" /></a>
</section>