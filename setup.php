<?php /* $Id$ $URL$ */
if (!defined('W2P_BASE_DIR')){
    die('You should not access this file directly.');
}
/**
 *  Name: Project Exporter
 *  Directory: exporters
 *  Version 1.1
 *  Type: user
 *  UI Name: Project Exporter
 *  UI Icon: projectexporter.png
 */

$config = array();
$config['mod_name']         = 'Project Exporter';           // name the module
$config['mod_version']      = '1.1';                        // add a version number
$config['mod_directory']    = 'exporters';                  // tell web2project where to find this module
$config['mod_setup_class']  = 'CSetupProjectExporter';      // the name of the PHP setup class (used below)
$config['mod_type']         = 'user';                       // 'core' for modules distributed with w2p by standard, 'user' for additional modules
$config['mod_ui_name']      = $config['mod_name'];          // the name that is shown in the main menu of the User Interface
$config['mod_ui_icon']      = 'projectexporter.png';        // name of a related icon
$config['mod_description']  = 'Export data from projects';  // some description of the module
$config['mod_config']       = false;                        // show 'configure' link in viewmods
//$config['permissions_item_table'] = 'exporters';
//$config['permissions_item_field'] = '';
//$config['permissions_item_label'] = '';
$config['requirements'] = array(
    array('require' => 'web2project',   'comparator' => '>=', 'version' => '3')
);
  
if (@$a == 'setup') {
	echo w2PshowModuleConfig( $config );
}

class CSetupProjectExporter extends w2p_System_Setup
{
    public function install() {
        $result = $this->_meetsRequirements();
        if (!$result) {
            return false;
        }
        return parent::install();
    }
 
    public function upgrade($old_version) {
        switch ($old_version) {
            case '1.0':
                //nothing to upgrade
            default:
                //do nothing
        }
        return true;
    }
    
    public function configure() {
        return false; 
    }

    public function remove() { 
        return parent::remove();
    }
}
