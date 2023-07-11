<?php

namespace App\Controllers;
// use App\Models

class Home extends BaseController
{
    public function index()
    {
        return view('welcome_message');
    } 
    
    

    public function prueba ()
    {
        echo 'hola esto es una prueba';
    }

    public function api ()
    {


        echo ' ACTIVIDAD 5 API REST NOVEDAD POLICIAL';

        $robo= array (
                "usuario"=>"Cbos_Macias",
                "grado"=>"Cabo Segundo",
                "nombres"=>"Carlos Macias",
                "Lugar de trabajo"=>"Portoviejo",
                "Ubicacion"=>"Av. Ejercito y America",
                "Sospechoso"=>"Alias Caliche" 
    
    );

        
        $robo1= array (
                "usuario"=>"Sgos_Biones",
                "grado"=>"Sargento Segundo",
                "nombres"=>"Briones Walter",
                "Lugar de trabajo"=>"Colon",
                "Ubicacion"=>"Manabí",
                "tipo de evento"=>"Robo a local Comercial",
                "Sospechoso"=>"no reconocido"
                

        );
        $robo2= array (
                "usuario"=>"Cbos_Macias",
                "grado"=>"Cabo Segundo",
                "nombres"=>"Carlos Macias",
                "Lugar de trabajo"=>"Portoviejo",
                "Ubicacion"=>"Manabí",
                "tipo de evento"=>"+5930991335922",
                "Sospechoso"=>"Alias Caliche"

        );

        $robo3= array (
            "usuario"=>"Cbop_Ñamo",
            "grado"=>"Cabo Primero",
            "nombres"=>"Manuel Turizo",
            "Lugar de trabajo"=>"Santa Ana",
            "Ubicacion"=>"Manabí",
            "tipo de evento"=>"Robo de moto",
            "Sospechoso"=>"No reconocido"


        );
        $tentativ= array (
                "usuario"=>"Poli_Grijalba",
                "grado"=>"Policia Nacional",
                "nombres"=>"Grijalba Jonathan",
                "Lugar de trabajo"=>"Jipijapa",
                "Ubicacion"=>"Manabí",
                "tipo de evento"=>"Persona herida por arma de fuego",
                "Sospechoso"=>"Alias elasteroide"

        );
        
        $resultado = array($robo,  $robo1, $robo2,$robo3,$tentativ );

        return $this->response->setJSON($resultado);
        }   
    
            
    
        public function login(){
    
    return view('login');
        
        }
    
    
        public function testbd($cedula)
        {
    
            $this->db=\Config\Database::connect();
            $query=$this->db->query("SELECT idpersonal, cedula, apellido1, apellido2, nombres, genero 
            FROM esq_datos_personales.personal where cedula='$cedula'  ");
            $result=$query->getResult();
            return $this->response->setJSON($result);
    
    
            // echo "hi";
        }
}