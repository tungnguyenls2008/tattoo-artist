<?php

namespace App\Http\Controllers;

use App\Models\AboutCount;
use App\Models\AboutInterest;
use App\Models\AboutMeContent;
use App\Models\AboutMeImage;
use App\Models\AboutMeInfo;
use App\Models\AboutSkill;
use App\Models\AboutTitle;
use App\Models\ContactCard;
use App\Models\ContactTitle;
use App\Models\HomeTitle;
use App\Models\HomeTitle2;
use App\Models\Navlink;
use App\Models\PortfolioDiv;
use App\Models\PortfolioFilter;
use App\Models\PortfolioTitle;
use App\Models\ResumeEducation;
use App\Models\ResumeInfo;
use App\Models\ResumePresentation;
use App\Models\ResumeProfessional;
use App\Models\ResumeTitle;
use App\Models\ResumeTitle2;
use App\Models\SocialLink;
use Illuminate\Http\Request;
use File;

class BackController extends Controller
{

    ////  INDEX
    public function index()
    {
        // Home
        $navLinks = Navlink::all();
        $socialLinks = SocialLink::all();
        $homeTitle = HomeTitle::all();
        $homeTitle2 = HomeTitle2::all();

        // About
        $aboutTitles = AboutTitle::all();
        $aboutMeImg = AboutMeImage::all();
        $aboutMeContents = AboutMeContent::all();
        $aboutMeInfos = AboutMeInfo::all();
        // $infoCount = 1;
        $aboutCounts = AboutCount::all();
        $aboutSkills = AboutSkill::all();
        // $skillcount = 0;
        $aboutInterests = AboutInterest::all();

        // Resume
        $resumeTitles = ResumeTitle::all();
        $resumePresentations = ResumePresentation::all();
        $resumeTitles2 = ResumeTitle2::all();
        $resumeInfos = ResumeInfo::all();
        $resumeEducations = ResumeEducation::all();
        $resumeProfessionals = ResumeProfessional::all();

        // Portfolio
        $portfolioTitles = PortfolioTitle::all();
        $portfolioFilters = PortfolioFilter::all();
        $portfolioDivs = PortfolioDiv::all();

        // Contact
        $contactTitles = ContactTitle::all();
        $contactCards = ContactCard::all();
        // $contactCount = 0;

        return view('backoffice.backoffice', compact('navLinks', 'socialLinks', 'homeTitle', 'homeTitle2', 'aboutTitles', 'aboutMeImg', 'aboutMeContents', 'aboutMeInfos', 'aboutCounts', 'aboutSkills', 'aboutInterests', 'resumeTitles', 'resumePresentations', 'resumeTitles2', 'resumeInfos', 'resumeEducations', 'resumeProfessionals', 'portfolioTitles', 'portfolioFilters', 'portfolioDivs', 'contactTitles', 'contactCards'));
    }


    ////  CREATE
    public function createNavLinks()
    {
        return view('backoffice.pages.create.createNavLinks');
    }
    public function createSocialLinks()
    {
        return view('backoffice.pages.create.createSocialLinks');
    }
    public function createAboutTitles()
    {
        return view('backoffice.pages.create.createAboutTitles');
    }
    public function createAboutMeImg()
    {
        return view('backoffice.pages.create.createAboutMeImg');
    }
    public function createAboutMeContents()
    {
        return view('backoffice.pages.create.createAboutMeContents');
    }
    public function createAboutMeInfos()
    {
        return view('backoffice.pages.create.createAboutMeInfos');
    }
    public function createAboutCounts()
    {
        return view('backoffice.pages.create.createAboutCounts');
    }
    public function createAboutSkills()
    {
        return view('backoffice.pages.create.createAboutSkills');
    }
    public function createAboutInterests()
    {
        return view('backoffice.pages.create.createAboutInterests');
    }
    public function createResumeTitles()
    {
        return view('backoffice.pages.create.createResumeTitles');
    }
    public function createResumeTitles2()
    {
        return view('backoffice.pages.create.createResumeTitles2');
    }
    public function createResumePresentations()
    {
        return view('backoffice.pages.create.createResumePresentations');
    }
    public function createResumeInfos()
    {
        return view('backoffice.pages.create.createResumeInfos');
    }
    public function createResumeEducations()
    {
        return view('backoffice.pages.create.createResumeEducations');
    }
    public function createResumeProfessionals()
    {
        return view('backoffice.pages.create.createResumeProfessionals');
    }
    public function createPortfolioTitles()
    {
        return view('backoffice.pages.create.createPortfolioTitles');
    }
    public function createPortfolioFilters()
    {
        return view('backoffice.pages.create.createPortfolioFilters');
    }
    public function createPortfolioDivs()
    {
        return view('backoffice.pages.create.createPortfolioDivs');
    }
    public function createContactTitles()
    {
        return view('backoffice.pages.create.createContactTitles');
    }
    public function createContactCards()
    {
        return view('backoffice.pages.create.createContactCards');
    }



