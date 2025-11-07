<?php

namespace App\Http\Controllers;

use App\Models\Testy;
use Illuminate\Http\Request;

class TestyController extends Controller
{ 

    public function upd(Request $request, Testy $test){
            $incomingd= $request->validate([
                'name'=>'required',
                'email'=>'required',
                'test'=>'required',

            ]);
            $incomingd['name']=strip_tags(  $incomingd['name']);
            $incomingd['email']=strip_tags(  $incomingd['email']);
            $incomingd['test']=strip_tags(  $incomingd['test']);
            $test->update( $incomingd);

            return redirect('/dashboard');

        }



    public function ed(Testy $test){
        
    

       return view('edit', ['test' => $test]);

    }
    public function del(Testy $tests){
        $tests->delete();
        return redirect('/dashboard');

    }


      public function tes(Request $request){
            $incomingd= $request->validate([
                'name'=>'required',
                'email'=>'required',
                'test'=>'required',

            ]);
            $incomingd['name']=strip_tags(  $incomingd['name']);
            $incomingd['email']=strip_tags(  $incomingd['email']);
            $incomingd['test']=strip_tags(  $incomingd['test']);
            Testy::create($incomingd);
            return redirect('/Story');

        }




    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $tests = Testy::orderBy('created_at', 'desc')->get();
    //     return view('Storytestom', compact('tests'));
    // }

    public function index(Request $request)
{
    $sort = $request->get('sort', 'recent');

    $query = Testy::query();

    if ($sort === 'oldest') {
        $query->orderBy('created_at', 'asc');
    } elseif ($sort === 'name') {
        $query->orderBy('name', 'asc');
    } else {
        $query->orderBy('created_at', 'desc');
    }

    // 👇 Use paginate instead of all()
    $tests = $query->paginate(6);

    return view('home', compact('tests'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Testy $testy)
    {
        return view('edit');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $incomingd=Testy::findOrfail($id);
        return view('/edit',compact('incomingd'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        // $incomingd= $request->validate([
        //         'name'=>'required',
        //         'email'=>'required',
        //         'test'=>'required',

        //     ]);
        //     $incomingd['name']=strip_tags(  $incomingd['name']);
        //     $incomingd['email']=strip_tags(  $incomingd['email']);
        //     $incomingd['test']=strip_tags(  $incomingd['test']);
        //     Testy::create($incomingd);
        //     return redirect('/Story');

            $incomingd=Testy::findOrfail($id);
            $incomingd->name=$request->input('name');
            $incomingd->email=$request->input('email');
            $incomingd->test=$request->input('test');
            $incomingd->save();
            return redirect('/Story');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Testy $testy)
    {
        //
    }
}
