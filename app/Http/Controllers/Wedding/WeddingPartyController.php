<?php

namespace App\Http\Controllers\Wedding;

use App\Wedding\Party;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\Routing\ResponseFactory;

class WeddingPartyController extends Controller
{
    /**
     * @var ResponseFactory
     */
    private $response;

    public function __construct(ResponseFactory $response)
    {
        $this->response = $response;
    }

    public function index()
    {
        return view('app.wedding-party');
    }

    public function party()
    {
        $party = Party::all();

        return $party;
    }
}
