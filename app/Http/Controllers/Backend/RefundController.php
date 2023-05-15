<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Refund;
class RefundController extends Controller
{
    public function index(){
        $this->setTitle("Refund");
        return view('backend.refund', ['refund'=>Refund::with('transaksi')->get()]);
    }
    public function accept(Request $request){
        if ( $request->get('id') ) {
            $refund = Refund::findOrFail($request->get('id'));
            if ( $refund->status === 'Y' ) {
                $refund->status = "N";
            } else {
                $refund->status = "Y";
            }
            $refund->id_user = auth()->user()->id;
            if ( $refund->save() ) {
                return redirect()->back();
            }
        }
        abort(403);
    }
}
