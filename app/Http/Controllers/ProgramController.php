<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Program;

use App\Company;

use App\Weaving_extra;

use App\Unit;

use Auth;

use Vinkla\Hashids\Facades\Hashids;

//use Illuminate\Support\Facades\Auth;

class ProgramController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware(array('auth', 'verify'));
        //$this->middleware('auth');
    }

    //////////////////////////////////////

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    //////////////////////////////////////

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    //////////////////////////////////////

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        
        
        $messages = [
            'required'=>'That :attribute is compulsory',
        ];
        
        $rules = [
                'code'=>'required|max:255|min:3|unique:programs',
                'customer'=>'required',
        ];
        
        $this->validate($request, $rules , $messages);
        
        //$success = \App\Post::create($request->all());

        $useris = Auth::user();

        $code_add    = intval($request->code) + 29;

        $code = $request->code;
                
        $etm_code = $code_add;

        $success =  \App\Program::create([
            "seller_id"=> $useris->company_id,
            "unit"=> $request->unit,
            "code"=> $code,
            "customer"=> $request->customer,
            "warp_count"=> $request->warp_count,
            "warp_yarn_type"=> $request->warp_yarn_type,
            "warp_yarn_blend"=> $request->warp_yarn_blend,
            "weft1_count"=> $request->weft1_count,
            "weft1_yarn_type"=> $request->weft1_yarn_type,
            "weft1_yarn_blend"=> $request->weft1_yarn_blend,
            "weft2_count"=> $request->weft2_count,
            "weft2_yarn_type"=> $request->weft2_yarn_type,
            "weft2_yarn_blend"=> $request->weft2_yarn_blend,
            "weft3_count"=> $request->weft3_count,
            "weft3_yarn_type"=> $request->weft3_yarn_type,
            "weft3_yarn_blend"=> $request->weft3_yarn_blend,
            "weft4_count"=> $request->weft4_count,
            "weft4_yarn_type"=> $request->weft4_yarn_type,
            "weft4_yarn_blend"=> $request->weft4_yarn_blend,
            "w_end"=> $request->w_end,
            "w_pick"=> $request->w_pick,
            "w_width"=> $request->w_width,
            "w_fabric_type"=> $request->w_fabric_type,
            "w_selvedge"=> $request->w_selvedge,
            "w_writing"=> $request->w_writing,
            "change_by"=> $useris->id,
            "remarks"=> $request->remarks,
            "set_date"=> $request->set_date,
            "etm_code"=> $etm_code,
        ]);

        if($success)
        {
            session()->flash('message', 'Program Added');
            //return redirect(url('posts/create'))->with('message', 'Successfully Posted');
            return redirect(url('home/program/add'));
        }

    }   


    //////////////////////////////////////



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show(User $user)
    {
        //


        /**************/

        //$companies = Company::all();
        $companies =   Company::orderBy('name')->get();
        $units     =   Unit::orderBy('name')->get();

        $w_extras1     =  Weaving_extra::where([

            ['type', '=',  'warp count'],

            ])->get();


        $w_extras2     =  Weaving_extra::where([

            ['type', '=',  'warp type'],

            ])->get();


        $w_extras3     =  Weaving_extra::where([

            ['type', '=',  'warp blend'],

            ])->get();


        $w_extras4     =  Weaving_extra::where([

            ['type', '=',  'fabric type'],

            ])->get();


        $w_extras5     =  Weaving_extra::where([

            ['type', '=',  'selvedge'],

            ])->get();
            
        /**************/


        return view('admin.add_weaving', compact('companies', 'units', 'w_extras1', 'w_extras2', 'w_extras3', 'w_extras4', 'w_extras5'));


        //return view('admin.add_weaving');
    }


    //////////////////////////////////////


    public function view(User $user)
    {
        //

        /*********GET SIMPLE DATE************/

         //$programs = \App\Program::paginate(50);

        /*********GET SIMPLE WHERE CLAUSE************/

        //$programs = Program::where('code' =>  '175-1')->paginate(15);

        /*********AND IN WHERE CLAUSE************/

       /*$programs = Program::where(   [
            ['status', '=', '1'],
            ['subscribed', '<>', '1'],
                                        ])->toSql();*/


        /*********OR IN WHERE CLAUSE************/

       /*$programs = Program::where('votes', '>', 100)
                    ->orWhere('name', 'John')->toSql();*/


        $useris = Auth::user();

        $programs = Program::where([

            ['change_by', '=',  $useris->id],
            ['thisonetoshow', '=', 'yes'],
            ['levelcode', '=', 'Master'],

            ])->orderBy('code', 'desc')->paginate(20);


        return view('admin.view', compact('programs'));

    }

    //////////////////////////////////////

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $id = Hashids::decode($id);

        if(count($id) == 0)
        {
             return redirect('home/program/view/')->with('message', 'Access Wrong page');
        }

        $useris = Auth::user();

        //$programs = Program::where('wid', $id)->first();

        $programs = Program::where([
                                    ['wid', '=', $id],
                                    ['change_by', '=', $useris->id],
                                ])->first();

        $programs_count = Program::where([
                                    ['wid', '=', $id],
                                    ['change_by', '=', $useris->id],
                                ])->count();

        if($programs_count <= 0)
        {
             return redirect('home/program/view/')->with('message', 'Access Wrong page');
        }
        else
        {
            
        }

        /**************/

        //$companies = Company::all();
        $companies =   Company::orderBy('name')->get();
        $units     =   Unit::orderBy('name')->get();

        $w_extras1     =  Weaving_extra::where([

            ['type', '=',  'warp count'],

            ])->get();


        $w_extras2     =  Weaving_extra::where([

            ['type', '=',  'warp type'],

            ])->get();


        $w_extras3     =  Weaving_extra::where([

            ['type', '=',  'warp blend'],

            ])->get();


        $w_extras4     =  Weaving_extra::where([

            ['type', '=',  'fabric type'],

            ])->get();


        $w_extras5     =  Weaving_extra::where([

            ['type', '=',  'selvedge'],

            ])->get();

        /**************/


        return view('admin.edit_weaving', compact('programs', 'companies', 'units', 'w_extras1', 'w_extras2', 'w_extras3', 'w_extras4', 'w_extras5'));



    }

    //////////////////////////////////////

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    public function update(Request $request)
    {
        //

        $wid = Hashids::decode($request->wid);   

        //$programs = Program::find($wid);
        $programs = Program::where("wid", "=", $wid)->first();

        $programs->code             =  $request->code;
        $programs->unit             =  $request->unit;
        $programs->customer         =  $request->customer;
        $programs->warp_count       =  $request->warp_count;        
        $programs->warp_yarn_type   =  $request->warp_yarn_type;
        $programs->warp_yarn_blend  =  $request->warp_yarn_blend;
        $programs->weft1_count      =  $request->weft1_count;
        $programs->weft1_yarn_type  =  $request->weft1_yarn_type;
        $programs->weft1_yarn_blend =  $request->weft1_yarn_blend;
        $programs->weft2_count      =  $request->weft2_count;
        $programs->weft2_yarn_type  =  $request->weft2_yarn_type;
        $programs->weft2_yarn_blend =  $request->weft2_yarn_blend;
        $programs->weft3_count      =  $request->weft3_count;
        $programs->weft3_yarn_type  =  $request->weft3_yarn_type;
        $programs->weft3_yarn_blend =  $request->weft3_yarn_blend;
        $programs->weft4_count      =  $request->weft4_count;
        $programs->weft4_yarn_type  =  $request->weft4_yarn_type;
        $programs->weft4_yarn_blend =  $request->weft4_yarn_blend;
        $programs->w_end            =  $request->w_end;
        $programs->w_pick           =  $request->w_pick;
        $programs->w_width          =  $request->w_width;
        $programs->w_fabric_type    =  $request->w_fabric_type;
        $programs->w_selvedge       =  $request->w_selvedge;
        $programs->w_writing        =  $request->w_writing;
        $programs->remarks          =  $request->remarks;
        $programs->set_date         =  $request->set_date;  
        
        $updated  = $programs->save();
        
        if($updated)
        {            
            return redirect('home/program/view')->with('message', 'Program Successfully Updated');
        }

    }

    //////////////////////////////////////

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        //

         $wid = Hashids::decode($request->whichcodetoval);

         $programs = Program::where("wid", "=", $wid)->first();

         $updated  = $programs->delete();

        if($updated)
        {            
            return "1";
        }
        else
        {
            return "0";
        }

    }


    //////////////////////////////////////

    public function program_detail($id)
    {
        //
        
        $id = Hashids::decode($id);
        
        if(count($id) == 0)
        {
             return redirect('home/program/view/')->with('message', 'Access Wrong page');
        }

        $useris = Auth::user();
        
        $programs = Program::where([
                                    ['wid', '=', $id],
                                    ['change_by', '=', $useris->id],
                                ])->first();

        $programs_count = Program::where([
                                    ['wid', '=', $id],
                                    ['change_by', '=', $useris->id],
                                ])->count();

        if($programs_count > 0)
        {
             return view('admin.program_detail', compact('programs'));
        }
        else
        {
            return redirect('home/program/view/')->with('message', 'Access Wrong page');
        }

        
        
    }


    //////////////////////////////////////

    public function cancel($id)
    {
        //

         $wid = Hashids::decode($id);

         if(count($wid) == 0)
         {
             return redirect('home/program/view/')->with('message', 'Access Wrong page');
         }

         $programs = Program::where('wid', $wid)->first();

        $programs->status   = "Cancelled";

        $updated = $programs->save();
        
        if($updated)
        {            
            return redirect('home/program/view/')->with('message', 'Program Successfully Cancelled');
        }

    }


    //////////////////////////////////////

    public function program_multiple($id)
    {
        //

        $wid = Hashids::decode($id);

        if(count($wid) == 0)
        {
             return redirect('home/program/view/')->with('message', 'Access Wrong page');
        }

        $programs_out = Program::where('wid', $wid)->first();

        $code = $programs_out->code;

        $programs = Program::whereRaw("(code = '$code' or mastercode = '$code') and thisonetoshow = 'yes' order by LENGTH(code), code ")->get();

        //dd($programs);

        return view('admin.view_multiple', compact('programs'));       

    }


    //////////////////////////////////////

    public function search(Request $request)
    {
        //

        $search = $request->get('search');

        $search = strtolower($search);

        $useris = Auth::user();

        $programs = Program::whereRaw("(code like '%$search%' or mastercode like '%$search%') and thisonetoshow = 'yes' order by LENGTH(code), code ")->get();

        
        return view('admin.view_multiple', compact('programs'));       

    }

}
