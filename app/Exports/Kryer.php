<?php

namespace App\Exports;
// use Maatwebsite\Excel\Concerns\WithMapping;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Illuminate\Http\Request;
// use App\Models\User;
// use Laravel\Passport\Bridge\User;
use App\Models\RaportetDitore;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromView;

use Maatwebsite\Excel\Concerns\WithColumnWidths;
use Maatwebsite\Excel\Concerns\WithStyles;
use PhpOffice\PhpSpreadsheet\Worksheet\Worksheet;
use Maatwebsite\Excel\Concerns\WithEvents;

// use Maatwebsite\Excel\Concerns\WithEvents;
// use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\Exportable;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
// use Maatwebsite\Excel\Concerns\WithEvents;
use Maatwebsite\Excel\Events\BeforeExport;
use Maatwebsite\Excel\Events\AfterSheet;
use App\Exports\Kryer;
Use \Maatwebsite\Excel\Sheet;



class Kryer implements FromCollection ,WithHeadings,WithColumnWidths,WithStyles,  ShouldAutoSize, WithEvents
{
    /**
    * @return \Illuminate\Support\Collection

    */

    protected $Kryer;

    public function __construct($Kryer)
    {
        $this->Kryer = $Kryer;
    }
    
    public function collection()

    {

        return RaportetDitore::where('Kryer', $this->Kryer)->get();

      
        // return RaportetDitore::all();
    
        // return RaportetDitore::select('id', 'prioriteti')->where('id');
       
    }
    // public function registerEvents(): array
    // {
    //     return [
    //         BeforeExport::class  => function(BeforeExport $event) {
    //             $event->writer->setCreator('Patrick');
    //         },
    //         AfterSheet::class    => function(AfterSheet $event) {
    //             $event->sheet->setOrientation(\PhpOffice\PhpSpreadsheet\Worksheet\PageSetup::ORIENTATION_LANDSCAPE);
    //             $event->sheet->styleCells(
    //                 'A2:G8',
    //                 [
    //                     'borders' => [
    //                         'outline' => [
    //                             'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
    //                             'color' => ['argb' => ' blackk'],
    //                         ],
    //                     ]
    //                 ]
    //             );
    //         },
    //     ];
    // }
    // use Exportable;


    // public function test()
    // {
    //     return RaportetDitore::query();
    // }


    public function registerEvents(): array
    {
        return [
          AfterSheet::class  => function(AfterSheet $event) {
                $cellRange = 'A1:U121'; 
                // $event->sheet->getDelegate()->getStyle($cellRange)->getFont()->setSize(8);

                Sheet::macro('styleCells', function (Sheet $sheet, string $cellRange, array $style) {
                    $sheet->getDelegate()->getStyle($cellRange)->applyFromArray($style);
                   });

       

                $event->sheet->getDelegate()->getStyle($cellRange)->getAlignment()->setWrapText(true);
                $event->sheet->styleCells(
                    'A1:U121',
                    [
                            'alignment' => [
                            'horizontal' => \PhpOffice\PhpSpreadsheet\Style\Alignment::HORIZONTAL_LEFT,
                        ],
                    ]
                );


//                 $row_count = 2;
// for($i=0; $i < count($id); $i++) {
//   $sheet->Row($row_count, array(
//     $id[$i]->id, 
    
//   ));
//   $row_count++;
// }

// $sheet->cells('A1:I'.$row_count, function($cells) {
//   $cells->setAlignment('center');
// }); 


     $event->sheet->getStyle('A1:U121')->applyFromArray([
                  'borders' => [
                  'allBorders' => [ // All headers
                   'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                   'color' => ['argb' => '000000'],
            
                         ],
                         
                      ],

                      
                   ]);

                   
            },
        ];      
    }
   


    
    public function styles(Worksheet $sheet)
    {
        return [

            
            // Style the first row as bold text.
            1    => ['font' => ['bold' => true]],
            

            // Styling a specific cell by coordinate.
            // 'B2' => ['font' => ['italic' => true]],

            // Styling an entire column.
            // 'B'  => ['Range' => ['bold' => 16]],

          
            // Worksheets("Sheet1").Range("A1:A5").['bold' => true]
        ];
    }

    public function columnWidths(): array
    
        {
            return [
               'A' => 10,
                'B' => 10,  
                'F' => 15,
                'H' => 50, 
                'I' => 120,
                'J' => 80, 
                'K' => 40,
                'P' => 20, 
                'E' => 15,
                'Q' => 20,
                'S' => 40, 
                'T' => 40,
                'U' => 40,   
                'V' => 40, 
                'R' => 20,      
            ];
        }

    public function headings(): array
    {
        // Set background color for a specific cell
     

        return [
            'Nr' ,
            'Prioriteti',
            'LlDoc',
            'LlojiDet',
            'Detyruesi',
            'Idetyruari',
            'KNP',
            'Titulli',
            'Pershkrimi',
            'KomentiPnt',
            'KomentiMng',
            'v',
            'Prog_PNT',
            'Prog_adm',
            'Kryer',
            'DataKryer',
            'DataCaktuar',
            'Sektori',
     
        ];
       

    }
    
}
