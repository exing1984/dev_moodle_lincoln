<?php
defined('MOODLE_INTERNAL') || die();
/*
*	The HTML block class
*/
class block_html_button extends block_base {

	function init() {
		$this->title = get_string('pluginname','block_html_button');
	}
	
	public function specialization() {
		if (!empty($this->config->title)) {
			$this->title = $this->config->title;
		} else {
			$this->config->title = get_string('blocktitle', 'block_html_button');
		}
		
		if(empty($this->config->first_content)){
			$this->config->first_content = get_string('first_content','block_html_button');
		}
		
		if(empty($this->config->second_content)){
			$this->config->second_content = get_string('second_content','block_html_button');
		}
		
	}
	
	public function instance_allow_multiple() {
        return true;
    }

    function has_config() {
        return true;
    }
	
	public function hide_header() {
	  return false;
	}
	
    function applicable_formats() {
        return array('all' => true, 'my' => false, 'tag' => false);
    }

    function instance_allow_config() {
        return true;
    }

    function get_content() {
        global $CFG;
		
		if ($this->content !== NULL) {
            return $this->content;
        }
		
		$this->content = new stdClass();
        $this->content->text = '';
        $this->content->footer = '';
		
		$this->content->text .= "<div class=\"button_container\">";
		$this->content->text .= 	"<div class=\"container_content_text\">";
		$this->content->text .= 		"<div class=\"first_content\">".$this->config->first_content."</div>";
		$this->content->text .=			"<div class=\"second_content\">".$this->config->second_content."</div>";
		$this->content->text .= 	"</div>";
		$this->content->text .= 	"<div class=\"content_img\">";
		$this->content->text .=			"<a href=\"/my\" class=\"mouse_over\" target=\"_slef\"></a>";
		$this->content->text .= 	"</div>";
		$this->content->text .= "</div>";
		
		return $this->content;
	}
}