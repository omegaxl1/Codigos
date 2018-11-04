<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'admin'], function (){

// busqueda de ususarios
Route::get('administrador/admin','Admin\UserController@searchadmin')->name('buscar admistradores');

Route::get('medico/medic','Admin\MediController@searchmedic')->name('buscar Medicos');

Route::get('auxiliar/axui','Admin\NurseController@searchnurse')->name('buscar Auxiliar de enefermeria');

Route::get('recepcionista/recep','Admin\ReceptionController@searchrecep')->name('buscar Auxiliar de enefermeria');





 
//manejo de usuarios administradores

Route::get('administrador', 'Admin\UserController@view')->name('viewadmin');



Route::post('administrador/ingreso','Admin\UserController@insert')->name('Ingreso de Administradores');


  Route::get('administrador/usuario/editar/{id}', 'Admin\UserController@edit')->name('Ver Usuario');

Route::post('administrador/usuario/actualizar/{id}', 'Admin\UserController@update')->name('Actaulizar Datos');





// manejo de usuarios medicos 

 Route::get('medicos', 'Admin\MediController@view')->name('view medicos');

Route::post('medico/ingreso','Admin\MediController@insert')->name('Ingreso de Meicos');


  Route::get('medico/usuario/editar/{id}', 'Admin\MediController@edit')->name('Ver Usuario');

Route::post('medico/usuario/actualizar/{id}', 'Admin\MediController@update')->name('Actaulizar Datos');



// manejo de usuarios enefermeria


Route::get('auxiliar', 'Admin\NurseController@view')->name('view auxiliar');

Route::post('auxiliar/ingreso','Admin\NurseController@insert')->name('Ingreso de auxiliar');


  Route::get('auxiliar/usuario/editar/{id}', 'Admin\NurseController@edit')->name('Ver auxiliar');






// manejo de usuarios recepcion


Route::get('recepcionista', 'Admin\ReceptionController@view')->name('view auxiliar');

Route::post('recepcionista/ingreso','Admin\ReceptionController@insert')->name('Ingreso de auxiliar');


  Route::get('recepcionista/usuario/editar/{id}', 'Admin\ReceptionController@edit')->name('Ver auxiliar');



//mantenimineto de usuerios

Route::get('usuario/eliminar/{id}', 'Admin\UserController@deleteuser')->name('Eliminar Usuarios');


 Route::get('usuario/restaurar/{id}', 'Admin\UserController@restore')->name('Restaurar Usuarios');

//manejo de espacialidades
Route::get('espacialidades', 'Admin\SpecialtyController@view')->name('view espacialidades');
Route::post('espacialidades/ingreso','Admin\SpecialtyController@insert')->name('Ingreso de Especialidades');
Route::get('espacialidades/buscar','Admin\SpecialtyController@seach')->name('busqueda de especialidades');
Route::get('espacialidades/editar/{id}', 'Admin\SpecialtyController@edit')->name('Ver especilidad');

Route::post('espacialidades/actualizar/{id}', 'Admin\SpecialtyController@update')->name('Actaulizar Datos');

//busqueda de pacientes

Route::get('pacientea/pacient', 'Attention\PatientController@searchpatient')->name('view pacientes');

//buscar expediente

Route::post('pacientea/buscar/{id}', 'Attention\FileController@searchexp')->name('Buscar Razon de consulta');

 //manejo de pacientes

  Route::get('pacientesa', 'Attention\PatientController@view')->name('view pacientes');

 
Route::get('pacientea/eliminar/{id}', 'Attention\PatientController@delete')->name('Eliminar Paciente');


 Route::get('pacientea/restaurar/{id}', 'Attention\PatientController@restore')->name('Restaurar Paciente');






 // manejo de consulata medicas del pacientes
  Route::get('pacientea/consulta/{id}', 'Attention\FileController@view')->name('Ver Ficha de Atencion');

  Route::get('paciente/expediente/ver/{id}','Attention\FileController@block')->name('Ver ficha de la antencion');


//anualar consulta

Route::get('pacientea/consulta/eliminar/{id}', 'Attention\ReasonConsulController@delete')->name('Eliminar Motivo de consulta');


 Route::get('pacientea/consulta/restaurar/{id}', 'Attention\ReasonConsulController@restore')->name('Restaurar Motivo de consulta');

//vista de medicos y ficha de consulta

 Route::get('pacientea/medico/{id}','Admin\MediController@block')->name('ver medico');

Route::get('pacientea/ver/{id}','Attention\FileController@block')->name('ver expediente');



});


