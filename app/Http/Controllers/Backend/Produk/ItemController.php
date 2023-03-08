<?php

namespace App\Http\Controllers\Backend\Produk;

use App\Http\Controllers\Controller;
use App\Repository\ItemProdukRepository;
use App\Traits\DataTablesTrait;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    use DataTablesTrait;
    private $itemRepository;
    public function __construct(){
        $this->itemRepository = new ItemProdukRepository();
    }
    public function index(){
        $this->deleteAction('index','home','data');
        return view('backend.produk.tampil');
    }
    public function getDatatables(Request $request){
        if($request->ajax()){
            return $this->itemRepository->getDataTables();
        }
    }
}
