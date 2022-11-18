<?php

namespace App\Http\Controllers;

use App\Models\API;
use Illuminate\Http\Request;

class APIController extends Controller
{
    public function index(Request $request)
    {
        if ($request->search) {

            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://mmb.karbh.com/api/v1/categories',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDFmNWMwNDI2Yjc2OWJhZjE1ZDMxYjAwZWJmZDFhZmNhN2Y0NzI2OGJhOTU1NzAwNTk1ZTc2ZWZkOTBmYThiN2U2ZmQ2NDY3NmM2OTA4YjIiLCJpYXQiOjE2Njg3NDc2NjQuOTcyODM0LCJuYmYiOjE2Njg3NDc2NjQuOTcyODM5LCJleHAiOjE3MDAyODM2NjQuOTY2Mzc5LCJzdWIiOiIxMjgiLCJzY29wZXMiOltdfQ.mDDz7Rhu07zcpPe_213d39NRia6UFK92lPr2A0eUrqfm78hazKR532I0LJhux2vbOAa5TjtPHhlMQPE_pRKlMslGKDKgstq-YZRT6wZ9_FEZRK9MMItfQE3-gb_XhmELOeehQPhnZgqyvF9fZQbdG2jjzQbMIkrnzEGHDg2XmWmzTa6Pqrfw4g8adaCGnALbl7tT4Leb5cBigoa8TBrC16TwmJjIPklz1j6n4Dilko7snP5R-2oNFLq3ZCRUkXVJRwoFTrbZetIct7E8cXgvImHzq-N_OGRM6kHnt771N4UsghTZ8QgamaG0dmvhb5gdeGnYVwcmevIGvFA-9_W7QKq7_hY7F8K_DQ8Gja3MAnaKnwmE0t2FFO8StDlc2ipD6QydH6gRiStlWbVvrcdeIxMHwhAQHspMf5_ANxcGpbADL4nRLXJ84WjYvT5hXFeeALQ7CDAU85bX77_dxljqIlfJ3MiIhFAOvsFJjDRP2HqVty9qxFro2J-d3T5LhEZl5EC31N0mCpbqOu8RUMnNfxLtqgV-fEDqyo6GemurtMdphlPNAGju095jS_wm5NcQZwpsGDBYGc_QMVsQDHoipT1fblMbAHuJdOFjLxlijk-yAJB1iVwUcn11OqI5BepmbF7Ge37ZkpuvAe6RXladW7pCxuLhVPFzYo42tRL2LE4'
                ),
            ));

            $data = curl_exec($curl);
            $result = json_decode($data, true);
            $search = $request->search;
            $categories = collect($result)->where('name', 'LIKE', "%{$search}%");
            dd($categories);
            return view('admin.api_data.index', ['categories' => $categories]);
        } else {
            $curl = curl_init();

            curl_setopt_array($curl, array(
                CURLOPT_URL => 'http://mmb.karbh.com/api/v1/categories',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'GET',
                CURLOPT_HTTPHEADER => array(
                    'Authorization: Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiJ9.eyJhdWQiOiIxIiwianRpIjoiMDFmNWMwNDI2Yjc2OWJhZjE1ZDMxYjAwZWJmZDFhZmNhN2Y0NzI2OGJhOTU1NzAwNTk1ZTc2ZWZkOTBmYThiN2U2ZmQ2NDY3NmM2OTA4YjIiLCJpYXQiOjE2Njg3NDc2NjQuOTcyODM0LCJuYmYiOjE2Njg3NDc2NjQuOTcyODM5LCJleHAiOjE3MDAyODM2NjQuOTY2Mzc5LCJzdWIiOiIxMjgiLCJzY29wZXMiOltdfQ.mDDz7Rhu07zcpPe_213d39NRia6UFK92lPr2A0eUrqfm78hazKR532I0LJhux2vbOAa5TjtPHhlMQPE_pRKlMslGKDKgstq-YZRT6wZ9_FEZRK9MMItfQE3-gb_XhmELOeehQPhnZgqyvF9fZQbdG2jjzQbMIkrnzEGHDg2XmWmzTa6Pqrfw4g8adaCGnALbl7tT4Leb5cBigoa8TBrC16TwmJjIPklz1j6n4Dilko7snP5R-2oNFLq3ZCRUkXVJRwoFTrbZetIct7E8cXgvImHzq-N_OGRM6kHnt771N4UsghTZ8QgamaG0dmvhb5gdeGnYVwcmevIGvFA-9_W7QKq7_hY7F8K_DQ8Gja3MAnaKnwmE0t2FFO8StDlc2ipD6QydH6gRiStlWbVvrcdeIxMHwhAQHspMf5_ANxcGpbADL4nRLXJ84WjYvT5hXFeeALQ7CDAU85bX77_dxljqIlfJ3MiIhFAOvsFJjDRP2HqVty9qxFro2J-d3T5LhEZl5EC31N0mCpbqOu8RUMnNfxLtqgV-fEDqyo6GemurtMdphlPNAGju095jS_wm5NcQZwpsGDBYGc_QMVsQDHoipT1fblMbAHuJdOFjLxlijk-yAJB1iVwUcn11OqI5BepmbF7Ge37ZkpuvAe6RXladW7pCxuLhVPFzYo42tRL2LE4'
                ),
            ));

            $data = curl_exec($curl);
            $categories = json_decode($data, true);
//        dd($result);
            return view('admin.api_data.index', ['categories' => $categories]);
        }
    }

    public function store(Request $request)
    {
        $input = $request->all();
        API::create($input);
        return redirect()->back()->with('success', 'Record Store Successfully...');
    }
}
