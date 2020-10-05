<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Report;

class ReportController extends Controller
{
    public function report_user( Request $request )
    {
        if ( Auth::user() ) {
            $user = Auth::user();

            try {
                $report = Report::where([
                    [ "reported_by", "=", $user->id ],
                    [ "entity_id", "=", $request->user_id ],
                ])->first();
                if ( $report ) {
                    return response()->json([
                        "success" => false,
                        "message" => "You have already reported this person!",
                        "errCode" => 0,
                    ]);
                }

                $report = new Report;
                $report->reported_by = $user->id;
                $report->reported_entity = "user";
                $report->entity_id = $request->user_id;
                $report->problems = json_encode($request->problems);
                $report->comment = $request->comment;
                $report->save();
        
                return response()->json([
                    "success" => true,
                    "message" => "User Reported!"
                ]);
            } catch (\Exception $e) {
                return response()->json([
                    "success" => false,
                    "message" => $e->getMessage(),
                    "errCode" => 1,
                ]);
            }
        } else {
            return response()->json([
                "success" => false,
                "message" => "Login to Report someone!",
                "errCode" => 2,
            ]);
        }
    }
}
