<?php

namespace Encore\Admin\Form\Field;

class Year extends Date
{
    protected $format = 'YYYY';

    protected $view = 'admin::form.date';
}
