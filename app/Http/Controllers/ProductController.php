<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use DB;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $products = DB::table('products as pr')
        ->join('units_measure as u', 'u.id', 'pr.UnitMeasure')
        ->join('categories as ct', 'ct.id', 'pr.Category')
        ->select(
            'pr.id', 
            'pr.NameProduct as product', 
            DB::raw("CONCAT(pr.Weight, ' ', u.abbreviation) as weight"),
            'pr.Weight as weight2', 
            'u.id as idUnit', 
            'pr.Price as price', 
            'pr.Stock as stock', 
            'ct.category as category', 
            'ct.id as idCategory', 
            'pr.Reference as reference',
        )
        ->get()->toArray();

        $units = DB::table('units_measure')->select()
        ->get()->toArray();

        $categories = DB::table('categories')->select()
        ->get()->toArray();

        //Lista de los registros de los productos
        return view('products.index', ['products'=>$products, 'units'=>$units, 'categories'=>$categories]);
    }

    public function store(Request $request)
    {
        //Insert de registros a la tabla productos
        DB::table('products')
        ->insert(
            [
                'NameProduct' => $request->name,
                'Reference' => $request->reference,
                'Price' => $request->price,
                'Weight' => $request->weight,
                'UnitMeasure' => $request->unit,
                'Category' => $request->category,
                'Stock' => $request->stock,
                'created_at' => DB::raw("NOW()"),
                'updated_at' => DB::raw("NOW()")
            ]
        );

        return Redirect::to("product");
    }

    public function update(Request $request){
        // Elimina el producto

        DB::table('products')
        ->where('id', $request->id)
        ->update(
            [
                'NameProduct' => $request->name,
                'Reference' => $request->reference,
                'Price' => $request->price,
                'Weight' => $request->weight,
                'UnitMeasure' => $request->unit,
                'Category' => $request->category,
                'Stock' => $request->stock,
                'updated_at' => DB::raw("NOW()")
            ]
        );

        return Redirect::to("product");
    }

    public function destroy(Request $request){
        // Elimina el producto

        DB::table('products')
        ->delete($request->id);

        return Redirect::to("product");
    }

    
}