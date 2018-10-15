<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class historia extends Model
{
            ///A QUE TABLA HACE REFERENCIA cuando no se lleva el estandar de ingles
            public $timestamps = false;
            public $table = 'Historias';
            
        
            /// los campos que son asignables masivamente. 
        
            protected $fillable = [
                'fechaIngreso','codigo','nombres','apellidos','edad','direccion','telefono','telefono2','app','apf','ocupacion','ta','montivoConsulta',
                'evaluacionFisica','diagnostico','tratamineto','observaciones','cedula',];


                

        //scope

        public function scopeApellidos($query, $apellidos)
        {
            if($apellidos)
            return $query->where('apellidos', 'LIKE', "%$apellidos%"); 
        }
        
        public function scopeCedula($query, $cedula)
        {
            if($cedula)
            return $query->where('cedula', 'LIKE', "%$cedula%"); 
        }


        public function scopeCodigo($query, $codigo)
        {
            if($codigo)
            return $query->where('codigo', 'LIKE', "%$codigo%"); 
        }



}
