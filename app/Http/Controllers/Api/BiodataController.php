<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Biodata;
use Illuminate\Support\Facades\Validator;

class BiodataController extends Controller
{

    public function index()
    {
        $biodatas = Biodata::all();
        return response()->json([
            'status' => 200,
            'biodatas' => $biodatas,
        ]);
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'uuid' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
            'nama' => 'required|max:25',
            'pekerjaan' => 'required|max:50',
            'tanggal_lahir' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validate_err' => $validator->messages(),
            ]);
        } else {
            $biodata = new Biodata;
            $biodata->nama = $request->input('nama');
            $biodata->pekerjaan = $request->input('pekerjaan');
            $biodata->tanggal_lahir = $request->input('tanggal_lahir');
            $biodata->save();

            return response()->json([
                'status' => 200,
                'mesage' => 'Biodata has been added!'
            ]);
        }
    }


    public function edit($uuid)
    {
        $biodata = Biodata::find($uuid);
        if ($biodata) {
            return response()->json([
                'status' => 200,
                'biodata' => $biodata,
            ]);
        } else {
            return response()->json([
                'status' => 404,
                'message' => 'No Biodata ID Found!',
            ]);
        }
    }


    public function update(Request $request, $uuid)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|max:25',
            'pekerjaan' => 'required|max:50',
            'tanggal_lahir' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'validate_err' => $validator->messages(),
            ]);
        } else {

            $biodata = Biodata::find($uuid);
            if ($biodata) {
                $biodata->nama = $request->input('nama');
                $biodata->pekerjaan = $request->input('pekerjaan');
                $biodata->tanggal_lahir = $request->input('tanggal_lahir');
                $biodata->update();

                return response()->json([
                    'status' => 200,
                    'message' => 'Biodata has been updated!',
                ]);
            } else {
                return response()->json([
                    'status' => 404,
                    'message' => 'No Biodata ID Found!',
                ]);
            }
        }
    }

    public function destroy($uuid)
    {
        $biodata = Biodata::find($uuid);
        $biodata->delete();
        return response()->json([
            'status' => 200,
            'message' => 'Biodata has been deleted!',
        ]);
    }
}
