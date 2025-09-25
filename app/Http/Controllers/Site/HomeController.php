<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\Car;

class HomeController extends Controller
{

    public function index()
    {
        // Envia para a view
        return view('site.home.index');
    }

    public function contact()
    {
        // Envia para a view
        return view('site.contact.index');
    }
    public function about()
    {
        // Envia para a view
        return view('site.about.index');
    }
    public function news()
    {
        // Envia para a view
        return view('site.news.index');
    }

    public function newsProfile()
    {
        // Envia para a view
        return view('site.news.profile.index');
    }

    public function newsNotice()
    {
        // Envia para a view
        return view('site.news.notice.index');
    }

    public function newsEvent()
    {
        // Envia para a view
        return view('site.news.event.index');
    }
    
    public function newsEventDetail()
    {
        // Envia para a view
        return view('site.news.event.detail.index');
    }

    public function newsArticle()
    {
        // Envia para a view
        return view('site.news.article.index');
    }

    public function multimedia()
    {
        // Envia para a view
        return view('site.multimedia.index');
    }
    public function youth()
    {
        // Envia para a view
        return view('site.youth.index');
    }
}

