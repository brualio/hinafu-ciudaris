


<?php
/* Template Name: Template - Generals*/
get_header(); ?>

<main class="main-content">

<h3 style="background-color: red;color:white;padding:20px">BANNER INTERNAL</h3>
<br>

<div class="main-banner">
	<figure class="main-banner-image background--change" data-bg="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png;<?php echo get_template_directory_uri(); ?>/public/assets/images/img2.png;<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png">
	</figure>
	<div class="main-banner-inside">
		<div class="main-banner-inside-container main-wrapper-container --default">
			<div class="main-banner-info">
				<div class="general-title --version1">
					<hgroup class="general-title-titles">
						<div class="general-title-title">
							<h2 class="general-title-title-text">Titulo</h2>
						</div>
					</hgroup>
				</div>
				<a class="main-banner-button general-button --black --icon-right --uppercase" href="<?php echo esc_url( home_url( '/' ) ); ?>">
					<span class="general-button-text"><?php _e('Ir a inicio','basewordpress'); ?></span>
					<div class="general-button-icon icon-twitter"></div>
				</a>
			</div>
		</div>
	</div>
</div>


<br>
<h3 style="background-color: red;color:white;padding:20px">BUTTONS</h3>
<br>

<a class="general-button --black" href="#">
	<span class="general-button-text --uppercase">Descubre nuestros productos</span>
</a>

<br><br>

<a class="general-button --black --icon-right --uppercase" href="<?php echo esc_url( home_url( '/' ) ); ?>">
	<span class="general-button-text">Descubre nuestros productos</span>
	<div class="general-button-icon icon-twitter"></div>
</a>

<br><br>

<button class="general-button --black">
	<span class="general-button-text --uppercase">Descubre nuestros productos</span>
</button>
<br><br>

<div class="general-button --black">
	<input class="general-button-text --uppercase" type="submit" value="Descubre nuestros productos">
</div>
<br><br>

<div class="general-arrows">
	<div class="general-arrow"><</div>
	<div class="general-arrow">></div>
</div>

<br>
<h3 style="background-color: red;color:white;padding:20px">TITULOS</h3>
<br>

<div class="general-title --version1">
	<hgroup class="general-title-titles">
		<div class="general-title-subtitle">
			<h3 class="general-title-subtitle-text">Subtitulo</h3>
		</div>
		<div class="general-title-title">
			<h2 class="general-title-title-text">Titulo</h2>
		</div> 
	</hgroup>
	<div class="general-title-text">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Asperiores, itaque?</p>
	</div>
	<div class="general-title-buttons">
		<a class="general-title-button general-button --black" href="#">
			<span class="general-button-text --uppercase">Descubre nuestros productos</span>
		</a>
	</div>
</div>

<br>
<h3 style="background-color: red;color:white;padding:20px">INPUTS</h3>

	<div class="general-input">
		<label class="general-input-title --uppercase">Input</label>
		<div class="general-input-inside">
			<input class="general-input-field" type="text"/>
		</div>
	</div>
	
	<div class="general-input --left">
		<label class="general-input-title">Input con icono left</label>
		<div class="general-input-inside">
			<div class="general-input-ico --left --p-none icon-favorito"></div>
			<input class="general-input-field" type="text"/>
		</div>
	</div>

	<div class="general-input --right">
		<label class="general-input-title">Input con icono right</label>
		<div class="general-input-inside">
			<div class="general-input-ico --right --p-none icon-favorito"></div>
			<input class="general-input-field" type="text"/>
		</div>
	</div>

	<div class="general-input --all">
		<label class="general-input-title">Input con icono right left</label>
		<div class="general-input-inside">
			<div class="general-input-ico --right --p-none icon-favorito"></div>
			<div class="general-input-ico --left --p-none icon-favorito"></div>
			<input class="general-input-field" type="text"/>
		</div>
	</div>

	<div class="general-input --left">
		<label class="general-input-title">Input con boton left</label>
		<div class="general-input-inside">
			<button class="general-input-ico --left --p-auto icon-favorito"></button>
			<input class="general-input-field" type="text"/>
		</div>
	</div>

	<div class="general-input --right">
		<label class="general-input-title">Input con boton right</label>
		<div class="general-input-inside">
			<button class="general-input-ico --right --p-auto icon-favorito"></button>
			<input class="general-input-field" type="text"/>
		</div>
	</div>

	<br/>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">SELECT</h3>
	<br>

	<div class="general-input --select --right">
		<label class="general-input-title">Titulo</label>
		<div class="general-input-inside">
			<div class="general-input-ico --right icon-favorito"></div>
			<select class="general-input-field" name="">
				<option value="">Seleccionar</option>
				<option value="0">si</option>
				<option value="1">no</option>
			</select>
		</div>
	</div>

	<br/>

	<div class="general-input">
		<label class="general-input-title">Titulo</label>
		<div class="general-input-inside">
			<div class="general-input --select --right --field-on">
				<div class="general-input-inside">
					<div class="general-input-ico --right icon-favorito"></div>
					<select class="general-input-field" name="">
						<option value="">Pais</option>
						<option value="0">si</option>
						<option value="1">no</option>
					</select>
				</div>
			</div>
			<input class="general-input-field --field-in" type="text"/>
		</div>
	</div>

	<br/>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">SELECT PERSONALIZED</h3>
	<br>
		<div class="select-custom select--custom select-custom--example">
			<div class="select-custom-selected select-custom--pitcher">
				<div class="select-custom-selected-option --white">
					<div class="select-custom-selected-option-text select-custom-selected-option--text">
						Seleccionar
					</div>
					<div class="select-custom-selected-option-icon-arrow">
						<svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 18 18" fill="none">
						<path fill-rule="evenodd" clip-rule="evenodd" d="M3.85859 6.21925C3.68523 6.46837 3.72356 6.82898 3.94419 7.02471L8.47685 11.0457C8.7839 11.3181 9.2161 11.3181 9.52315 11.0457L14.0558 7.02471C14.2764 6.82898 14.3148 6.46837 14.1414 6.21925C13.9681 5.97014 13.6487 5.92687 13.428 6.1226L9 10.0508L4.57198 6.1226C4.35134 5.92687 4.03194 5.97014 3.85859 6.21925Z" fill="white" stroke="white" stroke-linecap="round"/>
						</svg>
					</div> 
				</div>
			</div>
			<div class="select-custom-options select-custom--options">
				<div class="select-custom-option select-custom-option-content--text">
					<div class="select-custom-option-content">
						<div class="select-custom-option-content-text">
							Opcion 1
						</div>
					</div>  
				</div>
				<div class="select-custom-option select-custom-option-content--text">
					<div class="select-custom-option-content">
						<div class="select-custom-option-content-text">
							Opcion 2
						</div>
					</div>  
				</div>
			</div>
		</div>

	<br/>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">DATE</h3>
	<br>

	<div class="general-input --right">
		<label class="general-input-title">Date</label>
		<div class="general-input-inside">
			<div class="general-input-ico --right --p-none icon-favorito"></div>
			<input class="general-input-field input--date" type="text"/>
		</div>
	</div>

	<br>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">TEXTAREA</h3>
	<br>

	<div class="general-input --textarea">
		<label class="general-input-title">Titulo</label>
		<div class="general-input-inside">
			<textarea class="general-input-field"></textarea>
		</div>
	</div>

	<br/>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">INPUT FILE</h3>
	<br>

	<div class="general-input">
		<label class="general-input-title">Input file 1</label>
		<div class="general-input-inside">
			<div class="general-input-file input-file--js">
				<input type="file" id="file1"/>
				<label class="general-input-file-label" for="file1">
					<span class="general-input-file-ico icon-download2"></span>
					<span class="general-input-file-text input-file--text">Solo formato JPG, PDF, WORD</span>
				</label>
			</div>
		</div> 
	</div>

	<div class="general-input">
		<label class="general-input-title">Input file 2</label>
		<div class="general-input-inside">
			<div class="general-input-file input-file--js">
				<input type="file" id="file2"/>
				<label class="general-input-file-label" for="file2">
					<span class="general-input-file-ico icon-download2"></span>
					<span class="general-input-file-text input-file--text">Solo formato JPG, PDF, WORD</span>
				</label>
			</div>
		</div>
	</div>

	<br/>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">RADIOBUTTONS GENERALS</h3>
	<br>

	<div class="general-input general-input-checkbox-radio general-input-radio input--radio">
		<div class="general-input-checkbox-radio-inside">
			<input type="radio" id="radio1" name="radio-name" checked="checked"/>
			<label class="general-input-checkbox-radio-label" for="radio1">
				<div class="general-input-checkbox-radio-label-container">
					<div class="general-input-checkbox-radio-fig"></div>
					<div class="general-input-checkbox-radio-text">Radio</div>
				</div>
			</label>
		</div>
	</div>

	<br>

	<div class="general-input general-input-checkbox-radio general-input-radio input--radio">
		<div class="general-input-checkbox-radio-inside">
			<input type="radio" id="radio2" name="radio-name"/>
			<label class="general-input-checkbox-radio-label" for="radio2">
				<div class="general-input-checkbox-radio-label-container">
					<div class="general-input-checkbox-radio-fig"></div>
					<div class="general-input-checkbox-radio-text">Radio</div>
				</div>
			</label>
		</div>
	</div>

	<br/>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">CHECKBOX GENERALS</h3>
	<br>

	<div class="general-input general-input-checkbox-radio general-input-checkbox input--checkbox">
		<div class="general-input-checkbox-radio-inside">
			<input type="checkbox" id="checkbox1" name="checkbox-name" checked="checked"/>
			<label class="general-input-checkbox-radio-label" for="checkbox1">
				<div class="general-input-checkbox-radio-label-container">
					<div class="general-input-checkbox-radio-fig"></div>
					<div class="general-input-checkbox-radio-text">Acepto las <a href="#">politicas de privacidad</a></div>
				</div>
			</label>
		</div>
	</div>

	<br>

	<div class="general-input general-input-checkbox-radio general-input-checkbox">
		<div class="general-input-checkbox-radio-inside">
			<input type="checkbox" id="checkbox5" name="checkbox-name"/>
			<label class="general-input-checkbox-radio-label" for="checkbox5">
				<div class="general-input-checkbox-radio-label-container">
					<div class="general-input-checkbox-radio-fig"></div>
					<div class="general-input-checkbox-radio-text">Acepto las <a href="#">politicas de privacidad</a></div>
				</div>
			</label>
		</div>
	</div>

	<br>

	<div class="general-input general-input-checkbox-wp">
		<span class="wpcf7-form-control-wrap check-confirmacion">
			<span class="wpcf7-form-control wpcf7-acceptance">
				<span class="wpcf7-list-item">
					<label>
						<input type="checkbox" name="check-confirmacion" value="1">
						<span class="wpcf7-list-item-label">Acepto la  <a href="" class="trabaja--pitcher--terminos colorOrange"> política de privacidad</a>
						</span>
					</label>
				</span>
			</span>
		</span>
	</div>
	<br>

	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">ANIMATION</h3>
	<br>
	<div class="general-input input--animation">
		<label class="general-input-title">Input con boton left</label>
		<div class="general-input-inside">
			<input class="general-input-field input-field--animation" type="text"/>
		</div>
	</div>

	<br>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">VALIDATION</h3>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:15px">ONLY LETTERS</h3>
	<br>

	<div class="general-input">
		<div class="general-input-inside">
			<input class="general-input-field input--letters" type="text"/>
		</div>
	</div>

	<br>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:15px">ONLY NUMBERS</h3>
	<br>

	<div class="general-input">
		<div class="general-input-inside">
			<input class="general-input-field input--numbers" type="text"/>
		</div>
	</div>

	<br>
	<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">FORM BLOCK</h3>
	<br>

	<div class="form-block">
		<form action="">
			<ul class="general-input-lines">
				<li class="general-input-line --four">
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
				</li>
				<li class="general-input-line --three">
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
				</li>
				<li class="general-input-line --two">
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
				</li>
				<li class="general-input-line">
					<div class="general-input">
						<div class="general-input-inside">
							<input class="general-input-field" type="text"/>
						</div>
					</div>
				</li>
			</ul>
			<div class="form-block-pie">
				<p>(*) Campos obligatorios</p>
			</div>
			<div class="form-block-checkbox">
				<div class="general-input general-input-checkbox-radio general-input-checkbox">
					<div class="general-input-checkbox-radio-inside">
						<input type="checkbox" id="checkbox6" name="checkbox-name"/>
						<label class="general-input-checkbox-radio-label" for="checkbox6">
							<div class="general-input-checkbox-radio-label-container">
								<div class="general-input-checkbox-radio-fig"></div>
								<div class="general-input-checkbox-radio-text">Acepto las <a href="#">politicas de privacidad</a></div>
							</div>
						</label>
					</div>
				</div>
			</div>
			<div class="form-block-button">
				<div class="general-button --black">
					<input class="general-button-text --uppercase" type="submit" value="Descubre nuestros productos">
				</div>
			</div>
		</form>
	</div>

<br>
<h3 style="background-color: red;color:white;padding:20px">PAGINATION</h3>
<br>

<div class="general-pagination --list-none">
	<ul class="general-pagination-list">
		<li class="-previous"><a class="icon-favorito" href=""></a></li>
		<li class="-page"><a href="">1</a></li>
		<li class="-page"><a href="">2</a></li>
		<li class="-page"><a href="">3</a></li>
		<li class="-next"><a class="icon-favorito" href=""></a></li>
	</ul>
</div>

<br>
<h3 style="background-color: red;color:white;padding:20px">TABLES</h3>
<br>

<h4>Default</h4>
<div class="general-table general-table--default">
	<table>
		<thead>
			<tr>
				<th>Titulo 1</th>
				<th>Titulo 2</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>
					Contenido 1
				</td>
				<td>
					Contenido 2
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td>
					Footer 1
				</td>
				<td>
					Footer 2
				</td>
			</tr>
		</tfoot>
	</table>
</div>

<br><br>

<h4>P</h4>
<div class="general-table general-table--p general-table--responsive">
	<table>
		<thead>
			<tr>
				<th>Titulo 1</th>
				<th>Titulo 2</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-text="Titulo 1" class="general-table-cell">
					<p>Contenido 1</p>
				</td>
				<td data-text="Titulo 2" class="general-table-cell">
					<p>Contenido 2</p>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td data-text="Footer 1" class="general-table-cell">
					<p>Footer 1</p>
				</td>
				<td data-text="Footer 2" class="general-table-cell">
					<p>Footer 2</p>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

<br><br>

<h4>Scroll</h4>
<div class="general-table general-table--p --scroll-x general-table--responsive">
	<table>
		<thead>
			<tr>
				<th>Titulo 1</th>
				<th>Titulo 2</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-text="Titulo 1" class="general-table-cell">
					<p>Contenido 1</p>
				</td>
				<td data-text="Titulo 2" class="general-table-cell">
					<p>Contenido 2</p>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td data-text="Foorer 1" class="general-table-cell">
					<p>Footer 1</p>
				</td>
				<td data-text="Footer 2" class="general-table-cell">
					<p>Footer 2</p>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

<br><br>

<h4>columns</h4>
<div class="general-table general-table--p general-table--responsive">
	<table>
		<thead>
			<tr>
				<th>Titulo 1</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-text="Titulo 1" class="general-table-cell">
					<p>Contenido 1</p>
				</td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<td data-text="footer 1" class="general-table-cell">
					<p>Footer 1</p>
				</td>
			</tr>
		</tfoot>
	</table>
</div>

<br><br>

<div class="general-table general-table--p --two general-table--responsive">
	<table>
		<thead>
			<tr>
				<th>Titulo 1</th>
				<th>Titulo 2</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-text="Titulo 1" class="general-table-cell">
					<p>Contenido 1</p>
				</td>
				<td data-text="Titulo 2" class="general-table-cell">
					<p>Contenido 2</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<br><br>

