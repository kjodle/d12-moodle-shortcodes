<?php

class filter_d12shortcodes extends moodle_text_filter {
    public function filter($text, array $options = array()) {
        return str_replace(
			array('[wi]', '[/wi]'),
			array('<div class="wi">', '</div>'),
			$text
			);
	}
}
