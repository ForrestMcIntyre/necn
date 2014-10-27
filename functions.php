<?php

register_nav_menu("main_menu", "Main Menu");

$mainMenu =  array (
	"theme_location" => "main_menu",
	"container" => "nav",
	"container_class" => "",
	"container_id" => "main_menu"
);

add_action( 'widgets_init', 'my_register_sidebars' );
function my_register_sidebars() {
	register_sidebar( array(
		'id'            => 'primary',
		'name'          => __( 'Primary Sidebar' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'id'            => 'content',
		'name'          => __( 'Content Sidebar' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	register_sidebar( array(
		'id'            => 'footer',
		'name'          => __( 'Footer Bar' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

		register_sidebar ( array(
		'id'			=>'ballard',
		'name'		=>__( 'Content Ballard' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
		register_sidebar ( array(
		'id'			=>'broadview',
		'name'		=>__( 'Content Broadview' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
		register_sidebar ( array(
		'id'			=>'capital_hill',
		'name'		=>__( 'Content Capital_hill' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>'
		));
		register_sidebar ( array(
		'id'			=>'central_district',
		'name'		=>__( 'Content Central_district' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
		register_sidebar ( array(
		'id'			=>'crown_hill',
		'name'		=>__( 'Content Crown_hill' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
			register_sidebar ( array(
		'id'			=>'fremont',
		'name'		=>__( 'Content Fremont' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
			register_sidebar ( array(
		'id'			=>'greenwood',
		'name'		=>__( 'Content Greenwood' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
			register_sidebar ( array(
		'id'			=>'interbay',
		'name'		=>__( 'Content Interbay' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
			register_sidebar ( array(
		'id'			=>'lake_city',
		'name'		=>__( 'Content Lake_city' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
			register_sidebar ( array(
		'id'			=>'magnolia',
		'name'		=>__( 'Content Magnolia' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
			register_sidebar ( array(
		'id'			=>'maple_leaf',
		'name'		=>__( 'Content Maple_leaf' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
			register_sidebar ( array(
		'id'			=>'ne_seattle',
		'name'		=>__( 'Content NE_seattle' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
				register_sidebar ( array(
		'id'			=>'queen_anne',
		'name'		=>__( 'Content Queen_anne' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
				register_sidebar ( array(
		'id'			=>'rainier_beach',
		'name'		=>__( 'Content Rainier_beach' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
				register_sidebar ( array(
		'id'			=>'seattle',
		'name'		=>__( 'Content Seattle' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
				register_sidebar ( array(
		'id'			=>'shilshole_bay',
		'name'		=>__( 'Content Shilshole_bay' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
				register_sidebar ( array(
		'id'			=>'wallingford',
		'name'		=>__( 'Content Wallingford' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
				register_sidebar ( array(
		'id'			=>'wedgewood',
		'name'		=>__( 'Content Wedgewood' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));
				register_sidebar ( array(
		'id'			=>'west_seattle',
		'name'		=>__( 'Content West_seattle' ),
		'before_widget'=> '<aside id="%1$s" class="widget %2$s''> ',
		'after_widget' => '</aside>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
		));

	}
?>