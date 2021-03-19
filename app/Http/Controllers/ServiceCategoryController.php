<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    public function AllCat(){
 return view ('admin.servicecategory.index');
    }
}
