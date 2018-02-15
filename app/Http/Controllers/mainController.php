<?php

namespace DejandoHuella\Http\Controllers;

use Auth;
use Redirect;
use Schema;
use File;
use Storage;
use Illuminate\Http\Request;
use Illuminate\Database\Schema\Blueprint;
use DejandoHuella\Http\Requests;
use DejandoHuella\Http\Controllers\Controller;

//clases primarias para inicializar los datos de la app
use DejandoHuella\paise;
use DejandoHuella\srcnav;
use DejandoHuella\submoduls;
use DejandoHuella\genero;
use DejandoHuella\user;
use DejandoHuella\datospersonale;
use DejandoHuella\permiso;
use DejandoHuella\estadopersona;
use DejandoHuella\roll;
use DejandoHuella\srcapp;
use DejandoHuella\language;
use DejandoHuella\guitype;
use DejandoHuella\guitext;
use DejandoHuella\moduls;
use DejandoHuella\typedocument;
use DejandoHuella\typeuser;
use DejandoHuella\assistan;
use DejandoHuella\categoriaprograma;
use DejandoHuella\photoperfil;

//clases que tienen un array con los datos pertinentes
use DejandoHuella\ClassCunstom\classChargenMainSistemPrimary;
use DejandoHuella\ClassCunstom\classChargenGeographicSistemPrimary;



class mainController extends Controller
{
    private static $chargen = null;
    private static $classObj = null;

