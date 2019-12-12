<?php

use Illuminate\Database\Seeder;
use App\Model\PrimerSemestre\PrimSemGrupoMateria;

class PrimSemGrupoMateriaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

      $gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='1';
$gruposMaterias->prim_sem_materia_id='1';
$gruposMaterias->descripcion='Los estudiantes de primer semestre de Administración DEBEN tomar ADMI 1101 Fundamentos Administración y Gerencia (ADMON) y NO deben inscribir el curso de ADMI 1102 Fundamentos Administración y Gerencia, el cual es para estudiantes de otras carreras.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='1';
$gruposMaterias->prim_sem_materia_id='5';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='1';
$gruposMaterias->prim_sem_materia_id='15';
$gruposMaterias->descripcion='Es necesario que los estudiantes de primer semestre inscriban sólo las secciones con el nombre COLOMBIA Y SUS INSTITUCIONES.(ADMON)';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='1';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='1';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='1';
$gruposMaterias->prim_sem_materia_id='1015';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='3';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='3';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='4';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='4';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='5';
$gruposMaterias->prim_sem_materia_id='66';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='5';
$gruposMaterias->prim_sem_materia_id='70';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='5';
$gruposMaterias->prim_sem_materia_id='69';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='5';
$gruposMaterias->prim_sem_materia_id='535';
$gruposMaterias->descripcion='Se recomienda la Sección 1 con el profesor Carlos Alberto Uribe';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='5';
$gruposMaterias->prim_sem_materia_id='537';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='6';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='6';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='7';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='7';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='8';
$gruposMaterias->prim_sem_materia_id='866';
$gruposMaterias->descripcion='DISE 1000: Le informamos que este curso es obligatorio para todos los estudiantes matriculados al programa de Arquitectura y lo deberán cumplir durante su primer semestre en el programa. Para la inscripción del curso, al hacer la búsqueda, en el campo de departamento escoja "DISEÑO"" y en el campo de Número de Curso escriba ""DISE 1000"". Elija entre las secciones 4, 5 ó 6 (que son las disponibles para los estudiantes de arquitectura) y luego presione el botón de ""Registro"". Las clases de cada una de estas secciones del curso DISE-1000 se realizan durante un día adicional en la semana de inducción general programada por la Universidad. Por favor lea cuidadosamente la información disponible en CAPACITACIÓN USO DE TALLERES adicional para los estudiantes de Arquitectura de primer semestre."';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='8';
$gruposMaterias->prim_sem_materia_id='115';
$gruposMaterias->descripcion='ARQU 1111 TALLER DE COMPOSICIÓN 1: Este curso se debe registrar después de DISE-1000 porque son co-requisito, es decir son dos materias que se deben registrar simultáneamente en el sistema Banner.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='8';
$gruposMaterias->prim_sem_materia_id='117';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='8';
$gruposMaterias->prim_sem_materia_id='119';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='8';
$gruposMaterias->prim_sem_materia_id='121';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='8';
$gruposMaterias->prim_sem_materia_id='124';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='9';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='9';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='10';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='10';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='11';
$gruposMaterias->prim_sem_materia_id='198';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='11';
$gruposMaterias->prim_sem_materia_id='204';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='11';
$gruposMaterias->prim_sem_materia_id='210';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='11';
$gruposMaterias->prim_sem_materia_id='363';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='11';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='12';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='12';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='13';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='13';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='14';
$gruposMaterias->prim_sem_materia_id='288';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='14';
$gruposMaterias->prim_sem_materia_id='289';
$gruposMaterias->descripcion='Una vez registrado el Curso Biología Celular Laboratorio (MBIO 1101), al revisar su Horario por Día y Hora, le aparecerá un conflicto de horario en el sistema. Favor hacer caso omiso de este conflicto; cada sección del laboratorio se divide posteriormente en tutoría y práctica. Una vez inicien sus clases se entregará el cronograma de las dos actividades.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='14';
$gruposMaterias->prim_sem_materia_id='290';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='14';
$gruposMaterias->prim_sem_materia_id='291';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='14';
$gruposMaterias->prim_sem_materia_id='2248';
$gruposMaterias->descripcion='(II) Los estudiantes de Biología pueden optar por las Matemáticas de Ingeniería, iniciando con Cálculo Diferencial (Según resultado del examen de nivel de matemáticas). Para inscribirlo, el estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='14';
$gruposMaterias->prim_sem_materia_id='2352';
$gruposMaterias->descripcion='La materia Biología Celular (MBIO 1100), debe inscribirla simultáneamente con Biología Celular laboratorio(MBIO 1101), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='14';
$gruposMaterias->prim_sem_materia_id='2354';
$gruposMaterias->descripcion='Una vez registrado el Curso Biología Celular Laboratorio (MBIO 1101), al revisar su Horario por Día y Hora, le aparecerá un conflicto de horario en el sistema. Favor hacer caso omiso de este conflicto; cada sección del laboratorio se divide posteriormente en tutoría y práctica. Una vez inicien sus clases se entregará el cronograma de las dos actividades.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='14';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='El curso de Química (QUIM 1103) se debe inscribir simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='14';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='15';
$gruposMaterias->prim_sem_materia_id='615';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='15';
$gruposMaterias->prim_sem_materia_id='616';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='15';
$gruposMaterias->prim_sem_materia_id='535';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='15';
$gruposMaterias->prim_sem_materia_id='537';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='15';
$gruposMaterias->prim_sem_materia_id='536';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='15';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='16';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='16';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='17';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='17';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='18';
$gruposMaterias->prim_sem_materia_id='7';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='18';
$gruposMaterias->prim_sem_materia_id='590';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='18';
$gruposMaterias->prim_sem_materia_id='589';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='18';
$gruposMaterias->prim_sem_materia_id='782';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='18';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='20';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='20';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='21';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='21';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='22';
$gruposMaterias->prim_sem_materia_id='776';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='22';
$gruposMaterias->prim_sem_materia_id='777';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='22';
$gruposMaterias->prim_sem_materia_id='784';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='23';
$gruposMaterias->prim_sem_materia_id='2258';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='23';
$gruposMaterias->prim_sem_materia_id='590';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='25';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='25';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='26';
$gruposMaterias->prim_sem_materia_id='867';
$gruposMaterias->descripcion='El curso Estudio 1 (DISE 1106) se debe inscribir simultáneamente con el curso Capacitación ARQ-DIS (DISE1000).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='26';
$gruposMaterias->prim_sem_materia_id='866';
$gruposMaterias->descripcion='Para la inscripción del curso Capacitación ARQ-DIS (DISE 1000), para el uso de los Talleres y Laboratorios de Arquitectura y Diseño, los estudiantes que ingresan a primer semestre de Diseño pueden escoger únicamente entre las secciones 1, 2, 3, 7, 8 o 9.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='26';
$gruposMaterias->prim_sem_materia_id='869';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='27';
$gruposMaterias->prim_sem_materia_id='870';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='27';
$gruposMaterias->prim_sem_materia_id='872';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='27';
$gruposMaterias->prim_sem_materia_id='878';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='28';
$gruposMaterias->prim_sem_materia_id='870';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='28';
$gruposMaterias->prim_sem_materia_id='871';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='28';
$gruposMaterias->prim_sem_materia_id='872';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='28';
$gruposMaterias->prim_sem_materia_id='878';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='29';
$gruposMaterias->prim_sem_materia_id='295';
$gruposMaterias->descripcion='Si elige Ecología Principios y Aplicaciones (BIOL 1327), la debe inscribir simultáneamente con la sección complementaria de Ecología Principios y Aplicaciones (BIOL 1327C) y en una sección diferente a la # 1. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Biología .';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='29';
$gruposMaterias->prim_sem_materia_id='296';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='29';
$gruposMaterias->prim_sem_materia_id='1430';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='29';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir,de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='29';
$gruposMaterias->prim_sem_materia_id='2258';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='29';
$gruposMaterias->prim_sem_materia_id='2352';
$gruposMaterias->descripcion='Si elige Biología Celular (MBIO 1100), debe inscribirla simultáneamente con Biología Celular laboratorio (MBIO 1101), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='29';
$gruposMaterias->prim_sem_materia_id='2354';
$gruposMaterias->descripcion='Una vez registrado el Curso de Laboratorio de Biología Celular (MBIO 1101), cuando revise su Horario por Día y Hora, le aparecerá un conflicto de horario en el sistema. Favor hacer caso omiso de este conflicto; cada sección del laboratorio se divide posteriormente en tutoría y práctica. Una vez inicien sus clases se entregará el cronograma de las dos actividades.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='29';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='Si elige Química (QUIM 1103), debe inscribirla simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='29';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='31';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='31';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='32';
$gruposMaterias->prim_sem_materia_id='992';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='32';
$gruposMaterias->prim_sem_materia_id='994';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='32';
$gruposMaterias->prim_sem_materia_id='1002';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='32';
$gruposMaterias->prim_sem_materia_id='1015';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='32';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='32';
$gruposMaterias->prim_sem_materia_id='2038';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='32';
$gruposMaterias->prim_sem_materia_id='693';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='34';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='34';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='36';
$gruposMaterias->prim_sem_materia_id='535';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='36';
$gruposMaterias->prim_sem_materia_id='3140';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='36';
$gruposMaterias->prim_sem_materia_id='3355';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='37';
$gruposMaterias->prim_sem_materia_id='393';
$gruposMaterias->descripcion='Si el estudiante escoge ver el Curso introductorio Ética, estética y política 1, DEBE INSCRIBIR TALLER DE CRISIS AMBIENTAL (FILO-1032).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='37';
$gruposMaterias->prim_sem_materia_id='3350';
$gruposMaterias->descripcion='Si el estudiante escoge ver el Curso introductorio Mente, Lenguaje y Conocimiento 1, debe inscribir el taller TALLER DE LÓGICA, LENGUAJE Y RACIONALIDAD (FILO-1030).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='37';
$gruposMaterias->prim_sem_materia_id='3356';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='37';
$gruposMaterias->prim_sem_materia_id='3357';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='37';
$gruposMaterias->prim_sem_materia_id='3358';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='37';
$gruposMaterias->prim_sem_materia_id='3359';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='37';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='38';
$gruposMaterias->prim_sem_materia_id='1317';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='38';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201). Si el estudiante inscribe precálculo no puede inscribir Física 1 (FISI 1018) pero puede inscribir Prefísica (FISI 1000).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='38';
$gruposMaterias->prim_sem_materia_id='1323';
$gruposMaterias->descripcion='El curso Física 1 (FISI 1018) se debe inscribir simultáneamente con Física Experimental (FISI 1019), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='38';
$gruposMaterias->prim_sem_materia_id='1325';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='38';
$gruposMaterias->prim_sem_materia_id='1983';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='38';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='39';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='39';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='40';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='40';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='41';
$gruposMaterias->prim_sem_materia_id='1428';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='41';
$gruposMaterias->prim_sem_materia_id='1430';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='41';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderlo inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='41';
$gruposMaterias->prim_sem_materia_id='1983';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='41';
$gruposMaterias->prim_sem_materia_id='3044';
$gruposMaterias->descripcion='El curso Química General (QUIM 1101) se debe inscribir simultáneamente con el laboratorio de Química General (QUIM 1102), de lo contrario la clase principal no podrá ser inscrita. En el evento que no pueda inscribir el curso Química General (QUIM 1101) y el Laboratorio de Química General (QUIM 1102), podrá inscribir Química (QUIM 1103), que debe inscribirse simultáneamente con el Laboratorio de Química (QUIM 1104). En tal caso, el estudiante debe hacer una revisión académica posterior en su Departamento.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='41';
$gruposMaterias->prim_sem_materia_id='3045';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='42';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='42';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='43';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='43';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='44';
$gruposMaterias->prim_sem_materia_id='1208';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='44';
$gruposMaterias->prim_sem_materia_id='1209';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='44';
$gruposMaterias->prim_sem_materia_id='1213';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='44';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='45';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='45';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='46';
$gruposMaterias->prim_sem_materia_id='1498';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='46';
$gruposMaterias->prim_sem_materia_id='535';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='46';
$gruposMaterias->prim_sem_materia_id='537';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='46';
$gruposMaterias->prim_sem_materia_id='536';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='47';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='47';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='48';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='48';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='49';
$gruposMaterias->prim_sem_materia_id='3360';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='49';
$gruposMaterias->prim_sem_materia_id='198';
$gruposMaterias->descripcion='Este curso corresponde al requisito de taller básico que los estudiantes deben adelantar en el programa de Arte: pueden inscribir el curso ARTE-1116 Taller básico 1 si están interesados en el área de plástica o ARTE-1213 Taller del tiempo que corresponde al área de medios electrónicos y artes del tiempo- MEAT';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='49';
$gruposMaterias->prim_sem_materia_id='2038';
$gruposMaterias->descripcion='Corresponde al requisito que el estudiante debe cumplir de 6 créditos en lengua. En el primer semestre puede adelantar 1 curso de 3 créditos de la oferta de cursos del programa de Lenguas y Cultura, ejemplo: LENG-1201 Francés 1 LENG-1301 Alemán 1 o puede acreditar este requisito con los créditos de los cursos del programa de inglés.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='49';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='50';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='50';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='51';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='51';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='52';
$gruposMaterias->prim_sem_materia_id='1584';
$gruposMaterias->descripcion='Materia introductoria a la carrera y a la Universidad en la que se trabaja paralelamente: búsqueda en bases de datos, biblioteca, SICUA, etc';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='52';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poder inscribirla, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='52';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='La materia Química (QUIM 1103) debe inscribirla simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='52';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='52';
$gruposMaterias->prim_sem_materia_id='2352';
$gruposMaterias->descripcion='El curso Biología Celular (MBIO 1100) se debe inscribir simultáneamente con el laboratorio de Biología Celular (MBIO 1101), de lo contrario la clase principal no podrá ser inscrita';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='52';
$gruposMaterias->prim_sem_materia_id='2354';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='53';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='53';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='54';
$gruposMaterias->prim_sem_materia_id='1532';
$gruposMaterias->descripcion='El curso Introducción a la Ingeniería Biomédica (IBIO 1010) se debe inscribir simultáneamente con el laboratorio de Introducción a la Ingeniería Biomédica (IBIO 1011), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='54';
$gruposMaterias->prim_sem_materia_id='1533';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='54';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201). Si el estudiante inscribe precálculo no puede inscribir Física 1 (FISI 1018) pero puede inscribir Prefísica (FISI 1000).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='54';
$gruposMaterias->prim_sem_materia_id='1323';
$gruposMaterias->descripcion='El curso Física 1 (FIS 1018) se debe inscribir simultáneamente con Física Experimental (FISI 1019), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='54';
$gruposMaterias->prim_sem_materia_id='1325';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='54';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='El curso de Química (QUIM 1103) se debe inscribir simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='54';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='55';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='55';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='56';
$gruposMaterias->prim_sem_materia_id='1586';
$gruposMaterias->descripcion='Materia introductoria a la carrera y a la Universidad en la que se trabaja paralelamente: búsqueda en bases de datos, biblioteca, SICUA, etc';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='56';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='56';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='El curso Química (QUIM 1103) se debe inscribir simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='56';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='56';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='57';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='57';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='58';
$gruposMaterias->prim_sem_materia_id='1978';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='58';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='58';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='58';
$gruposMaterias->prim_sem_materia_id='397';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='58';
$gruposMaterias->prim_sem_materia_id='1983';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='59';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='59';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='60';
$gruposMaterias->prim_sem_materia_id='1714';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='60';
$gruposMaterias->prim_sem_materia_id='1716';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='60';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201). Si el estudiante inscribe precálculo no puede inscribir Física 1 (FISI 1018).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='60';
$gruposMaterias->prim_sem_materia_id='1323';
$gruposMaterias->descripcion='El curso Física 1 (FIS 1018) se debe inscribir simultáneamente con Física Experimental (FISI 1019), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='60';
$gruposMaterias->prim_sem_materia_id='1325';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='60';
$gruposMaterias->prim_sem_materia_id='1983';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='60';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='61';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='61';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='62';
$gruposMaterias->prim_sem_materia_id='1714';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='62';
$gruposMaterias->prim_sem_materia_id='1716';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='62';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201). Si el estudiante inscribe precálculo no puede inscribir Física 1 (FISI 1018).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='62';
$gruposMaterias->prim_sem_materia_id='1323';
$gruposMaterias->descripcion='El curso Física 1 (FIS 1018) se debe inscribir simultáneamente con Física Experimental (FISI 1019), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='62';
$gruposMaterias->prim_sem_materia_id='1325';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='62';
$gruposMaterias->prim_sem_materia_id='1983';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='62';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='63';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='63';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='64';
$gruposMaterias->prim_sem_materia_id='1785';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='64';
$gruposMaterias->prim_sem_materia_id='1786';
$gruposMaterias->descripcion='Si elije el Programa de Acompañamiento (IIND 1001), la debe inscribir simultáneamente con Introducción a Ingeniería Industrial (IIND 1000), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Ingeniería Industrial.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='64';
$gruposMaterias->prim_sem_materia_id='1983';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='64';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201). Si el estudiante inscribe precálculo no puede inscribir Física 1 (FISI 1018) pero puede inscribir Prefísica (FISI 1000).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='64';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='65';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='65';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='66';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='66';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='67';
$gruposMaterias->prim_sem_materia_id='295';
$gruposMaterias->descripcion='Si elige Ecología Principios y Aplicaciones (BIOL 1327), la debe inscribir simultáneamente con la sección complementaria de Ecología Principios y Aplicaciones (BIOL 1327C), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Biología.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='67';
$gruposMaterias->prim_sem_materia_id='296';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='67';
$gruposMaterias->prim_sem_materia_id='289';
$gruposMaterias->descripcion='Si elige Biología de Organismos (BIOL 1300), debe inscribirla simultáneamente con Biología de Organismos Complementaria (BIOL 1300C) y Biología de Organismos laboratorio(BIOL 1301), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Biología.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='67';
$gruposMaterias->prim_sem_materia_id='290';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='67';
$gruposMaterias->prim_sem_materia_id='291';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='67';
$gruposMaterias->prim_sem_materia_id='2352';
$gruposMaterias->descripcion='Si elige Biología Celular (MBIO 1100), debe inscribirla simultáneamente con el laboratorio de Biología Celular (MBIO 1101), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='67';
$gruposMaterias->prim_sem_materia_id='2354';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='67';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='Si elige Química (QUIM 1103), debe inscribirla simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='67';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='68';
$gruposMaterias->prim_sem_materia_id='1871';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='68';
$gruposMaterias->prim_sem_materia_id='1858';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='68';
$gruposMaterias->prim_sem_materia_id='1860';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='68';
$gruposMaterias->prim_sem_materia_id='1866';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='68';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poder inscribirla, de lo contrario debe inscribir Precálculo (MATE 1201). Si el estudiante inscribe precálculo no puede inscribir Física 1 (FISI 1018) pero puede inscribir Prefísica (FISI 1000).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='68';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='El curso Química (QUIM 1103) debe inscribirlo simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='68';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='69';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='69';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='70';
$gruposMaterias->prim_sem_materia_id='1922';
$gruposMaterias->descripcion='El curso Introducción a la Ingeniería Química (IQUI 1001) se debe inscribir simultáneamente con el laboratorio de Introducción a la Ingeniería Química (IQUI 1002), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='70';
$gruposMaterias->prim_sem_materia_id='1924';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='70';
$gruposMaterias->prim_sem_materia_id='1983';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poder inscribirla, de lo contrario debe inscribir Precálculo (MATE 1201). Si el estudiante inscribe precálculo no puede inscribir Física 1 (FISI 1018) pero puede inscribir Prefísica (FISI 1000).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='70';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='70';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='El curso Química (QUIM 1103) debe inscribirlo simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='70';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='71';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='71';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='72';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='72';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='73';
$gruposMaterias->prim_sem_materia_id='2094';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='73';
$gruposMaterias->prim_sem_materia_id='535';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='73';
$gruposMaterias->prim_sem_materia_id='537';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='73';
$gruposMaterias->prim_sem_materia_id='536';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='73';
$gruposMaterias->prim_sem_materia_id='2038';
$gruposMaterias->descripcion='Los estudiantes deben ponerse en contacto con la coordinación académica del Departamento para escoger su lengua principal, antes de hacer horario. Las opciones para elegir lengua principal son: Inglés, Francés o Alemán.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='74';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='74';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='75';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='75';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='76';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='76';
$gruposMaterias->prim_sem_materia_id='1107';
$gruposMaterias->descripcion='El curso Teorías y retos del aprendizaje (EDUC 1101) se debe inscribir simultáneamente con el laboratorio de Teorías y retos del aprendizaje (EDUC 1214), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Educación.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='76';
$gruposMaterias->prim_sem_materia_id='1111';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='76';
$gruposMaterias->prim_sem_materia_id='198';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='76';
$gruposMaterias->prim_sem_materia_id='409';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='77';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='77';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='78';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='78';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='79';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='79';
$gruposMaterias->prim_sem_materia_id='1107';
$gruposMaterias->descripcion='El curso Teorías y retos del aprendizaje (EDUC 1101) se debe inscribir simultáneamente con el laboratorio de Teorías y retos del aprendizaje (EDUC 1214), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Educación.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='79';
$gruposMaterias->prim_sem_materia_id='1111';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='79';
$gruposMaterias->prim_sem_materia_id='2352';
$gruposMaterias->descripcion='El curso Biología Celular (MBIO 1100), debe inscribirlo simultáneamente con el laboratorio de Biología Celular (MBIO 1101), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='79';
$gruposMaterias->prim_sem_materia_id='2354';
$gruposMaterias->descripcion='Una vez registrado el Curso de Laboratorio de Biología Celular (MBIO 1101), cuando revise su Horario por Día y Hora, le aparecerá un conflicto de horario en el sistema. Favor hacer caso omiso de este conflicto; cada sección del laboratorio se divide posteriormente en tutoría y práctica. Una vez inicien sus clases se entregará el cronograma de las dos actividades.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='79';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='El curso Química (QUIM 1103) debe inscribirlo simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='79';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='80';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='80';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='81';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='81';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='82';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='82';
$gruposMaterias->prim_sem_materia_id='1107';
$gruposMaterias->descripcion='El curso Teorías y retos del aprendizaje (EDUC 1101) se debe inscribir simultáneamente con el laboratorio de Teorías y retos del aprendizaje (EDUC 1214), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Educación.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='82';
$gruposMaterias->prim_sem_materia_id='1111';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='82';
$gruposMaterias->prim_sem_materia_id='2984';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='83';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='83';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='84';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='84';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='85';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='85';
$gruposMaterias->prim_sem_materia_id='1107';
$gruposMaterias->descripcion='El curso Teorías y retos del aprendizaje (EDUC 1101) se debe inscribir simultáneamente con el laboratorio de Teorías y retos del aprendizaje (EDUC 1214), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Educación.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='85';
$gruposMaterias->prim_sem_materia_id='1111';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='85';
$gruposMaterias->prim_sem_materia_id='2169';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='85';
$gruposMaterias->prim_sem_materia_id='3314';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='86';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='86';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='87';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='87';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='88';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='88';
$gruposMaterias->prim_sem_materia_id='1107';
$gruposMaterias->descripcion='El curso Teorías y retos del aprendizaje (EDUC 1101) se debe inscribir simultáneamente con el laboratorio de Teorías y retos del aprendizaje (EDUC 1214), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Educación.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='88';
$gruposMaterias->prim_sem_materia_id='1111';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='88';
$gruposMaterias->prim_sem_materia_id='3350';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='88';
$gruposMaterias->prim_sem_materia_id='3356';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='88';
$gruposMaterias->prim_sem_materia_id='3358';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='89';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='89';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='90';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='90';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='91';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='91';
$gruposMaterias->prim_sem_materia_id='1107';
$gruposMaterias->descripcion='El curso Teorías y retos del aprendizaje (EDUC 1101) se debe inscribir simultáneamente con el laboratorio de Teorías y retos del aprendizaje (EDUC 1214), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Educación.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='91';
$gruposMaterias->prim_sem_materia_id='1111';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='91';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='92';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='92';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='93';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='93';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='94';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='94';
$gruposMaterias->prim_sem_materia_id='1107';
$gruposMaterias->descripcion='El curso Teorías y retos del aprendizaje (EDUC 1101) se debe inscribir simultáneamente con el laboratorio de Teorías y retos del aprendizaje (EDUC 1214), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Educación.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='94';
$gruposMaterias->prim_sem_materia_id='1111';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='94';
$gruposMaterias->prim_sem_materia_id='1498';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='95';
$gruposMaterias->prim_sem_materia_id='3307';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='95';
$gruposMaterias->prim_sem_materia_id='3361';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='95';
$gruposMaterias->prim_sem_materia_id='1502';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='95';
$gruposMaterias->prim_sem_materia_id='3362';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='95';
$gruposMaterias->prim_sem_materia_id='3236';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='95';
$gruposMaterias->prim_sem_materia_id='3363';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='95';
$gruposMaterias->prim_sem_materia_id='3364';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='96';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='96';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='97';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='97';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='98';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='98';
$gruposMaterias->prim_sem_materia_id='1107';
$gruposMaterias->descripcion='El curso Teorías y retos del aprendizaje (EDUC 1101) se debe inscribir simultáneamente con el laboratorio de Teorías y retos del aprendizaje (EDUC 1214), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Educación.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='98';
$gruposMaterias->prim_sem_materia_id='1111';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='98';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='98';
$gruposMaterias->prim_sem_materia_id='2235';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='99';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='99';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='100';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='100';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='101';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='101';
$gruposMaterias->prim_sem_materia_id='1107';
$gruposMaterias->descripcion='El curso Teorías y retos del aprendizaje (EDUC 1101) se debe inscribir simultáneamente con el laboratorio de Teorías y retos del aprendizaje (EDUC 1214), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Educación.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='101';
$gruposMaterias->prim_sem_materia_id='1111';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='101';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='101';
$gruposMaterias->prim_sem_materia_id='3044';
$gruposMaterias->descripcion='El curso Química General (QUIM 1101) se debe inscribir simultáneamente con el laboratorio de Química General (QUIM 1102), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='101';
$gruposMaterias->prim_sem_materia_id='3045';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='102';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='102';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='103';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='103';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='104';
$gruposMaterias->prim_sem_materia_id='2169';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='105';
$gruposMaterias->prim_sem_materia_id='2170';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='105';
$gruposMaterias->prim_sem_materia_id='3314';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='105';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='106';
$gruposMaterias->prim_sem_materia_id='3365';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='106';
$gruposMaterias->prim_sem_materia_id='3366';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='106';
$gruposMaterias->prim_sem_materia_id='3367';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='106';
$gruposMaterias->prim_sem_materia_id='3368';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='107';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='107';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='108';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='108';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='109';
$gruposMaterias->prim_sem_materia_id='2235';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='109';
$gruposMaterias->prim_sem_materia_id='2244';
$gruposMaterias->descripcion='Para estudiantes de Matemáticas se sugiere inscribir el curso de CALCULO DIFERENCIAL (HONORES) MATE 1204 en vez de MATE 1203. El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201). Si el estudiante inscribe precálculo no puede inscribir Física 1 (FISI 1018) pero puede inscribir Prefísica (FISI 1000).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='109';
$gruposMaterias->prim_sem_materia_id='1323';
$gruposMaterias->descripcion='El curso Física 1 (FISI 1018) se debe inscribir simultáneamente con Física Experimental (FISI 1019), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='109';
$gruposMaterias->prim_sem_materia_id='1325';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='109';
$gruposMaterias->prim_sem_materia_id='1983';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='110';
$gruposMaterias->prim_sem_materia_id='2444';
$gruposMaterias->descripcion='El curso Introducción a la Profesión Médica (MEDI 1101) se dicta en el Hospital Universitario de la Fundación Santa Fe de Bogotá. Al organizar su horario debe prever aproximadamente hora y media para su desplazamiento.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='110';
$gruposMaterias->prim_sem_materia_id='2263';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='110';
$gruposMaterias->prim_sem_materia_id='2352';
$gruposMaterias->descripcion='El curso Biología Celular (MBIO 1100), debe inscribirlo simultáneamente con el laboratorio de Biología Celular (MBIO 1101), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='110';
$gruposMaterias->prim_sem_materia_id='2354';
$gruposMaterias->descripcion='Una vez registrado el Curso de Laboratorio de Biología Celular (MBIO 1101), cuando revise su Horario por Día y Hora, le aparecerá un conflicto de horario en el sistema. Favor hacer caso omiso de este conflicto; cada sección del laboratorio se divide posteriormente en tutoría y práctica. Una vez inicien sus clases se entregará el cronograma de las dos actividades.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='110';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='El curso Química (QUIM 1103) debe inscribirlo simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='110';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='110';
$gruposMaterias->prim_sem_materia_id='1320';
$gruposMaterias->descripcion='Si usted desea inscribir el curso de Física Básica 1 (FISI-1012), debe inscribirlo simultáneamente con el laboratorio de Física Básica 1 (FISI-1013). Adicionalmente, debe hacerlo después de haber inscrito el curso de PRINCIPIOS MATEM. EN MEDICINA (MATE-1721).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='110';
$gruposMaterias->prim_sem_materia_id='1322';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='111';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='111';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='112';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='112';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='113';
$gruposMaterias->prim_sem_materia_id='2351';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='113';
$gruposMaterias->prim_sem_materia_id='2352';
$gruposMaterias->descripcion='El curso Biología Celular (MBIO 1100), debe inscribirlo simultáneamente con el laboratorio de Biología Celular (MBIO 1101), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='113';
$gruposMaterias->prim_sem_materia_id='2354';
$gruposMaterias->descripcion='Una vez registrado el Curso de Laboratorio de Biología Celular (MBIO 1101), cuando revise su Horario por Día y Hora, le aparecerá un conflicto de horario en el sistema. Favor hacer caso omiso de este conflicto; cada sección del laboratorio se divide posteriormente en tutoría y práctica. Una vez inicien sus clases se entregará el cronograma de las dos actividades.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='113';
$gruposMaterias->prim_sem_materia_id='289';
$gruposMaterias->descripcion='El curso de Biología de Organismos (BIOL 1300), debe inscribirlo simultáneamente con la sección complementaria de Biología de Organismos (BIOL 1300C) y el laboratorio de Biología de Organismos (BIOL 1301), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Biología.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='113';
$gruposMaterias->prim_sem_materia_id='290';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='113';
$gruposMaterias->prim_sem_materia_id='291';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='113';
$gruposMaterias->prim_sem_materia_id='2248';
$gruposMaterias->descripcion='Los estudiantes de Microbiología pueden optar por las Matemáticas de Ingeniería, iniciando con Cálculo Diferencial (Según resultado del examen de nivel de matemáticas). El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='113';
$gruposMaterias->prim_sem_materia_id='3046';
$gruposMaterias->descripcion='El curso Química (QUIM 1103) debe inscribirlo simultáneamente con el laboratorio de Química (QUIM 1104), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='113';
$gruposMaterias->prim_sem_materia_id='3048';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='115';
$gruposMaterias->prim_sem_materia_id='2819';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='115';
$gruposMaterias->prim_sem_materia_id='2822';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='115';
$gruposMaterias->prim_sem_materia_id='2851';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='115';
$gruposMaterias->prim_sem_materia_id='382';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='115';
$gruposMaterias->prim_sem_materia_id='2825';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='115';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='115';
$gruposMaterias->prim_sem_materia_id='2038';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='116';
$gruposMaterias->prim_sem_materia_id='375';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='116';
$gruposMaterias->prim_sem_materia_id='379';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='116';
$gruposMaterias->prim_sem_materia_id='380';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='116';
$gruposMaterias->prim_sem_materia_id='381';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='116';
$gruposMaterias->prim_sem_materia_id='382';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='116';
$gruposMaterias->prim_sem_materia_id='410';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='116';
$gruposMaterias->prim_sem_materia_id='411';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='117';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='117';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='118';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='118';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='119';
$gruposMaterias->prim_sem_materia_id='2819';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='119';
$gruposMaterias->prim_sem_materia_id='2822';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='119';
$gruposMaterias->prim_sem_materia_id='2851';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='119';
$gruposMaterias->prim_sem_materia_id='2833';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='119';
$gruposMaterias->prim_sem_materia_id='2837';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='119';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='119';
$gruposMaterias->prim_sem_materia_id='2038';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='120';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='120';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='121';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='121';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='122';
$gruposMaterias->prim_sem_materia_id='2819';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='122';
$gruposMaterias->prim_sem_materia_id='2822';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='122';
$gruposMaterias->prim_sem_materia_id='2851';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='122';
$gruposMaterias->prim_sem_materia_id='382';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='122';
$gruposMaterias->prim_sem_materia_id='2825';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='122';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='122';
$gruposMaterias->prim_sem_materia_id='2038';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='123';
$gruposMaterias->prim_sem_materia_id='375';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='123';
$gruposMaterias->prim_sem_materia_id='379';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='123';
$gruposMaterias->prim_sem_materia_id='380';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='123';
$gruposMaterias->prim_sem_materia_id='381';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='123';
$gruposMaterias->prim_sem_materia_id='382';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='123';
$gruposMaterias->prim_sem_materia_id='410';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='123';
$gruposMaterias->prim_sem_materia_id='411';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='124';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='124';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='125';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='125';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='126';
$gruposMaterias->prim_sem_materia_id='2819';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='126';
$gruposMaterias->prim_sem_materia_id='2822';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='126';
$gruposMaterias->prim_sem_materia_id='2851';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='126';
$gruposMaterias->prim_sem_materia_id='2843';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='126';
$gruposMaterias->prim_sem_materia_id='2855';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='126';
$gruposMaterias->prim_sem_materia_id='2854';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='126';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='126';
$gruposMaterias->prim_sem_materia_id='2038';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='127';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='127';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='128';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='128';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='129';
$gruposMaterias->prim_sem_materia_id='2819';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='129';
$gruposMaterias->prim_sem_materia_id='2822';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='129';
$gruposMaterias->prim_sem_materia_id='2851';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='129';
$gruposMaterias->prim_sem_materia_id='2825';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='129';
$gruposMaterias->prim_sem_materia_id='3373';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='129';
$gruposMaterias->prim_sem_materia_id='2038';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='129';
$gruposMaterias->prim_sem_materia_id='783';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='130';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='130';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='131';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='131';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='133';
$gruposMaterias->prim_sem_materia_id='612';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='133';
$gruposMaterias->prim_sem_materia_id='613';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='133';
$gruposMaterias->prim_sem_materia_id='614';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='195';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='3228';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='208';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='3369';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='611';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='3370';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='1276';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='3371';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='3305';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='2169';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='3366';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='3372';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='2816';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='3373';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='134';
$gruposMaterias->prim_sem_materia_id='2837';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='135';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='135';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='136';
$gruposMaterias->prim_sem_materia_id='2984';
$gruposMaterias->descripcion='Los estudiantes de Psicología deben inscribir la sección 1 del curso FUNDAMENTOS DE PSICOLOGÍA.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='136';
$gruposMaterias->prim_sem_materia_id='3374';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='136';
$gruposMaterias->prim_sem_materia_id='293';
$gruposMaterias->descripcion='El curso Biología para Psicología (BIOL 1312) se debe inscribir simultáneamente con el laboratorio de Biología para Psicología (BIOL 1313), de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Biología.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='136';
$gruposMaterias->prim_sem_materia_id='294';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='136';
$gruposMaterias->prim_sem_materia_id='537';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='136';
$gruposMaterias->prim_sem_materia_id='536';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='137';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='137';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='138';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='138';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='139';
$gruposMaterias->prim_sem_materia_id='3042';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='139';
$gruposMaterias->prim_sem_materia_id='3043';
$gruposMaterias->descripcion='El curso Introducción a la Química (QUIM 1000) se debe inscribir simultáneamente con el curso Química Experimental (QUIM 1111),de lo contrario la clase principal no podrá ser inscrita. Para verificar esta información, le recomendamos revisar la lista de las secciones complementarias AQUI, seleccionando el departamento de Química.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='139';
$gruposMaterias->prim_sem_materia_id='3052';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='139';
$gruposMaterias->prim_sem_materia_id='3053';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='139';
$gruposMaterias->prim_sem_materia_id='2242';
$gruposMaterias->descripcion='El estudiante debe aprobar el examen de clasificación de matemáticas o tener en su prueba SABER11-Matemáticas un puntaje igual o superior a 79 puntos para poderla inscribir, de lo contrario debe inscribir Precálculo (MATE 1201).';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='139';
$gruposMaterias->prim_sem_materia_id='2352';
$gruposMaterias->descripcion='El curso Biología Celular (MBIO 1100), debe inscribirlo simultáneamente con el laboratorio de Biología Celular (MBIO 1101), de lo contrario la clase principal no podrá ser inscrita.';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='139';
$gruposMaterias->prim_sem_materia_id='2354';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='140';
$gruposMaterias->prim_sem_materia_id='2074';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='140';
$gruposMaterias->prim_sem_materia_id='2175';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='141';
$gruposMaterias->prim_sem_materia_id='2075';
$gruposMaterias->descripcion='';
$gruposMaterias->save();

$gruposMaterias = new PrimSemGrupoMateria();
$gruposMaterias->prim_sem_grupo_id='141';
$gruposMaterias->prim_sem_materia_id='2176';
$gruposMaterias->descripcion='';
$gruposMaterias->save();


    }
}
