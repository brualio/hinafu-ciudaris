
<!-- *********RADIOBUTTON*********-->
<?php 
if( get_field('color') == 'red' ) {
    // Do something.
}
?>

<!-- *********RANGE*********-->
<?php
$h2_font_size = get_field('h2_font_size');
if( $h2_font_size ): ?>
<style type="text/css">
    h2 {
        font-size: <?php echo $h2_font_size; ?>px;
    }
</style>
<?php endif; ?>

<!-- *********FILE*********-->
<!-- url-->
<?php if( get_field('file') ): ?>
    <a href="<?php the_field('file'); ?>" >Download File</a>
<?php endif; ?>

<!-- array-->
<?php
$file = get_field('file');
if( $file ):

    // Extract variables.
    $url = $file['url'];
    $title = $file['title'];
    $caption = $file['caption'];
    $icon = $file['icon'];

    // Display image thumbnail when possible.
    if( $file['type'] == 'image' ) {
        $icon =  $file['sizes']['thumbnail'];
    }

    // Begin caption wrap.
    if( $caption ): ?>
        <div class="wp-caption">
    <?php endif; ?>

    <a href="<?php echo esc_attr($url); ?>" title="<?php echo esc_attr($title); ?>">
        <img src="<?php echo esc_attr($icon); ?>" />
        <span><?php echo esc_html($title); ?></span>
    </a>

    <?php 
    // End caption wrap.
    if( $caption ): ?>
        <p class="wp-caption-text"><?php echo esc_html($caption); ?></p>
        </div>
    <?php endif; ?>
<?php endif; ?>

<!-- id--> 
<?php
$file = get_field('file');
if( $file ):
    $url = wp_get_attachment_url( $file ); ?>
    <a href="<?php echo esc_html($url); ?>" >Download File</a>
<?php endif; ?>


<!-- *********REPEATER*********-->
<?php if(get_field('repeater_field_name')): ?>
    <?php while(has_sub_field('repeater_field_name')): ?>
        <?php the_sub_field('sub_field_1'); ?>
    <?php endwhile; ?>
<?php endif; ?>

<?php
$rows = get_field('repeater_field_name');
if($rows)
	foreach($rows as $row)
	{
		$row['sub_field_1']
	}
}
?>


<!-- *********GALLERY*********-->
<?php
$images = get_field('gallery');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image_id ): ?>
            <li>
                <?php echo wp_get_attachment_image( $image_id, $size ); ?>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>


<!-- *********IMAGE*********-->
<!-- id -->
<?php 
$image = get_field('image');
$size = 'full'; // (thumbnail, medium, large, full or custom size)
if( $image ) {
    echo wp_get_attachment_image( $image, $size );
}
?>

<!-- array -->
<?php 
$image = get_field('image');
if( !empty( $image ) ): ?>
    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
<?php endif; ?>

<!-- url -->
<?php if( get_field('image') ): ?>
    <img src="<?php the_field('image'); ?>" />
<?php endif; ?>

<!-- *********EMBED*********-->
<div class="embed-container">
    <?php the_field('oembed'); ?>
</div>

<!-- *********Post Object*********-->
<!--solo-->
<?php
$post_object = get_field('post_object');
if( $post_object ): 
	$post = $post_object;
	setup_postdata( $post ); 

	?>
    <div>
        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
        <span>Post Object Custom Field: <?php the_field('field_name'); ?></span>
    </div>
    <?php wp_reset_postdata(); ?>
<?php endif; ?>

<!--multiple-->
<?php
$post_objects = get_field('post_objects');
if( $post_objects ): ?>
    <ul>
    <?php foreach( $post_objects as $post):  ?>
        <?php setup_postdata($post); ?>
        <li>
            <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            <span>Post Object Custom Field: <?php the_field('field_name'); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
    <?php wp_reset_postdata(); ?>
<?php endif;

$post_objects = get_field('post_objects');
if( $post_objects ): ?>
    <ul>
    <?php foreach( $post_objects as $post_object): ?>
        <li>
            <a href="<?php echo get_permalink($post_object->ID); ?>"><?php echo get_the_title($post_object->ID); ?></a>
            <span>Post Object Custom Field: <?php the_field('field_name', $post_object->ID); ?></span>
        </li>
    <?php endforeach; ?>
    </ul>
<?php endif;

?>

<!-- *********TAXONOMY*********-->
<!--solo-->
<?php 
$term = get_field('taxonomy_field_name');
if( $term ): ?>
    <h2><?php echo esc_html( $term->name ); ?></h2>
    <p><?php echo esc_html( $term->description ); ?></p>
