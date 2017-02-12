<?php

namespace App\Http\Controllers\Wedding;

use App\Models\WeddingParty;
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
        $party = WeddingParty::all();

        return view('app.wedding-party', ['party' => $party]);
    }
}
