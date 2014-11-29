<?php

class Plugin_control_panel_edit_url extends Plugin
{
    public function index()
    {
        // we need the local path
        if (!isset($this->context['_local_path'])) {
            return '';
        }
        
//        rd($this->context);
        
        // local path exists, return the correct format
        return "/admin.php/publish?path=" . substr($this->context['_local_path'], 0, strrpos($this->context['_local_path'], '.'));
    }
}