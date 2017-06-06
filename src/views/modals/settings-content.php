<div class="modal fade" id="settings">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4 class="modal-title"><?php echo $service ?> – Custom Settings</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" role="form" id="frmSettings" method="post">
                    <input type="hidden" name="api_type" value="<?php echo $serviceShortcut ?>">
                    <input type="hidden" name="api_type" value="regions">
                    <input type="hidden" name="itemsConfig" id="itemsConfig" value="">

                    <div class="panel panel-info">
                        <div class="panel-heading"><h3>Region Settings</h3></div>
                        <div class="panel-body">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="regionSelector" class="col-sm-6 control-label">Regions</label>
                                    <div class="col-sm-6">
                                        <select id="regionSelector" name="regionSelector">
                                            <optgroup label="Learnosity Defaults" id="defaultRegions"></optgroup>
                                            <optgroup label="Sample Customisations" id="customRegions"></optgroup>
                                        </select>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading"><h3>Navigation/Control Settings</h3></div>
                            <div class="panel-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="show_intro" class="col-sm-6 control-label">Intro Item</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[show_intro]" value="true"<?php if (isset($nav['show_intro']) && $nav['show_intro'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[show_intro]" value="false"<?php if (isset($nav['show_intro']) && $nav['show_intro'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show_outro" class="col-sm-6 control-label">Outro Item</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[show_outro]" value="true"<?php if (isset($nav['show_outro']) && $nav['show_outro'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[show_outro]" value="false"<?php if (isset($nav['show_outro']) && $nav['show_outro'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="submit_criteria" class="col-sm-6 control-label">Submit Criteria</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="configuration[submit_criteria][use_submit_criteria]" value="true"<?php if (isset($con['configuration']['submit_criteria']) && $con['configuration']['submit_criteria'] !== false) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="configuration[submit_criteria][use_submit_criteria]" value="false"<?php if (isset($con['configuration']['submit_criteria']) === false || $con['configuration']['submit_criteria'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="type" class="col-sm-6 control-label">Submit Criteria Type</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="configuration[submit_criteria][type]" value="attempted"<?php if (isset($con['configuration']['submit_criteria']['type']) && $con['configuration']['submit_criteria']['type'] === 'attempted') { echo ' checked'; }; ?>> Attempted &nbsp;
                                            <input type="radio" name="configuration[submit_criteria][type]" value="valid"<?php if (isset($con['configuration']['submit_criteria']['type']) && $con['configuration']['submit_criteria']['type'] === 'valid') { echo ' checked'; }; ?>> Valid
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="threshold" class="col-sm-6 control-label">Submit Criteria Threshold</label>
                                        <div class="col-sm-3">
                                            <input type="number" min="0" max="100" step="10" class="form-control" name="configuration[submit_criteria][threshold]" value="<?php if (isset($con['configuration']['submit_criteria']['threshold'])) { echo $con['configuration']['submit_criteria']['threshold']; } else { echo '0'; } ?>">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="warning_on_change" class="col-sm-6 control-label">Warning if question(s) not attempted</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[warning_on_change]" value="true"<?php if (isset($nav['warning_on_change']) && $nav['warning_on_change'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[warning_on_change]" value="false"<?php if (isset($nav['warning_on_change']) && $nav['warning_on_change'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="skip_submit_confirmation" class="col-sm-6 control-label">Skip confirmation window on submit</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[skip_submit_confirmation]" value="true"<?php if (isset($nav['skip_submit_confirmation']) && $nav['skip_submit_confirmation'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[skip_submit_confirmation]" value="false"<?php if (isset($nav['skip_submit_confirmation']) && $nav['skip_submit_confirmation'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="scroll_to_test" class="col-sm-6 control-label">Scroll to the test element on test start</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[scroll_to_test]" value="true"<?php if (isset($nav['scroll_to_test']) && $nav['scroll_to_test'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[scroll_to_test]" value="false"<?php if (isset($nav['scroll_to_test']) && $nav['scroll_to_test'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="scroll_to_top" class="col-sm-6 control-label">Scroll to Top on item change</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[scroll_to_top]" value="true"<?php if (isset($nav['scroll_to_top']) && $nav['scroll_to_top'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[scroll_to_top]" value="false"<?php if (isset($nav['scroll_to_top']) && $nav['scroll_to_top'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ignore_question_attributes" class="col-sm-6 control-label">Suppress validation object</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="ignore_question_attributes[]" value="validation"<?php if (isset($con['ignore_question_attributes']) && in_array('validation', $con['ignore_question_attributes'])) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="ignore_question_attributes[]" value=""<?php if (!isset($con['ignore_question_attributes']) || !in_array('validation', $con['ignore_question_attributes'])) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading"><h3>Accessibility Settings</h3></div>
                            <div class="panel-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="show_colourscheme" class="col-sm-6 control-label">Show Colour Scheme</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[show_accessibility][show_colourscheme]" value="true"<?php if (isset($nav['show_accessibility']) && isset($nav['show_accessibility']['show_colourscheme']) && $nav['show_accessibility']['show_colourscheme'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[show_accessibility][show_colourscheme]" value="false"<?php if (isset($nav['show_accessibility']) && isset($nav['show_accessibility']['show_colourscheme']) && $nav['show_accessibility']['show_colourscheme'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show_fontsize" class="col-sm-6 control-label">Show Font Size</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[show_accessibility][show_fontsize]" value="true"<?php if (isset($nav['show_accessibility']) && isset($nav['show_accessibility']['show_fontsize']) && $nav['show_accessibility']['show_fontsize'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[show_accessibility][show_fontsize]" value="false"<?php if (isset($nav['show_accessibility']) && isset($nav['show_accessibility']['show_fontsize']) && $nav['show_accessibility']['show_fontsize'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show_zoom" class="col-sm-6 control-label">Show Zoom</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[show_accessibility][show_zoom]" value="true"<?php if (isset($nav['show_accessibility']) && isset($nav['show_accessibility']['show_zoom']) && $nav['show_accessibility']['show_zoom'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[show_accessibility][show_zoom]" value="false"<?php if (isset($nav['show_accessibility']) && isset($nav['show_accessibility']['show_zoom']) && $nav['show_accessibility']['show_zoom'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel panel-info">
                            <div class="panel-heading"><h3>UI / Time Settings</h3></div>
                            <div class="panel-body">

                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="show_progress" class="col-sm-6 control-label">Progress Bar</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[show_progress]" value="true"<?php if (isset($nav['show_progress']) && $nav['show_progress'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[show_progress]" value="false"<?php if (isset($nav['show_progress']) && $nav['show_progress'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show_time" class="col-sm-6 control-label">Timer</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="time[show_time]" value="true"<?php if (isset($time['show_time']) && $time['show_time'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="time[show_time]" value="false"<?php if (isset($time['show_time']) && $time['show_time'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="configuration[reading_mode][reading_time]" class="col-sm-6 control-label">Reading Time (sec)</label>
                                        <div class="col-sm-6">
                                            <input type="number" min="0" step="1" class="form-control" name="configuration[reading_mode][reading_time]" value="<?php if (isset($con['configuration']['reading_mode']['reading_time'])) { echo $con['configuration']['reading_mode']['reading_time']; } else { echo '0'; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="configuration[reading_mode][warning_time]" class="col-sm-6 control-label">Warning Reading Time (sec)</label>
                                        <div class="col-sm-6">
                                            <input type="number" min="0" step="1" class="form-control" name="configuration[reading_mode][warning_time]" value="<?php if (isset($con['configuration']['reading_mode']['warning_time'])) { echo $con['configuration']['reading_mode']['warning_time']; } else { echo '0'; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-sm-6 control-label">Go To First Item When Reading Time Over</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="configuration[reading_mode][goto_first_item_on_reading_time_completion]" value="true"<?php if (isset($con['configuration']['reading_mode']['goto_first_item_on_reading_time_completion']) && $con['configuration']['reading_mode']['goto_first_item_on_reading_time_completion'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="configuration[reading_mode][goto_first_item_on_reading_time_completion]" value="false"<?php if (isset($con['configuration']['reading_mode']['goto_first_item_on_reading_time_completion']) && $con['configuration']['reading_mode']['goto_first_item_on_reading_time_completion'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label for="show_itemcount" class="col-sm-6 control-label">Item Count</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[show_itemcount]" value="true"<?php if (isset($nav['show_itemcount']) && $nav['show_itemcount'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[show_itemcount]" value="false"<?php if (isset($nav['show_itemcount']) && $nav['show_itemcount'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="question_count_option" class="col-sm-6 control-label">Item Count based off Questions</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[item_count][question_count_option]" value="true"<?php if (isset($nav['item_count']['question_count_option']) && $nav['item_count']['question_count_option'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[item_count][question_count_option]" value="false"<?php if (isset($nav['item_count']['question_count_option']) && $nav['item_count']['question_count_option'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="idle_timeout" class="col-sm-6 control-label">Idle Timout Warning</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="configuration[idle_timeout][use_idle_timeout]" value="true"<?php if (isset($con['configuration']['idle_timeout']) &&  $con['configuration']['idle_timeout'] !== false) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="configuration[idle_timeout][use_idle_timeout]" value="false"<?php if (isset($con['configuration']['idle_timeout']) === false || $con['configuration']['idle_timeout'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="interval" class="col-sm-6 control-label">Idle Timeout Interval (sec)</label>
                                        <div class="col-sm-3">
                                            <input type="number" min="0" step="1" class="form-control" name="configuration[idle_timeout][interval]" value="<?php if (isset($con['configuration']['idle_timeout']['interval'])) { echo $con['configuration']['idle_timeout']['interval']; } else { echo '0'; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="countdown_time" class="col-sm-6 control-label">Idle/Remote Control Timeout Countdown (sec)</label>
                                        <div class="col-sm-3">
                                            <input type="number" min="0" step="1" class="form-control" name="configuration[idle_timeout][countdown_time]" value="<?php if (isset($con['configuration']['idle_timeout']['countdown_time'])) { echo $con['configuration']['idle_timeout']['countdown_time']; } else { echo '0'; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="auto_save" class="col-sm-6 control-label">Auto Save</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[auto_save][use_auto_save]" value="true"<?php if (isset($nav['auto_save']) && $nav['auto_save'] !== false) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[auto_save][use_auto_save]" value="false"<?php if (isset($nav['auto_save']) === false || $nav['auto_save'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="ui" class="col-sm-6 control-label">Auto Save UI Indicator</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[auto_save][ui]" value="true"<?php if (isset($nav['auto_save']['ui']) && $nav['auto_save']['ui'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[auto_save][ui]" value="false"<?php if (isset($nav['auto_save']['ui']) && $nav['auto_save']['ui'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="saveIntervalDuration" class="col-sm-6 control-label">Auto Save Interval (sec)</label>
                                        <div class="col-sm-3">
                                            <input type="number" min="0" step="1" class="form-control" name="navigation[auto_save][saveIntervalDuration]" value="<?php if (isset($nav['auto_save']['saveIntervalDuration'])) { echo $nav['auto_save']['saveIntervalDuration']; } else { echo '0'; } ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="scrolling_indicator" class="col-sm-6 control-label">Scrolling Indicator<br>(Horizontal Fixed layout only)</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[scrolling_indicator]" value="true"<?php if (isset($nav['scrolling_indicator']) && $nav['scrolling_indicator'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[scrolling_indicator]" value="false"<?php if (isset($nav['scrolling_indicator']) && $nav['scrolling_indicator'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="max_time" class="col-sm-6 control-label">Assessment Time (sec)</label>
                                        <div class="col-sm-3">
                                            <input type="number" min="100" max="1000" step="100" class="form-control" name="time[max_time]" value="<?php if (isset($time['max_time'])) { echo $time['max_time']; }; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="warning_time" class="col-sm-6 control-label">End Assessment Warning Time (sec)</label>
                                        <div class="col-sm-3">
                                            <input type="number" min="100" max="1000" step="100" class="form-control" name="time[warning_time]" value="<?php if (isset($time['warning_time'])) { echo $time['warning_time']; }; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show_time" class="col-sm-6 control-label">Limit Type</label>
                                        <div class="col-sm-6">
                                            <select id="limit_type" name="time[limit_type]">
                                                <option value="soft"<?php if (isset($con['time']['limit_type']) && $con['time']['limit_type'] === 'soft') { echo ' selected'; }; ?>>Soft</option>
                                                <option value="hard"<?php if (isset($con['time']['limit_type']) && $con['time']['limit_type'] === 'hard') { echo ' selected'; }; ?>>Hard</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="fontsize" class="col-sm-6 control-label">Font Size</label>
                                        <div class="col-sm-6">
                                            <select id="fontsize" name="configuration[fontsize]">
                                                <option value="small"<?php if (isset($con['configuration']['fontsize']) && $con['configuration']['fontsize'] === 'small') { echo ' selected'; }; ?>>Small</option>
                                                <option value="normal"<?php if (isset($con['configuration']['fontsize']) && $con['configuration']['fontsize'] === 'normal') { echo ' selected'; }; ?>>Normal</option>
                                                <option value="large"<?php if (isset($con['configuration']['fontsize']) && $con['configuration']['fontsize'] === 'large') { echo ' selected'; }; ?>>Large</option>
                                                <option value="xlarge"<?php if (isset($con['configuration']['fontsize']) && $con['configuration']['fontsize'] === 'xlarge') { echo ' selected'; }; ?>>X Large</option>
                                                <option value="xxlarge"<?php if (isset($con['configuration']['fontsize']) && $con['configuration']['fontsize'] === 'xxlarge') { echo ' selected'; }; ?>>XX Large</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="transition" class="col-sm-6 control-label">Item Transition</label>
                                        <div class="col-sm-6">
                                            <select id="transition" name="navigation[transition]">
                                                <option value="fade"<?php if (isset($nav['transition']) && $nav['transition'] === 'fade') { echo ' selected'; }; ?>>Fade</option>
                                                <option value="toggle"<?php if (isset($nav['transition']) && $nav['transition'] === 'toggle') { echo ' selected'; }; ?>>Toggle</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="transition-speed" class="col-sm-6 control-label">Transition Speed (ms)</label>
                                        <div class="col-sm-3">
                                            <input type="number" min="100" max="1000" step="100" class="form-control" name="navigation[transition_speed]" value="<?php if (isset($nav['transition_speed'])) { echo $nav['transition_speed']; }; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="transition-speed" class="col-sm-6 control-label">Custom Stylesheet</label>
                                        <div class="col-sm-6">
                                            <input type="text" class="form-control" name="configuration[stylesheet]" value="<?php if (isset($con['configuration']['stylesheet'])) { echo $con['configuration']['stylesheet']; }; ?>">
                                        </div>
                                        <div class="col-sm-12">
                                            <p class="help-block pull-right">eg http://demos.learnosity.com/assessment/items/custom.css</p>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading"><h3>Administration Panel Settings</h3></div>
                            <div class="panel-body">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="show_save" class="col-sm-6 control-label">Save</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="administration[options][show_save]" value="true"<?php if (isset($admin['options']['show_save']) && $admin['options']['show_save'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="administration[options][show_save]" value="false"<?php if (isset($admin['options']['show_save']) && $admin['options']['show_save'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show_exit" class="col-sm-6 control-label">Exit</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="administration[options][show_exit]" value="true"<?php if (isset($admin['options']['show_exit']) && $admin['options']['show_exit'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="administration[options][show_exit]" value="false"<?php if (isset($admin['options']['show_exit']) && $admin['options']['show_exit'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show_extend" class="col-sm-6 control-label">Extend</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="administration[options][show_extend]" value="true"<?php if (isset($admin['options']['show_extend']) && $admin['options']['show_extend'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="administration[options][show_extend]" value="false"<?php if (isset($admin['options']['show_extend']) && $admin['options']['show_extend'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show_extend" class="col-sm-6 control-label">Enable opening from icon</label>
                                        <div class="col-sm-6">
                                            <input type="radio" name="navigation[show_configuration]" value="true"<?php if (isset($nav['show_configuration']) && $nav['show_configuration'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                            <input type="radio" name="navigation[show_configuration]" value="false"<?php if (isset($nav['show_configuration']) && $nav['show_configuration'] === false) { echo ' checked'; }; ?>> Disable
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6"></div>
                            </div>
                        </div>

                        <div class="panel panel-info">
                            <div class="panel-heading"><h3>Title Settings</h3></div>
                            <div class="panel-body">
                                <div class="form-group">
                                    <label for="show_title" class="col-sm-2 control-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="radio" name="navigation[show_title]" value="true"<?php if (isset($nav['show_title']) && $nav['show_title'] === true) { echo ' checked'; }; ?>> Enable &nbsp;
                                        <input type="radio" name="navigation[show_title]" value="false"<?php if (isset($nav['show_title']) && $nav['show_title'] === false) { echo ' checked'; }; ?>> Disable
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="title" class="col-sm-2 control-label">Activity Title</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="title" id="title" placeholder="Override the default activity name" value="<?php if (isset($con['title'])) { echo $con['title']; }; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="subtitle" class="col-sm-2 control-label">Activity Subtitle</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="subtitle" id="subtitle" placeholder="Subtitle of the activity" value="<?php if (isset($con['subtitle'])) { echo $con['subtitle']; }; ?>">
                                    </div>
                                </div>
                            </div>
                        </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="document.getElementById('frmSettings').submit();">Initialise <?php echo $service ?> &raquo;</button>
            </div>
        </div>
    </div>
</div>
<script>
    var currentRegion,
        regions;

    regions = {
        "minimal": {
            "form": {
                "label": "Minimal",
                "value": "minimal",
                "optgroup": "customRegions"
            },
            "data": {
                "config": {
                    "regions": {
                        "top-right": [
                            {
                                "type": "pause_button"
                            },
                            {
                                "type": "timer_element"
                            }
                        ],
                        "bottom": [
                            {
                                "type": "previous_button",
                                "position": "left"
                            },
                            {
                                "type": "next_button",
                                "position": "right"
                            },
                            {
                                "type": "save_button",
                                "position": "right"
                            }
                        ]
                    },
                    "ui_style": "horizontal"
                }
            }
        },
        "vertical-toolbar": {
            "form": {
                "label": "Vertical Toolbar",
                "value": "vertical-toolbar",
                "optgroup": "customRegions"
            },
            "data": {
                "config": {
                    "regions": {
                        "right": [
                            {
                                "type": "flagitem_button"
                            },
                            {
                                "type": "masking_button"
                            },
                            {
                                "type": "reviewscreen_button"
                            },
                            {
                                "type": "separator_element"
                            },
                            {
                                "type": "save_button"
                            },
                            {
                                "type": "separator_element"
                            },
                            {
                                "type": "previous_button"
                            },
                            {
                                "type": "next_button"
                            }
                        ]
                    }
                }
            }
        },
        "main": {
            "form": {
                "label": "Main",
                "value": "main",
                "optgroup": "defaultRegions"
            },
            "data": {
                "config": {
                    "regions":"main"
                }
            }
        },
        "horizontal": {
            "form": {
                "label": "Horizontal",
                "value": "horizontal",
                "optgroup": "defaultRegions"
            },
            "data": {
                "config": {
                    "regions": "horizontal"
                }
            }
        },
        "horizontal-fixed": {
            "form": {
                "label": "Horizontal Fixed",
                "value": "horizontal-fixed",
                "optgroup": "defaultRegions"
            },
            "data": {
                "config": {
                    "regions": "horizontal-fixed"
                }

            }
        }
    };

    currentRegion = <?php echo json_encode($request['config']['regions']); ?>;

    function loadRegions (currentRegion) {
        $.each(regions, function (i, val) {
            var selected = (JSON.stringify(currentRegion) === JSON.stringify(val['data'].config.regions)) ? ' selected': '';
            $('#' + val['form']['optgroup']).append('<option value="' + val['form']['value'] + '" ' + selected + '>' + val['form']['label'] + '</option>');
            selected = '';
        });
    }

    function setRegionValue () {
        var selectedRegion = $('option:selected', this).val();
        $('#itemsConfig').val(JSON.stringify(regions[selectedRegion]['data']));
    }

    $(function() {
        loadRegions(currentRegion);
        $('#regionSelector').on('change', setRegionValue);
    });
</script>