<div class="general-table general-table--p --three general-table--responsive">
	<table>
		<thead>
			<tr>
				<th>Titulo 1</th>
				<th>Titulo 2</th>
				<th>Titulo 3</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-text="Titulo 1" class="general-table-cell">
					<p>Contenido 1</p>
				</td>
				<td data-text="Titulo 2" class="general-table-cell">
					<p>Contenido 2</p>
				</td>
				<td data-text="Titulo 3" class="general-table-cell">
					<p>Contenido 3</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<br><br>
<div class="general-table general-table--p --four general-table--responsive">
	<table>
		<thead>
			<tr>
				<th>Titulo 1</th>
				<th>Titulo 2</th>
				<th>Titulo 3</th>
				<th>Titulo 4</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-text="Titulo 1" class="general-table-cell">
					<p>Contenido 1</p>
				</td>
				<td data-text="Titulo 2" class="general-table-cell">
					<p>Contenido 2</p>
				</td>
				<td data-text="Titulo 3" class="general-table-cell">
					<p>Contenido 3</p>
				</td>
				<td data-text="Titulo 4" class="general-table-cell">
					<p>Contenido 4</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<br><br>

<div class="general-table general-table--p --five general-table--responsive">
	<table>
		<thead>
			<tr>
				<th>Titulo 1</th>
				<th>Titulo 2</th>
				<th>Titulo 3</th>
				<th>Titulo 4</th>
				<th>Titulo 5</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-text="Titulo 1" class="general-table-cell">
					<p>Contenido 1</p>
				</td>
				<td data-text="Titulo 2" class="general-table-cell">
					<p>Contenido 2</p>
				</td>
				<td data-text="Titulo 3" class="general-table-cell">
					<p>Contenido 3</p>
				</td>
				<td data-text="Titulo 4" class="general-table-cell">
					<p>Contenido 4</p>
				</td>
				<td data-text="Titulo 5" class="general-table-cell">
					<p>Contenido 5</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<br><br>

<div class="general-table general-table--p --six general-table--responsive">
	<table>
		<thead>
			<tr>
				<th>Titulo 1</th>
				<th>Titulo 2</th>
				<th>Titulo 3</th>
				<th>Titulo 4</th>
				<th>Titulo 5</th>
				<th>Titulo 6</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td data-text="Titulo 1" class="general-table-cell">
					<p>Contenido 1</p>
				</td>
				<td data-text="Titulo 2" class="general-table-cell">
					<p>Contenido 2</p>
				</td>
				<td data-text="Titulo 3" class="general-table-cell">
					<p>Contenido 3</p>
				</td>
				<td data-text="Titulo 4" class="general-table-cell">
					<p>Contenido 4</p>
				</td>
				<td data-text="Titulo 5" class="general-table-cell">
					<p>Contenido 5</p>
				</td>
				<td data-text="Titulo 6" class="general-table-cell">
					<p>Contenido 6</p>
				</td>
			</tr>
		</tbody>
	</table>
</div>

<br>
<h3 style="background: red; color:white;padding: 20px 0">BURGUER</h3>
<br>

<div class="main-burguer --icon">
	<div class="-icon icon-twitter"></div>
</div>

<br>

<div class="main-burguer --line">
	<span></span><span></span><span></span>
</div>

<br>

<div class="main-burguer --inline">
	<span></span><span></span><span></span>
</div>

<br>

<div class="main-burguer --inline-reverse">
	<span></span><span></span><span></span>
</div>

<br>

<div class="main-burguer --open-close">
	<span></span><span></span><span></span>
</div>

<br>

<div class="main-burguer --open-close --no-hover">
	<span></span><span></span><span></span>
</div>

<br>

<div class="main-burguer --more">
	<span></span><span></span><span></span>
</div>

<br>

<div class="main-burguer --center">
	<span></span><span></span><span></span>
</div>

<br>
<h3 style="background-color: red;color:white;padding:20px">MENU MIGA</h3>
<br>

<div class="general-menu --list-none">
	<ul>
		<li>
			<a href="">Inicio</a>
		</li>
		<li>
			<a href="">Nosotros</a>
		</li>
		<li>
			<a href="">Contacto</a>
		</li>
	</ul>
</div>

<br>

<div class="general-miga --list-none">
	<ul>
		<li>
			<a href="">Inicio</a>
		</li>
		<li>
			<a href="">Nosotros</a>
		</li>
		<li>
			<a href="">Contacto</a>
		</li>
	</ul>
</div>

<br>

<div class="general-social --list-none">
	<ul>
		<li>
			<a href="" target="_blank" class="icon-twitter"></a>
		</li>
		<li>
		<a href="" target="_blank" class="icon-whatsapp"></a>
		</li>
	</ul>
</div>


<br>
<h3 style="background-color: red;color:white;padding:20px">ACORDION</h3>
<br>


<div>
	<div class="acordion--pitcher">Titulo pitcher</div>
	<div class="acordion--content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Rerum, nemo, odio? Dignissimos modi, at eveniet? Ipsam ut, excepturi. Tenetur rem nobis fugit enim reiciendis fugiat laudantium libero animi facere atque.</div>
</div>

<div>
	<div class="acordion--pitcher">Titulo pitcher2</div>
	<div class="acordion--content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Rerum, nemo, odio? Dignissimos modi, at eveniet? Ipsam ut, excepturi. Tenetur rem nobis fugit enim reiciendis fugiat laudantium libero animi facere atque.</div>
</div>

<br>

<div>
	<div class="acordion--pitcher2">Titulo pitcher</div>
	<div class="acordion--content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Rerum, nemo, odio? Dignissimos modi, at eveniet? Ipsam ut, excepturi. Tenetur rem nobis fugit enim reiciendis fugiat laudantium libero animi facere atque.</div>
</div>

<div>
	<div class="acordion--pitcher2">Titulo pitcher2</div>
	<div class="acordion--content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Rerum, nemo, odio? Dignissimos modi, at eveniet? Ipsam ut, excepturi. Tenetur rem nobis fugit enim reiciendis fugiat laudantium libero animi facere atque.</div>
</div>

<br>
<div>
	<div class="acordion--pitcher">Titulo pitcher</div>
	<div class="acordion--content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Rerum, nemo, odio? Dignissimos modi, at eveniet? Ipsam ut, excepturi. Tenetur rem nobis fugit enim reiciendis fugiat laudantium libero animi facere atque.</div>
</div>

<div>
	<div class="acordion--pitcher">Titulo pitcher2</div>
	<div class="acordion--content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Rerum, nemo, odio? Dignissimos modi, at eveniet? Ipsam ut, excepturi. Tenetur rem nobis fugit enim reiciendis fugiat laudantium libero animi facere atque.</div>
</div>

<br>

<div>
	<div class="acordion2--pitcher">Titulo pitcher jquery</div>
	<div class="acordion2--content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Rerum, nemo, odio? Dignissimos modi, at eveniet? Ipsam ut, excepturi. Tenetur rem nobis fugit enim reiciendis fugiat laudantium libero animi facere atque.</div>
</div>

<div>
	<div class="acordion2--pitcher">Titulo pitcher2 jquery</div>
	<div class="acordion2--content">Lorem ipsum dolor sit amet consectetur adipisicing, elit. Rerum, nemo, odio? Dignissimos modi, at eveniet? Ipsam ut, excepturi. Tenetur rem nobis fugit enim reiciendis fugiat laudantium libero animi facere atque.</div>
</div>


<br>
<h3 style="background-color: red;color:white;padding:20px">TAB</h3>
<br>

<div class="tab--example --list-none">
	<ul>
		<li class="tab-link tab--link">Link1</li>
		<li class="tab-link tab--link">Link2</li>
		<li class="tab-link tab--link">Link3</li>
	</ul>
	<br>
	<ul class="tab-content">
		<li class="tab-item tab--content">
			<p>LINK1.Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ipsum perspiciatis doloremque pariatur enim rem illo earum excepturi, obcaecati incidunt ullam voluptate quibusdam reprehenderit laudantium reiciendis, minima autem aliquid. Animi?</p>
		</li>
		<li class="tab-item tab--content">
			<p>LINK2.Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ipsum perspiciatis doloremque pariatur enim rem illo earum excepturi, obcaecati incidunt ullam voluptate quibusdam reprehenderit laudantium reiciendis, minima autem aliquid. Animi?</p>
		</li>
		<li class="tab-item tab--content">
			<p>LINK3.Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ipsum perspiciatis doloremque pariatur enim rem illo earum excepturi, obcaecati incidunt ullam voluptate quibusdam reprehenderit laudantium reiciendis, minima autem aliquid. Animi?</p>
		</li>
	</ul>
</div>

<br>

<div class="tab--example2 --list-none">
	<ul>
		<li class="tab-link tab--link tab--link2" data-tab="peru">Peru</li>
		<li class="tab-link tab--link tab--link2" data-tab="colombia">Colombia</li>
		<li class="tab-link tab--link tab--link2" data-tab="chile">Chile</li>
	</ul>
	<br>
	<ul class="tab-content">
		<li class="tab-item tab--item tab--content2" data-tab="peru">
			<p>PERU.Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ipsum perspiciatis doloremque pariatur enim rem illo earum excepturi, obcaecati incidunt ullam voluptate quibusdam reprehenderit laudantium reiciendis, minima autem aliquid. Animi?</p>
		</li>
		<li class="tab-item tab--item tab--content2" data-tab="colombia">
			<p>COLOMBIA.Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ipsum perspiciatis doloremque pariatur enim rem illo earum excepturi, obcaecati incidunt ullam voluptate quibusdam reprehenderit laudantium reiciendis, minima autem aliquid. Animi?</p>
		</li>
		<li class="tab-item tab--item tab--content2" data-tab="chile">
			<p>CHILE.Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo ipsum perspiciatis doloremque pariatur enim rem illo earum excepturi, obcaecati incidunt ullam voluptate quibusdam reprehenderit laudantium reiciendis, minima autem aliquid. Animi?</p>
		</li>
	</ul>
</div>

<br>
<h3 style="background-color: red;color:white;padding:20px">STICKY</h3>
<br>

