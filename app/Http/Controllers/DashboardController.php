<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Book;
use App\Model\Author;
use App\Model\Publisher;
use App\Model\Member;

class DashboardController extends Controller
{
    public function index()
    {
    	$book = Book::all();
    	$author = Author::all();
    	$publisher = Publisher::all();
    	$member = Member::all();

    	$countBook = count($book);
    	$countAuthor = count($author);
    	$countPublisher = count($publisher);
    	$countMember = count($member);

    	return view('dashboard.index', compact('book','author','publisher','member','countBook','countAuthor','countMember','countPublisher'));
    }
}
