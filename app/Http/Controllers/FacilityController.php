<?php

namespace App\Http\Controllers;

use App\Model\Facility;
use App\Model\TutoringAgency;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;

class FacilityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, $tutoring_agency)
    {
        Facility::create([
            'tutoring_agency_id' => $tutoring_agency,
            'facility' => $request->facility
        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $facility = Facility::find($id);
        return response()->json($facility);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request $request
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Facility $facility)
    {
        $facility->update([
            'facility' => $request->facility
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return Facility::destroy($id);
    }

    public function datatablesLoad(TutoringAgency $tutoring_agency)
    {
        $facility = $tutoring_agency->facility()->get(['id', 'facility']);

        return DataTables::of($facility)
            ->addcolumn('actions', function ($facility) {
                return '
                <a onclick="edit_facility(' . $facility->id . ')" class="btn btn-info btn-xs" target="_blank"><i class="fa fa-pencil"></i></a>
                <a onclick="destroy_facility(' . $facility->id . ')" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></a>
                ';
            })
            ->rawColumns(['actions'])
            ->make(true);
    }
}
