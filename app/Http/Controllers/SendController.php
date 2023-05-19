<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;
use Revolution\Google\Sheets\Facades\Sheets;
use Google\Service\Exception;

class SendController extends Controller
{
    public function __construct()
    {
        $this->middleware('throttle:5,30')->only('index');
    }
    public function index(Request $request)
    {
        Sheets::spreadsheet(config('sheet.spreadsheet_id'));
        $rows = [$request->name, $request->phone, $request->email, $request->invest, $request->care];

        $rows = array($rows);
            Sheets::sheet('chien')->append($rows);
            return redirect()->route('index');
    }
}
