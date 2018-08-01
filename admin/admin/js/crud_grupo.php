<?php

include("../conexion.php");
error_reporting(0);
$post_variables = file_get_contents("php://input");
$variable = json_decode($post_variables);
$nombre = $variable->nombre;
$docente = $variable->docente;
$unidades = $variable->unidades;
$modulos = $variable->modulos;
$metodo = $variable->metodo;
$alumnos = $variable->alumnos;
$grupo = $variable->grupo;
$estado = $variable->estado;
$adiciones = $variable->adiciones;
$rta = [];

if (isset($variable->control) && $variable->control == "SI") {


    if ($metodo == 1) {

        $insert = "INSERT INTO grupo (grupo_docente,grupo_nombre,grupo_units,grupo_mod)
                  VALUES (" . $docente . ",'" . $nombre . "','" . $unidades . "','" . $modulos . "')";

        //echo $insert;

        $query_insert = mysql_query($insert);


        if ($query_insert) {
            $students = 0;
            $rowId = mysql_insert_id();
            foreach ($alumnos as $key) {
                $insertDos = "INSERT INTO grupo_estudiante (id_grupo,id_estudiante,estado_final)
                                VALUES (" . $rowId . "," . $key . ",'0')";
                $query_insertDos = mysql_query($insertDos);
                if ($query_insertDos) {
                    $students++;
                }
            }
            $rta['state'] = 'ok';
            $rta['date'] = $students;
        } else {
            $rta['state'] = 'fail';
            $rta['date'] = 0;
        }
    }

    if ($metodo == 2) {

        $i = 0;
        $selectGrupo = " select grupo_id, grupo_nombre, grupo_docente, grupo_units,grupo_mod, grupo_estado, ";
        $selectGrupo .= " (select count(grupo_estudiante_id) from grupo_estudiante where estado_final = 0 and id_grupo = grupo_id) as estudiantes,";
        $selectGrupo .= " concat(usuarios.nombre,' ',usuarios.apellido) as docente,";
        $selectGrupo .= " usuarios.email from grupo";
        $selectGrupo .= " inner join grupo_estudiante on";
        $selectGrupo .= " grupo.grupo_id = grupo_estudiante.id_grupo";
        $selectGrupo .= " inner join usuarios on";
        $selectGrupo .= " grupo.grupo_docente = usuarios.id";
        //$selectGrupo .= " where grupo_estado = 0";
        $selectGrupo .= " group by grupo.grupo_id";

        $query_grupo = mysql_query($selectGrupo);
        while ($row_usuarios = mysql_fetch_assoc($query_grupo)) {
            //echo $row_usuarios['grupo_id'];
            $selectEstudent = " select id_estudiante as id, grupo_estudiante_id, usuarios.nombre ,usuarios.apellido , usuarios.email";
            $selectEstudent .= " from grupo_estudiante";
            $selectEstudent .= " inner join usuarios on";
            $selectEstudent .= " grupo_estudiante.id_estudiante = usuarios.id";
            $selectEstudent .= " where id_grupo =" . $row_usuarios['grupo_id'];
            $selectEstudent .= " and estado_final = 0";
            $query_estudent = mysql_query($selectEstudent);
            $j = 0;
            while ($row_estudent = mysql_fetch_assoc($query_estudent)) {
                $rta[$i]['estudent'][$j] = $row_estudent;
                $j++;
            }

            $rta[$i]['grupo'] = $row_usuarios;
            $i++;
        }
    }

    if ($metodo == 3) {

        $update_grupo = "UPDATE grupo SET grupo_docente ='" . $docente . "',grupo_nombre ='" . $nombre . "',";
        $update_grupo .= " grupo_units ='" . $unidades . "',grupo_mod ='" . $modulos . "'";
        $update_grupo .= " WHERE grupo_id = '" . $grupo . "'";

        $query_grupo = mysql_query($update_grupo);
        if ($query_grupo) {
            $students = 0;
            foreach ($alumnos as $key) {
                $insertDos = "UPDATE grupo_estudiante SET estado_final ='1' WHERE id_grupo ='".$grupo."' ";
                $insertDos .= "and id_estudiante ='".$key."'";
                $query_insertDos = mysql_query($insertDos);
                if ($query_insertDos) {
                    $students++;
                }
            }
            foreach ($adiciones as $keyDos) {
                $insertDosa = "INSERT INTO grupo_estudiante (id_grupo,id_estudiante,estado_final)
                                VALUES (" . $grupo . "," . $keyDos . ",'0')";
                $query_insertDosa = mysql_query($insertDosa);
                if ($query_insertDosa) {
                    $students++;
                }
            }            
            $rta['state'] = 'ok';
            $rta['date'] = $students;
        } else {
            $rta['state'] = 'fail';
            $rta['date'] = 0;
        }
    }
    
    if($metodo == 4){
        
        $update_grupo = "UPDATE grupo SET grupo_estado ='" .$estado. "'";
        $update_grupo .= " WHERE grupo_id = '" . $grupo . "'";


        $query_grupo = mysql_query($update_grupo);
        if ($query_grupo) {
            $rta['state'] = 'ok';
            $rta['date'] = 0;
        } else {
            $rta['state'] = 'fail';
            $rta['date'] = 0;
        }
          
    }

    echo json_encode($rta);
}
?>



    


