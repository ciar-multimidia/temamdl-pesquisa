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
?>
<footer>
	<?php 
    // echo $OUTPUT->home_link();
    // echo $OUTPUT->login_info();
    // echo $OUTPUT->standard_footer_html();
    ?>



    <div class="inforodape">
        <img src="<?php echo $OUTPUT->pix_url('marca-ciarufg', 'theme_roshnilite'); ?>">
        <div>
            Centro Integrado de Aprendizagem em Rede <br>
            Universidade Federal de Goiás
        </div>
    </div>

    <hr>

    <div class="copyright">Tema "Roshnilite" adaptado e customizado por <a href="https://ciar.ufg.br">CIAR - UFG</a></div>
</footer>