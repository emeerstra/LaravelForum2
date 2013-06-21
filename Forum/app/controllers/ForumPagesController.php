<?php 

// app/controllers/ForumController.php

class ForumPagesController extends BaseController
{

	
	public function forumIndex()
	{
		$data['topcategoriesArray'] = Category::where('id', '=', 1)->orwhere('id','=','2') ->get();
		$data['bottomcategoriesArray'] = Category::where('id', '!=', 1)->where('id','!=', 2) ->get();
		$data['navChoice'] = 0;
		return View::make('forumpages.LFIndex', $data);
	}
	
		public function forumCatIndex($categoryid = null)
		{
			//if($category == null)
			$data['subcategoriesArray'] = SubCategory::where('catid', '=', $categoryid) -> get();
			$data['navChoice'] = 0;
			$data['category'] = Category::find($categoryid);
			return View::make('forumpages.LFCatIndex', $data);
		}
		
		/*public function forumSubCatIndex($subcategoryid = null)
		{
			$data['postsArray'] = Post::where('subcatid', '=', $subcategoryid) -> get();
			$data['navChoice'] = 0;
			$data['subcategory'] = SubCategory::find($subcategoryid);
			return View::make('forumpages.LFSubCatIndex', $data);
		}*/
	
	public function showAbout()
	{
		$data['navChoice'] = 1;
		return View::make('forumpages.LFAbout', $data);
	}

	public function showContact()
	{
		$data['navChoice'] = 2;
		return View::make('forumpages.LFContact', $data);
	}
	public function showSources()
	{
		$data['navChoice'] = 3;
		return View::make('forumpages.LFSources', $data);
	}
}