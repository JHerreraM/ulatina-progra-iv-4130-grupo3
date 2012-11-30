<?php
    echo $acc;
?>

<section id="content">
		<article class="col1">
			<div class="pad_1">
				<h2>Contactenos</h2>
				<span class="cols">
					Pais:<br>
					Ciudad:<br>
					Telefono:<br>
					Email:
				</span>
				Costa Rica<br>
				San Jose<br>
				+506 22903133<br>
				<a href="mailto:">contacto@costaricaairlines.com</a>
				<h2>Miscellaneous Info</h2>
				<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident, similique sunt in culpa qui officia.</p>
			</div>
		</article>
		<article class="col2 pad_left1">
			<h2>Formulario Contacto</h2>
			<form id="ContactForm" action="contacto" method="GET">
				<div>
                                        <input type="hidden" name="accion" value="insertar"/>
					<div class="wrapper">
						<div class="bg"><input type="text" class="input"  name="nombre"/></div>
						Nombre:<br />
					</div>
					<div class="wrapper">
						<div class="bg"><input type="text" class="input" name="email"/></div>
						E-mail:<br />
					</div>
					<div class="wrapper">
						<div class="bg">
							<textarea name="textarea" cols="1" rows="1" name="mensaje"></textarea>
						</div>
						Mensaje:<br />
					</div>
					<a href="#" class="button1" onClick="document.getElementById('ContactForm').submit()">Enviar</a>
					<a href="#" class="button1" onClick="document.getElementById('ContactForm').reset()">Limpiar</a>
				</div>
			</form>
		</article>
	</section>