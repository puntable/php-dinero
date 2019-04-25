<?php

namespace LasseRafn\Dinero\Models;

use LasseRafn\Dinero\Builders\InvoiceBookBuilder;
use LasseRafn\Dinero\Requests\InvoiceBookRequestBuilder;
use LasseRafn\Dinero\Utils\Model;

class InvoiceBook extends Model
{
	protected $entity     = 'invoices';
	protected $primaryKey = 'Guid';

	public $Guid;
	public $Timestamp;
}
