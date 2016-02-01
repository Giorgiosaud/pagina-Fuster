<?php

class PrinciplesController extends BaseController {

	/**
	 * Principle Repository
	 *
	 * @var Principle
	 */
	protected $principle;

	public function __construct(Principle $principle)
	{
		$this->principle = $principle;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$principles = $this->principle->all();

		return View::make('principles.index', compact('principles'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('principles.create');
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$input = Input::all();
		$validation = Validator::make($input, Principle::$rules);

		if ($validation->passes())
		{
			$this->principle->create($input);

			return Redirect::route('principles.index');
		}

		return Redirect::route('principles.create')
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$principle = $this->principle->findOrFail($id);

		return View::make('principles.show', compact('principle'));
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$principle = $this->principle->find($id);

		if (is_null($principle))
		{
			return Redirect::route('principles.index');
		}

		return View::make('principles.edit', compact('principle'));
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$input = array_except(Input::all(), '_method');
		$validation = Validator::make($input, Principle::$rules);

		if ($validation->passes())
		{
			$principle = $this->principle->find($id);
			$principle->update($input);

			return Redirect::route('principles.show', $id);
		}

		return Redirect::route('principles.edit', $id)
			->withInput()
			->withErrors($validation)
			->with('message', 'There were validation errors.');
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$this->principle->find($id)->delete();

		return Redirect::route('principles.index');
	}

}
