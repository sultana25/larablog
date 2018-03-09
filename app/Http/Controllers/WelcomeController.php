<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $homeContent=view('pages.home');
        $categoryContent=view('pages.category');
        $friendsContent=view('pages.friends');
        return view('master')
            ->with('homeContent',$homeContent)
            ->with('categoryContent',$categoryContent)
            ->with('FriendsContent',$friendsContent);
    }
    
    public function portfolio(){
        $portfolioContent=view('pages.portfolio');
        $friendsContent=view('pages.friends');
        return view('master')
            ->with('portfolioContent',$portfolioContent)
            ->with('FriendsContent',$friendsContent);
    }
    
    public function services(){
        $servicesContent=view('pages.services');
        $categoryContent=view('pages.category');
        return view('master')
            ->with('servicesContent',$servicesContent)
            ->with('categoryContent',$categoryContent);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