Route::group(['middleware'=>'doct'], function (){
  //busqueda de pacientes

Route::get('pacientesm', 'Attention\PatientController@viewmedic')->name('view pacientes');

  Route::post('pacientem/ingreso','Attention\PatientController@insertmedic')->name('Ingreso de paciente');

Route::get('pacientem/editar/{id}', 'Attention\PatientController@edit')->name('Ver Paciente');

Route::post('pacientem/actualizar/{id}', 'Attention\PatientController@updatemedic')->name('Actaulizar Datos');

//busqueda de pacientes

Route::get('pacientem/pacient', 'Attention\PatientController@searchpatientatt')->name('view pacientes');
 // manejo de consulata medicas del pacientes
  Route::get('pacientem/consulta/{id}', 'Attention\FileController@view')->name('Ver Ficha de Atencion');


  //manejo de anamnesis del paciente 
  Route::post('pacientem/anamnesis/{id}', 'Attention\AnamnesisController@insert')->name('Ingreso de Anamnesis');

  Route::post('pacientem/anamnesisedit/{id}', 'Attention\AnamnesisController@update')->name('Editar de Anamnesis');



  //manejo de motivo de consulta

Route::post('pacientem/razonconsult/{id}','Attention\ReasonConsulController@insert')->name('Ingreso de Motivo de la Consulta');

Route::post('pacientem/razonconsultaedit/{id}','Attention\ReasonConsulController@update')->name('Ingreso de Motivo de la Consulta');


//manejo de signos vitales y exploraciones por regiones

 Route::post('pacientem/signosvitales/{id}','Attention\VitalSignController@insert')->name('Ingreso de Sgnos Vitales');
 
  Route::post('pacientem/signosvitalesedit/{id}','Attention\VitalSignController@update')->name('Ingreso de Sgnos Vitales');

//manejo de  dignostico

Route::post('pacientem/diagnostico/{id}','Attention\DiagnostController@insert')->name('Ingreso del Diagnistico');
Route::post('pacientem/diagnosticoedit/{id}','Attention\DiagnostController@update')->name('Actualizacion del Diagnistico');


//manejo de la evolucion medica

Route::post('pacientem/evolucion/{id}','Attention\EvolutionController@insert')->name('Ingreso de la evolucion');

Route::post('pacientem/evolucionedit/{id}','Attention\EvolutionController@update')->name('Actualizacion de la evolucion');


//buscar expediente
Route::post('pacientem/buscar/{id}', 'Attention\FileController@searchexp')->name('Buscar Razon de consulta');


//vista de medicos y ficha de consulta
Route::get('pacientem/medico/{id}','Admin\MediController@block')->name('ver medico');

Route::get('pacientem/ver/{id}','Attention\FileController@block')->name('ver expediente');

//citas medicas de medicos

Route::get('cita','Attention\DateController@viewdatemedic')->name('ver citas con medicos para usuarios');

Route::get('cita/busquedam/{id}','Attention\DateController@viewdatesearchmedic')->name('ver citas medicas busqueda');

//administracion  de examenes
Route::get('examenes','Attention\MedicalExamsController@view')->name('ver pacientes examenes');

Route::get('examenes/buscar','Attention\MedicalExamsController@viewsearch')->name('ver pacientes examenes');

Route::get('examenes/ver/{id}','Attention\MedicalExamsController@viexamn')->name('ver examenes por pacinetes');

Route::get('examenes/ver/buscar/{id}','Attention\MedicalExamsController@viexamnsearch')->name('ver examenes por pacinetes');

Route::post('examenes/ingreso/{id}','Attention\MedicalExamsController@insert')->name('ingreso de examenes');



Route::get('examenes/ver/exam/{id}','Attention\MedicalExamsController@edit')->name('ver examen');

Route::post('examenes/actualizar/{id}','Attention\MedicalExamsController@update')->name('actualizacion de los examenes medicos');


//generador de pdf
Route::get('expediente','PdfController@viewpatient')->name('ver paciente para reporte');
Route::get('pdf/buscar','PdfController@viewpatieseach')->name('buscar paciente');


Route::get('pdf/generar/{id}', 'PdfController@pdfview')->name('generate-pdf');

});




