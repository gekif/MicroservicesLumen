<?php

namespace App\Http\Controllers;


use App\Traits\ApiResponser;
use Illuminate\Http\Request;

class BookController
{
    use ApiResponser;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }


    /**
     * Return the list of books
     * @return Illuminate\Http\Response
     */
    public function index()
    {

    }


    /**
     * Create one new book
     * @return Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }


    /**
     * Obtains and show one book
     * @return Illuminate\Http\Response
     */
    public function show($book)
    {

    }


    /**
     * Update existing book
     * @return Illuminate\Http\Response
     */
    public function update(Request $request, $book)
    {

    }


    /**
     * Remove existing book
     * @return Illuminate\Http\Response
     */
    public function destroy($book)
    {

    }

}