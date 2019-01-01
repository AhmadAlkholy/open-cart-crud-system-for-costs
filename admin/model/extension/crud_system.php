<?php

class ModelExtensionCrudSystem extends Model {

	public function install() {
		// Register the event triggers
		$this->load->model('setting/event');

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "costs` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `description` text NOT NULL,
		  `value` int(11) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");
	}
}