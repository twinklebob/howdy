<?php
/**
 * Main Howdy controller
 *
 * @author David Lumm <david.lumm@twinklebob.co.uk>
 */

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

/**
 * Main Howdy Controller for dashboard screen
 */
class HowdyController extends Controller
{
    /**
     * Display main Howdy dashboard
     *
     * @return View
     */
    public function display()
    {
        $cardController = new CardController();

        $cards = [
            $cardController->today()
        ];

        return view('howdy', ['cards' => $cards]);
    }
}
