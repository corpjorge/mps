<?php

use Illuminate\Database\Seeder;
use App\Model\PrimerSemestre\PrimSemPrograma;

class PrimSemProgramaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


      $programa = new PrimSemPrograma();
$programa->nombre="Administración";
$programa->codigo="ADMI";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="url";
$programa->coordinador="Rodrigo Alberto Britto";
$programa->correo="ro-britt@uniandes.edu.co";
$programa->telefono="2314";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Antropología";
$programa->codigo="ANTR";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Hilda White Narvaez ";
$programa->correo="hwhite@uniandes.edu.co";
$programa->telefono="2559";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Arquitectura";
$programa->codigo="ARQU";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Juan Manuel Giraldo Rozo ";
$programa->correo="jugirald@uniandes.edu.co";
$programa->telefono="2483";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Arte";
$programa->codigo="ARTE";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Jennifer Gonzalez Gacheta ";
$programa->correo="y.gonzalez408@uniandes.edu.co";
$programa->telefono="2633";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Biología";
$programa->codigo="BIOL";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Zayra Garavito ";
$programa->correo="zv.garavito@uniandes.edu.co";
$programa->telefono="3267";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ciencia Política";
$programa->codigo="CPOL";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Carolina Santacruz Bravo ";
$programa->correo="coordinacioncpol@uniandes.edu.co";
$programa->telefono="2609";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Contaduría Internacional";
$programa->codigo="CONT";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Mariano López ";
$programa->correo="m-lopez@uniandes.edu.co";
$programa->telefono="2317";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Derecho";
$programa->codigo="DERE";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Pilar Sánchez Reyes ";
$programa->correo="py.sanchez94@uniandes.edu.co";
$programa->telefono="2382";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Diseño";
$programa->codigo="DISE";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="María Paula García ";
$programa->correo="disepregrado@uniandes.edu.co";
$programa->telefono="4877";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Economía";
$programa->codigo="ECON";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Mónica Vargas Martínez ";
$programa->correo="mo.vargas@uniandes.edu.co";
$programa->telefono="2403";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Estudios Dirigidos";
$programa->codigo="0";
$programa->descripcion="Los estudiantes admitidos al Programa de Estudios Dirigidos deben comunicarse con su coordinadora académica (Diana Moreno Marín - rmoreno@uniandes.edu.co - Extensión 2206) antes de hacer su horario, puesto que se llevará a cabo una sesión de consejería académica individual, en la cual se escogerán las materias de acuerdo a los intereses de cada estudiante.";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="";
$programa->correo="";
$programa->telefono="";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Filosofía";
$programa->codigo="FILO";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Sylvia Chaves O'Flynn ";
$programa->correo="sa.chaves@uniandes.edu.co";
$programa->telefono="2532";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Física";
$programa->codigo="FISI";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Claudia Marcela Bonilla Escobar";
$programa->correo="cm.bonilla@uniandes.edu.co";
$programa->telefono="5182";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Geociencias";
$programa->codigo="GEOC";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Jillian Pearse ";
$programa->correo="j.pearse@uniandes.edu.co";
$programa->telefono="5661";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Gobierno y Asuntos Públicos";
$programa->codigo="EGOB";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Jhon Alexander Bastidas Benavides ";
$programa->correo="ja.bastidas913@uniandes.edu.co";
$programa->telefono="4811";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Historia";
$programa->codigo="HIST";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Aideth Velandia ";
$programa->correo="nvelandi@uniandes.edu.co";
$programa->telefono="4816";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Historia del Arte";
$programa->codigo="HART";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Yanneth Reyes ";
$programa->correo="nreyes@uniandes.edu.co";
$programa->telefono="2139";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ingeniería Ambiental";
$programa->codigo="ICYA";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Laura Santos / Natalia Franco";
$programa->correo="coordinacionicya@uniandes.edu.co";
$programa->telefono="2810";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ingeniería Biomédica";
$programa->codigo="IBIO";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Diana Marcela Gaitán ";
$programa->correo="d-gaitan@uniandes.edu.co";
$programa->telefono="1892";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ingeniería Civil";
$programa->codigo="ICYA";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Laura Santos / Natalia Franco";
$programa->correo="coordinacionicya@uniandes.edu.co";
$programa->telefono="2810";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ingeniería de Sistemas y Computación";
$programa->codigo="ISIS";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Juan Pablo Fernández Ramírez / Julián David Moreno Díaz ";
$programa->correo="pregisis@uniandes.edu.co";
$programa->telefono="2860";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ingeniería Eléctrica";
$programa->codigo="IELE";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Mauricio Guerrero Hurtado ";
$programa->correo="maguerre@uniandes.edu.co";
$programa->telefono="2830";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ingeniería Electrónica";
$programa->codigo="IELE";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Mauricio Guerrero Hurtado ";
$programa->correo="maguerre@uniandes.edu.co";
$programa->telefono="2830";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ingeniería Industrial";
$programa->codigo="IIND";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Marcela Jaramillo ";
$programa->correo="pregradoindustrial@uniandes.edu.co";
$programa->telefono="3861";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ingeniería Mecánica";
$programa->codigo="IMEC";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Rosalba Rebeca Martinez Movilla ";
$programa->correo="pregimec@uniandes.edu.co";
$programa->telefono="2900";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Ingeniería Química";
$programa->codigo="IQUI";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Jorjhan Oscarly Leal Ortiz ";
$programa->correo="pregiqui@uniandes.edu.co";
$programa->telefono="3093";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Lenguas y Cultura";
$programa->codigo="LENG";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Ana María Bermúdez Alfaro ";
$programa->correo="lenguascoordinacion@uniandes.edu.co";
$programa->telefono="2567";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Licenciatura en Artes";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Catalina Cañizares Escobar ";
$programa->correo="c.canizares54@uniandes.edu.co";
$programa->telefono="2283";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Licenciatura en Biología";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Catalina Cañizares Escobar ";
$programa->correo="c.canizares54@uniandes.edu.co";
$programa->telefono="2283";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Licenciatura en Educación Infantil";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Catalina Cañizares Escobar ";
$programa->correo="c.canizares54@uniandes.edu.co";
$programa->telefono="2283";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Licenciatura en Español y Filología";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Catalina Cañizares Escobar ";
$programa->correo="c.canizares54@uniandes.edu.co";
$programa->telefono="2283";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Licenciatura en Filosofía";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Catalina Cañizares Escobar ";
$programa->correo="c.canizares54@uniandes.edu.co";
$programa->telefono="2283";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Licenciatura en Física";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Catalina Cañizares Escobar ";
$programa->correo="c.canizares54@uniandes.edu.co";
$programa->telefono="2283";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Licenciatura en Historia";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Catalina Cañizares Escobar ";
$programa->correo="c.canizares54@uniandes.edu.co";
$programa->telefono="2283";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Licenciatura en Matemáticas";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Catalina Cañizares Escobar ";
$programa->correo="c.canizares54@uniandes.edu.co";
$programa->telefono="2283";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Licenciatura en Química";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Catalina Cañizares Escobar ";
$programa->correo="c.canizares54@uniandes.edu.co";
$programa->telefono="2283";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Literatura";
$programa->codigo="LITE";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="William Paiba ";
$programa->correo="wpaiba@uniandes.edu.co";
$programa->telefono="2507";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Matemáticas";
$programa->codigo="MATE";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Monika Winklmeier";
$programa->correo="pregrado-quimica@uniandes.edu.co";
$programa->telefono="2720";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Medicina";
$programa->codigo="MEDI";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Natalia Rodríguez ";
$programa->correo="n.rodriguez2338@uniandes.edu.co";
$programa->telefono="3803";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Microbiología";
$programa->codigo="MBIO";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Zayra Garavito ";
$programa->correo="zv.garavito@uniandes.edu.co";
$programa->telefono="3267";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Música";
$programa->codigo="MUSI";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Gibelly Parra Parra ";
$programa->correo="g.parra55@uniandes.edu.co";
$programa->telefono="2516";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Narrativas Digitales";
$programa->codigo="0";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Jennifer Andrea Sánchez Benítez ";
$programa->correo="ja.sanchezb1@uniandes.edu.co";
$programa->telefono="3138";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Psicología";
$programa->codigo="PSIC";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Elsa Ramos ";
$programa->correo="el-ramos@uniandes.edu.co";
$programa->telefono="2602";
$programa->save();

$programa = new PrimSemPrograma();
$programa->nombre="Química";
$programa->codigo="QUIM";
$programa->descripcion="";
$programa->creditos="13";
$programa->web="";
$programa->coordinador="Carolina Lizarazo ";
$programa->correo="pregrado-quimica@uniandes.edu.co";
$programa->telefono="2786";
$programa->save();


    }
}
