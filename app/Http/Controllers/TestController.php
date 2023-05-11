<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Google\Service\Exception;

class TestController extends Controller
{
    public function index(Request $request)
    {
        Sheets::spreadsheet(config('sheet.spreadsheet_id'));

        $rows = [$request->email, $request->phone, $request->address];

        $rows = array($rows);
//        try {
            Sheets::sheet('chien')->append($rows);
            return Redirect::route('create');
    }
//        } catch (Exception $e) {
//            if ($e->getCode() === 400) {
//                return view('create');
//            } elseif($e->getCode() === 200) {
//                return view('create');
//                session()->flash('message', 'Post successfully updated.');
//            }
//        };
//    }

    public function insert_data()
    {
        return view("insert_data");
    }

    public function create()
    {
        return view("create");
    }
}
