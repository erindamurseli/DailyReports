<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

class RaportiDitore extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'raporti:get';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        // return 0;


        // $serverName = "192.168.0.20"; //serverName\instanceName
        // $connectionInfo = array( "Database"=>"RaportetDitorePrimex", "UID"=>"admini", "PWD"=>"123456");
        // $conn = sqlsrv_connect( $serverName, $connectionInfo);
        
        
    //     if( $conn === false ) {
    //         die( print_r( sqlsrv_errors(), true));
    //    } else {
    //        print "Good DB Connection: $conn<br>";
    //    }
       
    //    print "<h2>Query Example 1 | Fetching by Associate Array</h2>";
    //    $sql = "SELECT Prioriteti FROM vw_DETALLSot_EI";
    //    print "SQL: $sql\n";
    //    $result = sqlsrv_query($conn, $sql);
    //    if($result === false) {
    //        die(print_r(sqlsrv_errors(), true));
    //    }
       #Fetching Data by array
    //    while($row = sqlsrv_fetch_array($result, SQLSRV_FETCH_ASSOC)) {

        // print_r($row);

        // dd ($row['DataKryer']);

        RaportetDitore::create(
        
           
            [
                    // 'LlDoc' => $row['LlDoc'],
                    // 'LlojiDet' => $row['LlojiDet'],
                    // 'Detyruesi' => $row['Detyruesi'],
                    // 'iDetyruari' => $row['iDetyruari'],
                    // 'KNP' => $row['KNP'],
                    // 'Titulli' => $row['Titulli'],
                    // 'Pershkrimi' => $row['Pershkrimi'],
                    // 'KomentiPnt' => $row['KomentiPnt'],
                    // 'KomentiMng' => $row['KomentiMng'],
                    // 'v' => $row['v'],
                    // 'Prog_PNT' => $row['Prog_PNT'],
                    // 'Prog_adm' => $row['Prog_adm'],
                    // 'Kryer' => $row['Kryer'],
                    // 'DataKryer' => $row['DataKryer'],
                    // 'DataCaktuar' => $row['DataCaktuar'],
                    'Prioriteti' => $row['Prioriteti'],
              
            ]
        );

    // }
    echo 'done';
    
      


        
    }
}
