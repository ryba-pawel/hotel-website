<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientsController extends Controller
{    
    public function showClients() {
        $title = 'Title...';
        $decription = 'decription...';

        

        $data = [
            'clientOne' => 'Imie 1',
            'clientTwo' => 'Imie 2'
        ];
        //Compact method
        // return view('clients.index', compact('title', 'decription'));

        // with method
        // return view('clients.index')->with('title' , $title) 
        //                             ->with('decription' , $decription);

        // with method
        // return view('clients.clients-list')->with('data' , $data);

        //all
        return view('clients.clients-list', [
            'data' => $data,
            'title' => $title,
            'decription' => $decription
        ]);



    }
    public function showIdClient($name) {

        $data = [
            'clientOne' => 'Imie 1',
            'clientTwo' => 'Imie 2'
        ];

       
        // print_r($data);

        return view('clients.clients-id', [
            'client' => $data[$name] ?? 'Product ' . $name . ' does not exist'
        ]);
    }
}
