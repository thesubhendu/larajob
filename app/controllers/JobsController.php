<?php

class JobsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$jobs=Job::where('active',1)->get();
		return View::make('index')->with('jobs',$jobs);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		// return "Test";
		return View::make('create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$ccode=str_random(20);
		$data=Input::all();
		$data['ccode']=$ccode;
		
		Job::create($data);
		//mail send
		Mail::send('confirmemail', array('emailer'=>Input::get('email'),'ccode'=>$ccode), function($message){
        $message->to(Input::get('email'))->subject('Welcome to WRS Job!');
    });
		
		return Redirect::route('jobs.index')->with('message',"Thanks for Posting Job. Please check email to proceed");
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
		$job=Job::find($id);
		return View::make('editjob')->with('job',$job);
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
		$job=Job::find($id);
		$job->delete();
		return Redirect::route('jobs.index')->with('deleted','Job Deleted Successfully');
	}

	public function confirm($ccode){
			$jobs=Job::where('ccode',$ccode)->first();

		if($ccode==$jobs->ccode){
			$jobs->active=1;
			$jobs->ccode=null;
			$jobs->save();
			return Redirect::route('jobs.index');
		}else{
			return "Something went wrong";
		}

	}

	public function postSearch(){
		$keyword=Input::get('keyword');
		// $keyword="omg";
		$jobs=Job::all();

		$searchedJobs= new \Illuminate\Database\Eloquent\Collection();
		foreach ($jobs as $job) {
			if(str_contains(strtolower($job->title),strtolower($keyword))){
				$searchedJobs->add($job);
			}
		}

		return View::make('sr',compact('searchedJobs'));

// return "hey";
// return $keyword;



	}

	

}
