<?php

namespace App\Http\Controllers;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\View\View;




class PortfolioController extends Controller
{
  public function index()
  {
      $projects = Project::paginate();

      return view('welcome', compact('projects'));
          
  }
}