    public function index(){

        if (!file_exists(base_path("/public/workspaceUsers/"))) {
            File::MakeDirectory(base_path('public/workspaceUsers'));
        }


        if (Auth::check() > 0) {

            $roll = \DB::table('rolls')->select('rl_wordkey_name')->where('rl_id','=',Auth::user()->us_id_roll)->take(1)->get();

            foreach ($roll as $rows) {
                $redirect = ['roll' => $rows->rl_wordkey_name];
            }
            return Redirect::to($redirect['roll']);

        }else{



        mainController::functionChargenPrimary();

        $dataLg = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);

              $dataSistem = ['lang' => $dataLg];

              $idIdioma = \DB::table('languages')->select('lg_id')->where('lg_wordkey_language','=',$dataSistem['lang'])->take(1)->get();

              foreach ($idIdioma as $rows) {
                $lgId = $rows->lg_id;
              }


        $data = [
            "idUserDataConfig" => null,
            "title-modul" => null,
            "authconfirm" => Auth::check(),
            "multimediaAuth" => false,
            "roll" => "",
            "moduls"  => \DB::table('moduls')
                            ->select('*')
                            ->orderBy('mdls_paramt_name')
                            ->get(),
            "submoduls"  => \DB::table('submoduls')
                            ->select('*')
                            ->orderBy('smdls_paramt_name')
                            ->get() ,
            "dll" => [  'css' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','css')->orderBy('srcapp_id', 'asc')->get(),
                        'js' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','js')->orderBy('srcapp_id', 'asc')->get(),
                        'icon' => \DB::table('srcapps')->select('*')->where('srcapp_fileformat','=','png','and','srcapp_dir','=','img/icon/nav/')->get(),
                        'nav' => \DB::table('srcnavs')->select('*')->where('srcnav_fileformat','=','png','and','srcapp_dir','=','img/icon/nav/')->get(),
                        'text' => \DB::table('guitexts')->select('*')
                                    ->join('guitypes','guitexts.gtxt_id_gtype','=','guitypes.gtype_id')
                                    ->join('languages','guitexts.gtxt_id_language','=','languages.lg_id')
                                    ->where('guitexts.gtxt_id_language','=',$lgId)->get()]

        ];

        return view('index',compact('data'));

        //return dd($data['moduls']$data['submoduls']);

        }



    }

    //funcion para inicializar la app con sus vistas y contenido

   public static function functionChargenPrimary(){
        $v_f = [
            "class" => ['ChrM' => new classChargenMainSistemPrimary,
                        'ChrG' => new classChargenGeographicSistemPrimary]
        ];
   	    $chargenData = [
            'paises' => \DB::table('paises')->get(),
            'generos' => \DB::table('generos')->get(),
            'datospersonales' => \DB::table('datospersonales')->get(),
            'users' => \DB::table('users')->get(),
            'permisos' => \DB::table('permisos')->get(),
            'estadopersonas' => \DB::table('estadopersonas')->get(),
            'rolls' => \DB::table('rolls')->get(),
            'srcapps' => \DB::table('srcapps')->get(),
            'languages' => \DB::table('languages')->get(),
            'guitypes' => \DB::table('guitypes')->get(),
            'guitexts' => \DB::table('guitexts')->get(),
            'moduls' => \DB::table('moduls')->get(),
            'typedocuments' => \DB::table('typedocuments')->get(),
            'typeusers' => \DB::table('typeusers')->get(),
            'assistans' => \DB::table('assistans')->get(),
            'categoriaprogramas' => \DB::table('categoriaprogramas')->get(),
            'photoperfils' => \DB::table('photoperfils')->get(),
            'srcnavs' => \DB::table('srcnavs')->get(),
            'submoduls' => \DB::table('submoduls')->get()
            ];

         if ($chargenData['categoriaprogramas'] == false) {
            $chargen = \DB::table('categoriaprogramas')->insert($v_f["class"]['ChrM']::createCategoPrograms());
        }else{
            $chargen = null;
        }

        if ($chargenData['typeusers'] == false) {
            $chargen = \DB::table('typeusers')->insert($v_f['class']['ChrM']::createTypeUsers());
        }else{
            $chargen = null;
        }

        if ($chargenData['typedocuments'] == false) {
            $chargen = \DB::table('typedocuments')->insert($v_f["class"]['ChrM']::createTypeDocument());
        }else{
            $chargen = null;
        }

        if ($chargenData['generos'] == false) {
            $chargen = \DB::table('generos')->insert($v_f["class"]['ChrM']::createGeneros());
        }else{
            $chargen = null;
        }

        if ($chargenData['rolls'] == false) {
            $chargen = \DB::table('rolls')->insert($v_f["class"]['ChrM']::createRolls());
        }else{
            $chargen = null;
        }

        if ($chargenData['estadopersonas'] == false) {
                $chargen = \DB::table('estadopersonas')->insert($v_f["class"]['ChrM']::createUserAdminStatus());
        }else{
            $chargen = null;
        }

        if ($chargenData['datospersonales'] == false) {
            $chargen = \DB::table('datospersonales')->insert($v_f["class"]['ChrM']::createUserAdminDataPersonal());
        }else{
            $chargen = null;
        }

        if($chargenData['assistans'] == false){
            $chargen = \DB::table('assistans')->insert($v_f['class']['ChrM']::createUserAdminAssistan());
        }else{
            $chargen = null;
        }

        if ($chargenData['permisos'] == false) {
                $chargen = \DB::table('permisos')->insert($v_f["class"]['ChrM']::createUserAdminPermi());
        }else{
            $chargen = null;
        }

        if ($chargenData['users'] == false) {
                $chargen = \DB::table('users')->insert($v_f["class"]['ChrM']::createUserAdminLogin());
        }else{
            $chargen = null;
        }

        if ($chargenData['srcapps'] == false) {
            $chargen = \DB::table('srcapps')->insert($v_f["class"]['ChrM']::createSrcLibrary());
            $chargen = \DB::table('srcapps')->insert($v_f["class"]['ChrM']::createSrcIcons());
        }else{
            $chargen = null;
        }

        if ($chargenData['srcnavs'] == false) {
                $chargen = \DB::table('srcnavs')->insert($v_f["class"]['ChrM']::createSrcIconNav());
        }else{
            $chargen = null;
        }

        if ($chargenData['languages'] == false) {
                $chargen = \DB::table('languages')->insert($v_f["class"]['ChrM']::createLaguanges());
        }else{
            $chargen = null;
        }

        if ($chargenData['guitypes'] == false) {
                $chargen = \DB::table('guitypes')->insert($v_f["class"]['ChrM']::createGuiElements());
        }else{
            $chargen = null;
        }

        if ($chargenData['guitexts'] == false) {
                $chargen = \DB::table('guitexts')->insert($v_f["class"]['ChrM']::createTextGui());
        }else{
            $chargen = null;
        }

        if ($chargenData['moduls'] == false) {
                $chargen = \DB::table('moduls')->insert($v_f["class"]['ChrM']::createModuls());
        }else{
            $chargen = null;
        }

        if ($chargenData['submoduls'] == false) {
                $chargen = \DB::table('submoduls')->insert($v_f["class"]['ChrM']::craeteSubModuls());
        }else{
            $chargen = null;
        }

        if ($chargenData['photoperfils'] == false) {
                $chargen = \DB::table('photoperfils')->insert($v_f["class"]['ChrM']::createPhotoPerfilDir());

                foreach ($v_f["class"]['ChrM']::createPhotoPerfilDir() as $rows) {
                    File::MakeDirectory(base_path('public/workspaceUsers/'.$rows['pp_id_datospersonales'].'/'));
                    File::MakeDirectory(base_path('public/workspaceUsers/'.$rows['pp_id_datospersonales'].'/photon/'));
                    $Datafile = base_path('public/workspaceUsers/'.$rows['pp_id_datospersonales'].'/about.txt');
                    $Configfile = base_path('public/workspaceUsers/'.$rows['pp_id_datospersonales'].'/config.json');
                    $fileData = fopen($Datafile,'a');
                    $dataAbout = \DB::table('datospersonales')->select('*')->where('dp_id','=',$rows['pp_id_datospersonales'])->get();
                    foreach ($dataAbout as $rowsAbout) {
                        if($rowsAbout->dp_td_id == 1){$valueTD='Cedula de ciudadania';}
                        if($rowsAbout->dp_id_roll == 1){$valueR='Administrador';}
                        fwrite($fileData,'======================================================='.PHP_EOL);
                        fwrite($fileData,'======================================================='.PHP_EOL);
                        fwrite($fileData,'==               Datos del usuario                   =='.PHP_EOL);
                        fwrite($fileData,'======================================================='.PHP_EOL);
                        fwrite($fileData,'======================================================='.PHP_EOL);
                        fwrite($fileData,'Documento      : '.$rowsAbout->dp_id.'         '.PHP_EOL);
                        fwrite($fileData,'Tipod documento: '.$valueTD.'      '.PHP_EOL);
                        fwrite($fileData,'Nombre         : '.$rowsAbout->dp_nombre.'     '.PHP_EOL);
                        fwrite($fileData,'Apellido       : '.$rowsAbout->dp_apellido.'   '.PHP_EOL);
                        fwrite($fileData,'Roll           : '.$valueR.'    '.PHP_EOL);
                        fwrite($fileData,'======================================================='.PHP_EOL);

                    }
                    fclose($fileData);
                }

        }else{
            $chargen = null;
        }
   }
}
