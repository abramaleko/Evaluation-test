<?php

namespace App\Http\Controllers;

use App\Imports\UsersImport;
use App\Models\ExcelData;
use Illuminate\Http\Request;
use Excel;
use DB;
class ExcelController extends Controller
{

     //if showData is true then it will display data, by default is set to faulse
    public function index($showData=false)
    {
       if ($showData) {
          return view('welcome',[
              'data' => ExcelData::all()
          ]);
       }
       else
       {
        return view('welcome');
       }
    }

    public function save(Request $request)
    {
        //validates the file
        $request->validate([
            'excel_file'=> 'required|mimes:xlsx, csv, xls'
         ]);

         $sheets = Excel::toArray(new UsersImport, $request->excel_file);
         $data=$sheets[0];

        DB::transaction(function() use ($data) {
            //loops through the rows inserting data
            for($i=1; $i<=9; $i++)
            {
                DB::table('excel_data')->insert([
                    'cargo_no' => $data[$i][0],
                    'cargo_type' => $data[$i][1],
                    'cargo_size' => $data[$i][2],
                    'weight' => $data[$i][3],
                    'remarks' => $data[$i][4],
                    'wharfage' => $data[$i][5],
                    'days' => $data[$i][6],
                    'storage' => $data[$i][6] * 20,
                    'electricity' => $data[$i][8],
                    'destuffing' => $data[$i][9],
                    'lifting' => $data[$i][10]
                ]);
            }

        });

        return redirect('/')->with('success','Data imported successfully');

    }
}
