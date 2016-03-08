<?php
/*
Plugin Name: Sharing plugin
Plugin URI: http://sharing.eu
Description: Un plugin partage reseaux sociaux
Version: 0.1
Author: Jean-Elie Argyre
*/

function sharing_menu_item()
{
	 add_submenu_page("options-general.php", "Sharing", "Sharing", "manage_options", "sharing", "sharing_page"); 
}

add_action("admin_menu", "sharing_menu_item");

function sharing_page()
{
	?>

	<div class="wrap">
		<h1> Sharing Plugin Options</h1>

		<form method="post" action="options.php">
			<?php
				settings_fields("sharing_config_section");
				do_settings_sections("sharing");
				submit_button();
			?>
		</form>
	</div>
	<?php
}

function sharing_settings()
{
	add_settings_section("sharing_config_section", "", null, "sharing");
 
    add_settings_field("sharing-facebook", "Do you want to display Facebook share button?", "sharing_facebook_checkbox", "sharing", "sharing_config_section");
    add_settings_field("sharing-twitter", "Do you want to display Twitter share button?", "sharing_twitter_checkbox", "sharing", "sharing_config_section");
    add_settings_field("sharing-linkedin", "Do you want to display LinkedIn share button?", "sharing_linkedin_checkbox", "sharing", "sharing_config_section");
 
    register_setting("sharing_config_section", "sharing-facebook");
    register_setting("sharing_config_section", "sharing-twitter");
    register_setting("sharing_config_section", "sharing-linkedin");
}

function sharing_facebook_checkbox()
{  
   ?>
        <input type="checkbox" name="sharing-facebook" value="1" <?php checked(1, get_option('sharing-facebook'), true); ?> /> Check for Yes
   <?php
}

function sharing_twitter_checkbox()
{  
   ?>
        <input type="checkbox" name="sharing-twitter" value="1" <?php checked(1, get_option('sharing-twitter'), true); ?> /> Check for Yes
   <?php
}

function sharing_linkedin_checkbox()
{  
   ?>
        <input type="checkbox" name="sharing-linkedin" value="1" <?php checked(1, get_option('sharing-linkedin'), true); ?> /> Check for Yes
   <?php
}
 
add_action("admin_init", "sharing_settings");

//Affichage Sharing button
function add_sharing_icons($content)
{
    $html = "<div class='sharing-wrapper'><div class='share-on'>Share on: </div>";

    global $post;

    $url = get_permalink($post->ID);
    $url = esc_url($url);

    if(get_option("sharing-facebook") == 1)
    {
        $html = $html . "<div class='facebook'><a target='_blank' href='http://www.facebook.com/sharer.php?u=" . $url . "'>Facebook</a></div>";
    }

    if(get_option("sharing-twitter") == 1)
    {
        $html = $html . "<div class='twitter'><a target='_blank' href='https://twitter.com/share?url=" . $url . "'>Twitter</a></div>";
    }

    if(get_option("sharing-linkedin") == 1)
    {
        $html = $html . "<div class='linkedin'><a target='_blank' href='http://www.linkedin.com/shareArticle?url=" . $url . "'>LinkedIn</a></div>";
    }

    $html = $html . "<div class='clear'></div></div>";

    return $content = $content . $html;
}

add_filter("the_content", "add_sharing_icons");

//CSS
function sharing_style() 
{
    wp_register_style("sharing-style-file", plugin_dir_url(__FILE__) . "style.css");
    wp_enqueue_style("sharing-style-file");
}

add_action("wp_enqueue_scripts", "sharing_style");