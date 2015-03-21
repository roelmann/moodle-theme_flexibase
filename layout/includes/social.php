<?php
// This file is part of The Bootstrap 3 Moodle theme
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
 * Theme Flexibase layout file.
 *
 * @package    theme_flexibase
 * @author     2015 Richard Oelmann
 * @copyright  2015 R. Oelmann
 * @copyright  Bootstrap - 2014 Bas Brands
 *             Essential - Julian Ridden, Gareth Barnard;
 *             Elegance - Julian Ridden, Danny Wahl;
 *             BCU - Jez H, Mike Grant
 *             Decaf - Paul Nichols
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$hasfacebook    = (empty($PAGE->theme->settings->facebook)) ? false : $PAGE->theme->settings->facebook;
$hastwitter     = (empty($PAGE->theme->settings->twitter)) ? false : $PAGE->theme->settings->twitter;
$hasgoogleplus  = (empty($PAGE->theme->settings->googleplus)) ? false : $PAGE->theme->settings->googleplus;
$haslinkedin    = (empty($PAGE->theme->settings->linkedin)) ? false : $PAGE->theme->settings->linkedin;
$hasyoutube     = (empty($PAGE->theme->settings->youtube)) ? false : $PAGE->theme->settings->youtube;
$hasflickr      = (empty($PAGE->theme->settings->flickr)) ? false : $PAGE->theme->settings->flickr;
$hasvk          = (empty($PAGE->theme->settings->vk)) ? false : $PAGE->theme->settings->vk;
$haspinterest   = (empty($PAGE->theme->settings->pinterest)) ? false : $PAGE->theme->settings->pinterest;
$hasinstagram   = (empty($PAGE->theme->settings->instagram)) ? false : $PAGE->theme->settings->instagram;
$hasskype       = (empty($PAGE->theme->settings->skype)) ? false : $PAGE->theme->settings->skype;
$haswebsite     = (empty($PAGE->theme->settings->website)) ? false : $PAGE->theme->settings->website;
$hasblog        = (empty($PAGE->theme->settings->blog)) ? false : $PAGE->theme->settings->blog;
$hasvimeo       = (empty($PAGE->theme->settings->vimeo)) ? false : $PAGE->theme->settings->vimeo;
$hastumblr      = (empty($PAGE->theme->settings->tumblr)) ? false : $PAGE->theme->settings->tumblr;
$hassocial1     = (empty($PAGE->theme->settings->social1)) ? false : $PAGE->theme->settings->social1;
$social1icon    = (empty($PAGE->theme->settings->socialicon1)) ? 'globe' : $PAGE->theme->settings->socialicon1;
$hassocial2     = (empty($PAGE->theme->settings->social2)) ? false : $PAGE->theme->settings->social2;
$social2icon    = (empty($PAGE->theme->settings->socialicon2)) ? 'globe' : $PAGE->theme->settings->socialicon2;
$hassocial3     = (empty($PAGE->theme->settings->social3)) ? false : $PAGE->theme->settings->social3;
$social3icon    = (empty($PAGE->theme->settings->socialicon3)) ? 'globe' : $PAGE->theme->settings->socialicon3;

// If any of the above social networks are true, sets this to true.
$hassocialnetworks = ($hasfacebook || $hastwitter || $hasgoogleplus || $hasflickr || $hasinstagram
    || $hasvk || $haslinkedin || $haspinterest || $hasskype || $haslinkedin || $haswebsite || $hasyoutube
    || $hasblog ||$hasvimeo || $hastumblr || $hassocial1 || $hassocial2 || $hassocial3) ? true : false;
