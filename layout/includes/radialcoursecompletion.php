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
 * Theme Flexibase coursegrade includes file.
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
?>
<!-- Find completion numbers -->
    <?php
    global $USER, $COURSE, $DB, $CFG;
    $table1 = $CFG->prefix.'course_modules';
    $table2 = 'course_modules_completion';
    $where2 = 'userid = '.$USER->id.' AND coursemoduleid IN (SELECT id FROM '.$table1.' WHERE course = '.$COURSE->id.')';
    $completions = $DB->count_records_select($table2, $where2);
    $table3 = 'course_modules';
    $where3 = 'course = '.$COURSE->id.' AND completion > 0';
    $totalcompletions = $DB->count_records_select($table3, $where3);
    $percentagecompletions = 0;
    if ($totalcompletions > 0) {
        $percentagecompletions = $completions/$totalcompletions*100;
    }
    ?>
    <div id='percentagecompletions' style='display:none;'>
        <?php echo $percentagecompletions; ?>
    </div>

    <!-- Display radial completion -->
    <div class="radialcompletiondisplay">
        <h4>Activity<br />completion</h4>
        <div class="radial-progress" data-progress="0">
            <div class="circle">
                <div class="mask full">
                    <div class="fill"></div>
                </div>
                <div class="mask half">
                    <div class="fill"></div>
                    <div class="fill fix"></div>
                </div>
                <div class="shadow"></div>
            </div>
            <div class="inset">
                <div class="percentage">
                    <div class="numbers" style="visibility:hidden"><span>-</span><span>0%</span><span>1%</span><span>2%</span><span>3%</span><span>4%</span><span>5%</span><span>6%</span><span>7%</span><span>8%</span><span>9%</span><span>10%</span><span>11%</span><span>12%</span><span>13%</span><span>14%</span><span>15%</span><span>16%</span><span>17%</span><span>18%</span><span>19%</span><span>20%</span><span>21%</span><span>22%</span><span>23%</span><span>24%</span><span>25%</span><span>26%</span><span>27%</span><span>28%</span><span>29%</span><span>30%</span><span>31%</span><span>32%</span><span>33%</span><span>34%</span><span>35%</span><span>36%</span><span>37%</span><span>38%</span><span>39%</span><span>40%</span><span>41%</span><span>42%</span><span>43%</span><span>44%</span><span>45%</span><span>46%</span><span>47%</span><span>48%</span><span>49%</span><span>50%</span><span>51%</span><span>52%</span><span>53%</span><span>54%</span><span>55%</span><span>56%</span><span>57%</span><span>58%</span><span>59%</span><span>60%</span><span>61%</span><span>62%</span><span>63%</span><span>64%</span><span>65%</span><span>66%</span><span>67%</span><span>68%</span><span>69%</span><span>70%</span><span>71%</span><span>72%</span><span>73%</span><span>74%</span><span>75%</span><span>76%</span><span>77%</span><span>78%</span><span>79%</span><span>80%</span><span>81%</span><span>82%</span><span>83%</span><span>84%</span><span>85%</span><span>86%</span><span>87%</span><span>88%</span><span>89%</span><span>90%</span><span>91%</span><span>92%</span><span>93%</span><span>94%</span><span>95%</span><span>96%</span><span>97%</span><span>98%</span><span>99%</span><span>100%</span></div>
                </div>
            </div>
        </div>
    </div>

    <script src="//cdnjs.cloudflare.com/ajax/libs/less.js/1.6.1/less.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        $(function(){
            window.randomize = function() {
            var div = document.getElementById("percentagecompletions");
            var myCompletion = div.textContent;
            $('.radial-progress').attr('data-progress', Math.floor(myCompletion));
            $('.numbers').css('visibility','visible');
        }
        setTimeout(window.randomize, 200);
        $('.radial-progress').click(window.randomize);
        });

     </script>
