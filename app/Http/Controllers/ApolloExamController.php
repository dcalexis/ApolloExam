<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Random;
use App\Models\Breakdown;
use DB;

class ApolloExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
		$randoms = Random::all();
		
		$rand_x = rand(5,10);
		
		for($x = 1; $x <= $rand_x; $x++){
			\App\Models\Random::factory()->create();
			$rand_y = rand(5, 10);
			for($y = 1; $y <= $rand_y; $y++){
				$last_id = DB::table('Random')->latest()->first()->id;
				
				$bd = new Breakdown;
				$bd->values = substr(str_shuffle('0123456789abcdefghijklmnopqrstuvwxyz'), 0, 5);
				$bd->random_id = $last_id;
				$bd->save();
			}
		}
		//$random = new Random;
		//$random->values = "sada";
		//$random->flag = 1;
		//$random->save();
		
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
