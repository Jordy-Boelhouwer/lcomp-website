<?php

namespace App\Validators;

use GuzzleHttp\Client;

class ReCaptcha
{

    // Validate Recaptcha
    /**
     * @param $attribute
     * @param $value
     * @param $parameters
     * @param $validator
     * @return mixed
     */
    public function validate(
        $attribute,
        $value,
        $parameters,
        $validator
    ){
        $recaptchaClient = new Client();
        $body = json_decode(
            (string)self::verifyRecaptcha($recaptchaClient, $value)->getBody()
        );
        return $body->success;
    }

    /**
     * @param Client $recaptchaClient
     * @param $value
     * @return mixed
     * Send the Recaptcha data to google and verify it
     */
    private function verifyRecaptcha($recaptchaClient, $value) {
        $response = $recaptchaClient->post(
            'https://www.google.com/recaptcha/api/siteverify',
            ['form_params'=>
                [
                    'secret'=>env('GOOGLE_RECAPTCHA_SECRET'),
                    'response'=>$value
                ]
            ]
        );
        return $response;
    }
}