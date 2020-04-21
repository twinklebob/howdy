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
        $date = new \DateTime();

        $data = [
            'colour' => 'orange',
            'title' => 'Today is:',
            'content' => '<p>' . $date->format('l')  . '</p>'
        ];

        return view('cards.card', $data);
    }

    /**
     * Generate card with today's date
     *
     * @return View
     */
    public function date()
    {
        $date = new \DateTime();

        $data = [
            'colour' => 'blue',
            'title' => "It's the",
            'content' => '<p>' . $date->format('jS \of F, Y') . '</p>'
        ];

        return view('cards.card', $data);
    }
}
