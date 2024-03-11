<?php

namespace App\Exports;


use App\Models\PropectBrochure;
use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;

class ExportProspect implements  FromView,ShouldAutoSize,WithStyles
{

    private static  $dateD;
    private static $dateF;

    function __construct(){
        $arguments = func_get_args();
        $numberOfArguments = func_num_args();

        if (method_exists($this, $function = '__construct'.$numberOfArguments)) {
            call_user_func_array(array($this, $function), $arguments);
        }
    }

    public function __construct2($dateD, $dateF)
    {
            static::$dateD = $dateD;
            static::$dateF = $dateF;
    }



    public function view():View
    {
        return view('exports.prospect-brochure',[
            'brochures' => PropectBrochure::select('formations.id','titre','prenom','nom','telephone','email','sent_email','propect_brochures.created_at')
                ->join('formations','formations.id','=','propect_brochures.formationId')
                ->whereBetween('propect_brochures.created_at', [static::$dateD." 00:00:00", static::$dateF." 23:59:59"])
                ->orderBy('id','desc')
                ->get()
        ]);
    }

   public static function date_fr($date){
        return \Carbon\Carbon::parse($date)->format('d/m/Y');
    }


    public function styles(Worksheet $sheet)
    {
        return [
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
        ];
    }
}
