<?php

namespace App\Http\Controllers;
use App\Models\Contact;
use App\Models\Custom;
use App\Models\Employee;
use App\Models\NoticeBoard;
use App\Models\PackageTransaction;
use App\Models\Parking;
use App\Models\ParkingSlot;
use App\Models\ParkingZone;
use App\Models\Subscription;
use App\Models\User;
use Carbon\Carbon;

class HomeController extends Controller
{
    public function index()
    {

        if (\Auth::check()) {
            if (\Auth::user()->type == 'super admin') {
                  $result['totalEmployee'] = Employee::count();
                // make for total active employ check active 
                $result['totalActiveEmployee'] = Employee::where('status',1)->count();
                

            
                return view('dashboard.super_admin', compact('result'));
            } else {
                
                $result['totalEmployee'] = Employee::count();

                $result['settings']=settings();


                return view('dashboard.index', compact('result'));
            }
        } else {
            if (!file_exists(setup())) {
                header('location:install');
                die();
            } else {
                $landingPage=getSettingsValByName('landing_page');

                if($landingPage=='on'){
                   
                    return view('layouts.landing');

                }else{
                    return redirect()->route('login');
                }
            }

        }

    }

     
     

     

}
