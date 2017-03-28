<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use League\Flysystem\Exception;

class MailController extends Controller
{
    public function verifyMail()
    {
        $inputs = Input::all();
        try {
            if ($inputs['url'] === null && strpos($inputs['email'], '@') === false) {
                $this->sendMail();
            } else {
                throw new Exception('no valid');
            }

        } catch (Exception $exception) {
            return redirect('/');
        }
    }

    public function sendMail()
    {
        return redirect('/');
    }
}