<div class="sticky-block" style="display:flex;align:flex-start;position:relative">
	<div class="sticky-aside">
		<div class="sticky-aside-block widget js-sticky-widget">
		<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png" alt="">
		</div>
	</div>
	<div class="sticky-content">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum nostrum repellat aliquid voluptas natus totam porro, nesciunt accusamus. Harum voluptas temporibus natus rem omnis molestias dolor quos est doloribus ex iure necessitatibus deserunt sunt distinctio, consequatur a sequi praesentium. At qui eaque, pariatur, soluta commodi ullam aspernatur quibusdam, quod animi eligendi similique mollitia laboriosam sunt nisi? Maxime harum quaerat nam vitae voluptates possimus sapiente illo id, atque vero consequatur quo alias sit natus est ullam, hic aliquam. Harum necessitatibus tenetur quasi nam? Explicabo deserunt quod pariatur repudiandae natus odit corrupti quisquam facere. Repellat maiores voluptatibus eaque molestias assumenda! Explicabo tempore, vero distinctio nostrum aspernatur libero dolore soluta sed vitae at molestias magni reiciendis provident fugit recusandae, corrupti, repellendus aliquam adipisci veritatis nam dolorum laudantium. Saepe repellat beatae totam ab labore animi fugiat pariatur doloremque, vero nobis nisi molestiae possimus officiis rem tempora asperiores expedita voluptatibus? Deserunt id ducimus saepe veritatis. Consectetur, voluptate! Tenetur sit, adipisci obcaecati vel quos neque at! At eligendi neque amet ea totam voluptas? Quas provident sapiente rerum voluptatibus. Numquam molestiae voluptatem laboriosam vel officiis ab placeat? Esse labore inventore eum deleniti mollitia laborum, ab soluta, ad nostrum ea architecto sed, rem fugit hic repudiandae. Odit incidunt voluptatum ducimus ex assumenda in, libero qui molestias architecto tempore esse alias consequuntur consectetur perferendis neque suscipit? Dolorem labore minus nihil exercitationem beatae autem libero, distinctio harum officiis possimus asperiores temporibus amet consequuntur numquam rem sequi veritatis sapiente, laborum quam voluptas! Voluptatem repellat nulla earum perferendis, voluptas ab iure cupiditate reiciendis, tempora, minima officia. Distinctio dolorem delectus consectetur officia sint vero ad, sed sit culpa itaque? Animi excepturi pariatur similique cum assumenda magnam sapiente veniam tempore quasi. Ea ab, mollitia nemo, sapiente facere quod deserunt eos quis temporibus tenetur amet magni, sequi provident quae et deleniti enim ipsam. Tenetur eum maxime rem blanditiis cum, officiis quos molestias quia quas! Fuga sunt, hic dolorum id repellat distinctio voluptatum architecto sequi dignissimos iste, aliquam quam debitis suscipit beatae quis nemo aspernatur? Saepe soluta incidunt consectetur alias est eveniet, facere culpa distinctio tenetur perspiciatis, recusandae sit voluptates earum quos, hic similique obcaecati! Dolore repellendus eveniet culpa libero ipsa ea distinctio consectetur aliquam, animi quibusdam sint error velit at fuga doloremque dignissimos nihil minima amet temporibus tenetur atque minus omnis. Eaque nam explicabo labore eius iusto facilis sed atque! Minima voluptas nemo incidunt nulla esse dignissimos natus officia nostrum id cupiditate aspernatur sequi deserunt, vel odio voluptate asperiores ullam dolore rem iure laboriosam quae explicabo? Voluptatum porro esse consequatur odio suscipit fuga, totam dicta debitis atque, maxime odit blanditiis est officia rerum, placeat aperiam qui ad veritatis laudantium reiciendis? Laudantium modi saepe asperiores magnam quibusdam, quas cum quae, ea assumenda perferendis, dolorum aut voluptatibus labore veniam doloremque at obcaecati inventore nostrum ullam eligendi autem? Quos pariatur eum, libero qui in voluptatem porro quis praesentium, ab rerum assumenda, molestias excepturi accusantium quam! Non impedit, tempore minus exercitationem ex reiciendis odit excepturi veniam neque molestias ratione doloribus labore quo assumenda quis libero. At reiciendis eos veniam amet magnam voluptatem nam modi eum repellendus quidem totam, explicabo est debitis sed necessitatibus earum quos saepe beatae ex minima dolorem possimus voluptates? Error nostrum consectetur ipsa, magni quos reiciendis tempora labore. Cumque similique minima, asperiores vitae quae placeat in necessitatibus veniam atque reprehenderit et ipsam explicabo, nesciunt ad deleniti hic velit repellendus eos unde nulla. Illum labore soluta doloremque mollitia animi, vitae non sequi sapiente doloribus in reiciendis, quas neque quo error commodi molestiae nobis sint cupiditate, ratione nesciunt saepe provident illo obcaecati. Nam vel et ipsam ad nesciunt fugit harum veniam commodi consectetur quas magnam culpa doloribus sequi architecto repellendus molestiae obcaecati tenetur tempore, aperiam odio! Molestiae esse possimus libero dolore quos laboriosam quia laborum perferendis fugit eos iusto iste consequatur repellat aspernatur cumque magni deserunt, ducimus aperiam tenetur consequuntur illo molestias velit! Doloribus voluptatem, nostrum error animi, accusamus delectus alias obcaecati voluptate sequi recusandae eaque soluta explicabo tempore eligendi dolorem porro corrupti asperiores sit impedit accusantium beatae consectetur maiores? Doloribus facilis veritatis, nam illo quos aut ab ipsam temporibus? Adipisci ab error ipsam quae porro voluptas repellat nisi architecto. Dolor sequi et sunt modi harum optio tempora fugiat blanditiis ab deserunt cumque mollitia laborum, qui, minima iusto itaque similique officiis nostrum veritatis corporis architecto aliquam ipsam eum quidem? Voluptate dignissimos dolorem quam blanditiis saepe minus cum voluptas tenetur doloribus inventore voluptatem delectus quaerat, quae doloremque? Molestias est similique, molestiae blanditiis nihil nulla provident. Expedita eaque quidem fugiat quae placeat voluptatem voluptas excepturi deserunt, eum, neque, quod perspiciatis unde doloribus autem libero asperiores corporis rem nesciunt. Dolores, iure repudiandae quia molestias, quas ratione quos, qui eligendi exercitationem ea voluptatem eos nihil ipsam cumque omnis. Corporis veniam odio, repellat temporibus, voluptas numquam ducimus harum impedit optio ipsum doloremque asperiores assumenda aperiam ex necessitatibus quidem nostrum praesentium voluptatibus aliquid nisi odit commodi tenetur! Nisi enim aperiam commodi animi laboriosam! Nisi reprehenderit cum adipisci tenetur aperiam atque optio pariatur autem, rerum harum. Pariatur placeat veniam, explicabo aut minima rem nihil facere officia soluta repellat ut quidem assumenda mollitia itaque iste perferendis obcaecati, optio molestiae id quod esse. Repellat, quas ipsa laboriosam voluptatibus nesciunt laborum error vel fugiat quasi commodi excepturi accusamus similique voluptatem aliquid hic ex iure. Dolorum laudantium dignissimos suscipit! Consequatur quaerat nobis, cum voluptas dolore quia soluta quas hic laudantium dolorem eum placeat harum ea sunt repudiandae ipsa nulla officiis itaque nesciunt? Laboriosam fugit ea dolor expedita deleniti commodi. Quidem sit amet temporibus minima repellat quam veritatis qui vero cum minus placeat, non natus, doloremque voluptas! Perspiciatis, vero officia explicabo repellendus odit deleniti eum libero sequi, sunt, optio at? Quas esse obcaecati voluptatum tempora nemo ducimus ullam quis numquam blanditiis molestiae. Rem officiis eaque, nihil perferendis, iste dolor aliquam quidem provident sequi expedita minima reprehenderit soluta sed sapiente similique illum aperiam. Magnam dolorum soluta vel, omnis, animi in neque temporibus, vero facere architecto iure dolore! Voluptatem quasi qui magnam, harum quia veritatis, laudantium voluptatibus error soluta itaque nihil autem id. Amet minus sequi laboriosam eius ea porro, aliquam quo optio praesentium itaque laborum velit officia recusandae magni delectus eos asperiores nemo incidunt at soluta nobis voluptatum. Accusamus alias eius explicabo provident quas aut? Quae quaerat ipsum repudiandae reiciendis placeat voluptatum doloremque, vitae eius adipisci aspernatur modi aliquam iste sit explicabo. Possimus ad, distinctio quae eius commodi dicta sint nesciunt hic nobis! Illum ratione dolore ipsam consequuntur repellat temporibus commodi quaerat vel. Eligendi sit nobis nisi aliquid explicabo reiciendis consequuntur, dolorum minima vitae ea libero quos dolor adipisci repellat sunt? Laudantium numquam accusantium totam suscipit nobis voluptate molestias eos iste repellendus, quod minima provident cupiditate aliquid dolor quo sit voluptatibus porro voluptas asperiores eum cumque mollitia fugiat debitis? Delectus harum, id fuga veniam veritatis sint molestiae voluptates quibusdam necessitatibus ullam quod ex repellat modi itaque, debitis quia exercitationem a mollitia pariatur eligendi et ut nihil! Dolores dicta aperiam aspernatur soluta sapiente, quod tenetur pariatur, officia a deleniti illo dolore laborum! Ut laudantium porro ipsum itaque saepe optio inventore eos quo enim corrupti! Quidem, nulla deserunt. Non reiciendis tenetur eos minima quidem illum aperiam voluptatibus ducimus, officia est quam sit nesciunt, doloribus placeat quod? Nobis assumenda hic beatae quibusdam non placeat blanditiis fugit accusamus corrupti, sapiente nihil aliquam, libero architecto quam? Dolore adipisci, incidunt deleniti numquam dignissimos delectus obcaecati, culpa neque nulla, laudantium illum aperiam possimus voluptates ad deserunt maiores porro natus recusandae soluta assumenda fuga. Odit pariatur sequi dolor, vitae qui corporis quod nobis eos, expedita nisi debitis commodi cumque. Fugit quae neque cupiditate illo quisquam minima perferendis accusamus similique quam? Nam inventore cum ea quas, quo debitis? Veritatis doloremque nobis praesentium architecto atque eligendi impedit dolorum cumque corrupti nostrum, aliquam autem reprehenderit commodi non nemo dignissimos minima unde nesciunt eum sapiente animi sed neque placeat excepturi. Reiciendis fugiat perferendis cumque ducimus voluptatibus quidem itaque saepe nisi, molestias et eum ad accusamus, quae voluptas adipisci maiores quod magni. Asperiores doloremque soluta obcaecati dolorum unde deleniti, mollitia nihil iure. Harum reprehenderit minima itaque atque! Deleniti nisi exercitationem sit adipisci quos minus praesentium voluptatum sapiente blanditiis vitae ullam tempore vel, laudantium commodi quo porro obcaecati ea beatae ipsam minima? Dolore minus officia fuga doloribus libero voluptas unde aut. Rem fugiat unde officia corrupti eius praesentium. Molestiae maiores eveniet veniam quod perferendis, delectus quia ipsum eligendi minima modi officiis odit quae voluptatem. Magnam reiciendis explicabo esse voluptate architecto dolorem delectus laboriosam dolores. Quas eligendi ut quod quibusdam laudantium dolorem consectetur explicabo sunt minus? Iure fuga dignissimos optio maiores explicabo perspiciatis aut quasi, nam voluptatem nesciunt aperiam! Ratione aspernatur nihil, sapiente dolore itaque sed sequi provident quaerat, sint obcaecati qui illum molestias totam reprehenderit? Quo aliquid natus, beatae fugit quam tempora qui quia optio eius nostrum, molestiae, tenetur laborum autem a. Laudantium, et aliquid. Ad molestiae pariatur amet repudiandae maiores voluptatem mollitia adipisci vitae dignissimos necessitatibus, ullam esse quos. Debitis maiores odio dolorum harum ad libero, enim facere nam exercitationem temporibus dolores voluptas nihil voluptatem minus ipsa ducimus eum nisi qui doloremque? Magnam esse autem minus vel quidem quaerat sequi neque, saepe ut quae soluta nihil voluptatibus ab ea dolorum non officiis cum voluptatem. Unde ipsum vero, qui, earum velit accusamus quidem eum voluptatum nisi quia, facere nihil labore consequatur ullam aut tenetur aspernatur beatae exercitationem tempore omnis ea modi accusantium minima repellendus. Unde doloremque voluptas, velit, ea, repellat voluptatibus facilis totam obcaecati fuga adipisci officia atque in cum vel quia ipsum laborum placeat sed consequatur. Minus aut ab odit provident quam? Tempora quaerat illum necessitatibus architecto iusto, voluptas dicta ut ipsam dolorum mollitia exercitationem, molestias facere minima aut perferendis laboriosam illo perspiciatis magni. Non dolore nulla quis totam quibusdam eligendi exercitationem voluptatum autem sed amet tempora pariatur quod doloribus quo, qui ducimus quia, assumenda vel labore vitae repellat! Nesciunt explicabo voluptate cumque, beatae sequi sed incidunt fugiat voluptatibus, corrupti libero vitae odit neque fuga delectus possimus placeat. Deserunt nam tenetur facilis labore repellat eum iste officia officiis, a quas ipsa ipsum eos cupiditate, ex aliquam accusamus id quam illo sequi provident voluptate nemo inventore accusantium. Sunt tenetur nulla suscipit enim veritatis non accusantium exercitationem mollitia odio et temporibus expedita voluptatibus nemo quaerat voluptas hic quasi eligendi aspernatur, eaque illum saepe ea numquam velit. Nobis, saepe non amet, ratione doloribus aspernatur quae molestias earum soluta aliquam id iure eligendi enim ducimus necessitatibus! Doloremque quod suscipit tenetur recusandae aliquam, nihil modi quo, debitis dolores dolorum fugiat quas vel rem accusantium libero doloribus? Est, sequi. Eos, blanditiis aliquid quidem facilis pariatur repellendus odit nobis commodi, alias debitis error dolores odio accusantium ducimus corrupti libero eius! Maxime, praesentium totam! Voluptatibus sint beatae exercitationem, enim quis reprehenderit deserunt. Quos alias eligendi molestias, ipsum praesentium repellendus voluptatem tempore omnis, a in rem quidem obcaecati eius quia temporibus impedit, delectus natus perferendis minima! Praesentium maxime ad alias expedita aliquam. Fugiat quibusdam, animi aspernatur modi sunt quam, dolorum inventore autem fuga sed recusandae odio obcaecati voluptate distinctio soluta rerum facere voluptatum tempora esse quisquam. Maiores aut exercitationem deserunt perferendis fugiat odit, nesciunt repudiandae, tempora illo dolorem enim dolorum. Dolor obcaecati accusamus esse provident consequuntur ducimus aliquam perferendis, inventore eum eos error labore dignissimos magnam nisi ipsam itaque assumenda est facilis saepe quas laudantium? Odio voluptas eos nam aut, a placeat dolorem quibusdam ad, corrupti distinctio adipisci odit! Quas aperiam est aut alias! Fugit excepturi ullam officiis recusandae reiciendis necessitatibus omnis nihil voluptas tenetur consequuntur? Obcaecati, culpa officiis temporibus possimus distinctio pariatur natus repellendus quidem voluptatum, sunt, aspernatur neque magni! Magni, quas. Perspiciatis impedit facere cupiditate molestias deserunt modi esse? Doloribus beatae nisi voluptas ea, enim et rerum ut perferendis reiciendis atque, amet, expedita molestiae autem. Quae odio blanditiis officiis officia, sit culpa incidunt adipisci neque eveniet nemo reprehenderit repellendus in architecto? Magnam corporis ducimus voluptatibus nesciunt officiis autem sed unde odit minima, repudiandae dolorum sequi dignissimos alias id placeat saepe quaerat officia. Architecto provident nulla commodi quis eveniet asperiores? Voluptatibus, repellendus sunt reiciendis fugiat illum beatae ipsa excepturi, aperiam iure et consequatur? Nisi voluptatem autem corrupti et. Delectus laborum enim assumenda asperiores incidunt impedit cum quibusdam mollitia! Aliquid ipsam et unde ea quasi suscipit, iure in earum illum maxime quibusdam. Accusamus, repudiandae. Sint sapiente ea, ipsum dolorem iusto aliquam nemo excepturi accusamus quidem, error voluptas atque libero autem aperiam quam? Magni atque architecto fugit corrupti dignissimos repudiandae laboriosam voluptatibus perspiciatis quos aut illum, ipsam ut pariatur molestias voluptatem. Ad magni eius dolorum reprehenderit fuga tempora incidunt, non illum ut temporibus deserunt laborum expedita libero animi enim quae natus sit numquam! Provident iste ratione molestias culpa cum, expedita dolore at quae. Earum, nulla quibusdam nam soluta nihil, perferendis eligendi dolores quis dignissimos placeat ratione. Nam aspernatur tempore cum perspiciatis voluptate incidunt unde, minus repellat perferendis! Autem iste veniam officia, delectus eum mollitia odit pariatur eveniet ullam numquam quibusdam hic eligendi dolor error impedit exercitationem dolorum ratione sequi voluptas, aut velit et. Possimus magnam animi labore temporibus fuga, maxime sed et aliquam laborum perspiciatis voluptates numquam soluta dicta nobis alias illo sunt laudantium ducimus. Ab assumenda fugiat quasi molestiae, hic modi deserunt tenetur odio vel? Deserunt eaque laborum laudantium aliquid corrupti tenetur cumque doloribus cupiditate fugit mollitia facilis, temporibus quam, inventore nihil maxime. Ipsum commodi asperiores culpa deleniti quos nulla, tenetur praesentium vel accusamus modi, minima quidem beatae necessitatibus nesciunt possimus vero neque sint consequuntur numquam esse natus itaque? Nisi aliquid excepturi doloremque, debitis id, in, eum veritatis voluptatibus sint magnam adipisci quidem pariatur labore nostrum modi reiciendis ullam. Impedit quia enim vero aut ipsam ut minima ipsum nam nobis? Numquam quaerat, ducimus eum magnam nihil nisi sapiente, ipsa perferendis debitis, dolores expedita doloremque quidem repellat aperiam laboriosam. Incidunt illo minus architecto officia at neque porro asperiores reiciendis praesentium, nihil amet deleniti, quisquam ad sint saepe tempore ex commodi deserunt aliquid harum nobis fugit atque magnam! Aliquid accusantium fuga quisquam nemo quaerat natus neque rerum alias saepe, odit ullam, itaque ea enim eum illo quo inventore omnis repudiandae aliquam earum illum tempore ad? Aliquam accusamus quam commodi iusto ea exercitationem corrupti, repellat quia eum aut itaque ab qui distinctio ipsam totam facilis dicta rem, officiis voluptatum nam necessitatibus. Nostrum magni repellat, voluptatibus a impedit totam dolorum. Qui ad consequatur velit odio eius? Corrupti eum quidem dicta quaerat, saepe iusto architecto fugiat atque laboriosam dolores. Dicta nobis consequuntur, eum aliquid, tenetur alias aut commodi soluta vel cum ipsam officiis fuga, ullam quia! Cumque porro nihil, necessitatibus labore aliquid dolorem velit possimus doloremque hic soluta aut cupiditate suscipit fugit id impedit adipisci autem magni maxime! Ea eveniet molestiae numquam aliquid autem veniam vero quo cumque blanditiis sit unde, tenetur quod! Eius qui totam vitae nihil ad, nemo commodi molestiae doloribus dolores aliquam corporis, soluta quisquam vero tempora quae nisi aliquid dolorum esse odio quasi officia culpa nesciunt explicabo! Facilis a doloribus, inventore quibusdam velit quisquam dolor numquam veritatis facere dolorem illo, dolore sapiente tempora sunt praesentium voluptas pariatur nemo? Nemo, ullam. Doloremque architecto eius suscipit harum debitis voluptates incidunt, atque alias eum omnis libero, quibusdam itaque tempore laboriosam! Temporibus, earum! Eaque, vel! Vitae incidunt totam repudiandae quidem fugit velit reiciendis? Rem totam quia possimus sequi. Asperiores nesciunt sint quis libero vero. Esse aspernatur vel reprehenderit illo ullam porro accusantium tempora eligendi eveniet, deserunt temporibus! Deserunt provident id quisquam corporis sed nostrum, ea repellat eligendi perspiciatis itaque quibusdam eveniet alias aut fugit dolorem ullam tempora quos, optio porro voluptate illum est. At dicta neque non praesentium nesciunt, dignissimos quam repellat dolor obcaecati. Nesciunt commodi eligendi, distinctio tempora quaerat ab impedit possimus quos alias esse nihil architecto quae laboriosam exercitationem facilis sapiente id nulla perferendis eos. Consequatur nulla et magnam dignissimos nisi in, ab consectetur asperiores amet earum ut nostrum excepturi cupiditate molestias adipisci iste voluptas natus aspernatur eaque vel modi numquam dolorem dolores sequi? Illum tempora ducimus nulla sint provident sequi doloremque quisquam libero commodi esse, numquam fugit? Neque velit quasi consectetur quas eum tempora necessitatibus modi laborum repellendus, nisi aliquam sint recusandae facere vero nobis alias accusamus atque cupiditate? Porro temporibus voluptatibus, at fugit consequatur eum consectetur, a quisquam, eos laboriosam quia labore cumque sit necessitatibus in voluptate? Aspernatur consequatur enim aut reiciendis iusto explicabo perferendis perspiciatis distinctio, atque facere magnam cumque officiis quod nobis ullam voluptatem laborum laboriosam at, nostrum provident et sequi. Iusto et odit unde cupiditate expedita, sed eum nulla blanditiis optio repudiandae, sapiente debitis dolores id aliquam odio consequuntur quos exercitationem enim, aliquid ut eaque necessitatibus. Eos cupiditate natus expedita qui? Natus sequi quis itaque deserunt, magni cupiditate laborum, excepturi, dicta ducimus accusamus officiis atque eum placeat vitae modi sit nam vel sint eveniet fuga consectetur saepe. Nulla ipsa, tempora, animi possimus quasi cumque consequatur blanditiis dolore sed numquam impedit neque, qui optio. Nesciunt impedit, eligendi optio beatae, qui repellendus neque cumque ipsum iste laborum eius dolore ab quod deserunt. Numquam inventore eaque hic architecto eum voluptate quae quas? Fugiat, placeat. Eum optio blanditiis obcaecati saepe dolorem voluptatibus aliquam ea ipsum soluta magnam perferendis, recusandae, officia, sint cumque quis velit repellat. Libero velit, nobis dolores, recusandae in, vel vitae nesciunt delectus cumque laborum iste quasi aut commodi sunt consectetur assumenda neque! Nulla, sed at. Possimus sed porro, temporibus similique ratione libero voluptas rem animi laudantium consectetur aliquid quae sint fugiat quibusdam officiis. Magni itaque quod sint adipisci impedit eveniet totam minus molestias, ducimus laudantium commodi ullam saepe cupiditate deserunt cum suscipit. Autem alias atque vero itaque tempore! Rem adipisci, voluptatum animi, hic qui beatae quam magnam eius totam minus fugiat quidem nisi corporis, illo numquam quasi similique dolores minima aliquam eum! Magnam, in quo labore eius temporibus quibusdam eaque commodi ipsum totam ullam repellendus debitis qui, vitae molestiae provident vero nihil iusto reiciendis earum odit omnis facilis excepturi eos. Beatae ratione, assumenda repudiandae mollitia corporis accusantium cum cumque at nesciunt, minus maxime rerum ipsam incidunt quam! At nobis alias dignissimos laborum dolore pariatur nulla tempora unde aliquid voluptatibus ea non labore modi minima veniam omnis, assumenda quidem, reprehenderit odit sint similique debitis! Obcaecati id tempore officia repellat illum suscipit sapiente repudiandae commodi ipsum, rem architecto numquam velit molestiae dolores maiores blanditiis error pariatur debitis. Pariatur architecto, recusandae praesentium dicta reprehenderit aliquid expedita quae nemo rem, officiis alias sint officia a adipisci repellat qui dolores quia quod magni, repudiandae nisi beatae impedit placeat aspernatur. Quae necessitatibus repudiandae placeat, provident quidem harum sed, iste similique autem magnam facilis mollitia non sequi quisquam est repellat. Odio blanditiis accusamus unde impedit ad maxime iusto labore quisquam earum quae illo ipsa, ea, laudantium, et quam architecto doloribus modi vero exercitationem deleniti velit placeat mollitia voluptate. Quo, atque! Maxime, quas? Eius suscipit neque, reiciendis amet vel ipsum rerum pariatur itaque repudiandae ipsam facilis harum animi aliquid, molestiae aliquam officia repellendus nemo provident consequatur odit voluptatibus. Nemo ratione dolores architecto natus eum. Culpa esse quas quod tempora, neque officia! Accusantium nisi maiores aliquid eos perferendis harum similique commodi esse voluptatem aliquam ducimus, ipsum sit consectetur quos incidunt delectus accusamus eveniet nihil cum minima laudantium. Eligendi nobis odio ipsum nemo minima possimus cupiditate exercitationem dicta. Laudantium perspiciatis quam doloremque error, facilis aspernatur recusandae rem accusamus quaerat at temporibus nobis deserunt maxime iste natus rerum ea libero quo dignissimos illo aliquid! Necessitatibus soluta consectetur praesentium temporibus quasi veniam ducimus impedit optio quibusdam eligendi dicta veritatis, fugiat iste delectus laborum sequi, unde quam non commodi numquam, ipsam minima reiciendis consequuntur! Fugit libero nulla sit. Excepturi suscipit quae et earum iusto totam corrupti vel exercitationem assumenda reiciendis quod, nemo facere tempora laborum praesentium animi consequuntur iste voluptate mollitia accusamus! Quia asperiores voluptate ex blanditiis totam in dignissimos quos. Temporibus minima sequi architecto, reprehenderit modi, dignissimos ut excepturi illum voluptas voluptates, doloribus accusantium ipsa tempore consectetur ipsum vel vitae amet dolores blanditiis atque magnam odio. Neque quia sunt quibusdam modi incidunt, ratione provident cupiditate quis sequi vel odio itaque voluptate quae saepe sit consequuntur! Vero, molestias. Nesciunt sed sunt error. Delectus totam sunt ea? Ipsam fuga maxime tenetur suscipit, reprehenderit repudiandae mollitia temporibus alias blanditiis autem ipsa commodi sint laboriosam? Sit, temporibus dolorum! Beatae blanditiis, consequuntur quod hic architecto, dicta modi cumque vero rem autem odit dignissimos harum, alias temporibus praesentium eum quidem totam debitis! Sequi voluptatibus cumque ad deserunt culpa assumenda minus obcaecati fuga esse corporis facilis dolorem fugit, aliquid aut placeat consectetur est adipisci eos quis! Nihil dolor voluptatem sit enim, repellendus quo mollitia quasi reiciendis amet iure itaque. Adipisci corporis ratione architecto, deserunt ipsam harum. Porro laborum hic obcaecati sint, ea ipsam voluptate quia illo nisi deleniti voluptatum voluptatibus fugit animi at voluptatem ad, sed quibusdam, nesciunt vero! Quasi cupiditate esse dolor molestiae perspiciatis laboriosam in eum voluptas ipsa necessitatibus? Earum commodi perferendis obcaecati iste, delectus voluptas optio? Aspernatur, quia dicta provident odit beatae natus ipsa excepturi rerum, voluptatum ex dolore. Accusamus quos est, beatae quisquam harum magnam quas quis dolorem, quo pariatur, quia libero error enim ut. At odio tenetur perspiciatis autem atque numquam perferendis aperiam accusamus nulla. Tenetur debitis maiores, praesentium earum eveniet in laudantium pariatur architecto porro saepe, sunt modi laboriosam enim, laborum minus aliquam. Assumenda dignissimos error distinctio sit sequi ipsum labore, autem facere reiciendis commodi debitis soluta quibusdam architecto. Aspernatur eligendi cumque rem delectus consequatur, nisi consequuntur voluptatum veniam quod soluta velit laudantium eaque vel quaerat. A amet dignissimos esse, alias doloribus in quidem magnam est assumenda voluptatum repellat non quos maxime aperiam molestias. Perspiciatis optio minus at reprehenderit cupiditate necessitatibus quos quia sed. Quaerat saepe eligendi incidunt? Eius dolorem consequatur aperiam ipsam possimus. Expedita nostrum eius fuga perspiciatis, atque quo, accusantium mollitia recusandae debitis excepturi pariatur id ipsa quaerat magni accusamus labore sequi deleniti nesciunt placeat esse sunt, neque voluptate voluptas. Eos repudiandae nihil illo laboriosam quae omnis incidunt illum nesciunt reiciendis aperiam eaque itaque aliquid vero, ipsam velit explicabo. Nobis ullam minus, voluptatibus dolores soluta magni reiciendis iste temporibus quas hic voluptatem nam debitis amet aperiam cumque error maxime? Inventore culpa consequatur dolorem consequuntur maxime, a, vero fugiat esse officiis excepturi illo similique deleniti quo eaque animi. Voluptate sequi id illo atque veritatis earum cum, minus sapiente illum doloremque commodi aperiam? Labore, enim accusantium! Illum laudantium cum vel distinctio voluptates, neque quibusdam dolorum modi vero tenetur mollitia dolores, facilis animi magnam explicabo nemo rem consequuntur id tempore perspiciatis harum temporibus nesciunt ratione. Voluptatum minus sequi nam suscipit enim, amet sit ad. Quibusdam impedit consequatur sunt fuga similique deserunt accusantium dicta tenetur perferendis minima possimus magni voluptatum sapiente assumenda cum culpa, odit veritatis ducimus. Accusamus alias doloribus cupiditate aliquid eligendi, suscipit culpa ratione animi rem perferendis dolor sed dolorum quibusdam vero. Eveniet, ipsa magni quibusdam soluta consequatur rerum repudiandae? Neque, totam laudantium? Iusto ratione voluptatibus quo nihil eius perferendis corporis nisi aliquam distinctio! Expedita maxime magnam voluptate. Necessitatibus quam, accusantium libero magnam illo, atque recusandae beatae optio deserunt esse magni nulla, et voluptatum amet quod iure quas ab! Expedita minima, libero itaque nihil, unde at porro facilis inventore nobis dolorem molestias blanditiis sit error earum ullam repellendus odio quibusdam recusandae! Magnam ad, atque, numquam quidem eum alias voluptatum voluptatem dignissimos voluptas fuga adipisci minus, cum vel quas accusamus officiis quo earum veritatis nulla. Rerum nulla et quos. Commodi amet architecto cum iusto in dolores quisquam quia doloribus sed voluptatum maiores nihil enim necessitatibus reiciendis nulla velit, eaque accusamus. Qui dicta similique amet, iste explicabo neque soluta consequatur. Doloribus dolore ipsa cumque, placeat impedit minima quia voluptatum nemo consectetur voluptate consequuntur eligendi veritatis commodi sed, quam sequi nulla eum dolor alias dignissimos, animi dolorum distinctio? Nostrum quis, magni aperiam impedit officiis tenetur nihil quisquam, natus sapiente voluptas, voluptate perferendis adipisci. Voluptatum quisquam fugit, quaerat exercitationem accusamus aut eveniet mollitia aperiam, minus velit incidunt! Eum nam quae est delectus, deserunt ratione id vel fugit dolor quod corporis eos ipsam eveniet blanditiis impedit illum aliquid modi molestiae praesentium quam pariatur doloremque! Quia ab, officiis, a magni explicabo facere vero quis quaerat soluta nobis dolorum, asperiores molestiae. Vel eos sunt pariatur sed? Earum sed blanditiis est, suscipit et quo nihil animi a iure architecto quibusdam error vero eos sapiente dolorum eveniet facere doloribus provident molestiae esse quos corrupti cum dolorem! Sapiente eius quos quisquam placeat nam eligendi similique minus porro? Magnam, ipsam molestias corrupti vitae aspernatur architecto tempore?</p>
	</div>
