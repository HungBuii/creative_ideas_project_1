<?php

namespace App\Http\Controllers\Guest;

use App\Models\Idea;
use Illuminate\Http\Request;
use PhpOffice\PhpWord\PhpWord;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\TemplateProcessor;


class GuestController extends Controller
{
    // Homepage
    public function index()
    {
        $ideas = Idea::where('status', 1)->paginate(3);
        return view('guest.index', compact('ideas'));
    }

    // View contribution
    public function view_contribution($id)
    {
        $single_idea = Idea::where('id', $id)->first();
        if ($single_idea->file === $single_idea->student->name . '.docx')
        {
            $temp = $single_idea->student->name;
            return view('guest.view_contribution', compact('temp'));
        }
        return view('guest.view_contribution', compact('single_idea'));
    }
}