<?php endif; ?>

<!--multiple-->
<?php 
$terms = get_field('taxonomy_field_name');
if( $terms ): ?>
    <ul>
    <?php foreach( $terms as $term ): ?>
        <h2><?php echo esc_html( $term->name ); ?></h2>
        <p><?php echo esc_html( $term->description ); ?></p>
        <a href="<?php echo esc_url( get_term_link( $term ) ); ?>">View all '<?php echo esc_html( $term->name ); ?>' posts</a>
    <?php endforeach; ?>
    </ul>
<?php endif; ?>



<!-- *********USER*********-->
<!--solo-->
<?php
$user = get_field("user_field");
if( $user ): ?>
<div class="author-box">
    <img src="<?php echo esc_attr($user['user_avatar']); ?>" alt="author-avatar" />
    <h3><?php echo $user['display_name']; ?></h3>
    <?php if( $user['user_description'] ): ?>
        <p><?php echo $user['user_description']; ?></p>
    <?php endif; ?>
</div>
<?php endif; ?>

<!--multiple-->
<?php
$users = get_field("volunteers");
if( $users ): ?>
<ul class="volunteers-list">
    <?php foreach( $users as $user ): ?>
        <li>
            <img src="<?php echo esc_attr( get_avatar($user->ID) ); ?>" alt="author-avatar" />
            <a href="<?php echo esc_attr($user->user_url); ?>"><?php echo $user->display_name; ?></a>
        </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<!-- *********PAGELINK*********-->
<!--solo-->
<a href="<?php the_field('page_link'); ?>">Read this!</a>


<!--multiple-->
<?php 
$urls = get_field('urls');
if( $urls ): ?>
<h3>Further reading</h3>
<ul>
    <?php foreach( $urls as $url ): ?>
    <li>
        <a href="<?php echo esc_url( $url ); ?>"><?php echo esc_html( $url ); ?></a>
    </li>
    <?php endforeach; ?>
</ul>
<?php endif; ?>

<!-- acf content flexible -->
<?php $item_sublist = $item['sublist_arrival_departure'] ?>
<?php $index = 1 ?>
<?php foreach($item_sublist as $subitem) :?>
	<div class="arrival-departure-tab-subitem">
		<span class="arrival-departure-tab-subitem-number">0<?php echo $index ?>.</span>
		<?php $subitem_image = $subitem['image'] ?>
		<?php $subitem_title = $subitem['title'] ?>
		<?php $subitem_content = $subitem['content'] ?>
		<figure class="arrival-departure-tab-subitem-image" data-aos="fade-up">
			<img src="<?php echo $subitem_image ?>" alt="" class="arrival-departure-tab-subitem-img">
		</figure>
		<div class="arrival-departure-tab-subitem-info" data-aos="fade-up" data-aos-delay="200">
			<?php if($subitem_title) :?>
			<div class="arrival-departure-tab-subitem-title">
				<h3 class="arrival-departure-tab-subitem-title-text"><?php echo $subitem_title ?></h3>
			</div>
			<?php endif; ?>
			<?php if($subitem_content) :?>
				<?php foreach($subitem_content as $subsubitem) :?>
					<div class="arrival-departure-tab-subsubitem">
						<?php $subitem_content_layout = $subsubitem['acf_fc_layout'] ?>
						<?php $subitem_content_editor = $subsubitem['editor'] ?>
						<?php $subitem_content_list = $subsubitem['list'] ?>
						<div class="arrival-departure-tab-subsubitem-content">
							<?php if($subitem_content_layout == "content") :?>
								<div class="arrival-departure-tab-subsubitem-text">
									<?php echo $subitem_content_editor  ?>
								</div>
							<?php elseif($subitem_content_layout == "list") :?>
								<?php foreach($subitem_content_list as $list ):?>
									<?php $list_icon = $list['icon_list'] ?>
									<?php $text = $list['text'] ?>
									<div class="arrival-departure-tab-subsubitem-list">
										<figure class="arrival-departure-tab-subsubitem-list-icon">
											<img class="arrival-departure-tab-subsubitem-list-icon-img" src="<?php echo $list_icon ?>" alt="">
										</figure>
										<div class="arrival-departure-tab-subsubitem-list-text">
										<?php echo $text ?>
										</div>
									</div>
								<?php endforeach;?>
							<?php endif; ?>
						</div>
					</div>
				<?php endforeach; ?>	
			<?php endif; ?>			
		</div>
	</div>