</div>

<br>
<h3 style="background-color: red;color:white;padding:20px">INCREMENT</h3>
<br>

<span class="increment--number" data-number="150"></span>

<br><br>

<br>
<h3 style="background-color: red;color:white;padding:20px">HEIGHT BLOCKS</h3>
<br>

<article class="calc--height" style="background-color: yellow">
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png" alt="">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, placeat?</p>
	</div>
</article>
<br>
<article class="calc--height" style="background-color: yellow">
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png" alt="">
		<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel, placeat?</p>
	</div>
</article>
<br>
<article class="calc--height" style="background-color: yellow">
	<div>
		<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png" alt="">
		<p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur error ipsa distinctio vitae numquam assumenda pariatur sunt autem laboriosam eum, sed explicabo fuga sit inventore ea iste soluta ipsum non culpa sequi! Quidem cumque aut at voluptatem! Fuga iste alias molestias corporis autem consequuntur consequatur rem laboriosam obcaecati, sapiente dignissimos nam hic. Eligendi autem voluptatibus rerum, aperiam at maiores, reiciendis rem fuga vero quo mollitia perferendis magni ipsam deserunt dolorum omnis sit temporibus aliquid nobis et iste aut quasi atque. Doloremque similique laboriosam error, soluta commodi corporis voluptate qui voluptatum sint ipsum labore cupiditate, illum reprehenderit ab dicta fugit sunt? Quasi ratione nihil facilis ipsum minima doloremque velit dolores nostrum natus nisi! Deserunt autem dicta vitae quo necessitatibus. Et, ipsam at modi exercitationem nam fuga similique dicta sed alias vitae nemo in sapiente. Officia, earum delectus mollitia similique totam quos quo est non eligendi libero laborum sint unde et sed!</p>
	</div>
</article>

<br>

<h3 style="background-color: red;color:white;padding:20px">ANCLA</h3>
<br>

<a href="" class="ancla--element" data-ancla="bloqueejemplo" data-offset="header">Ancla element</a>
<br><br><br>

<div id="bloqueejemplo" style="background-color: yellow;padding:40px 0px">
	Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos, officiis maxime. Deleniti eum hic nostrum voluptatibus sit, aperiam doloribus vero dolorum dicta delectus. Omnis atque voluptatum praesentium facere voluptate minima, pariatur ab aspernatur soluta cupiditate non mollitia quae obcaecati iure dolore? Distinctio quam maiores laboriosam veniam temporibus eveniet velit doloremque aut quidem enim in doloribus molestias ea obcaecati earum libero quos neque debitis accusamus itaque, culpa ab dolores saepe sapiente. Soluta minus, modi temporibus nobis fuga neque, dicta eius quibusdam, aut quam iste facilis animi numquam culpa ut aliquam quisquam necessitatibus dolores placeat odio quaerat dolore fugiat! Saepe, sint animi.
</div>


<br>
<div>
	<ul>
		<li>
			<a href="" class="ancla--elements" data-ancla="uno" data-offset="header">Ancla Uno</a>
		</li>
		<li>
			<a href="" class="ancla--elements" data-ancla="dos" data-offset="header">Ancla Dos</a>
		</li>
		<li>
			<a href="" class="ancla--elements" data-ancla="tres" data-offset="header">Ancla Tres</a>
		</li>
	</ul>
</div>

<div id="uno" style="background-color: red;color: blanchedalmond;">
	Uno Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, beatae similique. Accusamus reprehenderit non rerum porro molestiae corporis, voluptatibus consequuntur perspiciatis asperiores, soluta obcaecati quia eaque a neque voluptate vitae molestias, error totam ducimus! Sunt cum nisi vitae et beatae!
	Lorem ipsum dolor sit amet consectetur adipisicing elit. Adipisci illum cumque cupiditate necessitatibus provident reprehenderit dolor possimus similique asperiores ipsam? In officiis nobis ab maxime mollitia possimus! Nobis cumque magni totam at ipsum explicabo aliquid, magnam obcaecati quam laboriosam, reiciendis soluta laborum voluptatibus quod enim dolorum! Voluptatum enim reprehenderit commodi eum! Maxime reiciendis doloribus voluptate eum. Sed sapiente vero veniam, aspernatur sequi, dolorum, eveniet itaque quisquam perspiciatis autem nemo inventore voluptas illo asperiores adipisci eius repellat. Nostrum ipsam sit laborum magni autem repellendus minima praesentium recusandae ad minus excepturi totam perferendis dolore voluptatibus voluptas, iure, enim aliquid corrupti fugiat error.
	Lorem ipsum dolor sit amet consectetur adipisicing elit. Nostrum maiores in aliquam eius dolorem expedita, ut a saepe laborum eos obcaecati ipsam, dignissimos illum nesciunt omnis atque? Beatae consectetur quis quaerat accusantium itaque nostrum doloribus minima quisquam, exercitationem doloremque eos inventore voluptate, rerum aspernatur maxime vitae modi officiis recusandae voluptatum. Corporis vero magni facilis incidunt tempore amet quisquam harum. Harum numquam, blanditiis quidem beatae accusantium magnam. Nihil nam cum at ad accusantium veniam quaerat culpa odio repudiandae, voluptas tenetur necessitatibus, voluptatibus placeat quisquam iusto harum perferendis impedit quae recusandae tempore quidem officia, quia rem quo. Nihil cumque obcaecati dolorem minus. Debitis perferendis repudiandae libero natus magni illo, animi nulla repellat fugiat blanditiis deserunt sint reiciendis facilis? Dolorum recusandae rem temporibus nesciunt officia eius libero rerum suscipit labore ipsa similique earum quas aut laudantium eligendi quod tempore doloremque aspernatur, esse vel quisquam. Molestias, nihil officiis. Odio natus, consequuntur amet incidunt assumenda maxime tempore aliquam. Minus in laudantium obcaecati vero, natus ipsum cum soluta nemo recusandae dolorem sequi atque impedit aliquam illo incidunt et quidem? Cum, voluptas illo. Natus obcaecati reprehenderit cumque nisi tempora est temporibus enim quae voluptas quaerat, quidem nobis culpa tenetur recusandae iure tempore amet labore fuga distinctio! Obcaecati in facilis omnis iusto a corrupti, esse sint, sequi nisi dicta itaque impedit velit sed autem placeat numquam culpa sapiente nostrum nemo rem voluptatem, ipsum consectetur officia? Nam cum expedita molestiae laborum repellat veritatis architecto, voluptas consequuntur atque optio minima nemo a non ea maxime earum et voluptatum ducimus deserunt nisi. Necessitatibus quia quasi cupiditate? Vel natus nobis vitae sit reprehenderit facere repellendus iure, saepe veritatis mollitia suscipit sapiente accusamus cupiditate quo nisi praesentium illum voluptas odit totam quasi, ipsa id, exercitationem sunt quos? Recusandae culpa accusantium sunt id. Ea cumque, consectetur provident optio sint minus ipsum? Eius, quasi. Ducimus eveniet, eos accusantium nemo vero quae deleniti cum soluta harum dolorum cumque minus placeat quod aperiam tempora temporibus ullam expedita saepe animi dolorem id ex atque exercitationem culpa! Libero maxime aspernatur pariatur a corporis consequuntur asperiores, eaque dolorum officiis, delectus cupiditate exercitationem, et incidunt deleniti molestiae facere! Placeat, atque fugit!
