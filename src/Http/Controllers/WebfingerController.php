<?php
    namespace Bearlovescode\Webfinger\Http\Controllers;

    use Illuminate\Support\Facades\Response;

    class WebfingerController
    {
        public function __invoke()
        {
            return Response::json(['success' => true]);
        }
    }