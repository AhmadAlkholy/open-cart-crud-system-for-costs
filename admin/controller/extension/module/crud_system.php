<?php

class ControllerextensionmoduleCrudSystem  extends Controller
{
	private $error = []; // This is used to set the errors, if any.
	private $data = [];

	public function index() {   // Default function 
	    $this->language->load('extension/module/crud_system'); // Loading the language file of crud_system 
	 
	    $this->document->setTitle($this->language->get('heading_title'));
	 
	    $this->load->model('setting/setting');	 
	 	$data = [];

	    if (($this->request->server['REQUEST_METHOD'] == 'POST') && $this->validate()) { // Start If: Validates and check if data is coming by save (POST) method
	        $this->model_setting_setting->editSetting('crud_system', $this->request->post);      // Parse all the coming data to Setting Model to save it in database.
	 
	        $this->session->data['success'] = $this->language->get('text_success'); // To display the success text on data save
	 
	        $this->redirect($this->url->link('extension/module', 'user_token=' . $this->session->data['user_token'], 'SSL')); // Redirect to the Module Listing
	    } // End If
	 
	    /*Assign the language data for parsing it to view*/
	    $this->data['heading_title'] = $this->language->get('heading_title');
	 
	    $this->data['text_enabled'] = $this->language->get('text_enabled');
	    $this->data['text_disabled'] = $this->language->get('text_disabled');
	    $this->data['text_content_top'] = $this->language->get('text_content_top');
	    $this->data['text_content_bottom'] = $this->language->get('text_content_bottom');      
	    $this->data['text_column_left'] = $this->language->get('text_column_left');
	    $this->data['text_column_right'] = $this->language->get('text_column_right');
	 
	    $this->data['entry_code'] = $this->language->get('entry_code');
	    $this->data['entry_layout'] = $this->language->get('entry_layout');
	    $this->data['entry_position'] = $this->language->get('entry_position');
	    $this->data['entry_status'] = $this->language->get('entry_status');
	    $this->data['entry_sort_order'] = $this->language->get('entry_sort_order');
	 
	    $this->data['button_save'] = $this->language->get('button_save');
	    $this->data['button_cancel'] = $this->language->get('button_cancel');
	    /*$this->data['button_add_module'] = $this->language->get('button_add_module');
	    $this->data['button_remove'] = $this->language->get('button_remove');*/
	     
	 
	    /*This Block returns the warning if any*/
	    if (isset($this->error['warning'])) {
	        $this->data['error_warning'] = $this->error['warning'];
	    } else {
	        $this->data['error_warning'] = '';
	    }
	    /*End Block*/
	 
	    /*This Block returns the error code if any*/
	    if (isset($this->error['code'])) {
	        $this->data['error_code'] = $this->error['code'];
	    } else {
	        $this->data['error_code'] = '';
	    }
	    /*End Block*/
	 
	 
	    /* Making of Breadcrumbs to be displayed on site*/
	    $this->data['breadcrumbs'] = array();
	 
	    $this->data['breadcrumbs'][] = array(
	        'text'      => $this->language->get('text_home'),
	        'href'      => $this->url->link('common/home', 'user_token=' . $this->session->data['user_token'], 'SSL'),
	        'separator' => false
	    );
	 
	    $this->data['breadcrumbs'][] = array(
	        'text'      => $this->language->get('text_module'),
	        'href'      => $this->url->link('extension/module', 'user_token=' . $this->session->data['user_token'], 'SSL'),
	        'separator' => ' :: '
	    );
	 
	    $this->data['breadcrumbs'][] = array(
	        'text'      => $this->language->get('heading_title'),
	        'href'      => $this->url->link('module/crud_system', 'user_token=' . $this->session->data['user_token'], 'SSL'),
	        'separator' => ' :: '
	    );
	 
	    /* End Breadcrumb Block*/
	     
	    /* This block checks, if the hello world text field is set it parses it to view otherwise get the default hello world text field from the database and parse it*/
	 
	    if (isset($this->request->post['text_field'])) {
	        $this->data['field'] = $this->request->post['text_field'];
	    } else {
	        $this->data['text_field'] = $this->config->get('text_field');
	    }   
	    /* End Block*/
	 
	    $this->data['modules'] = array();
	 
	    /* This block parses the Module Settings such as Layout, Position,Status & Order Status to the view*/
	    if (isset($this->request->post['crud_system_module'])) {
	        $this->data['modules'] = $this->request->post['crud_system_module'];
	    } elseif ($this->config->get('crud_system_module')) { 
	        $this->data['modules'] = $this->config->get('crud_system_module');
	    }
	    /* End Block*/         
	 
	    $query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "costs` ORDER BY id");
	    $data['costs'] = $query->rows;


