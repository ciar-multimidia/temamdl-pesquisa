<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's roshnilite theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package    theme_roshnilite
 * @copyright  2015 dualcube {@link http://dualcube.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_roshnilite_get_html_for_settings($OUTPUT, $PAGE);
global $DB, $USER, $CFG, $PAGE;
$enablemoodlemaincontent = get_config('theme_roshnilite', 'moodlemaincontentinfrontpage');
$PAGE->requires->css('/theme/roshnilite/css/font-awesome.min.css', true);
$PAGE->requires->css('/theme/roshnilite/css/styles.css');
$PAGE->requires->js('/theme/roshnilite/js/jquery-1.11.1.min.js', true);
$PAGE->requires->js('/theme/roshnilite/js/bootstrap.min.js', true);
$PAGE->requires->js('/theme/roshnilite/js/jquery.bxslider.min.js', true);
$PAGE->requires->js('/theme/roshnilite/js/jquery.scroll.js', true);
$PAGE->requires->js('/theme/roshnilite/js/engine.js', true);
$PAGE->requires->js('/theme/roshnilite/js/backtop.js', true);
if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}
echo $OUTPUT->doctype()
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
	<head>
		<title><?php echo $OUTPUT->page_title(); ?></title>
		<?php echo $OUTPUT->standard_head_html() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="image/x-icon" rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>">
	</head>
	<body class="header-3">
		<?php echo $OUTPUT->standard_top_of_body_html() ?>
		<header id="header">
				<div class="main-menu header3">

					<!-- barra da universidade -->
					<div class="nome-universidade">
						<p>Universidade Federal de Goiás <img src="<?php echo $OUTPUT->pix_url('marca-ufg', 'theme_roshnilite'); ?>" alt=""></p>
					</div>
					<div class="container">
						<a href="<?php echo $CFG->wwwroot;?>" class="inner-logo logo-text"></a>
                        <?php echo $OUTPUT->user_menu(); ?>
                        <?php if ($CFG->version > 2016052304) { ?>
                        <div class="messagesnotifications">
    						<?php echo $OUTPUT->navbar_plugin_output(); ?>
                    	</div>
                    	<?php } ?>
					</div><!-- END of .container -->
				</div><!-- END of main-menu -->

				<!-- Menu de Línguas removido -->

				<!-- <div class="only">
					<div class="container">
						<div class="navbar">
							<div class="navbar-inner">
								<div class="">
									<button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
									<div class="nav-collapse collapse">
										<?php /* echo $OUTPUT->custom_menu(); */ ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div> -->


				<?php if (!isloggedin()) { ?>
					<div class="header3-login">
						<div class="container">
							<form method="post" action="<?php echo $CFG->wwwroot; ?>/login/index.php?authldap_skipntlmsso=1">
								<input type="text" name="username" placeholder="Username:">
								<input type="password" name="password" placeholder="Password:">
								<input type="submit" value="LOG IN">
							</form>

						<!-- <div class="recuperasenha"><a href="https://ufgnet.ufg.br">Recuperar senha de login único</a></div> -->

						<div class="recuperasenha"><a href="<?php echo $CFG->wwwroot; ?>/login/forgot_password.php">Recuperar senha</a></div>

						</div>
					</div>
	            <?php 
	}
	            ?>
		</header><!-- END of header -->
		<div class="content">
            <?php	
            	require($CFG->dirroot.'/theme/roshnilite/layout/home/firstslider.php');
                require($CFG->dirroot.'/theme/roshnilite/layout/home/aboutsite.php');
                // require($CFG->dirroot.'/theme/roshnilite/layout/home/availablecourse.php');
            ?>
            	
               
        	<div class="maincontent"><?php echo $OUTPUT->main_content();?></div>
                
            <?php
            	require($CFG->dirroot.'/theme/roshnilite/layout/home/categories.php');
                // require($CFG->dirroot.'/theme/roshnilite/layout/home/contacts.php');
                // require($CFG->dirroot.'/theme/roshnilite/layout/home/social_network.php');
            ?>
		</div><!-- END of .content -->
		<?php
           require('footer.php'); echo $OUTPUT->standard_end_of_body_html()
        ?>
		<a href="#header" class="btn-to-top"><i class="fa fa-arrow-circle-up"></i></a>
	</body>
</html>
