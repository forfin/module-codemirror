<?php

namespace Swissup\Codemirror\Block\Adminhtml\System\Config\Form\Field;

class Less extends Css
{
    /**
     * {@inheritdoc}
     */
    public function getMode()
    {
        return 'text/x-less';
    }
}