	    $data['action'] = $this->url->link('module/helloworld', 'user_token=' . $this->session->data['user_token'], true); 
	 
	    $data['cancel'] = $this->url->link('extension/module', 'user_token=' . $this->session->data['user_token'], true);
	    $data['add_link'] = $this->url->link('extension/module/crud_system/add', 'user_token=' . $this->session->data['user_token'] , true);

	    $data['edit_link'] = $this->url->link('extension/module/crud_system/add', 'user_token=' . $this->session->data['user_token'] . '&cost_id=' , true);

	    $data['delete_link'] = $this->url->link('extension/module/crud_system/delete', 'user_token=' . $this->session->data['user_token']  , true);

	 	$this->load->model('design/banner');

		$data['banners'] = $this->model_design_banner->getBanners();

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

	    $this->response->setOutput($this->load->view('extension/module/costs_crud/show_data', $data)); // Rendering the Output
	}

	public function add(){

		$data['header'] = $this->load->controller('common/header');
		$data['column_left'] = $this->load->controller('common/column_left');
		$data['footer'] = $this->load->controller('common/footer');

		if (isset($this->request->get['cost_id'])) {
			$query = $this->db->query("SELECT * FROM `" . DB_PREFIX . "costs` WHERE id=".$this->request->get['cost_id']);
	    	$data['costs'] = $query->rows[0];

			$data['submit'] = "Update Cost";
			$data['action'] = $this->url->link('extension/module/crud_system/save', 'user_token=' . $this->session->data['user_token']. '&cost_id='. $data['costs']['id'], true);
			$data['edit'] = true;
		}
		else{
			$data['submit'] = "Create Cost";
			$data['action'] = $this->url->link('extension/module/crud_system/save/', 'user_token=' . $this->session->data['user_token'], true);
			$data['edit'] = false;
		}
		
	    $this->response->setOutput($this->load->view('extension/module/costs_crud/editing_data', $data));
	}

	public function save(){
		if (isset($this->request->get['cost_id'])) {
			$desc = $this->request->post['cost_desc'];
	    	$value = $this->request->post['cost_value'];
	    	$this->db->query("UPDATE `" . DB_PREFIX . "costs` SET description = '$desc' , value='$value' WHERE id=".$this->request->get['cost_id']);
			$this->response->redirect($this->url->link('extension/module/crud_system', 'user_token=' . $this->session->data['user_token'], true)); 
		}
	    else{
	    	$desc = $this->request->post['cost_desc'];
	    	$value = $this->request->post['cost_value'];
	    	$this->db->query("INSERT INTO `" . DB_PREFIX . "costs` SET description = '$desc' , value='$value'");

	    	$this->response->redirect($this->url->link('extension/module/crud_system', 'user_token=' . $this->session->data['user_token'], true)); 
	    }
	}

	public function delete(){
		if (isset( $this->request->post['cost_id'])) {
			$result = $this->db->query("DELETE FROM `" . DB_PREFIX . "costs` WHERE id=".$this->request->post['cost_id']);
			if ($result) {
				echo 1;
			}
			else{
				echo 0;
			}
		}
		else{
			echo 0;
		}
	}

	/* Function that validates the data when Save Button is pressed */
    protected function validate() {
 
        /* Block to check the user permission to manipulate the module*/
        if (!$this->user->hasPermission('modify', 'module/crud_system')) {
            $this->error['warning'] = $this->language->get('error_permission');
        }
        /* End Block*/
 
        /* Block to check if the helloworld_text_field is properly set to save into database, otherwise the error is returned*/
        if (!$this->request->post['text_field']) {
            $this->error['code'] = $this->language->get('error_code');
        }
        /* End Block*/
 
        /*Block returns true if no error is found, else false if any error detected*/
        if (!$this->error) {
            return true;
        } else {
            return false;
        }   
        /* End Block*/
    }
    /* End Validation Function*/

    public function install() {
		// Register the event triggers
		$this->load->model('setting/event');

		$this->db->query("CREATE TABLE IF NOT EXISTS `" . DB_PREFIX . "costs` (
		  `id` int(11) NOT NULL AUTO_INCREMENT,
		  `description` text DEFAULT NULL,
		  `value` int(11) NOT NULL,
		  PRIMARY KEY (`id`)
		) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;");
	}

    
}