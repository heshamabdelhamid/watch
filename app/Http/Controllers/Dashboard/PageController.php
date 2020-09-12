<?php

namespace App\Http\Controllers\Dashboard;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use Illuminate\Validation\Rule;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $pages = Page::when($request->search, function ($q) use ($request) {
            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orwhere('des', 'like', '%' . $request->search . '%')
                ->orwhere('meta_des', 'like', '%' . $request->search . '%')
                ->orwhere('meta_keywords', 'like', '%' . $request->search . '%');
        })->paginate(10);

        return view('Dashboard.pages.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('Dashboard.pages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:191', 'unique:pages'],
        ]);

        Page::create($request->all());
        return redirect()->route('pages.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $page = Page::FindOrFail($id);
        return view('Dashboard.pages.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $page = Page::FindOrFail($id);

        $request->validate([
            'name' => ['required', 'string', 'max:191', Rule::unique('pages')->ignore($page->id)]
        ]);

        $page->update($request->all());
        return redirect()->route('pages.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Page::FindOrFail($id)->delete();

        return redirect()->route('pages.index');
    }
}