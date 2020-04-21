<?php
/**
 * Howdy display Card controller
 *
 * @author David Lumm <david.lumm@twinklebob.co.uk>
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Controller for dashboard cards
 */
class CardController extends Controller
{
    /**
     * Generate card with the Day today
     *
     * @return View
     */
    public function today()
    {
        $data = [
            'colour' => 'orange',
            'title' => 'Today is:',
            'content' => '<p id="day"></p>'
        ];

        return view('cards.card', $data);
    }
}
