<?php
/**
 * Created by PhpStorm.
 * User: Tomeu
 * Date: 12/22/2015
 * Time: 1:25 AM
 */

namespace hotelbeds\hotel_api_sdk\messages;

use hotelbeds\hotel_api_sdk\types\ApiUri;
use Zend\Http\Request;

/**
 * Class BookingCancellationRQ
 * @package hotelbeds\hotel_api_sdk\messages
 */
class BookingCancellationRQ extends ApiRequest
{
    /**
     * BookingCancellationRQ constructor.
     * @param ApiUri $baseUri
     * @param array $data
     */
    public function __construct(ApiUri $baseUri, $data)
    {
        parent::__construct($baseUri, self::BOOKING);
        $this->request->setMethod(Request::METHOD_DELETE);
        $this->baseUri->setPath($baseUri->getPath()."/".self::BOOKING."/".$data['bookingId']);
        if(array_key_exists('cancellationFlag',$data)){
		$this->baseUri->setQuery('cancellationFlag='.$data['cancellationFlag']);
	}
    }
}