    ////  STORE
    public function storeNavLinks(Request $request)
    {
        $validation = $request->validate([
            "href" => 'required|min:1|max:40',
            "name" => 'required'
        ]);

        $store = new Navlink;
        $store->href = $request->href;
        $store->name = $request->name;
        $store->save();
        return redirect()->back();
    }
    public function storeSocialLinks(Request $request)
    {
        $validation = $request->validate([
            "href" => 'required|min:1|max:40',
            "aClass" => 'required',
            "iClass" => 'required'
        ]);

        $store = new SocialLink;
        $store->href = $request->href;
        $store->aClass = $request->aClass;
        $store->iClass = $request->iClass;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutTitles(Request $request)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $store = new AboutTitle;
        $store->title = $request->title;
        $store->para = $request->para;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutMeImg(Request $request)
    {
        $validation = $request->validate([
            "src" => 'required',
        ]);

        $store = new AboutMeImage;
        $store->src = $request->src;
        $store->alt = $request->alt;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutMeContents(Request $request)
    {
        $validation = $request->validate([
            "title" => 'required',
            "description" => 'required',
            "text" => 'required'
        ]);

        $store = new AboutMeContent;
        $store->title = $request->title;
        $store->description = $request->description;
        $store->text = $request->text;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutMeInfos(Request $request)
    {
        $validation = $request->validate([
            "icon" => 'required',
            "title" => 'required',
            "text" => 'required'
        ]);

        $store = new AboutMeInfo;
        $store->icon = $request->icon;
        $store->title = $request->title;
        $store->text = $request->text;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutCounts(Request $request)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "number" => 'integer',
            "description" => 'required'
        ]);

        $store = new AboutCount;
        $store->divColClass = $request->divColClass;
        $store->iClass = $request->iClass;
        $store->number = $request->number;
        $store->description = $request->description;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutSkills(Request $request)
    {
        $validation = $request->validate([
            "skill" => 'required',
            "iValue" => 'required',
            "ariaValue" => 'integer'
        ]);

        $store = new AboutSkill;
        $store->skill = $request->skill;
        $store->iValue = $request->iValue;
        $store->ariaValue = $request->ariaValue;
        $store->save();
        return redirect()->back();
    }
    public function storeAboutInterests(Request $request)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "iColor" => 'required',
            "description" => 'required'
        ]);

