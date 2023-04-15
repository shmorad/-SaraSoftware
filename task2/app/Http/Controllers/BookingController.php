<?php
namespace App\Http\Controllers;

use App\Models\product;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
class BookingController extends Controller
{
    public $product_list = [];
    public function booking($id){
        $product= product::find($id);
        return view('fontend.booking',compact('product'));
    }
}
