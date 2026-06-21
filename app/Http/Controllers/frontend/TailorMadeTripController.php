<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Region;
use App\Models\Banner;
use App\Models\OtherPage;

class TailorMadeTripController extends Controller
{
    public function tailormadetrip(){
        $regions = Region::where('status','Active')->get();
        $banner = Banner::where('name','LIKE','%tailor%')->first();
        $pageType = 'tailor-made-trip';
        $otherPage = OtherPage::where('page_type', $pageType)->first();

        $pageTitle = $otherPage->meta_title ?? "Voyage sur mesure en Inde | Rajasthan, Inde du Nord & Sud";
        $pageDescription = $otherPage->meta_description ?? "Voyage sur mesure en Inde avec Poonam Voyage Inde : circuits personnalisés au Rajasthan, en Inde du Nord et en Inde du Sud.";
        $pageKeywords = $otherPage->meta_keywords ?? "voyage sur mesure en Inde,  Voyage en Inde,  voyage sur mesure au Rajasthan,  voyage sur mesure en Inde du Nord,  voyage sur mesure en Inde du Sud";
        $schema = $otherPage->c_schema ?? " ";
        $faq = $otherPage->faq ?? null;

        return view('frontend.tailor-made-trip', compact(
            'regions',
            'banner',
            'pageTitle',
            'pageDescription',
            'pageKeywords',
            'schema',
            'faq'
        ));
    }
}