        $store = new AboutInterest;
        $store->divColClass = $request->divColClass;
        $store->iClass = $request->iClass;
        $store->iColor = $request->iColor;
        $store->description = $request->description;
        $store->save();
        return redirect()->back();
    }
    public function storeResumeTitles(Request $request)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $store = new ResumeTitle;
        $store->title = $request->title;
        $store->para = $request->para;
        $store->save();
        return redirect()->back();
    }
    public function storeResumeTitles2(Request $request)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $store = new ResumeTitle2;
        $store->title = $request->title;
        $store->save();
        return redirect()->back();
    }
    public function storeResumePresentations(Request $request)
    {
        $validation = $request->validate([
            "name" => 'required',
            "text" => 'required'
        ]);

        $store = new ResumePresentation;
        $store->name = $request->name;
        $store->text = $request->text;
        $store->save();
        return redirect()->back();
    }
    public function storeResumeInfos(Request $request)
    {
        $validation = $request->validate([
            "info" => 'required',
        ]);

        $store = new ResumeInfo;
        $store->info = $request->info;
        $store->save();
        return redirect()->back();
    }
    public function storeResumeEducations(Request $request)
    {
        $validation = $request->validate([
            "title" => 'required',
            "date" => 'required',
            "institution" => 'required',
            "description" => 'required',
        ]);

        $store = new ResumeEducation;
        $store->title = $request->title;
        $store->date = $request->date;
        $store->institution = $request->institution;
        $store->description = $request->description;
        $store->save();
        return redirect()->back();
    }
    public function storeResumeProfessionals(Request $request)
    {
        $validation = $request->validate([
            "title" => 'required',
            "institution" => 'required',
            "task1" => 'required',
            "task2" => 'required',
            "task3" => 'required',
            "task4" => 'required'
        ]);

        $store = new ResumeProfessional;
        $store->title = $request->title;
        $store->date = $request->date;
        $store->institution = $request->institution;
        $store->task1 = $request->task1;
        $store->task2 = $request->task2;
        $store->task3 = $request->task3;
        $store->task4 = $request->task4;
        $store->task5 = $request->task5;
        $store->task6 = $request->task6;
        $store->save();
        return redirect()->back();
    }
    public function storePortfolioTitles(Request $request)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $store = new PortfolioTitle;
        $store->title = $request->title;
        $store->para = $request->para;
        $store->save();
        return redirect()->back();
    }
    public function storePortfolioFilters(Request $request)
    {
        $validation = $request->validate([
            "data" => 'required',
            "name" => 'required'
        ]);

        $store = new PortfolioFilter;
        $store->data = $request->data;
        $store->name = $request->name;
        $store->save();
        return redirect()->back();
    }
    public function storePortfolioDivs(Request $request)
    {
        $validation = $request->validate([
            "filter" => 'required',
            "imgUpload" => 'required',
            //"imgUpload" => 'required|mimes:jpg,jpeg,png,gif',
            "title" => 'required',
            "description" => 'required',
            "a1Title" => 'required',
            "a2href" => 'required',
        ]);

        $path = $request->file('imgUpload')->store('','public');
        $store = new PortfolioDiv;
        $store->filter = $request->filter;
        $store->imgsrc = '/img/work/'.$path;
        $store->title = $request->title;
        $store->description = $request->description;
        $store->a1Title = $request->a1Title;
        $store->a2href = $request->a2href;
        $store->save();
        return redirect()->back()->with(['success'=>'Image uploaded successfully']);
    }
    public function storeContactTitles(Request $request)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $store = new ContactTitle;
        $store->title = $request->title;
        $store->para = $request->para;
        $store->save();
        return redirect()->back();
    }
    public function storeContactCards(Request $request)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "title" => 'required',
        ]);

        $store = new ContactCard;
        $store->divColClass = $request->divColClass;
        $store->iClass = $request->iClass;
        $store->title = $request->title;
        $store->description = $request->description;
        $store->save();
        return redirect()->back();
    }



    ////  SHOW
    public function showNavLinks($id)
    {
        $show = Navlink::find($id);
        return view('backoffice.pages.show.showNavLinks', compact('show'));
    }
    public function showSocialLinks($id)
    {
        $show = SocialLink::find($id);
        return view('backoffice.pages.show.showSocialLinks', compact('show'));
    }
    public function showAboutTitles($id)
    {
        $show = AboutTitle::find($id);
        return view('backoffice.pages.show.showAboutTitles', compact('show'));
    }
    public function showAboutMeImg($id)
    {
        $show = AboutMeImage::find($id);
        return view('backoffice.pages.show.showAboutMeImg', compact('show'));
    }
    public function showAboutMeContents($id)
    {
        $show = AboutMeContent::find($id);
        return view('backoffice.pages.show.showAboutMeContents', compact('show'));
    }
    public function showAboutMeInfos($id)
    {
        $show = AboutMeInfo::find($id);
        return view('backoffice.pages.show.showAboutMeInfos', compact('show'));
    }
    public function showAboutCounts($id)
    {
        $show = AboutCount::find($id);
        return view('backoffice.pages.show.showAboutCounts', compact('show'));
    }
    public function showAboutSkills($id)
    {
        $show = AboutSkill::find($id);
        return view('backoffice.pages.show.showAboutSkills', compact('show'));
    }
    public function showAboutInterests($id)
    {
        $show = AboutInterest::find($id);
        return view('backoffice.pages.show.showAboutInterests', compact('show'));
    }
    public function showResumeTitles($id)
    {
        $show = ResumeTitle::find($id);
        return view('backoffice.pages.show.showResumeTitles', compact('show'));
    }
    public function showResumeTitles2($id)
    {
        $show = ResumeTitle2::find($id);
        return view('backoffice.pages.show.showResumeTitles2', compact('show'));
    }
    public function showResumePresentations($id)
    {
        $show = ResumePresentation::find($id);
        return view('backoffice.pages.show.showResumePresentations', compact('show'));
    }
    public function showResumeInfos($id)
    {
        $show = ResumeInfo::find($id);
        return view('backoffice.pages.show.showResumeInfos', compact('show'));
    }
    public function showResumeEducations($id)
    {
        $show = ResumeEducation::find($id);
        return view('backoffice.pages.show.showResumeEducations', compact('show'));
    }
    public function showResumeProfessionals($id)
    {
        $show = ResumeProfessional::find($id);
        return view('backoffice.pages.show.showResumeProfessionals', compact('show'));
    }
    public function showPortfolioTitles($id)
    {
        $show = PortfolioTitle::find($id);
        return view('backoffice.pages.show.showPortfolioTitles', compact('show'));
    }
    public function showPortfolioFilters($id)
    {
        $show = PortfolioFilter::find($id);
        return view('backoffice.pages.show.showPortfolioFilters', compact('show'));
    }
    public function showPortfolioDivs($id)
    {
        $show = PortfolioDiv::find($id);
        return view('backoffice.pages.show.showPortfolioDivs', compact('show'));
    }
    public function showContactTitles($id)
    {
        $show = ContactTitle::find($id);
        return view('backoffice.pages.show.showContactTitles', compact('show'));
    }
    public function showContactCards($id)
    {
        $show = ContactCard::find($id);
        return view('backoffice.pages.show.showContactCards', compact('show'));
    }



    ////  EDIT
    public function editNavLinks($id)
    {
        $edit = Navlink::find($id);
        return view('backoffice.pages.edit.editNavLinks', compact('edit'));
    }
    public function editSocialLinks($id)
    {
        $edit = SocialLink::find($id);
        return view('backoffice.pages.edit.editSocialLinks', compact('edit'));
    }
    public function editAboutTitles($id)
    {
        $edit = AboutTitle::find($id);
        return view('backoffice.pages.edit.editAboutTitles', compact('edit'));
    }
    public function editAboutMeImg($id)
    {
        $edit = AboutMeImage::find($id);
        return view('backoffice.pages.edit.editAboutMeImg', compact('edit'));
    }
    public function editAboutMeContents($id)
    {
        $edit = AboutMeContent::find($id);
        return view('backoffice.pages.edit.editAboutMeContents', compact('edit'));
    }
    public function editAboutMeInfos($id)
    {
        $edit = AboutMeInfo::find($id);
        return view('backoffice.pages.edit.editAboutMeInfos', compact('edit'));
    }
    public function editAboutCounts($id)
    {
        $edit = AboutCount::find($id);
        return view('backoffice.pages.edit.editAboutCounts', compact('edit'));
    }
    public function editAboutSkills($id)
    {
        $edit = AboutSkill::find($id);
        return view('backoffice.pages.edit.editAboutSkills', compact('edit'));
    }
    public function editAboutInterests($id)
    {
        $edit = AboutInterest::find($id);
        return view('backoffice.pages.edit.editAboutInterests', compact('edit'));
    }
    public function editResumeTitles($id)
    {
        $edit = ResumeTitle::find($id);
        return view('backoffice.pages.edit.editResumeTitles', compact('edit'));
    }
    public function editResumeTitles2($id)
    {
        $edit = ResumeTitle2::find($id);
        return view('backoffice.pages.edit.editResumeTitles2', compact('edit'));
    }
    public function editResumePresentations($id)
    {
        $edit = ResumePresentation::find($id);
        return view('backoffice.pages.edit.editResumePresentations', compact('edit'));
    }
    public function editResumeInfos($id)
    {
        $edit = ResumeInfo::find($id);
        return view('backoffice.pages.edit.editResumeInfos', compact('edit'));
    }
    public function editResumeEducations($id)
    {
        $edit = ResumeEducation::find($id);
        return view('backoffice.pages.edit.editResumeEducations', compact('edit'));
    }
    public function editResumeProfessionals($id)
    {
        $edit = ResumeProfessional::find($id);
        return view('backoffice.pages.edit.editResumeProfessionals', compact('edit'));
    }
    public function editPortfolioTitles($id)
    {
        $edit = PortfolioTitle::find($id);
        return view('backoffice.pages.edit.editPortfolioTitles', compact('edit'));
    }
    public function editPortfolioFilters($id)
    {
        $edit = PortfolioFilter::find($id);
        return view('backoffice.pages.edit.editPortfolioFilters', compact('edit'));
    }
    public function editPortfolioDivs($id)
    {
        $edit = PortfolioDiv::find($id);
        return view('backoffice.pages.edit.editPortfolioDivs', compact('edit'));
    }
    public function editContactTitles($id)
    {
        $edit = ContactTitle::find($id);
        return view('backoffice.pages.edit.editContactTitles', compact('edit'));
    }
    public function editContactCards($id)
    {
        $edit = ContactCard::find($id);
        return view('backoffice.pages.edit.editContactCards', compact('edit'));
    }



    ////  UPDATE
    public function updateNavLinks(Request $request, $id)
    {
        $validation = $request->validate([
            "href" => 'required|min:1|max:40',
            "name" => 'required'
        ]);

        $update = Navlink::find($id);
        $update->href = $request->href;
        $update->name = $request->name;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateSocialLinks(Request $request, $id)
    {
        $validation = $request->validate([
            "href" => 'required|min:1|max:40',
            "aClass" => 'required',
            "iClass" => 'required'
        ]);

        $update = SocialLink::find($id);
        $update->href = $request->href;
        $update->aClass = $request->aClass;
        $update->iClass = $request->iClass;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutTitles(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $update = AboutTitle::find($id);
        $update->title = $request->title;
        $update->para = $request->para;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutMeImg(Request $request, $id)
    {
        $validation = $request->validate([
            "src" => 'required',
        ]);

        $update = AboutMeImage::find($id);
        $update->src = $request->src;
        $update->alt = $request->alt;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutMeContents(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => 'required',
            "description" => 'required',
            "text" => 'required'
        ]);

        $update = AboutMeContent::find($id);
        $update->title = $request->title;
        $update->description = $request->description;
        $update->text = $request->text;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutMeInfos(Request $request, $id)
    {
        $validation = $request->validate([
            "icon" => 'required',
            "title" => 'required',
            "text" => 'required'
        ]);

        $update = AboutMeInfo::find($id);
        $update->icon = $request->icon;
        $update->title = $request->title;
        $update->text = $request->text;
        $update->save();
        return redirect('/backoffice');

    }
    public function updateAboutCounts(Request $request, $id)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "number" => 'integer',
            "description" => 'required'
        ]);

        $update = AboutCount::find($id);
        $update->divColClass = $request->divColClass;
        $update->iClass = $request->iClass;
        $update->number = $request->number;
        $update->description = $request->description;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutSkills(Request $request, $id)
    {
        $validation = $request->validate([
            "skill" => 'required',
            "iValue" => 'required',
            "ariaValue" => 'integer'
        ]);

        $update = AboutSkill::find($id);
        $update->skill = $request->skill;
        $update->iValue = $request->iValue;
        $update->ariaValue = $request->ariaValue;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateAboutInterests(Request $request, $id)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "iColor" => 'required',
            "description" => 'required'
        ]);

        $update = AboutInterest::find($id);
        $update->divColClass = $request->divColClass;
        $update->iClass = $request->iClass;
        $update->iColor = $request->iColor;
        $update->description = $request->description;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateResumeTitles(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $update = ResumeTitle::find($id);
        $update->title = $request->title;
        $update->para = $request->para;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateResumeTitles2(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $update = ResumeTitle2::find($id);
        $update->title = $request->title;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateResumePresentations(Request $request, $id)
    {
        $validation = $request->validate([
            "name" => 'required',
            "text" => 'required'
        ]);
        $update = ResumePresentation::find($id);
        $update->name = $request->name;
        $update->text = $request->text;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateResumeInfos(Request $request, $id)
    {
        $validation = $request->validate([
            "info" => 'required',
        ]);

        $update = ResumeInfo::find($id);
        $update->info = $request->info;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateResumeEducations(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => 'required',
            "date" => 'required',
            "institution" => 'required',
            "description" => 'required',
        ]);

        $update = ResumeEducation::find($id);
        $update->title = $request->title;
        $update->date = $request->date;
        $update->institution = $request->institution;
        $update->description = $request->description;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateResumeProfessionals(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => 'required',
            "institution" => 'required',
            "task1" => 'required',
            "task2" => 'required',
            "task3" => 'required',
            "task4" => 'required'
        ]);

        $update = ResumeProfessional::find($id);
        $update->title = $request->title;
        $update->date = $request->date;
        $update->institution = $request->institution;
        $update->task1 = $request->task1;
        $update->task2 = $request->task2;
        $update->task3 = $request->task3;
        $update->task4 = $request->task4;
        $update->task5 = $request->task5;
        $update->task6 = $request->task6;
        $update->save();
        return redirect('/backoffice');
    }
    public function updatePortfolioTitles(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $update = PortfolioTitle::find($id);
        $update->title = $request->title;
        $update->para = $request->para;
        $update->save();
        return redirect('/backoffice');
    }
    public function updatePortfolioFilters(Request $request, $id)
    {
        $validation = $request->validate([
            "data" => 'required',
            "name" => 'required'
        ]);
        $update = PortfolioFilter::find($id);
        $update->data = $request->data;
        $update->name = $request->name;
        $update->save();
        return redirect('/backoffice');

        $store = new PortfolioFilter;
    }
    public function updatePortfolioDivs(Request $request, $id)
    {
        $validation = $request->validate([
            "filter" => 'required',
            "imgsrc" => 'required',
            "title" => 'required',
            "description" => 'required',
            "a1Title" => 'required',
            "a2href" => 'required',
        ]);

        $update = PortfolioDiv::find($id);
        $update->filter = $request->filter;
        $update->imgsrc = $request->imgsrc;
        $update->title = $request->title;
        $update->description = $request->description;
        $update->a1Title = $request->a1Title;
        $update->a2href = $request->a2href;
        $update->save();
        return redirect('/backoffice');

        $store = new PortfolioFilter;
    }
    public function updateContactTitles(Request $request, $id)
    {
        $validation = $request->validate([
            "title" => 'required',
        ]);

        $update = ContactTitle::find($id);
        $update->title = $request->title;
        $update->para = $request->para;
        $update->save();
        return redirect('/backoffice');
    }
    public function updateContactCards(Request $request, $id)
    {
        $validation = $request->validate([
            "iClass" => 'required',
            "title" => 'required',
        ]);

        $update = ContactCard::find($id);
        $update->divColClass = $request->divColClass;
        $update->iClass = $request->iClass;
        $update->title = $request->title;
        $update->description = $request->description;
        $update->save();
        return redirect('/backoffice');
    }



    ////  DESTROY
    public function destroyNavLinks($id)
    {
        $destroy = Navlink::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroySocialLinks($id)
    {
        $destroy = SocialLink::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutTitles($id)
    {
        $destroy = AboutTitle::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutMeImg($id)
    {
        $destroy = AboutMeImage::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutMeContents($id)
    {
        $destroy = AboutMeContent::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutMeInfos($id)
    {
        $destroy = AboutMeInfo::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutCounts($id)
    {
        $destroy = AboutCount::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutSkills($id)
    {
        $destroy = AboutSkill::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyAboutInterests($id)
    {
        $destroy = AboutInterest::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyResumeTitles($id)
    {
        $destroy = ResumeTitle::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyResumeTitles2($id)
    {
        $destroy = ResumeTitle2::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyResumePresentations($id)
    {
        $destroy = ResumePresentation::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyResumeInfos($id)
    {
        $destroy = ResumeInfo::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyResumeEducations($id)
    {
        $destroy = ResumeEducation::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyResumeProfessionals($id)
    {
        $destroy = ResumeProfessional::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyPortfolioTitles($id)
    {
        $destroy = PortfolioTitle::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyPortfolioFilters($id)
    {
        $destroy = PortfolioFilter::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyPortfolioDivs($id)
    {
        $destroy = PortfolioDiv::find($id);
        if(File::exists(public_path($destroy->imgsrc))){
            File::delete(public_path($destroy->imgsrc));
        }
        $destroy->delete();

        return redirect('/backoffice');
    }
    public function destroyContactTitles($id)
    {
        $destroy = ContactTitle::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }
    public function destroyContactCards($id)
    {
        $destroy = ContactCard::find($id);
        $destroy->delete();
        return redirect('/backoffice');
    }



    //// DESTROYALL
    public function destroyAllNavLinks()
    {
        $destroyALL = Navlink::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllSocialLinks()
    {
        $destroyALL = SocialLink::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutTitles()
    {
        $destroyALL = AboutTitle::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutMeImg()
    {
        $destroyALL = AboutMeImage::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutMeContents()
    {
        $destroyALL = AboutMeContent::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutMeInfos()
    {
        $destroyALL = AboutMeInfo::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutCounts()
    {
        $destroyALL = AboutCount::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutSkills()
    {
        $destroyALL = AboutSkill::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllAboutInterests()
    {
        $destroyALL = AboutInterest::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllResumeTitles()
    {
        $destroyALL = ResumeTitle::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllResumeTitles2()
    {
        $destroyALL = ResumeTitle2::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllResumePresentations()
    {
        $destroyALL = ResumePresentation::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllResumeInfos()
    {
        $destroyALL = ResumeInfo::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllResumeEducations()
    {
        $destroyALL = ResumeEducation::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllResumeProfessionals()
    {
        $destroyALL = ResumeProfessional::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllPortfolioTitles()
    {
        $destroyALL = PortfolioTitle::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllPortfolioFilters()
    {
        $destroyALL = PortfolioFilter::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllPortfolioDivs()
    {
        $destroyALL = PortfolioDiv::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllContactTitles()
    {
        $destroyALL = ContactTitle::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }
    public function destroyAllContactCards()
    {
        $destroyALL = ContactCard::all();
        foreach ($destroyALL as $destroy) {
            $destroy->delete();
        };
        return redirect('/backoffice');
    }

}
