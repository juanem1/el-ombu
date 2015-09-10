<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Gallery;
use App\Repositories\ComplexRepository;
use App\Repositories\ProductsRepository;
use App\Repositories\OffersRepository;
use App\Styles;

class StaticsController extends Controller {

    /**
     * @return \Illuminate\View\View
     */
	public function ficha()
	{
        return view('statics.ficha-tecnica');
	}

    /**
     * @return \Illuminate\View\View
     */
	public function vivienda()
	{
        return view('statics.vivienda');
	}

    /**
     * @return \Illuminate\View\View
     */
	public function empresa()
	{
        return view('statics.la-empresa');
	}

    /**
     * @return \Illuminate\View\View
     */
    public function formasDePago()
    {
        return view('statics.formas-de-pagos');
    }

    /**
     * Show one gallery by its slug
     * @param $slug
     * @return \Illuminate\View\View
     */
    public function viewGallery($slug)
    {
        $gallery = Gallery::whereSlug($slug)->first();
        return view('gallery.view', compact('gallery'));
    }

    /**
     * Show all products
     * @param $repo
     * @return View
     */
    public function showAllProducts(ProductsRepository $repo)
    {
        $products = $repo->all();
        return view('products.showAll', compact('products'));
    }

    /**
     * Show all available offers
     * @param $repo
     * @return View
     */
    public function showAllOffers(OffersRepository $repo)
    {
        $offers = $repo->all();
        return view('offers.showAll', compact('offers'));
    }

    /**
     * Show one offer by its slug
     * @param $slug String
     * @param $repo OffersRepository
     * @return View
     */
    public function viewOffer($slug, OffersRepository $repo)
    {
        $offer = $repo->view($slug);
        return view('offers.view', compact('offer'));
    }

    /**
     * Display the specified complex by its slug
     *
     * @param  $slug String
     * @param  $repo ComplexRepository
     * @return Response
     */
    public function viewComplex($slug, ComplexRepository $repo)
    {
        $params = $repo->view($slug);
        return view('complex.view', $params);
    }

    /**
     * Show the list of offers with one style
     * @param $slug
     * @param $repo
     * @return \Illuminate\View\View
     */
    public function styles($slug, ProductsRepository $repo)
    {
        $style = Styles::whereSlug($slug)->first();

        if ($style === null) {
            abort(404);
        }

        $products = $repo->fromStyle($style->id);
        $title = $style->name;

        return view('styles.showAll', compact('title', 'products'));
    }
}