Route::group(['middleware'=>'nurse'], function (){
//manejo de pacientes
  Route::get('pacientesn', 'Attention\PatientController@viewmedic')->name('view pacientes');
//busqueda de pacientes

Route::get('pacienten/pacient', 'Attention\PatientController@searchpatientatt')->name('view pacientes');

 // manejo de consulata medicas del pacientes
  Route::get('pacienten/consulta/{id}', 'Attention\FileController@view')->name('Ver Ficha de Atencion');

  //manejo de signos vitales y exploraciones por regiones

 Route::post('pacienten/signosvitales/{id}','Attention\VitalSignController@insertn')->name('Ingreso de Sgnos Vitales');
 
  Route::post('pacienten/signosvitalesedit/{id}','Attention\VitalSignController@updaten')->name('Ingreso de Sgnos Vitales');

  // gestion de turnos en enfermeria
 Route::get('gestioncitasn','Attention\DateController@viewmedic')->name('ver citas con medicos');

Route::get('gestioncitasn/busqueda','Attention\DateController@viewsearch')->name('busqueda medico gestion citas');



Route::get('gestioncitasn/ver/medico/citas/{id}','Attention\DateController@viewdate')->name('ver citas medicas por medico');

Route::get('gestioncitasn/ver/medico/citas/busqueda/{id}','Attention\DateController@viewdatesearch')->name('ver citas medicas busqueda');





});


Route::group(['middleware'=>'recept'], function (){

  //manejo de pacientes 

Route::get('pacientesr', 'Attention\PatientController@viewmedic')->name('view pacientes');

Route::post('pacienter/ingreso','Attention\PatientController@insertrecp')->name('Ingreso de paciente');

Route::get('pacienter/editar/{id}', 'Attention\PatientController@edit')->name('Ver Paciente');

Route::post('pacienter/actualizar/{id}', 'Attention\PatientController@updaterecp')->name('Actaulizar Datos');
//busqueda de pacienetes
Route::get('pacienter/pacient', 'Attention\PatientController@searchpatientatt')->name('view pacientes');

//manejo de citas medicad

Route::get('agendacitas','Attention\DateController@view')->name('Ver Pacientes para Aginar turnos');

//proceso de pacientes para las citas

Route::get('agendacitas/paciente','Attention\DateController@searchpatient')->name('Ver Pacientes para Aginar turnos');

Route::get('agendacitas/medico/{id}','Attention\DateController@medic')->name('selecionar medico para cita medica');

Route::get('agendacitas/busqueda/{id}','Attention\DateController@searchmedic')->name('buscar Medico');

Route::get('agendacitas/select/medic/{idpacient}/{idmedic}','Attention\DateController@select')->name('Vista de Paciete y Medico');

Route::post('agendacitas/guardar/{idpacient}/{idmedic}','Attention\DateController@save')->name('guardar cita medica');


// ver citas medicas y gestionar
Route::get('gestioncitas','Attention\DateController@viewmedic')->name('ver citas con medicos');

Route::get('gestioncitas/busqueda','Attention\DateController@viewsearch')->name('busqueda medico gestion citas');



Route::get('gestioncitas/ver/medico/citas/{id}','Attention\DateController@viewdate')->name('ver citas medicas por medico');

Route::get('gestioncitas/ver/medico/citas/busqueda/{id}','Attention\DateController@viewdatesearch')->name('ver citas medicas busqueda');


Route::get('gestioncitas/ver/paciente/citas/{id}','Attention\DateController@viewdatep')->name('ver  ficha de cita');


Route::post('gestioncitas/ver/paciente/citas/actualizar/{id}','Attention\DateController@updatedate')->name('actualizar cita');

Route::get('gestioncitas/ver/paciente/citas/eliminar/{id}','Attention\DateController@deletedate');


});
