<?php

namespace hotelbeds\hotel_api_sdk\model;

class Filter extends ApiModel
{
    public function __construct()
    {
        $this->validFields = [ 
			"minRate" => "double",
			"maxRate" => "double",
			"maxRooms" => "integer",
			"maxRatesPerRoom" => "integer",
			"packaging" => "boolean",
			"minCategory" => "integer",
			"maxCategory" => "integer",
			"paymentType" => "string",
		];
		

    }
}