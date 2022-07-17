<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Admin\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReportController extends Controller
{
    public function addReport()
    {
        return view('admin_theme.add_report');
    }

    public function storeReport(Request $request)
    {

        $request->validate([
            'unFilter' => 'required',
            'm_home_clothes_C' => 'required',
            'm_home_clothes_B' => 'required',
            'm_clothes_go_outs_C' => 'required',
            'm_clothes_go_outs_B' => 'required',
            'm_trouser' => 'required',
            'm_A_Class' => 'required',
            'm_suit' => 'required',
            'w_abaya' => 'required',
            'w_home_clothes_C' => 'required',
            'w_home_clothes_B' => 'required',
            'w_clothes_go_outs_C' => 'required',
            'w_clothes_go_outs_B' => 'required',
            'w_headscarf' => 'required',
            'w_A_Class' => 'required',
            'c_big_C' => 'required',
            'c_big_B' => 'required',
            'baby' => 'required',
            'c_A_Class' => 'required',
            'shoes' => 'required',
            'other' => 'required',
            'bags' => 'required',
            'Toys' => 'required',
            'Furniture' => 'required',
            'brides' => 'required',
        ],[
            'unFilter.required' => 'ركز ياوحش',
            'm_home_clothes_C.required' => 'ركز ياوحش',
            'm_home_clothes_B.required' => 'ركز ياوحش',
            'm_clothes_go_outs_C.required' => 'ركز ياوحش',
            'm_clothes_go_outs_B.required' => 'ركز ياوحش',
            'm_trouser.required' => 'ركز ياوحش',
            'm_A_Class.required' => 'ركز ياوحش',
            'm_suit.required' => 'ركز ياوحش',
            'w_abaya.required' => 'ركز ياوحش',
            'w_home_clothes_C.required' => 'ركز ياوحش',
            'w_home_clothes_B.required' => 'ركز ياوحش',
            'w_clothes_go_outs_C.required' => 'ركز ياوحش',
            'w_clothes_go_outs_B.required' => 'ركز ياوحش',
            'w_headscarf.required' => 'ركز ياوحش',
            'w_A_Class.required' => 'ركز ياوحش',
            'c_big_C.required' => 'ركز ياوحش',
            'c_big_B.required' => 'ركز ياوحش',
            'baby.required' => 'ركز ياوحش',
            'c_A_Class.required' => 'ركز ياوحش',
            'shoes.required' => 'ركز ياوحش',
            'other.required' => 'ركز ياوحش',
            'bags.required' => 'ركز ياوحش',
            'Toys.required' => 'ركز ياوحش',
            'Furniture.required' => 'ركز ياوحش',
            'brides.required' => 'ركز ياوحش',
        ]);


        $report = Report::insert([
            'admin_id' => Auth::id(),
            'unFilter'=> $request->unFilter,
            'm_home_clothes_C'=> $request->m_home_clothes_C,
            'm_home_clothes_B'=> $request->m_home_clothes_B,
            'm_clothes_go_outs_C'=> $request->m_clothes_go_outs_C,
            'm_clothes_go_outs_B'=> $request->m_clothes_go_outs_B,
            'm_trouser'=> $request->m_trouser,
            'm_A_Class'=> $request->m_A_Class,
            'm_suit'=> $request->m_suit,
            'w_abaya'=> $request->w_abaya,
            'w_home_clothes_C'=> $request->w_home_clothes_C,
            'w_home_clothes_B'=> $request->w_home_clothes_B,
            'w_clothes_go_outs_C'=> $request->w_clothes_go_outs_C,
            'w_clothes_go_outs_B'=> $request->w_clothes_go_outs_B,
            'w_headscarf'=> $request->w_headscarf,
            'w_A_Class'=> $request->w_A_Class,
            'c_big_C'=> $request->c_big_C,
            'c_big_B'=> $request->c_big_B,
            'baby'=> $request->baby,
            'c_A_Class'=> $request->c_A_Class,
            'shoes'=> $request->shoes,
            'other'=> $request->other,
            'bags'=> $request->bags,
            'Toys'=> $request->Toys,
            'Furniture'=> $request->Furniture,
            'brides'=> $request->brides,
        ]);

        $notification = array([
            'message' => 'test',
            'alert-type' => 'success',
        ]);
//        return redirect()->route('your route name');
//        return redirect()->back()
        return redirect()->route('admin.dashboard')->with('success', 'Success! User created');
    }
}