?>
<div class="col-md-4 pull-right">
    <?php
    if ($hassocialnetworks) {
        echo '<ul class="socials unstyled">';
        if ($hasblog) {
            echo '<a href="'.$hasblog.'" class="socialicon blog" title="'.$hasblog.'" alt="'.$hasblog.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-bookmark fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hasblog.'</span>';
            echo '</a>';
        }
        if ($haswebsite) {
            echo '<a href="'.$haswebsite.'" class="socialicon website" title="'.$haswebsite.'" alt="'.$haswebsite.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-globe fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$haswebsite.'</span>';
            echo '</a>';
        }
        if ($hasgoogleplus) {
            echo '<a href="'.$hasgoogleplus.'" class="socialicon googleplus" title="'.$hasgoogleplus.'" alt="'.$hasgoogleplus.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-google-plus fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hasgoogleplus.'</span>';
            echo '</a>';
        }
        if ($hastwitter) {
            echo '<a href="'.$hastwitter.'" class="socialicon twitter" title="'.$hastwitter.'" alt="'.$hastwitter.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-twitter fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hastwitter.'</span>';
            echo '</a>';
        }
        if ($hasfacebook) {
            echo '<a href="'.$hasfacebook.'" class="socialicon facebook" title="'.$hasfacebook.'" alt="'.$hasfacebook.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-facebook fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hasfacebook.'</span>';
            echo '</a>';
        }
        if ($haslinkedin) {
            echo '<a href="'.$haslinkedin.'" class="socialicon linkedin" title="'.$haslinkedin.'" alt="'.$haslinkedin.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-linkedin fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$haslinkedin.'</span>';
            echo '</a>';
        }
        if ($hasyoutube) {
            echo '<a href="'.$hasyoutube.'" class="socialicon youtube" title="'.$hasyoutube.'" alt="'.$hasyoutube.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-youtube fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hasyoutube.'</span>';
            echo '</a>';
        }
        if ($hasvimeo) {
            echo '<a href="'.$hasvimeo.'" class="socialicon vimeo" title="'.$hasvimeo.'" alt="'.$hasvimeo.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-vimeo-square fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hasvimeo.'</span>';
            echo '</button>';
        }
        if ($hasflickr) {
            echo '<a href="'.$hasflickr.'" class="socialicon flickr" title="'.$hasflickr.'" alt="'.$hasflickr.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-flickr fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hasflickr.'</span>';
            echo '</a>';
        }
        if ($haspinterest) {
            echo '<a href="'.$haspinterest.'" class="socialicon pinterest" title="'.$haspinterest.'" alt="'.$haspinterest.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-pinterest fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$haspinterest.'</span>';
            echo '</a>';
        }
        if ($hastumblr) {
            echo '<a href="'.$hastumblr.'" class="socialicon tumblr" title="'.$hastumblr.'" alt="'.$hastumblr.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-tumblr fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hastumblr.'</span>';
            echo '</a>';
        }
        if ($hasinstagram) {
            echo '<a href="'.$hasinstagram.'" class="socialicon instagram" title="'.$hasinstagram.'" alt="'.$hasinstagram.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-instagram fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hasinstagram.'</span>';
            echo '</a>';
        }
        if ($hasvk) {
            echo '<a href="'.$hasvk.'" class="socialicon vk" title="'.$hasvk.'" alt="'.$hasvk.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-vk fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hasvk.'</span>';
            echo '</a>';
        }
        if ($hasskype) {
            echo '<a href="skype:'.$hasskype.'?call" class="socialicon skype" title="'.$hasskype.'" alt="'.$hasskype.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-skype fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hasskype.'</span>';
            echo '</a>';
        }
        if ($hassocial1) {
            echo '<a href="'.$hassocial1.'" class="socialicon skype" title="'.$hassocial1.'" alt="'.$hassocial1.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-'.$social1icon.' fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hassocial1.'</span>';
            echo '</a>';
        }
        if ($hassocial2) {
            echo '<a href="'.$hassocial2.'" class="socialicon skype" title="'.$hassocial2.'" alt="'.$hassocial2.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-'.$social2icon.' fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hassocial2.'</span>';
            echo '</a>';
        }
        if ($hassocial3) {
            echo '<a href="'.$hassocial3.'" class="socialicon skype" title="'.$hassocial3.'" alt="'.$hassocial3.'">';
            echo '<span class="fa-stack fa-2x">';
            echo '<i class="fa fa-square fa-stack-2x"></i>';
            echo '<i class="fa fa-'.$social3icon.' fa-inverse fa-stack-1x"></i>';
            echo '</span>';
            echo '<span class="sr-only">'.$hassocial3.'</span>';
            echo '</a>';
        }
        echo '</ul>';
    } ?>
</div>