</div>

<div id="dos" style="background-color: blue;color: blanchedalmond;">
	Dos Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, beatae similique. Accusamus reprehenderit non rerum porro molestiae corporis, voluptatibus consequuntur perspiciatis asperiores, soluta obcaecati quia eaque a neque voluptate vitae molestias, error totam ducimus! Sunt cum nisi vitae et beatae!
	Lorem ipsum, dolor sit amet consectetur adipisicing elit. Placeat odio, hic aliquam impedit necessitatibus nostrum laboriosam ea esse! Impedit quibusdam beatae doloremque corporis voluptas commodi harum explicabo nam et ipsa, dicta cumque veniam, maxime eius. Consectetur, odio exercitationem. Reprehenderit sed autem iste officia voluptatum! Suscipit deserunt asperiores dolores aut, odio optio consequatur sequi sed eveniet exercitationem. Harum qui autem nam maiores rerum, dignissimos quas dolores animi! At, sit! Nesciunt dolore debitis eligendi, sapiente exercitationem et eos ut nam tempora consequatur excepturi quisquam! Laboriosam nesciunt eligendi dolor alias laudantium nihil maiores quis rem maxime aliquam, aliquid officiis, quaerat cupiditate voluptatibus dicta. Iste incidunt atque praesentium itaque soluta sed laboriosam, culpa dolore perferendis. Libero placeat odit reprehenderit voluptate sequi iusto fuga non fugiat ut voluptatem eaque nemo similique ullam molestiae, rem veniam deleniti minus! Neque culpa sequi totam voluptatem reiciendis tempora nostrum aliquid maiores magni, repellat autem ipsam consequuntur voluptates eius dolores beatae asperiores quasi distinctio aspernatur, doloribus laboriosam? Est accusantium asperiores dignissimos libero omnis non odio rem vero exercitationem, dolores voluptate. Doloremque saepe quis pariatur excepturi earum odit, distinctio ut expedita beatae labore ea dignissimos. Perferendis voluptatibus facilis facere tempore reprehenderit consectetur nulla quia asperiores. Nisi nesciunt sunt sed similique provident facilis fuga inventore in debitis, unde est sapiente temporibus hic eum perferendis harum tempora maiores, exercitationem delectus animi amet! Quae quia, nulla fugiat animi mollitia eum. Quia aperiam dolores veritatis dolore. Sapiente at qui provident! Suscipit magni molestiae autem impedit sequi, laborum facere laudantium consequuntur id vitae quo explicabo. Quasi dolore eos nostrum nesciunt unde assumenda voluptates dolores corrupti et non vitae voluptas veniam delectus consequatur, aliquid commodi odio ipsum mollitia laboriosam dolorem quod deleniti totam saepe eveniet. Provident earum rerum aspernatur ea corporis possimus, eum vel a voluptatem architecto. Libero non temporibus mollitia sed voluptatem ipsam ea, minima ut, reiciendis neque est itaque beatae nobis. Ex consequatur dolorum possimus dolorem commodi, ea praesentium optio, impedit pariatur nobis porro delectus laudantium. Ipsam iure, ratione cum similique mollitia eius. Eos, perspiciatis ducimus? Magnam corporis, praesentium quisquam voluptatibus quam voluptates tempora dolorum distinctio totam sunt incidunt impedit, numquam minima id asperiores dolore modi ducimus! Eius debitis soluta possimus ducimus modi alias natus omnis assumenda, et iste quis libero explicabo impedit labore iusto laborum quod cupiditate inventore dolorem dolores! Quasi, earum optio, libero tenetur sunt eveniet voluptatem similique ducimus repellendus, quas accusamus neque qui! Dolor vitae ullam consequuntur explicabo veritatis minima voluptatibus inventore?
</div>

<div id="tres" style="background-color: brown;color: blanchedalmond;">
	Tres Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint, beatae similique. Accusamus reprehenderit non rerum porro molestiae corporis, voluptatibus consequuntur perspiciatis asperiores, soluta obcaecati quia eaque a neque voluptate vitae molestias, error totam ducimus! Sunt cum nisi vitae et beatae!
	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsum sit quasi similique soluta eos velit ea aliquam dolore ipsam unde doloremque eaque, accusantium quibusdam in iure aspernatur? Itaque laboriosam sit quibusdam iste voluptatibus quas illo architecto nulla modi officia vitae ea sequi dignissimos consequuntur porro adipisci temporibus, commodi nam voluptatem facere? Soluta perspiciatis voluptates expedita vitae quod tempora at cumque. Possimus eligendi libero architecto animi, non ad temporibus accusantium excepturi praesentium eum. Laboriosam qui reiciendis dolorem vel veritatis nesciunt in labore quisquam quia necessitatibus corrupti non sed error amet eos, eum facere et fuga autem id beatae quibusdam. Exercitationem voluptates odio in enim beatae odit consequuntur ab commodi incidunt aliquid esse ullam voluptatem debitis ad quae officiis, temporibus illum nulla reiciendis porro. Ipsam dolore facere ad delectus dolorem praesentium ex at magnam eum consequatur, reprehenderit voluptate tenetur pariatur commodi exercitationem, eaque vero aspernatur obcaecati quis saepe dignissimos similique ullam repellendus maiores. Sit, repellat dolores est optio fugiat quo aliquam id, tenetur reprehenderit eligendi tempora quis, officiis labore inventore. Cupiditate dolorum velit mollitia inventore. Delectus, aperiam iste iure sequi inventore harum, cupiditate officiis ullam nisi atque corrupti necessitatibus nobis, eum molestias autem sint non. Cumque laboriosam corporis quas voluptate cum minima numquam quasi et itaque aliquam est adipisci voluptatum obcaecati, molestias magni maiores veritatis dolore fuga aliquid esse! Sunt veritatis ipsa, unde cumque optio ea amet quibusdam. Adipisci corrupti ipsam voluptate at. Possimus autem iste pariatur hic ipsum nostrum nulla illo debitis tenetur, beatae sunt numquam quidem aliquam quos quas consectetur perferendis! Mollitia est placeat veniam, harum temporibus alias consequuntur, quasi quisquam, autem delectus sit! Quisquam quae distinctio adipisci? Doloribus cum maxime adipisci necessitatibus assumenda laboriosam, voluptatibus amet praesentium vero accusantium, aliquid quibusdam corporis culpa dolore vitae aperiam maiores pariatur aliquam dolorum, veniam sed dolor ea? Expedita suscipit debitis quod magni culpa unde quidem magnam vel. Nobis, deserunt ad facilis sit laudantium mollitia, qui consequuntur placeat aliquam dignissimos sapiente, expedita minus perferendis eligendi. Non, quas maiores. Quasi quia voluptates hic molestiae cupiditate aliquid quibusdam enim! Molestiae, dicta vel hic odio voluptatem quaerat corrupti excepturi nemo voluptate ipsum neque sapiente maxime ducimus harum, minima eum iure, dolor enim reiciendis molestias cum rerum iste quasi? Eos odio dicta dolore dolor, possimus numquam non a labore omnis eaque amet adipisci corporis. Odit, quasi quibusdam adipisci repellendus ipsum omnis mollitia doloribus cumque blanditiis totam, quos error fuga odio dicta earum, nesciunt eum excepturi! Soluta mollitia ducimus deserunt libero ut consequatur, commodi dolor! Facilis, nobis provident rem laborum corporis ut sapiente amet ullam aliquam suscipit exercitationem quas aut, velit impedit minima assumenda ea sequi. Quam rem iure eum adipisci explicabo debitis veniam, ipsa eaque fuga corrupti possimus! Maiores nostrum commodi iste! Odit mollitia, optio ex consequatur ea labore fuga? Animi et eum dicta porro doloremque eveniet fugit assumenda provident in nam exercitationem suscipit deleniti, id tempora deserunt totam sapiente voluptatum asperiores maiores natus quisquam placeat cumque delectus? Nisi, alias obcaecati deleniti placeat quas enim distinctio! Quam, sint. Ad explicabo eveniet aspernatur ducimus est, pariatur ipsum aliquam harum! Perferendis ipsum facilis temporibus rerum debitis reprehenderit id sit quibusdam illo, natus modi vitae porro, fugiat mollitia harum doloremque quam asperiores magni earum minus deleniti? Doloremque, voluptatibus atque accusamus veniam ratione omnis alias obcaecati explicabo optio, minus laudantium necessitatibus deserunt pariatur ut sed officiis, quia corrupti repudiandae. Est facilis ducimus error, repellendus nisi nemo sunt. Architecto, consectetur sit aliquam eius ab animi natus ad ipsam ea alias. Nesciunt quia est nemo neque fugiat consequatur nam autem maxime porro. Et pariatur amet perferendis veniam odit, accusantium fuga deserunt repellendus ratione obcaecati tempora deleniti ut illum, eligendi est hic sint quos?
</div>


<br>
<h3 style="background-color: red;color:white;padding:20px">LINK PARENT</h3>
<br>

<div class="link--parent" style="background-color: pink">
	<div>
		<h3>Titulo</h3>
		<p>Texto</p>
		<a href="https://www.google.com/" target="_blank">Ir al link</a>
	</div>
</div>
<br>
<div class="link--parent" style="background-color: pink">
	<div>
		<h3>Titulo 2</h3>
		<p>Texto 2</p>
		<a href="https://www.wwe.com/">Ir al link 2</a>
	</div>
</div>

<br>
<h3 style="background: red; color:white;padding: 20px 0">MODALES</h3>
<br>

<a href="" class="modal-pitcher--terms">Pop up terminos ejemplo</a>
<br>	
<a href="" id="modal-pitcher--image">Pop up Imagen</a>
<br>
<a href="" class="modal-pitcher--images" data-imagen="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png">Pop up Images</a>
<br>
<a href="" class="modal-pitcher---video" data-video="https://www.youtube.com/watch?v=u2Ms34GE14U">Pop up Video</a>
<br>


<div class="general-modal general-modal-video" id="modal--video">
	<div class="general-modal-overlay modal-overlay--close"></div>
	<div class="general-modal-popup">
		<span class="general-modal-close icon-close modal--close"></span>
		<div class="general-modal-popupScroll">
		<iframe class="general-modal-video-url modal-video--url" width="560" height="315" src="" allowfullscreen ></iframe>
		</div>
	</div>
</div>

<div class="general-modal general-modal-terms" id="modal--terms">
	<div class="general-modal-overlay modal-overlay--close"></div>
	<div class="general-modal-popup">
		<span class="general-modal-close icon-close modal--close"></span>
		<div class="general-modal-popupScroll">
			<div class="general-modal-popupTitle">
				<h3 class="--uppercase colorWhite">Terminos y condiciones</h3>
			</div>
			<div class="general-modal-popupContent">
				<p>Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
	</div>
</div>

<div class="general-modal general-modal-image" id="modal--image">
	<div class="general-modal-overlay modal-overlay--close"></div>
	<div class="general-modal-popup">
		<span class="general-modal-close icon-close modal--close"></span>
		<figure class="general-modal-popup-image">
			<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png" alt="">
		</figure>
	</div>
</div>

<div class="general-modal general-modal-images" id="modal--images">
	<div class="general-modal-overlay modal-overlay--close"></div>
	<div class="general-modal-popup">
		<span class="general-modal-close icon-close modal--close"></span>
		<figure class="general-modal-popup-images">
			<img src="" class="general-modal-images-url modal-images--url" alt="">
		</figure>
	</div>
</div>

<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">LIGHTGALLERY</h3>
<div id="lightgallery">
	<a href="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png">
		<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png">
	</a>
	<a href="<?php echo get_template_directory_uri(); ?>/public/assets/images/img2.png">
		<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/img2.png">
	</a>
	<a href="https://www.youtube.com/watch?v=sZH7LDFKLmg">
		<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png">
	</a>
</div>

<br>

<h3 style="background: red; color:white;padding: 20px 0">MAIN SLIDER</h3>
<br>

<section class="main-slider main--slider --list-none">
	<div class="general-arrows main-slider-arrows">
		<div class="general-arrow main-slider-arrow--prev"><</div>
		<div class="general-arrow main-slider-arrow--next">></div>
	</div>
	<ul class="main-slider-list swiper-wrapper">
		<li class="main-slider-item swiper-slide">
			<figure class="main-slider-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png');"></figure>
			<div class="main-slider-container main-wrapper-container --default">
				<div class="main-slider-info">
					<div class="main-slider-title">
						<h3 class="main-slider-title-text">Titulo slider</h3>
					</div>
					<div class="main-slider-button">
						<a class="general-button --black" href="#">
							<span class="general-button-text --uppercase">Descubre nuestros productos</span>
						</a>
					</div>
				</div>
			</div>
		</li>
		<li class="main-slider-item swiper-slide">
			<figure class="main-slider-image" style="background-image: url('<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png');"></figure>
			<div class="main-slider-container main-wrapper-container --default">
				<div class="main-slider-info">
					<div class="main-slider-title">
						<h3 class="main-slider-title-text">Titulo slider 2</h3>
					</div>
					<div class="main-slider-button">
						<a class="general-button --black" href="#">
							<span class="general-button-text --uppercase">Descubre nuestros productos</span>
						</a>
					</div>
				</div>
			</div>
		</li>
	</ul>
	<div class="main-slider--pagination"></div>
</section>

<br>
<div class="block-slider">
	<div class="block-slider-container main-wrapper-container --default">
		<div class="block--slider block-slider-in --list-none">
			<div class="general-arrows block-slider-arrows">
				<div class="general-arrow block-slider--prev"><</div>
				<div class="general-arrow block-slider--next">></div>
			</div>
			<ul class="swiper-wrapper">
				<li class="swiper-slide">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/marker2.png" alt="">
					</figure>
				</li>
				<li class="swiper-slide">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/marker2.png" alt="">
					</figure>
				</li>
				<li class="swiper-slide">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/marker2.png" alt="">
					</figure>
				</li>
				<li class="swiper-slide">
					<figure>
						<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/marker2.png" alt="">
					</figure>
				</li>
			</ul>
			<div class="block-slider--pagination"></div>
		</div>
	</div>
</div>


	

<br>
<h3 style="background: red; color:white;padding: 20px 0">ANIMATION</h3>
<br>

