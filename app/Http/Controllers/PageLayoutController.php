<?php

namespace App\Http\Controllers;

use App\Models\PageLayout;
use Illuminate\Http\Request;

class PageLayoutController extends Controller
{
    protected $page_layout;

    public function __construct()
    {
        $this->page_layout = new PageLayout();
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return $this->page_layout->all();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return $this->page_layout->create($request->all());
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $page_layout = $this->page_layout->find($id);
        return $page_layout;
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $page_layout = $this->page_layout->find($id);
        $page_layout->update($request->all());
        return $page_layout;
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page_layout = $this->page_layout->find($id);
        return $page_layout->delete();
    }
}
