<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoge = Report::get();
        return view('index', compact('hoge'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ate_recod = $request->all();
        $report = new Report;
        $report->fill($ate_recod)->save();

        return redirect()->route('blog.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function show(Blog $blog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function edit($blog_id)
    {
        $report = Report::get();
        foreach ($report as $data) {
            if($data->id == $blog_id) {
                $blog = $data;
            }
        }
        return view('edit', compact('blog', 'blog_id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Blog  $blog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $blog_id)
    {
        $report = Report::get();
        $report->find($blog_id)->fill($request->all())->save();
        return redirect()->route('blog.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($blog_id)
    {
        $report = Report::get();
        $report->find($blog_id)->delete();
        return redirect()->route('blog.index');
    }
}
