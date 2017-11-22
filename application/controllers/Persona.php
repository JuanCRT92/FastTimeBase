<?php
 if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Persona extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		//$this->load->database();
		//$this->load->helper('url');

		//$this->load->library('grocery_CRUD');
	}

	public function index(){
		$this->cargar_vista((object)array('output' => '' , 'js_files' => array() , 'css_files' => array()));
	}  


	 function cargar_vista($output = null){
	 	
		$this->load->view('vista_crud/persona.php', (array)$output);
		
                
	}

//	public function carga_ejemplo(){
//		$this->grocery_crud->set_theme('flexigrid');
//		$this->grocery_crud->set_table('persona');
//		$output=$this->grocery_crud->render();
//		$this->cargar_vista($output);
//	}
        
            public  function carga_ejemplo() {
    try{

$crud = new grocery_CRUD();
    /* Seleccionamos el tema */
    $crud->set_theme('flexigrid'); //temas datatables, flexigrid

    /* Seleccionmos el nombre de la tabla de nuestra base de datos*/
    $crud->set_table('tipo_documento');
        
      //  $this->grocery_crud->set_theme('flexigrid');
	//	$this->grocery_crud->set_table('tipo_documento');

    /* Le asignamos un nombre */
    $crud->set_subject('Documentos');

    /* Asignamos el idioma español */
    $crud->set_language('spanish');

    /* Aqui le decimos a grocery que estos campos son obligatorios */
    $crud->required_fields(
      'COD_TIPODOC',
      'DESCRIPCION'
    );

    /* Aqui le indicamos que campos deseamos mostrar */
    $crud->columns(
      
      'COD_TIPODOC',
      'DESCRIPCION'
    );

    /* Generamos la tabla */
    $output = $crud->render();

    /* La cargamos en la vista situada en
    /applications/views/productos/administracion.php */
    //$this->load->view('tipodoc_view', $output);
   
		$this->load->view('vista_crud/persona.php');
		
    
    //$this->cargar_vista($output);

    }catch(Exception $e){
      /* Si algo sale mal cachamos el error y lo mostramos */
      show_error($e->getMessage().' --- '.$e->getTraceAsString());
    }
  }
}


 