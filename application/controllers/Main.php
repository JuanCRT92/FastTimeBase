<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Main extends CI_Controller {

    public function __construct() {
        parent::__construct();

//		$this->load->database();
//		$this->load->helper('url');
//
//		$this->load->library('grocery_CRUD');
    }

    public function _example_output($output = null) {

        $this->load->view('example.php', (array) $output);
    }

    public function offices() {
        $output = $this->grocery_crud->render();

        $this->_example_output($output);
    }

    public function index() {
        $this->_example_output((object) array('output' => '', 'js_files' => array(), 'css_files' => array()));
    }

    public function tipo_documento() {
        $crud = new grocery_CRUD();
/* Seleccionamos el tema */
            $crud->set_theme('flexigrid'); //temas datatables, flexigrid
        $crud->set_table('tipo_documento');
        $crud->set_subject('Documentos');
        /* Asignamos el idioma español */
        $crud->set_language('spanish');
        $crud->required_fields('DESCRIPCION');
        $crud->columns('COD_TIPODOC', 'DESCRIPCION');
        $crud->display_as('DESCRIPCION', 'TIPO DOCUMENTO');
        
        


        $output = $crud->render();

        $this->_example_output($output);
    }
    
    
    function persona() {
        try {
            /* Creamos el objeto */
            $crud = new grocery_CRUD();
            /* Seleccionamos el tema */
            $crud->set_theme('flexigrid'); //temas datatables, flexigrid
            /* Seleccionmos el nombre de la tabla de nuestra base de datos */
            $crud->set_table('persona');
            /* Le asignamos un nombre */
            $crud->set_subject('Persona');
            /* Asignamos el idioma español */
            $crud->set_language('spanish');
            /* Para mostrar el dato en lugar del id */
            $crud->set_relation('COD_TIPODOC', 'tipo_documento', 'DESCRIPCION');
            /* Aqui le decimos a grocery que estos campos son obligatorios */
            $crud->required_fields('IDENTIFICACION', 'P_NOMBRE', 'P_APELLIDO', 'EMAIL', 'COD_TIPODOC');

            /* Aqui le indicamos que campos deseamos mostrar */
            $crud->columns('IDENTIFICACION', 'P_NOMBRE', 'S_NOMBRE', 'P_APELLIDO', 'S_APELLIDO', 'EMAIL', 'COD_TIPODOC');

            /* Para cambiar el nombre que queremos mostrar */
            $crud->display_as('IDENTIFICACION', 'Numero Documento');
            $crud->display_as('P_NOMBRE', 'Primer Nombre');
            $crud->display_as('S_NOMBRE', 'Segundo Nombre');
            $crud->display_as('P_APELLIDO', 'Primer Apellido');
            $crud->display_as('S_APELLIDO', 'Segundo Apellido');
            $crud->display_as('COD_TIPODOC', 'Tipo de Documento');

            /* Generamos la tabla */
            $output = $crud->render();

            /* La cargamos en la vista situada en
              /applications/views/productos/administracion.php */
            $this->_example_output($output);
        } catch (Exception $e) {
            /* Si algo sale mal cachamos el error y lo mostramos */
            show_error($e->getMessage() . 'Los campos con * son obligatorios' . $e->getTraceAsString());
        }
    }

   

}
