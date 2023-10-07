<?php
namespace Zems\LibWeb;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Route;
use DB;

class LibWebController extends Controller
{
       
    public function index($data = false)
    {
        return "Admin demo";
    }    
    
    
}
