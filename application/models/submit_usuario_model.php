<?php 
class Submit_usuario_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    //creamos la funcion nuevo comentario que ser� la que haga la inserci�n a la base
    //de datos pas�ndole los datos a introducir en forma de array, siempre al estilo ci
    function nuevo_comentario($nombre,$apellido,$cargo,$pais,$correo,$skype,$anexo,$directo)
    {
        $data = array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'cargo' => $cargo,
                'pais' => $pais,
                'correo' => $correo,
                'skype' => $skype,
                'anexo' => $anexo,
                'directo' => $directo,
                );
        //aqui se realiza la inserci�n, si queremos devolver algo deber�amos usar delantre return
        //y en el controlador despues de $nueva_insercion poner lo que queremos hacer, redirigir,
        //env�ar un email, en fin, lo que deseemos hacer
        return $this->db->insert('empleados',$data);
    }

    function editar_comentario($hidden,$nombre,$apellido,$cargo,$pais,$correo,$skype,$anexo,$directo)
    {
        $data = array(
                'nombre' => $nombre,
                'apellido' => $apellido,
                'cargo' => $cargo,
                'pais' => $pais,
                'correo' => $correo,
                'skype' => $skype,
                'anexo' => $anexo,
                'directo' => $directo,
                );
        $this->db->where('id', $hidden);
        return $this->db->update('empleados',$data);
    }
}
 
/*fin del archivo comentarios model*/