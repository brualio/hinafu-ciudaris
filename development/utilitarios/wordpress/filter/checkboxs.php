<section class="filter-g">
	<form id="filter-g--prueba" action="<?php echo get_permalink() ?>" method="GET" >
	<div class="filter-g__container  wrapper-container">
		<div class="filter-g__overlay filter-g--overlay"></div>
		<a class="filter-g__button filter-g--button  button-g button-g--orange g--uppercase" href="#">
			<span class="button-g__text">Filtros</span>
		</a>
		<div class="filter-g__sidebar filter-g--sidebar">
			<div class="filter-g__sidebarClose filter-g--sidebarClose">x</div>
			<div class="filter-g__sidebarIn">
				<div class="filter-g__sidebarItems">
					<div class="filter-g__sidebarItem">
						<div class="filter-g__sidebarInTitle">
							<h3>Categoria</h3>
						</div>
						<?php
						$taxonomy = 'categoria-prueba';
						$terms = get_terms( $taxonomy );
						if ( $terms ) { ?>
							<div class="filter-g__sidebarInItems">
								<?php foreach( $terms as $term ) { 
								$checkedCat = '';
								if( isset( $_GET['categoria-prueba'] )  ) { 
									if(in_array($term->slug, $_GET['categoria-prueba'])) {
										$checkedCat = ' checked="checked"';  
									}
								}?>
								<div class="filter-g__sidebarInItem filter-g--checkbox input-g input-g__CheckboxRadio input-g__checkbox input-g__checkbox--square">
									<div class="input-g__CheckboxRadioInside">
										<input class="filter-g--categoria" type="checkbox" value="<?php echo $term->slug ?>" id="<?php echo $term->slug ?>" name="categoria-prueba[]" <?php echo $checkedCat ?>/>
										<label class="input-g__CheckboxRadioLabel" for="<?php echo $term->slug ?>">
											<div class="input-g__CheckboxRadioLabelContainer">
												<div class="input-g__CheckboxRadioFig"></div>
												<div class="input-g__CheckboxRadioText"><?php echo $term->name; ?></div>
											</div>
										</label>
									</div>
								</div>
							<?php } ?>
						</div>	
					<?php } ?>
					</div>

					<div class="filter-g__sidebarItem">
						<div class="filter-g__sidebarInTitle">
							<h3>Modelo</h3>
						</div>
						<?php
						$taxonomy = 'modelo-prueba';
						$terms = get_terms( $taxonomy );
						if ( $terms ) { ?>
						<div class="filter-g__sidebarInItems">
							<?php foreach( $terms as $term ) { 
								$checkedmodel = '';
								if( isset( $_GET['modelo-prueba'] )  ) { 
									if(in_array($term->slug, $_GET['modelo-prueba'])) {
										$checkedmodel = ' checked="checked"';  
									}
								}?>
								<div class="filter-g__sidebarInItem filter-g--checkbox input-g input-g__CheckboxRadio input-g__checkbox input-g__checkbox--square">
									<div class="input-g__CheckboxRadioInside">
										<input  class="filter-g--categoria" type="checkbox" value="<?php echo $term->slug ?>" id="<?php echo $term->slug ?>" name="modelo-prueba[]" <?php echo $checkedmodel ?>/>
										<label class="input-g__CheckboxRadioLabel" for="<?php echo $term->slug ?>">
											<div class="input-g__CheckboxRadioLabelContainer">
												<div class="input-g__CheckboxRadioFig"></div>
												<div class="input-g__CheckboxRadioText"><?php echo $term->name; ?></div>
											</div>
										</label>
									</div>
								</div>
							<?php } ?>
							</div>
						<?php } ?>
					</div>
				</div>
			</div>
		
		</div>
		<div class="filter-g__content">
            <div class="filter-g__selected">
            <?php
            $categoriaPrueba = $_GET['categoria-prueba'];
            if (isset($_GET['categoria-prueba'])) {
                foreach ($categoriaPrueba as $cat){
					echo '<div class="filter-g__selectedItem" data-filter="'.$cat.'">';
					$catExplode = explode("-", $cat);
                    echo $catExplode[0]." ". $catExplode[1];
                    echo '<a href="javascript:void(0)" class="filter-g__selectedItemClose">x</a>';
                    echo '</div>';
                }
            } else {}
            ?>
            <?php
            $modeloPrueba = $_GET['modelo-prueba'];
            if (isset($_GET['modelo-prueba'])) {
                foreach ($modeloPrueba as $modelo){
                    echo '<div class="filter-g__selectedItem" data-filter="'.$modelo.'">';
                    echo $modelo;
                    echo '<a href="javascript:void(0)" class="filter-g__selectedItemClose">x</a>';
                    echo '</div>';
                }
            } else {}
            ?>
            </div>

			<?php 
			
			$new_args = [];
			$sorted = false;
			if(isset($_GET["sort"]) && $_GET["sort"] != "") {
				$sorted = true;
				$sort_val = $_GET["sort"];
			
				switch ($sort_val) {
					case "asc":
						//$new_args["meta_key"] = "total_sales";
						$new_args["orderby"] = "title";
						$new_args["order"] = "ASC";
						break;
					case "desc":
						$new_args["orderby"] = "title";
						$new_args["order"] = "DESC";
						break;
					default:
					break;
				}
			}
			?>
			<div class="filter-g__nav">
				<div class="filter-g__navItem">
					<div class="input-g input-g--select input-g--iconRight">
						<label class="input-g__title colorBlack">Ordenar por:</label>
						<div class="input-g__inside">
							<div class="input-g__ico input-g__icoRight icon-right-arrow"></div>
							<select class="input-g__input" id="filter-g--sort" name="sort">
								<option value="">Ordenar</option>
								<option value="asc" <?php if($sorted && $sort_val == "asc") echo "selected"; ?>>ASC</option>
								<option value="desc" <?php if($sorted && $sort_val == "desc") echo "selected"; ?>>DESC</option>
							</select>
							<!--<input type="hidden" class="filter-g--order" name="orden" value='' />-->
						</div>
					</div>
				</div>

            </div>
            <?php $tax_queries = array();
            $cont = 0;

            if( isset( $_GET['categoria-prueba'] ) && $_GET['categoria-prueba'] ) {
            $tax_queries[] = [
                'taxonomy' => 'categoria-prueba',
                'field'    => 'slug',
                'terms'    => $_GET['categoria-prueba'],
            ];
            ++$cont;
            }

            if( isset( $_GET['modelo-prueba'] ) && $_GET['modelo-prueba'] ) {
            $tax_queries[] = [
                'taxonomy' => 'modelo-prueba',
                'field'    => 'slug',
                'terms'    => $_GET['modelo-prueba'],
            ];
            ++$cont;
            }

            if($cont > 1) $tax_queries["relation"] = "AND";

            $_SESSION["tax_queries"] = $tax_queries; ?>
			<?php $tax_queries = $_SESSION["tax_queries"]; ?>
			<?php $paged = (get_query_var('paged')) ? get_query_var('paged') : 1; ?>
			<?php   
			$args = array( 
			'post_type' => 'prueba', 
			'post_status' => 'publish',
			'posts_per_page' => 3,
			'paged' => $paged,
			'tax_query' => $tax_queries,
			);

			$args = array_merge($args, $new_args);

			$wp_query = new WP_Query($args); ?>
			<?php if($wp_query->have_posts()) : ?>
			<div class="filter-g__contentItems">
				<?php while ( $wp_query->have_posts() ) : $wp_query->the_post();  ?>
					<div class="filter-g__contentItem">
						<h3><?php the_title() ?></h3>
					</div>
				<?php endwhile; ?>  
				<?php wp_reset_postdata(); ?>
			</div>
			<div class="filter-g__pagination">
				<?php get_template_part( 'templates/pagination/content', 'pagination'); ?>
			</div>
			<?php else: ?>
			<div class="filter-g__noResult">
				<p><?php _e('No se encontraron resultados','ttextil') ?></p>
			</div>
			<?php endif; ?>
		</div>
	</div>
	</form>
</section>