<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">WAYPOINT</h3>
<br>
<div id="contenidowaypoint">
	<p>Lorem ipsum dolor sit amet consectetur adipisicing, elit. Ab aspernatur incidunt veniam laborum maxime consequuntur nobis qui vitae. Nesciunt quae animi rem tenetur in pariatur corrupti quidem doloribus obcaecati dolores totam, culpa ad neque, quod. Soluta, similique. Libero voluptate non neque est sint nulla ratione porro ipsa consectetur eaque ea provident animi dolorem, iste velit, similique, corporis quis laudantium molestias in autem laborum dignissimos alias soluta? Veniam a neque quis cum, illo officia delectus, qui nihil accusamus quod, consequuntur porro? Nulla maxime ducimus sequi nemo quaerat at fuga fugit, dignissimos dolorum magni facilis velit minima esse dolores incidunt hic quod aut ex! Earum ducimus consequatur impedit modi cum in facere quisquam laboriosam doloribus animi, aperiam maiores alias eveniet eum minus magnam qui nulla eaque voluptate corrupti. Natus, tenetur, aliquam. Soluta libero velit quasi, recusandae ducimus facere aut beatae voluptatum rerum repellat quisquam doloribus odio consectetur magnam iste, alias, aliquam cumque quas. A ex id atque vero cumque, quis aliquam repudiandae deserunt veniam, quisquam, ipsam eius consequuntur assumenda molestias sed qui, nam! Maiores molestiae aliquam tenetur nemo pariatur, autem unde at nulla odit saepe, aspernatur laboriosam in incidunt, vero quod accusantium porro non, assumenda ratione. Enim nihil commodi at laborum quo molestias cumque est voluptatum ipsum laboriosam, vitae tempore maiores doloribus nisi officiis quos perspiciatis et neque ullam! Ea quia, consequuntur mollitia, praesentium consectetur, nemo iusto omnis, esse dolore odit necessitatibus voluptatem ducimus. Consectetur deleniti, reprehenderit rerum! Dolor, assumenda. Eaque illo minus harum quo atque, expedita asperiores unde voluptatem, velit iure inventore sunt ratione architecto voluptas nemo, mollitia facilis numquam. Quod consequatur nisi, repellat rem accusamus ab a, optio culpa quas nobis magnam eum dicta repudiandae illo amet odio, quasi aliquid voluptas suscipit, cum voluptate cupiditate enim architecto exercitationem? Illo saepe corrupti optio, voluptatum atque praesentium provident dolore, quia expedita impedit quod exercitationem at a consectetur quibusdam illum totam beatae fuga temporibus consequuntur id aperiam, asperiores sit. Quasi libero dicta beatae nisi odio a autem voluptates blanditiis natus explicabo ipsam, voluptatem sequi numquam provident quaerat, rem tenetur, vitae deleniti aspernatur. Sapiente nobis magni voluptatum eum nostrum, ducimus ex dolore debitis, natus, provident dolorum libero placeat dignissimos odio aut omnis veniam, ipsam voluptatibus incidunt perferendis odit. Necessitatibus maiores, cum debitis porro accusamus velit praesentium ut sit quis corporis magnam ab aut at neque nemo deleniti illo similique temporibus blanditiis quo! Quaerat rerum ratione iure soluta iusto dolore reiciendis modi debitis qui voluptas.</p>
</div>

<br>
<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">AOS</h3>
<br>
<div data-aos="fade-down" data-aos-easing="linear" data-aos-duration="1500">
	<figure>
		<img src="<?php echo get_template_directory_uri(); ?>/public/assets/images/img1.png" alt="">
	</figure>
</div>

<br>
<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">KEYFRAMES</h3>
<br>

<div class="keyframes-example keyframes-example-simple">Normal</div>

<div class="keyframes-example keyframes-example-infinite">Infinite</div>

<div class="keyframes-example keyframes-example-alternate">Alternate</div>

<div class="keyframes-example keyframes-example-reverse">Reverse</div>

<div class="keyframes-example keyframes-example-alternate-backwards">Backwards</div>

<div class="keyframes-example keyframes-example-alternate-forwards">Forwards</div>

<br><br>	

<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">SPRITE</h3>

<!-- keyframe sprite example -->
<div class="arrow-sprite"></div>

<br>
<h3 style="background: red; color:white;padding: 10px 0; font-size:20px">SVG</h3>
<svg version="1.1" id="svg-animation" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"  width="340px" height="333px"
 viewBox="0 0 213.7 312.5" style="enable-background:new 0 0 213.7 312.5;" xml:space="preserve">
