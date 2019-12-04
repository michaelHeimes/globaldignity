<?php
/**
 * Template Name: Contact 
 *
 * @package Global_Dignity
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			
			<div id="contact-title-wrap">				
				<div class="multi-color-line-wrap"><div class="multi-color-line"><span class="color-1"></span><span class="color-2"></span><span class="color-3"></span><span class="color-4"></span><span class="color-5"></span></div></div>
				<h1 class="centered"><?php the_field('page_title');?></h1>
			</div>
			
			<div id="find-your-country" class="wrap-960">
				<div id="contact-gray-bar"></div>
				<div id="find-your-country-left" class="find-your-country-half">
					<?php the_field('text_above_country_selector');?>
						<div id="countries">
							<div id="countries-inner">
								<button class="select-button">Select your country<img src="/wp-content/themes/global-dignity/svg/dropdown-arrow.svg" width="18px" height="auto" /></button>
	
								<?php
									wp_nav_menu( array(
										'theme_location' => 'country_selector',
										'menu_id'        => 'country_selector'
									) );
								?>
							</div>
						</div>
					<div id="text_below_country_selector"><?php the_field('text_below_country_selector');?></div>
				</div>	
					
				<div id="find-your-country-right" class="find-your-country-half">
					<img src="<?php the_field('contact_page_map');?>" width="470px" />
				</div>
				
			</div>
				
			<div id="write-us-wrap">	
				<div id="contact-jump"></div>	
				<div id="write-us" class="wrap-960">
					<h3>Contact Global Dignity</h3>
					<?php echo do_shortcode('[contact-form-7 id="79" title="Contact form 1"]');?>
				</div>
			</div>
				
				<div id="global-home-office-wrap">
					<div id="global-home-office" class="wrap-960">
						<div id="global-office-wrap-left" class="global-office-wrap-half">
							<?php if( have_rows('contact_info') ): ?>
								<?php while( have_rows('contact_info') ): the_row();?>	
								<h3><?php the_sub_field('title');?></h3>
								<div class="contact-line"><p>Phone</p><a href="tel:<?php the_sub_field('phone');?>"><?php the_sub_field('phone');?></a></div>
								<div class="contact-line"><p> Address</p><a href="<?php the_sub_field('google_directions_embed');?>" target="_blank"><?php the_sub_field('address');?></a></div>
								<div class="contact-line"><p>Email</p><a href="mailto:<?php the_sub_field('email');?>"><?php the_sub_field('email');?></a></div>
								<script>
								jQuery(document).ready(function($){
									$(window).load(function(){
										//set your google maps parameters
										var $latitude = <?php the_sub_field('latitude');?>,
											$longitude = <?php the_sub_field('longitude');?>,
											$map_zoom = <?php the_sub_field('map_zoom');?>;
									
										//google map custom marker icon - .png fallback for IE11
										var is_internetExplorer11= navigator.userAgent.toLowerCase().indexOf('trident') > -1;
										var $marker_url = ( is_internetExplorer11 ) ? '<?php get_site_url();?>/wp-content/themes/global-dignity/svg/gray-map-marker.png' : '<?php get_site_url();?>/wp-content/themes/global-dignity/svg/gray-map-marker.png';
											
			
										//define the basic color of your map, plus a value for saturation and brightness
										var	$main_color = '#fff',
											$saturation= -100,
											$brightness= 5;
									
										//we define here the style of the map
										var style= [ 
											{
												//set saturation for the labels on the map
												elementType: "labels",
												stylers: [
													{saturation: $saturation}
												]
											},  
										    {	//poi stands for point of interest - don't show these lables on the map 
												featureType: "poi",
												elementType: "labels",
												stylers: [
													{visibility: "simplified",
									         saturation: $saturation,
									        color:"#eeeeee"}
												]
											},
											{
												//don't show highways lables on the map
										        featureType: 'road.highway',
										        elementType: 'labels',
										        stylers: [
										            {visibility: "on"}
										        ]
										    }, 
											{ 	
												//don't show local road lables on the map
												featureType: "road.local", 
												elementType: "labels.icon", 
												stylers: [
													{visibility: "on"} 
												] 
											},
											{ 
												//don't show arterial road lables on the map
												featureType: "road.arterial", 
												elementType: "labels.icon", 
												stylers: [
													{visibility: "on"}
												] 
											},
											{
												//don't show road lables on the map
												featureType: "road",
												elementType: "geometry.stroke",
												stylers: [
													{visibility: "off"}
												]
											}, 
											//style different elements on the map
											{ 
												featureType: "transit", 
												elementType: "geometry.fill", 
												stylers: [
													{ hue: $main_color },
													{ visibility: "on" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											}, 
											{
												featureType: "poi",
												elementType: "geometry.fill",
												stylers: [
													{ hue: $main_color },
													{ visibility: "simplified" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											},
									    {
												featureType: "poi",
												elementType: "geometry.stroke",
												stylers: [
													{ hue: $main_color },
													{ visibility: "simplified" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											},
											{
												featureType: "poi.government",
												elementType: "geometry.fill",
												stylers: [
													{ hue: $main_color },
													{ visibility: "simplified" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											},
											{
												featureType: "poi.sport_complex",
												elementType: "geometry.fill",
												stylers: [
													{ hue: $main_color },
													{ visibility: "on" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											},
											{
												featureType: "poi.attraction",
												elementType: "geometry.fill",
												stylers: [
													{ hue: $main_color },
													{ visibility: "simplified" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											},
											{
												featureType: "poi.business",
												elementType: "geometry.fill",
												stylers: [
													{ hue: $main_color },
													{ visibility: "on" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											},
											{
												featureType: "transit",
												elementType: "geometry.fill",
												stylers: [
													{ hue: $main_color },
													{ visibility: "on" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											},
											{
												featureType: "transit.station",
												elementType: "geometry.fill",
												stylers: [
													{ hue: $main_color },
													{ visibility: "on" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											},
											{
												featureType: "landscape",
												stylers: [
													{ hue: $main_color },
													{ visibility: "on" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
												
											},
											{
												featureType: "road",
												elementType: "geometry.fill",
												stylers: [
													{ hue: $main_color },
													{ visibility: "on" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											},
											{
												featureType: "road.highway",
												elementType: "geometry.fill",
												stylers: [
													{ hue: $main_color },
													{ visibility: "on" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											}, 
											{
												featureType: "water",
												elementType: "geometry",
												stylers: [
													{ hue: $main_color },
													{ visibility: "on" }, 
													{ lightness: $brightness }, 
													{ saturation: $saturation }
												]
											}
										];
											
										//set google map options
										var map_options = {
									      	center: new google.maps.LatLng($latitude, $longitude),
									      	zoom: $map_zoom,
									      	panControl: false,
									      	zoomControl: false,
									      	mapTypeControl: false,
									      	streetViewControl: false,
									      	fullscreenControl: false,
									      	mapTypeId: google.maps.MapTypeId.ROADMAP,
									      	scrollwheel: false,
									      	styles: style,
									    }
									    //inizialize the map
										var map = new google.maps.Map(document.getElementById('google-container'), map_options);
										//add a custom marker to the map				
										var marker = new google.maps.Marker({
										  	position: new google.maps.LatLng($latitude, $longitude),
										  	centering: marker,
										    map: map,
										    visible: true,
										 	icon: $marker_url,
										});
									});
								});
							</script>
								<?php endwhile;?>	
							<?php endif;?>
						</div>
					
						<div id="global-office-wrap-right">
							<div id="google-container" class="global-office-wrap-half"></div>
							<script async defer
							src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBpf0SuKXrlnWeDRFV3EyX2FvQmM040zXU&callback=initMap">
							</script>
						</div>
					</div>
				</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
// get_sidebar();
get_footer();
