<?php namespace LasseRafn\Dinero\Builders;

use LasseRafn\Dinero\Models\InvoiceBook;
use LasseRafn\Dinero\Utils\Request;

class InvoiceBookBuilder extends Builder
{
    protected $entity         = 'invoices';
    protected $model          = InvoiceBook::class;
    protected $collectionName = 'Invoices';

    public function __construct(Request $request, $entity)
    {
        $this->entity = $entity;
        parent::__construct($request);
    }
}
