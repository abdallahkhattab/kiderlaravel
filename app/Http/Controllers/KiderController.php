<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KiderController extends Controller
{

    function index() {
        return view('kider.index');
    }

    function about() {
        return view('kider.about');
    }

    function appointment() {
        return view('kider.appointment');
    }

    function call_to_action() {
        return view('kider.call-to-action');
    }

    function classes() {
        return view('kider.classes');
    }

    function facility() {
        return view('kider.facility');
    }

    function team() {
        return view('kider.team');
    }

    function testimonial() {
        return view('kider.testimonial');
    }

    function contact() {
        return view('kider.contact');
    }

    function error() {
        return view('kider.404');
    }









}
