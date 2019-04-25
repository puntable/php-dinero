<?php

namespace LasseRafn\Dinero\Requests;

use LasseRafn\Dinero\Builders\Builder;
use LasseRafn\Dinero\Utils\RequestBuilder;

class InvoiceBookRequestBuilder extends RequestBuilder
{
	public function __construct( Builder $builder ) {
		$this->parameters['fields'] = 'Guid';

		parent::__construct( $builder );
	}
}
