<?php

namespace App\Http\Controllers\Admin;

use App\Division;
use App\Http\Controllers\Controller;
use App\Product;
use App\Slider;
use App\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function dashboard(){
    	$totalUser = User::all()->count();
    	$totalSlider = Slider::all()->count();
    	$totalDivision = Division::all()->count();
    	$totalProduct = Product::all()->count();
    	return view('admin.dashboard', compact('totalUser', 'totalSlider', 'totalDivision', 'totalProduct'));
    }
}