<style type="text/css">
	.st0{fill:none;stroke:#000;stroke-width:2;stroke-miterlimit:10;}
</style>
<polygon class="st0" points="103.6,2.7 103.3,2.7 103.1,2.9 103.1,3.2 103,3.4 102.8,3.7 102.5,3.9 102.3,4 102.1,4.2 101.7,4.5 
	101.5,4.6 101.3,4.6 101,4.7 100.5,4.6 100.3,4.6 99.9,4.9 99.5,4.8 98.3,4.2 98.1,4.2 97.8,4.2 97.5,4.2 97.3,4.1 97,4 96.7,3.9 
	96.4,4 96.4,4.3 96.4,4.7 96.6,5 96.8,5.2 96.9,5.2 97.3,5.2 97.4,5.2 97.6,5.3 98,5.6 98.2,5.7 98.5,5.9 98.8,6 99,6.3 99.5,8.1 
	99.8,8.8 100.3,9.5 100.6,9.8 100.8,9.9 100.9,9.9 101.1,9.9 101.2,9.9 101.3,10 102,10.5 102,10.6 102.1,10.8 102.2,10.9 
	102.3,10.9 102.4,10.8 102.5,10.9 102.7,11.1 102.7,11.4 102.7,12.1 102.7,12.2 102.7,12.4 102.8,12.5 102.7,12.6 102.6,12.8 
	102.4,12.9 102.2,13 102.1,13.2 102.1,13.4 102.2,13.7 102.2,13.8 102.2,14 102.1,14.3 102.1,14.5 102.8,17 102.8,17.1 102.8,17.4 
	102.8,17.6 102.9,17.8 103.1,17.9 103.2,18.1 103.2,18.2 103.1,18.2 102.3,18.2 101.6,18.3 101.2,18.3 101,18.1 101,18 100.7,17.7 
	100.3,17.3 100.2,17.4 100,18.2 99.5,20.2 99,22.1 98.5,24.1 98,26 97.7,26.9 97.5,27.5 97.1,28 96.2,28.8 95.6,29.6 94.7,30.5 
	93.9,31.5 93.1,32.5 92.3,33.4 91.4,34.4 90.6,35.3 89.8,36.3 89,37.3 88,38 87,38.8 86,39.5 85,40.3 84,41 83.1,41.8 82.1,42.5 
	81.1,43.3 80.2,44 79.2,44.6 77.7,45.1 75.6,45.8 73.5,46.6 71.4,47.3 69.4,48 67.3,48.7 65.2,49.5 63.1,50.2 61.1,50.9 60,51.3 
	59.7,51.5 58.5,52.5 56.8,54.8 56,55.4 55.7,55.7 55.2,56.7 55,56.9 54.4,57.4 54.2,57.6 54.2,58 54.4,58.3 54.7,58.5 54.9,58.7 
	54.9,59.2 54.8,59.5 54.5,59.6 54.2,59.7 54,59.9 53.8,60 53.6,59.7 53.4,58.6 53.2,58.4 53,58.2 52.3,58 52,58 51.7,58 51.5,58.4 
	51.5,58.5 51.6,58.8 51.6,59 51.5,59.7 51.3,60.4 51,61.1 50.8,61.4 50.8,61.7 50.8,62.3 50.9,62.7 50.9,62.8 50.7,62.9 50.5,63 
	50.5,63 50.4,63.1 50.4,63.3 50.7,64.4 50.6,64.7 50.2,65.1 50,65.1 49.8,65.2 49.7,65.3 49.6,65.6 49.4,66 49.3,67.2 49.3,67.3 
	49.2,67.4 49,67.5 48.8,67.6 48.6,67.6 48.4,67.6 48.2,67.8 48.1,68.1 48.1,69 48,69.8 47,71.9 46.8,72.6 46.7,72.9 46.4,73.2 
	46.2,73.5 46.2,74.1 46.4,74.8 46.6,75.1 47,75.3 46.9,75.6 46.7,75.9 46.4,76.3 46.4,76.6 46.4,76.9 46.4,77.2 46.2,77.5 
	45.6,77.9 44.1,78.5 43.4,78.9 42.7,79.6 42.4,80 42.2,80.5 42.2,80.9 42.6,81.7 42.6,82.1 42.5,82.4 42.1,82.5 41.6,82.5 
	41.3,82.6 41.1,82.8 40.9,83.6 40.8,84 40.4,84.4 39.9,84.8 39.6,84.5 39.4,84.4 39.3,84.3 39.1,84.3 38.8,84.4 38.7,84.4 
	38.4,84.3 37.8,84.1 37.5,84.1 36.4,84.1 36,84 35.8,83.7 35.6,83.4 35.4,83.1 35.2,83 34.9,82.8 34.7,82.7 34.7,82.6 34.6,82.3 
	34.5,82.1 34.2,81.9 33.8,81.7 33.6,81.5 33.4,81.2 33.4,80.8 33,80 32.8,79 32.3,78.3 32.3,78 32.7,77.3 32.7,77.1 32.6,76.9 
	32.3,76.7 31.9,76.7 31.8,76.7 31.5,76.5 31.4,76.4 30.6,75.6 30.1,75.4 29.5,75.4 29,75.8 27.9,76.1 27.2,76 26.8,75.6 26.5,75.1 
	26.1,74.7 25.6,74.6 25.2,74.6 24.8,74.5 24.3,74.3 24,74.1 23.5,73.5 23.2,73.2 22.9,73.1 22.6,73.1 22.3,73 22.2,72.8 22.1,72.8 
	21.5,72.9 21.3,73 21.1,73 21,73.2 20.8,73.4 20.7,74 20.5,74.2 20.3,74.5 19,75.5 18.3,75.8 18.2,76 18,76 17.8,76 17.5,75.9 
	16.7,75.5 16.5,75.3 16.4,74.9 16.4,74.7 18.6,71.8 18.8,71.4 18,71.5 17.3,71.7 16.7,71.6 16.4,70.9 16.4,70.8 16.5,70.4 
	16.5,70.3 16.4,70.1 16.1,69.7 16,69.5 16,69.2 16.2,68.8 16.4,68.4 16.6,68.1 16.8,67.9 17.1,67.8 17.4,67.8 17.8,67.8 18.1,67.9 
	18.8,68.3 19.1,68.4 19.5,68.2 19.7,67.9 20,67.5 20.2,67.2 21.5,66.6 21.8,66.3 21.8,66.1 21.7,66 21.5,65.9 21.4,65.8 21.3,65.6 
	21.3,65.3 21.3,65.2 21.2,64.8 20.8,64.3 20.8,64 20.8,63.9 20.9,63.7 20.9,63.6 20.9,63.5 20.8,63.1 20.8,63 20.8,62.9 20.8,62.7 
	20.9,62.4 20.9,62.2 20.9,62 20.8,61.7 20.8,61.5 20.8,61.4 20.6,61.3 20.5,61.3 20.4,61.2 20.4,61 20.5,60.6 20.5,60.3 20.5,60.1 
	20.5,60 20.4,59.8 20.1,59.7 20,59.6 20,59.3 20.1,58.9 20.1,58.7 19.9,58.5 19.2,58.3 19,58.2 18.9,58.1 18.9,58.3 18.8,58.5 
	18.6,58.8 18.5,59 18.4,59.3 18.2,59.5 17.8,59.7 17.5,59.7 16.4,59.7 16.1,59.8 15.9,59.9 15.8,59.9 15.7,60 15.6,60.3 14.9,61.3 
	14.4,61.8 11.8,63.3 11.2,63.8 10.7,64.4 10.4,65 10.3,65.3 10.3,65.7 10.2,66 9.9,66.3 9.3,66.6 8.6,67.1 8.1,67.7 7.2,69 7,69.5 
	6.8,69.7 6.5,69.8 6.2,69.9 5.9,70.2 5.7,70.7 5.3,71.1 3.8,72.1 3.6,72.3 3.4,72.7 3.2,73 3.2,73.4 3.4,74.3 3.4,74.7 3.2,75.2 
	3,75.4 2.9,75.5 2.8,75.6 2.6,75.8 2.6,76 2.7,76.3 2.8,76.6 2.9,76.9 2.9,77.2 2.8,78.1 2.6,78.4 2.6,78.5 2.5,78.9 2.4,79 2.3,79 
	2.2,79.2 2.2,79.3 2.1,79.5 2.3,79.8 2.8,80.2 3,80.5 4.4,81.9 4.5,82.2 4.6,82.6 4.9,82.9 5.5,83.4 6.1,83.9 6.5,84.6 6.5,85.3 
	5.9,85.7 5.2,85.7 5.1,85.9 5.1,86.3 5.1,86.5 4.9,86.8 4.9,87 4.9,87.1 4.9,87.2 5,87.3 4.9,87.4 4.7,87.6 4.6,87.7 4.7,88.1 
	5.1,88.6 5.5,89.1 5.9,89.4 6.9,89.9 7.1,90.3 8.5,91.8 8.8,92.2 9.7,94.1 10,95.5 10.1,96.9 9.6,98.1 9,98.7 8.3,98.9 7.6,98.8 
	6.9,98.3 6.7,98 6.5,97.9 6.3,97.9 5.9,98.6 5.8,98.7 5.5,98.7 5.2,99.3 5,99.8 5,100.5 5.1,101.2 5.4,101.9 5.9,102.5 6.4,103 
	6.9,103.4 7.7,103.7 8.1,103.8 8.2,103.9 8.8,104.3 9.3,104.5 9.9,105.2 10.5,105.4 10.8,105.6 11.1,106.1 11.3,106.2 12.5,106.7 
	14.1,107.6 16.8,108.8 19.7,110.4 22.3,111.6 22.5,111.8 24.4,113.5 24.5,113.6 24.6,113.7 24.9,114.1 24.9,114.1 25,114.2 
	25.1,114.8 25.3,115.3 25.6,115.8 26.4,116.8 27.5,117.5 27.7,117.7 27.8,118 29,119.4 29.1,119.7 29.2,120.1 29.3,120.5 
	29.4,120.8 29.6,121.2 30.3,121.8 30.7,122.3 31,123 31.2,123.8 31.3,124.5 31.3,124.6 31.2,124.9 31.2,125 31.2,125.2 31.4,125.5 
	31.5,125.8 33.3,128.1 33.6,128.8 33.6,129 33.6,129.2 33.5,129.3 33.5,129.5 33.5,129.7 33.5,129.8 33.6,130 35.2,132.4 
	36.1,133.4 38,134.8 38.2,135.1 38.8,135.9 39.1,136 40.7,137.6 41,138 41.3,138.5 41.4,138.9 42.2,140.5 42.4,140.9 42.2,141.3 
	41.8,141.4 41.8,141.5 42.2,141.9 42.4,142.1 42.9,142.3 43.3,142.6 44,143.2 44.5,143.8 44.9,144.5 45.1,145.2 45.1,145.9 
	44.8,146.6 44.7,147 44.8,147.3 45.7,148.3 45.9,148.8 46.2,149.1 46.2,149.2 46.3,149.4 46.5,149.6 46.6,149.9 46.6,150.3 
	46.5,150.5 46.3,150.6 46.2,150.7 46.2,150.9 46.6,150.9 46.7,151.1 46.8,151.7 46.9,152.1 47.1,152.2 47.3,152.3 47.6,152.4 
	47.8,152.6 48,152.8 48.1,153 48,153.3 48,153.5 47.8,153.6 47.7,153.7 47.4,153.7 47.2,153.8 47.1,153.9 47.2,153.9 47.4,154 
	47.5,154.2 47.7,154.5 47.7,154.8 47.8,154.9 47.9,154.7 48.1,154.4 48.2,154.1 48.3,153.9 48.6,153.8 48.9,153.9 49.1,154.2 
	49.1,154.7 49.1,154.8 49,155 48.7,155.2 48.6,155.4 48.8,155.5 48.9,155.8 49,156 49,156.1 49.1,156.1 49.5,156.5 49.7,156.5 
	49.9,156.4 50.1,156.5 50.2,156.7 50.2,157.4 50.2,157.6 50.4,157.9 50.8,158.2 50.9,158.4 50.6,158.7 50.8,159 50.9,159.4 
	51,160.5 51.3,161.5 51.7,162.1 53.2,164 53.4,164.4 53.4,164.7 53.2,165 53.1,165.4 53.2,165.6 53.5,166.2 53.6,166.5 53.6,166.6 
	53.5,166.7 53.5,166.8 53.5,166.9 53.5,166.9 53.6,167 53.6,167 53.7,167.1 53.8,167.2 53.9,167.3 54,167.5 54,167.7 54.1,168.1 
	54.6,168.8 54.6,169.1 54.5,169.3 54.4,169.4 54.4,169.5 54.4,169.7 54.4,169.9 54.5,170.1 54.6,170.2 55.1,170.7 55.3,171 
	55.7,171.8 55.8,171.9 56.2,172.4 56.2,172.5 56.3,172.9 56.3,173.1 57,173.7 57.2,174 57.2,174.1 57.3,174.5 57.3,174.6 
	57.7,175.2 57.8,175.4 57.8,175.8 58,176 58.5,176.4 59.8,178.8 60,179 60.3,179.3 60.5,179.5 60.6,179.7 60.7,180 60.8,180.2 
	60.9,180 61.1,180.3 61.4,181.2 61.9,181.7 62.1,182 62.1,182.2 62.5,182.9 62.7,183.3 62.6,183.6 62.9,183.9 63,184 62.9,184.2 
	62.8,184.5 62.7,184.7 62.9,184.9 63.1,185 63.3,185.3 63.2,185.6 63.4,185.8 63.4,186.5 63.7,187 63.9,187.4 63.9,187.8 
	63.8,188.1 63.6,188.2 63.3,188.2 63.1,188.3 63,188.6 63,188.9 63.2,189.2 63.5,189.6 63.9,189.9 66.5,191.3 67,191.7 67.8,192 
	68,192.2 68.2,192.5 68.4,192.7 68.6,192.7 68.7,192.8 68.8,193 69.1,193.4 69.3,193.7 69.4,193.9 69.4,194 69.3,194.2 69.3,194.3 
	69.6,194.6 69.8,194.8 70,194.9 70.3,195 70.5,195.3 70.7,195.7 70.8,196.1 71.1,196.8 71.1,197.2 70.6,197.3 70.8,197.6 
	70.9,198.4 71,198.7 71.2,199.1 71.3,199.3 71.4,199.8 71.6,200.2 71.7,201.3 71.6,201.7 71.4,202 71.2,202.2 71.1,202.5 
	71.8,202.6 72.5,202.8 73.1,203.2 73.4,203.9 73.3,204.1 73.3,204.2 73.2,204.3 73.3,204.6 73.4,204.7 73.6,205 73.7,205.1 
	73.9,205.1 74.8,205.5 76,206.4 76.9,207.2 77.1,207.7 77.4,208.4 77.4,209 77.1,209.4 77.3,209.7 77.6,209.9 77.9,210.1 78,210.2 
	78.1,210.4 78.7,211.3 79.1,211.6 79.2,211.7 79.3,211.9 79.2,212.3 79.4,212.6 80.1,214 80.4,214.4 81.5,215.3 81.7,215.5 
	81.8,215.8 81.9,216.6 82.1,218 82.4,218.6 82.4,219 82.6,219.3 84.4,221.1 85.3,222.5 85.5,222.8 85.7,222.9 86,223 86.6,224 
	87.3,225.4 87.4,226 87.5,227.3 87.2,228.7 87,229.2 86.8,229.8 86.8,230.3 86.6,230.6 86.5,231 86.3,231.7 86.1,232.4 86,232.6 
	85.9,232.5 85.7,232.4 85.5,232.2 85.5,232 85.5,231.7 85.5,231.6 85.4,231.6 85.1,231.6 85,231.6 84.9,231.6 84.6,231.8 84.3,232 
	84.1,232.6 84,232.9 84,233.1 84.2,233.4 84.4,233.5 84.6,233.6 84.9,233.6 85.1,233.6 85.2,233.5 85.3,233.4 85.4,233.3 
	85.6,233.3 85.7,233.4 85.6,233.5 85.6,233.7 85.6,233.8 85.8,235 85.8,235 85.8,235.4 85.8,235.6 85.9,235.7 85.9,235.8 
	85.8,235.9 85.9,236.1 85.8,236.3 85.7,236.5 85.5,236.6 85.5,236.7 85.7,238 85.9,238.1 86.1,238 86,237.6 86.9,237.9 87.1,238 
	87.3,238.2 87.4,238.5 87.5,238.7 87.8,238.8 88,238.9 88.2,239.2 88.4,239.6 88.4,240.1 88.5,240.2 88.6,240.3 88.5,240.4 
	88.4,240.5 87.9,240.7 88.3,241.2 88.4,241.4 88.6,241.4 89,241.5 89.1,241.5 89.4,241.8 89.7,242.2 89.9,242.4 90.4,242.8 
	90.7,243 90.8,243.4 90.6,243.7 90.5,243.9 90.6,244 90.7,244.1 90.8,244.2 91.2,244.6 91.3,244.8 91.4,245.1 91.5,245.8 
	91.6,246.2 91.9,246.4 92.6,246.8 92.7,246.8 92.8,247 92.9,247.1 93,247.3 93.1,247.5 93.3,247.5 93.5,247.6 93.6,247.7 
	93.8,247.7 93.8,247.8 93.9,248 94,248.1 94.4,248.2 95.3,248.8 95.7,249.1 95.9,249.3 96.5,249.5 97.9,250.2 98.6,250.7 
	98.7,250.9 98.7,251.4 98.7,251.5 98.9,251.7 99.5,252.1 99.6,252.3 99.7,252.6 100.5,253.7 100.6,254.1 100.8,254.4 101,254.6 
	101.9,254.7 102.2,254.9 103,255.6 103.1,255.8 103.2,256 103.2,256.2 103.1,256.3 103,256.4 102.6,256.4 103.1,256.9 103.7,257.2 
	104.2,257.5 104.1,257.9 104,258 103.8,258.1 103.7,258.2 103.7,258.3 103.8,258.4 104.1,258.5 104.2,258.6 104.3,258.9 104.6,259 
	104.9,259 105.2,259.1 105.4,259.3 105.9,259.8 106.2,260 106.3,260 106.4,260 106.6,259.9 106.9,260 107.3,260.4 110.1,261.9 
	111.2,262.3 111.5,262.6 112.2,263.1 115.3,264.3 115.4,264.4 115.5,264.5 115.7,264.9 115.8,265 115.9,265 116,265.2 116.1,265.3 
	116.1,265.7 116.2,265.8 117.3,266.4 117.5,266.6 117.8,266.7 118.6,266.6 119,266.7 119.3,267 119.6,267.2 119.8,267.4 
	120.5,267.5 120.8,267.5 122.4,268.3 122.7,268.6 122.8,268.7 122.8,268.9 122.8,269.3 122.8,269.4 122.9,269.4 123.2,269.6 
	124.5,270.5 125.6,271.4 126.1,271.7 127.3,272.2 127.8,272.5 128,272.6 128.1,272.8 128.2,273 128.3,273.2 129.3,273 130.2,273.2 
	132,274 133,274.3 134,274.7 134.4,274.8 134.6,274.9 134.7,275.1 134.9,275.8 135.1,276 135.4,275.9 135.6,276 135.8,276.2 
	136.1,276.2 136.8,276.2 137.1,276.3 137.7,276.8 138.4,277.1 138.7,277.4 141.8,278.8 143.6,280 144.2,280.3 146.8,280.6 
	147.7,281 148.4,281.1 148.6,281.2 148.9,281.4 149,281.5 149.2,281.5 149.3,281.6 149.5,281.9 149.6,282 149.8,282 149.9,282 
	150.1,282 150.5,282.3 151.4,283.4 151.6,283.7 151.6,284.1 151.6,284.4 152,284.6 152.8,284.8 153.2,285 153.4,285.3 153.5,285.4 
	154.2,285.8 154.4,286 154.5,286.2 154.4,286.6 154.5,286.8 154.7,286.8 155.7,286.9 156.1,287 156.4,287.2 157.3,287.7 
	157.7,288.1 158.5,289 159,289.4 159.6,289.7 162.4,290.4 162.5,290.4 162.7,290.6 163,290.9 163.2,291 163.6,291.1 164.2,291.2 
	164.5,291.3 164.7,291.5 165,292.1 165,292.1 165.6,292.5 166.1,293.1 166.2,293.2 166.3,293.3 166.4,293.3 166.4,293.9 
	166.7,294.6 166.7,294.9 166.9,296.7 167,297 167,297.3 167,297.8 166.7,298.1 166.6,298.3 166.6,298.5 166.7,298.4 167.2,298.3 
	167.6,298.4 167.9,298.6 168.5,299.1 169.3,299.4 169.6,299.6 170.1,300.2 170.3,300.4 170.7,300.6 171.5,301.4 171.9,301.5 
	172.8,301.8 173.2,302 173.9,302.5 174.1,302.6 174.4,302.8 174.5,303.1 174.7,303.8 175,304 175.5,304.2 175.8,304.3 176.8,305.2 
	176.9,305.3 177,305.3 177.1,305.3 177.2,305.4 177.3,305.6 177.4,305.7 178.6,306.9 179.1,307.2 179.6,307.4 180.1,307.5 
	180.5,307.6 181.4,308.7 182.4,309.4 182.7,309.7 183.4,309.3 184.2,309.3 186,309.4 186.8,309.3 187.2,309.2 188.4,308.6 
	188.8,308.4 189.3,308.4 189.6,308.3 189.9,308 190.7,307.1 191.4,306.5 191.7,306.2 192,305.7 193,303.4 193.1,303 193,302.7 
	192.9,302.4 192.5,301.8 192.4,301.5 192.4,301 192.3,300.3 192,299.7 191.8,299.1 191.9,298.4 192.4,297.8 193.1,297.8 
	193.9,297.9 194.7,297.7 195.4,297.2 197.5,295.2 197.5,295.1 197.6,293.9 197.5,293.3 197.3,292.8 197.1,292.5 196.8,292.1 
	196.1,291.6 195.8,291.5 194.9,291.4 195.2,291 195.5,290 195.7,289.6 195.7,289.6 196,289.5 196.1,289.5 197,288.7 197.5,288.4 
	198,288.2 198.4,288.1 198.9,287.9 199.2,287.5 199.3,287.2 199.2,287.1 199.1,287.1 199.1,287 199.1,286.8 199.2,286.7 
	199.9,286.3 200.1,286 200.6,285.1 202.2,283.3 202.5,282.9 202.8,282 202.9,281.8 203.2,281.6 203.8,281.5 204.1,281.4 205.1,281 
	205.3,280.7 205.6,280.4 205.8,280.1 205.4,279.5 205.3,279.2 205.3,278.7 205.3,277.7 205.3,277.3 205.5,277 205.9,276.5 
	206.5,276.2 208.3,275.5 208.7,274.9 208.5,274.4 208.1,274.2 207.3,273.8 206.6,273.1 206.2,272.8 205.8,273 205.2,272.8 
	205.1,272.8 204.9,272.9 204.6,273.1 204.4,273.2 204,273.2 203.5,273.1 203.2,272.8 202.9,272.6 202.3,271.9 201.9,270.9 
	201.2,269.2 200.5,267.4 199.8,265.6 199.1,263.9 198.9,263.3 198.9,262.8 199,262.3 200.1,260.7 200.1,260.4 200.2,260 
	200.3,259.7 200.5,259.4 200.7,259.3 201.1,259.1 201.2,259.1 201.2,258.9 201,258.4 201.1,258.1 201.4,257.8 201.7,257.5 
	202.3,257.3 202.5,256.6 202.8,256.6 203.2,256.6 203.5,256.4 203.5,256.1 203.1,255.7 202.7,255.1 202.4,254.9 201.4,254.1 
	201.2,253.9 200.2,252.4 200,252.2 199.6,251.8 199.5,251.5 199.6,251.2 199.8,250.6 199.9,250.4 199.8,249 199.8,248.7 200,248.5 
	200.3,248.3 201.3,248 201.5,247.9 201.8,247.4 201.9,245.2 202.1,244.9 202.4,244.8 202.8,244.9 203.1,244.9 203.2,244.7 
	203.2,244 203.2,243.7 203.3,243.6 203.6,243.5 203.7,243.5 204.4,242.7 204.7,242.5 205.8,241.9 206.1,241.6 206,241.2 
	205.8,240.9 205.7,240.6 205.7,239.9 205.7,239.6 205.8,239.3 206.2,239 206.7,238.9 207.9,238.7 208.2,238.4 208.1,237.8 
	207.7,236.6 207.6,236 207.5,235.8 207.3,235.5 206.4,235 206.2,234.6 206.1,234.1 206.1,233.5 206.1,232.9 205.8,232.5 
	205.6,231.8 205.5,231.6 205.6,231.3 205.7,231.1 205.7,230.9 205.5,230.7 204.6,229.9 204.3,229.5 204.5,229.1 204.7,229.1 
	205.2,229.1 205.4,229.1 205.5,228.9 205.6,228.7 205.5,228.5 205.6,228.3 205.7,228.1 206,227.7 206.2,227.5 206.3,227.1 
	206.4,226.7 206.4,226.3 206.6,223 206.3,221.6 206.3,221 206.4,219 206.2,217.1 206.2,216.3 206.3,215.9 206.8,215.5 206.9,215.1 
	207.1,214.8 207.5,214.9 207.7,214.4 208,214 208.3,213.8 209.7,213.4 209.8,213.3 210.2,212.5 210,212.3 209.5,212.2 209.3,212 
	209.4,211.8 209.5,211.5 209.7,211.3 210.2,211 210.5,210.8 210.7,210.6 210.8,210.3 210.9,210 211,209.8 211.1,209.8 210.7,208.9 
	208.9,205.8 207.2,202.8 205.5,199.7 203.8,196.7 202,193.6 200.3,190.6 198.6,187.6 196.9,184.5 196.4,183.7 196.1,183.7 
	194.1,183.9 193.5,183.8 192.9,183.4 192.6,183.3 192.2,183.2 191.5,183.3 191.2,183.3 190.9,183.2 190.2,183.1 186.2,185.2 
	185.5,185.4 184.7,185.6 183.8,185.6 183,185.5 182.2,185.1 181.8,184.7 181.1,183.8 180.6,183.4 180.3,183.5 178.9,184.7 
	178.9,183.3 178.9,181.2 178.9,179 178.9,176.9 178.9,174.8 178.9,172.6 178.9,170.5 178.9,168.4 178.9,166.3 178.9,165.3 
	179.1,164.6 179.2,164.4 179.3,164.3 179.5,164.1 179.6,164 179.7,164 179.9,164.2 180,164.1 180.1,164 180.1,163.8 180.2,163.7 
	180.3,163.5 180.5,163.2 180.5,162.9 180.4,162.5 180.2,162.3 179.7,161.9 179.5,161.6 179.4,161.3 179.3,160.8 179.1,160.5 
	179.2,160.5 179.7,160.4 179.8,160.5 180,160.5 180.1,160.5 179.9,160.1 179.9,159.9 180.1,159.7 180.3,159.6 180.3,159.6 
	180.2,159.5 180.2,159.4 180.5,159.3 180.6,159.1 180.6,158.8 180.8,158.5 180.8,158.4 180.8,158.2 180.1,158.3 179.8,158.4 
	179.4,158.5 179.1,158.8 178.5,159.5 178.2,159.8 177.1,160.5 176.8,160.7 176.2,161.3 175.8,161.6 175,162.1 174.7,162.4 
	174.3,163.1 174.1,163.2 173.7,163.5 173.5,163.6 173.3,163.8 173.1,164.3 173,164.4 172.7,164.7 171.7,165 170.6,165.4 
	170.3,165.7 170.1,166 169.9,166.4 169.7,166.7 168.9,167 168.3,167.5 168,167.6 167.8,167.6 167.6,167.6 167.5,167.5 167.3,167.4 
	167.1,167.4 167,167.5 167,167.6 166.8,167.8 166.5,167.8 165.9,167.8 162.9,167.8 160,167.8 157.1,167.8 153.2,167.8 153.4,167.5 
	153.4,167.2 153.4,166.9 153.4,166.6 153.5,166.4 153.8,166.1 153.8,165.9 153.8,165.7 153.6,165.3 153.6,165.2 153.2,164.5 
	152.1,163.8 151.9,163.1 152.1,162.5 152.1,162.2 152,161.9 151.6,161.3 151.4,161.1 151.4,160.7 151.4,160.2 151.4,160.1 
	151.3,159.9 151.1,159.9 150.9,159.9 150.8,159.9 150.5,159.7 150,159.3 149.7,159.2 149.4,159.1 148.4,159.2 147.6,159.1 
	147.3,159 146.6,158.6 146,158.4 145.6,158.4 145.6,158.4 145.4,158.5 145.4,158.5 145.3,158.5 145.1,158.3 145,158.3 143,157.9 
	136.4,157.9 136.8,157.3 137.6,156.4 138,155.9 138.3,155.4 138.5,155.1 138.7,155 138.9,155 139.2,154.9 139.4,154.7 139.5,154.5 
	139.5,154.1 140.3,153.5 140.4,153.3 140.6,153 140.6,152.5 140.5,151.1 140.4,150.8 139.9,150.1 139.7,149.9 139.1,149.5 
	138.8,149.3 137.6,147.4 137.3,146.7 137.1,146.4 136.8,146.1 136.5,145.9 135.5,145.7 135.2,145.5 134.9,145.3 134.2,144.3 
	134.1,144.1 134.1,143.8 134.2,143 134.2,142.7 134.1,142.4 133.9,142.1 133.7,142.1 133.4,142 133.2,142 133,141.8 132.8,141.5 
	132.6,141.3 131.3,140.6 131,140.3 130.9,140 130.8,139.4 130.7,138.9 130.2,138.3 130,137.9 130,137.6 130.1,137 130,136.6 
	129.9,136.3 129.3,135.5 129.2,135.1 128.9,134.6 128.3,134.3 127.6,134 127.1,133.6 127,133.4 126.8,132.6 126.8,132.3 
	127.1,132.3 127.6,132.5 128.2,132.2 128.4,131.5 128.2,130.9 127.7,130.5 127.1,130.3 126.6,130 126.1,129.7 124,127.5 
	123.3,127.1 123.2,126.8 123.9,126.5 124.1,126.1 124.2,125.7 124.3,125.5 124.4,125.2 124.3,124.8 123.8,124 123.7,123.7 
	124.1,123.7 124.8,123.9 125.1,124 125.4,123.8 126,123.5 126.3,123.4 126.8,123.3 127.4,123.4 127.7,123.3 128,123.2 128.2,122.8 
	128.2,122.5 128,122.2 127.8,121.5 126.7,119.9 126.6,119.5 126.7,119.1 126.9,118.6 127.3,117.1 127.3,116.2 127.4,115.9 
	127.6,115.7 128.3,115.3 128.5,115.1 128.7,114.6 128.9,114.5 129.3,114.2 130.2,113.5 131.5,112.7 132.6,111.8 133.3,111.4 
	133.8,110.9 134.2,110.7 135.4,110.7 136.1,110.5 136.7,110.2 137.1,109.8 137.5,109.1 137.8,108.4 137.9,108 137.9,107.7 
	137.7,107.3 137.4,106.5 137.3,106.2 137.1,104.8 137,104.5 136.2,103.6 136.1,103.2 136.1,102.5 136.3,101.9 136.7,101.3 
	137.6,99.2 138.2,98.7 139.9,96.4 140.2,95.9 140.3,95.4 140.6,93.9 140.6,93.4 140.5,92.9 140.4,92.4 140.6,91.8 141,90.8 
	141.1,90.5 141.2,89.8 141.3,89.6 141.5,89.4 141.7,89.1 141.7,88.9 141.6,87.9 141.5,87.6 141.4,87.4 141.2,87.1 141.3,86.8 
	141.7,86.7 141.9,86.7 142.1,86.7 142.3,86.6 142.3,86.5 142.3,86.3 142.4,86.2 142.4,86.2 142.7,86.2 142.7,86.2 143.4,86.1 
	143.7,86 143.9,85.7 144.1,85.5 144.4,85.6 144.8,85.7 145.7,85.7 145.8,85.6 146,85.5 146,85.3 146,85.2 146.1,85 146.3,84.8 
	146.8,84.6 147.2,84.2 147.4,83.9 147.7,83.8 148,83.8 148.3,83.8 148.4,83.7 148.4,83.5 148.5,83.4 148.5,83.3 148.5,83.2 
	148.5,83.1 148.6,83 148.7,83 148.9,83 149,83 149.3,82.8 149.6,82.6 149.8,82.3 149.9,81.4 150.1,81.2 150.8,81 150.9,81 
	150.9,80.8 151,80.7 151.2,80.7 151.8,80.8 152,80.8 152.3,80.7 152.6,80.5 153.4,79.9 154.4,79.4 154.7,79.1 154.9,78.9 
	155.2,78.3 155.3,78.1 155.4,78.1 155.6,78.2 155.7,78.3 155.9,78.2 156,78.1 156.3,77.9 156.8,77.7 157.6,77 158,76.7 158.3,76.6 
	159.6,76.5 159.7,76.4 159.8,76.3 159.8,76.2 159.9,76.1 160,76.1 160.2,76.1 160.5,76.2 160.7,76.3 161.1,76.3 161.2,76.1 
	161.4,76.1 161.7,76.3 161.8,76.4 162,76.5 162.1,76.5 162.3,76.4 162.7,76.1 162.8,76 162.8,76.4 163.5,76.1 163.8,76 164.2,76.1 
	164.3,76.1 164.4,76 164.5,75.7 164.6,75.5 164.8,75.4 165.1,75.4 165.6,75.4 166.3,75.3 166.6,75.3 166.7,75.4 166.8,75.6 
	167,75.7 167.2,75.6 167.2,75.6 167.4,75.4 167.5,75.3 167.6,75.3 167.7,75.4 167.8,75.4 167.9,75.2 167.9,75 167.9,74.8 
	167.9,74.6 168.2,74.4 168.6,74.3 169,74.4 169.4,74.9 169.6,74.7 169.9,74.3 170.1,74.1 170.3,74.2 170.4,74.6 170.6,74.7 
	170.8,74.8 171,74.7 171.2,74.3 171.6,74.1 172.5,74.5 172.8,74.2 172.9,73.9 173.1,74.2 173.5,74.5 173.8,74.1 174,73.8 
	174.2,73.6 174.7,73.1 174.8,72.8 174.9,72.5 175,72.3 175.3,72.1 175.5,72.1 175.6,71.9 175.4,71.5 175.5,71.3 175.7,71.1 
	176.5,70.7 176.7,70.7 177.7,71 178,71 178.2,70.8 178.4,70.3 178.5,70.1 178.8,70 179,70.1 179.1,70.3 179,70.6 179,70.9 
	179.8,71.3 179.9,71.2 180,70.9 180.1,70.6 180.4,70.4 180.6,70.5 180.7,70.8 180.8,71 180.9,71.1 181.2,71 181.9,70.5 182.1,70.4 
	182.3,70.3 182.6,70.4 182.9,70.5 183.3,70.8 183.5,70.9 183.8,70.4 184,70.5 184.2,70.7 184.3,71 184.3,71.3 184.2,71.9 
	184.2,72.2 184.4,72.4 185.2,73.1 185.4,73.1 185.5,73.1 185.6,73.1 185.7,73.3 185.9,73.6 186.1,73.8 186.4,73.5 186.6,72.9 
	186.8,72.6 187.2,72.4 187.5,72.4 187.8,72.5 188,72.8 188.1,73.2 188.2,73.3 188.4,73.5 188.6,73.7 188.8,73.7 189.1,73.7 
	189.6,73.3 189.9,72.9 190.1,72.5 190,72 189.6,71.1 189.3,70.7 188.9,70.3 188.4,69.9 186.8,69 186.3,68.6 186.2,68.1 186.1,67.5 
	185.9,66.9 185.5,66.3 184.9,65.8 184.3,65.3 183.7,65.1 183.2,65.1 182.9,65.3 182.2,65.9 181.8,66.1 181.3,66.1 180.5,65.9 
	180.3,65.8 178.1,64.6 177.3,64.5 177.9,63.7 179.2,61.6 180.5,59.6 181.8,57.6 183.1,55.6 184.4,53.6 185.6,51.5 186.9,49.5 
	188.2,47.5 188.6,46.9 188.6,46.9 188.5,46.9 188.3,46.7 188.2,46.5 188.1,46.3 187.9,45.6 187.7,45.4 187.4,45.7 187.3,45.8 
	187.2,46 187.1,46.1 187,46.2 186.8,46.1 186.8,45.9 186.8,45.8 186.7,45.6 186.4,45.4 186.1,45.4 185.9,45.6 185.5,45.4 
	185.4,45.1 185.1,44.4 184.9,44.1 184.6,44 184.2,44.1 183.9,44.3 183.5,44.4 183.4,44.3 183.3,44.2 183.2,44 183.2,43.9 
	183.3,43.8 183.6,43.7 183.7,43.7 183.8,43.3 183.5,43.2 183.2,43.1 182.8,43.1 182.7,43.2 182.3,43.3 182.1,43.4 181.9,43.3 
	181.8,43.1 181.8,43 181.7,42.8 181.4,42.6 181.2,42.5 180.8,42.4 180.6,42.3 180.3,42.2 180.1,42 179.9,41.8 179.6,42 179.6,42.2 
	179.6,42.3 179.6,42.5 179.4,42.6 178.8,42.6 178.7,42.5 178.6,42.3 178.6,42 178.6,41.9 178.5,41.7 178,41.3 177.9,41.2 
	177.9,40.8 177.9,40.6 177.8,40.5 177.4,40.5 177.1,40.4 176.4,40.2 175.9,39.8 175,38.9 174.5,38.6 174.2,38.8 173.8,38.7 
	173.1,38.4 172.6,38.4 172.4,38.6 172.5,39 172.6,39.4 172.5,39.5 172.3,39.5 172.1,39.5 171.6,39.2 171.4,39.2 171,39.3 
	170.6,39.5 170.3,40.2 169.8,40.5 169.5,40.7 169.3,40.8 169.1,40.7 168.9,40.6 168.8,40.5 168.5,40.6 168.2,40.8 167.9,40.9 
	167.7,40.6 166.6,41.2 166,41.3 165.8,41 165.9,40.9 166.1,40.7 166.2,40.5 166.1,40.3 165.7,39.9 165.4,39.3 165.3,39.3 165,39.5 
	164.9,40.1 164.7,40.3 164.5,40.2 164.4,40 164.3,39.3 164.3,39 164.1,38.8 163.1,38.6 162.8,38.4 162.5,38.2 162.1,38 161.8,37.9 
	161.2,38.2 160.9,38.3 160.7,38 160.8,37.4 160.6,37.3 160.3,37.5 159.3,38.1 159.2,38.1 159.1,38.3 158.5,39.2 157.7,39.8 
	157.6,39.9 157.5,40.3 157.3,40.5 157,40.5 156,40.4 155.4,40.4 155,40.6 154.5,41 153.8,41.8 153.5,41.9 152.5,41.7 152.3,41.7 
	151.9,41.8 151.8,41.8 151.8,42.2 151.8,42.3 151.6,42.3 151.2,42.4 150.6,42.5 150.2,42.6 149.9,42.5 149.6,42.3 149.4,42.1 
	149.3,41.9 149.2,41.8 147.5,41.5 147.2,41.5 146.4,40.9 146.1,40.7 145.8,40.6 145.6,40.9 145.2,41.8 145,42 144.7,42.1 
	144.6,42.1 144.6,41.6 144.5,41.5 144.4,41.3 144.3,41.2 144.1,41.3 144,41.4 143.9,41.6 143.9,41.8 143.5,41.5 143.2,41.4 
	142.8,41.6 142.3,41.7 142.1,41.9 141.9,42 141.2,42.1 141,42.1 140.9,42 140.7,41.8 140.5,41 140.2,40.8 140.2,40.7 139,40.1 
	139,40.3 138.8,40.6 138.6,40.8 138.5,40.5 138.3,40.3 137.6,40.1 137.3,40 137.3,39.8 137.2,39.3 137.2,39.3 136.9,39.1 136.9,39 
	136.9,38.9 136.7,38.7 136.7,38.5 136.7,38.3 136.7,38.2 136.9,38 137.5,37.5 137.6,37.1 138.1,36.3 137.9,36.1 137.8,35.8 
	137.7,35.4 137.6,35.1 137.3,34.7 137.2,34.5 137.1,34.2 137.1,34 137.3,33.6 137.3,33.4 137.2,33.1 136.9,32.7 136.8,32.4 
	136.9,31.8 136.8,31.7 136.6,31.6 136.5,31.5 136.3,31.4 135.9,30.9 135.7,30.9 135.6,31.3 135.5,31.4 135,31.2 134.7,31.3 
	134.5,31.5 134.3,31.7 134.2,31.7 133.8,31.3 133.6,31.2 133.4,31.2 133.2,31.2 133,31.2 132.8,31.2 132.7,31.2 132.7,31.1 
	132.6,30.9 132.6,30.8 131.5,30.2 131.2,29.8 131.2,29.1 131.4,28.6 131.6,28.3 132,28.1 132,27.8 131.8,27.1 131.8,26.9 
	131.8,26.7 131.8,26.5 131.6,26.4 131.3,26.1 131.1,25.8 130.5,25.5 130.3,25.3 130.6,25 130.7,24.8 130.4,24.7 130.3,24.6 
	130.2,24.4 130.2,24.3 130.2,24 130.2,23.8 130.1,23.7 130,23.7 129.8,23.7 129.8,23.7 129.7,23.6 129.7,23.4 129.6,23.2 129.5,23 
	129.5,22.9 129.1,22.8 128.7,22.5 128.6,22.5 128.2,22.4 127.9,22.2 127.6,22 127.5,21.7 127.3,21.8 127,22.2 126.7,22.3 
	126.5,22.3 126.3,22.3 125.8,22.1 125.6,22 125.4,21.8 125.1,21.3 124.9,20.7 124.8,20.5 124.5,20.4 124,20.5 123.8,20.4 
	123.8,20.3 123.9,20 123.9,19.9 123.7,19.8 123.7,19.8 123.6,19.9 123.5,20 123.4,20.1 123.3,20.1 123.2,20.2 123,20.1 122.8,20 
	122.8,19.8 122.4,18.7 122.2,18.5 121.9,19 121.5,19 120.5,18.6 119.5,18.4 119.1,18.2 118.7,17.7 118.5,17 118.3,16.8 117.9,16.5 
	117.8,16.3 117.9,16.1 118.1,16.1 118.4,16.1 118.6,16.1 118.7,16 118.6,15.8 118.4,15.6 118.3,15.4 118.5,15.1 118.3,15.1 
	118,15.1 117.9,15 117.8,14.9 117.2,14.3 117.1,14.1 117.1,13.8 117.2,13.6 117.4,13.4 117.4,13.3 116.7,11.6 116.6,11.5 
	116.6,11.3 116.6,11.1 116.5,11.1 116.3,11.1 116.2,11 116,10.8 115.8,10.5 115.6,10.4 114.6,9.8 114.2,9.4 113.5,8.7 113,7.9 
	112.9,7.8 112.7,7.8 112.6,7.9 112.4,8 112.4,8 112.1,8 112,8 112,7.9 111.9,7.8 111.8,7.7 111.7,7.6 111.6,7.6 111.2,7.5 
	110.9,7.5 110.7,7.4 110.4,7.3 110.5,7.1 111,6.8 110.4,5.6 110.2,5.3 109.9,5 109.7,5 109.3,5.7 109.1,5.8 108.9,5.9 108.6,5.8 
	108.1,5.6 107.7,5.5 107.5,5.3 106.8,4.6 106.7,4.5 106.6,4.5 106.3,4.5 106.1,4.4 105.9,4.2 105.3,3.3 105,3.1 104.6,2.9 
	103.9,2.7 "/>
</svg>
	
	<br><br>
</main>


<?php get_footer(); ?>