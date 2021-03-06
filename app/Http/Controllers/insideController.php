<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class insideController extends Controller {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

        // 顯示內文的 page 要考慮一下是不是要搬到其它的controller.
        // 每一個頁面都需要判斷 session 是否存在 是否有 login
        public function mainPage(){
                if ( Session::has('userName')) {
                        $result = DB::select('select * from user where id = 1');
                        return view('mainPage')->with('name' , Session::get('userName', 'Guest'));
                } else {
                        // 沒有session，導回登入頁面
                        return redirect('login');
                }
        }

        public function caseCreate(){
                // 建立物件的頁面
                if( Session::has('userName')){
                        return view('mainPage')->with('name' , Session::get('userName', 'Guest'));
                } else {
                        return redirect('login');
                }
        }

        public function caseManage(){
                // 管理物件的頁面
                if( Session::has('userName')){
                        return view('manage')->with('name' , Session::get('userName', 'Guest'));
                } else {
                        return redirect('login');
                }
        }
}
