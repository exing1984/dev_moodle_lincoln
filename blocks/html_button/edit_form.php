<?php

class block_html_button_edit_form extends block_edit_form {
	
	protected function specific_definition($mform) {
		// Section header title according to language file.
		$mform->addElement('header', 'configheader', get_string('blocksettings', 'block'));
		
		// A sample string variable with a default value.
        $mform->addElement('text', 'config_title', get_string('config_title', 'block_html_button'));
        $mform->setDefault('config_title', get_string('blocktitle','block_html_button'));
		$mform->setType('config_title', PARAM_TEXT);
		
		$mform->addElement('text', 'config_first_content', get_string('config_first_content', 'block_html_button'));
        $mform->setDefault('config_first_content', get_string('first_content', 'block_html_button'));
		$mform->setType('config_first_content', PARAM_TEXT);
		
		$mform->addElement('text', 'config_second_content', get_string('config_second_content', 'block_html_button'));
        $mform->setDefault('config_second_content', get_string('second_content', 'block_html_button'));
		$mform->setType('config_second_content', PARAM_TEXT);
	}
	
}