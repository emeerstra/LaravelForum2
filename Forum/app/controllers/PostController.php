<?php

class PostController extends \BaseController {
	public function __construct(){
		$this->beforeFilter('guest', ['only' => ['create','store']]);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($categoryid, $subcategoryid)
	{
		$data['postsArray'] = Post::where('subcatid', '=', $subcategoryid) -> get();
		$data['navChoice'] = 0;
		$data['subcategory'] = SubCategory::find($subcategoryid);
		$data['category'] = Category::find($categoryid);
		//$data['breadcrumb'] = 2;
		return View::make('post.postIndex', $data);
		//echo 'post controller';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('post.postCreateForm');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store($categoryid, $subcategoryid)
	{
		$v = Post::getValidate(Input::all());
		if($v->passes()){
			$postContent = $_POST['inputPostContent'];
			$now = date('Y-m-d H:i:s');
			Post::insert( array(
					'catid' => $categoryid,
					'subcatid' => $subcategoryid,
					'userid' => Auth::user()->id,
					'postContent' => $postContent,
					'created_at' => $now,
					'updated_at' => $now
				)
			);

			return Redirect::to('/categories/'.$categoryid.'/subcategories/'.$subcategoryid.'/posts');
		} 
		else {
			$URL = Request::path();
			return Redirect::to($URL.'/create')->withErrors($v->messages());
		}

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

}