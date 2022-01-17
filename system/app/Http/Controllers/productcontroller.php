<?php

namespace App\Http\Controllers;
use App\Models\product;

class productController extends Controller {
    function index(){
        $data['list_product'] = product::all();
        return view('product.index', $data);

    }
    function create(){
        return view('product.create');

    }
    function store(){
        $product = new product;
        $product['nama'] = request('nama');
        $product['harga'] = request('harga');
        $product['ukuran'] = request('ukuran');
        $product['stok'] = request('stok');
        $product['deskripsi'] = request('deskripsi');


        $product->save();
        return redirect('product')->with('success', 'data berhasil ditambahkan');

    }
    function show(){

    }
    function edit(){

    }
    function update(){

    }
    function destroy(){

    }
   
}