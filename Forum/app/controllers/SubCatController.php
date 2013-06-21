<?php


class SubCatController extends \BaseController {
	
	public function __construct(){
		$this->beforeFilter('guest', ['only' => ['create']]);
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index($categoryid)
	{
		$data['subcategoriesArray'] = SubCategory::where('catid', '=', $categoryid) -> get();
		$data['navChoice'] = 0;
		$data['category'] = Category::find($categoryid);
		//$data['breadcrumb'] = 1;
		return View::make('subcat.subcatIndex', $data);
		//echo 'subcat controller';
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create($categoryid)
	{
		$data['category'] = Category::find($categoryid);
		return View::make('subcat.subcatCreateForm',$data);
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	 //This is a subcategory. You create the subcategory, but also the first post of that subcategory.
	public function store($categoryid)
	{
		$v = SubCategory::getValidate(Input::all());
		if($v->passes()){
			$subcatTitle = $_POST['inputSubCatTitle'];
			$subcatDescription = $_POST['inputSubCatDescription'];
			$subcatPostContent = $_POST['inputSubCatPost'];
			$now = date('Y-m-d H:i:s');
			SubCategory::insert( array(
					'catid' => $categoryid,
					'userid' => Auth::user()->id,
					'subcatTitle' => $subcatTitle,
					'subcatDescription' => $subcatDescription,
					'subcatTotalPosts' => 1,
					'created_at' => $now,
					'updated_at' => $now
				)
			);
			//Changed this so that it uses the getPdo get id of last insert. No more duplicate problem. 
			$subcategoryid = DB::getPdo()->lastInsertId();
			Post::insert( array(
					'catid' => $categoryid,
					'subcatid' => $subcategoryid,
					'userid' => Auth::user()->id,
					'postContent' => $subcatPostContent,
					'created_at' => $now,
					'updated_at' => $now
				)
			);
			//return Redirect::to('/categories/'.$categoryid.'/subcategories');
			return Redirect::to('/categories/'.$categoryid.'/subcategories/'.$subcategoryid.'/posts');
		} else {
			$URL = Request::path();
			return Redirect::to($URL.'/create')->withErrors($v->messages());
			//echo 'failed';
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
		echo 'this specific subcat? '. $id;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		echo 'editing subcat with id '. $id;
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