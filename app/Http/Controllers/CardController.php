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

    /**
     * Generate card with the current season
     *
     * @return View
     */
    public function season()
    {
        $data = ['title' => "The season is:"];

        $today = new \DateTime();

        $spring = new \DateTime('March 20');
        $summer = new \DateTime('June 20');
        $fall = new \DateTime('September 22');
        $winter = new \DateTime('December 21');

        if ($today >= $spring && $today < $summer) {
            $data['content'] = '<p>🐣 Spring</p>';
            $data['colour'] = 'green';
        } elseif ($today >= $summer && $today < $fall) {
            $data['content'] = '<p>🌞 Summer</p>';
            $data['colour'] = 'orange';
        } elseif ($today >= $fall && $today < $winter) {
            $data['content'] = '<p>🍂 Autumn<p>';
            $data['colour'] = 'red';
        } else {
            $data['content'] = '<p>☃️ Winter</p>';
            $data['colour'] = 'blue';
        }

        return view('cards.card', $data);
    }
}
